$(function(){

	$("#enviarmail").click(function(){
		json = {
			nombre : $("#nombre").val(),
			email : $("#email").val(),
			telefono : $("#telefono").val(),
			mensaje : $("#textarea").val()
		};
		validarMail(json);
	});

});