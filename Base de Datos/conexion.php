<?php
class Conexion {

private $nombre_db;
private $usuario;
private $clave;
private $servidor;
	

function __construct($usuario,$clave,$nombre_db,$servidor){
  $this->usuario=$usuario;
  $this->clave=$clave;
  $this->nombre_db=$nombre_db;
  $this->servidor=$servidor;
}

public function setServidor($servidor){
 $this->servidor=$servidor;
 }

public function setUsuario($usuario){
 $this->usuario=$usuario;
 }

public function setClave($clave){
 $this->clave=$clave;
 }
 
 public function setNombre_db($nombre_db){
 $this->nombre_db=$nombre_db;
 }


public function getServidor(){
 return $this->servidor;
 }

 public function getUsuario(){
 return $this->usuario;
 }

 public function getNombre_db(){
   return $this->nombre_db;
 }

 public function getClave(){
 return $this->clave;
 }

}

?>