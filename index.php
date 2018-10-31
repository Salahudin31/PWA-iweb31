<?php require 'core/init.php'; require 'core/initArtikel.php'; if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
ob_start('ob_gzhandler');
else
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta content='width=device-width,initial-scale=1.0' name='viewport'>
	<meta name="google-site-verification" content="w1wr739yvZN8dw1ntz2WGIMRiKoQslr8Q9xApfW2BuA" />
	<meta name="keyword" content="iweb31, baca artikel, nonton movie, nonton film, nonton anime">
	<meta name="description" content="website iweb31 memberikan sebuah pengalaman dalam dunia teknologi dan membantu memberi sebuah pengelaman dalam teknologi pemrograman">
	<title>Iweb31</title>
	<link rel='canonical' href='https://isalapp.000webhostapp.com/'>
    <link rel='manifest' href='manifest.json'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='iweb31'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='apple-mobile-web-app-title' content='iweb31'>
    <link rel='icon' sizes='192x192' href='assets/img/salahudin31-192-192.png'>
    <link rel='apple-touch-icon' href='assets/img/salahudin31.png'>
    <meta name='msapplication-TileImage' content='assets/img/salahudin31.png'>
    <meta name='msapplication-TileColor' content='#2196F3'>
    <meta name='theme-color' content='#2196F3'>
    <meta property='og:title' content='iweb31'>
    <meta property='og:type' content='website'>
    <meta property='og:image' content='https://isalapp.000webhostapp.com/assets/img/salahudin31.png'>
    <meta property='og:url' content='https://isalapp.000webhostapp.com/'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" title="sal style" type="text/css" href="assets/css/sal.min.css">
	<link rel="icon" title="iweb31" href="assets/img/salahudin31.png">
    <script src='assets/js/pwacompat.min.js' async></script>
</head>

