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
  <title>NJstore Homepage</title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="/Webcode/Products/products.php">Products</a></li>
        <li><a href="/Webcode/About/AboutUs.php">About Us</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
      <button class="signup-button" onclick="location.href='logout.php'">Logout</button>
      
    </div>
  </header>

  <main class="main">
    <h1 class="welcome-heading">Welcome to NJstore</h1>
    <div class="content-container">
      <div class="image-container">
        <img src="Acer.png" alt="Image Description">
      </div>
      <div class="text-container">
        <p>One of our best selling products!</p>
        <p>Acer Nitro 5 2023</p>
        <p>Comes with:</p>
        <p>Intel Core I9 14th Generation</p>
        <p>32 Gigabytes DDR5 RAM</p>
        <p>512 GB NVMe M.2 SSD</p>
        <p>NVIDIA Geforce RTX 3060 6GB DDR6</p>
        <p>Full IPS FHD 144HZ Anti-glare screen</p>
        <h3> Browse our different products now!</h3>
      </div>
    </div>
  </main>
 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>