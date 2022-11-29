
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Submite</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';
	$user = json_decode($_COOKIE['user']);
	?>
	<section class="hero-wrap hero-wrap-2" style="background-image: url('home.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate mb-5 text-center">
					<p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span> <span>Daftar <i class="fa fa-chevron-right"></i></span></p> <span>Data Pendaftaran<i class="fa fa-chevron-right"></i></span>
					<h2 class="mb-0 bread">Data Pendaftaran</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="home-section" class="ftco-section">
		<div class="container mt-4">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<img width="100%" src="daftar.png">
				</div>
				<div class="col-md-7">
					<table >
						<tr>
							<?php echo "Nama Lengkap :" .$user->nama ?>
						</tr>
						<br>
						<tr>
							<?php echo "Tempat Lahir :" .$user->tlahir ?>
						</tr>
						<br>
						<tr>
							<?php echo "Tanggal Lahir :" .$user->tgllahir ?>
						</tr>
						<br>
						<tr>
							<?php echo "Jenis Kelamin :" .$user->gender?>
						</tr>
						<br>
						<tr>
							<?php echo "Email :" .$user->email?>
						</tr>
						<br>
						<tr>
							<?php echo "Password :" .$user->pws ?>
						</tr>
					</table>
						
					<br>
					<a href="login.php" class="btn btn-primary py-2 px-4">Log In</a>
				</div>
			</div>
</section>
	<?php
	include 'footer.php';
	?>
</body>
</html>
