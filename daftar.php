<?php include 'header.php'; ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('home.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate mb-5 text-center">
				<p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span> <span>Daftar <i class="fa fa-chevron-right"></i></span></p>
				<h2 class="mb-0 bread">Daftar</h2>
			</div>
		</div>
	</div>
</section>
<section id="home-section" class="ftco-section">
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<img width="100%" src="foto/daftar.png">
			</div>
			<div class="col-md-7">
				<form method="post" action="terdaftar.php" >
				<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" name="tempat_lahir" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" name="gender" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<br>
					<!-- <a href="submit.php" class="btn btn-primary py-2 px-4">Masuk</a> -->
					<button class="btn btn-primary btn-block" name="simpan">Masuk</button>
				</form>
			</div>
		</div>
</section>
<?php
include 'footer.php';
?>