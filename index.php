<!--INICIAR UMA SESSAO-->
<?php
session_start();

?>
<!--INICIO DO HTML-->

<!DOCTYPE html>

<html lang="pt-br">

<head>
	<title>Formulário cliente</title>

<meta charset = "utf8">

<!-------------------------CSS STYLE (ESTILO) !----------------->
<style>

.button2{
	cursor:pointer;
	font-family: sans-serif;
	background-color: lightgreen;
	font-size: 15px;
}

.txt2{
	font-family: sans-serif;
	font-size: 15px;
}

.caixa{
	font-family: sans-serif;
}
.button{
	cursor:pointer;
	background-color: lightgreen;
	padding: 10px 50px;
	font-family: sans-serif;
	font-size: 17px;
}

body{
	background-color: white;
}

div{
	text-align: center;
	width:100%;
	background-color: white;
	margin: 50px;
  	padding: 25px;
  	width: 255px;
  	border: 1px solid green;
  	border-width: 2px;
}

h2{
	font-family: sans-serif;
	text-align: center;
}
h3{
	font-family: sans-serif;
	text-align: center;
}

h4{
	font-family: sans-serif;
	text-align: center;
}

</style>
 

<!-------------------------FIM DO CSS------------------------>




<!-------------------------COMEÇO DO FORMULÁRIO---------------------------------->

</head>
	<body>

		<h2>Olá seja bem-vindo!
		<br>
		<br>
		Faça seu cadastro</h2>
			
			
		<?php
		//	DEFINIÇÃO DA SESSÃO UMA MENSAGEM !!
		if(isset($_SESSION['msg'])){
		
		// 	EXIBIR ESTA MENSAGEM !!	
			echo $_SESSION['msg'];

		// DEFINIÇÃO DE NÃO DEFINIDO
			unset($_SESSION['msg']);
		}
		?>
			

		 <h3>Formulário</h3>
		
		<center>
		<div>
				<!-- FORM PRINCIPAL -->

		<form method="POST" action="conexao.php">
			<input class="caixa" type="text" name="nome" placeholder="Insira seu nome...">
			<br><br>
			<input class="caixa" type="email" name="email" placeholder="Insira seu e-mail...">
			<br><br>
			<input type="password" name="senha" placeholder="Insira sua senha...">
			<br><br>
			<input type="submit" value="Cadastrar" class="button">
	    </form>
	
<!--------------------FIM DO FORMULÁRIO---------------------------------------------------------------------------------->



<!-----------------------------INTERAÇÃO COM JAVASCRIPT-------------------------------------------------------------->

				<!--AVALIAÇÃO DO FORMULARIO (JS)! !-->

            	 <h4>O que você achou do formulário? Precisa melhorar? Envie seu comentário e o emote!</h4>
             		        				

 <!-- IMAGE ACTION (JS) !-->
 

        					<!-- EMOTE FELIZ !-->
             			
<button onclick="document.getElementById('img').src='joia.gif'">Gostei</button>
<br>

<img id="img" src="" style="width:85px">

<br>						<!-- EMOTE HATE -->

<button onclick="document.getElementById('img').src='hate.gif'">Não gostei</button><br>

<br>
						<!-- FORM DO COMENTARIO DE AVALIAÇÃO -->

             		<form method="get" action="comen.php">
             			<input type="text" name="comentario" placeholder="Insira seu comentário...">
<br>
<br>
         					<input class="button2" type="submit" name="env" value="Comentar" />
         			</form>
	</div>
</center>
	</body>
</html>