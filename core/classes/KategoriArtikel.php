<?php
/**
 * 
 */
class KategoriArtikel
{
	private $dbArtikel;
	function __construct($database)
	{
		$this->dbArtikel=$database;
	}
	function count_kategori($kd_kategori){
		$query = $this->dbArtikel->prepare("SELECT COUNT(`kode_kategori`) FROM `kategori` = ?");
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
	function add_kategori($kd_kategori,$nm_kategori,$desk_kategori){
		$query = $this->dbArtikel->prepare("INSERT INTO `kategori` (`kode_kategori`,`nm_kategori`,`desk_kategori`) VALUES (?,?,?)");
		$query->bindValue(1,$kd_kategori);
		$query->bindValue(2,$nm_kategori);
		$query->bindValue(3,$desk_kategori);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_kategori($kd_kategori){
		$query = $this->dbArtikel->prepare("DELETE FROM `kategori` WHERE `kode_kategori` = ? ");
		$query->bindValue(1,$kd_kategori);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_kategori($kd_kategori,$nm_kategori,$desk_kategori){
		$query = $this->dbArtikel->prepare("UPDATE `kategori` SET `nm_kategori` = ?, `desk_kategori` = ? WHERE `kode_kategori` = ?");
		$query->bindValue(3,$kd_kategori);
		$query->bindValue(1,$nm_kategori);
		$query->bindValue(2,$desk_kategori);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_kategori_asc(){
		$query = $this->dbArtikel->prepare("SELECT * FROM `kategori` ORDER BY `nm_kategori` ASC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_kA_kd($kategori_tp){
		$query = $this->dbArtikel->prepare("SELECT * FROM `kategori` WHERE `kategori_tp` = ? ");
		$query->bindValue(1, $kategori_tp);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_kA_kd_value($kd_kategori){
		$query = $this->dbArtikel->prepare("SELECT * FROM `kategori` WHERE `kode_kategori` = ? ");
		$query->bindValue(1, $kd_kategori);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_kA_tp($kd_kategori){
		$query = $this->dbArtikel->prepare("SELECT * FROM `kategori` WHERE `kode_kategori` = ? ");
		$query->bindValue(1, $kd_kategori);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

}
?>