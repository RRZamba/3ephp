<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário chuchu</title>
</head>
<body>
	<center>
		<h1>Cadastro de idiotas!</h1>
	</center>
	<hr>
	<!--
		Parâmetros da Tag Form
		action => script que irá receber os valores 
		method => forma que os valores serão enviados

	-->

	<form action="doform.php" method="POST">
		<h2>Nome:</h2>
		<input type="text" name="nome"><br>

		<h2>Logradouro:</h2>
		<input type="text" name="end"><br>

		<h2>Profissão:</h2>
		<input type="text" name="prof"><br>

		<input type="submit" Value="Enviar">
	</form>

</body>
</html>