## 1) INSTALAÇÃO DO SYMFONY CLI

Para instalar o Symfony, acesse: https://symfony.com/download

Depois de instalado vai aparecer algumas opções para o uso dele.

E voce selecione esta: "install it globally on your system"

Selecionando ela vai te livrar de ter que ficar mexendo em variaveis do sistema, etc..

Para testar, execute o comando: symfony

Deverá aparecer a versão do Symfony CLI, e outras informações..
Caso não apareça, deverá investigar..


## 2) CRIANDO SUA PRIMEIRA APLICAÇÃO

Execute o comando: composer create-project symfony/skeleton:"^5.1.2" nome_do_projeto

Usaremos essa versão pois as novas versões não possuem as pastas public, config, etc.. criadas automaticamente..

## 3) EXECUTANDO APLICAÇÃO COM SERVIDOR EMBITUDO DO PHP

Após criado seu projeto, navegue para pasta public e execute o comando: php -S localhost:8000 

Depois basta acessar esse endereço no navegador para visualizar a página index.

## 4) ADENDOS - INFORMAÇÕES SOBRE A ESTRUTURA DO PROJETO

Pasta public (Front Controller):
Arquivo executavel pelo navegador;

Os outros arquivos que devem ficar dentro da pasta public são:
CSS, Arquivos de imagem, JS, etc...

Pasta config (Configurações do sistema):

Pasta src (Source - Seu código)
Ficará seu código PHP, tudo que você programar ficará salvo dentro dela.


Bom, o nosso projeto começou com arquivo (composer.json)

Ele é o arquivo inicial que indica quais são as depedências que precisam ser instaladas.

Então quando executamos o comando pra criação do projeto, por baixo dos panos, o comando executou o composer e ele instalou todas as dependencias na pasta (vendor)

Pasta vendor (Código de terceiros)
Consta todas as dependencias e o próprio Symfony.

## 5) COMO UTILIZAR O PRÓPRIO SERVIDOR DO SYMFONY E ENTENDENDO SUAS FUNCIONALIDADES

Para iniciar o servidor, basta executar o comando: symfony serve

Para visualizar suas funcionalidades, basta executar o comando: symfony server

server:ca:install : Serve para instalar um certificado de autenticidade (Autoria).
Obs: No Symfony 5.1 e versões posteriores, o comando server:ca:install foi removido e não está mais disponível

## 6) COMO MUDAR A PORTA QUE SEU SERVIDOR ESTÁ SENDO EXECUTADO

Acesse o Menu de opções do Symfony, basta executar o comando: symfony serve --help
Depois disso, você verá várias opções de configurações, no qual você vai utilizar a --port=value

Para mudar por exemplo para porta 8080, basta executar o comando: (Pare o servidor antes de configurar)

symfony serve --port=8080

## 7) COMANDOS SYMFONY NO TERMINAL

O Symfony oferece uma ampla gama de comandos que podem ser executados a partir do terminal para interagir com sua aplicação. Um comando útil para explorar essas funcionalidades é o `php bin/console`.

#### Executando o `php bin/console`

Ao executar o comando `php bin/console` no diretório raiz do projeto Symfony, você terá acesso a uma lista de comandos disponíveis, juntamente com suas descrições e opções de uso. Essa lista é essencialmente um "help" que fornece informações sobre como utilizar os comandos Symfony.

#### Estrutura do Projeto

Dentro do diretório do projeto Symfony, você encontrará uma pasta chamada `bin` que contém o arquivo `console`. Esse arquivo `console` é utilizado para executar os comandos listados na interface de linha de comando.

#### Comandos Dinâmicos

Os comandos listados são dinâmicos e podem ser expandidos conforme o desenvolvimento do projeto avança. O Symfony permite adicionar novos comandos personalizados à medida que novas funcionalidades são implementadas.

#### Exemplo: `debug:router`

Um exemplo prático é o comando `debug:router`. Para executá-lo, utilize o seguinte comando:

```bash
php bin/console debug:router
```

Este comando exibirá todas as rotas registradas no sistema, incluindo aquelas definidas por você. Ele é especialmente útil para identificar quais ações estão associadas a cada rota, facilitando a navegação e compreensão da estrutura de rotas da sua aplicação Symfony.

