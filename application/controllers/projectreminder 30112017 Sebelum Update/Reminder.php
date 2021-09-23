<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Reminder extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('projectreminder/M_data','M_data');
			$this->load->library(array('session', 'form_validation', 'upload', 'user_agent', 'email'));
		}

		public function index()
		{
			$isiedept = $this->session->userdata('id_dept');
			$marketing = '5';
			$sitac = '9';
			$pat = '3';

			$pos1 = strpos($isiedept, $marketing);
			$pos2 = strpos($isiedept, $sitac);
			$pos3 = strpos($isiedept, $pat);

			if ($pos1 === false AND $pos2 === false AND $pos3 === false) {

				$this->session->set_flashdata('message_name', 'Mohon maaf, Anda tidak dapat mengakses halaman Project Reminder');
		        redirect(base_url() . 'Reminder', 'refresh');

			} else {

				$data['dept'] = $this->session->userdata('id_dept');
				$data['title']='Jatuh Tempo - Halaman Utama';
				$data['menu']='dash_reminder';
				$data['content']='projectreminder/menu/content/reminder_dashboard';
				$this->load->view('projectreminder/menu/layout/wrapper',$data);

			}

			
        	
		}

		public function create()
		{
			$data['title']='Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='projectreminder/menu/content/reminder_create';
			$data['jenis'] = $this->M_data->tampil_jenis_reminder()->result();
			$data['dept'] = $this->M_data->tampil_dept()->result();
			$this->load->view('projectreminder/menu/layout/wrapper',$data);
		}

		public function create_jenis()
		{
			$data['title']='Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='projectreminder/menu/content/jenis_create';
			$this->load->view('projectreminder/menu/layout/wrapper',$data);
		}

		 public function cetak()
		{
			$data['title']='Reminder Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='projectreminder/menu/content/reminder_cetak';
			$table='schedule';
			$data['dept'] = $this->M_data->tampil_dept()->result();
			$data['reminder'] = $this->M_data->tampil_data_reminder()->result();
			$this->load->view('projectreminder/menu/layout/wrapper',$data);
		}

		public function cetak_aksi($id)
		{
		   // $id=$this->input->post("id");
			$data['isinya']=$id;
		   $data['title']='Reminder Jatuh Tempo - Halaman Utama';
		   $data['menu']='dash_reminder';
		   $data['content']='projectreminder/menu/content/cetak_reminder';
		   $data['reminder']= $this->M_data->tampil_data2_reminder($id)->result();
           $this->load->view('projectreminder/menu/layout/wrapper',$data);
		}

		public function cetak_tertentu()
		{
		   $tgl1=$this->input->post("tanggal");
		   $tgl2=$this->input->post("tanggal2");
		   $dept=$this->input->post("dept");
		   $data['title']='Reminder Jatuh Tempo - Halaman Utama';
		   $data['menu']='dash_reminder';
		   $data['content']='projectreminder/menu/content/cetak_reminder_tanggal';
		   if ($dept==0){
		      $data['reminder']= $this->M_data->tampil_data3_reminder($tgl1,$tgl2)->result();
		   }else{
		      $data['reminder']= $this->M_data->tampil_data4_reminder($tgl1,$tgl2,$dept)->result();
		   }
           $this->load->view('projectreminder/menu/layout/wrapper',$data);
		}
	}
?>