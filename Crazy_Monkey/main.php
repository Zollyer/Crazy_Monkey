<?php
/**
 * Crazy_monkey 0.1
 * cada _ simboliza en la direccion un / ejemplo: http://localhost/?/index/login  el metodo debe ser _index_login
 * para correr mas de un metodo se puede agregar & entre un metodo y otro ejemplo
 * http://localhost/?/login&index  esta direccion mostrara primero un login y luego un index
 */
class Classer
{

  function _index() // http://localhost/crazy_monkey/?/index
   {
     //echo $_GET['index']; muestra datos enviados por get
     $monkey = new Crazy_monkey(); //inicializamos la libreria
     $monkey -> plugin('index'); //archivo a activar
     //autor: Zollyer
     //descripccion: este archivo sirve para mostrar hola mundo
   }
   function _test() // http://localhost/crazy_monkey/?/test
    {
      $monkey = new Crazy_monkey(); //inicializamos la libreria
      $monkey -> plugin('test'); //archivo banana a activar
      //autor: Zollyer
      //descripccion: este archivo sirve para mostrar hola mundo
    }
}

?>
