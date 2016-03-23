<?php 

 include"funciones/establecerConexion.php";

$id_marca=$_POST['id_marca'];

	   $sql="DELETE
			 FROM	marca 
			 WHERE marca.id_marca=".$id_marca.";";
       $base_db->ejecutar($sql);

       print("Se elimino con exito");
                   

?>