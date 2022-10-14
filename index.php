<?php 

include("header.php");

include("core.php");

$sql = "SELECT * FROM users";
//$resultado = mysqli_query( $conn, $consulta );

$result = $conn->query($sql);

//echo $result->num_rows;


/*
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>email</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))

{
	echo "<tr>";
	echo "<td>" . $columna['name'] . "</td><td>" . $columna['email'] . "</td>";
	echo "</tr>";
}
echo "</table>";
*/

?>


<div class="card card-body">

<?php
       while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - email: " . $row["email"]. "<br>";
      }
?>
</div>
    
<?php include("footer.php")?>