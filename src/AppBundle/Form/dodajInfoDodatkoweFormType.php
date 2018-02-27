<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\AsortymentSuszu;
use AppBundle\Repository\AsortymentSuszuRepository;
use AppBundle\Entity\DaneSuszenia;
use AppBundle\Repository\DaneSuszeniaRepository;
use AppBundle\Entity\User;






class dodajInfoDodatkoweFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('asortyment', EntityType::class, [   
             'class' => AsortymentSuszu::class,
             'query_builder' => function(AsortymentSuszuRepository $repo) {
                return $repo -> podajAsortymentSuszu();
                }   
            ])
            ->add('nrSuszarni', ChoiceType::class, [
                'choices' => [
    
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                ]
            ])
        ->add('data',DateType::class,array(
            'widget' => 'single_text',
            // this is actually the default format for single_text
            'format' => 'yyyy-MM-dd',
        ))
        ->add('ocenaTowaruZmiany1')
        ->add('ocenaTowaruZmiany2')
        ->add('ocenaTowaruZmiany3')
        ->add('iloscSuszuZmiana1')
        ->add('iloscSuszuZmiana2')
        ->add('iloscSuszuZmiana3')
        ->add('calkowitaIloscSuszu')
        ->add('dostawca')
        ->add('uwagi')
        ->add('zdjecia')
        ->add('opisZdjecia')
        
        ->add('dodajInfoDodatkowe', SubmitType::class, array('label' => 'Zapisz','attr' => ['class' => 'btn btn-primary'] ));
       
    
    }


    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\DaneSuszenia'
        ]);


    }


}

