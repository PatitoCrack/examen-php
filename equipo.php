<?php
$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;}
    else{
    //Hacemos una consulta
    	$resultado = $conector->query("SELECT * FROM equipo ");
      	}
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>equipos</h2>
<table>
  <tr>
    <td>id equipo </td>
  <td>nombre</td>
  <td>ciudad </td>
  <td>web</td>
  <td>puntos</td>


</tr>

</tr>

<?php
foreach ($resultado as $equipo) {
  echo"<tr>";
echo "<td>"."<a href=jugadores.php?equipo=".$equipo['id_equipo'].">".$equipo['id_equipo']."</a> </td>";
echo"<td>".$equipo['nombre']." "."</td>";
echo"<td>".$equipo['ciudad']." "."</td>";
echo"<td>".$equipo['web']." "."</td>";
echo"<td>".$equipo['puntos']." "."</td>";
  echo"</tr>";
}
?>
</table>
</body>
</html>
