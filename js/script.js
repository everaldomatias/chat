$(document).ready(function(){
	comeca();
})
var timerI = null;
var timerR = false;

function para() {
	if (timerR) {
		clearTimeout(timerI);
		timerR = false;
	};
}
function comeca() {
	para();
	lista();
}
function desce() {
	window.scrollTo( 0, document.body.scrollHeight );
	console.log('cliquei');
}
function lista() {
	$.ajax({
		url: "paginas/sys/lista.php",
		success: function( statusText ){
			$("#lista").html(statusText); // Mostra o resultado da pagina lista.php
			//desce();
		}
	})
	timerI = setTimeout("lista()", 3000); // Tempo de espera para atualizar novamente
	timerR = true;
}

//$( "body" ).on( "click", "#submit-send", desce );
