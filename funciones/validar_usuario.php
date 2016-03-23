<?php

include"establecerConexion.php";
$usuario=$_POST['username'];
$clave=$_POST['password'];
$bool=true;

       

		$sql="select nombre_usuario,clave_usuario from usuario";

		$base_db->ejecutar($sql);

		while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 
         
           if(($valor['nombre_usuario']==$usuario)&&(md5($(valor['clave_usuario'])==$clave)){
           		  $bool=false;
           		  session_start();
           		  $_SESSION["usuario"]=$usuario;
           		  $_SESSION["clave"]=$clave;
                print("1_ingresar");

           }

        }
        if($bool) {
          if((empty($_POST['username']))||(empty($_POST['password'])))
             //header('Location: page_login.php?a=1');
             print("2_falta_datos");
           
           else
            print("3_no_encontrado"); 
         }
								
								
						

?>