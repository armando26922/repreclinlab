<?php 

//eliminar general
 include"funciones/establecerConexion.php";
$nombre_tabla=$_POST['nombre_tabla'];
$id_objeto=$_POST['id_objeto'];

	   $sql="DELETE
			 FROM  ".$nombre_tabla." 
			 WHERE ".$nombre_tabla.".id_".$nombre_tabla."=".$id_objeto.";";
       $base_db->ejecutar($sql);

       print("Se elimino con exito");
                   

?>