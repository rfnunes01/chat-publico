# CHAT PÚBLICO
Sala de bate-papo pública usando PHP

Material de apoio: https://www.revista-programar.info/artigos/sistema-de-chat-publico-em-php/

## INTRODUÇÃO
Embora a base desse sistema seja PHP, outras tecnologias também serão usadas.Nossa caixa de ferramentas então tem o seguinte conteúdo e seu uso:

- PHP: Main programming language;
- HTML: Page structure;
- CSS: Style of the pages;
- JQuery / JavaScript: Using AJAX;
- MySQL / MariaDB: Database;
- Apache: Web server.

## Características
Este sistema de bate-papo terá os seguintes recursos:

- Sala de chat pública única;
- Escolha um apelido exclusivo;
- enviando mensagens;
- recebendo mensagens.

## Caixa de ferramentas
Para implementar este bate-papo, usaremos várias ferramentas que se complementam.Algumas dessas ferramentas foram instaladas com o XAMPP, permitindo instalar facilmente um servidor da Web em sua máquina local.

## PHP
O PHP, um acrônimo recursivo para "PHP: pré-processador de hipertexto" (originalmente página inicial) é uma linguagem de programação gratuita e de código aberto do servidor.O PHP é, por exemplo, usado pelo Facebook e WordPress.Em 2014, foi o idioma de escolha para 82% dos sites (onde a linguagem de programação é conhecida).
Neste sistema de bate -papo, que vamos construir, o PHP tem a função de comunicar com o banco de dados para armazenar e consultar mensagens.

## MySQL
O MySQL é um sistema de gerenciamento de banco de dados (DBMS) que usa o SQL (linguagem de consulta estruturada).Sua licença é gratuita para o desenvolvimento, mas se for usada em aplicativos comerciais, será paga.Usado pela NASA, Friendster, HP, Google, entre outras empresas, atualmente é um dos bancos de dados mais populares, com mais de 10 milhões de instalações em todo o mundo.
A função do MySQL em nosso sistema de bate -papo está armazenando mensagens de usuário (o MARIADB também pode ser usado).Duas tabelas serão usadas, uma para armazenar os apelidos e outro para armazenar as mensagens.
