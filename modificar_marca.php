<?php 

 include"funciones/establecerConexion.php";




$id_marca=$_POST['id_marca'];
$nombre_marca=$_POST['nombre_marca'];

	   $sql="UPDATE marca
           SET marca.Nombre_marca='".$nombre_marca."' 
           
           WHERE 
           id_marca=".$id_marca.";";
       $base_db->ejecutar($sql);

   print("listo");



 

?>