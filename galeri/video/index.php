<?php require '../../core/init.php'; require '../../core/initArtikel.php'; if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
ob_start('ob_gzhandler');
else
ob_start();
if (isset($_GET[ 'kd'])) { $kd_film=$_GET[ 'kd']; $film_get=$film->select_film_kd($kd_film); $kategori_get = $kategori->select_kategori_kd($film_get['kode_kategori']); $genre_get = $genre->select_genre_kd($film_get['kode_genre']); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta content='width=device-width,initial-scale=1.0' name='viewport'>
	<meta name="google-site-verification" content="w1wr739yvZN8dw1ntz2WGIMRiKoQslr8Q9xApfW2BuA" />
	<title>Iweb31 - <?php echo $film_get[ 'judul_film'];?></title>
	<link rel='canonical' href='https://isalapp.000webhostapp.com/galeri/video/<?php echo $kd_film;?>.html'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='iweb31'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='apple-mobile-web-app-title' content='iweb31 - <?php echo $kd_film;?>'>
    <link rel='apple-touch-icon' href='../../assets/img/salahudin31.png'>
    <meta name='msapplication-TileImage' content='../../assets/img/salahudin31.png'>
    <meta name='msapplication-TileColor' content='#2196F3'>
    <meta name='theme-color' content='#2196F3'>
    <meta property='og:title' content='<?php echo $film_get[ 'judul_film'];?>'>
    <meta property='og:type' content='<?php echo $kategori_get[ 'nm_kategori'];?>'>
    <meta property='og:image' content='https://isalapp.000webhostapp.com/assets/img/<?php echo $film_get['img'];?>'>
    <meta property='og:url' content='https://isalapp.000webhostapp.com/galeri/video/<?php echo $kd_film;?>.html'>
    <meta property="og:description"    content="https://isalapp.000webhostapp.com/galeri/video/<?php echo $kd_film;?>.html" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/sal.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../../assets/img/salahudin31.jpg">
	<script src="../../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "Movie",
	  "name" : "<?php echo $film_get[ 'judul_film'];?>",
	  "image" : "https://isalapp.000webhostapp.com/assets/img/<?php echo $film_get[ 'img'];?>",
	  "url" : "https://isalapp.000webhostapp.com/galeri/video/<?php echo $film_get[ 'kode_film'];?>.html",
	  "datePublished" : "25-Sep-2018",
	  "aggregateRating" : {
	    "@type" : "AggregateRating",
	    "ratingValue" : "9.2 / 10",
	    "ratingCount" : "9.2"
	  }
	}
	</script>
</head>

