<?php
	// Duplique esse arquivo com o nome settings.php
	// nessa mesma pasta /settings e adicione as configurações
	// necessárias.
	// 
	// Lembrando que o arquivo que criar não deve ser versionado.

	$host 		= "localhost";
	$usuario	= "root";
	$senha		= "pass";
	$banco		= "chat";

	// Iniciando a conexão
	$conecta = mysql_connect( $host, $usuario, $senha ) OR print( mysql_error() );
	mysql_select_db( $banco, $conecta );

	if ( ! $conecta ) {
		echo "Erro ao se conectar com o banco de dados!";
	}