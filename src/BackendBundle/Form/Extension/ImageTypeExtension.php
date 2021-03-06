<?php

// src/AppBundle/Form/Extension/ImageTypeExtension.php

namespace BackendBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ImageTypeExtension extends AbstractTypeExtension {

    public function getExtendedType() {
        return FileType::class;
    }

    public function configureOptions(OptionsResolver $resolver) {
        // makes it legal for FileType fields to have an image_property option
        $resolver->setDefined(array('src'));
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        if (isset($options['src'])) {
            // this will be whatever class/entity is bound to your form (e.g. Media)
            $parentData = $form->getParent()->getData();

            $imageUrl = null;
            if (null !== $parentData) {
                $accessor = PropertyAccess::createPropertyAccessor();
                $imageUrl = $accessor->getValue($parentData, $options['src']);
            }

            // sets an "image_url" variable that will be available when rendering this field
            $view->vars['image_url'] = $imageUrl;
        }
    }

}
