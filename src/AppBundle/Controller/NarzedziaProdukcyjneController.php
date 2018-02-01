<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\AsortymentSuszu;
use AppBundle\Entity\DaneSuszenia;
use AppBundle\Repository\DaneSuszeniaRepository;
use AppBundle\Form\dodajDaneProcesuSuszeniaFormType;
use Symfony\Component\HttpFoundation\JsonResponse;

class NarzedziaProdukcyjneController extends Controller
{
   /**
     * @Route("/", name="homepage")
     */
    public function loginAction(Request $request)
    {   
           
            if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
            {
                return $this->redirectToRoute('kokpit');  
            } else
                {
                    return $this->redirectToRoute('fos_user_security_login');
                }
        

        
    }


    /**
     * @Route("/NarzedziaProdukcyjne/kokpit", name="kokpit")
     */
    public function kokpitAction(Request $request)
    {   

        // replace this example code with whatever you need
        return $this->render('NarzedziaProdukcyjne/kokpit.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

     /**
     * @Route("/NarzedziaProdukcyjne/tworzenieRaportuSuszenia", name="tworzenieRaportuSuszenia")
     */
    public function tworzRaportSuszenia(Request $request)
    {

        $form = $this->createForm(dodajDaneProcesuSuszeniaFormType::class);
       

        // only handles data on POST
        $form->handleRequest($request);
        //dump($form);
        
        if ($form->isSubmitted() && $form->isValid())
         {
            $nowe_dane_suszenia = $form->getData(); //To jest obiekt
            $em = $this->getDoctrine()->getManager();
           // dump($nowe_dane_suszenia);

            //Sprawdzamy czy takie dane juz istnieją
            $dane_istnieja = $em->getRepository('AppBundle:DaneSuszenia')->findOneBy(array('nrSuszarni' => $form->get('nrSuszarni')->getData(), 'data' => $form->get('data')->getData(), 'godzina' => $form->get('godzina')->getData() ));
           // dump($dane_istnieja);

             if ($form->getClickedButton() && 'zapisz' === $form->getClickedButton()->getName())
                 {  $dziala = TRUE;

                    if ($dane_istnieja)
                    {
                        //$this->addFlash('warning', '<b>Uwaga!!!</b> Dane raportu z podanego dnia i godziny już istnieją.');

                         //Ajax info
                         $wiadomosc = 'Dane istnieja';
                         $info = ['info' => $wiadomosc];
                         return new JsonResponse($info);

                        return $this->redirectToRoute('tworzenieRaportuSuszenia'); 
                    }
                        else
                    {
                        $em->persist($nowe_dane_suszenia);
                        $em->flush();

                       // $this->addFlash('success', '<b>Sukces!!!</b> Zapisano dane raportu. ');

                         //Ajax info
                        $wiadomosc = 'Zapisano dane';
                        $info = ['info' => $wiadomosc];
                        return new JsonResponse($info);

                        return $this->redirectToRoute('tworzenieRaportuSuszenia');
                    }
                }

                if ($form->getClickedButton() && 'edytuj' === $form->getClickedButton()->getName())
                {
                   if ($dane_istnieja)
                   {    
                    // $em->persist($dane_istnieja);
                    $dane_istnieja->setPredkoscBlanszownika($form->get('predkoscBlanszownika')->getData());
                    $dane_istnieja->setTemperaturaBlanszownika($form->get('temperaturaBlanszownika')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr7($form->get('predkoscSiatkiNr7')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr6($form->get('predkoscSiatkiNr6')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr5($form->get('predkoscSiatkiNr5')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr4($form->get('predkoscSiatkiNr4')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr3($form->get('predkoscSiatkiNr3')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr2($form->get('predkoscSiatkiNr2')->getData());
                    $dane_istnieja->setPredkoscSiatkiNr1($form->get('predkoscSiatkiNr1')->getData());
                    $dane_istnieja->setTemperaturaGora($form->get('temperaturaGora')->getData());
                    $dane_istnieja->setTemperaturaDol($form->get('temperaturaDol')->getData());
                    $dane_istnieja->setWilgotnosc($form->get('wilgotnosc')->getData());
                    $dane_istnieja->setWykonawcaPomiaru($form->get('wykonawcaPomiaru')->getData());
                    
                    $em->flush();

                   //$this->addFlash('success', '<b>Sukces!!!</b> Edytowano dane do raportu. ');
                    
                   }
                       else
                   {
                      
                     // $this->addFlash('warning', '<b>Uwaga!!!</b> Dane raportu z podanego dnia i godziny nie istnieją.');

                      //Ajax info
                      $wiadomosc = 'Dane nie istnieja';
                      $info = ['info' => $wiadomosc];
                      return new JsonResponse($info);

                      return $this->redirectToRoute('tworzenieRaportuSuszenia');
                   }
               }

               if ($form->getClickedButton() && 'usun' === $form->getClickedButton()->getName())
               {
                  if ($dane_istnieja)
                  {    
                    
                    $em->remove($dane_istnieja); 
                    $em->flush();

                  // $this->addFlash('success', '<b>Sukces!!!</b> Usunięto dane z raportu. ');

                   //Ajax info
                   $wiadomosc = 'Dane usunieto';
                   $info = ['info' => $wiadomosc];
                   return new JsonResponse($info);
                   
                  }
                      else
                  {
                     
                    // $this->addFlash('warning', '<b>Uwaga!!!</b> Dane raportu z podanego dnia i godziny nie istnieją.');

                      //Ajax info
                      $wiadomosc = 'Dane nie istnieja';
                      $info = ['info' => $wiadomosc];
                      return new JsonResponse($info);

                     return $this->redirectToRoute('tworzenieRaportuSuszenia');
                  }
              }  

                // $x = 'Działa';
                
                // $raport = ['output' => $x];
                // return new JsonResponse($raport);
                $dane_z_bazy = $this->getDoctrine()
            ->getRepository('AppBundle:DaneSuszenia')
            ->raportSuszenia();
                dump($dane_z_bazy);
                
                 //$x = 'TAK';
                 $info = ['raport' => $dane_z_bazy];
                 return new JsonResponse($info);  

        }
      

        return $this->render('NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig', [
            'dodajDaneSuszeniaForm' => $form->createView()
        ]);

    
    }


}