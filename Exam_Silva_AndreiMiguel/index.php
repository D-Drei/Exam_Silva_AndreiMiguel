<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .video-bg-wrapper {
      position: relative;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .video-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .video-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.45);
      z-index: -1;
    }
  </style>
</head>

<body>
  <div class="video-bg-wrapper">
    <video class="video-bg" src="backgroundd.mp4" autoplay muted loop playsinline></video>
    <div class="video-overlay"></div>

   
    <nav class="navbar">
      <a href="index.php" class="navbar-brand">
        <img
          class="navbar-logo"
          src="logo.png"
          onerror="this.style.background='#B22B27';this.src='';"
          alt="Logo" />
        <span class="navbar-title">Luwmi Anime
        </span>
      </a>



      <div class="navbar-actions">
        
          
          
        
          
        
      </div>
    </nav>

    
    <div class="hero-content">
      <h1>Luwmi</h1>
      <p>The best site for Anime.</p>
      <div class="hero-buttons">
        <a href="register.php" class="btn-hero-outline">Sign up</a>
        <a href="login.php" class="btn-hero-primary">Log in</a>
      </div>
    </div>










    
    <footer>
      <div>Copyright &copy; 2026. All rights reserved.</div>
      <div>Created by Drei  <span class="rock">&#9829;</span> | Computer Programming Exam</div>
    </footer>

  </div>
</body>

</html>
