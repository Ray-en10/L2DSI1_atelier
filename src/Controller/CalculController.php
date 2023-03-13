<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul', name: 'app_calcul')]
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'CalculController',
        ]);
    }
    #[Route('/calcul/somme/{a}/{b}', name: 'calcul_somme')]
    public function somme($a,$b):Response
    {
        $r=$a+$b;
       return $this->render('calcul/somme.html.twig',["a"=>$a,'b'=>$b, 'r'=>$r]);
    }
    #[Route('/calcul/soustraction/{a}/{b}', name: 'calcul_soustraction')]
    public function soustraction($a,$b):Response
    {
        $r=$a-$b;
        return $this->render('calcul/soustraction.html.twig',["a"=>$a,'b'=>$b, 'r'=>$r]);
    }
    #[Route('/home', name:'app_home')]
    public function Accueil()
    {
        return $this->render('calcul/home.html.twig');
    }
}
