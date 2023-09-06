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
  <link rel="stylesheet" href="styles4.css">
  <title> Software </title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
    <button class="signup-button" onclick="location.href='logout.php'">Logout</button>    </div>
  </header>

  <main class="main">
    <div class="grid-container">
      <div class="image-box">
        <img src="windowshome.jfif" alt="Windows 11 Home License">
        <p>Microsoft Windows 11 Home (PC) - Microsoft Key - GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="windowspro.jfif" alt="Windows 11 Pro License">
        <p>Microsoft Windows 11 Pro (PC) - Microsoft Key - GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="windowshome10.jfif" alt="Windows 10 Home License">
        <p>Microsoft Windows 10 Home Microsoft Key GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="windowspro10.jfif" alt="Windows 10 Pro License">
        <p>Microsoft Windows 10 Pro Microsoft Key GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="office.jfif" alt="Microsoft Office License">
        <p>Microsoft Office Professional Plus 2021 PC - Microsoft Key - GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="kasper.jfif" alt="Kaspersky Antivirus Security License">
        <p>Kaspersky Total Security Multi-Device 3 Devices 3 Devices 1 Year Kaspersky Key GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="kasper.jfif" alt="Kaspersky Antivirus Security License Android">
        <p>Kaspersky Internet Security 2021 (1 Device, 1 Year) - for Android - Key GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="mcafee.jfif" alt="McAfee antivirus license">
        <p>McAfee AntiVirus PC 1 Device 1 Year McAfee Key GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="mcafee.jfif" alt="McAfee antivirus license">
        <p>McAfee AntiVirus PC 1 Device 3 Years McAfee Key GLOBAL</p>
      </div>
      <div class="image-box">
        <img src="vpn.webp" alt="Express VPN License ">
        <p>Express VPN (PC/Mac) 1 Device, 1 Month - ExpressVPN Key - GLOBAL</p>
      </div>
    </div>
  </main>
 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>