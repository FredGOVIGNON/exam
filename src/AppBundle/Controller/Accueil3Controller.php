<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class Accueil3Controller extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function accueil3Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/accueil3.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}