<?php
/**
 * 
 */
class RatingArtikel
{
	private $dbArtikel;
	function __construct($database)
	{
		$this->dbArtikel=$database;
	}
	function add_rating($kd_rating,$rating,$skor){
		$query = $this->dbArtikel->prepare("INSERT INTO `rating` (`kode_rating`,`rating`,`skor`) VALUES (?,?,?)");
		$query->bindValue(1,$kd_rating);
		$query->bindValue(2,$rating);
		$query->bindValue(3,$skor);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_rating($kd_rating){
		$query = $this->dbArtikel->prepare("DELETE FROM `rating` WHERE `kode_rating` = ? ");
		$query->bindValue(1,$kd_rating);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_rating($id_rating,$kd_rating,$rating,$skor){
		$query = $this->dbArtikel->prepare("UPDATE `rating` SET `kode_rating` = ?, `rating` = ?, `skor` = ? WHERE `kode_rating` = ?");
		$query->bindValue(4,$id_rating);
		$query->bindValue(1,$rating);
		$query->bindValue(2,$skor);
		$query->bindValue(3,$kd_rating);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_rating(){
		$query = $this->dbArtikel->prepare("SELECT * FROM `rating` ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_rating_by_kd($kd_rating){
		$query = $this->dbArtikel->prepare("SELECT * FROM `rating` WHERE `kode_rating` = ? ");
		$query->bindValue(1, $kd_rating);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>