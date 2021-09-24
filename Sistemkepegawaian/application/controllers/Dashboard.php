<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dashboard extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('crud/M_crud','crud');
		}

		public function index()
		{
			// $this->simple_login->ematchlog();
			$data['title']='HC - Halaman Utama';			
			$data['menu']='visi_misi';			
			// $data['content']='menu/content/dashboard';
			$data['content']='menu/content/visi_misi';
			$this->load->view('menu/layout/wrapper',$data);
		}

		public function budaya()
		{
			// $this->simple_login->ematchlog();
			$data['title']='Budaya Kerja';			
			$data['menu']='budaya_kerja';			
			// $data['content']='menu/content/dashboard';
			$data['content']='menu/content/budaya_kerja';
			$this->load->view('menu/layout/wrapper',$data);
		}

		public function resources()
		{
			$event = $this->db->get('schedule')->result();
			$data_events = array();
			foreach($event as $dt)
			{
				$date = date_format(date_create($dt->SCH_DATE),"d-M-Y");
				$time = date_format(date_create($dt->SCH_TIME),"H:i");
				$sch = $this->crud->get_by_idres('dept_schedule',array('sch_id'=>$dt->SCH_ID));
				$dept = array();
				foreach($sch as $sc)
				{
					$que = $this->db->get_where('dept',array('id_d'=>$sc->DEPT_ID));
					$res = $que->row();
					$dept[] = $res->nama_dept;
				}
				$mem = $this->crud->get_by_idres('member_schedule',array('sch_id'=>$dt->SCH_ID));
				$memb = array();
				foreach($mem as $me)
				{
					$que2 = $this->db->get_where('karyawan',array('id_karyawan'=>$me->KRY_ID));
					$res2 = $que2->row();
					$memb[] = $res2->nama_karyawan;
				}
				$dept_terkait = implode(', ', $dept);
				$anggota = implode(', ', $memb);
				$data_events[] = array(
								"id" => $dt->SCH_ID,
								"title" => $dt->SCH_TITLE.' - '.$dt->SCH_INFO,
								"start" => $dt->SCH_DATE.'T'.$dt->SCH_TIME,
								"lokasi" => $dt->SCH_LOC,
								"tanggal" => $date,
								"jam" => $time,
								"dept" => $dept_terkait,
								"anggota" => $anggota
				);
			}
	        echo json_encode(array("events"=>$data_events));
		}

		public function get_menulist()
		{
			$getmst = $this->db->get_where('master_menu',array('menu_sts'=>0));
			$data['mst'] = $getmst->result();
			$gettrx = $this->db->get_where('master_menu',array('menu_sts'=>1));
			$data['trx'] = $gettrx->result();
			echo json_encode($data);
		}

		public function get_useraccess($id)
		{
			$get = $this->db->get_where('group_user',array('user_id'=>$id));
			$data = $get->result();
			echo json_encode($data);
		}

		public function get_user()
		{
			// $get = $this->db->from('master_user')->where('user_dtsts','1')->order_by('user_name')->get();
			$get = $this->db->from('user_hc a')->where('a.usr_dtsts','1')->join('karyawan b','a.kar_id=b.id_karyawan')->order_by('b.username')->get();
			$data = $get->result();
			echo json_encode($data);
		}

		public function add_useraccess()
		{
			$user = $this->input->post('user_list');
			$data['arr'] = $this->input->post('trx');
			$data['arr2'] = $this->input->post('mstr');
			$del_acc = $this->crud->delete_by_id('group_user',array('user_id'=>$user));
			if(sizeof($data['arr'])>0)
			{
				foreach($data['arr'] as $trx)
				{
					$dt_trx = array(
							'user_id' => $user,
							'menu_code' => $trx
						);
					$ins_trx = $this->crud->save('group_user',$dt_trx);
				}
			}
			if(sizeof($data['arr2'])>0)
			{
				foreach($data['arr2'] as $mst)
				{
					$dt_mst = array(
							'user_id' => $user,
							'menu_code' => $mst
						);
					$ins_mst = $this->crud->save('group_user',$dt_mst);
				}
			}
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function pass_change()
		{
			$id = $this->input->post('user_id');
			$oldpass = md5($this->input->post('old_pass'));
			$newpass = md5($this->input->post('new_pass'));
			$data['error_string'] = array();
	        $data['inputerror'] = array();
			//Cek Password Lama
			$get = $this->db->get_where('karyawan',array('id_karyawan'=>$id));
			if($oldpass != $get->row()->password)
			{
				$data['inputerror'][] = 'old_pass';
				$data['error_string'][] = 'Password Lama Salah';
				$data['status'] = FALSE;
			}
			else
			{
				$dtup = array('user_password'=>$newpass);
				$update = $this->crud->update('master_user',$dtup,array('user_id' =>$id));
				$data['status'] = TRUE;				
			}
			echo json_encode($data);
		}
	}
?>