<?php

namespace App\Controller;

use App\taxes\Calculateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{
    #[Route('/test',name:'test')]
    function index(){
        dd("bonjour");
    }

    /*function test3(){
        return new Response("<h1>test</h1>");
    }*/
    
    #[Route('/test3',name:'test3')]
    function test3(){
        return $this->render('test/test3.html.twig');
    }

    function test2(){
        var_dump("Hello");
        die();
    }
}