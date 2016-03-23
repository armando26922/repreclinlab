
<?php 
include "gestor_conexion.php";
$sql="select id_accion,nombre_accion from accion";
$base_db->ejecutar($sql);
$base_db->obtener_fila($base_db->getCorrida(),0);

while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
 
  print($valor['nombre_accion']);
}

?>
