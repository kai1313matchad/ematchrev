<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_master extends CI_Model
	{
		public function getlog_kry($id)
		{
			$this->db->where('id_karyawan',$id);
	    	$this->db->where('hiskry_upcount = (select max(hiskry_upcount) from his_karyawan where id_karyawan = '.$id.')');
			$que = $this->db->get('his_karyawan');
			return $que->row();
		}
	}
?>