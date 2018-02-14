<div id="content">
	<form action="" method="POST" enctype="multipart/form-data">
		<label for="">Usuário</label>
		<p><input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário"/></p>
		<label for="">Senha</label>
		<p><input type="password" name="senha" id="senha" class="form-control" placeholder="********"></p>
		<p><input type="submit" name="Entrar" class="btn btn-primary btn-lg btn-block"></p>
		<input type="hidden" name="env" value="login">
	</form>
	<?php
		if ( isset( $_POST['env'] ) && isset( $_POST['env'] ) == 'login' ) {
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];
			if ( empty( $usuario ) || empty( $senha ) ) {
				echo '<code>Preencha todos os campos obrigatórios!</code>';
			} else {
				$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
				$result = mysqli_query( $conecta, $query );
				$busca = mysqli_num_rows( $result );
				$linha = mysqli_fetch_assoc( $result );

				if ( $busca > 0 ) {
					$_SESSION['nome'] = $linha['nome'];
					$_SESSION['usuario'] = $linha['usuario'];
					echo '<meta http-equiv="Refresh" content="0 url=?pagina=usuarios">';
				} else {
					echo "<code>Usuário e/ou senha inválidos!</code>";
				}
			}
		}
	?>
</div>