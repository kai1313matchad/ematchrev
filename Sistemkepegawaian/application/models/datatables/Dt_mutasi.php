<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_mutasi extends CI_Model 
	{

		var $table = 'mutasi_jabatan a';
		var $column_order = array(null,'dept','pangkat_sekarang','jabatan_sekarang','dept_mutasi','pangkat_mutasi','jabatan_mutasi');
		var $column_search = array('dept','pangkat_sekarang','jabatan_sekarang','dept_mutasi','pangkat_mutasi','jabatan_mutasi');
		var $order = array('id_mutasi_jabatan' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query()
		{		
			$this->db->select('a.id_mutasi_jabatan,b.nama_karyawan,a.tgl_mutasi,a.perusahaan_sekarang,a.perusahaan_mutasi,a.dept,a.pangkat_sekarang,a.jabatan_sekarang,a.dept_mutasi,a.pangkat_mutasi,a.jabatan_mutasi');
			$this->db->from($this->table);
			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan');
			// $this->db->where('a.id_karyawan',$id);
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
		public function get_datatables()
		{
			$this->_get_datatables_query();
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered()
		{
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