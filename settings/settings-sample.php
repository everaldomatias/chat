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
	$conecta = mysqli_connect( $host, $usuario, $senha, $banco ) OR print( mysqli_connect_errno() );

	if ( mysqli_connect_errno() ) {
		echo "Erro ao se conectar com o banco de dados!" . mysqli_connect_errno();
	}

	// Outras configurações
	date_default_timezone_set( 'America/Sao_Paulo' );
	$globalData = date( "d/m/Y" );
	$globalHora = date( "H:i" );
	$showNome = false;

	if ( isset( $_SESSION['usuario'] ) && $_SESSION['usuario'] != null ) {
		$nomeAtual = $_SESSION['nome'];
		$usuarioAtual = $_SESSION['usuario'];
		$showNome = true;
	}