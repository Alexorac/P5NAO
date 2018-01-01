<?php
/**
 */

namespace AppBundle\Form\Type;

use AppBundle\Entity\Observation;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AddObservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('observationDate', DateType::class, [
                'widget'=> 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5'=> false,
                'attr' =>['class' => 'form-control datepicker']
            ])
            ->add('taxref', CollectionType::class, [
                'entry_type'=> TaxrefObservationType::class
            ])
            ->add('observationNumber', IntegerType::class, [
                'label' => 'nombre d\'oiseaux'
            ])
            ->add('observationLatitude', NumberType::class, [
                'label' => 'latitude'
            ])
            ->add('observationLongitude',NumberType::class, [
                'label' => 'longitude'
            ])
            ->add('observationEnvironment', ChoiceType::class, [
                'label' => 'cadre'
            ])
            ->add('observationClimat', ChoiceType::class, [
                'label' => 'climat'
            ])
            ->add('observationImages', CollectionType::class, [
                'label' => 'Photo'
            ])
            ->add('observationComment', TextareaType::class, [

                'label' => 'commentaires'
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults( array(
            'data_class' => 'AppBundle\Entity\Observation'
        ));
    }
}