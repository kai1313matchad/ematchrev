<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_srchkaryawan extends CI_Model 
	{

		var $table = 'karyawan a';
		var $column_order = array(null,'a.nik','a.nama_karyawan','b.BRANCH_NAME','a.alamat_karyawan','a.nomor_ktp','a.nomor_hp');
		var $column_search = array('a.nik','a.nama_karyawan','b.BRANCH_NAME','a.alamat_karyawan','a.nomor_ktp','a.nomor_hp');
		var $order = array('a.id_karyawan' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		
		//update sistem cari cabang - Laporan Kas
		// private function _get_datatables_query()
		private function _get_datatables_query()
		{
			$this->db->from($this->table);
			$this->db->join('master_branch b','b.BRANCH_ID = a.id_branch','left');


			//update sistem cari cabang - Laporan Kas
			// $this->db->where($brc);



			$this->db->where('status','Aktif');			
			$i = 0;
			foreach ($this->column_search as $item)
			{
				if($_POST['search']['value'])
				{			
					if($i===0)
					{
						$this->db->group_start();
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i)
						$this->db->group_end();
				}
				$i++;
			}		
			if(isset($_POST['order']))
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}


		//update sistem cari cabang - Laporan Kas
		// public function get_datatables()
		public function get_datatables()
		{
           //update sistem cari cabang - Laporan Kas
			// $this->_get_datatables_query();
			$this->_get_datatables_query();





			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}



		//update sistem cari cabang - Laporan Kas
		// public function count_filtered()
		public function count_filtered()
		{
			//update sistem cari cabang - Laporan Kas
			//$this->_get_datatables_query();
			$this->_get_datatables_query();

			$query = $this->db->get();
			return $query->num_rows();
		}
		public function count_all()
		{
			$this->db->from($this->table);
			return $this->db->count_all_results();
		}
	}
?>