<body>
	<!-- header gambar
		<img class="img-fluid img-btm-1" src="assets/img/intro-dua.jpg" alt="">
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
				<a class="nav-item" href="tentang-kami/">Tentang Kami</a>
				<a class="nav-item" href="galeri/">Galeri</a>
			</div>	
		</div>
	</nav>
	<div class="navbar-btm bg-success fixed-btm d-mobile">
		<div class="row no-gutters text-center">
			<div class="col"><a class="nav-btm" href="https://isalapp.000webhostapp.com"><i class="fa fa-home" aria-hidden="true"></i></a></div>
			<div class="col"><a class="nav-btm" href="galeri/"><i class="fa fa-th-large" aria-hidden="true"></i></a></div>
			<div class="col"><a class="nav-btm" href="tentang-kami/"><i class="fa fa-info-circle" aria-hidden="true"></i></a></div>
		</div>
	</div>
	<!--<nav class="navbar navbar-expand-sm bg-success navbar-dark">
		<div class="container">	<a class="navbar-brand" href="https://isalapp.000webhostapp.com">Iweb31</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item active"><a class="nav-link" href="https://isalapp.000webhostapp.com">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="tentang-kami/">Tentang Kami</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="galeri/">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>-->
	<div class="row no-gutters mt-1 mb-1">
		<div class="col-lg-4 col-md-4 col-sm-4 col-12">
			<div class="p-1">
				<img src="assets/img/anime.jpg" class="img-fluid" alt="Anime">
				<div class="mt-1 text-center">	<a class="link-content" href="galeri/kategori/022A.html">Anime</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12">
			<div class="p-1">
				<img src="assets/img/Movie.jpg" class="img-fluid"  alt="Movie">
				<div class="mt-1 text-center">	<a class="link-content" href="galeri/kategori/023B.html">Movie</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12">
			<div class="p-1">
				<img src="assets/img/artikel.jpg" class="img-fluid"  alt="Artikel">
				<div class="mt-1 text-center">	<a class="link-content" href="galeri/kategori/011A.html">Artikel</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section-btm text-center">
		<div class="p-1 head-section-btm border-btm">
			<h2 class="section-btm-text">
				<span class="heading-text">Iweb31</span>
				<span class="desc-text">adalah sebuah website yang memberikan beberapa konten film, animasi kartun dan juga sebuah Artikel pembelajaran maupun tutorial yang bertujuan untuk memberikan sebuah wawasan tentang dunia teknologi. </span>
			</h2>
		</div>
	</div>
	<div class="isi">
		<div class="p-1">
			<div class="row no-gutters mb-2">
				<?php $films=$film->select_film_desc(); $film_count = count($films); $artikels=$artikel->select_artikel_desc(); $artikel_count = count($artikels); $limit = 12; $total_results = $film_count + $artikel_count; $total_pages = ceil($total_results/$limit); if (!isset($_GET['page'])) { $page = 1; } else{ $page = $_GET['page']; } $starting_limit = ($page-1)*$limit; $films = $film->select_film_desc_pagging($starting_limit,$limit); foreach ($films as $film_value) { ?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-6">
					<div class="p-15">	<a class="btn-img" href="galeri/video/<?php echo $film_value['kode_film'];?>.html" data-toggle="tooltip" data-placement="top" title="<?php echo $film_value['judul_film'];?>">
							<img src="assets/img/<?php echo $film_value['img'];?>" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<div class="code-book">&#x25B6; <?php echo $film_value['judul_film'];?></div></a>
					</div>
				</div>
				<?php } $artikels = $artikel->select_artikel_desc_pagging($starting_limit,$limit); foreach ($artikels as $artikel_value) { ?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-6">
					<div class="p-15">	<a class="btn-img" href="galeri/view-artikel/<?php echo $artikel_value['kode_artikel'];?>.html" data-toggle="tooltip" data-placement="top" title="<?php echo $artikel_value['judul_artikel'];?>">
							<img src="assets/img/profil.jpg" class="img-fluid" alt="<?php echo $artikel_value['judul_artikel'];?>">	<div class="code-book">&#x1F4D6; <?php echo $artikel_value['judul_artikel'];?></div></a>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="p-1">
			<ul class="pagination">
				<?php $prev=$page - 1; $next=$page + 1; if($page>1) { ?>
				<li><a class="pagination-link" href="<?php echo " ?page=$prev "; ?>">&laquo;</a>
				</li>
				<?php } ?>
				<?php for ($page=1; $page <=$total_pages ; $page++):?>
				<li>
					<a class="pagination-link" href="<?php echo " ?page=$page "; ?>">
						<?php echo $page; ?>
					</a>
				</li>
				<?php endfor; if($total_pages>$page) { ?>
				<li><a class="pagination-link" href="<?php echo " ?page=$next "; ?>">&raquo;</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="section-footer">
		<div class="p-1">
			<div class="row no-gutters pt-1 pb-1">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="p-1">
						<h4 class="border-btm">
							<span class="site-heading-lower">Genre</span>
						</h4>
						<?php $genres=$genre->select_genre_asc(); foreach ($genres as $genre_value) { ?>
						<div class="link-gen">
							<a href="galeri/genre/<?php echo $genre_value['kode_genre'];?>.html">
								<?php echo $genre_value[ 'nm_genre'];?>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="p-1">
						<h4 class="border-btm">
							<span class="site-heading-lower">Negara</span>
						</h4>
						<?php $negaras=$negara->select_negara_asc(); foreach ($negaras as $negara_value) { ?>
						<div class="link-gen">
							<a href="galeri/negara<?php echo $negara_value['kode_negara'];?>.html">
								<?php echo $negara_value[ 'nm_negara'];?>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="p-1 text-center">
						<h4>
							<span class="site-heading-lower">Afiliasi</span>
						</h4>
						<p><a href="http://initialssubject.esy.es/">Initials Subject</a></p>
						<p><a href="http://sosiscikarang.blogspot.com/">Sosis Bakar GCC</a></p>
						<p><a href="http://kawanjalan.com/">Kawan Jalan</a></p>
						<p>
						    <a href="https://jigsaw.w3.org/css-validator/check/referer">
						        <img style = "border: 0; width: 88px; height: 31px"
						            src = "https://jigsaw.w3.org/css-validator/images/vcss"
						            alt = "CSS Valid!" />
						    </a>
						</p>
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
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/comlink.global.js"> </script>
    <script src="assets/js/messagechanneladapter.global.js"> </script>
	<script>
	if ('serviceWorker' in navigator) {
	  navigator.serviceWorker.register('sw.js');
	}
	</script>
	<script>
	$(document).ready(function(){
	    $('[data-toggle="tooltip"]').tooltip();   
	});
	</script>
</body>

</html>