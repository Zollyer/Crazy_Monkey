
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
  $monkey-> contenedor();  //creamos una pagina en blanco
  $monkey->h(1,'Ejemplo de Index','','');
  $monkey->h(3,'Subtitulo','color:blue','');
  $monkey->a('Esto es un Link','','index.php','');
  $monkey-> end(); //cerramos el div

?>
</body>
</html>
