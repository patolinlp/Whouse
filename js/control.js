onload=start;

function load_section(element) {
	var id = element.id;
	$("#subcontent").load("php/"+id+".php");
	return false;
}

function start(){
	$("#subcontent").load("php/inicio.php");
}

function validarMail (json) {

	$.ajax({
		data: json,
		url: "php/mail.php",
		type: "post",
		async: false,
		success: function (result){
			
			//console.log(json.parse(result));
			var resultado = JSON.parse(result);
			console.log(resultado);
			
		}
	});

}