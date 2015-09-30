<?php

// src/BlogBundle/Form/SearchType.php

namespace BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array('label' => 'Nombre'));
    }

    public function getName() {
        return 'blogbundle_commenttype';
    }

}