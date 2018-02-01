<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\reparateur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @Route("/Reparateur")
*/
class ReparateurController extends Controller
{
  /**
   * @Route("/add", name="addreparateur")
  */
  public function addreparateurAction(Request $request)
  {
    $rep = new reparateur();
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



    return $this->render('Reparateur/add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  /**
   * @Route("/affiche", name="affichereparateur")
  */
  public function affichereparateurAction()
  {
      $reparateur = $this->getDoctrine()
        ->getRepository(reparateur::class)->findAll();

      return $this->render('Reparateur/affiche.html.twig', array(
          'reparateur' => $reparateur
      ));
  }


 }
