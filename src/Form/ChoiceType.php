<?php

namespace App\Form;

use App\Entity\Answer;
use App\Entity\Choice;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('answer', Answer::class, [
                'choices' => [
                    'Answer1' => '1',
                    'Answer2' => '2',
                    'Answer3' => '3',
                    'Answer4' => '4',

                ],
                'expanded' => true,
                'multiple' => false,
                'label' => false,]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Choice::class,
        ]);
    }
}
