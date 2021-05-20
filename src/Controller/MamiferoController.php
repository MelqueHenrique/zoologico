<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController
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
        return new Response(
            sprintf(
                'Esta é a pagina de detalhe do mamifero "%s"',str_replace('-',' ',$slug)));
    }

}