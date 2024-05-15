<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Legal!!!</title>
</head>
<body>
	<h1>
		Fazendo Upload de arquivinhos
	</h1>
	<hr>
	<form action="upload.php" 
	      method="POST" 
	      enctype="multipart/form-data">
		<h3>
			Selecione uma Imagem:
		</h3>
		<input type="file" name="arquivo">	
		<br><br><br>	
		<input type="submit" value="Salvar!">
	</form>
</body>
</html>