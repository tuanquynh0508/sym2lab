<?php

namespace Lab\FormtestBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Form type for phone number.
 *
 * @package LabFormtestBundle
 * @author Nguyen Nhu Tuan
 */
class PhoneNumberFormType extends AbstractType
{

    /**
     * Builds form.
     *
     * @param FormBuilderInterface $builder The builder.
     * @param array                $options The array options.
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class)
                ->add('code', TextType::class)
                ->add('phoneNumber', TextType::class);
    }

    /**
     * Returns the name of the form type.
     *
     * @return string The form's name
     */
    public function getName()
    {
        return 'phone_number';
    }

    /**
     * Sets options as model for current form type.
     *
     * @param OptionsResolverInterface $resolver The resolver instance.
     *
     * @return void
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array('data_class' => 'Lab\FormtestBundle\Form\Model\PhoneNumber')
        );
    }
}
