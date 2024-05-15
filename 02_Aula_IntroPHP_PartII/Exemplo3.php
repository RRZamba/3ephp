<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php 1000 Grau!!!</title>
</head>
<body>
	
	<?php
		//Estrutura Condicional IF
		$teste = 66;
		$teste = 1;

		/*
			Operadores Lógicos
			== - Igual 
			>  - Maior
			<  - Menor
			>= - Maior Igual
			<= - Menor Igual
			!= - Diferente
		*/	

		if($teste <= 155)
		{
			//Se verdade 
			echo "$teste é menor que 155 <br>";
		}
		else
		{
			//Se falso 
			echo "$teste é Maior baby!!!";
		}


		/*
			Operadores Logicos

			&& ou and - Devolve verdadeiro se as 
			condicoes forem verdadeiras

			|| ou and - Devolve falso se as 
			condicoes forem falsas

			! - Verifica  se a condição é o contrário
			   Verdadeiro => Falso
			   Falso => Verdadeiro
		*/


			$idade = 17;
			$gen = "male";
			if(($gen == "male") && ($idade >=18))
			{
				echo "Vai fazer tiro de guerra otário! <br>";
			}
			else
			{
				echo "Pode deixar o cabelo crescer por enquanto!";
			}


			//Se Falso!!!!
			$conexaoBD = true;
			if(!$conexaoBD)
			{
				echo "Erro ao conectar com o Banco de dados!!!<br>";
			}
	?>

</body>
</html>