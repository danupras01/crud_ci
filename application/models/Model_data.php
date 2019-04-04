<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_karyawan(){
		$sql = $this->db->query("SELECT * FROM tb_karyawan WHERE flag = 1");
		return $sql->result_array();
	}

	public function load_anggota_tni(){
		$sql = $this->db->query("SELECT * FROM tb_anggota_tni WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['nama']);
		$pangkat = $this->db->escape($post['pangkat']);
		$korps = $this->db->escape($post['korps']);
		$nrp = $this->db->escape($post['nrp']);
		$matra = $this->db->escape($post['matra']);
		$kesatuan = $this->db->escape($post['kesatuan']);
		$jabatan = $this->db->escape($post['jabatan']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("INSERT INTO tb_anggota_tni VALUES (NULL, $nama, $pangkat, $korps, $nrp, $matra, $kesatuan, $jabatan, $alamat, $email, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM tb_anggota_tni WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['nama']);
		$pangkat = $this->db->escape($post['pangkat']);
		$korps = $this->db->escape($post['korps']);
		$nrp = $this->db->escape($post['nrp']);
		$matra = $this->db->escape($post['matra']);
		$kesatuan = $this->db->escape($post['kesatuan']);
		$jabatan = $this->db->escape($post['jabatan']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("UPDATE tb_anggota_tni SET name = $nama, pangkat = $pangkat, korps = $korps, nrp = $nrp, matra = $matra, kesatuan = $kesatuan, jabatan = $jabatan, alamat = $alamat, email = $email WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE tb_anggota_tni SET flag = 0 WHERE id = ".intval($id));
	}	

}