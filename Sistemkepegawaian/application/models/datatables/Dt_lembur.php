<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_lembur extends CI_Model 
	{

		var $table = 'lembur_karyawan_hc a';
		// var $column_order = array(null,'a.id_karyawan','b.nama_karyawan','b.nik');
		// var $column_search = array('a.id_karyawan','b.nama_karyawan','b.nik');
		var $column_order = array(null,'a.id_karyawan','b.nama_karyawan','b.nik','tanggal','jam_mulai','jam_berakhir','keperluan','acc_atasan','acc_hc');
		var $column_search = array('a.id_karyawan','b.nama_karyawan','b.nik','tanggal','jam_mulai','jam_berakhir','keperluan','acc_atasan','acc_hc');

		var $order = array('a.id_lembur_karyawan' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query($id)
		{		
			$this->db->from($this->table);
			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan','left');
			$this->db->where('a.id_karyawan',$id);
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
				$order = $_POST['order'];
				foreach($order as $o){
	                $col = $o['column'];
	                $dir= $o['dir'];
	            }
	            if($dir != "asc" && $dir != "desc"){
		            $dir = "desc";
		        }
			        $valid_columns = array(
			            0=>'id_ijin_karyawan',
			            1=>'tgl_mulai',
			            2=>'tgl_berakhir',
			            3=>'jam_mulai',
			            4=>'jam_berakhir',
			            5=>'jenis_ijin',
			            6=>'acc_atasan',
			            7=>'acc_hc'
			        );
		        if(!isset($valid_columns[$col])){
		            $order = null;
		        }else{
		            $order = $valid_columns[$col];
		        }
		        if($order !=null){
		            $this->db->order_by($order, $dir);
		        }
		    }
			// if(isset($_POST['order']))
			// {
			// 	$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			// } 
			// else if(isset($this->order))
			// {
			// 	$order = $this->order;
			// 	$this->db->order_by(key($order), $order[key($order)]);
			// }
		}
		public function get_datatables($id)
		{
			$this->_get_datatables_query($id);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered($id)
		{
			$this->_get_datatables_query($id);
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