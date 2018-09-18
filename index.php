<?php
 include_once 'tareas.php';
 function home()
{
  $marcas = getMarca();
  $productos = getProducto();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de base de datos</h1>
          <ul class="list-group">
<?php
          foreach ($productos as $producto) {
            echo '<li class="list-group-item">'.$producto['id_producto'].': '.$producto['nombre'].': '.$producto['talle'].': '.$producto['stock'].': '.$producto['id_marca'].'</li>';
          }

          foreach ($marcas as $marca) {
            echo '<li class="list-group-item">'.$marca['id_marca'].': '.$marca['nombre'].': '.$marca['descripcion'].'</li>';
          }

?>
          </ul>

        </div>
       </div>
     </div><!-- /.container -->
  </body>
</html>
<?php }  ?>

?>
