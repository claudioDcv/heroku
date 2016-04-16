<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  // we will fill this out next
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>
<?php 
 //$db = new PDO('pgsql:dbname=d61aoijiddtf6q;host=localhost;port=5432user=ctkljaerhyndbi;password=yneO-NfDHuvhzZQ7UrXa_xBdu3');
 
 echo '<p>Hola Mundo</p>'; 
 ?>
 </body>
</html>
