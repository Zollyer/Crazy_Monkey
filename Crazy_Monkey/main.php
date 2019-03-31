<?php
/**
 * Crazy_monkey 0.1
 * cada _ simboliza en la direccion un / ejemplo: http://localhost/?/index/login  el metodo debe ser _index_login
 * para correr mas de un metodo se puede agregar & entre un metodo y otro ejemplo
 * http://localhost/?/login&index  esta direccion mostrara primero un login y luego un index
 */
class Classer
{

  function _index()
   {
     //echo $_GET['index'];
     $monkey = new Crazy_monkey(); //inicializamos la libreria
     $monkey -> plugin('index'); //archivo banana a activar
     //autor: Zollyer
     //descripccion: este archivo sirve para mostrar hola mundo
   }
   function test()
    {
      $monkey = new Crazy_monkey(); //inicializamos la libreria
      $monkey -> plugin('test'); //archivo banana a activar
      //autor: Zollyer
      //descripccion: este archivo sirve para mostrar hola mundo
    }
}

?>
