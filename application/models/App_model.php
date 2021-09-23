<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model {

	
	public function getLogin()
	{
		$username = $this->session->userdata('username'); //diambil dari session yg di register di m_login
		$level = $this->session->userdata('level'); // saya mau menanyakan yg ini. ini kan di ambil dari session yg di register. tapi kan level ini gak ada di tabel admin..?? coba buka databasenya? soalnya saya hapus pun masih berfungsi, hehehe. kita lihat m_login // kalo ada script session->userdata('xxx') berarti itu kita abmil dari session yg di register ... session level juga di ambil dari m_login
		if(empty($username) && empty($level)) //kalo 2 session ini kosong akan di redirect ke login
		{
			$this->session->sess_destroy(); // sess destroy untuk menghapus session yag ada , apabila ada pengguna tidak login tidak akan bisa masuk ke sistem contoh  oh... iya oke..  intinya buat squrity..?
			redirect('login')
		;}
	}

	function bollPass() {
		$dep = $this->deptPass();
		$lev = $this->getPass();
		if ($lev || $dep) {
			return true;
		} else {
			return false;
		}
	}

	public function getPass() {
		$level = $this->session->userdata('level');
		
		if ($level == 2 || $level == 12 || $level == 11 || $level == 10) {
			return false;
		} else {
			return true;
		}
	}

	function deptPass() {
		$dept = (string) $this->session->userdata('id_dept');
		$arr = explode(',', $dept);
		if (in_array('b', $arr)) {
			return true;
		} else {
			return false;
		}	
		// $test = strpos($dept, 'b');
		// if($test === false) {
		// 	//echo 'false';
		// 	return false;
		// } else {
		// 	//echo 'true';
		// 	return true;
		// }
	}

	public function getAccess() {
		$level = $this->session->userdata('level');
		if ($level == 1) {
			return false;
		} else {
			return true;
		}
	}	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
