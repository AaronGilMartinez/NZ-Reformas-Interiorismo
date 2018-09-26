<?php

namespace BackendBundle\Listener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Entity\Image;
use BackendBundle\Service\FileUploader;

class ImageUploadListener {

    private $uploader;

    public function __construct(FileUploader $uploader) {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args) {
        $entity = $args->getEntity();
        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args) {
        $entity = $args->getEntity();
        $this->uploadFile($entity);
    }

    private function uploadFile($entity) {
        if ($entity instanceof Image) {
            $file = $entity->getFile();
            $path = $entity->getPath();
            $format = $entity->getFormat();
            if ($file instanceof UploadedFile) {
                $fileName = $this->uploader->uploadImage($path, $file, $format);
                $entity->setFile($fileName);
            }
        }
    }

}
