<?php 

include("core.php");

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Ipappi</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <div class="container-fluid text-white justify-content-center">
      <h1>Login</h1>
    </div>
  </nav>
</header>
<div class="card card-body">

<div class="container  justify-content-center aling-items-center bg-primary text-white">
    <form class="form-signin" method="POST" >

      <h2 class="form-signin-heading text-center text-white">PLEASE SIGN IN</h2>
      <label for="inputEmail" class="sr-only">Email address</label><br>
      <input type="email" name="email" id="inputEmail" autocomplete="off" class="form-control"
        placeholder="Email address" autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label><br>
      <input type="password" name="password" id="inputPassword" autocomplete="off" class="form-control"
        placeholder="Password"><br>
      
      <center>
        <button class="btn btn-lg btn-info " type="submit" name="btn_login">Sign in</button>
        <p class="text-white">Have an account?
        <h6><a class="text-info" href="">Register here</a></h6>
        </p>
      </center>
    </form>

  </div>

<?php
      /* while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - email: " . $row["email"]. "<br>";
      }
      */
?>
</div>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
<footer>


  <div class="bg-primary text-center text-white">
    © 2022 Copyright:
    <a class="text-info" href="https://github.com/kiskee">a Kiskee production</a>
  </div>

  <!-- Copyright -->
</footer>

</html>
</body>

</html>
 
