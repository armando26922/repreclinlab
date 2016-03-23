<?php 
 //include "../clases/conexion.php";
 //include "../clases/db.php";
 include "clases/conexion.php";
 include "clases/db.php";
 
 $conexion_obj=new Conexion("armando","1101545ale","repreclinlab","127.0.0.1");
 $base_db=new Db($conexion_obj);
 $base_db->conectar();


?>