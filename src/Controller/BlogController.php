<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/list', name:'blog_list')]
    public function list(): Response
    {
        return new Response('<h1>Liste des articles</h1>');
    }

    #[Route('/blog/show/{id<\+d>}', name:'blog_show', requirements:[ 'id'=>'\d+'])]
    public function show($id): Response
    {
        $name='Introduction au symfony';
        //return new Response("<h1>Numéro de l'article est $id:</h1>");
        return $this->render('blog/show.html.twig',['a'=>$id,'b'=>$name]);
    }
    #[Route('/blog/detail/{id}/{name}', name: 'blog_detail',requirements:[ 'id'=>'\d+'] )]
    public function detail($id,$name)
    {
        return $this->render('blog/detail.html.twig',["id"=>$id,'nom'=>$name]);
    } 
}