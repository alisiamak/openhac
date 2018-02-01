<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\acheteur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @Route("/Acheteur")
*/
class AcheteurController extends Controller
{
  /**
   * @Route("/add", name="addacheteur")
  */
  public function addacheteurAction(Request $request)
  {
    $rep = new acheteur();
    $form = $this->createFormBuilder($rep)
      ->add('nom', TextType::class, array())
      ->add('telephone', TextType::class,array('required' => false))
      ->add('adress', TextType::class, array())
      ->add('submit', SubmitType::class, array(
          'label' => 'Enregistrer'))

      ->getForm();

    $form->handleRequest($request);
    if ($form->isSubmitted()) {
      $rep = $form->getData();
      $em = $this->getDoctrine()->getManager();
      $em->persist($rep);
      $em->flush();
    }



    return $this->render('Acheteur/add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  /**
   * @Route("/affiche", name="afficheacheteur")
  */
  public function afficheacheteurAction()
  {
      $acheteur = $this->getDoctrine()
        ->getRepository(acheteur::class)->findAll();

      return $this->render('Acheteur/affiche.html.twig', array(
          'acheteur' => $acheteur
      ));
  }


 }
