<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\preteur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @Route("/Preteur")
*/
class PreteurController extends Controller
{
  /**
   * @Route("/add", name="addpreteur")
  */
  public function addpreteurAction(Request $request)
  {
    $rep = new preteur();
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



    return $this->render('Preteur/add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  /**
   * @Route("/affiche", name="affichepreteur")
  */
  public function affichepreteurAction()
  {
      $preteur = $this->getDoctrine()
        ->getRepository(preteur::class)->findAll();

      return $this->render('Preteur/affiche.html.twig', array(
          'preteur' => $preteur
      ));
  }


 }
