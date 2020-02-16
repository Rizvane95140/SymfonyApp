<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    /**
     * @Route("/personnages", name="personnages")
     */
    public function persos()
    {
        return $this->render('personnage/persos.html.twig', [
            'tab_test' => [
                'force' => 3,
                'exp' => 2,
                'mana' => 12
            ],
        ]);
    }



}
