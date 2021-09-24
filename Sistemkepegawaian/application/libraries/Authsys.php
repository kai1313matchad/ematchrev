<?php if(! defined ('BASEPATH')) exit ('Akses langsung tidak diperbolehkan');
	
	class Authsys
	{
		//set super global
		var $CI = NULL;
		public function __construct()
		{
			$this->CI =& get_instance();
		}
		//fungsi login
		public function login($username, $password)
		{
			// $query = $this->CI->db->get_where('master_user', array('user_name'=>$username, 'user_password'=>$password));
			$query = $this->CI->db->get_where('karyawan', array('username'=>$username, 'password'=>$password,'status'=>'Aktif'));


			if($query->num_rows() > 0)
			{
				$que1 = $this->CI->db->get_where('karyawan', array('username'=>$username, 'password'=>$password));
				$usrdata = $que1->row();
				$que2 = $this->CI->db->get_where('master_branch', array('branch_id'=>$usrdata->BRANCH_ID));
				$brcdata = $que2->row();

				//Update sistem tambah nama person
				$que3 = $this->CI->db->get_where('user_hc', array('KAR_ID'=>$usrdata->id_karyawan,'USR_DTSTS'=>'1'));
				$persondata = $que3->row();


				$ses = array(
					'log_id'=>uniqid(rand()),
					'user_id'=>$usrdata->USER_ID,
					'user_name'=>$usrdata->USER_NAME,
					'user_branch'=>$usrdata->BRANCH_ID,
					// 'user_branchname'=>$brcdata->BRANCH_NAME,
					// 'branch_sts'=>$brcdata->BRANCH_STATUS,					
					'user_level'=>$persondata->USR_ACCESS

					//Update sistem tambah nama person
					// 'person_name'=>$persondata->PERSON_NAME
					// 'person_name'=>$persondata->PERSON_NAME,

					//Tambah fungsi TTD Approve
					// 'person_ttd'=>$persondata->PERSON_TTD,


				);
				$this->CI->session->set_userdata($ses);
				// redirect(base_url('Dashboard/tes'));
				$ret = '1';
			}
			else
			{
				$this->CI->session->set_flashdata('alert', '<div class="col-xs-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Username atau Password Salah!!!</strong></div></div>');
				$this->sessiondel();
				// redirect(base_url('Dashboard/login_'));
				$ret = '0';
			}
			return $ret;
		}

		//fungsi cek login
		public function logcheck_()
		{
			if(!isset($_SESSION['log_id']))
			{
				$this->CI->session->set_flashdata('alert', '<div class="col-xs-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Anda Belum Login!!!</strong></div></div>');
				$this->sessiondel();
				redirect(base_url('Dashboard/login_'));
			}
		}

		//fungsi cek menu master
		public function data_center_check_($id,$mn)
		{
			// $this->logcheck_();
			$this->CI->db->where('user_id = '.$id.' AND menu_code = "'.$mn.'"');
			$get = $this->CI->db->get('group_user');
			if($get->num_rows() < 1)
			{
				$this->CI->session->set_userdata('alert', '<div class="col-xs-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Anda Tidak Memiliki Akses Halaman Tersebut</strong></div></div>');
				redirect(base_url('Post'));
			}
		}

		//fungsi cek menu transaksi
		public function permohonan_check_($id,$mn)
		{
			// $this->logcheck_();
			$this->CI->db->where('user_id = '.$id.' AND menu_code = "'.$mn.'"');
			$get = $this->CI->db->get('group_user');
			if($get->num_rows() < 1)
			{
				$this->CI->session->set_userdata('alert', '<div class="col-xs-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Anda Tidak Memiliki Akses Halaman Tersebut</strong></div></div>');
				redirect(base_url('Post'));
			}
		}

		//fungsi cek hak akses admin
		public function admlog()
		{
			$this->logcheck_();
			if($this->CI->session->userdata('akses_admin') != '1')
			{
				$this->CI->session->set_flashdata('success', '<div class="col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Hak Akses Tidak Dimiliki!!!</strong></div></div>');				
				redirect(base_url('Dashboard'));
			}
		}

		//unset session
		public function sessiondel()
		{
			$ses = array(
					'log_id',
					'user_id',
					'user_name',
					'user_branch',
					'branch_sts',
					'user_level'
				);
			$this->CI->session->unset_userdata($ses);
		}

		//fungsi logout
		public function logout()
		{
			$this->CI->session->set_flashdata('alert', '<div class="col-xs-12"><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>Logout Berhasil</strong></div></div>');
			$this->sessiondel();
			redirect(base_url('Dashboard/login_'));
		}
	}

?>