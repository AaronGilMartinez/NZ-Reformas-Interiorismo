<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Paginador;
use BackendBundle\Form\GalleryType;
use AppBundle\Entity\Gallery;
use Doctrine\Common\Collections\ArrayCollection;

class GalleryController extends Controller {

    public function listAction(Request $request, $page = 1) {

        $em = $this->getDoctrine()->getManager();

        $galleries = $em->getRepository('AppBundle:Gallery')->getGalleriesByDateProject($page);

        $paginador = new Paginador($galleries['total_pages'], $galleries['current_page']);

        return $this->render('BackendBundle:Gallery:index.html.twig', array(
                    'galleries' => $galleries['paginated'],
                    'paginador' => $paginador,
        ));
    }

    public function newAction(Request $request) {
        $util = $this->get('AppBundle\Service\Util');
        $gallery = new Gallery();
        $formulario = $this->createForm(GalleryType::class, $gallery, array(
            'action' => $this->generateUrl('backend_gallery_new')));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $slug = $gallery->getSlug() ? $util->slugify($gallery->getSlug()) : $util->slugify($gallery->getName());
            $path = $gallery->getProject()->getPath() . $slug . '/';
            $gallery->setSlug($slug);
            $gallery->setPath($path);
            if (!file_exists($path)) {
                mkdir($this->get('kernel')->getRootDir() . '/../web/' . $path . '/', 0777, true);
            }

            $galleryImage = $gallery->getImage();
            if ($galleryImage) {
                $galleryImage->setFormat(1);
                $galleryImage->setPath($path);
            }

            foreach ($gallery->getImages() as $image) {
                $image->setFormat(2);
                $image->setPath($path);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($gallery);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Galería creada con exito.");

            return $this->redirect($this->generateUrl('backend_gallery_show', array('id' => $gallery->getId())));
        }

        return $this->render('BackendBundle:Gallery:new.html.twig', array(
                    'formulario' => $formulario->createView()));
    }

    public function showAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();

        $gallery = $em->getRepository('AppBundle:Gallery')->find($id);

        if (!$gallery) {
            throw $this->createNotFoundException('No se ha encontrado la galería');
        }

        return $this->render('BackendBundle:Gallery:show.html.twig', array(
                    'gallery' => $gallery));
    }

    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $util = $this->get('AppBundle\Service\Util');

        $gallery = $em->getRepository('AppBundle:Gallery')->find($id);

        if (!$gallery) {
            throw $this->createNotFoundException('No se ha encontrado el proyecto');
        }

        if ($gallery->getImage()) {
            $galleryOldImage = clone $gallery->getImage();
        }

        $oldImages = new ArrayCollection();
        foreach ($gallery->getImages() as $image) {
            $oldImages->add(clone $image);
        }

        $formulario = $this->createForm(GalleryType::class, $gallery, array(
            'action' => $this->generateUrl('backend_gallery_edit', array('id' => $id))));

        $formulario->handleRequest($request);

        if ($formulario->isSubmitted()) {
            $path = $gallery->getPath();
            $galleryImage = $gallery->getImage();

            if ($galleryImage) {
                $file = $galleryImage->getFile();
                if ($file) {
                    $galleryImage->setFormat(1);
                    $galleryImage->setFile($file);
                    $galleryImage->setPath($path);
                    if ($galleryOldImage) {
                        $util->delete(($this->get('kernel')->getRootDir() . '/../web/' . $galleryOldImage->getSrc()));
                    }
                } else {
                    $galleryImage->setFile($galleryOldImage->getFile());
                }
            } else {
                $galleryImage->setFile($galleryOldImage->getFile());
            }

            foreach ($oldImages as $oldImage) {
                $borrada = true;
                foreach ($gallery->getImages() as $imageGallery) {
                    if ($oldImage->getId() === $imageGallery->getId()) {
                        $file = $imageGallery->getFile();
                        if (!$file) {
                            $imageGallery->setFile($oldImage->getFile());
                            $borrada = false;
                        } else {
                            $imageGallery->setFile($file);
                            $imageGallery->setPath($path);
                            $imageGallery->setFormat(2);
                        }
                        break;
                    }
                }
                if ($borrada) {
                    $util->delete($this->get('kernel')->getRootDir() . '/../web/' . $oldImage);
                    $util->delete($this->get('kernel')->getRootDir() . '/../web/' . $oldImage->getThumb());
                }
            }
            
            print "Segundo for de comprobación <br>";
            foreach ($gallery->getImages() as $imageGallery) {
                $file = $imageGallery->getFile();
                print "Imagen " . $imageGallery . "<br>";
                if ($file) {
                    $imageGallery->setPath($path);
                    $imageGallery->setFile($file);
                }
            }

            $em->persist($gallery);
            $em->flush();

            $request->getSession()
                    ->getFlashBag()
                    ->add('success', "Galería editada con exito.");

            return $this->redirect($this->generateUrl('backend_galleries', array('page' => 1)));
        }

        return $this->render('BackendBundle:Gallery:edit.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'gallery' => $gallery));
    }

    public function removeAction(Request $request, $id) {
        $util = $this->get('AppBundle\Service\Util');
        $em = $this->getDoctrine()->getManager();

        $gallery = $em->getRepository('AppBundle:Gallery')->find($id);

        if (!$gallery) {
            throw $this->createNotFoundException('No se ha encontrado el proyecto');
        }

        $path = $this->get('kernel')->getRootDir() . '/../web/' . $gallery->getPath();
        $util->delete($path);

        $em->remove($gallery);
        $em->flush();

        $request->getSession()
                ->getFlashBag()
                ->add('success', "Galería eliminada con exito.");

        return $this->redirect($this->generateUrl('backend_galleries', array('page' => 1)));
    }

}
