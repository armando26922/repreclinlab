<?php 

include"funciones/establecerConexion.php";

$nombre_tabla=$_POST['nombre_tabla'];

$nombre_atributos='';
$nombre_valor='';

//print_r($_POST);


$final_ciclo=$_POST['numero_atributos'];

for($i=1;$i<=$final_ciclo;$i=$i+1){


if(($i+1)<=$final_ciclo) {  

$nombre_atributos=$nombre_atributos.$_POST["nombre_atributo$i"].",";

}
else {

$nombre_atributos=$nombre_atributos.$_POST["nombre_atributo$i"];  


}

}


for($i=1;$i<=$final_ciclo;$i=$i+1){

if ($_POST["esNumero$i"]==1) {  

    if(($i+1)<=$final_ciclo) {
      $nombre_valor=$nombre_valor."'".$_POST["valor_atributo$i"]."',";
    }
     else {
        $nombre_valor=$nombre_valor."'".$_POST["valor_atributo$i"]."'";  
    }
  
}
else {
    if(($i+1)<=$final_ciclo) {  
      $nombre_valor=$nombre_valor.$_POST["valor_atributo$i"].",";
    }
    else {
      $nombre_valor=$nombre_valor.$_POST["valor_atributo$i"];  
    }
}
}

$sql="INSERT INTO ".$nombre_tabla."(".$nombre_atributos.") value(".$nombre_valor.")";
$base_db->ejecutar($sql);



if (!$base_db->getCorrida()) {
   //  die('Consulta no válida: '.mysql_error());
       print('error');
}else{


$sql="SELECT max(id_".$nombre_tabla.")
      from  ".$nombre_tabla." ";
$base_db->ejecutar($sql);

$valor=$base_db->obtener_fila($base_db->getCorrida(),0);
print($valor["max(id_".$nombre_tabla.")"]);
}
?>