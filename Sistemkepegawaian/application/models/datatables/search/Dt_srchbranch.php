<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_srchbranch extends CI_Model 
	{

		var $table = 'master_branch';
		var $column_order = array(null,'branch_code','branch_name','branch_address');
		var $column_search = array('branch_code','branch_name','branch_address');
		var $order = array('branch_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		
		//update sistem cari cabang - Laporan Kas
		// private function _get_datatables_query()
		private function _get_datatables_query($brc)
		{
			$this->db->from($this->table);



			//update sistem cari cabang - Laporan Kas
			// $this->db->where($brc);



			$this->db->where('branch_dtsts','1');			
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
		public function get_datatables($brc)
		{
           //update sistem cari cabang - Laporan Kas
			// $this->_get_datatables_query();
			$this->_get_datatables_query($brc);





			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}



		//update sistem cari cabang - Laporan Kas
		// public function count_filtered()
		public function count_filtered($brc)
		{
			//update sistem cari cabang - Laporan Kas
			//$this->_get_datatables_query();
			$this->_get_datatables_query($brc);





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