<?php
	class Drawing extends Db_snd{
		private $usuario;
		private $contrasena;
		private $correo;
		private $nombre;
		private $apellido;
		private $imagen;
		private $resultado;
		private $consultaDB;
		function __construct(){}
		function __destroy(){}
		function login(){
			$consultaTEXT='CALL loginIN("'.$this->usuario.'", "'.$this->contrasena.'");';
			$this->consultaDB=mysql_query($consultaTEXT) or die('usuario no existe');
			$this->resultado=mysql_num_rows($this->consultaDB) or die("lo sentimos, esta cuenta no existe");
		}
		function registerUser(){
			$consultaTEXT='CALL `registroNUC`("'.$this->usuario.'","'.$this->correo.'","'.$this->contrasena.'","'.$this->nombre.'","'.$this->apellido.'","'.$this->imagen.'");';
			$this->consultaDB=mysql_query($consultaTEXT) or die('ya existe usuario');
		}
		function registerUserNewAdd(){
			$consultaTEXT='CALL `registroNU`("'.$this->usuario.'","'.$this->correo.'","'.$this->contrasena.'");';
			$this->consultaDB=mysql_query($consultaTEXT) or die("no se pudo realizar la consulta");
		}
		function existenciaUser(){
			$consultaTEXT='SELECT buscarUsuario("'.$this->usuario.'") AS "SINO";';
			$this->consultaDB=mysql_query($consultaTEXT);
			$this->resultado=mysql_result($this->consultaDB,0,"SINO");
		}
		function datoUser(){
			$consultaTEXT='CALL datosUser("'.$this->usuario.'");';
			$this->consultaDB=mysql_query($consultaTEXT) or die('usuario no existe');
			$this->resultado=mysql_num_rows($this->consultaDB) or die("lo sentimos, esta cuenta no existe");
		}
		function recuperar(){}
		function edit(){}
		
		function setUsuario($usuario){$this->usuario=$usuario;}
		function getUsuario(){return $this->usuario;}
		function setContrasena($contrasena){$this->contrasena=$contrasena;}
		function getContrasena(){return $this->contrasena;}
		function setCorreo($correo){$this->correo=$correo;}
		function getCorreo(){return $this->correo;}
		function setNombre($nombre){$this->nombre=$nombre;}
		function getNombre(){return $this->nombre;}
		function setApellido($apellido){$this->apellido=$apellido;}
		function getApellido(){return $this->apellido;}
		function setImagen($imagen){$this->imagen=$imagen;}
		function getImagen(){return $this->imagen;}
		function setResultado($resultado){$this->resultado=$resultado;}
		function getResultado(){return $this->resultado;}
		function setConsultaDB($consultaDB){$this->consultaDB=$consultaDB;}
		function getConsultaDB(){return $this->consultaDB;}
	}
	class Archivo{
		private $nombre;
		private $archivo;
		private $url;
		private $carpeta;
		private $fecha;
		function __construct(){}
		function __destroy(){}
		function mostrarCarp(){}
		function leerArchivo(){}
		function editar(){}
		function mostrarIm(){}
		
		function setNombre($nombre){$this->nombre=$nombre;}
		function getNombre(){return $this->nombre;}
		function setArchivo($archivo){$this->archivo=$archivo;}
		function getArchivo(){return $this->archivo;}
		function setUrl($url){$this->url=$url;}
		function getUrl(){return $this->url;}
		function setCarpeta($carpeta){$this->carpeta=$carpeta;}
		function getCarpeta(){return $this->carpeta;}
		function setFecha($fecha){$this->fecha=$fecha;}
		function getFecha(){return $this->fecha;}
	}
	class Db_snd{
		private $servidorDB;
		private $usuarioDB;
		private $contrasenaDB;
		private $nombreDB;
		function __construct(){}
		function __destroy(){}
		function coneccion(){
			$this->servidorDB="127.0.0.1";
			$this->usuarioDB="root";
			$this->contrasenaDB="";
			$this->nombreDB="drawing";
			$coneccion=mysql_connect($this->servidorDB,$this->usuarioDB,$this->contrasenaDB) or die("las disculpas del caso, no se pudo conectar al srvidor");
			$baseDato=mysql_select_db($this->nombreDB, $coneccion) or die("las disculpas dl caso, no se pudo seleccionar la base de datos");
			return $baseDato;
		}
		function setServidorDB($servidorDB){$this->servidorDB=$servidorDB;}
		function getServidorDB(){return $this->servidorDB;}
		function setUsuarioDB($usuarioDB){$this->usuarioDB=$usuarioDB;}
		function getUsuarioDB(){return $this->usuarioDB;}
		function setContrasenaDB($contrasenaDB){$thiscontrasenaDBe=$contrasenaDB;}
		function getContrasenaDB(){return $this->contrasenaDB;}
		function setNombreDB($nombreDB){$this->nombreDB=$nombreDB;}
		function getNombreDB(){return $this->nombreDB;}
	}
?>