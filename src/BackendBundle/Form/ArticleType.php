<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Nombre'
                ))
                ->add('slug', TextType::class, array(
                    'label' => 'Slug (auto-generado)',
                    'required' => false
                ))
                ->add('title', TextType::class, array(
                    'label' => 'Title',
                    'required' => false
                ))
                ->add('description', TextareaType::class, array(
                    'label' => 'Description',
                    'required' => false
                ))
                ->add('article', TextareaType::class, array(
                    'label' => 'Artículo',
                ))
                ->add('image', ImageType::class, array(
                    'required' => false
                ))
                ->add('category', EntityType::class, array(
                    'class' => 'BlogBundle:Category',
                    'label' => 'Categoría',
                    'expanded' => false,
                    'multiple' => false
                ))
                ->add('tags', EntityType::class, array(
                    'label' => 'Etiquetas',
                    'class' => 'BlogBundle:Tag',
                    'expanded' => true,
                    'multiple' => true
        ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Article',
        ));
    }

    public function getName() {
        return 'backendbundle_articletype';
    }

}
