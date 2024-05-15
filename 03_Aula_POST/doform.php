<?php
	/*
	   Variável global!
	   '$_POST['']'
	   É a forma de receber os valores oriundos do cliente para o servidor.
	   Obs. O ÍNDICE DEVE ESTAR 
	   EXATAMENTE IGUAL AO FORMULÁRIO HTML!!!!
	*/

	 //1 - Recebendo os valores  
	 $nome = $_POST['nome'];
	 $endereco = $_POST['end'];
	 $profissao = $_POST['prof'];


	 //2- Validando os campos
	 if($nome == "" || $endereco ==""||$profissao=="") 
	 {
	 	echo "<script>
	 	        history.back();
	 	      </script>";
	 }




	 //3 - Mostrando que funcionou!!!
	 echo "Nome: $nome <br>";
	 echo "Endereço: $endereco <br>";
	 echo "Profissão: $profissao <br>";


	 


?>