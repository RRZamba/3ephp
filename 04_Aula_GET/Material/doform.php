<?php
	/* O HTTP permite 2 formas
	   de requisição(GET e POST)
	   As duas formas mandam dados para o servidor,
	   porém de forma diferente!

	   Método POST 
	   ->Informações invisíveis ao user
	   ->Valores passados pela URI
	   ->Sem limite de tamanho

		Método GET
	   ->Informações visíveis ao user
	   ->Valores passados pela URL
	   ->Max. 1024 caractéres
	*/ 

	   //1) Recebendo os valores do usuário
	   $nome = $_GET['nome'];
	   $sobrenome = $_GET['sobrenome'];
	   $situacao = $_GET['emp'];
	   $estado = $_GET['estado']; 

	   // 2) Mostrando que funcionou
	   echo "Olá $nome $sobrenome";
	   echo "<br>";
	   echo "<h3>Eu te amo!!!</h3>";
	   echo $situacao;
	   echo "<br>";
	   echo $estado;
	   echo "<br>";



?>