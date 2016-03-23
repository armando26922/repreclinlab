<?php
class Db{

private $conexion_db; 
private $link_conexion;
private $corrida;
private $lista;

//constructor de la base de datos
function __construct($conexion_db)
{
  $this->conexion_db=$conexion_db;
}


public function setConexion(){

$this->conexion_db;

}
public function setCorrida($corrida){
  $this->corrida=$corrida;
}


public function setLinkConexion($link_conexion){
  $this->link_conexion=$link_conexion;
}


public function getConexion(){

   return $this->conexion_db;
}

public function getLinkConexion(){

   return $this->link_conexion;
}

public function getCorrida(){

   return $this->corrida;
}





 /* conectar */
 public function conectar(){
      $this->link_conexion=mysql_connect($this->conexion_db->getServidor(), $this->conexion_db->getUsuario(), $this->conexion_db->getClave());
      mysql_select_db($this->conexion_db->getNombre_db(),$this->link_conexion);
      @mysql_query("SET NAMES 'utf8'");
   }

 public function ejecutar($sql){
      $this->corrida=mysql_query($sql,$this->link_conexion);
}



public function obtener_fila($corrida,$fila){
      if ($fila==0){
         $this->lista=mysql_fetch_array($corrida);
      }else{
         mysql_data_seek($corrida,$fila);
         $this->lista=mysql_fetch_array($corrida);
      }
      return $this->lista;
   }

}
?>