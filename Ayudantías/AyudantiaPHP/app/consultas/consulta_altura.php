<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $altura = $_POST["altura"];
  $altura = intval($altura);

 	$query = "SELECT id, nombre, altura FROM ejercicio_ayudantia where altura>=$altura order by altura desc;";

	$result = $db -> prepare($query);
	$result -> execute();
	$pokemones = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Altura</th>
    </tr>
  <?php
	foreach ($pokemones as $p) {
  		echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
