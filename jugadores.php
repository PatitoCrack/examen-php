<?php
$conector = new mysqli("localhost", "root", "", "liga");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;}
    else{
    //Hacemos una consulta
    	$resultado = $conector->query("SELECT * FROM jugador ");
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
    <td>local </td>
  <td>visitante</td>
  <td>posicion</td>
  <td>capitan</td>
  <td>fecha alta</td>
  <td>salario</td>
  <td>equipo</td>
  <td>altura</td>

</tr>

</tr>

<?php
foreach ($resultado as $jugador) {
  echo"<tr>";
echo"<td>".$jugador['id_jugador']." "."</td>";
echo"<td>".$jugador['nombre']." "."</td>";
echo"<td>".$jugador['posicion']." "."</td>";
echo"<td>".$jugador['id_capitan']." "."</td>";
echo"<td>".$jugador['fecha_alta']." "."</td>";
echo"<td>".$jugador['salario']." "."</td>";
echo"<td>".$jugador['equipo']." "."</td>";
echo"<td>".$jugador['altura']." "."</td>";
  echo"</tr>";
}
?>
</table>
</body>
</html>
