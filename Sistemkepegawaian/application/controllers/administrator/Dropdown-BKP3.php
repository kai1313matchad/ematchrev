<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Dropdown extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('crud/M_dropdown','dropdown');
		}

		//Dropdown cabang global
		public function drop_branch()
		{
			$data = $this->dropdown->getdrop_branch();
			echo json_encode($data);
		}

		public function drop_karyawan()
		{
			$data = $this->dropdown->getdrop_karyawan();
			echo json_encode($data);
		}

		//Dropdown COA global
		public function drop_coa()
		{
			$data = $this->dropdown->getdrop_coa();
			echo json_encode($data);
		}

		//Dropdown person global
		public function drop_person()
		{
			$data = $this->dropdown->getdrop_person();
			echo json_encode($data);
		}
		public function get_atasan(){
			$id = [];
			$id_kar = $this->session->userdata('kar_id');
			$get_k = $this->db->query("SELECT * FROM subordinate WHERE id_dinilai = '$id_kar'")->result_array();
			foreach ($get_k as $key => $value) {
				$id[] = $value['id_penilai'];
			}
			$data =[];
			foreach ($id as $key2 => $value2) {
				$data[] = $this->db->query("SELECT * FROM karyawan WHERE id_karyawan = '$value2' AND status = 'Aktif'")->result_array();
			}
			// $id = $this->session->userdata('kar_id');
			// $data = $this->db->query("SELECT * FROM karyawan WHERE id_karyawan='$id'")->result_array();
			echo json_encode($data);
		}
	}
?>