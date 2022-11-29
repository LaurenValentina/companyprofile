
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kencana Energy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="animate.css">

  <link rel="stylesheet" href="owl.carousel.min.css">
  <link rel="stylesheet" href="owl.theme.default.min.css">
  <link rel="stylesheet" href="magnific-popup.css">

  <link rel="stylesheet" href="flaticon.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php"> <img src="logo.png" width="150px" style="border-radius: 10px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-list"></i>
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION['login'])) { ?>
          <li class="nav-item active"><a href="index1.php" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="logout.php" class="nav-link">Logout</a></li>
        <?php } else { ?>
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="daftar.php" class="nav-link">Daftar</a></li>
          <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
          <!-- <li class="nav-item active"><a href="logout.php" class="nav-link">Logout</a></li> -->
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>