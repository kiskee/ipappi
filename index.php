<?php 

include("header.php");

include("core.php");

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>


<div class="card card-body">

<?php
       while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - email: " . $row["email"]. "<br>";
      }
?>
</div>
    
<?php include("footer.php")?>