# Desafio-Promobit

# Requisitos
- docker 20.x
- php 7.x
- Symfony = 4.x
- composer >= 2.1

# Instalação do projeto
- Dentro da pasta raiz executar: `docker-compose build`
- Subir o container do banco com `docker-compose up -d`
- execute: `composer install`
- forçar atualização da base: ` bin/console doctrine:schema:update --force`
- rodar o projeto: `bin/console server:run` 
