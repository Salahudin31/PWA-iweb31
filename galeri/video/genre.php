<?php $kd_genre=$_GET[ 'genre']; $film_get_genre=$film->select_film_genre($kd_genre); ?>
<div class="row no-gutters">
	<?php foreach ($film_get_genre as $film_value) { ?>
	<div class="col-md-4 col-sm-4 col-6">
		<div class="p-15">	<a class="btn-img" href="?kd=<?php echo $film_value['kode_film'];?>">
				<img src="../../assets/img/<?php echo $film_value['img'];?>" class="img-fluid" alt="<?php echo $film_value['judul_film'];?>">	<div class="code-book">&#x25B6; <?php echo $film_value['judul_film'];?></div></a>
		</div>
	</div>
	<?php } ?>
</div>