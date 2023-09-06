<?php
require("pdo.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
$sql="INSERT INTO users (username,password) values (:username,:password)";
$statement=$pdo->prepare($sql);
$username=$_POST['username'];
$password=$_POST['password'];

$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);
$statement->execute();

echo "Account created successfully, go to login.";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Sign up </title>
</head>

<header class="header">
  <div class="logo">
    <a href="/index.html">
      <img src="Logo.PNG" alt="Logo">
    </a>
  </div>
</header>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Sign up</h2>
            <form id="signin" action="Signup.php" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Sign up</button>
                <a href="Signin.php"> Already have an account? </a>
            </form>
        </div>
</body>

<footer class="footer">
  <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
</footer>

</html>