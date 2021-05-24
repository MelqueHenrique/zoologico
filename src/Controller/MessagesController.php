<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages/{id<\d+>}/like/{direction<like|dislike>}", methods={"POST"})
     */
    public function messagesLike($id,$direction, LoggerInterface $logger)
    {
        if ($direction === 'like'){
            /*Exemplo de serviços: Logs*/
            $logger->info('Houve um like!');
            /*Exemplo de serviços: Logs*/
            $currentLike = rand(80,200);
        }else{
            /*Exemplo de serviços: Logs*/
            $logger->info('Houve um dislike!');
            /*Exemplo de serviços: Logs*/
            $currentLike = rand(10,20);
        }
        return $this->json(['like'=>$currentLike]);
    }
}