<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\vendeur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @Route("/Vendeur")
*/
class VendeurController extends Controller
{
  /**
   * @Route("/add", name="addvendeur")
  */
  public function addvendeurAction(Request $request)
  {
    $rep = new vendeur();
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



    return $this->render('Vendeur/add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  /**
   * @Route("/affiche", name="affichevendeur")
  */
  public function affichevendeurAction()
  {
      $vendeur = $this->getDoctrine()
        ->getRepository(vendeur::class)->findAll();

      return $this->render('Vendeur/affiche.html.twig', array(
          'vendeur' => $vendeur
      ));
  }


 }
