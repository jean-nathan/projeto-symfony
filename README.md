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

## 4) ADENDOS - Informações sobre a estrutura do projeto

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

## 5) Como utilizar o próprio servidor do Symfony e entendendo suas funcionalidades
Para iniciar o servidor, basta executar o comando: symfony serve

Para visualizar suas funcionalidades, basta executar o comando: symfony server

server:ca:install : Serve para instalar um certificado de autenticidade (Autoria).
Obs: No Symfony 5.1 e versões posteriores, o comando server:ca:install foi removido e não está mais disponível

## 6) Como mudar a porta que meu servidor está sendo executado:

Acesse o Menu de opções do Symfony, basta executar o comando: symfony serve --help
Depois disso, você verá várias opções de configurações, no qual você vai utilizar a --port=value

Para mudar por exemplo para porta 8080, basta executar o comando: (Pare o servidor antes de configurar)

symfony serve --port=8080

---FIM