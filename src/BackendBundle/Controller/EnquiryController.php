<?php

namespace BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Paginador;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class EnquiryController extends Controller {

    public function listAction(Request $request, $page = 1) {
        $em = $this->getDoctrine()->getManager();

        $enquiries = $em->getRepository('AppBundle:Enquiry')->getLatestEnquiries($page);

        $paginador = new Paginador($enquiries['total_pages'], $enquiries['current_page']);

        return $this->render('BackendBundle:Enquiry:index.html.twig', array(
                    'enquiries' => $enquiries['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function showAction(Request $request, $id = 0) {
        $em = $this->getDoctrine()->getManager();

        $enquiry = $em->getRepository('AppBundle:Enquiry')->findOneBy(array('id' => $id));

        if (!$enquiry) {
            throw $this->createNotFoundException('No se ha encontrado la consulta.');
        } else {

            return $this->render('BackendBundle:Enquiry:show.html.twig', array(
                        'enquiry' => $enquiry,
            ));
        }
    }

    public function removeAction(Request $request, $id = 0) {
        $em = $this->getDoctrine()->getManager();

        $enquiry = $em->getRepository('AppBundle:Enquiry')->findOneBy(array('id' => $id));

        if (!$enquiry) {
            throw $this->createNotFoundException('No se ha encontrado la consulta.');
        }
        
        $request->getSession()
                        ->getFlashBag()
                        ->add('success', "Consulta eliminada con éxito.");

        $em->remove($enquiry);
        $em->flush();

        return $this->redirect($this->generateUrl('backend_enquiries', array('page' => 1)));
    }

    public function excelAction(Request $request) {
        // First, find the asked budget
        $em = $this->getDoctrine()->getManager();

        $enquiries = $em->getRepository('AppBundle:Enquiry')->findAll();

        if (!$enquiries) {
            throw $this->createNotFoundException('No se han encontrado consultas');
        }

        $allBordersStyle = array(
            'alignment' => array(
                'vertical' => \PHPExcel_Style_Alignment::VERTICAL_TOP,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('rgb' => '000000')
        )));

        $alter = array(
            'fill' => array(
                'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'EEEEEE')
        ));

        $objReader = \PHPExcel_IOFactory::createReader('Excel2007');
        $phpExcelObject = $objReader->load("bundles/backend/xls/plantilla.xlsx");

        $phpExcelObject->setActiveSheetIndex(0);

        $pos = 1;

        foreach ($enquiries as $enquiry) {
            $pos += 1;
            if ($pos % 2 === 1) {
                $phpExcelObject->getActiveSheet()->getStyle('A' . $pos . ':E' . $pos)->applyFromArray($alter);
            }
            $name = $enquiry->getName();
            $email = $enquiry->getEmail();
            $body = $enquiry->getBody();
            $phone = str_replace(" ", "", $enquiry->getPhone());
            $sent = $enquiry->getSent()->format('d-m-Y');

            $phpExcelObject->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_TOP);
            $phpExcelObject->setActiveSheetIndex()->setCellValue('A' . $pos, $sent);
            $phpExcelObject->setActiveSheetIndex()->setCellValue('B' . $pos, $name);
            $phpExcelObject->setActiveSheetIndex()->setCellValue('C' . $pos, $phone);
            $phpExcelObject->setActiveSheetIndex()->setCellValue('D' . $pos, $email);
            $phpExcelObject->setActiveSheetIndex()->getStyle('D' . $pos)->getAlignment()->setWrapText(true);
            $phpExcelObject->setActiveSheetIndex()->setCellValue('E' . $pos, $body);
            //$phpExcelObject->getActiveSheet()->getRowDimension($pos)->setRowHeight(ceil(strlen($body) / 50) * 13);
            $phpExcelObject->setActiveSheetIndex()->getStyle('E' . $pos)->getAlignment()->setWrapText(true);
        }

        $phpExcelObject->getActiveSheet()->getStyle('A1:E' . $pos)->applyFromArray($allBordersStyle);

        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers

        $dateNow = new \DateTime();
        $dispositionHeader = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'Consultas(' . date_format($dateNow, 'd-m-Y') . ').xlsx');

        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

}
