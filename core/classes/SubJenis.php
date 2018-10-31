<?php
/**
 * 
 */
class SubJenis
{
	private $dbArtikel;
	function __construct($database)
	{
		$this->dbArtikel=$database;
	}
	function count_subjenis($kd_subjenis){
		$query = $this->dbArtikel->prepare("SELECT COUNT(`kode_subjenis`) FROM `sub_jenis` = ?");
		$query->bindValue(1,$kd_subjenis);
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
	function add_subjenis($kd_subjenis,$nm_subjenis,$desk_subjenis){
		$query = $this->dbArtikel->prepare("INSERT INTO `sub_jenis` (`kode_subjenis`,`nm_subjenis`,`desk_subjenis`) VALUES (?,?,?)");
		$query->bindValue(1,$kd_subjenis);
		$query->bindValue(2,$nm_subjenis);
		$query->bindValue(3,$desk_subjenis);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function delete_subjenis($kd_subjenis){
		$query = $this->dbArtikel->prepare("DELETE FROM `sub_jenis` WHERE `kode_subjenis` = ? ");
		$query->bindValue(1,$kd_subjenis);
		try {
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function update_subjenis($kd_subjenis,$nm_subjenis,$desk_subjenis){
		$query = $this->dbArtikel->prepare("UPDATE `sub_jenis` SET `nm_subjenis` = ?, `desk_subjenis` = ? WHERE `kode_subjenis` = ?");
		$query->bindValue(3,$kd_subjenis);
		$query->bindValue(1,$nm_subjenis);
		$query->bindValue(2,$desk_subjenis);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	function select_subjenis_asc(){
		$query = $this->dbArtikel->prepare("SELECT * FROM `sub_jenis` ORDER BY `nm_subjenis` ASC ");
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	function select_subjenis_kd($kd_subjenis){
		$query = $this->dbArtikel->prepare("SELECT * FROM `sub_jenis` WHERE `kode_subjenis` = ? ");
		$query->bindValue(1, $kd_subjenis);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>