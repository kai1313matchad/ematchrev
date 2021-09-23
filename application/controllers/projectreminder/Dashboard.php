<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dashboard extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('projectreminder/M_crud','crud');
		}

		public function index()
		{
			$data['title']='Project Reminder - Halaman Utama';			
			$data['menu']='dashboard';			
			$data['content']='projectreminder/menu/content/dashboard';
			$this->load->view('projectreminder/menu/layout/wrapper',$data);
		}

		public function resources()
		{
			$event = $this->db->get('reminder')->result();
			$data_events = array();
			foreach($event as $dt)
			{
				$date = date_format(date_create($dt->tanggal_batas),"d-M-Y");
			    $dept = array();
			    if ($dt->dept != "") {
				   $que = $this->db->get_where('dept',array('id_dept'=>$dt->dept));
				   $res = $que->row();
				   $dept[] = $res->nama_dept;
				   $dept_terkait = implode(', ', $dept);
				   $que1 = $this->db->get_where('jenis_reminder',array('id'=>$dt->jenis_reminder));
				   $res1 = $que1->row();
				   $jenis = $res1->nama_jenis;
				   $data_events[] = array(
									"id" => $dt->id,
									"title" => $dt->nama_reminder,
									"start" => $dt->tanggal_batas,
									"info"  => $dt->info_reminder,
									"tanggal" => $date,
									"dept" => $dept,
									"jenis" => $jenis
									);
				}
			}
	        echo json_encode(array("events"=>$data_events));
		}
	}
?>