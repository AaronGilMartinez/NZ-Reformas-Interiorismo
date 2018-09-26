<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class EditUserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('roles', ChoiceType::class, array(
                    'label' => 'Rol',
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => array(
                        'ROLE_ADMIN' => 'Administrador',
                        'ROLE_USER' => 'Usuario')
                ))
                ->add('username', TextType::class, array(
                    'label' => 'Nombre'
                ))
                ->add('password', RepeatedType::class, array(
                    'required' => false,
                    'type' => PasswordType::class,
                    'invalid_message' => 'Las contraseñas tienen que coincidir.',
                    'first_options' => array('label' => 'Contraseña'),
                    'second_options' => array('label' => 'Repetir contraseña'),
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'E-Mail'
                ))
                ->add('guardar', SubmitType::class)
        ;
    }

   public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\User',
        ));
    }
    
    public function getName() {
        return 'backendbundle_editusertype';
    }

}
