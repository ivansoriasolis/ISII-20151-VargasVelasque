<?php
	session_start();
	if(isset($_SESSION['USUARIO'])){
		if($_SESSION['USUARIO']!="" || $_SESSION['USUARIO']!=" "){
			require_once('ClassDrawWeb.php');
			$DW=new Drawing();
			$DW->coneccion();
			$DW->setUsuario($_SESSION['USUARIO']);
			$DW->datoUser();
			$resultadoConU="-";
			
			if(mysql_result($DW->getConsultaDB(),0,'nombre')=="" || mysql_result($DW->getConsultaDB(),0,'nombre')==" "){
				$resultadoConN='-';
			}
			else{
				$resultadoConN=mysql_result($DW->getConsultaDB(),0,'nombre');
				if(mysql_result($DW->getConsultaDB(),0,'usuario')=="snd"){
					$resultadoConU=mysql_result($DW->getConsultaDB(),0,'usuario');
				}
			}
			echo $_SESSION['USUARIO'].":".$resultadoConN.":".mysql_result($DW->getConsultaDB(),0,'imagen').":".$resultadoConU;
		}
	}
	session_destroy();
?>