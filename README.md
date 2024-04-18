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

----------------------------------------------------------------------------------------------------------------------------------

