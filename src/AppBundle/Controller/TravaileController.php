<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\travaile;
use AppBundle\Entity\personne;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/Travaile")
 */
class TravaileController extends Controller
{


    /**
     *  @Route("/", name="travaile")
     */
    public function addAction(Request $request)
    {
      $category = new travaile();
      $form = $this->createFormBuilder($category)
        ->add('nom', TextType::class, array())
        ->add('daterentre',TextType::class, array())
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

      return $this->render('Travaile/add.html.twig', array(
        'form' => $form->createView()
      ));
    }

}
