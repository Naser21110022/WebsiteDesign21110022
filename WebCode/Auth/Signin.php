<?php

session_start();
require("pdo.php");

if(isset($_POST['submit'])){
    $sql="SELECT * from users where username=:username and password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];

    echo $username ;
    echo $password;

    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['privilleged']=$username;
        header("location:/Webcode/Homepage/Home.php");
    }else{
        echo "Invalid username or password";
    }
    $pdo=null;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign In </title>
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
            <h2>Sign In</h2>
            <form id="Signin" action="Signin.php" method="POST">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="submit">Sign In</button>
                <a href="Signup.php"> Dont have an account? </a>
            </form>
        </div>
</body>

<footer class="footer">
  <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
</footer>

</html>