<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class GalleryType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('uploaded', DateType::class, array(
                    'label' => 'Subida'
                ))
                ->add('name', TextType::class, array(
                    'label' => 'Nombre'
                ))
                ->add('slug', TextType::class, array(
                    'label' => 'Slug (auto-generado)',
                    'required' => false
                ))
                ->add('description', TextareaType::class, array(
                    'label' => 'Descripción',
                    'required' => false
                ))
                ->add('content', TextareaType::class, array(
                    'label' => 'Contenido',
                    'required' => false
                ))
                ->add('image', ImageType::class, array(
                    'label' => 'Imagen',
                    'required' => false
                ))
                ->add('project', EntityType::class, array(
                    'class' => 'AppBundle:Project',
                    'label' => 'Proyecto',
                    'expanded' => false,
                    'multiple' => false
                ))
                ->add('images', CollectionType::class, array(
                    'required' => false,
                    'entry_type' => ImageType::class,
                    'prototype_name' => '__image__',
                    'label' => 'Imágenes',
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Gallery',
        ));
    }

    public function getName() {
        return 'appbundle_gallerytype';
    }

}
