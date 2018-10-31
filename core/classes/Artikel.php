<?php
/**
 * 
 */
class Artikel
{
	private $dbArtikel;
	function __construct($databse)
	{
		$this->dbArtikel=$databse;
	}
	function count_artikel($kd_kategori){
		$query = $this->dbArtikel->prepare("SELECT COUNT(`kode_kategori`) FROM `artikel` WHERE `kode_kategori` = ?");
		$query->bindValue(1,$kd_kategori);
		try {
			$query->execute();
			$row=$query->fecthColumn();
			if($row==1){
				return true;
			}else{
				return false;
			}
		} catch (PDOException $e){
			die($e->getMessage()); 
		}
	}
	function add_artikel($kd_artikel,$kd_jenis,$kd_negara,$kd_kategori,$kd_rating,$tgl_r,$jdl_artikel,$link_artikel,$desk){
		$query = $this->dbArtikel->prepare("INSERT INTO `artikel` (`$kode_artikel`,`$kode_jenis`,`$kode_negara`,`$kode_kategori`,`$kode_rating`,`$tgl_rilis`,`$judul_artikel`,`$link_artikel`,`$desk_artikel`) VALUES (?,?,?,?,?,?,?,?,?)");
		$query->bindValue(1,$kd_artikel);
		$query->bindValue(2,$kd_jenis);
		$query->bindValue(3,$kd_negara);
		$query->bindValue(4,$kd_kategori);
		$query->bindValue(5,$kd_rating);
		$query->bindValue(6,$tgl_r);
		$query->bindValue(7,$jdl_artikel);
		$query->bindValue(8,$link_artikel);
		$query->bindValue(9,$desk);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_artikel($id_artikel){
		$query = $this->dbArtikel->prepare("DELETE FROM `artikel` WHERE `id_artikel` = ? ");
		$query->bindValue(1,$id_artikel);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_artikel($id_artikel,$kd_artikel,$kd_jenis,$kd_negara,$kd_kategori,$kd_rating,$tgl_r,$jdl_artikel,$link_artikel,$durasi,$desk){
		$query = $this->dbArtikel->prepare("UPDATE `artikel` SET `kode_artikel` = ?, `kode_jenis` = ?, `kode_negara` = ?, `kode_kategori` = ?, `kode_rating` = ?, `tgl_rilis` = ?, `judul_artikel` = ?, `link_artikel` = ?, `desk_artikel` = ? WHERE `id_artikel` = ?");
		$query->bindValue(10,$id_artikel);
		$query->bindValue(1,$kd_artikel);
		$query->bindValue(2,$kd_jenis);
		$query->bindValue(3,$kd_negara);
		$query->bindValue(4,$kd_kategori);
		$query->bindValue(5,$kd_rating);
		$query->bindValue(6,$tgl_r);
		$query->bindValue(7,$jdl_artikel);
		$query->bindValue(8,$link_artikel);
		$query->bindValue(9,$desk);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_artikel_desc(){
		$query = $this->dbArtikel->prepare("SELECT * FROM `artikel` ORDER BY `id_artikel` DESC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_artikel_desc_pagging($posisi,$batas){
		$query = $this->dbArtikel->prepare("SELECT * FROM `artikel` ORDER BY `id_artikel` DESC LIMIT  ".$posisi.",".$batas." ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_artikel_kd($kd_artikel){
		$query = $this->dbArtikel->prepare("SELECT * FROM `artikel` WHERE `kode_artikel` = ?");
		$query->bindValue(1, $kd_artikel);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_artikel_jenis($jenis_artikel){
		$query = $this->dbArtikel->prepare("SELECT * FROM `artikel` WHERE `kode_jenis` = ?");
		$query->bindValue(1, $jenis_artikel);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_artikel_subjenis($subjenis_artikel){
		$query = $this->dbArtikel->prepare("SELECT * FROM `artikel` WHERE `sub_jenis` = ?");
		$query->bindValue(1, $subjenis_artikel);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_artikel_kategoriartikel($kategori_artikel){
		$query = $this->dbArtikel->prepare("SELECT * FROM `artikel` WHERE `kode_kategori` = ?");
		$query->bindValue(1, $kategori_artikel);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
}
?>