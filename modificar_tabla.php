<?php 

include"funciones/establecerConexion.php";

$id_tabla=$_POST['id_objeto'];
$nombre_tabla=$_POST['nombre_tabla'];
$nombre_atributos='';
$nombre_valor='';

//print_r($_POST);


$final_ciclo=$_POST['numero_atributos'];
for($i=1;$i<=$final_ciclo;$i=$i+1){

if ($_POST["esNumero$i"]==1) {  

    if(($i+1)<=$final_ciclo) {
      $nombre_valor=$nombre_valor.$_POST["nombre_atributo$i"]."="."'".$_POST["valor_atributo$i"]."',";
    }
     else {
        $nombre_valor=$nombre_valor.$_POST["nombre_atributo$i"]."="."'".$_POST["valor_atributo$i"]."'";  
    }
  
}
else {
    if(($i+1)<=$final_ciclo) {  
      $nombre_valor=$nombre_valor.$_POST["nombre_atributo$i"]."=".$_POST["valor_atributo$i"].",";
    }
    else {
      $nombre_valor=$nombre_valor.$_POST["nombre_atributo$i"]."=".$_POST["valor_atributo$i"];  
    }
}
}


$sql="UPDATE ".$nombre_tabla."
      SET  ".$nombre_valor." 
      WHERE  id_".$nombre_tabla."=".$id_tabla."";


$base_db->ejecutar($sql);
print('se realizo con exito');


?>