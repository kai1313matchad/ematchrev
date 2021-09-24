<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Showdata extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('datatables/showdata/Dt_showrptcuti','showrptcuti');
			$this->load->model('datatables/showdata/Dt_showrptijin','showrptijin');
			$this->load->model('datatables/showdata/Dt_showrptlembur','showrptlembur');
			$this->load->model('datatables/showdata/Dt_showrptsp','showrptsp');
		}

		//Tampil Laporan Cuti
		public function showrpt_cuti()
		{
			$list = $this->showrptcuti->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_karyawan;
				$row[] = date_format(date_create($dat->tgl_mulai),"d-M-Y");
				$row[] = date_format(date_create($dat->tgl_berakhir),"d-M-Y");
				$row[] = $dat->keperluan;	
				$row[] = $dat->nama_atasan;			
				$row[] = $dat->acc_atasan;
				$row[] = $dat->acc_hc;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showrptcuti->count_all(),
							"recordsFiltered" => $this->showrptcuti->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Ijin
		public function showrpt_ijin()
		{
			$list = $this->showrptijin->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_karyawan;
				$row[] = date_format(date_create($dat->tgl_mulai),"d-M-Y");
				$row[] = date_format(date_create($dat->tgl_berakhir),"d-M-Y");
				$row[] = $dat->keperluan;	
				$row[] = $dat->nama_atasan;			
				$row[] = $dat->acc_atasan;
				$row[] = $dat->acc_hc;			
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showrptcuti->count_all(),
							"recordsFiltered" => $this->showrptcuti->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Tampil Laporan Lembur
		public function showrpt_lembur()
		{
			$list = $this->showrptlembur->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_karyawan;
				$row[] = date_format(date_create($dat->tanggal),"d-M-Y");
				$row[] = date_format(date_create($dat->tanggal),"d-M-Y");
				$row[] = $dat->keperluan;
				$row[] = $dat->nama_atasan;			
				$row[] = $dat->acc_atasan;
				$row[] = $dat->acc_hc;				
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showrptcuti->count_all(),
							"recordsFiltered" => $this->showrptcuti->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function showrpt_sp()
		{
			$list = $this->showrptsp->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nik;
				$row[] = $dat->nama_karyawan;
				$row[] = date_format(date_create($dat->tgl_sp),"d-M-Y");
				$row[] = $dat->nama_atasan;	
				$row[] = $dat->jenis_sp;			
				$row[] = $dat->keterangan;
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->showrptsp->count_all(),
							"recordsFiltered" => $this->showrptsp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

	}	
?>