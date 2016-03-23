<?php

// include"establecerConexion.php";

function cantidad_total($tabla,$base_db){


 $sql="SELECT count(id_".$tabla.") as numero
       from ".$tabla."";
//print($sql);
 $base_db->ejecutar($sql);     
 $valor=$base_db->obtener_fila($base_db->getCorrida(),0);
 print($valor["numero"]);
 

}

function marcar_salidad($usuario,$base_db){

$sql="SELECT  id_session
from sesion ,usuario
where usuario.Username_usuario='".$usuario."'
order by  id_session DESC
limit 1";

 $base_db->ejecutar($sql);     
 $valor=$base_db->obtener_fila($base_db->getCorrida(),0);

$tiempo2 = time();
$hora=date("H:i:s",$tiempo2);

//print($valor);
$sql="update sesion
set sesion.hora_salida_session='".$hora."'
where id_session=".$valor["id_session"]."";
//print($sql);
 $base_db->ejecutar($sql);     


 //print($valor["numero"]);
}



?>