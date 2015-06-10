function Login(){
	var user = $("#user").val();
	var pass = $("#pass").val();
	console.log(user +" "+ pass);
	$.ajax({
		type: "POST",
		url: "phpFunctions/login.php",
		data: {loged: true, usuario: user, contraseña: pass}
	}).done(function(data){
		if(data == 1)
			location.replace("menu");
		else
			alert("Usuario y/o Contraseña erroneas.");
	});
}