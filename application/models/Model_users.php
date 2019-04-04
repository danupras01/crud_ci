<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_users extends CI_Model{

	// public function load_karyawan(){
	// 	$sql = $this->db->query("SELECT * FROM tb_karyawan WHERE flag = 1");
	// 	return $sql->result_array();
	// }

	// public function load_users(){
	// 	$sql = $this->db->query("SELECT * FROM tb_users WHERE flag = 1");
	// 	return $sql->result_array();
	// }
		public function get_users(){
		$sql = $this->db->query("SELECT * FROM users WHERE flag = 1");
		return $sql->result_array();
	}
	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$username = $this->db->escape($post['username']);
		$password = $this->db->escape($post['password']);
		// $korps = $this->db->escape($post['korps']);
		// $nrp = $this->db->escape($post['nrp']);
		// $matra = $this->db->escape($post['matra']);
		// $kesatuan = $this->db->escape($post['kesatuan']);
		// $jabatan = $this->db->escape($post['jabatan']);
		// $alamat = $this->db->escape($post['alamat']);
		// $email = $this->db->escape($post['email']);

		$sql = $this->db->query("INSERT INTO users VALUES (NULL, $username, $password, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM users WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	// public function get_default($id){
	// 	$sql = $this->db->query("SELECT * FROM tb_users WHERE id = ".intval($id));
	// 	if($sql->num_rows() > 0)
	// 		return $sql->row_array();
	// 	return false;
	// }

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$username = $this->db->escape($post['username']);
		$password = $this->db->escape($post['password']);
	/*	$korps = $this->db->escape($post['korps']);
		$nrp = $this->db->escape($post['nrp']);
		$matra = $this->db->escape($post['matra']);
		$kesatuan = $this->db->escape($post['kesatuan']);
		$jabatan = $this->db->escape($post['jabatan']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);*/

		$sql = $this->db->query("UPDATE users SET username = $username, password = $password WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
	$sql = $this->db->query("UPDATE users SET flag = 0 WHERE id = ".intval($id));
	}	
}
