<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\article;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * @Route("/Article")
*/
class ArticleController extends Controller
{
  /**
   * @Route("/add", name="addarticle")
  */
  public function addarticleAction(Request $request)
  {
    $rep = new article();
    $form = $this->createFormBuilder($rep)
      ->add('nom', TextType::class, array())

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



    return $this->render('Article/add.html.twig', array(
      'form' => $form->createView()
    ));
  }


 }