Utilize essa ferramenta poderosa para explorar e gerenciar sua aplicação Symfony de forma eficiente e intuitiva!

## 8) SYMFONY SECURITY CHECK

O comando `symfony security:check` verifica as vulnerabilidades de segurança nas dependências do seu projeto Symfony. Ele utiliza uma base de dados mantida pela equipe Symfony para identificar e relatar quaisquer vulnerabilidades conhecidas nas bibliotecas e pacotes PHP instalados via Composer.

#### Como Usar:

Execute o seguinte comando no terminal, dentro do diretório do seu projeto Symfony:

```bash
symfony security:check
```

O comando analisará suas dependências e exibirá um relatório mostrando quais pacotes possuem vulnerabilidades e quais versões são recomendadas para corrigi-las.

#### Benefícios:

- Mantém suas dependências seguras e protegidas contra vulnerabilidades conhecidas.
- Ajuda a garantir a conformidade com práticas recomendadas de segurança no desenvolvimento de software.
- Facilita a identificação e correção proativa de problemas de segurança em seu projeto Symfony.

### ANOTAÇÕES DE ESTUDO

- **Symfony Flex**:
- Symfony Flex é um plugin do Composer que adiciona funcionalidades adicionais ao Composer, facilitando o gerenciamento de pacotes e a configuração de projetos Symfony.

- **Alias (Apelidos)**:
  Os "Alias" são apelidos atribuídos aos pacotes (também conhecidos como "Recipes") no contexto do Symfony Flex. Isso permite requisitar pacotes usando seus apelidos ao invés de seus nomes completos.

  Por exemplo, ao invés de especificar o nome completo do pacote, como `symfony/webpack-encore-bundle`, você pode simplesmente usar o alias `webpack-encore` para requisitar o mesmo pacote via Composer.

  ```bash
  composer require webpack-encore
  ```

  O Symfony Flex cuida automaticamente da resolução dos aliases para os nomes completos dos pacotes, simplificando o processo de instalação e gerenciamento de dependências em projetos Symfony.

----------------------------------------------------------------------------------------------------------------------------------

#### Symfony Flex e Comandos Relacionados

Além das funcionalidades do Symfony Flex mencionadas anteriormente, você pode utilizar o Composer junto com o Symfony Flex para explorar e gerenciar os "recipes" (pacotes de configuração) disponíveis em seu projeto Symfony.

- **Listando Todos os Recipes**:
  Utilize o seguinte comando para listar todos os recipes disponíveis no seu projeto:

  ```bash
  composer recipes
  ```

  Isso exibirá uma lista dos recipes disponíveis, mostrando os pacotes e seus aliases associados, quando aplicável.

- **Detalhes de um Recipe Específico**:
  Para obter mais detalhes sobre um recipe específico, incluindo sua descrição e os pacotes que ele instala ou configura, utilize o seguinte formato de comando:

  ```bash
  composer recipes nome_do_recipe
  ```

  Por exemplo, para obter detalhes do recipe relacionado ao Doctrine Annotations, execute o seguinte comando:

  ```bash
  composer recipes doctrine/annotations
  ```

  Isso fornecerá informações detalhadas sobre o recipe do Doctrine Annotations, incluindo sua finalidade e os componentes que ele integra ou configura em seu projeto Symfony.

----------------------------------------------------------------------------------------------------------------------------------

#### Twig Recipe

O Twig Recipe é um pacote que facilita a integração do Twig, o mecanismo de template padrão do Symfony, em seu projeto Symfony.

- **Como Instalar**:
  Para instalar o Twig Recipe, execute o seguinte comando via Composer:

  ```bash
  composer require symfony/twig-pack
  ```

  Isso adicionará o pacote `symfony/twig-pack` ao seu projeto Symfony e configurará automaticamente a integração do Twig.

- **Modificações no Arquivo `bundles.php`**:
  Após a instalação, o arquivo `bundles.php` do seu projeto Symfony será modificado para incluir o bundle relacionado ao Twig. O arquivo `bundles.php` lista todos os bundles utilizados pela aplicação Symfony.

