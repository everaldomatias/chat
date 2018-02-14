<?php
	$_SESSION['id_para'] = $_GET['usuario'];
?>

<div id="content">
	<div id="lista">
	</div><!-- #lista -->
	<hr>
	<form action="" id="chat" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12">
			<div class="input-group">
				<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control" />
				<span class="input-group-btn">
					<input type="submit" id="submit-send" value="&rang;&rang;" class="btn btn-success">
					<input type="hidden" name="env" value="envMsg">
				</span>
			</div>
		</div>
	</form>
	<div class="clearfix"></div>
	<?php
		if ( isset( $_POST['env'] ) && isset( $_POST['env'] ) == "envMsg" ) {
			$mensagem = $_POST['mensagem'];
			$id_para = $_GET['usuario'];
			$id_de = $usuarioAtual;

			if ( empty( $mensagem ) ) {
				echo "<code>Digite sua mensagem!</code>";
			} else {
				$insert = "INSERT INTO mensagens ( id_de, id_para, mensagem ) VALUES ( '$id_de', '$id_para', '$mensagem' )";
				$result = mysqli_query( $conecta, $insert );

				if ( $result ) {
				} else {
					echo "<code>Erro ao enviar mensagem!</code>";
				}
				
			}
		}
	?>
</div>