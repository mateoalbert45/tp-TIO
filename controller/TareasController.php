<?php

require_once "./view/TareasView.php";
require_once "./model/TareasModel.php";

class TareasController
{
  private $view;
  private $model;


  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
  }

function Home(){
  $productos = $this->model->getProducto();
  $marcas = $this->model->getMarca();
  $this->view->Mostrar($marcas, $productos);

}

function insertTarea(){
  $nombre = $_POST["nombreform"];
  $descripcion = $_POST["descripcionform"];
  $this->model->insertTarea($nombre,$descripcion);
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}


}


 ?>
