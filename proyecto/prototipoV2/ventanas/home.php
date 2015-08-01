<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mis trabajos</title>
	<link rel="stylesheet" href="../estilos/estilos.css">
	<link rel="stylesheet" href="../estilos/homeStyles.css">
	<link rel="icon" href="../imagenes/logos/logo.png">
	<script src="../js/funciones.js"></script>
</head>
<body>
	<section id="CampoDibujo" style="height: auto; margin-bottom: 20px;">
		<header id="barraPrincipal">
			<ul>
				<li id="logeo"></li>
				<li id="cerrarSecion"></li>
				<li id="nuevoU"></li>
				<li id="img"></li>
				<li id="user">snd-yvv</li>
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
</body>
</html>