- **O Que São Bundles?**:
  Os bundles são componentes modulares do Symfony que adicionam funcionalidades específicas à sua aplicação. Anteriormente, era necessário instalar e ativar manualmente os bundles para utilizar suas funcionalidades. No entanto, com o Symfony 5 e o uso do Composer com o plugin Flex, os bundles são adicionados automaticamente quando você instala os pacotes necessários.

- **Diretório `templates` e Arquivo `base.html.twig`**:
  Após a instalação do Twig Recipe, um diretório chamado `templates` será criado na raiz do seu projeto Symfony. O arquivo `templates/base.html.twig` também será criado como um modelo base para seus templates Twig.

  O diretório `templates` é o local padrão onde todos os templates Twig devem ser armazenados em um projeto Symfony.

- **Arquivo `twig.yaml` no Diretório `config`**:
  Além disso, um arquivo chamado `twig.yaml` será criado no diretório `config` do seu projeto Symfony. Este arquivo define as configurações relacionadas ao Twig, como o diretório padrão para os templates Twig (`default_path`).

  Por exemplo:

  ```yaml
  default_path: '%kernel.project_dir%/templates'
  ```

  Esta configuração define que os templates Twig devem ser procurados no diretório `templates` dentro do diretório raiz do projeto.

- **Configuração `strict_variables: true`**:
  No arquivo `twig.yaml`, a opção `strict_variables` pode ser definida como `true`, o que indica que o Twig deve lançar exceções ao tentar acessar variáveis não definidas ou indefinidas. Essa configuração é útil principalmente durante o desenvolvimento e testes automatizados para evitar erros de runtime.

  Por exemplo:

  ```yaml
  strict_variables: true
  ```

  Essas configurações e modificações proporcionadas pelo Twig Recipe simplificam a utilização do Twig como mecanismo de template em projetos Symfony, permitindo um desenvolvimento mais eficiente e organizado dos templates.

## Twig

Twig é um mecanismo de template amplamente utilizado no Symfony e em outros frameworks PHP para renderização de HTML dinâmico.

### Estendendo `AbstractController`

Ao estender `AbstractController` em sua classe de controller, como `MamiferoController`, você obtém acesso a métodos úteis, como `$this->render()`, que permite renderizar templates Twig e retornar HTML para o navegador.

Exemplo de uso:

```php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MamiferoController extends AbstractController
{
    public function index(): Response
    {
        $dados = ['nome' => 'Leão', 'tipo' => 'felino'];
        return $this->render('mamifero/index.html.twig', [
            'animal' => $dados
        ]);
    }
}
```

Neste exemplo, `$this->render()` é usado para renderizar o template `mamifero/index.html.twig` com os dados fornecidos (`$dados`) e retornar uma resposta HTTP com o HTML resultante.

### Estudando Twig

