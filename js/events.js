$(function(){

	$("#enviarmail").click(function(){
		json = {
			nombre : $("#nombre").val(),
			email : $("#email").val(),
			telefono : $("#telefono").val(),
			textarea : $("#textarea").val()
		};
		validarMail(json);
	});

});