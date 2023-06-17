<?php

error_reporting(0);
include "koneksi.php";

session_start();

$username = $_SESSION["username"];
$nama = $_SESSION["nama"];
$gambar = $_SESSION["gambar"];

if( empty($username) ){
  echo "
  <script>
    alert('Anda Harus Login Terlebih dahulu');
    window.location = 'login.php';
  </script>
  ";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calender</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/calendar.css" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>

    <!-- Header -->
    <header class="header">
      <a href="#" class="logo-header">
        <img src="img/p-img.png" alt="Profile Picture" />
        <span class="header-text"><a href="index.php">Calendar</a></span>
      </a>
    </header>

    <!-- Navigation -->
    <nav>
      <ul>
        <div class="icon">
          <li>
            <a href="#" class="logo" id="icon">
              <img src="<?php echo $gambar; ?>" alt="Profile Picture" />
              <span class="nav-item"><?php echo $nama; ?></span>
            </a>
          </li>
          <li>
            <a href="index.php" id="icon">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Task</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a>
          </li>
          <li>
            <a href="#" id="icon">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a>
          </li>
          <li>
            <a href="logout.php" class="logout" id="icon">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log Out</span>
            </a>
          </li>
        </div>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="container">
      <?php include "content.php"; ?>
    </div>

    <!-- Footer -->
    <footer>
      <div class="footer-content">
        <ul class="socials">
          <li>
            <a href="#"><i class="social fb" data-feather="facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="social twt" data-feather="twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="social ig" data-feather="instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="social yt" data-feather="youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="social gh" data-feather="github"></i></a>
          </li>
        </ul>
        <p class="footer-bottom">
          &copy; 2023 The Big Three. All rights reserved
        </p>
      </div>
    </footer>


    <!-- Feather Icon -->
    <script>
      feather.replace();
    </script>
    
  </body>
</html>