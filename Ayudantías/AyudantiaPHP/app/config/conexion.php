<?php
  try {
    require('data.php'); #Pide las variables para conectarse a la base de datos.
    $db = new PDO("pgsql:dbname=$DBgrupo;host=localhost;port=5432;user=$DBuser;password=$DBpassword");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>
