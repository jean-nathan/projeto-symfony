<?php
# Comentários da aula 5 -> https://www.youtube.com/watch?v=WRFXvoUMDJo&list=PLo8hZ_ZoCjDGpvWcsWkTnWghIdPTjmA6Z&index=4&ab_channel=PoliCast
# Comentários da aula 9 -> Action, array, renderização do twig -> https://www.youtube.com/watch?v=HvoF6dw4qEM&list=PLo8hZ_ZoCjDGpvWcsWkTnWghIdPTjmA6Z&index=9&ab_channel=PoliCast
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController extends AbstractController
{

    # annotation @Route é usada para indicar que a action homepage deve responder a requisições feitas para a URL /
    # Existem outros usos do annotation como Configuração de Segurança com  @IsGranted, Validação de Formulários com @Assert\NotBlank e @Assert\Email

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

    #Uma "action" (metodo show()) é um método dentro de um controlador que é associado a uma rota específica. Quando uma requisição é feita para essa rota, o framework invoca a action correspondente para lidar com a requisição.

    # Em frameworks como o Symfony, cada action em um controlador é responsável por realizar uma tarefa específica, como processar dados, interagir com o modelo (model) da aplicação e renderizar uma resposta.

    public function show($slug) ## Manter coerencia, toda vez que eu tiver uma action dentro de um controller, o template que ela vai render precisa ter o mesmo nome que ela;
    {   
        $respostas = [
            'Está a primeira resposta',
            'Está a segunda resposta',
            'Está a terceira resposta',
            'Está a quarta resposta',
            'Está a quinta resposta'
        ];
        
        ## Arquivo show.html.twig está sendo carregado no controller através render e devolvido para o browser.
        return $this->render('mamiferos/show.html.twig', [ 
        ## Array de valores (variaveis) que podem vir do banco ou algum processo executado na controller
        'animal' => ucwords(str_replace('-', ' ', $slug)),
        'respostas' => $respostas
        ]);
    }
}

# sprintf() é executado com esses argumentos, ele substitui %s na string pelo valor contido em $slug, resultando em uma nova string formatada. 
# - A string 'Esta é a página de detalhe do Mamífero "%s"' é o formato de string que serve como um padrão para a formatação.
# - O %s dentro da string é um marcador de posição que indica onde um valor deve ser inserido.
# - $slug é a variável que contém o valor que será inserido no lugar do marcador de posição %s.

# ucwords -> Serve pra deixar a letra maiuscula de cada palavra, exemplo: Gambá De Orelha Branca
# str_replace -> Serve para remover hífens de palavras separadas, exemplo: gambá-de-orelha-branca / / gambá de orelha branca

# O que nos vimos? Como criar uma rota personalizada, e como passar um valor(variavel) como coringa pela própria url.