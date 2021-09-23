<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Reminder_Dashboard extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('projectreminder/M_data','M_data');
			$this->load->library(array('session', 'form_validation', 'upload', 'user_agent', 'email'));
		}

		public function index()
		{
			$data['dept'] = $this->session->userdata('id_dept');
				$data['title']='Jatuh Tempo - Halaman Utama';
				$data['menu']='dash_reminder';
				$data['content']='projectreminder/menu/content/reminder_dashboard';
				$this->load->view('projectreminder/menu/layout/wrapper',$data);
		}
	}