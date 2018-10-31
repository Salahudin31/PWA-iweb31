<?php
/**
 * 
 */
class Jenis
{
	private $dbArtikel;
	function __construct($database)
	{
		$this->dbArtikel=$database;
	}
	function count_jenis($kd_jenis){
		$query = $this->dbArtikel->prepare("SELECT COUNT(`kode_jenis`) FROM `jenis` = ?");
		$query->bindValue(1,$kd_jenis);
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
	function add_jenis($kd_jenis,$nm_jenis,$desk_jenis){
		$query = $this->dbArtikel->prepare("INSERT INTO `jenis` (`kode_jenis`,`nm_jenis`,`desk_jenis`) VALUES (?,?,?)");
		$query->bindValue(1,$kd_jenis);
		$query->bindValue(2,$nm_jenis);
		$query->bindValue(3,$desk_jenis);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_jenis($kd_jenis){
		$query = $this->dbArtikel->prepare("DELETE FROM `jenis` WHERE `kode_jenis` = ? ");
		$query->bindValue(1,$kd_jenis);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_jenis($kd_jenis,$nm_jenis,$desk_jenis){
		$query = $this->dbArtikel->prepare("UPDATE `jenis` SET `nm_jenis` = ?, `desk_jenis` = ? WHERE `kode_jenis` = ?");
		$query->bindValue(3,$kd_jenis);
		$query->bindValue(1,$nm_jenis);
		$query->bindValue(2,$desk_jenis);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_jenis_asc(){
		$query = $this->dbArtikel->prepare("SELECT * FROM `jenis` ORDER BY `nm_jenis` ASC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_jenis_kd($kd_jenis){
		$query = $this->dbArtikel->prepare("SELECT * FROM `jenis` WHERE `kode_jenis` = ? ");
		$query->bindValue(1, $kd_jenis);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>