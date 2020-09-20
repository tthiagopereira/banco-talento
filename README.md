#Banco de talentos
Autor: Thiago Pereira dos Santos 

Sistema concebido em trabalho conjunto com a 12ª RM, em Manaus, em 2020, com a finalidade de conectar organizações militares com ex-militares a serem recomendados e empresas empregadoras interessadas em contratar novos recursos humanos.

Nome
Banco de Talentos: Web App para recrutamento de (ex-)militares temporários por empresas.

Descrição
O sistema foi concebido pela 29ª CSM, como uma forma de criar uma plataforma para conectar organizações militares do Exército com empresas, de maneira que as primeiras disponibilizem perfis profissionais de militares temporários que gostariam de recomendar, e as últimas possam selecionar e contratar esses militares. Foi observado que diversos tipos de empresas gostam de contratar ex-militares que possuam recomendação de suas OMs. A plataforma é portanto uma evolução da antiga "Carta de Recomendação", que existe no Exército, de forma a colaborar com papel social do Exército e premiar os bons serviços prestados pelos militares temporários durante os anos na Força. É uma forma de colaborar com esses militares que ficam de 1 à 8 anos no serviço militar em sua recolocação no mercado de trabalho. A intenção é que possa ser implantado e administrado pelas Regiões Militares do Exército em qualquer parte do país. As funcionalidades básicas do aplicativo são:

Cadastramento de perfis profissionais, por parte das organizações militares. Busca por múltiplos critérios por parte dos recrutadores de empresas. Criação de processos de recrutamento por parte dos recrutadores.

Os militares donos dos perfis profissionais, não possuem acesso à ferramenta. Somente os responsáveis pelo pessoal das OMs (S1), Cmt/Ch/Dir de OMs, recrutadores de empresas interessadas e os administradores do sistema, militares encarregados do "Serviço Militar" nas diversas Regiões Militares do Exército.


### Instação
```bash
git clone https://github.com/tthiagopereira/banco-talento.git
cd banco-talento
composer install
cp .env.example .env
php artisan key:generate
```

- You have to register and login to app (database needed)
- If you are user MySQL you can paste this to your .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=banco_talento
DB_USERNAME=root
DB_PASSWORD=
```

- To create table in database
```bash
	php artisan migrate
```
(or to create table with exemplary user 'John Doe')
```bash
	php artisan db:seed
``` 



##### That's all. Enjoy.

### Change log
##### v 1.0.0