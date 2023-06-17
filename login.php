<?php

error_reporting(0);
include "koneksi.php";

session_start();

$username = $_SESSION["username"];


if( !empty($username) ){
  echo "
  <script>
    alert('Anda Sudah Melakukan Login');
    window.location = 'index.php';
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
    <link rel="stylesheet" href="css/login.css" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- icon Password -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <div class="container">
      <!-- <video autoplay muted loop id="myVideo">
        <source src="bganimated.mp4" type="video/mp4" />
      </video> -->
      <div class="box">
        <h1>Login</h1>
        <form action="crud.php?aksi=login" method="POST">
          <input type="text" name="username" placeholder="Username" />
          <div class="inputPassword">
            <input
              type="password"
              placeholder="Password"
              name="password"
              id="password"
            />
            <i class="bi bi-eye-slash" id="togglePassword"></i>
          </div>
          <script>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#password");

            togglePassword.addEventListener("click", function () {
              // toggle the type attribute
              const type =
                password.getAttribute("type") === "password"
                  ? "text"
                  : "password";
              password.setAttribute("type", type);

              // toggle the icon
              this.classList.toggle("bi-eye");
            });
          </script>
          <button type="submit">Login</button>
        </form>
        <div class="account">
          Don't have an account?
          <a href="daftar.html">Sign up</a>
        </div>
      </div>
    </div>

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
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
