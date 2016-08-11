<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Vote;
use AppBundle\Entity\Epreuve;
use AppBundle\Entity\Athlete;
use AppBundle\Entity\User;


class PrognosticController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function prognosticAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/prognostic.html.twig', array(
            'epreuves' => $allEpreuves,
            'athletes' => $allAthletes,
            'votes' => $allVotes,
        ));
    }
}