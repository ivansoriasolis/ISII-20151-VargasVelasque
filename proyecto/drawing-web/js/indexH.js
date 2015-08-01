function ingresarSaUser(tipo){
	var accionFrom="index";
	var user="";
	if(localStorage.getItem("userDrag")){
		user=localStorage.getItem("userDrag").split(':');
		user=user[0];
	}
	switch(tipo){
		case 'logeo': Cargar('ventanas/logeo.html','flotante'); break;
		case 'registro': Cargar('ventanas/register.html','flotante'); break;
		case 'edit': Cargar('ventanas/editUser.php?usuario='+user+'&accion='+accionFrom,'flotante'); break;
		case 'recover': Cargar('ventanas/recuperarContra.php','flotante'); break;
		case 'administrador': Cargar('ventanas/adimin.php','flotante'); break;
	}
	flotante('show');
}
function adminVal(valor){
	alert(valor);
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
function userSelect(){
	var respuestaAJX = new XMLHttpRequest();
	var url='php/seleccionarUsuario.php';
	respuestaAJX.open('POST',url,true);
	respuestaAJX.onreadystatechange=function(){
		if(respuestaAJX.readyState==4){
			if(respuestaAJX.responseText!="" || respuestaAJX.responseText!=" "){
				localStorage.setItem('userDrag',respuestaAJX.responseText);
				document.getElementById('entrarYa').click();
			}
		}
	}
	respuestaAJX.send(null);
}
function recuperarContra(){
	var correo=document.getElementById('correo');
	alert(correo.value);
	var respuestaAJX = new XMLHttpRequest();
	var url='php/saveImage.php?lostPass=hola&correo='+correo.value;
	respuestaAJX.open('POST',url,true);
	respuestaAJX.onreadystatechange=function(){
		if(respuestaAJX.readyState==4){
			if(respuestaAJX.responseText!="" || respuestaAJX.responseText!=" "){
				//localStorage.setItem('userDrag',respuestaAJX.responseText);
				//document.getElementById('entrarYa').click();
			}
		}
	}
	respuestaAJX.send(null);
}
function newUserAdd(){
	var respuestaAJX = new XMLHttpRequest();
	var usuario=document.getElementById('usuario');
	var correo=document.getElementById('correo');
	var contrasena=document.getElementById('contrasena');
	var RContrasena=document.getElementById('RContrasena');
	var formularioCha=document.getElementById('formularioReg');
	if(contrasena.value==RContrasena.value && RContrasena.value!="" && RContrasena.value!=" "){
		var url='php/saveImage.php?typeImRegi&usuario='+usuario.value+'&correo='+correo.value+'&contrasena='+contrasena.value;
		respuestaAJX.open('POST',url,true);
		respuestaAJX.onreadystatechange=function(){
			if(respuestaAJX.readyState==4){
				if(respuestaAJX.responseText!="" || respuestaAJX.responseText!=" "){
					var divNode=document.createElement('div');
					divNode.id='resultRegister';
					divNode.innerHTML=respuestaAJX.responseText;
					formularioCha.appendChild(divNode);
				}
			}
		}
		respuestaAJX.send(null);
	}else{
		
	}
}
function closeSession(){
	localStorage.removeItem("userDrag");
	document.location.reload();
}
function cargarDatImagenUser(){
	var cajaIMg=document.getElementById('img');
	var cajaNameUs=document.getElementById('user');
	var arregloDatos=[];
	if(localStorage.getItem("userDrag")){
		arregloDatos=localStorage.getItem("userDrag").split(':');
		if(arregloDatos[2]=="avatar.PNG"){
			cajaIMg.style.backgroundImage="url('imagenes/users/"+arregloDatos[2]+"')";
		}else{
			cajaIMg.style.backgroundImage="url('imagenes/users/"+arregloDatos[0]+'/'+arregloDatos[2]+"')";
		}
		if(arregloDatos[1]=='-'){
			cajaNameUs.innerHTML=arregloDatos[0];
		}
		else{
			cajaNameUs.innerHTML=arregloDatos[1];
			console.log('->'+arregloDatos[1]+'->');
		}
		var cajaSave=document.getElementById('Guardar');
		var viewSavePro=document.getElementById('verHecho');
		cajaSave.style.display="inline-block";
		viewSavePro.style.display="inline-block";
		viewSavePro.innerHTML='<a id="holaHome" href="ventanas/home.php?userDra='+arregloDatos[0]+'"></a>';
	}
}
function abrirFileImagenUplo(){
	var fileImg=document.getElementById('imagenPersonal');
	fileImg.click();
	fileImg.onchange=function(e){
		var filesImg=e.target.files[0];
		console.log(filesImg.name);
	};
}
function verDraw(){
	
}
function desahabilitarU(){
}