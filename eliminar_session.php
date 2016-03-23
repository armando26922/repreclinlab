<?php   
 include"funciones/establecerConexion.php"; 
 include "funciones/generalphp.php";
 session_start();
 marcar_salidad($_SESSION["usuario"],$base_db);
 session_destroy();
 header('Location:login.php');

?>