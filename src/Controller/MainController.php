<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{


  #[Route('/', name: 'main_home', methods: ['GET'])] //Pour Route, Selectionner Symfony\Component\Routing\Attribute\Route;
public function home() : Response {                  //selectionner Symfony\Component\HttpFoundation\Response;
    return $this->render ("main/home.html.twig");
}


    #[Route('/test', name: 'main_test', methods: ['GET'])] //Pour Route, Selectionner Symfony\Component\Routing\Attribute\Route;
    public function test() : Response {   //selectionner Symfony\Component\HttpFoundation\Response;
        return $this->render ("main/test.html.twig");
    }

}