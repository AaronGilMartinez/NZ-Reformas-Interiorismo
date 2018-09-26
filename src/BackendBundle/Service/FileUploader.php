<?php

namespace BackendBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader {

    private $targetDir;
    private $rootDir;
    private $util;

    public function __construct($rootDir, $util) {
        $this->rootDir = $rootDir;
        $this->util = $util;
    }

    public function uploadImage($targetDir, UploadedFile $file, $format = 3) {
        $n = 1;
        $fileName = $file->getClientOriginalName();
        $this->setTargetDir($targetDir);
        $path = $this->getRootDir() . $this->getTargetDir();
        $name = explode('.', $fileName);
        $tempFileName = $file->getPath() . "\\" . $file->getFilename();

        while (file_exists($path . $fileName)) {
            $n++;
            $fileName = $this->getUtil()->slugify($name[0]) . '-' . $n . '.' . $this->getUtil()->slugify($name[1]);
        }

        //$icon = new \Imagick($this->getRootDir() . 'bundles/app/images/icon/nz-reformas-blanco.png');
        $original = new \Imagick($tempFileName);
        $new = clone $original;

        switch ($format) {
            /* Imagen de Proyecto y Galería */
            case 1:
//                $width = $original->getImageWidth();
//                $height = $original->getImageHeight();
//
//                if ($width > $height) {
//                    $posX = ($width - $height) / 2;
//                    $posY = 0;
//                    $new->cropImage($height, $height, $posX, $posY);
//                } elseif ($width < $height) {
//                    $posX = 0;
//                    $posY = ($height - $width) / 2;
//                    $new->cropImage($width, $width, $posX, $posY);
//                    
//                }
//                $new->thumbnailImage(300, 300, true);
//                $new->setImageCompressionQuality(75);
                $new->writeImage($path . $fileName);
                break;
            /* Imagenes de articulo */
            case 2:
                //$new->thumbnailImage(1200, 1200, true);
                //$icon->thumbnailImage($new->getImageWidth() * 0.1, $new->getImageWidth() * 0.1, true);
                //$icon->evaluateImage(\Imagick::EVALUATE_MULTIPLY, 3 / 4, \Imagick::CHANNEL_ALPHA);
                //$new->compositeImage($icon, \imagick::COMPOSITE_OVER, $new->getImageWidth() - $icon->getImageWidth(), $new->getImageHeight() - $icon->getImageHeight());
                //$new->setImageCompressionQuality(80);
                $new->writeImage($path . $fileName);
                $thumb = clone $original;
                $thumb->thumbnailImage(200, 200, true);
                $thumbName = explode('.', $fileName)[0] . '-thumb.' . explode('.', $fileName)[1];
                //$thumb->setImageCompressionQuality(80);
                $thumb->writeImage($path . $thumbName);
                $thumb->clear();
                break;
            // Imagenes de galería con miniatura
            case 3:
//                $new->thumbnailImage(1000, 1000, true);
//                $new->setImageCompressionQuality(75);
                $new->writeImage($path . $fileName);
                break;
        }
        $original->clear();
        $new->clear();

        return $fileName;
    }

    private function setTargetDir($target) {
        $this->targetDir = $target;
    }

    private function getTargetDir() {
        return $this->targetDir;
    }

    private function getRootDir() {
        return $this->rootDir;
    }

    private function getUtil() {
        return $this->util;
    }

}
