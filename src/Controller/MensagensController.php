<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MensagensController extends AbstractController
{
    /**
     * @Route("/mensagens/{id<\d+>}/like/{direction<like|deslike>}", name="mensagens_like", methods="POST")
     */
    public function mensagensLike($id, $direction, LoggerInterface $logger)
    {
        if ($direction === 'like') {
            $logger->info('Houve um like!');
            $currentLike = rand(80, 200);
        } else {
            $logger->info('Houve um deslike!');
            $currentLike = rand(10, 20);
        }

        return $this->json(['id' => $id, 'likes' => $currentLike]);
    }
}
