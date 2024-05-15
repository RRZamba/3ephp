<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Show</title>
</head>
<body>
	<!-- Formulário para passar os dados -->
	<form method="GET" action="doform.php">
		<h3>Nome:</h3>
		<input type="text" name="nome">

		<h3>Sobrenome:</h3>
		<input type="text" name="sobrenome">	
		
		<h3>Situação:</h3>
		<input type="radio" name="emp" value="desempregado">
		Desempregado
		<input type="radio" name="emp" value="empregado">
		Empregado

		<h3>Estado:</h3>
		<select name="estado">
			<option value="--">--</option>
			<option value="SP">SP</option>
			<option value="RJ">RJ</option>
		</select>
		<br><br>
		<input type="submit" value="enviar">


	</form>

</body>
</html>