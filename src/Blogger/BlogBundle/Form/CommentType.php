<?php

// src/Blogger/BlogBundle/Form/CommentType.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('user')
                ->add('comment')
        ;
    }

    public function getName() {
        return 'blogger_blogbundle_commenttype';
    }

}
