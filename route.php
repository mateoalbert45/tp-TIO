<?php

require_once "index.php";
require_once "tareas.php";

$partesURL = explode('/', $_GET['action']);

if ($partesURL[0] == '') {
  Home();
}else {
  if ($partesURL[0]  == 'agregar') {
    insertTarea();
  }elseif ($partesURL[0]  == 'borrar') {
    borrarproducto($partesURL[1]);
  }
}

 ?>
