<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mis trabajos</title>
	<link rel="stylesheet" href="../estilos/estilos.css">
	<link rel="stylesheet" href="../estilos/homeStyles.css">
	<link rel="icon" href="../imagenes/logos/logo.png">
	<script src="../js/funciones.js"></script>
	<script src="../js/indexH.js"></script>
</head>
<body>
	<div id="wecomeH"></div>
	<?php
		require_once('../php/ClassDrawWeb.php');
		$DW=new Drawing();
		$DW->coneccion();
		if(isset($_GET['userDra'])){
			$DW->setUsuario($_GET['userDra']);
			$DW->datoUser();
			$imagen=mysql_result($DW->getConsultaDB(),0,'imagen');
			if($imagen=="avatar.PNG"){
				$imagen="../imagenes/users/".$imagen;
			}else{
				$imagen="../imagenes/users/".$DW->getUsuario()."/".$imagen;
			}
		}else{
			header('location:../');
			//mysql_result($DW->getConsultaDB(),0,'usuario')."/"
		}
	?>
	<section id="CampoDibujo" style="height: auto; margin-bottom: 20px;">
		<header id="barraPrincipal">
			<ul>
				<li id="cerrarSecion" onclick="closeAll()"></li>
				<li id="img" style="background-image: url('<?php echo $imagen;?>')"></li>
				<li id="user"><?php echo mysql_result($DW->getConsultaDB(),0,'nombre');?></li>
				<li id="verHechoI" onclick="javascript:document.getElementById('holaHome').click()"><a id="holaHome" href="../"></a></li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
		</header>
		<section id="sectionFiles">
			<div id="ruta">
				<ul id="rutaGu">
					<li onclick="rutaAvance('1')"></li>
					<li onclick="rutaAvance('2')"></li>
					<li onclick="rutaAvance('3')"></li>
					<li onclick="rutaAvance('4')"></li>
					<li onclick="rutaAvance('add')" id="masFolder"></li>
					<div class="clear"></div>
				</ul>
			</div>
			<div id="contenido">
				<ul id="imagenesGaleria">
					<li class="imagenesH fonlderImG" onclick="openFolder()">
						<p class="nombreImagenG" style="top: 70px;text-align: center;color: rgb(177, 105, 20);text-shadow: 0 0 3px rgb(244, 181, 37);">mi carpeta 1</p>
						<p class="fechaImagenG" style="text-align: center;font-size: 14px;color:rgb(183, 219, 38);">2015/15/15</p>
					</li>
					<li class="imagenesH fonlderImG" onclick="openFolder()">
						<p class="nombreImagenG"style="top: 70px;text-align: center;color: rgb(177, 105, 20);text-shadow: 0 0 3px rgb(244, 181, 37);">mi carpeta 2</p>
						<p class="fechaImagenG" style="text-align: center;font-size: 14px;color:rgb(183, 219, 38);">2015/15/15</p>
					</li>
					<li class="imagenesH fonlderImG" onclick="openFolder()">
						<p class="nombreImagenG"style="top: 70px;text-align: center;color: rgb(177, 105, 20);text-shadow: 0 0 3px rgb(244, 181, 37);">mi carpeta 3</p>
						<p class="fechaImagenG" style="text-align: center;font-size: 14px;color:rgb(183, 219, 38);">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v3.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi segundo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/funcion%20v1.1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi tercer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/funcion%20v1.2.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi cuarto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/funcion%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi quinto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1%20-%20fin.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi sexto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi septimo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi sexto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi septimo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi sexto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi septimo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi sexto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi septimo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi sexto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi septimo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/interfas%20v1.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi sexto dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi septimo dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
					<li class="imagenesH">
						<img src="../../capturas/Captura%20v2.0.PNG" alt="" onclick="mostrarImagen(this)">
						<p class="nombreImagenG">mi primer dibujo</p>
						<p class="fechaImagenG">2015/15/15</p>
					</li>
				</ul>
			</div>
		</section>
	</section>
	<div id="flotante" class="hidden"></div>
	<div id="resultadosExecute"></div>
    <script>
		if(!localStorage.getItem('userDrag')){
			var resultadosExecute=document.getElementById('resultadosExecute');
			var tag=document.createElement('a');
			tag.href="../";
			resultadosExecute.appendChild(tag);
			tag.click();
		}
		function closeAll(){
			localStorage.removeItem("userDrag");
			if(!localStorage.getItem('userDrag')){
				var resultadosExecute=document.getElementById('resultadosExecute');
				var tag=document.createElement('a');
				tag.href="../";
				resultadosExecute.appendChild(tag);
				tag.click();
			}
		}
		if(localStorage.getItem("userDrag")){
			var contenedor=document.getElementById('wecomeH');
			var datos=localStorage.getItem("userDrag").split(':');
			var url=window.location.href.slice(window.location.href.indexOf('?') + 1).split("=");
			if(datos[0]==datos[3]){
				contenedor.remove(this);
			}
			else if(datos[0]==url[1]){
				contenedor.remove(this);
			}
			else{
				document.getElementById('holaHome').click();
			}
		}
    </script>
</body>
</html>