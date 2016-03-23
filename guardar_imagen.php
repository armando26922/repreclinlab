<?php


if (is_uploaded_file($_FILES['archivo']['tmp_name']))
{
 $nombreDirectorio = "imagenes_perfiles/";
 $nombreFichero = $_FILES['archivo']['name'];
 

$nombreCompleto = $nombreDirectorio . $nombreFichero;
print($nombreCompleto);
 
 if (is_file($nombreCompleto))
 {
 $idUnico = time();
 $nombreFichero = $usuario . "-" . $nombreFichero;
 }
 
move_uploaded_file($_FILES['archivo']['tmp_name'], $nombreDirectorio.$nombreFichero);
 
}
 
else
 print ("No se ha podido subir el fichero");










?>