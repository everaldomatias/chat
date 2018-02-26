<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário HTML5 - Tutsup</title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
    <script src="js/scripts.js"></script> <!-- load our javascript file -->
</head>
<body>
 
<form class="form_clientes" action="php/envia_clientes.php" method="post" enctype="multipart/form-data">
 
	<label for="cliente_nome"> Nome: </label> <br>
	<input type="text" class="cliente_nome" id="cliente_nome" name="cliente_nome" required> <br><br>
	
	<label for="cliente_sobrenome"> Sobrenome: </label> <br>
	<input type="text" class="cliente_sobrenome" id="cliente_sobrenome" name="cliente_sobrenome" required> <br><br>
	
	<label for="cliente_idade"> Idade: </label> <br>
	<input type="number" class="cliente_idade" id="cliente_idade" name="cliente_idade" required> <br><br>
	
	<label for="cliente_sexo"> Sexo: </label> <br>
	<select class="cliente_sexo" id="cliente_sexo" name="cliente_sexo" required>
		<option value=""></option>
		<option value="Masculino">Masculino</option>
		<option value="Feminino">Feminino</option>
		<option value="Outro">Outro</option>
	</select>
	<br><br>
	
	<input type="submit" value="Enviar">
	
</form>
 
</body>
</html>
