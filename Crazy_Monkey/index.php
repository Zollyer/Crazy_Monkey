<?php
/**
 * Crazy_monkey 0.1
 */
class Crazy_monkey
{

 public function __construct()
 {
     $this->bananas = array_keys($_GET);
     $this->accion = array_values($_GET);
     $this ->tamaño = sizeof($this->bananas);
 }


//funcionamiento y arranque
function plugin($name) //Inciar Plugins
 {
     include_once 'plugins/'.$name.'.php'; //incluir archivo
 }


 function run_classer() //poner a correr al mono
  {
    include_once 'main.php';
    $classer = new Classer(); //Clases existentes en el main obj
    foreach ($this->bananas as $key => $value) {
      //comprobar si existe el metodo en la clase principal
      $value = str_replace('/', '_', $value); // replazar / por _ para las
      //echo $value; // <- mostrar nombre de funcion en el navegador _index_etc...
      if(method_exists($classer, $value)){
        //ejecutar metodo
        $classer -> $value();

      }else{
        //si el metodo no existe mostrar mensaje de error
        $monkey = new Crazy_monkey(); //inicializamos la libreria
        $monkey -> error_404(); //mostrar error 404 al no encontrar la pagina
      }
    }
  }

//Librerias
    function boostrap_3() //Incluir boostrap 3
     {
       echo '
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        ';
     }
     function html_js($url) //Incluir archivo JavaScript por url
      {
        echo '<script src=" '.$url.' "></script>';
      }
    function html_css($url) //Incluir hoja de estilos por url
      {
        echo '<link rel="stylesheet" href="'.$url.'">';
      }

//Mensajes y alertas
  function error_404() //Pagina no encontrada
   {
     $monkey = new Crazy_monkey(); //inicializamos la libreria
     $monkey -> boostrap_3(); //boostrap 3
     echo '
     <center>
     <img src="https://image.spreadshirtmedia.com/image-server/v1/mp/designs/1013985913,width=178,height=178,version=-520447236/cute-kawaii-monkey-hear-no-evil.png"/>
     <h1>Error 404</h1>
     <b>Modulo no encontrado</b>
     <h5>Crazy Monkey 1.0</h5>
     </center>';
   }


// Etiquetas Html
     function h($size,$text,$style,$other) // titulos
      {
        echo '<h'.$size.' style="'.$style.'" '.$other.'>'.$text.'</h'.$size.'>';
        return '<h'.$size.' style="'.$style.'" '.$other.'>'.$text.'</h'.$size.'>'; //generar h1,2,3,4,5,6,.. con texto
      }

      function a($text,$style,$url,$other) // Enlaces
       {
         echo '<a href="'.$url.'" style="'.$style.'" '.$other.' >'.$text.'</a>'; //generar h1,2,3,4,5,6,.. con texto
       }
       function b($text,$style,$other) // Enlaces
        {
          echo '<b style="'.$style.'" '.$other.' >'.$text.'</b>'; //generar h1,2,3,4,5,6,.. con texto
        }
//Vistas
function end() //Creacion de login
    {
      echo '</div>';
    }


function contenedor() //Creacion de login
      {
        echo '
        <div class="container">
        ';
      }
}

$monkey = new Crazy_monkey();
$monkey -> run_classer(); //inicializar Crazy_monkey

?>
