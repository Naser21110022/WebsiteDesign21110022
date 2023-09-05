<?php
session_start();
if(!isset($_SESSION['privilliged'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Products</title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="/Webcode/Homepage/Home.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="/Webcode/About/AboutUs.php">About Us</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
      <button class="signup-button" onclick="location.href='/Webcode/Homepage/logout.php'">Logout</button>
      </div>
  </header>

  <main class="main">
    <div class="grid-container">
      <div class="image-box">
        <a href="/Webcode/Store/Hardware.php">
        <img src="PC.png" alt="Image 1">
      </a>
        <p>Hardware</p>
      </div>
      <div class="image-box">
        <a href="/Webcode/Store/Software.php">
        <img src="Disk.png" alt="Image 2">
      </a>
        <p>Software</p>
      </div>
    </div>
  </main>

 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>