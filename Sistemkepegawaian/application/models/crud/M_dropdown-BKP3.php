<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_dropdown extends CI_Model
	{
		//Dropdown Global
		public function getdrop_branch()
		{
			$this->db->where('branch_dtsts','1');
			$que = $this->db->get('master_branch');
			return $que->result();
		}

		public function getdrop_karyawan()
		{
			$this->db->where('status','Aktif');
			$que = $this->db->get('karyawan');
			return $que->result();
		}

		public function getdrop_coa()
		{
			$this->db->where('coa_dtsts','1');
			$que = $this->db->get('chart_of_account');
			return $que->result();
		}

		public function getdrop_person()
		{
			$this->db->where('person_dtsts','1');
			$que = $this->db->get('master_person');
			return $que->result();
		}
		//added by pak rudy s
		public function getdrop_karyawan_dept($id_karyawan)
		{
			// $this->db->query('select * from karyawan a');
			// $this->db->join('karyawan b','a.id_karyawan=b.id_karyawan');
			// $this->db->where_in('a.dept','select dept from karyawan where id_karyawan='.$id_karyawan);
			// $this->db->where('a.id_karyawan',$id_karyawan);
			// $this->db->where('b.dept','a.dept');
			// $this->db->join('karyawan b','a.id_karyawan=b.id_karyawan');
			// $this->db->query("select id_karyawan,nama_karyawan,dept from karyawan intersect select id_karyawan,nama_karyawan,dept from karyawan where status='Aktif' and id_karyawan=".$id_karyawan);
			$karyawan = $this->db->query('select * from karyawan where id_karyawan='.$id_karyawan);
			$hasil = $karyawan->row();
			$dept = $hasil->dept;
			$id_dept = explode(',', $dept);

			$syarat = '((a.status = "Aktif") and (';
			for ($x = 0; $x < count($id_dept); $x++) {
				$seperti = "$id_dept[$x]";
				$syarat = $syarat . '(a.dept like ("'.$seperti.'")) or ';
			}
			for ($x = 0; $x < count($id_dept); $x++) {
				$seperti = "$id_dept[$x],%";
				$seperti2 = "%,$id_dept[$x]";
				if ($x == count($id_dept)-1){
					$syarat = $syarat . '(a.dept like ("'.$seperti.'") or a.dept like ("'.$seperti2.'"))';
				}else{
					$syarat = $syarat . '(a.dept like ("'.$seperti.'") or a.dept like ("'.$seperti2.'")) or ';
				}
			}
			$syarat = $syarat .'))';
			$this->db->where($syarat);
			$que = $this->db->get('karyawan a');
			return $que->result();
		}

		public function getdrop_atasan($id_karyawan)
		{
			$this->db->select('subordinate.id_penilai id_karyawan,karyawan.nama_karyawan');
			$this->db->join('subordinate','subordinate.id_penilai=karyawan.id_karyawan');
			$this->db->where('subordinate.id_dinilai',$id_karyawan);
			$this->db->where('status','Aktif');
			$que = $this->db->get('karyawan');
			return $que->result();
		}
	}
?>