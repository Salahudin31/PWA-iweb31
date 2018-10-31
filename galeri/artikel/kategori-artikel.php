<?php $kd_KA=$_GET[ 'kA']; $artikel_get_KA=$artikel->select_artikel_kategoriartikel($kd_KA); ?>
<div class="row no-gutters">
	<?php foreach ($artikel_get_KA as $artikel_value) { ?>
	<div class="col-md-4 col-sm-4 col-6">
		<div class="p-15">	<a class="btn-img" href="?kd=<?php echo $artikel_value['kode_artikel'];?>">
				<img src="../../assets/img/profil.jpg" class="img-fluid" alt="<?php echo $artikel_value['judul_artikel'];?>">	<div class="code-book">&#x1F4D6; <?php echo $artikel_value['judul_artikel'];?></div></a>
		</div>
	</div>
	<?php } ?>
</div>