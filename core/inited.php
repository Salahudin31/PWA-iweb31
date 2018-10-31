<?php 
ob_start(); // Added to avoid a common error of 'header already sent'
session_start();
//database
require_once 'connect/db.php';
//objek
require_once 'classes/film.php';

//spareparts
require_once 'classes/genre.php';
require_once 'classes/kategori.php';
require_once 'classes/kualitas.php';
require_once 'classes/negara.php';
require_once 'classes/rating.php';

require_once 'connect/dbArtikel.php';
//objek
require_once 'classes/artikel.php';

//spareparts
require_once 'classes/jenis.php';
require_once 'classes/kategoriArtikel.php';
require_once 'classes/subJenis.php';
require_once 'classes/ratingArtikel.php';


	//objek
	$film 			= new Film($db);
	$artikel 			= new Artikel($db);

	//spareparts
	$genre			= new Genre($db);
	$kategori 		= new Kategori($db);
	$kualitas 		= new Kualitas($db);
	$negara 		= new Negara($db);
	$rating 		= new Rating($db);
	//spareparts
	$jenis			= new Jenis($db);
	$kategoriArtikel 		= new KategoriArtikel($db);
	$subJenis 		= new SubJenis($db);
	$ratingArtikel 		= new RatingArtikel($db);
	
$errors = array();
?>