<?php

// src/BlogBundle/Form/CommentType.php

namespace BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array('label' => 'Nombre'))
                ->add('comment', 'textarea', array('label' => 'Comentario'))
        ;
    }

    public function getName() {
        return 'blogbundle_commenttype';
    }

}
