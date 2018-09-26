<?php

// src/BlogBundle/Form/EnquiryType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class EnquiryType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class, array(
            'label' => 'Nombre'
        ));
        $builder->add('phone', NumberType::class, array(
            'label' => 'Teléfono/móvil',
            'required' => false
        ));
        $builder->add('email', EmailType::class, array(
            'label' => 'E-mail'
        ));
        $builder->add('subject', TextType::class, array(
            'label' => 'asunto',
            'required' => false,
        ));
        $builder->add('body', TextareaType::class, array(
            'label' => 'Mensaje'
        ));
        $builder->add('compliance', CheckboxType::class, array(
            'required' => true,
            'mapped' => false
        ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Enquiry',
        ));
    }

}
