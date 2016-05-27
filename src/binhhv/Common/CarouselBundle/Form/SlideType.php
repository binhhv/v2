<?php

namespace binhhv\Common\CarouselBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class SlideType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', VichFileType::class, array(
        'required'      => false,
        'allow_delete'  => true, // not mandatory, default is true
        'download_link' => true, // not mandatory, default is true
    ))
            ->add('textH2')
            ->add('textH4')
            ->add('link')
            ->add('enabled')
            ->add('startDate',DatetimeType::class)
            ->add('endDate',DatetimeType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'binhhv\Common\CarouselBundle\Entity\Slide'
        ));
    }
}
