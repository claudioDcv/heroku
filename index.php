<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
 $db = new PDO('pgsql:dbname=mydb;host=localhost;user=myuser;password=mypass');
 
 echo '<p>Hola Mundo</p>'; 
 ?>
 </body>
</html>
