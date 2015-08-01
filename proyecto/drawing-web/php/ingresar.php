<?php
	require_once('ClassDrawWeb.php');
	$dw=new Drawing();
	$dw->coneccion();
	if(isset($_GET['usuario']) && isset($_GET['contrasena'])){
		$dw->setUsuario($_GET['usuario']);
		$dw->setContrasena($_GET['contrasena']);
		$dw->login();
		if($dw->getResultado()!=1){
			echo "usuario no existe ";
		}
		else{
			//echo "usuario encontrado ".$dw->getResultado().mysql_result($dw->getConsultaDB(),0,'apellido');
			while($resultado=mysql_fetch_assoc($dw->getConsultaDB())){
				echo "usuarioEncontrado";
			}
			session_start();
			$_SESSION['USUARIO']=$dw->getUsuario();
		}
	}
	//$dw->registerUser();
?>