<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model extends CI_Model
{

	public function getLogin($email, $password){
		return $this->db->query("SELECT * FROM relawan WHERE email='$email' AND password='".md5($password)."'");
	}

	public function getLoginbnpb($email_bnpb, $pass_bnpb){
		return $this->db->query("SELECT * FROM bnpb WHERE email_bnpb='$email_bnpb' AND pass_bnpb='".($pass_bnpb)."'");
	}	
	
	public function getUsers($where =""){
		return $this->db->query("SELECT * FROM relawan".$where);
	}

	public function getProfil($where =""){
		return $this->db->query("SELECT * FROM relawan".$where);
	}


	public function getListBencana($where =""){
		return $this->db->query("SELECT * FROM bencana".$where);
	}

	public function getListKeg($where =""){
		return $this->db->query("SELECT * FROM kegiatan".$where);
	}
	
	public function simpan($tabel, $data){
		return $this->db->insert($tabel,$data);
	}

	public function tambahdata($table_name,$data){
		$tambahdt = $this->db->insert($table_name, $data);
		return $tambahdt;
	}

	public function hapusdata1($table_name, $id){
		$this->db->where('id',$id);
		$hapus=$this->db->delete($table_name);
		return $hapus;
	}
	public function hapusdata2($table_name, $id_bencana){
		$this->db->where('id_bencana',$id_bencana);
		$hapus=$this->db->delete($table_name);
		return $hapus;
	}
	public function hapusdata3($table_name, $id_k){
		$this->db->where('id_k',$id_k);
		$hapus=$this->db->delete($table_name);
		return $hapus;
	}

	public function update_data1($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function update_data2($where, $data, $table){  //buat bencana
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function update_data3($where, $data, $table){  //buat kegiatan
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function editData1($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function editData2($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function editData3($where, $table){
		return $this->db->get_where($table, $where);
	}
	
}

?>