<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class TagType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre'
                ))
                ->add('slug', TextType::class, array(
                    'label' => 'Slug auto si se deja en blanco',
                    'required' => false
                ))
                ->add('title', TextType::class, array(
                    'label' => 'Title',
                    'required' => false
                ))
                ->add('description', TextareaType::class, array(
                    'label' => 'Description',
                    'required' => false
                ));
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Tag',
        ));
    }

    public function getName() {
        return 'backendbundle_tagtype';
    }

}
