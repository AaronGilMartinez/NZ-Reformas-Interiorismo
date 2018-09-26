<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjectType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre'
                ))
                ->add('slug', TextType::class, array(
                    'label' => 'Slug (auto-generado)',
                    'required' => false
                ))
                ->add('introduction', TextareaType::class, array(
                    'label' => 'Introducción',
                    'required' => false
                ))
                ->add('content', TextareaType::class, array(
                    'label' => 'Contenido',
                    'required' => false
                ))
                ->add('description', TextareaType::class, array(
                    'label' => 'Descripción',
                    'required' => false
                ))
                ->add('image', ImageType::class, array(
                    'label' => 'Imagen',
                    'required' => false
                ))
                ;
    }
    
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Project',
        ));
    }

    public function getName() {
        return 'backendbundle_projecttype';
    }

}
