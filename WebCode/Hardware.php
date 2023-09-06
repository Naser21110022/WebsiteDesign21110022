<?php
session_start();
if(!isset($_SESSION['privilliged'])){
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles4.css">
  <title> Hardware </title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
    <button class="signup-button" onclick="location.href='logout.php'">Logout</button>
  </div>
  </header>

  <main class="main">
    <div class="grid-container">
      <div class="image-box">
        <img src="Lenovo.webp" alt="Lenovo Ideapad Desktop Gaming">
        <p>Lenovo IdeaCentre Gaming Desktop 5Gen AMD Ryzen 7 5700 8-Cores w/ Nvidia RTX 3060 12GB DDR6 - Black</p>
      </div>
      <div class="image-box">
        <img src="MSI.webp" alt="MSI Desktop Gaming">
        <p>MAG Codex X5 (1015) Gaming Desktop 12Gen Intel Core i7 K-Series 12-Cores w/ Nvidia RTX 3070TI & Liquid Cooler</p>
      </div>
      <div class="image-box">
        <img src="OMEN.webp" alt="HP Omen Desktop Gaming">
        <p>OMEN by HP 45L GT22-0003ne Gaming Desktop 12Gen Intel Core i9 16-Cores w/ Nvidia RTX 3090 24GB & Liquied Cooler</p>
      </div>
      <div class="image-box">
        <img src="MSI2.webp" alt="MSI Desktop Gaming">
        <p>MAG Codex X5 (1014) Gaming Desktop 12Gen Intel Core i7 K-Series 12-Cores w/ Nvidia RTX 3080 & Liquid Cooler</p>
      </div>
      <div class="image-box">
        <img src="HP.webp" alt="HP Desktop Gaming">
        <p>HP Victus 15L TG02-0003NE Gaming Desktop 12Gen Intel Core i7 12-Cores w/ Nvidia RTX 3060TI 8GB - White</p>
      </div>
      <div class="image-box">
        <img src="ROG.webp" alt="ROG Asus Gaming Laptop">
        <p>ASUS ROG Strix G18 (2023) G834JY NEW 13Gen Intel Core i9 13980HX 24-Cores w/ RTX 4090 16GB DDR6 & 18" IPS FHD+ 165Hz Display - Gray</p>
      </div>
      <div class="image-box">
        <img src="TUF.webp" alt="TUF Asus Gaming Laptop">
        <p>ASUS TUF F17 FX707ZC4 (2022) NEW 12Gen Intel Core i7 14-Cores w/ RTX 3050 4GB & IPS 144Hz Display - Gray</p>
      </div>
      <div class="image-box">
        <img src="Acer.webp" alt="Acer Gaming Laptop">
        <p>Acer Nitro 5 AN515-58-9038 (2022) 12Gen Intel Core i9 14-Cores w/ RTX 3060 & 144Hz Display (Customized) - Black</p>
      </div>
      <div class="image-box">
        <img src="Ideapad.webp" alt="Lenovo Ideapad Gaming Laptop">
        <p>Lenovo IdeaPad Gaming 3 NEW 5Gen AMD Ryzen 5 5600H 6-Cores w/ RTX 3060 6GB & 165Hz Display - Shadow Black</p>
      </div>
      <div class="image-box">
        <img src="Victus.webp" alt="HP Gaming Laptop">
        <p>Victus by HP 15-fb0222nw NEW 5Gen AMD Ryzen 5 6-Cores GTX 1650 w/ 144Hz Display - Mica Silver</p>
      </div>
    </div>
  </main>

 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>