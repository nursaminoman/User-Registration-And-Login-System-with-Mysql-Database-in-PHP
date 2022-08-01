<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | User Registration And Login System with Mysql Database in PHP</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/signin.css" rel="stylesheet">
    <link href="assets/image/icon.png" rel="icon">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body class="text-center">
    

  <main class="form-signin w-100 m-auto">
  <form method="POST" action="backend/loginPost.php">
    <img class="mb-4" src="assets/image/icon.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>
          <?php
      if(isset($_SESSION['danger'])){
        echo $_SESSION['danger'];
        unset($_SESSION['danger']);
      }
      ?>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <?php
      if(isset($_SESSION['email'])){
        echo $_SESSION['email'];
        unset($_SESSION['email']);
      }
      ?>
    </div><br>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <?php
      if(isset($_SESSION['password'])){
        echo $_SESSION['password'];
        unset($_SESSION['password']);
      }
      ?>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <div class="form-floating">
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </div><br>

    <a href="registration.php" class="btn btn-danger">Registration</a>
    <p class="mt-5 mb-3 text-muted">Copyright © 2022 Developed By Nur Sami Noman</p>
  </form>
</main>



    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>