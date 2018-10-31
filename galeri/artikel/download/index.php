<?php require '../../../core/init.php'; if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
ob_start('ob_gzhandler');
else
ob_start();
if (isset($_GET['kd'])) {
    $kd_film = $_GET['kd'];

    $films = $film->select_film_kd($kd_film);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content='width=device-width,initial-scale=1.0' name='viewport'>
	<title>Iweb31</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/sal.min.css">
	<link rel="icon" href="../../../assets/img/salahudin31.jpg">
	<script src="../../../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../../../assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#flip2").click(function(){
		        $("#panel2").slideToggle("fast");
		    });
		});
		$(document).ready(function(){
		    $("#flip3").click(function(){
		        $("#panel3").slideToggle("fast");
		    });
		});
		$(document).ready(function(){
		    $("#flip4").click(function(){
		        $("#panel4").slideToggle("fast");
		    });
		});
	</script>
</head>

<body>
	<!-- header gambar
		<img class="img-fluid img-btm-1" src="../../../assets/img/intro-dua.jpg" alt="">
		<div class="caption-page">
			<h2 class="site-heading text-center">
				<span class="site-heading-upper">Welcome to Salahudin31</span>
				<span class="site-heading-lower">Welcome to Salahudin31</span>
			</h2>
		</div>
	-->
	<nav class="navbar bg-success">
		<div class="d-mobile"><a class="navbar-brand" href="https://isalapp.000webhostapp.com">Iweb31</a></div>
		<div class="container d-desktop"><a class="navbar-brand" href="https://isalapp.000webhostapp.com">Iweb31</a>
			<div class="text-center">
				<a class="nav-item" href="https://isalapp.000webhostapp.com">Home</a>
				<a class="nav-item" href="https://isalapp.000webhostapp.com/tentang-kami/">Tentang Kami</a>
				<a class="nav-item" href="https://isalapp.000webhostapp.com/galeri/">Galeri</a>
			</div>	
		</div>
	</nav>
	<div class="navbar-btm bg-success fixed-btm d-mobile">
		<div class="row no-gutters text-center">
			<div class="col"><a class="nav-btm" href="https://isalapp.000webhostapp.com"><i class="fa fa-home" aria-hidden="true"></i></a></div>
			<div class="col"><a class="nav-btm" href="https://isalapp.000webhostapp.com/galeri/"><i class="fa fa-th-large" aria-hidden="true"></i></a></div>
			<div class="col"><a class="nav-btm" href="https://isalapp.000webhostapp.com/tentang-kami/"><i class="fa fa-info-circle" aria-hidden="true"></i></a></div>
		</div>
	</div>
	<!--<nav class="navbar navbar-expand-sm bg-success navbar-dark">
		<div class="container">	<a class="navbar-brand" href="#">Iweb31</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="../../../index.php">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="../../../tentang-kami/index.php">Tentang Kami</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="../index.php">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>-->
	<div class="isi mt-1">
		<div class="container mb-36 text-center">
			<h2 class="section-btm-text text-center">
				<span class="heading-text">One Piece Ep 850</span>
			</h2>
			<div class="link-kat"><a class="btn" href="#">Download</a>
			</div>
		</div>
	</div>
	<div class="section-footer">
		<div class="container">
			<div class="row no-gutters pt-1">
				<div class="col-lg-5 col-md-5 col-sm-4 col-12">
					<div class="p-1">
						<h4 class="border-btm">
							<span class="site-heading-lower">Genre</span>
						</h4>
						<?php
							$genres = $genre->select_genre_asc();
							foreach ($genres as $genre_value) {
						?>
						<div class="link-gen"><a href="#"><?php echo $genre_value['nm_genre'];?></a>
						</div>
						<?php
							}
						?>
					</div>
					<div class="p-1">
						<h4 class="border-btm">
							<span class="site-heading-lower">Negara</span>
						</h4>
						<?php
							$negaras = $negara->select_negara_asc();
							foreach ($negaras as $negara_value) {
						?>
						<div class="link-gen"><a href="#"><?php echo $negara_value['nm_negara'];?></a>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-8 col-12">
					<div class="p-1 text-center">
						<h4>
							<span class="site-heading-lower">Afiliasi</span>
						</h4>
						<p><a href="http://initialssubject.esy.es/">Initials Subject</a></p>
						<p><a href="http://sosiscikarang.blogspot.com/">Sosis Bakar GCC</a></p>
						<p><a href="http://kawanjalan.com/">Kawan Jalan</a></p>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="footer-caption text-center">
		<label>&copy; Salahudin31</label>
	</div>
	<div class="d-mobile mt-14">
	</div>

</body>

</html>
<?php
}else{
    echo "<script>location=('../../');alert('Sorry, no data available.')</script>";
}
?>