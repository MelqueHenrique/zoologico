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

}