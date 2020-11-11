$(document).ready(function(){
	var estado = false;

	$('#btn-toggle').on('click',function(){
		$('.seccionToggle').slideToggle();

		if (estado == true) {
			$(this).text("Abrir");
			estado = false;
		} else {
			$(this).text("Cerrar");
			
			estado = true;
		}
	});
});