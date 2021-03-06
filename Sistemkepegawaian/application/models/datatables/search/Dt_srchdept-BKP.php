<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_srchdept extends CI_Model 
	{

		var $table = 'master_dept';
		var $column_order = array(null,'dept_code','dept_name','dept_info');
		var $column_search = array('dept_code','dept_name','dept_info');
		var $order = array('dept_id' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query($brc)
		{
			$this->db->from($this->table);

			$this->db->where($brc);

			$this->db->where('dept_dtsts','1');			
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
		public function get_datatables($brc)
		{
			$this->_get_datatables_query($brc);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered($brc)
		{
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