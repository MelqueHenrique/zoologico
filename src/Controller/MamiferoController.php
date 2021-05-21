<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Zoologico');
    }

    /**
     * @Route("/mamifero/{slug}")
     */
    public function show($slug)
    {
        $respostas = [
            'Resposta 1',
            'Resposta 2',
            'Resposta 3',
            'Resposta 4',
            'Resposta 5',
            'Resposta 6',
        ];

        return $this->render('mamiferos/show.html.twig', ['animal' => ucwords(str_replace('-', ' ', $slug)),
            'respostas'=>$respostas]);

    }
}