O site oficial do Twig (https://twig.symfony.com/doc/) fornece uma excelente documentação para aprender sobre a sintaxe e recursos do Twig:

- **Documentação Detalhada**: Exploração completa da sintaxe Twig, incluindo variáveis, filtros, funções, estruturas de controle (como `if`, `for`, etc.) e herança de templates.

- **Exemplos e Referências**: O site oferece uma variedade de exemplos práticos que demonstram como usar Twig para tarefas comuns, como manipulação de dados, formatação de saída e construção de layouts.

- **Material de Estudo**: Além da documentação oficial, você pode encontrar tutoriais e artigos online que abordam o uso avançado do Twig em projetos Symfony e em outras aplicações PHP.

Utilize o site oficial do Twig como uma valiosa fonte de aprendizado para dominar essa ferramenta essencial de renderização de templates em aplicações Symfony e PHP.

----------------------------------------------------------------------------------------------------------------------------------

## Profiler - Ferramenta de Debugging

Para instalar e utilizar o Profiler como uma barra de ferramentas de debugging em seu projeto Symfony, siga os passos abaixo:

### Instalação da Biblioteca Profiler

Para instalar a biblioteca Profiler, execute o seguinte comando no terminal:

```bash
composer require profiler --dev
```

Isso adicionará o Profiler como uma dependência de desenvolvimento ao seu projeto.

### Uso do Profiler

O Profiler é uma ferramenta poderosa para debugar em projetos Symfony. Além disso, existem outras técnicas de debug disponíveis:

- **Utilizando `var_dump`:**

  O `var_dump` é uma função PHP nativa útil para imprimir o conteúdo de variáveis, como arrays, diretamente na página. Exemplo:

  ```php
  $respostas = [
      'Está a primeira resposta',
      'Está a segunda resposta',
      'Está a terceira resposta',
      'Está a quarta resposta',
      'Está a quinta resposta'
  ];

  var_dump($respostas);
  ```

- **Utilizando `dump`:**

  O Symfony fornece a função `dump` para imprimir variáveis de forma mais legível e organizada. Exemplo:

  ```php
  dump($respostas);
  ```

- **Utilizando `dump` com `$this` para acessar o container:**

  Você pode usar `dump` com `$this` para inspecionar o conteúdo do container Symfony. Exemplo:

  ```php
  dump($respostas, $this);
  ```

- **Utilizando `dd` (dump and die):**

  O `dd` é semelhante ao `var_dump`, mas interrompe a execução do script após a impressão da variável. Exemplo:

  ```php
  dd($respostas, $this);
  ```

Essas técnicas de debug são úteis para examinar variáveis e entender o comportamento do código durante o desenvolvimento. O Profiler, em particular, oferece uma barra de ferramentas abrangente para visualizar e analisar informações sobre a aplicação Symfony em execução, incluindo informações de requisições, logs, consultas SQL, entre outros.

Utilize essas ferramentas de debug de acordo com suas necessidades para facilitar o desenvolvimento e depuração de seus projetos Symfony.


----------------------------------------------------------------------------------------------------------------------------------

# Debug-Pack e Utilização do Monolog

O `debug-pack` é uma biblioteca útil para debugging em projetos Symfony, permitindo o uso do Monolog para criação de logs e oferecendo comandos úteis para debug no terminal.

## Instalação

Para instalar a biblioteca `debug-pack`, execute o seguinte comando:

```bash
composer require debug
```

Isso instalará o `debug-pack` e suas dependências, incluindo o Monolog, que é uma biblioteca PHP para logging flexível e poderosa.

## Utilização do Monolog

Após a instalação, o Monolog estará disponível para criar logs em seu projeto Symfony. Os logs serão armazenados na pasta `var/log` por padrão.

- **Criação de Logs:**

  O Monolog pode ser usado em conjunto com o Profiler para visualizar logs no menu do Profiler. Ele cria arquivos de log, como `dev.log`, que registrarão todas as atividades do aplicativo, incluindo erros e outras informações importantes.

## Comandos Úteis

Além disso, o `debug-pack` disponibiliza novos comandos no terminal Symfony que podem ser úteis para debug:

- **`php bin/console server:dump`**

  Este comando retorna os dumps diretamente no seu terminal, em vez de mostrá-los no front-end da aplicação.

- **`php bin/console server:log`**

  Este comando permite visualizar logs do servidor web embutido do Symfony no terminal, oferecendo informações sobre requisições HTTP e outros detalhes importantes durante o desenvolvimento.

Utilize esses recursos para facilitar o processo de debugging e monitorar o funcionamento da sua aplicação Symfony durante o desenvolvimento. O Monolog e os comandos do `debug-pack` serão ferramentas valiosas para identificar problemas, registrar informações úteis e melhorar a qualidade do seu código.

----------------------------------------------------------------------------------------------------------------------------------

### Uso da Função `asset()` em Symfony

#### Introdução
A função `asset()` em Symfony é utilizada para referenciar ativos (assets) como arquivos CSS, JavaScript, imagens, etc., de forma dinâmica. Isso facilita o gerenciamento de URLs de ativos e a adaptação a diferentes ambientes de implantação.

#### Instalação
Antes de utilizar a função `asset()`, certifique-se de ter instalado o componente `symfony/asset` em seu projeto. Você pode fazer isso executando o seguinte comando no terminal:

```bash
composer require symfony/asset
```

#### Exemplo de Uso
Você pode utilizar a função `asset()` em seus templates Twig para referenciar ativos da seguinte maneira:

```twig
<link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
```

Neste exemplo:
- O parâmetro `'/assets/css/app.css'` representa o caminho relativo para o arquivo CSS.
- A função `asset()` gera dinamicamente o URL completo para o ativo com base na configuração de assets do Symfony.

#### Benefícios do Uso
Ao utilizar `asset()` para referenciar seus ativos:
- Você não precisa se preocupar com os detalhes específicos dos URLs dos ativos.
- Facilita a adaptação do aplicativo a diferentes ambientes de implantação (desenvolvimento, teste, produção, CDN, etc.).
- Se você precisar mudar a localização dos ativos (por exemplo, ao mudar para um CDN), basta ajustar a configuração de assets.

#### Exemplo de Geração de URL
Suponha que você tenha um arquivo CSS chamado `app.css` localizado na pasta `public/assets/css/` do seu projeto. Utilize a função `asset()` para gerar dinamicamente o URL deste arquivo:

```twig
<link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
```

A saída será algo como:
```html
<link href="http://example.com/assets/css/app.css" rel="stylesheet">
```

#### Adaptação a Ambientes Diferentes
A função `asset()` pode adaptar automaticamente os URLs dos ativos com base no ambiente de implantação. Por exemplo, durante o desenvolvimento local, os URLs dos ativos podem ser servidos pelo servidor de desenvolvimento do Symfony (`http://localhost:8000`). No ambiente de produção, os URLs podem apontar para um CDN ou para o servidor web principal.

Ao utilizar `asset()` em seus templates Twig, você mantém seu código mais flexível e independente do ambiente específico de implantação, permitindo uma transição suave entre diferentes configurações de servidor e localizações de ativos.

----------------------------------------------------------------------------------------------------------------------------------

## Rotas e Geração de URLs no Symfony

Mais detalhes -> https://www.youtube.com/watch?v=TbWHk4kPX-c&list=PLo8hZ_ZoCjDGpvWcsWkTnWghIdPTjmA6Z&index=13&ab_channel=PoliCast

Ao trabalhar com rotas no Symfony, é útil nomear suas rotas para facilitar o uso em templates Twig e em outros lugares do código. Aqui estão algumas dicas e exemplos sobre como gerenciar e usar rotas em sua aplicação Symfony.

### Nomeando Rotas

Ao definir uma rota em uma action de controller, você pode atribuir um nome à rota usando a anotação `@Route`:

```php
/**
 * @Route("/", name="app_home_page")
 */
public function index(): Response
{
    // Seu código aqui
}
```

### Gerando URLs no Twig

Para gerar URLs usando o nome da rota definida, você pode usar o método `path()` no Twig. Por exemplo, para criar um link para a página inicial usando o nome da rota `app_home_page`:

```twig
<a href="{{ path('app_home_page') }}" class="navbar-brand">Home</a>
```

### Consultando as Rotas

Para listar todas as rotas disponíveis em seu projeto Symfony, você pode usar o comando `debug:router` no terminal:

```bash
php bin/console debug:router
```

### Passando Parâmetros para Rotas no Twig

Se uma rota espera parâmetros, você pode passá-los como um array associativo para o método `path()` no Twig. Por exemplo, para criar um link para a página de detalhes de um mamífero com o parâmetro `slug` definido como `'gato'`:

```twig
<a href="{{ path('app_mamifero_show', { 'slug': 'gato' }) }}">Ver detalhes do gato</a>
```

### Navegando para uma Âncora na Página

Se desejar direcionar para uma URL com uma âncora (fragmento) específica, você pode usar o parâmetro `_fragment` ao gerar a URL com `path()` no Twig. Por exemplo, para direcionar para a página inicial e rolar diretamente para a seção de mamíferos:

```twig
<a href="{{ path('app_home_page', { '_fragment': 'mamiferos' }) }}">Ir para a seção de mamíferos</a>
```

Certifique-se de definir um `id` na tag HTML correspondente à âncora para que a navegação funcione corretamente.

----------------------------------------------------------------------------------------------------------------------------------

## API Endpoint

Nesta aula, aprenderemos como criar um endpoint da nossa aplicação usando Symfony 5. Vamos criar um endpoint para controlar "likes" e "dislikes" em mensagens.

### Criando uma Controller para Mensagens

Vamos criar uma controller específica para lidar com mensagens:

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MensagensController extends AbstractController
{
    /**
     * @Route("/mensagens/{id}/like/{direction}", name="mensagens_like")
     */
    public function mensagensLike($id, $direction)
    {
        if ($direction === 'like') {
            $currentLike = rand(80, 200);
        } else {
            $currentLike = rand(10, 20);
        }

        return $this->json(['likes' => $currentLike]);
    }
}
```

### Entendendo o Endpoint

- **`@Route` Annotation**: Utilizamos a anotação `@Route` para definir a rota do nosso endpoint. No exemplo acima, a rota `/mensagens/{id}/like/{direction}` é definida. O `{id}` e `{direction}` são parâmetros dinâmicos na URL.
- **Método `mensagensLike`**: Este método é responsável por lidar com a requisição para o endpoint `/mensagens/{id}/like/{direction}`. Ele recebe os parâmetros `id` (identificador da mensagem) e `direction` (direção do like ou dislike).
- **Retorno JSON com Array Associativo**:
  - Ao final do método `mensagensLike`, retornamos um JSON utilizando `return $this->json(['likes' => $currentLike]);`.
  - Estamos retornando um array associativo com a chave `likes` contendo o número de likes gerado aleatoriamente (`$currentLike`).

### Benefícios do Retorno JSON com Array Associativo

Ao retornar um JSON com um array associativo, obtemos os seguintes benefícios:

- **Estrutura Semântica**: O uso de um array associativo permite estruturar os dados de forma clara e semântica, atribuindo significado aos campos de retorno (`likes` no nosso exemplo).
- **Legibilidade**: A leitura e interpretação do JSON são facilitadas com o uso de chaves descritivas como `likes`, tornando o conteúdo mais legível para quem consome a API.
- **Flexibilidade**: O uso de arrays associativos permite adicionar mais informações ao JSON de forma simples, incluindo outros campos como `dislikes`, `comments`, etc., conforme necessário.

### Testando o Endpoint

Para testar o endpoint, basta acessar a URL com os parâmetros desejados no navegador:

Exemplo de URL:
```
http://127.0.0.1:8000/mensagens/1/like/like
```

Resultado no navegador (JSON retornado):
```json
{"likes":123}
```

Ao seguir esses passos, você será capaz de criar e testar um endpoint básico em sua aplicação Symfony 5, retornando dados estruturados em formato JSON para consumo externo.

---

Essa documentação abrange a criação de um endpoint simples usando Symfony 5, mostrando como definir rotas, manipular parâmetros dinâmicos na URL, retornar respostas JSON estruturadas e os benefícios de utilizar arrays associativos nesse contexto. Esses conceitos são fundamentais para desenvolver APIs robustas e escaláveis com Symfony.

----------------------------------------------------------------------------------------------------------------------------------

## Uso do jQuery no Symfony

### Incluindo jQuery CDN no Twig

Para utilizar o jQuery em seus arquivos Twig, insira o CDN dentro do bloco de scripts (`javascripts`) no arquivo principal do Twig da seguinte maneira:

```twig
{% block javascripts %}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
{% endblock %}
```

Isso garante que o jQuery seja carregado em todas as páginas que estendem esse arquivo principal.

### Utilizando `{{ parent() }}` para Estender Blocos

Se você estender o arquivo principal em outro arquivo Twig e quiser manter o conteúdo original do bloco `javascripts`, utilize a função `{{ parent() }}`. Isso permite adicionar scripts adicionais sem perder o conteúdo existente.

Exemplo de uso do `{{ parent() }}` em um arquivo que estende o arquivo principal:

```twig
{% extends 'base.html.twig' %}

{% block javascripts %}
    {{ parent() }} {# Mantém o conteúdo original do bloco javascripts do arquivo base.html.twig #}

    <script>
        // Seu script jQuery aqui
    </script>
{% endblock %}
```

Neste exemplo:

- O bloco `javascripts` é estendido do arquivo `base.html.twig` usando `{% extends 'base.html.twig' %}`.
- A função `{{ parent() }}` é utilizada para incluir o conteúdo original do bloco `javascripts` do arquivo `base.html.twig`.
- Um novo script jQuery pode ser adicionado abaixo utilizando a tag `<script>`.

### Manipulação de Eventos em JavaScript com jQuery

O código a seguir demonstra como adicionar um evento de clique a links dentro de um contêiner específico e manipular esse evento utilizando jQuery.

#### Código JavaScript:

```javascript
var $container = $('.js-like-deslike');

$container.find('a').on('click', function(e) {
    e.preventDefault();
    var $likeType = $(this).data('like');

    $.ajax({
        url: '/mensagens/1/like/' + $likeType,
        method: 'POST'
    }).then(function(response) {
        console.log(response.likes);
        document.getElementById('js-total-likes').innerHTML = response.likes;
    });
});
```

#### Explicação do Código:

1. **Selecionando o Contêiner e Adicionando Evento de Clique:**
   - `$('.js-like-deslike')`: Seleciona um elemento HTML que possui a classe CSS `.js-like-deslike` e armazena uma referência a ele na variável `$container`.
   - `.find('a')`: Busca por todos os elementos `<a>` dentro do `$container` e adiciona um manipulador de evento de clique a cada um deles.

2. **Evento de Clique no Link (`<a>`):**
   - `e.preventDefault();`: Previne o comportamento padrão do navegador para o evento de clique nos links, impedindo que a página seja recarregada ou que o navegador siga o link.
   - `var $likeType = $(this).data('like');`: Obtém o valor do atributo `data-like` do link `<a>` clicado.

3. **Requisição AJAX com o Tipo de Like:**
   - Envia uma requisição AJAX para a URL `/mensagens/1/like/` com o tipo de like (`like` ou `deslike`).
   - `then(function(response) { ... })`: Manipula a resposta da requisição AJAX quando ela for concluída com sucesso.
     - `console.log(response.likes);`: Imprime no console a quantidade de curtidas obtida na resposta.
     - `document.getElementById('js-total-likes').innerHTML = response.likes;`: Atualiza o conteúdo do elemento com o ID `js-total-likes` na página com a quantidade de curtidas obtida na resposta.

Este exemplo demonstra como usar jQuery e AJAX para adicionar interatividade a uma página web, permitindo o processamento assíncrono de eventos como cliques e atualizações de conteúdo dinâmico.

----------------------------------------------------------------------------------------------------------------------------------

# Rotas Inteligentes

Ao trabalhar com rotas em um projeto Symfony, é importante garantir que as rotas sejam configuradas de forma inteligente para limitar o acesso e proteger a aplicação contra solicitações indesejadas. Neste guia, vamos abordar como usar anotações e expressões regulares para definir rotas robustas e seguras, além de explorar comandos úteis do terminal para verificar e testar rotas.

### Definindo Métodos Permitidos

No Symfony, ao definir uma rota usando anotações, podemos especificar quais métodos HTTP são permitidos para essa rota. Isso ajuda a restringir o acesso de acordo com as necessidades do aplicativo.

Por exemplo, ao definir uma rota que aceita apenas o método POST:

```php
/**
 * @Route("/mensagens/{id}/like/{direction}", name="mensagens_like", methods="POST")
 */
```

Se alguém tentar acessar essa rota usando o método GET em uma requisição AJAX, isso resultará em um erro 405 (Método não permitido).

### Restringindo Parâmetros com Expressões Regulares

Para garantir que os parâmetros de uma rota atendam a critérios específicos, como aceitar apenas certos valores ou formatos, podemos utilizar expressões regulares nas anotações das rotas.

Por exemplo, se quisermos garantir que o parâmetro `{direction}` só aceite os valores "like" ou "deslike":

```php
/**
 * @Route("/mensagens/{id}/like/{direction<like|deslike>}", name="mensagens_like", methods="POST")
 */
```

Se alguém tentar acessar a rota com um valor diferente de "like" ou "deslike", o Symfony retornará um erro informando que a rota não foi encontrada.

### Limitando Tipos de Parâmetros

Além de restringir os valores dos parâmetros, podemos limitar os tipos de parâmetros, como no caso do parâmetro `{id}` que deve ser numérico:

```php
/**
 * @Route("/mensagens/{id<\d+>}/like/{direction<like|deslike>}", name="mensagens_like", methods="POST")
 */
```

A expressão `<\d+>` garante que o parâmetro `{id}` seja composto apenas por dígitos numéricos.

### Comandos Úteis do Terminal

Para verificar as configurações de rota e testar como elas respondem a diferentes solicitações, o Symfony fornece comandos úteis no terminal.

#### Verificando se uma Rota Corresponde a uma URL Específica

Podemos usar o comando `router:match` para verificar se uma determinada URL corresponde a uma rota específica e qual método HTTP é aceito por essa rota:

```bash
php bin/console router:match /mensagens/1/like/like --method=POST
```

Este comando informará se a rota corresponde à URL fornecida e se ela aceita o método POST.

#### Testando Restrições de Parâmetros com Expressões Regulares

Para testar se uma rota restringe adequadamente os parâmetros com expressões regulares, podemos tentar acessar a rota com valores inválidos:

```bash
php bin/console router:match /mensagens/1/like/abacaxi --method=POST
```

Se a rota estiver configurada corretamente, o Symfony informará que a rota não foi encontrada, indicando que os parâmetros não atendem aos critérios especificados na expressão regular.

Esses comandos são úteis para validar e depurar as configurações de rota no Symfony, garantindo que suas rotas estejam configuradas de forma segura e eficaz.

----------------------------------------------------------------------------------------------------------------------------------

## Serviços no Symfony

Em Symfony, os objetos utilizados na controller para executar determinadas funções são chamados de "serviços".

### Exemplo de Gerenciamento de Rotas

O gerenciamento de rotas é um serviço importante no Symfony, definindo as URLs acessíveis e os métodos HTTP permitidos.

```php
/**
 * @Route("/mamifero/{slug}")
 */
```

### Renderização de Templates Twig

O gerenciamento da renderização de templates Twig também é um serviço essencial no Symfony.

#### Exemplo de Uso de Twig na Controller (Versão Simples)

Aqui está um exemplo simples de como renderizar um template Twig na controller:

```php
public function homepage()
{
    return $this->render('mamiferos/homepage.html.twig');
}
```

Neste exemplo:

- O método `homepage` na controller é responsável por renderizar e retornar o template Twig `mamiferos/homepage.html.twig`.
- O método `render` é usado para renderizar o template Twig especificado.
- A função `return` envia a resposta renderizada de volta ao navegador.

#### Exemplo de Uso de Twig na Controller (Versão Extendida)

A versão extendida permite mais controle sobre o ambiente Twig na controller:

```php
use Twig\Environment;

public function homepage(Environment $twigEnvironment)
{
    $html = $twigEnvironment->render('mamiferos/homepage.html.twig');     
    return new Response($html);
    // return $this->render('mamiferos/homepage.html.twig');  <-- Versão reduzida
}
```

Neste exemplo:

- O método `homepage` recebe o serviço `Environment` do Twig como um parâmetro.
- O serviço `Environment` é usado para renderizar o template Twig `mamiferos/homepage.html.twig` diretamente na controller.
- A resposta renderizada é enviada de volta ao navegador.

### Comandos do Terminal para Gerenciar Serviços

Você pode usar comandos do terminal para verificar e gerenciar serviços no Symfony.

#### Listar Todos os Serviços

O comando abaixo lista todos os serviços disponíveis:

```bash
php bin/console debug:autowiring
```

Isso exibirá uma lista de todos os serviços e uma breve descrição de cada um.

#### Verificar um Serviço Específico

Por exemplo, para verificar serviços relacionados a logs:

```bash
php bin/console debug:autowiring log
```

Isso listará os serviços relacionados a logs disponíveis no Symfony.

### Uso de Serviços na Controller

Os serviços são injetados como parâmetros nas ações da controller.

#### Exemplo com Logger

```php
use Psr\Log\LoggerInterface;

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
```

Neste exemplo:

- `LoggerInterface` é um serviço que registra informações de log.
- O serviço é injetado como um parâmetro na action `mensagensLike`.
- O método `info` é usado para registrar mensagens de log com informações específicas.

### Conclusão

Entender e utilizar os serviços no Symfony é fundamental para aproveitar todo o potencial do framework. Certifique-se de conhecer os serviços mais comuns e utilizados e consulte a documentação do Symfony para obter mais detalhes sobre cada serviço disponível.
