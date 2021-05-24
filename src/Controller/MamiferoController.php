<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class MamiferoController extends AbstractController
{
    /**
     * @Route("/", name="app_home_page")
     */
    public function homepage(Environment $twigEnvironment)
    {
        /*Exemplo de serviços: versão extendida*/
//        $html = $twigEnvironment->render('mamiferos/homepage.html.twi');
//        return new Response($html);
        /*Exemplo de serviços*/
        return $this->render('mamiferos/homepage.html.twig');
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
    dump($respostas,$this);
        return $this->render('mamiferos/show.html.twig', ['animal' => ucwords(str_replace('-', ' ', $slug)),
            'respostas'=>$respostas]);

    }
}