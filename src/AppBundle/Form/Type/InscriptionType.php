<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country', 'entity', array(
                'class'             => 'AppBundle:Country',
                'mapped'            => true,
                'auto_initialize'   => false,
                'placeholder'       => 'Choose ...',
                'query_builder'     => function(EntityRepository $repository){
                    $qb = $repository->createQueryBuilder('country')
                        ->orderBy('country.name', 'ASC');
                    return $qb;
                },
            ))

            ->add('province', 'entity', array(
                'class'             => 'AppBundle:Province',
                'mapped'            => true,
                'auto_initialize'   => false,
                'placeholder'       => 'Choose ...',
                'query_builder'     => function(EntityRepository $repository){
                    $qb = $repository->createQueryBuilder('province')
                        ->orderBy('province.name', 'ASC');
                    return $qb;
                },
            ))

            ->add('city', 'entity', array(
                'class'             => 'AppBundle:City',
                'mapped'            => true,
                'auto_initialize'   => false,
                'placeholder'       => 'Choose ...',
                'query_builder'     => function(EntityRepository $repository){
                    $qb = $repository->createQueryBuilder('city')
                        ->orderBy('city.name', 'ASC');
                    return $qb;
                },
            ))

            ->add('currentDate', 'date', array(
                'widget'    =>  'single_text',
                'format'    =>  'dd-MM-yyyy',
                'attr'      =>  array(
                    'class' =>  'form-control input-inline datepicker',
                    'data-provide'      => 'datepicker',
                    'data-date-format'  => 'dd-mm-yyyy',
                )
            ))

            ->add('save', 'submit',
                array(
                    'label'    => 'Submit',
            ));
    }

    public function getName()
    {
        return 'inscription';
    }
}