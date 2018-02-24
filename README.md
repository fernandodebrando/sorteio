# Sorteador

Monte uma lista com nomes e sorteie quantos nomes desejar desta lista com a
possibilidade de remover quem já foi sorteado ou quem não deveria ter sido
sorteado em tempo real.

## Setup inicial

* Clone o repositório
* Altere o arquivo config.json colocando a lista de nomes e o título da página
* Altere a imagem `img/bg.png` substituindo a mesma pela logo de fundo que
    deverá aparecer no site.
* Instale o gulp e dependências do node:
```bash
npm install
npm install gulp -g
```
* Compile os assets do projeto rodando o comando `gulp` na raiz do projeto
* Execute `composer install`
* Acesse a página no navegador e faça seus sorteios

## Sorteio via Twitter

* Copie o arquivo `.env.example` para `.env`
* Coloque no `.env` suas credencias do app do Twitter criado em seu painel de
    desenvolvimento.
* Defina no arquivo `config.json` a query de busca para o sorteio.
* Acesse a página /twitter.php para gerar a lista de sorteio após todos
    Twittarem.
