<?php
$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;}
    else{
    //Hacemos una consulta
    	$resultado = $conector->query("SELECT * FROM partido ");
      	}
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2> partidos</h2>
<table>
  <tr>
    <td>id partido </td>
  <td>id equipo local</td>
  <td>id equipo visitante </td>
  <td>resultado </td>
  <td>fecha </td>
  <td>arbitro </td>
</tr>

</tr>

<?php
$row['equipo.php'] = 'equipo.php';
foreach ($resultado as $partido) {
  echo"<tr>";
  echo"<td>".$partido['id_partido']." "."</td>";
  echo "<td>"."<a href=equipo.php?equipo=".$partido['local'].">".$partido['local']."</a> </td>";
  echo "<td>"."<a href=equipo.php?equipo=".$partido['visitante'].">".$partido['visitante']."</a> </td>";
  echo"<td>".$partido['resultado']." "."</td>";
echo"<td>".$partido['fecha']." "."</td>";
echo"<td>".$partido['arbitro']." "."</td>";
  echo"</tr>";
}
?>
</table>
</body>
</html>
