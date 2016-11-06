<?php 

require_once('../nusoap/lib/nusoap.php');
require_once('../nusoap/lib/class.wsdlcache.php');

//creamos el objeto de tipo soap_server
$ns="../nusoap/samples";
//creamos el objeto de tipo soap_server
$server = new soap_server;
$server->configureWSDL('comprobarContrasena',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
//registramos la función que vamos a implementar
$server->register('comprobarContrasena',
array('pass'=>'xsd:string'),
array('respuesta'=>'xsd:string'),
$ns);
//implementamos la función
function comprobarContrasena($pass){
	$lineaPass = file('toppasswords.txt', FILE_IGNORE_NEW_LINES);
	foreach($lineaPass as $num_lineaPass => $passFichero){
		//if($passFichero == $pass)
		if(strcmp($passFichero, $pass) == 0)
			return "INVALIDA";
	}
	return "VALIDA";
}
//llamamos al método service de la clase nusoap
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>