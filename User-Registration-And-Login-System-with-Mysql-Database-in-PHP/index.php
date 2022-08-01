<?php

 require 'backend/session.php'; 
 require 'backend/db.php'; 
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | User Registration And Login System with Mysql Database in PHP</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/image/icon.png" rel="icon">
    <meta name="theme-color" content="#712cf9">


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
        <!-- Custom styles for this template -->
        <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 btn btn-danger" href="backend/logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row text-center">
    <main class="col-md-12">
      <h2>User List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Create at</th>
            </tr>
          </thead>
          <tbody>
            
              <?php
              //loop in user registration data
              $query="SELECT * FROM user";
              $variable=mysqli_query($db,$query);
              $i=1;
              foreach($variable as $key => $value){
              ?>
              <tr>
              <td><?= $i++ ?></td>
              <td><?= $value['name']; ?></td>
              <td><?= $value['email']; ?></td>
              <td><?= $value['created_at']; ?></td>
              </tr>
              <?php
              }

              ?>

            
          </tbody>
        </table>
      </div>
    </main>
    
  </div>
</div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>