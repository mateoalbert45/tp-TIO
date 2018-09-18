<?php
 function getMarca()
{
  $db_marca = new PDO('mysql:host=localhost;'
  .'dbname=prueba;charset=utf8'
  , 'root', 'root');
  $sentencia_marca = $db_marca->prepare( "select * from marca");
  $sentencia_marca->execute();
  return $sentencia_marca->fetchAll(PDO::FETCH_ASSOC);
}

function getProducto()
{
 $db_producto = new PDO('mysql:host=localhost;'
 .'dbname=prueba;charset=utf8'
 , 'root', 'root');
 $sentencia_producto = $db_producto->prepare( "select * from producto");
 $sentencia_producto->execute();
 return $sentencia_producto->fetchAll(PDO::FETCH_ASSOC);
}
  ?>
