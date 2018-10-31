<?php require '../core/init.php'; require '../core/initArtikel.php'; if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
ob_start('ob_gzhandler');
else
ob_start();

$kd_negara=$_GET[ 'negara']; $film_get_negara=$film->select_film_negara($kd_negara);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta content='width=device-width,initial-scale=1.0' name='viewport'>
	<meta name="google-site-verification" content="w1wr739yvZN8dw1ntz2WGIMRiKoQslr8Q9xApfW2BuA" />
	<title>Iweb31 - Negara</title>
	<link rel='canonical' href='https://isalapp.000webhostapp.com/galeri/'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='iweb31'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='apple-mobile-web-app-title' content='iweb31'>
    <link rel='apple-touch-icon' href='../../assets/img/salahudin31.png'>
    <meta name='msapplication-TileImage' content='../../assets/img/salahudin31.png'>
    <meta name='msapplication-TileColor' content='#2196F3'>
    <meta name='theme-color' content='#2196F3'>
    <meta property='og:title' content='iweb31'>
    <meta property='og:type' content='website'>
    <meta property='og:image' content='https://isalapp.000webhostapp.com/assets/img/salahudin31.png'>
    <meta property='og:url' content='https://isalapp.000webhostapp.com/'>
	<link rel="stylesheet" type="text/css" href="../../assets/css/sal.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../../assets/img/salahudin31.jpg">
	<script src="../../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- header gambar
		<img class="img-fluid img-btm-1" src="../assets/img/intro-dua.jpg" alt="">
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
		<div class="container">	<a class="navbar-brand" href="https://isalapp.000webhostapp.com">Iweb31</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="https://isalapp.000webhostapp.com">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="../tentang-kami/">Tentang Kami</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="../galeri/">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>-->
	<div class="p-1">
		<div class="row no-gutters">
			<div class="col-lg-8 col-md-8 col-12">

				<?php $negaras = $negara->select_negara_kd($kd_negara); ?>
				<div class='link-kat'><a class='btn active disable'><?php echo $negaras['nm_negara'];?></a>
				</div><a class='btn-bagde' href='../'><i class='fa fa-close'></i></a>

				<div class="row no-gutters">
				<?php foreach ($film_get_negara as $film_value) { ?>
				<div class="col-md-4 col-sm-4 col-6">
					<div class="p-15">	<a class="btn-img" href="../video/<?php echo $film_value['kode_film'];?>.html">
							<img src="../../assets/img/<?php echo $film_value['img'];?>" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<div class="code-book">&#x25B6; <?php echo $film_value['judul_film'];?></div></a>
					</div>
				</div>
				<?php } ?>
			</div>

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="p-1 m-1 bg-initials">
					<h4 class="border-btm">
						<span class="site-heading-lower">Kategori</span>
					</h4>
					<?php $kategoris=$kategori->select_kategori_asc(); foreach ($kategoris as $kategori_value) { ?>
					<div class="link-gen">
						<a href="../kategori/<?php echo $kategori_value['kode_kategori'];?>.html">
							<?php echo $kategori_value[ 'nm_kategori'];?>
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="p-1 m-1 bg-initials">
					<h4 class="border-btm">
						<span class="site-heading-lower">Artikel</span>
					</h4>
					<?php $jenis=$jenis->select_jenis_asc(); foreach ($jenis as $jenis_value) { ?>
					<div class="link-gen">
						<a href="../artikel/<?php echo $jenis_value['kode_jenis'];?>.html">
							<?php echo $jenis_value['nm_jenis'];?>
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="p-1 m-1 bg-initials">
					<h4 class="border-btm">
						<span class="site-heading-lower">Genre</span>
					</h4>
					<?php $genres=$genre->select_genre_asc(); foreach ($genres as $genre_value) { ?>
					<div class="link-gen">
						<a href="../genre/<?php echo $genre_value['kode_genre'];?>.html">
							<?php echo $genre_value[ 'nm_genre'];?>
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="p-1 m-1 bg-initials">
					<h4 class="border-btm">
						<span class="site-heading-lower">Negara</span>
					</h4>
					<?php $negaras=$negara->select_negara_asc(); foreach ($negaras as $negara_value) { ?>
					<div class="link-gen">
						<a href="../negara/<?php echo $negara_value['kode_negara'];?>.html">
							<?php echo $negara_value[ 'nm_negara'];?>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="section-footer">
		<div class="p-1">
			<div class="row no-gutters">
				<div class="col-lg-6 col-md-6 col-sm-6 col-12">
					<div class="p-1">
						<h2 class="section-btm-text">
							<span class="heading-text">Iweb31</span>
							<span class="desc-text">adalah sebuah website yang memberikan beberapa konten film, animasi kartun dan juga sebuah Artikel pembelajaran maupun tutorial yang bertujuan untuk memberikan sebuah wawasan tentang dunia teknologi. </span>
						</h2>
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
	<script>
		$(document).ready(function(){

	    $(".btn").click(function(){
	        var value = $(this).attr('data-filter');
	        
		    if ($(".btn").removeClass("active")) {
			$(this).removeClass("active");
			}
			$(this).addClass("active");
	        
	        if(value == "all")
	        {
	            //$('.filter').removeClass('hidden');
	            $('.filter').show('1000');
	        }
	        else
	        {
	//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
	//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
	            $(".filter").not('.'+value).hide('3000');
	            $('.filter').filter('.'+value).show('3000');
	            
	        }
	    });

		});
	</script>
</body>

</html>