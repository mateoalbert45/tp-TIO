<?php

require_once "index.php";
require_once "tareas.php";
require_once "controller\TareasController.php";
$controller = new TareasController();
$partesURL = explode('/', $_GET['action']);



if ($partesURL[0] == '') {
  $controller->Home();
}else {
  if ($partesURL[0]  == 'agregar') {
    $controller->insertTarea();
  }elseif ($partesURL[0]  == 'borrar') {
    borrarproducto($partesURL[1]);
  }elseif ($partesURL[0]  == 'editarnombre') {
    editarnombre($partesURL[1]);
  }
}

 ?>
