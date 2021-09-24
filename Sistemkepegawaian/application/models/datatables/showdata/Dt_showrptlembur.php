<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_showrptlembur extends CI_Model 
	{
		var $table = 'lembur_karyawan_hc a';
		var $column_order = array(null,'b.nama_karyawan','a.tgl_mulai','a.tgl_berakhir','a.keperluan');
		var $column_search = array('b.nama_karyawan','a.tgl_mulai','a.tgl_berakhir','a.keperluan');
		var $order = array('a.id_karyawan' => 'asc');
		public function __construct()
		{
			parent::__construct();		
		}


		//update sistem tampil data table - Laporan Approval (Marketing)
		// private function _get_datatables_query()
		private function _get_datatables_query()	
		{	
			if ($this->input->post('id_karyawan')) 
			{
				$this->db->like('a.id_karyawan', $this->input->post('id_karyawan') );
			}
			if ($this->input->post('branch')) 
			{
				$this->db->like('b.id_branch', $this->input->post('branch') );
			}
			if ($this->input->post('tgl_start') != null AND $this->input->post('tgl_end') != null ) 
			{
				$this->db->where('a.tanggal >=', $this->input->post('tgl_start'));
        		$this->db->where('a.tanggal <=', $this->input->post('tgl_end'));  
			}
			$this->db->select('b.nama_karyawan,a.tanggal,a.keperluan,c.nama_karyawan as nama_atasan,a.acc_atasan,a.acc_hc');
			$this->db->from($this->table);


			//update sistem tampil data table - Laporan Approval (Marketing)
			// $this->db->where('a.branch_id',$brc);



			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan');
			$this->db->join('karyawan c','c.id_karyawan = a.id_atasan');

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


		//update sistem tampil data table - Laporan Approval (Marketing)
		// public function get_datatables()
		public function get_datatables()
		{


			//update sistem tampil data table - Laporan Approval (Marketing)
			// $this->_get_datatables_query();
			$this->_get_datatables_query();



			
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}


		//update sistem tampil data table - Laporan Approval (Marketing)
		// public function count_filtered()
		public function count_filtered()	
		{


			//update sistem tampil data table - Laporan Approval (Marketing)
			// $this->_get_datatables_query();
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