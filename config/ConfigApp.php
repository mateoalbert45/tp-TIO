<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'TiendaController#Home',
      'home'=> 'TiendaController#Home',
      'borrar'=> 'TiendaController#BorrarMarca',
      'agregar'=> 'TiendaController#InsertarMarca',
    ];

}

 ?>
