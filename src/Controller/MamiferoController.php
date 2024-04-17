<?php
# Comentários da aula 5 -> https://www.youtube.com/watch?v=WRFXvoUMDJo&list=PLo8hZ_ZoCjDGpvWcsWkTnWghIdPTjmA6Z&index=4&ab_channel=PoliCast
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
        return new Response('Zoológico');
    }

    /**
     * @Route("/mamifero/{slug}")
     */

    public function show($slug)
    {   
        return new Response(
            sprintf(
                'Está é a página de detalhe do Mamífero "%s" ',
                ucwords(str_replace('-', ' ', $slug))
            ));
    }
}

# sprintf() é executado com esses argumentos, ele substitui %s na string pelo valor contido em $slug, resultando em uma nova string formatada. 
# - A string 'Esta é a página de detalhe do Mamífero "%s"' é o formato de string que serve como um padrão para a formatação.
# - O %s dentro da string é um marcador de posição que indica onde um valor deve ser inserido.
# - $slug é a variável que contém o valor que será inserido no lugar do marcador de posição %s.

# ucwords -> Serve pra deixar a letra maiuscula de cada palavra, exemplo: Gambá De Orelha Branca
# str_replace -> Serve para remover hífens de palavras separadas, exemplo: gambá-de-orelha-branca / / gambá de orelha branca

# O que nos vimos? Como criar uma rota personalizada, e como passar um valor(variavel) como coringa pela própria url.