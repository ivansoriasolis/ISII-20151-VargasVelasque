<?php
	require_once('../php/ClassDrawWeb.php');
	if(isset($_GET['usuario']) && isset($_GET['accion'])){
		$DW=new Drawing();
		$DW->coneccion();
		$DW->setUsuario($_GET['usuario']);
		$DW->existenciaUser();
		$accion=$_GET['accion'];
		//echo $DW->getResultado();
		if($DW->getResultado()==1){
			$DW->datoUser();
			
			$correoU=mysql_result($DW->getConsultaDB(),0,"correo");
			$nombreU=mysql_result($DW->getConsultaDB(),0,"nombre");
			$apellidoU=mysql_result($DW->getConsultaDB(),0,"apellido");
			$contrasenaU=mysql_result($DW->getConsultaDB(),0,"contrasena");
			$imagenU=mysql_result($DW->getConsultaDB(),0,"imagen");
			if($accion=="index"){
				if($imagenU=='avatar.PNG'){
					$imagenU="imagenes/users/".$imagenU;
				}
				else{
					$imagenU="imagenes/users/".$DW->getUsuario()."/".$imagenU;
				}
			}
		}
	}else{
		echo "";
		header('location:../');
	}
?>
<form action="" method="" id="formularioEdit" class="formularios">
	<div onclick="cerrarForm()" id="closeForm"></div>
	<ul>
		<li>
			<label for="correo">Correo</label><br>
			<input type="text" id="correo" name="correo" placeholder="ingrese correo" required value="<?php echo $correoU;?>">
		</li>
		<li>
			<label for="nombreU">nombreU</label><br>
			<input type="text" id="nombreU" name="nombreU" placeholder="ingrese nombreU" required value="<?php echo $nombreU;?>">
		</li>
		<li>
			<label for="apellido">apellido</label><br>
			<input type="text" id="apellido" name="apellido" placeholder="ingrese apellido" required value="<?php echo $apellidoU;?>">
		</li>
		<li>
			<label for="AContrasena">Contraseña</label><br>
			<input type="password" id="contrasena" name="contrasena" placeholder="ingrese nueva contraseña" required>
		</li>
		<li>
			<label for="NContrasena">Repita Contraseña</label><br>
			<input type="password" id="RContrasena" name="RContrasena" placeholder="repita su nueva contraseña" required>
		</li>
		<li>
			<label for="imagenPersonal">imagen</label><br>
            <input type="file" id="imagenPersonal" style="display:none">
			<img src="<?php echo $imagenU;?>" alt="" onClick="abrirFileImagenUplo()">
		</li>
		<li>
			<button id="ok">Guardar</button>
		</li>
	</ul>
</form>