<body>
	<!-- header gambar
		<img class="img-fluid img-btm-1" src="../../assets/img/intro-dua.jpg" alt="">
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
				<a class="nav-item" href="https://isalapp.000webhostapp.com/tentang kami/">Tentang Kami</a>
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
					<li class="nav-item"><a class="nav-link" href="../../tentang-kami/index.php">Tentang Kami</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="../index.php">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>-->
	<div class="isi border-btm">
		<div class="p-1 mb-1">
			<div class="row no-gutters">
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					
					<div id="tutorial-video-responsive" class="custom-video">
						<h1 class="section-btm-text">
							<span class="site-heading-lower">Film - <?php echo $film_get[ 'judul_film'];?></span>
						</h1>
						<div class="custom-video">
							<?php if(is_null($film_get[ 'link_film'])){?>
								<p>Maaf film tidak tersedia</p>
							<?php }else{?>
								<iframe src="<?php echo $film_get[ 'link_film'];?>" allowfullscreen></iframe>
							<?php }?>
						</div>
					</div>
					<div class="bg-success p-1">
						<h4 class="section-btm-text color-white">
							<span class="heading-text">Detail</span>
						</h4>
					</div>
					<div class="ml-1">
						<table>
							<tr>
								<td>Judul</td>
								<td>
									<?php echo $film_get[ 'judul_film'];?>
								</td>
							</tr>
							<?php if (" ") { ?>
							<?php } else{ ?>
							<tr>
								<td>Episode</td>
								<td>850</td>
							</tr>
							<?php } ?>
							<tr>
								<td>Durasi</td>
								<td>
									<?php echo $film_get[ 'durasi'];?>
								</td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>
									<?php echo $kategori_get[ 'nm_kategori'];?>
								</td>
							</tr>
							<tr>
								<td>Genre</td>
								<td>
									<?php echo $genre_get[ 'nm_genre'];?>
								</td>
							</tr>
							<tr>
								<td>Tanggal Keluar</td>
								<td>
									<?php echo date( 'd-M-Y H:i:s',$film_get[ 'tgl_rilis']); ?>
								</td>
							</tr>
							<tr>
								<td>Rating</td>
								<td>9.2 / 10</td>
							</tr>
							<tr>
								<td class="text-top">Sinopsis</td>
								<td class="text-justify">
									<?php echo $film_get[ 'desk'];?>
								</td>
							</tr>
						</table>
					</div>
					<!--
					<div class="p-1 bg-cloud">
						<div class="mt-1"><span class="pr-59">Google Drive</span>
							<?php # $kualitas_=$kualitas->select_kualitas(); foreach ($kualitas_ as $kulitas_value) { ?>
							<div class="link-kat-size">
								<a href="download/?kd=<?php # echo $kd_film; ?>">
									<?php # echo $kulitas_value[ 'nm_kualitas'];?>
								</a>
							</div>
							<?php # } ?>
						</div>
						<div><span class="pr-95">Mega Cloud</span>
							<?php # $kualitas_=$kualitas->select_kualitas(); foreach ($kualitas_ as $kulitas_value) { ?>
							<div class="link-kat-size">
								<a href="download/?kd=<?php # echo $kd_film; ?>">
									<?php # echo $kulitas_value[ 'nm_kualitas'];?>
								</a>
							</div>
							<?php # } ?>
						</div>
						<div><span class="pr-2">Openload</span>
							<?php # $kualitas_=$kualitas->select_kualitas(); foreach ($kualitas_ as $kulitas_value) { ?>
							<div class="link-kat-size">
								<a href="download/?kd=<?php # echo $kd_film; ?>">
									<?php # echo $kulitas_value[ 'nm_kualitas'];?>
								</a>
							</div>
							<?php # } ?>
						</div>
						<div><span class="pr-15">Zippyshare</span>
							<?php # $kualitas_=$kualitas->select_kualitas(); foreach ($kualitas_ as $kulitas_value) { ?>
							<div class="link-kat-size">
								<a href="download/?kd=<?php # echo $kd_film; ?>">
									<?php # echo $kulitas_value[ 'nm_kualitas'];?>
								</a>
							</div>
							<?php # } ?>
						</div>
					</div>-->
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
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
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Serupa</span>
						</h4>
						<?php $films=$film->select_film_desc(); $film_count = count($films); $limit = 2; $starting_limit = ($limit-1)*$limit; $films = $film->select_film_desc_pagging($starting_limit,$limit); foreach ($films as $film_value) { ?>
							<div class="p-02">	<a class="btn-img bg-white" href="<?php echo $film_value['kode_film'];?>.html">
										<img src="../../assets/img/<?php echo $film_value['img'];?>" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<span class="code-book">&#x25B6; </span><?php echo $film_value['judul_film'];?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (isset($_GET[ 'genre'])) { include_once( "genre.php"); }elseif (isset($_GET['negara'])){include_once("negara.php"); }elseif (isset($_GET['kategori'])){ include_once("kategori.php"); }else { ?>
	<div id="myBtnContainer" class="section-kat">
		<div class="link-kat"><a class="btn active" data-filter="all")">All</a>
		</div>
		<div class="link-kat"><a class="btn" data-filter="Movie">Movie</a>
		</div>
		<div class="link-kat"><a class="btn" data-filter="Anime">Anime</a>
		</div>
		<div class="link-kat"><a class="btn" data-filter="Artikel">Artikel</a>
		</div>
	</div>
	<div class="isi">
		<div class="p-1">
			<div class="row no-gutters mb-2">
				<?php $films=$film->select_film_desc(); $film_count = count($films); $artikels=$artikel->select_artikel_desc(); $artikel_count = count($artikels); $limit = 12; $total_results = $film_count + $artikel_count; $total_pages = ceil($total_results/$limit); if (!isset($_GET['page'])) { $page = 1; } else{ $page = $_GET['page']; } $starting_limit = ($page-1)*$limit; $films = $film->select_film_desc_pagging($starting_limit,$limit); foreach ($films as $film_value) { $kategori_get = $kategori->select_kategori_kd($film_value['kode_kategori']);?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-6 filter <?php echo $kategori_get['nm_kategori'];?>">
					<div class="p-15">	<a class="btn-img" href="<?php echo $film_value['kode_film'];?>.html">
								<img src="../../assets/img/<?php echo $film_value['img'];?>" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<div class="code-book">&#x25B6; <?php echo $film_value['judul_film'];?></div></a>
					</div>
				</div>
				<?php } $artikels = $artikel->select_artikel_desc_pagging($starting_limit,$limit); foreach ($artikels as $artikel_value) { $kategori_get = $kategoriArtikel->select_kA_tp($artikel_value['kode_kategori']); ?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-6 filter <?php echo $kategori_get['kategori_tp'];?>">
					<div class="p-15">	<a class="btn-img" href="../view-artikel/<?php echo $artikel_value['kode_artikel'];?>.html">
							<img src="../../assets/img/profil.jpg" class="img-fluid" alt="<?php echo $artikel_value['judul_artikel'];?>">	<div class="code-book">&#x1F4D6; <?php echo $artikel_value['judul_artikel'];?></div></a>
					</div>
				</div>
				<?php }?>
			</div>
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
	<?php } ?>
	<div class="section-footer">
		<div class="p-1">
			<div class="row no-gutters p-1">
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