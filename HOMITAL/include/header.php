<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        nav a.nav-link {
            color: #fff !important;
        }
        body{
        background-image: url("images/b.jpg");
        background-repeat: no-repeat;
        height: 100vh;
        opacity:3.0;
    
      }
        

      @media (min-width: 992px) {
        .body {
          margin-top: -58.59px;
        }
      }

      /* .navbar .nav-link {
        color: #fff !important;
      } */
    </style>

    <title>Home Services</title>
</head>

<body >
    <nav class="nav bg-dark">
        <?php if (!isset($_SESSION['user'])): ?>
        <a class="nav-link active" href="index.php">Find The Service</a>
        <a class="nav-link" href="register.php">Register As Service Provider</a>
        <a class="nav-link" href="about.php">About</a>
        <?php endif; ?>

    </nav>