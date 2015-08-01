function ingresarSaUser(tipo){
	switch(tipo){
		case 'logeo': Cargar('ventanas/logeo.html','flotante'); break;
		case 'registro': Cargar('ventanas/register.html','flotante'); break;
		case 'edit': Cargar('ventanas/editUser.php','flotante'); break;
		case 'recover': Cargar('ventanas/recuperarContra.php','flotante'); break;
	}
	flotante('show');
}
function cerrarForm(){
	flotante('hidden');
	setTimeout(function(){
		limpiarFlotante();
	},500);
}
function limpiarFlotante(){
	var tag=document.getElementById('flotante');
	tag.innerHTML='';
}