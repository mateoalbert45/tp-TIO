<?php
/**
 *
 */
class TareasModel
{
  private $db;

  function __construct()
  {
    $this->db = connect();
  }


  function getProducto(){
    $sentencia_producto = $this->db->prepare( "select * from producto");
    $sentencia_producto->execute();
    return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
  }

  function getMarca(){
    $sentencia_marca = $this->db->prepare( "select * from marca");
    $sentencia_marca->execute();
    return $sentencia_marca->fetchAll(PDO::FETCH_ASSOC);
  }


  private function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_web;charset=utf8'
    , 'root', '');
  }

  function insertTarea($nombre,$descripcion){
    $sentencia =$this->db->prepare("INSERT INTO marca(nombre, descripcion) VALUES(?,?)");
    $sentencia->execute(array($nombre,$descripcion));
}


}


 ?>
