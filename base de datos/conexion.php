<?php

//Definicion de parametros de acceso a la base de datos 

define ("SERVIDOR","localhost"); 
define ("USUARIO","christian");
define ("PASSWORD","barcelona22");
define ("BASEDATOS","bd_ejemplo");


function conectarBD(){
	$conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BASEDATOS);
	return $conexion;
}


