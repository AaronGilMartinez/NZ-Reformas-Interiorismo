<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ImageType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('file', FileType::class, array(
                    'label' => 'Archivo',
                    'src' => 'src',
                    'data_class' => null,
                    'attr' => array('onchange' => 'readURL(this)')
                ))
                ->add('path', HiddenType::class)
                ->add('title', TextType::class, array(
                    'label' => 'Title',
                    'required' => false
                ))
                ->add('alt', TextType::class, array(
                    'label' => 'Alt',
                    'required' => false
                ))
                ->add('description', TextareaType::class, array(
                    'label' => 'Descripción',
                    'required' => false
        ));
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Image',
        ));
    }

}
