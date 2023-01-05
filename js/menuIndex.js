/* Validación */
function validacion(){
	var usuario = document.getElementById("usuario").value;
	var contraseña = document.getElementById("contraseña").value;

	if(usuario == "carlos" && contraseña== "123"){
		/* window.location.assign("menu.html"); */
		window.open("menu.html");
	}
	else{
		alert("No valido")
		return;
	}
}

function cerrarD(){
	let text = "Está seguro que quieres cerrar el dia y pasar a la siguiente fecha?\nLos cambios no guardados se perderán";
	if(confirm(text)==true){
		window.open("index.html");
	}
	else{
		return none;
	}
}

function confirmarCV(){
	let text = "Está seguro que quieres cancelar la venta?\nLa acción es irreversible";
	if(confirm(text)==true){
		window.open("menu.html");
	}
	else{
		return none;
	}
}


/* ----------------------------------------------------- */
/* function login(){
	var user, pass;

	user = document.getElementById("usuario").ValueMax;
	pass = document.getElementById("cotraseña").ariaValueMax;
	
	if(user == "carlos" && pass== "123"){
		window.location= "menu.html"
	}
} */

/* var user_name = document.forms['form']['user_name'];
var user_password = document.forms['form']['user_password'];

var user_error = document.getElementById('user_error');
var pass_error = document.getElementById('pass_error');

user_name.addEventListener('textInput', user_Verify);
user_password.addEventListener('textInput', pass_Verify);

function validated(){
	if (user_name.value.length < 4) {
		user_name.style.border = "1px solid red";
		user_error.style.display = "block";
		user_name.focus();
		return false;
	}
	if (user_password.value.length < 4) {
		user_password.style.border = "1px solid red";
		pass_error.style.display = "block";
		user_password.focus();
		return false;
	}

	if (user_name.value.length >= 5) {
		user_name.style.border = "1px solid silver";
		user_error.style.display = "none";
		return true;
	}

	if (user_password.value.length >= 5) {
		user_password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}

} */