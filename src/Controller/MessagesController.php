<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages/{id<\d+>}/like/{direction<like|dislike>}", methods={"POST"})
     */
    public function messagesLike($id,$direction)
    {
        if ($direction === 'like'){
            $currentLike = rand(80,200);
        }else{
            $currentLike = rand(10,20);
        }
        return $this->json(['like'=>$currentLike]);
    }
}