<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Searchdata extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('crud/M_crud','crud');
			$this->load->model('datatables/search/Dt_srchdept','s_dept');
			$this->load->model('datatables/search/Dt_srchkrybysts','s_krybysts');
			$this->load->model('datatables/search/Dt_srchcutibysts','s_cutibysts');
			$this->load->model('datatables/search/Dt_srchijinbysts','s_ijinbysts');
			$this->load->model('datatables/search/Dt_srchlemburbysts','s_lemburbysts');
			$this->load->model('datatables/search/Dt_srchpinjamanbysts','s_pinjamanbysts');
			$this->load->model('datatables/search/Dt_srchbranch','s_branch');
			$this->load->model('datatables/search/Dt_srchkaryawan','s_karyawan');
		}

		public function srch_krybysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.id_branch = '.$br;
			$list = $this->s_krybysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryedit('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<textarea class="form-control" name="note_'.$dat->id_karyawan.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryopen('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_krychk('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryapr('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_krybysts->count_all(),
							"recordsFiltered" => $this->s_krybysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_krybysts_by_id()
		{
			$id = $this->input->post('sts');
			$id_kry = $this->input->post('id_kry');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.id_branch = '.$br;
			$list = $this->s_krybysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryedit('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						if  ($dat->id_karyawan == $id_kry){
							$data[] = $row;
						}	
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<textarea class="form-control" name="note_'.$dat->id_karyawan.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryopen('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

						if  ($dat->id_karyawan == $id_kry){
							$data[] = $row;
						}
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_krychk('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						if  ($dat->id_karyawan == $id_kry){
							$data[] = $row;
						}
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->alamat_karyawan;
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;
						$row[] = $dat->hiskry_info;
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryapr('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						if  ($dat->id_karyawan == $id_kry){
							$data[] = $row;
						}
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_krybysts->count_all(),
							"recordsFiltered" => $this->s_krybysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_krygb($id)
		{
			$data = $this->crud->get_by_id('karyawan',array('id_karyawan' => $id));
			echo json_encode($data);
		}

		public function pick_tabungangb($id)
		{
			$this->db->select('sum(tabungan) tabungan,sum(iuran) iuran,max(tgl_setoran) tgl_setoran');
			$this->db->from('tabungan_koperasi a'); 
			$this->db->where('a.id_karyawan',$id);
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function pick_sisa_pinjamangb($id)
		{
			$this->db->select('sum(b.jumlah_angsuran) angsuran,a.total_pinjaman,a.jangka_angsuran,min(b.sisa_angsuran) sisa_angsuran,max(tgl_pembayaran) tgl_pembayaran,max(b.bunga) bunga,a.status_pinjaman');
			$this->db->from('pinjaman_koperasi a'); 
			$this->db->join('pembayaran_koperasi b','a.id_pinjaman=b.id_pinjaman','left');
			$this->db->where('a.id_karyawan',$id);
			$this->db->where('a.status_pinjaman','Belum Lunas');
			$this->db->where('a.acc','Ya');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		//Search Master Departemen
		public function srch_dept()
		{

			// $br = $this->input->post('user_branch');
			// $brc = 'branch_id = '.$br;

			// $list = $this->s_dept->get_datatables($brc);
			$list = $this->s_dept->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->DEPT_CODE;
				$row[] = $dat->DEPT_NAME;				
				$row[] = $dat->DEPT_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_dept('."'".$dat->DEPT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_dept->count_all(),
							"recordsFiltered" => $this->s_dept->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_dept_mutasi()
		{

			// $br = $this->input->post('user_branch');
			// $brc = 'branch_id = '.$br;

			// $list = $this->s_dept->get_datatables($brc);
			$list = $this->s_dept->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->DEPT_CODE;
				$row[] = $dat->DEPT_NAME;				
				$row[] = $dat->DEPT_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_dept_mutasi('."'".$dat->DEPT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_dept->count_all(),
							"recordsFiltered" => $this->s_dept->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_cuti()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_cutibysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutiedit('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;
						// $row[] = '<textarea class="form-control" name="note_'.$dat->id_cuti_karyawan.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutiopen('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutiopen('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutichk('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutiapr('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cutibysts->count_all(),
							"recordsFiltered" => $this->s_cutibysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_ijin()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_ijinbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_ijinedit('."'".$dat->id_ijin_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;
						// $row[] = '<textarea class="form-control" name="note_'.$dat->id_cuti_karyawan.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutiopen('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_ijinopen('."'".$dat->id_ijin_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_ijinchk('."'".$dat->id_ijin_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tgl_mulai;
						$row[] = $dat->tgl_berakhir;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_ijinapr('."'".$dat->id_ijin_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_ijinbysts->count_all(),
							"recordsFiltered" => $this->s_ijinbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_lembur()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_lemburbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tanggal;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_lemburedit('."'".$dat->id_lembur_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tanggal;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;
						// $row[] = '<textarea class="form-control" name="note_'.$dat->id_cuti_karyawan.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cutiopen('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_lemburopen('."'".$dat->id_lembur_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tanggal;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_lemburchk('."'".$dat->id_lembur_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->atasan;
						$row[] = $dat->tanggal;
						$row[] = $dat->jam_mulai;
						$row[] = $dat->jam_berakhir;
						$row[] = $dat->acc_atasan;
						$row[] = $dat->acc_hc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_lemburapr('."'".$dat->id_lembur_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_lemburbysts->count_all(),
							"recordsFiltered" => $this->s_lemburbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_pinjaman()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_pinjamanbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->tgl_pinjaman;
						$row[] = $dat->total_pinjaman;
						$row[] = $dat->jangka_angsuran;
						$row[] = $dat->jumlah_angsuran;
						$row[] = $dat->acc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pinjamanedit('."'".$dat->id_pinjaman."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->tgl_pinjaman;
						$row[] = $dat->total_pinjaman;
						$row[] = $dat->jangka_angsuran;
						$row[] = $dat->jumlah_angsuran;
						$row[] = $dat->acc;
				
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pinjamanopen('."'".$dat->id_pinjaman."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->tgl_pinjaman;
						$row[] = $dat->total_pinjaman;
						$row[] = $dat->jangka_angsuran;
						$row[] = $dat->jumlah_angsuran;
						$row[] = $dat->acc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pinjamanchk('."'".$dat->id_pinjaman."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->nik;
						$row[] = $dat->nama_karyawan;
						$row[] = $dat->tgl_pinjaman;
						$row[] = $dat->total_pinjaman;
						$row[] = $dat->jangka_angsuran;
						$row[] = $dat->jumlah_angsuran;
						$row[] = $dat->acc;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pinjamanapr('."'".$dat->id_pinjaman."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_pinjamanbysts->count_all(),
							"recordsFiltered" => $this->s_pinjamanbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_branch()
		{   


			//update sistem cari cabang - Laporan Kas
			$br = $this->input->post('brch');
			$brc = 'branch_id = '.$br;
			//$list = $this->s_branch->get_datatables();
			$list = $this->s_branch->get_datatables($brc);



			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->BRANCH_CODE;
				$row[] = $dat->BRANCH_NAME;				
				$row[] = $dat->BRANCH_ADDRESS.', '.$dat->BRANCH_CITY;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_branch('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_branch->count_all(),


							//update sistem cari cabang - Laporan Kas
							// "recordsFiltered" => $this->s_branch->count_filtered(),
							"recordsFiltered" => $this->s_branch->count_filtered($brc),



							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_karyawan()
		{   


			//update sistem cari cabang - Laporan Kas
			// $br = $this->input->post('brch');
			// $brc = 'branch_id = '.$br;
			//$list = $this->s_branch->get_datatables();
			$list = $this->s_karyawan->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->nik;
				$row[] = $dat->nama_karyawan;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->alamat_karyawan;
				$row[] = $dat->nomor_ktp;
				$row[] = $dat->nomor_hp;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_karyawan('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_karyawan->count_all(),
							"recordsFiltered" => $this->s_karyawan->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_cutigb($id)
		{
			$data = $this->crud->get_by_id2('cuti_karyawan_hc a','karyawan b',array('a.id_cuti_karyawan'=>$id),'a.id_karyawan = b.id_karyawan');
			echo json_encode($data);
		}

		public function pick_ijingb($id)
		{
			$data = $this->crud->get_by_id2('ijin_karyawan_hc a','karyawan b',array('a.id_ijin_karyawan'=>$id),'a.id_karyawan = b.id_karyawan');
			echo json_encode($data);
		}

		public function pick_lemburgb($id)
		{
			$data = $this->crud->get_by_id2('lembur_karyawan_hc a','karyawan b',array('a.id_lembur_karyawan'=>$id),'a.id_karyawan = b.id_karyawan');
			echo json_encode($data);
		}

		public function pick_pinjamangb($id)
		{
			$data = $this->crud->get_by_id2('pinjaman_koperasi a','karyawan b',array('a.id_pinjaman'=>$id),'a.id_karyawan = b.id_karyawan');
			echo json_encode($data);
		}

		public function pick_potongangb($id)
		{
			$this->db->from('potongan_salary a'); 
			$this->db->join('karyawan b','a.id_karyawan=b.id_karyawan','left');
			$this->db->where('b.id_karyawan',$id);
			$this->db->where('a.tgl_potongan in (select max(tgl_potongan) from potongan_salary where id_karyawan='.$id.')');
			$que = $this->db->get();
			$data = $que->result();
			echo json_encode($data);
		}

		public function pick_branch($id)
		{
			$data = $this->crud->get_by_id('master_branch',array('branch_id' => $id));
			echo json_encode($data);
		}

		public function pick_karyawan($id)
		{
			$data = $this->crud->get_by_id('karyawan',array('id_karyawan' => $id));
			echo json_encode($data);
		}
	}
?>