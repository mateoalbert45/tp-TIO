<?php
require_once "index.php";
require_once "route.php";
 function getMarca()
{
  $db_marca = new PDO('mysql:host=localhost;'
  .'dbname=db_web;charset=utf8'
  , 'root', '');
  $sentencia_marca = $db_marca->prepare( "select * from marca");
  $sentencia_marca->execute();
  return $sentencia_marca->fetchAll(PDO::FETCH_ASSOC);
}

function getProducto()
{
 $db_producto = new PDO('mysql:host=localhost;'
 .'dbname=db_web;charset=utf8'
 , 'root', '');
 $sentencia_producto = $db_producto->prepare( "select * from producto");
 $sentencia_producto->execute();
 return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
}


function connect(){
  return new PDO('mysql:host=localhost;'
  .'dbname=db_web;charset=utf8'
  , 'root', '');
}


function borrarproducto($id_producto){
  $db = connect();
  $sentencia = $db->prepare( "delete from marca where id_marca=?");
  $sentencia->execute(array($id_producto));
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

function editarnombre($id_marca){
  $db = connect();
  $sentencia = $db->prepare( "update marca set nombre= where id=?");
  $sentencia->execute(array($id_marca));
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

  ?>
