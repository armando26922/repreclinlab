<?php 

 include"funciones/establecerConexion.php";

$nombre_marca=$_POST['nombre_marca'];

	   $sql="INSERT INTO marca(nombre_marca) value('".$nombre_marca."')";


       $base_db->ejecutar($sql);



   $sql="SELECT id_marca,nombre_marca
                          FROM marca";
                    $base_db->ejecutar($sql);
                   
                      while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
                       print("<tr>");
                       print("<td>".$valor['id_marca']."</td>");
                       print("<td>".$valor['nombre_marca']."</td>");
                       print("</tr>");
                    



 }

?>