<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\personne;
use AppBundle\Entity\travaile;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/Personne")
 */
class PersonneController extends Controller
{


    /**
     *  @Route("/", name="addpersonne")
     */
    public function addAction(Request $request)
    {
      $category = new personne();
      $form = $this->createFormBuilder($category)
        ->add('nome', TextType::class, array())
        ->add('prenome', TextType::class, array())
        ->add('travaile', EntityType::class, array(
          'class' => 'AppBundle:travaile',
          'choice_label' => 'nom',
          'placeholder' => 'Choose an option',
          'required' => false
        ))
        ->add('submit', SubmitType::class, array(
          'label' => 'Enregistrer'))
        ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted()) {
        $category = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
      }

      return $this->render('Personne/addp.html.twig', array(
        'form' => $form->createView()
      ));
    }

}
