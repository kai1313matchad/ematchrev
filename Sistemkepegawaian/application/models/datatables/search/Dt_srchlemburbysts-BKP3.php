<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dt_srchlemburbysts extends CI_Model 
	{
		var $table = 'lembur_karyawan_hc a';
		// var $column_order = array(null,'b.nik','b.nama_karyawan');
		// var $column_search = array('b.nik','b.nama_karyawan');
		var $column_order = array(null,'b.nik','b.nama_karyawan','tgl_mulai','tgl_berakhir','keperluan','jam_mulai','jam_berakhir');
		var $column_search = array('b.nik','b.nama_karyawan','tgl_mulai','tgl_berakhir','keperluan','jam_mulai','jam_berakhir');

		var $order = array('a.id_karyawan' => 'desc');
		public function __construct()
		{
			parent::__construct();		
		}
		private function _get_datatables_query($id,$brc)
		{
			$this->db->select('a.id_lembur_karyawan,b.nik,b.nama_karyawan as nama_karyawan,a.tanggal,a.jam_mulai,a.jam_berakhir,a.acc_atasan,a.acc_hc, c.nama_karyawan as atasan');
			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan','left');
			$this->db->join('karyawan c','c.id_karyawan = a.id_atasan','left');
			// $this->db->where('lembur_sts',$id);

			// $this->db->where('id_atasan',$this->session->userdata('kar_id'));

			if ($this->session->userdata('usg_id')=="1")
			{
				$this->db->where('a.id_karyawan != ',$this->session->userdata('kar_id'));
			}else{
				$this->db->where('id_atasan',$this->session->userdata('kar_id'));
			}
			if ($this->session->userdata('usg_id')=="2")
			{
				$this->db->where('(acc_atasan is NULL) or (acc_atasan <>"Ya")');
				$this->db->where('acc_hc !=',"Ya");
				$this->db->where('a.id_karyawan != ',$this->session->userdata('kar_id'));
			}
			if ($this->session->userdata('usg_id')=="4"){
				$this->db->where('acc_atasan !=',"Ya");
				$this->db->where('acc_hc !=',"Ya");
				$this->db->where('a.id_karyawan != ',$this->session->userdata('kar_id'));
			}
		
			$this->db->from($this->table);
			$this->db->order_by('a.id_karyawan','desc');



			// $this->db->where($brc);
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
		public function get_datatables($id,$brc)
		{
			$this->_get_datatables_query($id,$brc);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
			$query = $this->db->get();
			return $query->result();
		}
		public function count_filtered($id,$brc)
		{
			$this->_get_datatables_query($id,$brc);
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