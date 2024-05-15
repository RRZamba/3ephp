<?php
	//Ao receber o arquivo
    //o mesmo vem em duas
    //partes distintas:
    // O nome e o arquivo!
	//Recebendo valores do form.php
	$arqTemp = $_FILES['arquivo']['tmp_name'];
	$arqNome = $_FILES['arquivo']['name'];

	//Caminho onde será salvo o arquivo
	$caminho = 
	   "C:/wamp64/www/UploadMilGrau/imagens/$arqNome";

	//Salvando a !@#$#$# do arquivo!!!
	if(@move_uploaded_file($arqTemp,$caminho)) 
	{
		//Arquivo Salvo
		echo "<h3>Upload com sucesso!</h3> <br>";
		echo "Salvo em: $caminho";
	}   
	else
	{
		echo "Erro ao fazer upload... <br>";
		echo "Entrar em contato com o suporte!";
	}
?>