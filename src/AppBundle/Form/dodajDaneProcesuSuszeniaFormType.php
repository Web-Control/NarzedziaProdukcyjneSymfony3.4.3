<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\AsortymentSuszu;
use AppBundle\Repository\AsortymentSuszuRepository;
use AppBundle\Entity\DaneSuszenia;
use AppBundle\Repository\DaneSuszeniaRepository;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;





class dodajDaneProcesuSuszeniaFormType extends AbstractType
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
        ->add('godzina',TimeType::class,array(
            'widget' => 'single_text'
        ))
        ->add('predkoscBlanszownika',IntegerType::class,array('required'   => false))
        ->add('temperaturaBlanszownika',IntegerType::class,array('required'   => false))
        ->add('predkoscSiatkiNr7')
        ->add('predkoscSiatkiNr6')
        ->add('predkoscSiatkiNr5')
        ->add('predkoscSiatkiNr4')
        ->add('predkoscSiatkiNr3')
        ->add('predkoscSiatkiNr2')
        ->add('predkoscSiatkiNr1')
        ->add('temperaturaGora')
        ->add('temperaturaDol')
        ->add('wilgotnosc')
        // ->add('wykonawcaPomiaru')
        ->add('wykonawcaPomiaru', EntityType::class, [ 
            'label' => 'form.username', 'translation_domain' => 'FOSUserBundle',  
             'class' => User::class,
             'query_builder' => function(UserRepository $repo) {
                return $repo->podajUzytkownikow();
                }
               
            ])
        ->add('zapisz', SubmitType::class, array('label' => 'Zapisz','attr' => ['class' => 'btn btn-primary'] ))
        ->add('edytuj', SubmitType::class, array('label' => 'Edytuj'))
        ->add('usun', SubmitType::class, array('label' => 'Usuń','attr' => ['class' => 'btn btn-danger'],));
    
    }


    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\DaneSuszenia'
        ]);


    }
}


