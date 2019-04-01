
<html>
<head>
<?php
//Ejemplo de pagina de inicio para Crazy_monkey ....

     $monkey = new Crazy_monkey(); //inicializamos la libreria
     $monkey-> boostrap_3(); // incluimos boostrap_3

?>
</head>
<body>
<?php
//creando pagina web con Monkey
  //generando Hoja de estilos.
  $monkey->import_css('plugins/css/index.css');
  $monkey->import_js('plugins/css/index.js');

// cada etiqueta tiene valores definidos para facilitar su implementacion
  $monkey-> contenedor('','id="contenedor1"');  //creamos un contenedor
    $monkey->h(1,'','Ejemplo de Index');
    $monkey->h(3,'','Subtitulo');
    $monkey->a('','Este es un link','index.php');
    $monkey->br(1); //generamos un salto de linea podemos colocar los saltos que deseamos
    $monkey->img('ima','https://cdn130.picsart.com/261314040018212.png?r1024x1024');
    $monkey->iframe('ima','https://i.pinimg.com/originals/c4/80/7d/c4807d7c18231c78fce0457935d1b834.jpg');
    $monkey->embed('ima','https://cdn130.picsart.com/261314040018212.png?r1024x1024');
  $monkey-> end(); //cerramos el div

?>
</body>
</html>
