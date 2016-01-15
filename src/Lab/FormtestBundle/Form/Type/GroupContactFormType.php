<?php

namespace Lab\FormtestBundle\Form\Type;

use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Form type for phone number.
 *
 * @package LabFormtestBundle\Form\Type
 * @author Nguyen Nhu Tuan
 */
class GroupContactFormType extends AbstractType
{
    /**
     * @var FormTypeInterface
     */
    private $phoneNumberFormType;

    public function __construct(FormTypeInterface $phoneNumberFormType)
    {
        $this->phoneNumberFormType = $phoneNumberFormType;
    }

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
        $builder->add('title', TextType::class)
                ->add('listPhoneNumbers', 'collection', array('type' => $this->phoneNumberFormType,
                    'translation_domain' => 'LabFormtestBundle',
                    'label'              => 'groupContact.listPhone',
                    'allow_add'          => true,
                    'allow_delete'       => true,
                    'by_reference'       => false));
    }

    /**
     * Returns the name of the form type.
     *
     * @return string The form's name
     */
    public function getName()
    {
        return 'group_contact';
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
            array('data_class' => 'Lab\FormtestBundle\Form\Model\GroupContact')
        );
    }
}
