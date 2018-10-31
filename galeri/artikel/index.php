<?php require '../../core/init.php'; require '../../core/initArtikel.php'; if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
ob_start('ob_gzhandler');
else
ob_start();
if (isset($_GET[ 'kd'])) { $kd_artikel=$_GET[ 'kd']; $artikel_get=$artikel->select_artikel_kd($kd_artikel); $kategori_get = $kategoriArtikel->select_kA_kd_value($artikel_get['kode_kategori']); $jenis_get = $jenis->select_jenis_kd($artikel_get['kode_jenis']); $subjenis_get = $subJenis->select_subjenis_kd($artikel_get['sub_jenis']); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta content='width=device-width,initial-scale=1.0' name='viewport'>
	<meta name="google-site-verification" content="w1wr739yvZN8dw1ntz2WGIMRiKoQslr8Q9xApfW2BuA" />
	<title>Iweb31 - <?php echo $artikel_get[ 'judul_artikel'];?></title>
	<link rel='canonical' href='https://isalapp.000webhostapp.com/galeri/artikel/'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='iweb31'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='apple-mobile-web-app-title' content='iweb31'>
    <link rel='apple-touch-icon' href='assets/img/salahudin31.png'>
    <meta name='msapplication-TileImage' content='assets/img/salahudin31.png'>
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
					<li class="nav-item"><a class="nav-link" href="../../tentang-kami/index.php">Tentang Kami</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="../index.php">Galeri</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>-->
	<div class="isi border-btm">
		<div class="p-1">
			<div class="row no-gutters">
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<?php if (isset($_GET[ 'subjenis'])) { $kd_subjenis=$_GET[ 'subjenis']; $subjeniss=$subJenis->select_subjenis_kd($kd_subjenis); echo "
					<div class='link-kat'><a class='btn active disable'>".$subjeniss['nm_subjenis']."</a>
					</div><a class='btn-bagde' href='../'><i class='fa fa-close'></i></a>"; include_once("subjenis.php"); }elseif (isset($_GET[ 'kA'])) { $kd_kA=$_GET[ 'kA']; $kAs=$kategoriArtikel->select_kA_kd($kd_kA); echo "
					<div class='link-kat'><a class='btn active disable'>".$kAs['nm_kategori']."</a>
					</div><a class='btn-bagde' href='../'><i class='fa fa-close'></i></a>"; include_once("kategori-artikel.php"); }elseif (isset($_GET[ 'jenis'])) { $kd_jenis=$_GET[ 'jenis']; $jeniss=$jenis->select_jenis_kd($kd_jenis); echo "
					<div class='link-kat'><a class='btn active disable'>".$jeniss['nm_jenis']."</a>
					</div><a class='btn-bagde' href='../'><i class='fa fa-close'></i></a>"; include_once("jenis.php"); }else {?>
					<div id="tutorial-pdf-responsive" class="custom1">
						<h1 class="section-btm-text">
							<span class="site-heading-lower">Artikel - <?php echo $artikel_get[ 'judul_artikel'];?></span>
						</h1>
						<div class="custom2">
							<?php if(is_null($artikel_get[ 'judul_artikel'])){?>
								<p>Maaf artikel tidak tersedia</p>
							<?php }else{?>
								<iframe src="https://drive.google.com/file/d/0ByRtmxTgwFzlR0pxZjd4RUZMeEU/preview"></iframe>
							<?php }?>
						</div>
					</div>
					<div class="bg-success p-1">
						<h4 class="section-btm-text color-white">
							<span class="heading-text">Detail</span>
						</h4>
					</div>
					<div class="ml-1 bg-cloud">
						<table>
							<tr>
								<td>Judul</td>
								<td><?php echo $artikel_get[ 'judul_artikel'];?></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td><?php echo $kategori_get[ 'nm_kategori'];?></td>
							</tr>
							<tr>
								<td>Sub Jenis</td>
								<td><?php echo $subjenis_get[ 'nm_subjenis'];?></td>
							</tr>
							<tr>
								<td>Jenis</td>
								<td><?php echo $jenis_get[ 'nm_jenis'];?></td>
							</tr>
							<tr>
								<td>Tanggal Keluar</td>
								<td><?php echo date( 'd-M-Y H:i:s',$artikel_get[ 'tgl_rilis']); ?></td>
							</tr>
							<tr>
								<td class="text-top">Keterangan</td>
								<td class="text-justify"><?php echo $artikel_get[ 'desk_artikel'];?></td>
							</tr>
						</table>
						<div class="p-1">Link download file
							<div class="pl-1 link-kat-size"><a class="active" href="download/index.php">Download</a>
							</div>
						</div>
					</div>
				<?php }?>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Sub Jenis</span>
						</h4>
						<?php $subjeniss=$subJenis->select_subjenis_asc(); foreach ($subjeniss as $subjenis_value) { ?>
						<div class="link-gen">
							<a href="?subjenis=<?php echo $subjenis_value['kode_subjenis'];?>">
								<?php echo $subjenis_value[ 'nm_subjenis'];?>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Kategori Artikel</span>
						</h4>
						<?php $kategoris=$kategoriArtikel->select_kategori_asc(); foreach ($kategoris as $kategori_value) { ?>
						<div class="link-gen">
							<a href="?kA=<?php echo $kategori_value['kode_kategori'];?>">
								<?php echo $kategori_value[ 'nm_kategori'];?>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Jenis</span>
						</h4>
						<?php $jenis=$jenis->select_jenis_asc(); foreach ($jenis as $jenis_value) { ?>
						<div class="link-gen">
							<a href="?jenis=<?php echo $jenis_value['kode_jenis'];?>">
								<?php echo $jenis_value[ 'nm_jenis'];?>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="p-1 m-1 bg-initials">
						<h4 class="border-btm">
							<span class="site-heading-lower">Serupa</span>
						</h4>
						<?php $artikels=$artikel->select_artikel_desc(); $artikel_count = count($artikels); $limit = 2; $starting_limit = ($limit-1)*$limit; $artikels = $artikel->select_artikel_desc_pagging($starting_limit,$limit); foreach ($artikels as $artikel_value) { ?>
							<div class="p-02">	<a class="btn-img bg-white" href="../artikel/?kd=<?php echo $artikel_value['kode_artikel'];?>">
										<img src="../../assets/img/profil.jpg" class="img-fluid" alt="<?php echo $artikel_value['judul_artikel'];?>">	<span class="code-book">&#x25B6; </span><?php echo $artikel_value['judul_artikel'];?></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
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
			<div class="row no-gutters">
				<?php $films=$film->select_film_desc(); $film_count = count($films); $artikels=$artikel->select_artikel_desc(); $artikel_count = count($artikels); $limit = 12; $total_results = $film_count + $artikel_count; $total_pages = ceil($total_results/$limit); if (!isset($_GET['page'])) { $page = 1; } else{ $page = $_GET['page']; } $starting_limit = ($page-1)*$limit; $films = $film->select_film_desc_pagging($starting_limit,$limit); foreach ($films as $film_value) { $kategori_get = $kategori->select_kategori_kd($film_value['kode_kategori']);?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-6 filter <?php echo $kategori_get['nm_kategori'];?>">
					<div class="p-15">	<a class="btn-img" href="../video/?kd=<?php echo $film_value['kode_film'];?>">
								<img src="../../assets/img/<?php echo $film_value['img'];?>" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<div class="code-book">&#x25B6; <?php echo $film_value['judul_film'];?></div></a>
					</div>
				</div>
				<?php } $artikels = $artikel->select_artikel_desc_pagging($starting_limit,$limit); foreach ($artikels as $artikel_value) { $kategori_get = $kategoriArtikel->select_kA_tp($artikel_value['kode_kategori']); ?>
				<div class="col-lg-3 col-md-3 col-sm-4 col-6 filter <?php echo $kategori_get['kategori_tp'];?>">
					<div class="p-15">	<a class="btn-img" href="?kd=<?php echo $artikel_value['kode_artikel'];?>">
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