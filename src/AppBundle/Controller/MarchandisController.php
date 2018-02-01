<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\marchandis;
use AppBundle\Entity\reparateur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @Route("/Marchandis")
*/
class MarchandisController extends Controller
{
  /**
   * @Route("/add", name="addmarchandis")
  */
  public function addmarchandisAction(Request $request)
  {
    $rep = new marchandis();
    $form = $this->createFormBuilder($rep)
    ->add('nom', EntityType::class, array(
      'class' => 'AppBundle:article',
      'choice_label' => 'nom',
      'placeholder' => 'choisisez un article',
      
    ))
      ->add('origine', TextType::class,array('required' => false))
      ->add('color', TextType::class,array('required' => false))
      ->add('hauter', TextType::class,array('required' => false))
      ->add('largeur', TextType::class,array('required' => false))
      ->add('age', TextType::class,array('required' => false))
      ->add('dateachat', TextType::class,array('required' => false))
      ->add('datevendre', TextType::class,array('required' => false))
      ->add('dateprete', TextType::class,array('required' => false))
      ->add('daterendu', TextType::class,array('required' => false))
      ->add('preteur', EntityType::class, array(
        'class' => 'AppBundle:preteur',
        'choice_label' => 'nom',
        'placeholder' => 'choisisez un preteur',
        'required' => false
      ))
      ->add('vendeur', EntityType::class, array(
        'class' => 'AppBundle:vendeur',
        'choice_label' => 'nom',
        'placeholder' => 'choisisez un vendeur',
        'required' => false
      ))
      ->add('acheteur', EntityType::class, array(
        'class' => 'AppBundle:acheteur',
        'choice_label' => 'nom',
        'placeholder' => 'choisisez un acheteur',
        'required' => false
      ))
      ->add('datesoumetrereparation', TextType::class,array('required' => false))
      ->add('daterendureparation', TextType::class,array('required' => false))
      ->add('prixreparation', TextType::class,array('required' => false))
      ->add('prixachat', TextType::class,array('required' => false))
      ->add('prixvendre', TextType::class,array('required' => false))
      ->add('reparateur', EntityType::class, array(
        'class' => 'AppBundle:reparateur',
        'choice_label' => 'nom',
        'placeholder' => 'choisisez un reparateur',
        'required' => false
      ))
      ->add('photo', TextType::class,array('required' => false))
      ->add('location', TextType::class,array('required' => false))
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



    return $this->render('Marchandis/add.html.twig', array(
      'form' => $form->createView()
    ));
  }
  /**
   * @Route("/affiche", name="affichemarchandis")
  */
  public function affichemarchandisAction()
  {
      $marchandis = $this->getDoctrine()
        ->getRepository(marchandis::class)->findAll();

      return $this->render('Marchandis/affiche.html.twig', array(
          'marchandis' => $marchandis
      ));
  }


 }
