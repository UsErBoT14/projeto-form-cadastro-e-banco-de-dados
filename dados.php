<!-----------------CONEXAO COM O BANCO DE DADOS-------------------->
<?php

$server = "localhost"; //o server local do wamp ou (WINDOWS APACHE MYSQL ) O local que a "funçãozinha" do mysql_connect vai fazer a função de fazer lógicamente a conexão para o "localhost". ...Simples

$user = "root"; //é root por padrão do phpmyadmin e a senha vazia.(USUARIO do formulário do phpmyadmin)

$pass = ""; //a senha que no caso é vazia.(//senha do formulario do phpmyadmin)

$db = "banco"; //users é a tabela e dentro da tabela possui as colunas. (BANCO DE DADOS (*A BASE DE TUDO*))

//e todos esses dados para fazer a conexão no banco de dados.
//cone (conexao)
$cone = mysqli_connect($server, $user, $pass, $db);
?>