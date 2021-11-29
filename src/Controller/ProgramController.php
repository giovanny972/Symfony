<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProgramController extends AbstractController
{   
    /**
    * @Route("/program/", name="program_index")
    */
    public function index(): Response
    {
        return $this->render('program/program_index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

    /**
     * @Route("/program/{id<\d+>}", methods = {"GET"}, name = "program_show")
     */
    public function id(int $id = 1): Response
    {

    }
}
