<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
ob_start(); // Added to avoid a common error of 'header already sent'
require_once 'connect/dbArtikel.php';
function my_autoload2($class)
{   $filename2 = 'classesArtikel/'.$class.'.php';
	include_once $filename2;
}
spl_autoload_register('my_autoload2');
try {
	//objek
	$artikel 			= new Artikel($dbArtikel);

	//spareparts
	$jenis				= new Jenis($dbArtikel);
	$kategoriArtikel 	= new KategoriArtikel($dbArtikel);
	$subJenis 			= new SubJenis($dbArtikel);
	$ratingArtikel 		= new RatingArtikel($dbArtikel);

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>