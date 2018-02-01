<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/gereReparateur", name="gerereparateur")
     */
    public function gerereparateurAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/reparateur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/gereMarchandis", name="gerermarchandis")
     */
    public function geremarchandisAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Marchandis/geremarchandis.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/gereVendeur", name="gerevendeur")
     */
    public function gerevendeurAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Vendeur/gerevendeur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/gereAcheteur", name="gereacheteur")
     */
    public function gereacheteurAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Acheteur/gereacheteur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/gerePreteur", name="gerepreteur")
     */
    public function gerepreteurAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Preteur/gerepreteur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
