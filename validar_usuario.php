<?php

 function getOriginIP() {
         $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    return $ip;
    }

 include"funciones/establecerConexion.php";
$usuario=$_POST['username'];
$clave=$_POST['password'];
$bool=true;

       

		$sql=" select id_usuario, username_usuario,password_usuario ,imagen_usuario
           from  usuario
           where username_usuario='".$usuario."' and password_usuario='".$clave."'";


$base_db->ejecutar($sql);

    while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 

           if(($valor['username_usuario']==$usuario)&&($valor['password_usuario']==$clave)){
                $bool=false;
                session_start();
                $_SESSION["id_usuario"]=$valor["id_usuario"];
                $_SESSION["usuario"]=$usuario;
                $_SESSION["clave"]=$clave;
                $_SESSION["imagen_usuario"]=$valor['imagen_usuario'];

                $tiempo = time();
                print("1_ingresar");

              //   header('Location:../index.php');


           }

        }
        if($bool) {
          if((empty($_POST['username']))||(empty($_POST['password'])))
             //header('Location: page_login.php?a=1');
             print("2_falta_datos");
           
           else
            print("3_no_encontrado"); 
            //header('Location:page_login.php?a=2');
         }else{
                $hoy=date("Y-m-d",$tiempo);
                $hora=date("H:i:s",$tiempo);
                $ip=getOriginIP();
                $sql="INSERT INTO sesion(fecha_acceso_session,hora_acceso_session,fk_usuario,ip_origen_session) values ('".$hoy."','".$hora."',".$_SESSION["id_usuario"].",'".$ip."')";
               // print($sql);
                $base_db->ejecutar($sql);
                

         }
                

						

?>