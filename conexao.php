<?php
session_start();
//--------conexao dos dados---------

//o arquivo para incluir os dados que tem aqui com o método POST
include_once("dados.php"); 

//variaveis
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = mysqli_real_escape_string($cone, trim(md5($_POST['senha'])));
//query da  tabela users e o que tem dentro das colunas que são ao todo (id, nome, email, criado), e modificado mais no caso eu vou usar apenas o nome e o email, porque o id esta auto incremento ele mesmo ordena para mim e o modificado está nulo no caso "vazio" e deixei o DATATIME que foi criado para NOW ou agora (no tempo atual da criação que sempre quando algúem cadastrar vai aparecer a data e a horaS que foi cadastrado). ...
	
//query_d é a (query dos dados no caso uma consulta uma requsição para os dados)
	//O Insert Into ao pé da letra significa "INSERIR DENTRO DE ". No caso da tabela users e dentro da tabela possui as colunas do banco de dados.
$query_d = "INSERT INTO users (nome, email, senha, criado) VALUES ('$nome', '$email', '$senha', NOW())";

//vamos fazer a conexao desta query no arquivo "dados.php" e a query possui todos os dados para fazer conexao com o "$cone" ou (conexao)... Ai eu solicitei o mysqli_query dentro de tudo que tem armazenado nas variáveis. ...
$cone_table = mysqli_query($cone, $query_d);

//Ô "$cone é a conexao e table é a tabela (conexao da tabela) note que no file (arquvio) dados.php eu específico a conexao que vai fazer no baco de dados... aí no caso eu quero mandar essa query pra lá".

//funcao lógica para o mysqli inserir o id na variavel de conexao. então ("{ }") eu vou iniciar uma variavel GLOBAL justamente a palavra em sí ja diz e na funcao da variavel vou pode inserir ela em qualquer lugar no caso eu quero uma "sessão" com o tipo de mensagem caso faça a conexao que estamos pedindo na varivel $cone se for feita a conexao entao me mande a mensagem que deu tudo certo. Simples. ... Caso ao contrário... Ah me esqueci de explicar o "location: " o location é a localização que quando a determinada lógica da função for efetuada então ele me localiza para a index.php no caso vou ser redirecionado para o "índice o (index) o início. ..."...Bom caso ao contrário me mande para o índice e me avise que *NÃO* deu certo.

if(mysqli_insert_id($cone)){
	//VAR GLOBAL
	$_SESSION['msg'] = "<h4>Você foi cadastrado</h4>";
	header("Location: index.php"); //LOCAL PARA TE REDIRECIONAR.
}
else{
	$_SESSION['msg'] = "<h4>Você não foi cadastrado</h5>";
	header("Location: index.php"); //LOCAL PARA TE REDIRECIONAR. ...
}

?>
