<?php 

 include"funciones/establecerConexion.php";

  $permiso=$_POST['permiso'];
session_start();

                   $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
               $bol=false;
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 


                if($valor['Nombre_accion']==$permiso) {
                $bol=true;

                 }
}

  if($bol){

    print("true");

  }
  else{

      print("false");

  }


?>