<?php
Class users extends CI_Controller{
	function index(){
		
		// $data['list_karyawan'] = $this->model_data->load_karyawan();

		$this->load->model("model_users");
		$data['list_users'] = $this->model_users->get_users();
		$this->load->view("data_users",$data);
	
	}

	function add(){
		// die ("ini tampilan fungsi add sebelum dilempar ke vie add");

		$this->load->model("model_users");
		$data = array();
		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_users->simpan($_POST);
			redirect("users");
		}
		$this->load->view("form_users",$data);
	}

	public function edit($id){
		$this->load->model("model_users");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_users->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_users->update($_POST, $id);
			redirect("users");
		}

		$this->load->view("form_users",$data);
	}


	public function delete($id){
		$this->load->model("model_users");
		$this->model_users->hapus($id);
		redirect("users");
	}

}