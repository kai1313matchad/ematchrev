<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Permohonan extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			// $this->load->model('datatables/Dt_cuti','cuti');
			
			$this->load->model('crud/M_crud','crud');
			$this->load->model('crud/M_gen','gen');
			$this->load->model('datatables/Dt_cuti','cuti');
			$this->load->model('datatables/Dt_ijin','ijin');
			$this->load->model('datatables/Dt_lembur','lembur');
			$this->load->model('datatables/Dt_pinjaman','pinjaman');
			// $this->load->model('datatables/Dt_sitactype','master_styp');
		}

		public function cuti()
		{
			// $this->authsys->master_check_($_SESSION['user_id'],'USR');
// 			$this->authsys->permohonan_check_($this->session->userdata('user_id'),'Cuti');
			$data['title']='Sistem HC - Permohonan Cuti Karyawan';
			$data['menu']='permohonan';
			$data['menulist']='cuti';
			$data['isi']='menu/administrator/Permohonan/cuti_karyawan';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ijin()
		{
			// $this->authsys->master_check_($_SESSION['user_id'],'USR');
// 			$this->authsys->permohonan_check_($this->session->userdata('user_id'),'Ijin');
			$data['title']='Sistem HC - Permohonan Ijin Karyawan';
			$data['menu']='permohonan';
			$data['menulist']='ijin';
			$data['isi']='menu/administrator/Permohonan/ijin_karyawan';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function lembur()
		{
			// $this->authsys->master_check_($_SESSION['user_id'],'USR');
			$this->authsys->permohonan_check_($this->session->userdata('user_id'),'Lembur');
			$data['title']='Sistem HC - Permohonan Lembur Karyawan';
			$data['menu']='permohonan';
			$data['menulist']='lembur';
			$data['isi']='menu/administrator/Permohonan/lembur_karyawan';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function pinjaman()
		{
			// $this->authsys->master_check_($_SESSION['user_id'],'USR');
			$this->authsys->permohonan_check_($this->session->userdata('user_id'),'Pinjaman');
			$data['title']='Sistem HC - Permohonan Pinjaman Koperasi';
			$data['menu']='permohonan';
			$data['menulist']='pinjaman';
			$data['isi']='menu/administrator/Permohonan/pinjaman_koperasi';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		// public function report_master()
		// {
		// 	// $this->authsys->trx_check_($_SESSION['user_id'],'PMT');
		// 	$data['title']='Sistem HC';
		// 	$data['menu']='report_permohonan';
		// 	$data['menulist']='report_sitac';
		// 	$data['isi']='menu/administrator/Permohonan/dash_report';
		// 	$this->load->view('layout/administrator/wrapper',$data);
		// }

		public function report()
		{
			// $this->authsys->trx_check_($_SESSION['user_id'],'PMT');
			$this->authsys->permohonan_check_($this->session->userdata('user_id'),'LaporanPermohonan');
			$data['title']='Sistem HC';
			$data['menu']='permohonan';
			$data['menulist']='report_permohonan';
			$data['isi']='menu/administrator/Permohonan/dash_report';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function karyawan()
		{
			// $this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Sistem HC - Master Data Karyawan';
			$data['menu']='master';
			$data['menulist']='karyawan';
			$data['isi']='menu/administrator/master/data_karyawan';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function jabatan()
		{
			// $this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Sistem HC - Master Data Karyawan';
			$data['menu']='master';
			$data['menulist']='jabatan';
			$data['isi']='menu/administrator/master/mutasi_jabatan';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function report_permohonan()
		{
			// $this->authsys->permohonan_check_($this->session->userdata('user_id'),'LaporanPermohonan');
			$data['title']='Sistem HC - Report Permohonan Cuti, Ijin Dan Lembur';
			$data['menu']='permohonan';
			$data['menulist']='report_permohonan';
			$data['isi']='menu/administrator/Permohonan/report_permohonan';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function print_rptcuti()
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['branch'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['karyawan'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Sistem HC - Report Permohonan Cuti';
			$data['menu']='permohonan';
			$data['menulist']='report_cuti';
			$this->load->view('menu/administrator/Permohonan/print_rptcuti',$data);
		}

		public function print_rptijin()
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['branch'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['karyawan'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Sistem HC - Report Permohonan Ijin';
			$data['menu']='permohonan';
			$data['menulist']='report_ijin';
			$this->load->view('menu/administrator/Permohonan/print_rptijin',$data);
		}

		public function print_rptlembur()
		{
			$data['datestart'] = ($this->uri->segment(4) == 'null') ? '' : $this->uri->segment(4);
			$data['dateend'] = ($this->uri->segment(5) == 'null') ? '' : $this->uri->segment(5);
			$data['branch'] = ($this->uri->segment(6) == 'null') ? '' : $this->uri->segment(6);
			$data['karyawan'] = ($this->uri->segment(7) == 'null') ? '' : $this->uri->segment(7);
			$data['title']='Sistem HC - Report Permohonan Lembur';
			$data['menu']='permohonan';
			$data['menulist']='report_lembur';
			$this->load->view('menu/administrator/Permohonan/print_rptlembur',$data);
		}

		public function ajax_pick_dept($id)
		{
			$data = $this->crud->get_by_id('master_dept',array('DEPT_ID' => $id));
        	echo json_encode($data);
		}

		public function gen_nik($branch)
		{
			$gen = $this->gen->gen_numnik($branch);
			$data['id'] = $gen['insertId'];
			$data['nik'] = $gen['nik'];
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_simpankaryawan()
		{		
			$data = array(	  
			    'jenis_kelamin' => $this->input->post('jenis_kelamin'),              
                'id_branch' => $this->input->post('branch'),
                'nik' => $this->input->post('nik'),
                'nama_karyawan' => $this->input->post('nama_kry'),
                'nama_panggilan' =>$this->input->post('nama_panggilan'),
                'alamat_karyawan_ktp' => $this->input->post('alamat_ktp'),
                'kota_karyawan_ktp' =>$this->input->post('kota_ktp'),
                'alamat_karyawan' => $this->input->post('alamat_sekarang'),
                'kota_karyawan' =>$this->input->post('kota_sekarang'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'nomor_hp' => $this->input->post('nomor_hp'),
                'nomor_ktp' => $this->input->post('nomor_ktp'),
                'nomor_npwp' => $this->input->post('nomor_npwp'),
                'nomor_bpjs_kesehatan' => $this->input->post('bpjs_kesehatan'),
                'nomor_bpjs_ketenagakerjaan' => $this->input->post('bpjs_ketenagakerjaan'),
                'agama' => $this->input->post('agama'),
                'warga_negara' => $this->input->post('warga_negara'),
                'status_nikah' => $this->input->post('status_nikah'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'tgl_masuk' => $this->input->post('tgl_masuk')
            );
        	$update = $this->crud->update('karyawan',$data,array('id_karyawan' => $this->input->post('id_karyawan')));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_tambahkeluarga()
		{
			$data = array(	                
                'id_karyawan' => $this->input->post('id_karyawan'),
                'nama_keluarga' => $this->input->post('nama_keluarga'),
                'usia_keluarga' => $this->input->post('usia_keluarga'),
                'jenis_kelamin' =>$this->input->post('jenis_kelamin2'),
                'status_keluarga' => $this->input->post('status_keluarga')
            );
        	$update = $this->crud->save('riwayat_keluarga',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_del_keluarga($id)
	    {
	    	$this->crud->delete_by_id('riwayat_keluarga',array('id_riwayat_keluarga' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

		public function ajax_keluarga($id)
		{
			$list = $this->keluarga->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_keluarga;
				$row[] = $dat->usia_keluarga.' tahun';
				$row[] = $dat->jenis_kelamin;
				if ($dat->status_keluarga == "1"){
					$row[] = "Suami";
				}
				if ($dat->status_keluarga == "2"){
					$row[] = "Istri";
				}
				if ($dat->status_keluarga == "3"){
					$row[] = "Anak ke-1";
				}
				if ($dat->status_keluarga == "4"){
					$row[] = "Anak ke-2";
				}
				if ($dat->status_keluarga == "5"){
					$row[] = "Anak ke-3";
				}
				if ($dat->status_keluarga == "6"){
					$row[] = "Anak ke-4";
				}
				if ($dat->status_keluarga == "7"){
					$row[] = "Anak ke-5";
				}

				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_keluarga('."'".$dat->id_riwayat_keluarga."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->keluarga->count_all(),
							"recordsFiltered" => $this->keluarga->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_tambahpendidikan()
		{
			$data = array(	                
                'id_karyawan' => $this->input->post('id_karyawan'),
                'tingkat_pendidikan' => $this->input->post('pendidikan'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'jurusan' => $this->input->post('jurusan'),
                'tahun_masuk' =>$this->input->post('tahun_masuk'),
                'tahun_selesai' => $this->input->post('tahun_selesai'),
                'status_kelulusan' => $this->input->post('status_kelulusan')
            );
        	$update = $this->crud->save('riwayat_pendidikan',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_del_pendidikan($id)
	    {
	    	$this->crud->delete_by_id('riwayat_pendidikan',array('id_riwayat_pendidikan' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

		public function ajax_pendidikan($id)
		{
			$list = $this->pendidikan->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->tingkat_pendidikan;
				$row[] = $dat->nama_sekolah;
				$row[] = $dat->jurusan;
				$row[] = $dat->tahun_masuk;
				$row[] = $dat->tahun_selesai;
				$row[] = $dat->status_kelulusan;

				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_pendidikan('."'".$dat->id_riwayat_pendidikan."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->pendidikan->count_all(),
							"recordsFiltered" => $this->pendidikan->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_tambahpekerjaan()
		{
			$data = array(	                
                'id_karyawan' => $this->input->post('id_karyawan'),
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'tahun_mulai' => $this->input->post('tahun_mulai'),
                'tahun_berakhir' => $this->input->post('tahun_berakhir'),
                'alasan_pindah' =>$this->input->post('alasan_pindah')
            );
        	$update = $this->crud->save('riwayat_pekerjaan',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_del_pekerjaan($id)
	    {
	    	$this->crud->delete_by_id('riwayat_pekerjaan',array('id_riwayat_pekerjaan' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

		public function ajax_pekerjaan($id)
		{
			$list = $this->pekerjaan->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_perusahaan;
				$row[] = $dat->tahun_mulai;
				$row[] = $dat->tahun_berakhir;
				$row[] = $dat->alasan_pindah;

				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_pekerjaan('."'".$dat->id_riwayat_pekerjaan."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->pekerjaan->count_all(),
							"recordsFiltered" => $this->pekerjaan->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_tambahjabatan()
		{
			$data = array(	                
                'id_karyawan' => $this->input->post('id_karyawan'),
                'id_dept' => $this->input->post('dept_id'),
                'pangkat' => $this->input->post('pangkat'),
                'jabatan' => $this->input->post('jabatan')
            );
        	$update = $this->crud->save('riwayat_jabatan',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_del_jabatan($id)
	    {
	    	$this->crud->delete_by_id('riwayat_jabatan',array('id_riwayat_jabatan' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

		public function ajax_jabatan($id)
		{
			$list = $this->jabatan->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->DEPT_NAME;
				$row[] = $dat->pangkat;
				$row[] = $dat->jabatan;

				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_jabatan('."'".$dat->id_riwayat_jabatan."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->pekerjaan->count_all(),
							"recordsFiltered" => $this->pekerjaan->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_tambahcuti()
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'id_atasan' => $this->input->post('atasan'),
			    'tgl_mulai' => $this->input->post('tgl_mulai'),
			    'tgl_berakhir' => $this->input->post('tgl_berakhir'),
			    'jumlah_cuti' => $this->input->post('jumlah_cuti'),
			    'jenis_cuti' => $this->input->post('jenis_cuti'),
			    'keperluan' => $this->input->post('keperluan'),
                'penyerahan' => $this->input->post('penyerahan_tugas'),
                'cuti_sts' => '2'
            );
        	$update = $this->crud->save('cuti_karyawan_hc',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_cuti_atasan($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = $data->email;
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Cuti Karyawan – Sistem Kepegawaian';
			    $mulai = date("d-M-Y", strtotime($this->input->post('tgl_mulai')));
			    $akhir = date("d-M-Y", strtotime($this->input->post('tgl_berakhir')));
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN CUTI KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$mulai.' sampai '.$akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Jumlah Cuti</b></td>
						<td>:'.$this->input->post('jumlah_cuti').' hari
						</td>
					</tr>
					<tr>
						<td><b>Jenis Cuti</b></td>
						<td>: '.$this->input->post('jenis_cuti').'
						</td>
					</tr>
					<tr>
						<td><b>Penyerahan Tugas</b></td>
						<td>: '.$this->input->post('penyerahan_tugas').'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Pembuat,</b></td>
					</tr>
					<br>
					<br>
					<br>
					<tr>
						<td><p style="text-decoration: underline;">'.$this->input->post('nama_kry').'</p></td>
					</tr>
					<tr>
						<td>'.$this->input->post('jabatan').'
						</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_cuti_hc($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = 'rudy_s@match-advertising.com';
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Cuti Karyawan – Sistem Kepegawaian';
			    $mulai = date("d-M-Y", strtotime($this->input->post('tgl_mulai')));
			    $akhir = date("d-M-Y", strtotime($this->input->post('tgl_berakhir')));
			    $url = base_url().'assets/img/ttd/Approve.jpg';
			    $content = '
			    <main>
				<tr>
					<h1><p align="center">PERMOHONAN CUTI KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$mulai.' sampai '.$akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Jumlah Cuti</b></td>
						<td>:'.$this->input->post('jumlah_cuti').' hari
						</td>
					</tr>
					<tr>
						<td><b>Jenis Cuti</b></td>
						<td>: '.$this->input->post('jenis_cuti').'
						</td>
					</tr>
					<tr>
						<td><b>Penyerahan Tugas</b></td>
						<td>: '.$this->input->post('penyerahan_tugas').'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Disetujui,</b></td>
					</tr>
					<tr>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
					</tr>
					<tr>
						<td><p style="text-decoration: underline;">'.$data->nama_karyawan.'</p></td>
					</tr>
					<tr>
						<td>'.$data->jabatannya.'
						</td>
					</tr>
				</table>
				</main>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_cuti_bod($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = 'rudy_s@match-advertising.com,efendi@match-advertising.com';
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Cuti Karyawan – Sistem Kepegawaian';
			    $mulai = date("d-M-Y", strtotime($this->input->post('tgl_mulai')));
			    $akhir = date("d-M-Y", strtotime($this->input->post('tgl_berakhir')));
			    $url = base_url().'assets/img/ttd/Approve.jpg';
			    $content = '
			    <main>
				<tr>
					<h1><p align="center">PERMOHONAN CUTI KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$mulai.' sampai '.$akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Jumlah Cuti</b></td>
						<td>:'.$this->input->post('jumlah_cuti').' hari
						</td>
					</tr>
					<tr>
						<td><b>Jenis Cuti</b></td>
						<td>: '.$this->input->post('jenis_cuti').'
						</td>
					</tr>
					<tr>
						<td><b>Penyerahan Tugas</b></td>
						<td>: '.$this->input->post('penyerahan_tugas').'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Disetujui,</b></td>
						<td></td>
						<td><b>Diketahui,</b></td>
					</tr>
					<tr>
						<td>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
						</td>
						<td></td>
						<td>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
						</td>
					</tr>
					<tr>
						<td><p style="text-decoration: underline;">'.$data->nama_karyawan.'</p></td>
						<td></td>
						<td><p style="text-decoration: underline;">'.$this->input->post('nama_kry').'</p></td>
					</tr>
					<tr>
						<td>'.$data->jabatannya.'
						</td>
						<td></td>
						<td>'.$this->input->post('jabatan').'</td>
					</tr>
				</table>
				</main>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_ijin_atasan($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = $data->email;
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Ijin Karyawan – Sistem Kepegawaian';
			    $tgl_mulai = date("d-M-Y", strtotime($this->input->post('tgl_mulai')));
			    $tgl_akhir = date("d-M-Y", strtotime($this->input->post('tgl_berakhir')));
			    $jam_mulai = $this->input->post('jam_mulai');
			    $jam_akhir = $this->input->post('jam_berakhir');
			    if ($this->input->post('kendaraan_dinas') == 'Ya')
			    {
			    	$jenis_kendaraan ='Kendaraan Dinas';
			    }else {
			    	$jenis_kendaraan ='Kendaraan Pribadi';
			    }
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN IJIN KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$tgl_mulai.' sampai '.$tgl_akhir.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<p align="center">Pukul : '.$jam_mulai.' sampai '.$jam_akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Jenis Ijin</b></td>
						<td>: '.$this->input->post('jenis_ijin').'
						</td>
					</tr>
					<tr>
						<td><b>Jenis Kendaraan</b></td>
						<td>: '.$jenis_kendaraan.'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Pembuat,</b></td>
					</tr>
					<br>
					<br>
					<br>
					<tr>
						<td><p style="text-decoration: underline;">'.$this->input->post('nama_kry').'</p></td>
					</tr>
					<tr>
						<td>'.$this->input->post('jabatan').'
						</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_ijin_hc($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = 'rudy_s@match-advertising.com';
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Ijin Karyawan – Sistem Kepegawaian';
			    $tgl_mulai = date("d-M-Y", strtotime($this->input->post('tgl_mulai')));
			    $tgl_akhir = date("d-M-Y", strtotime($this->input->post('tgl_berakhir')));
			    $jam_mulai = $this->input->post('jam_mulai');
			    $jam_akhir = $this->input->post('jam_berakhir');
			    if ($this->input->post('kendaraan_dinas') == 'Ya')
			    {
			    	$jenis_kendaraan ='Kendaraan Dinas';
			    }else {
			    	$jenis_kendaraan ='Kendaraan Pribadi';
			    }
			    $url = base_url().'assets/img/ttd/Approve.jpg';
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN IJIN KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$tgl_mulai.' sampai '.$tgl_akhir.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<p align="center">Pukul : '.$jam_mulai.' sampai '.$jam_akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Jenis Ijin</b></td>
						<td>: '.$this->input->post('jenis_ijin').'
						</td>
					</tr>
					<tr>
						<td><b>Jenis Kendaraan</b></td>
						<td>: '.$jenis_kendaraan.'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Disetujui,</b></td>
					</tr>
					<tr>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
					</tr>
					<tr>
						<td><p style="text-decoration: underline;">'.$data->nama_karyawan.'</p></td>
					</tr>
					<tr>
						<td>'.$data->jabatannya.'
						</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_ijin_bod($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = 'dewi_matchad@yahoo.com,dewi@match-advertising.com,efendi@match-advertising.com';
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Ijin Karyawan – Sistem Kepegawaian';
			    $tgl_mulai = date("d-M-Y", strtotime($this->input->post('tgl_mulai')));
			    $tgl_akhir = date("d-M-Y", strtotime($this->input->post('tgl_berakhir')));
			    $jam_mulai = $this->input->post('jam_mulai');
			    $jam_akhir = $this->input->post('jam_berakhir');
			    if ($this->input->post('kendaraan_dinas') == 'Ya')
			    {
			    	$jenis_kendaraan ='Kendaraan Dinas';
			    }else {
			    	$jenis_kendaraan ='Kendaraan Pribadi';
			    }
			    $url = base_url().'assets/img/ttd/Approve.jpg';
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN IJIN KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$tgl_mulai.' sampai '.$tgl_akhir.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<p align="center">Pukul : '.$jam_mulai.' sampai '.$jam_akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Jenis Ijin</b></td>
						<td>: '.$this->input->post('jenis_ijin').'
						</td>
					</tr>
					<tr>
						<td><b>Jenis Kendaraan</b></td>
						<td>: '.$jenis_kendaraan.'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Disetujui,</b></td>
						<td></td>
						<td><b>Diketahui,</b></td>
					</tr>
					<tr>
						<td>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
						</td>
						<td></td>
						<td>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
						</td>
					</tr>
					<tr>
						<td><p style="text-decoration: underline;">'.$data->nama_karyawan.'</p></td>
						<td></td>
						<td><p style="text-decoration: underline;">'.$this->input->post('nama_kry').'</p></td>
					</tr>
					<tr>
						<td>'.$data->jabatannya.'
						</td>
						<td></td>
						<td>'.$this->input->post('jabatan').'</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_lembur_atasan($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = $data->email;
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Lembur Karyawan – Sistem Kepegawaian';
			    $tanggal = date("d-M-Y", strtotime($this->input->post('tanggal')));
			    $jam_mulai = $this->input->post('jam_mulai');
			    $jam_akhir = $this->input->post('jam_berakhir');
			    if ($this->input->post('kendaraan_dinas') == 'Ya')
			    {
			    	$jenis_kendaraan ='Kendaraan Dinas';
			    }else {
			    	$jenis_kendaraan ='Kendaraan Pribadi';
			    }
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN LEMBUR KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$tanggal.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<p align="center">Pukul : '.$jam_mulai.' sampai '.$jam_akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Nama Atasan</b></td>
						<td>: '.$data->nama_karyawan.'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Pembuat,</b></td>
					</tr>
					<br>
					<br>
					<br>
					<tr>
						<td><p style="text-decoration: underline;">'.$this->input->post('nama_kry').'</p></td>
					</tr>
					<tr>
						<td>'.$this->input->post('jabatan').'
						</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_lembur_hc($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = 'rudy_s@match-advertising.com';
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Lembur Karyawan – Sistem Kepegawaian';
			    $tanggal = date("d-M-Y", strtotime($this->input->post('tanggal')));
			    $jam_mulai = $this->input->post('jam_mulai');
			    $jam_akhir = $this->input->post('jam_berakhir');
			    if ($this->input->post('kendaraan_dinas') == 'Ya')
			    {
			    	$jenis_kendaraan ='Kendaraan Dinas';
			    }else {
			    	$jenis_kendaraan ='Kendaraan Pribadi';
			    }
			    $url = base_url().'assets/img/ttd/Approve.jpg';
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN LEMBUR KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$tanggal.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<p align="center">Pukul : '.$jam_mulai.' sampai '.$jam_akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Nama Atasan</b></td>
						<td>: '.$data->nama_karyawan.'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Disetujui,</b></td>
					</tr>
					<tr>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
					</tr>
					<tr>
						<td><p style="text-decoration: underline;">'.$data->nama_karyawan.'</p></td>
					</tr>
					<tr>
						<td>'.$data->jabatannya.'
						</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_kirim_email_lembur_bod($id)
		{
			$dept = '';
			$this->db->where('id_karyawan',$id);
			$get = $this->db->get('karyawan');
			$data = $get->row();
			if ($get->num_rows() > 0) {
				$id_dept = explode(',', $this->input->post('dept'));
                $this->db->where_in('id_dept', $id_dept);
                $query = $this->db->get('dept');
                if($query->num_rows()>0){
                	foreach ($query->result() as $row){
                		if ($dept == ''){
                		    $dept= $row->nama_dept;
	                	}else{
	                		$dept= $dept .','.$row->nama_dept;
	                	}
                	}
                }

				$dest = 'rudy_s@match-advertising.com,efendi@match-advertising.com';
				$this->email_conf();
			    $from = 'systemmatch@match-advertising.com';
			    $to = $dest;
			    $subj = 'Permohonan Lembur Karyawan – Sistem Kepegawaian';
			    $tanggal = date("d-M-Y", strtotime($this->input->post('tanggal')));
			    $jam_mulai = $this->input->post('jam_mulai');
			    $jam_akhir = $this->input->post('jam_berakhir');
			    if ($this->input->post('kendaraan_dinas') == 'Ya')
			    {
			    	$jenis_kendaraan ='Kendaraan Dinas';
			    }else {
			    	$jenis_kendaraan ='Kendaraan Pribadi';
			    }
			    $url = base_url().'assets/img/ttd/Approve.jpg';
			    $content = '
				<tr>
					<h1><p align="center">PERMOHONAN LEMBUR KARYAWAN</p></h1>
			    </tr>
			    <hr>
			    <tr>
					<td>
						<p align="center">Tanggal Permohonan : '.$tanggal.'</p>
					</td>
				</tr>
				<tr>
					<td>
						<p align="center">Pukul : '.$jam_mulai.' sampai '.$jam_akhir.'</p>
					</td>
				</tr>
				<hr> 
				<br>
				<table>
					<tr>
						<td><b>NIK</b></td>
						<td>: '.$this->input->post('nik').'
						</td>
					</tr>
					<tr>
						<td><b>Nama Karyawan</b></td>
						<td>: '.$this->input->post('nama_kry').'
						</td>
					</tr>
					<tr>
						<td><b>Departemen</b></td>
						<td>: '.$dept.'
						</td>
					</tr>
					<tr>
						<td><b>Nama Atasan</b></td>
						<td>: '.$data->nama_karyawan.'
						</td>
					</tr>
					<br>
					<tr>
						<td><b>Keperluan</b></td>
						<td>: 
						</td>
					</tr>
					<tr>
						<td>'.$this->input->post('keperluan').'
						</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<tr>
						<td><b>Disetujui,</b></td>
						<td></td>
						<td><b>Diketahui,</b></td>
					</tr>
					<tr>
						<td>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
						</td>
						<td></td>
						<td>
						<img id="img-logo" witdh="40px" height="30px" class="img-responsive" src="'.$url.'">
						</td>
					</tr>
					<tr>
						<td><p style="text-decoration: underline;">'.$data->nama_karyawan.'</p></td>
						<td></td>
						<td><p style="text-decoration: underline;">'.$this->input->post('nama_kry').'</p></td>
					</tr>
					<tr>
						<td>'.$data->jabatannya.'
						</td>
						<td></td>
						<td>'.$this->input->post('jabatan').'</td>
					</tr>
				</table>';
			    $this->email_content($from,$to,$subj,$content);
			    $this->email->send();
			}
			echo json_encode(array("status" => TRUE));
		}

		//email
		public function email_conf()
		{
			$config = array (
					'protocol'  => 'smtp',			    
				    'smtp_host' => 'ssl://smtp.gmail.com',
				    'smtp_port' => 465,
				    'smtp_user' => 'systemmatch@match-advertising.com',
				    'smtp_pass' => 'Rahasia2018',
				    'mailtype'  => 'html',
				    'charset'   => 'utf-8'
				);
			$this->email->initialize($config);	
		}

		public function email_content($from,$to,$subj,$content)
		{		
			$this->email->set_newline("\r\n");
			$this->email->to($to);
			$this->email->from($from);
			$this->email->subject($subj);
			$this->email->message($content);
		}

		public function ajax_updatecuti($id)
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'id_atasan' => $this->input->post('atasan'),
			    'tgl_mulai' => $this->input->post('tgl_mulai'),
			    'tgl_berakhir' => $this->input->post('tgl_berakhir'),
			    'jumlah_cuti' => $this->input->post('jumlah_cuti'),
			    'jenis_cuti' => $this->input->post('jenis_cuti'),
			    'keperluan' => $this->input->post('keperluan'),
                'penyerahan' => $this->input->post('penyerahan_tugas'),
                'cuti_sts' => '2'
            );
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	$update =$this->crud->update('cuti_karyawan_hc',$data,array('id_cuti_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_approvecuti($id)
		{		
			// if ($this->input->post('acc_atasan') != 'Ya')
			// {
			// 	$data = array(	  
			// 	    'acc_atasan' => $this->input->post('acc_atasan')
			// 	);
			// }else{
			// 	if ($this->input->post('acc_hc') != 'Ya')
			// 	{
			// 		$data = array(	  
		 //                'acc_atasan' => $this->input->post('acc_atasan'),
		 //                'acc_hc' => $this->input->post('acc_hc')
		 //            );
			// 	}else{
			// 		$data = array(	  
		 //                'acc_atasan' => $this->input->post('acc_atasan'),
		 //                'acc_hc' => $this->input->post('acc_hc'),
		 //                'cuti_sts' => '1'
		 //            );
			// 	}
			// }
			// if ($this->session->userdata('usg_id')=="4" || $this->session->userdata('usg_id')=="1") {
			// if ($this->session->userdata('usg_id')=="4" || $this->session->userdata('usg_id')=="1"){
			// 	$data = array(
			// 			'acc_atasan' => 'Ya',
			// 			'acc_hc' => "Ya"
			// 		);
			// }else{
			// 	$data = array(
			// 			'acc_atasan' => 'Ya',
			// 			'acc_hc' => ''
			// 		);		
			// }
			$acc_atasan = $this->input->post('acc_atasan');
			$acc_hc 	= $this->input->post('acc_hc');
			if ($acc_atasan != "" OR $acc_atasan!=null) {
				$data = array('acc_hc' => 'Ya');
			}else{
				$data = array(
					'acc_atasan' => 'Ya',
					'acc_hc' => ''
				);
			}
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	// if ($this->session->userdata('usg_id')!="1"){
        		$update =$this->crud->update('cuti_karyawan_hc',$data,array('id_cuti_karyawan' => $id));
        	// }
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_disapprovecuti($id)
		{	
			// $data = array(	 
			// 			'jumlah_cuti'	=> '0',
			// 			'acc_atasan' 	=> 'Tidak',
			// 			'acc_hc' 		=> '',
		 //                'cuti_sts' 		=> '0'
		 //            );
			// if ($this->session->userdata('usg_id')=="4" || $this->session->userdata('usg_id')=="1") {
			// 	$data = array(
			// 			'jumlah_cuti'	=>'0',
			// 			'acc_hc' 		=>'Tidak',
			// 			'cuti_sts'		=>'0'
			// 			);
			// }
			$acc_atasan = $this->input->post('acc_atasan');
			$acc_hc 	= $this->input->post('acc_hc');
			if ($acc_atasan == "Ya") {
				$data = array('acc_hc' =>'Tidak');
			}else{
				$data = array(	 
						'acc_atasan' 	=> 'Tidak',
						'acc_hc' 		=> '',
		                'cuti_sts' 	=> '0'
		            );
			}
			$update =$this->crud->update('cuti_karyawan_hc',$data,array('id_cuti_karyawan' => $id));
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_opencuti($id)
		{		
			$data = array(	  
				'acc_atasan' => '',
			    'acc_hc' => '',
                'cuti_sts' => '0'
            );
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	$update =$this->crud->update('cuti_karyawan_hc',$data,array('id_cuti_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_cuti($id)
		{
			$list = $this->cuti->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->tgl_mulai;
				$row[] = $dat->tgl_berakhir;
				$row[] = $dat->jumlah_cuti;
				$row[] = $dat->jenis_cuti;
				$row[] = $dat->keperluan;
				$row[] = $dat->penyerahan;
				$row[] = $dat->acc_atasan;
				$row[] = $dat->acc_hc;
				if ($dat->acc_atasan==''){
					$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-xs btn-danger btn-responsive" onclick="del_cuti('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-remove"></span></a>
							<a href="javascript:void(0)" title="Edit Data" class="btn btn-xs btn-primary btn-responsive" onclick="pick_cutiedit('."'".$dat->id_cuti_karyawan."'".')"><span class="glyphicon glyphicon-edit"></span></a>';
				}else{
					$row[] ='';
				}
				
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->cuti->count_all(),
							"recordsFiltered" => $this->cuti->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_del_cuti($id)
	    {
	    	$this->crud->delete_by_id('cuti_karyawan_hc',array('id_cuti_karyawan' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_tambahijin()
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'id_atasan' => $this->input->post('atasan'),
			    'tgl_mulai' => $this->input->post('tgl_mulai'),
			    'tgl_berakhir' => $this->input->post('tgl_berakhir'),
			    'jam_berakhir' => $this->input->post('jam_berakhir'),
			    'jam_mulai' => $this->input->post('jam_mulai'),
			    'jenis_ijin' => $this->input->post('jenis_ijin'),
			    'keperluan' => $this->input->post('keperluan'),
			    'kendaraan_dinas' => $this->input->post('kendaraan_dinas'),
                'ijin_sts' => '2'
            );
        	$update = $this->crud->save('ijin_karyawan_hc',$data);
	        echo json_encode(array("status" => TRUE));
		}
		public function ajax_updateijin($id)
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'id_atasan' => $this->input->post('atasan'),
			    'tgl_mulai' => $this->input->post('tgl_mulai'),
			    'tgl_berakhir' => $this->input->post('tgl_berakhir'),
			    'jam_berakhir' => $this->input->post('jam_berakhir'),
			    'jam_mulai' => $this->input->post('jam_mulai'),
			    'jenis_ijin' => $this->input->post('jenis_ijin'),
			    'keperluan' => $this->input->post('keperluan'),
                'kendaraan_dinas' => $this->input->post('kendaraan_dinas'),
                'ijin_sts' => '2'
            );
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	$update =$this->crud->update('ijin_karyawan_hc',$data,array('id_ijin_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}
		public function ajax_del_ijin($id)
	    {
	    	$this->crud->delete_by_id('ijin_karyawan_hc',array('id_ijin_karyawan' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_approveijin($id)
		{	
			// if ($this->session->userdata('usg_id')=="4" || $this->session->userdata('usg_id')=="1") {
			// 		$data = array('acc_hc' => "Ya");
			// }else{
			// 	$data = array(
			// 			'acc_atasan' => 'Ya',
			// 			'acc_hc' => ''
			// 		);
			// }	
			$acc_atasan = $this->input->post('acc_atasan');
			$acc_hc 	= $this->input->post('acc_hc');
			if ($acc_atasan != "" OR $acc_atasan!=null) {
				$data = array('acc_hc' => 'Ya');
			}else{
				$data = array(
					'acc_atasan' => 'Ya',
					'acc_hc' => ''
				);
			}
			// if ($this->input->post('acc_atasan') != 'Ya')
			// {
			// 	$data = array(	  
			// 	    'acc_atasan' => $this->input->post('acc_atasan')
			// 	);
			// }else{
			// 	if ($this->input->post('acc_hc') != 'Ya')
			// 	{
			// 		$data = array(	  
		 //                'acc_atasan' => $this->input->post('acc_atasan'),
		 //                'acc_hc' => $this->input->post('acc_hc')
		 //            );
			// 	}else{
			// 		$data = array(	  
		 //                'acc_atasan' => $this->input->post('acc_atasan'),
		 //                'acc_hc' => $this->input->post('acc_hc'),
		 //                'ijin_sts' => '1'
		 //            );
			// 	}
			// }
        	$update =$this->crud->update('ijin_karyawan_hc',$data,array('id_ijin_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}
		public function ajax_approveijin_hc($id){
			$data = array('acc_hc' => $this->input->post('acc_hc'));
			$update =$this->crud->update('ijin_karyawan_hc',$data,array('id_ijin_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));	
		}
		public function ajax_disapproveijin($id)
		{
			// $data = array(	 
			// 			'acc_atasan' =>'Tidak',
			// 			'acc_hc' =>'',
		 //                'ijin_sts' => '0'
		 //            );
			// if ($this->session->userdata('usg_id')=="4" || $this->session->userdata('usg_id')=="1") {
			// 	$data = array('acc_hc' =>'Tidak');
			// }
			$acc_atasan = $this->input->post('acc_atasan');
			$acc_hc 	= $this->input->post('acc_hc');
			if ($acc_atasan == "Ya") {
				$data = array('acc_hc' =>'Tidak');
			}else{
				$data = array(	 
						'acc_atasan' 	=> 'Tidak',
						'acc_hc' 		=> '',
		                'ijin_sts' 	=> '0'
		            );
			}
			$update =$this->crud->update('ijin_karyawan_hc',$data,array('id_ijin_karyawan' => $id));
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_openijin($id)
		{		
			$data = array(	 
			    'acc_atasan' => '',
			    'acc_hc' => '', 
                'ijin_sts' => '0'
            );
        	$update =$this->crud->update('ijin_karyawan_hc',$data,array('id_ijin_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}

	    public function ajax_ijin($id)
		{
			$list = $this->ijin->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->tgl_mulai;
				$row[] = $dat->tgl_berakhir;
				$row[] = $dat->jam_mulai;
				$row[] = $dat->jam_berakhir;
				$row[] = $dat->jenis_ijin;
				$row[] = $dat->keperluan;
				$row[] = $dat->kendaraan_dinas;
				$row[] = $dat->acc_atasan;
				$row[] = $dat->acc_hc;
				if ($dat->acc_atasan==''){
					$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-xs btn-danger btn-responsive" onclick="del_ijin('."'".$dat->id_ijin_karyawan."'".')"><span class="glyphicon glyphicon-remove"></span></a>
					<a href="javascript:void(0)" title="Edit Data" class="btn btn-xs btn-primary btn-responsive" onclick="pick_ijinedit('."'".$dat->id_ijin_karyawan."'".')"><span class="glyphicon glyphicon-edit"></span></a>';
				}else{
					$row[] ='';
				}
				
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->ijin->count_all(),
							"recordsFiltered" => $this->ijin->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_tambahlembur()
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'id_atasan' => $this->input->post('atasan'),
			    'tanggal' => $this->input->post('tanggal'),
			    'jam_mulai' => $this->input->post('jam_mulai'),
			    'jam_berakhir' => $this->input->post('jam_berakhir'),
			    'keperluan' => $this->input->post('keperluan'),
                'lembur_sts' => '2'
            );
        	$update = $this->crud->save('lembur_karyawan_hc',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_updatelembur($id)
		{		
			$data = array(	  
				'id_karyawan' 	=> $this->input->post('id_karyawan'),
				'id_atasan' 	=> $this->input->post('atasan'),
			    'tanggal' 		=> $this->input->post('tanggal'),
			    'jam_berakhir' 	=> $this->input->post('jam_berakhir'),
			    'jam_mulai' 	=> $this->input->post('jam_mulai'),
			    'keperluan' 	=> $this->input->post('keperluan'),
                'lembur_sts' 	=> '2'
            );
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	$update =$this->crud->update('lembur_karyawan_hc',$data,array('id_lembur_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_del_lembur($id)
	    {
	    	$this->crud->delete_by_id('lembur_karyawan_hc',array('id_lembur_karyawan' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_approvelembur($id)
		{		
			// if ($this->input->post('acc_atasan') != 'Ya')
			// {
			// 	$data = array(	  
			// 	    'acc_atasan' => $this->input->post('acc_atasan')
			// 	);
			// }else{
			// 	if ($this->input->post('acc_hc') != 'Ya')
			// 	{
			// 		$data = array(	  
		 //                'acc_atasan' => $this->input->post('acc_atasan'),
		 //                'acc_hc' => $this->input->post('acc_hc')
		 //            );
			// 	}else{
			// 		$data = array(	  
		 //                'acc_atasan' => $this->input->post('acc_atasan'),
		 //                'acc_hc' => $this->input->post('acc_hc'),
		 //                'lembur_sts' => '1'
		 //            );
			// 	}
			// }
			//added by qoqom
			$acc_atasan = $this->input->post('acc_atasan');
			$acc_hc 	= $this->input->post('acc_hc');
			if ($acc_atasan != "" OR $acc_atasan!=null) {
				$data = array('acc_hc' => 'Ya');
			}else{
				$data = array(
					'acc_atasan' => 'Ya',
					'acc_hc' => ''
				);
			}
        	$update =$this->crud->update('lembur_karyawan_hc',$data,array('id_lembur_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}
		public function hc_approve_lembur($id){
			$data = array(
						'acc_hc' => 'Ya'
					);
		}
		public function ajax_disapprovelembur($id)
		{	
			$acc_atasan = $this->input->post('acc_atasan');
			$acc_hc 	= $this->input->post('acc_hc');
			if ($acc_atasan == "Ya") {
				$data = array('acc_hc' =>'Tidak');
			}else{
				$data = array(	 
						'acc_atasan' 	=> 'Tidak',
						'acc_hc' 		=> '',
		                'lembur_sts' 	=> '0'
		            );
			}
			$update =$this->crud->update('lembur_karyawan_hc',$data,array('id_lembur_karyawan' => $id));
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_openlembur($id)
		{		
			$data = array(	
			    'acc_atasan' => '',
			    'acc_hc' => '',
                'lembur_sts' => '0'
            );
        	$update =$this->crud->update('lembur_karyawan_hc',$data,array('id_lembur_karyawan' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_lembur($id)
		{
			$list = $this->lembur->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->tanggal;
				$row[] = $dat->jam_mulai;
				$row[] = $dat->jam_berakhir;
				$row[] = $dat->keperluan;
				$row[] = $dat->acc_atasan;
				$row[] = $dat->acc_hc;
				if ($dat->acc_atasan==''){
					$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-xs btn-danger btn-responsive" onclick="del_lembur('."'".$dat->id_lembur_karyawan."'".')"><span class="glyphicon glyphicon-remove"></span></a>
						<a href="javascript:void(0)" title="Edit Data" class="btn btn-xs btn-primary btn-responsive" onclick="pick_lemburedit('."'".$dat->id_lembur_karyawan."'".')"><span class="glyphicon glyphicon-edit"></span></a>';
				}else{
					$row[] ='';
				}
				
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->lembur->count_all(),
							"recordsFiltered" => $this->lembur->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_mutasi()
		{
			$list = $this->mutasi->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_karyawan;
				$row[] = $dat->tgl_mutasi;
				$row[] = $dat->dept;
				$row[] = $dat->pangkat_sekarang;
				$row[] = $dat->jabatan_sekarang;
				$row[] = $dat->dept_mutasi;
				$row[] = $dat->pangkat_mutasi;
				$row[] = $dat->jabatan_mutasi;

				$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_mutasi('."'".$dat->id_mutasi_jabatan."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->mutasi->count_all(),
							"recordsFiltered" => $this->mutasi->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_pinjaman($id)
		{
			$list = $this->pinjaman->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->nama_karyawan;
				$row[] = $dat->tgl_pinjaman;
				$row[] = $dat->total_pinjaman;
				$row[] = $dat->jangka_angsuran;
				$row[] = $dat->jumlah_angsuran;
				$row[] = $dat->acc;
				if ($dat->acc==''){
					$row[] = '<a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="del_pinjaman('."'".$dat->id_pinjaman."'".')"><span class="glyphicon glyphicon-remove"></span></a>';
				}else{
					$row[] ='';
				}
				
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->pinjaman->count_all(),
							"recordsFiltered" => $this->pinjaman->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_del_pinjaman($id)
	    {
	    	$this->crud->delete_by_id('pinjaman_koperasi',array('id_pinjaman' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_disapprovepinjaman($id)
		{
			$data = array(	 
						'acc' =>'Dibatalkan',
		                'pinjaman_sts' => '0'
		            );
			$update =$this->crud->update('pinjaman_koperasi',$data,array('id_pinjaman' => $id));
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_approvepinjaman($id)
		{		
			$data = array(	  
                'acc' => $this->input->post('acc'),
                'pinjaman_sts' => '1'
            );
        	$update =$this->crud->update('pinjaman_koperasi',$data,array('id_pinjaman' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_openpinjaman($id)
		{		
			$data = array(	  
				'acc' => '',
                'pinjaman_sts' => '0'
            );
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	$update =$this->crud->update('pinjaman_koperasi',$data,array('id_pinjaman' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		public function gen_laporan_cuti()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.id_branch', $this->input->post('branch') );
			}
			if ($this->input->post('karyawan')) 
			{
				$this->db->where('a.branch_id', $this->input->post('karyawan') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.tgl_mulai >=', $this->input->post('date_start'));
        		$this->db->where('a.tgl_berakhir <=', $this->input->post('date_end'));
			}
			$this->db->select('b.nama_karyawan,a.tgl_mulai,a.tgl_berakhir,a.keperluan,c.nama_karyawan nama_atasan,a.acc_atasan,a.acc_hc');
			$this->db->from('cuti_karyawan_hc a');
			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan','left');
			$this->db->join('karyawan c','c.id_karyawan = a.id_atasan','left');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_laporan_ijin()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.id_branch', $this->input->post('branch') );
			}
			if ($this->input->post('karyawan')) 
			{
				$this->db->where('a.branch_id', $this->input->post('karyawan') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.tgl_mulai >=', $this->input->post('date_start'));
        		$this->db->where('a.tgl_berakhir <=', $this->input->post('date_end'));
			}
			$this->db->select('b.nama_karyawan,a.tgl_mulai,a.tgl_berakhir,a.keperluan,c.nama_karyawan nama_atasan,a.acc_atasan,a.acc_hc');
			$this->db->from('ijin_karyawan_hc a');
			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan','left');
			$this->db->join('karyawan c','c.id_karyawan = a.id_atasan','left');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function gen_laporan_lembur()
		{
			if ($this->input->post('branch')) 
			{
				$this->db->where('b.id_branch', $this->input->post('branch') );
			}
			if ($this->input->post('karyawan')) 
			{
				$this->db->where('a.branch_id', $this->input->post('karyawan') );
			}
			if ($this->input->post('date_start') != null AND $this->input->post('date_end') != null ) {
				$this->db->where('a.tanggal >=', $this->input->post('date_start'));
        		$this->db->where('a.tanggal <=', $this->input->post('date_end'));
			}
			$this->db->select('b.nama_karyawan,a.tanggal,a.jam_mulai,a.jam_berakhir,a.keperluan,c.nama_karyawan nama_atasan,a.acc_atasan,a.acc_hc');
			$this->db->from('lembur_karyawan_hc a');
			$this->db->join('karyawan b','b.id_karyawan = a.id_karyawan','left');
			$this->db->join('karyawan c','c.id_karyawan = a.id_atasan','left');
			$que = $this->db->get();
			$data['a'] = $que->result();
			echo json_encode($data);
		}

		public function ajax_tambahpinjaman()
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'nik' => $this->input->post('nik'),
				'nama_karyawan' => $this->input->post('nama_kry'),
				'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			    'tgl_pinjaman' => $this->input->post('tgl_pinjaman'),
			    'total_pinjaman' => $this->input->post('total_pinjaman'),
			    'jangka_angsuran' => $this->input->post('jangka_angsuran'),
			    'jumlah_angsuran' => $this->input->post('jumlah_angsuran'),
                'pinjaman_sts' => '2'
            );
        	$update = $this->crud->save('pinjaman_koperasi',$data);
	        echo json_encode(array("status" => TRUE));
		}

		public function ajax_updatepinjaman($id)
		{		
			$data = array(	  
				'id_karyawan' => $this->input->post('id_karyawan'),
				'nik' => $this->input->post('nik'),
				'nama_karyawan' => $this->input->post('nama_karyawan'),
				'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			    'tgl_pinjaman' => $this->input->post('tgl_pinjaman'),
			    'total_pinjaman' => $this->input->post('total_pinjaman'),
			    'jangka_angsuran' => $this->input->post('jangka_angsuran'),
			    'jumlah_angsuran' => $this->input->post('jumlah_angsuran'),
                'pinjaman_sts' => '2'
            );
        	// $update = $this->crud->save('cuti_karyawan_hc',$data);
        	$update =$this->crud->update('pinjaman_koperasi',$data,array('id_pinjaman' => $id));
	        echo json_encode(array("status" => TRUE));
		}

		//Menu Master Person
		public function person()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Sistem Terpadu - Master Person';
			$data['menu']='master';
			$data['menulist']='person';
			$data['isi']='menu/administrator/master/person';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_person()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Sistem Terpadu - Master Person';
			$data['menu']='master';
			$data['menulist']='person';
			$this->load->view('menu/administrator/master/print_person',$data);
	    }

	    public function get_masterperson()
	    {
	    	$data = $this->crud->get_datamaster('master_person',array('person_dtsts'=>'1'));
	    	echo json_encode($data);
	    }


	    //update sistem kirim e-mail
	    public function get_masterperson_with_email()
	    {
	    	$data = $this->crud->get_datamaster('master_person',array('person_dtsts'=>'1','person_email !='=>''));
	    	echo json_encode($data);
	    }

	    public function export_user()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'USR');
			$data['title']='Sistem Terpadu - Master Person';
			$data['menu']='master';
			$data['menulist']='person';
			$this->load->view('menu/administrator/master/print_user',$data);
	    }

	    public function get_masteruser()
	    {
	    	$this->db->join('master_person b','b.person_id = a.person_id');
	    	$this->db->join('master_branch c','c.branch_id = a.branch_id');
	    	$this->db->where('user_dtsts','1');
	    	$get = $this->db->get('master_user a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_person()
		{
			$res = $this->crud->gen_numb('person_code','master_person','KRY');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_user()
		{
			$res = $this->crud->gen_numb('user_code','master_user','USR');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function getperson()
		{
			$data = $this->crud->get_person();
	        echo json_encode($data);
		}

		public function getbranch()
		{
			$data = $this->crud->get_branch();
	        echo json_encode($data);
		}

		public function ajax_person()
		{

			$url = base_url();
			
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			$list = $this->master_person->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				if (is_null($dat->PERSON_TTD)){
					$ttd='';
				}else{
					$ttd=$dat->PERSON_TTD;
				}
				
				$row = array();
				$row[] = $no;
				$row[] = $dat->PERSON_CODE;
				$row[] = $dat->PERSON_NAME;
				$row[] = $dat->PERSON_ADDRESS;				
				$row[] = $dat->PERSON_PHONE;

				// Update Sistem Tambah Kolom Email Karyawan
				$row[] = $dat->PERSON_EMAIL;



				// Update Sistem Tambah Kolom TTD Karyawan
				if ($ttd ==''){
					$row[] = $dat->PERSON_TTD;
				}else{
					
					$row[] = '<img src="'.$url.'assets/img/ttd/'.$dat->PERSON_TTD.'" class="img-responsive">';
				}
				





				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_person('."'".$dat->PERSON_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_person->count_all(),
							"recordsFiltered" => $this->master_person->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_user()
		{
			$list = $this->master_user->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->USER_CODE;
				$row[] = $dat->PERSON_NAME;
				$row[] = $dat->USER_NAME;
				$row[] = $dat->BRANCH_NAME;	

				//Update Sistem Tambah Kolom Level di Table User
					if($dat->USER_LEVEL==1){$row[] ='Administrator';}
					if($dat->USER_LEVEL==2){$row[] ='Supervisor';}
					if($dat->USER_LEVEL==3){$row[] ='Reguler';}
				// $row[] = $dat->USER_LEVEL;

				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_user('."'".$dat->USER_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_user('."'".$dat->USER_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_user('."'".$dat->USER_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_user->count_all(),
							"recordsFiltered" => $this->master_user->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_person($id)
	    {
	    	$data = $this->crud->get_by_id('master_person',array('person_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_edit_user($id)
	    {
	    	$data = $this->crud->get_by_id('master_user',array('user_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_lihat_user($id)
	    {
	    	$data = $this->crud->get_by_id3b('master_user','master_person','master_branch',array('user_id' => $id),'master_person.person_id = master_user.person_id','master_branch.branch_id = master_user.branch_id');
        	echo json_encode($data);
	    }

	    public function ajax_add_person()
	    {
	        $this->_validate_person();    
	        $table = $this->input->post('tb');
	        $data = array(
	                'person_code' => $this->input->post('code'),
	                'person_name' => $this->input->post('nama'),
	                'person_address' => $this->input->post('alamat'),
	                'person_phone' => $this->input->post('notlp'),

	                // Update Sistem Tambah Kolom Email Karyawan
	                'person_email' => $this->input->post('email'),


	                'person_dtsts' => $this->input->post('sts')
	            );

	        // Update Sistem Tambah Kolom TTD Karyawan
	        if (!empty($_FILES))
	        {
	        	$name = $this->input->post('code');
				$this->img_conf2($name);
				$this->upload->do_upload('file');
				$logo = $this->upload->data();
	        	$data['branch_logo'] = $logo['file_name'];
	        }



	        $insert = $this->crud->save($table,$data);
	        // echo json_encode(array("status" => TRUE));
	        echo json_encode(array("status" => TRUE, 'error' => $this->upload->display_errors()));
	    }


	    public function ajax_add_user()
	    {
	        $this->_validate_user();
	        $table = $this->input->post('tbu');	        
	        $data = array(
	                'user_code' => $this->input->post('codeu'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('person'),
	                'user_name' => $this->input->post('username'),
	                'user_password' => md5($this->input->post('password')),
	                'user_level' => $this->input->post('level'),
	                'user_dtsts' => $this->input->post('stsu')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_person()
	    {
	    	$this->_validate_person();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'person_code' => $this->input->post('code'),
	                'person_name' => $this->input->post('nama'),
	                'person_address' => $this->input->post('alamat'),
	                'person_phone' => $this->input->post('notlp'),

	                // Update Sistem Tambah Kolom Email Karyawan
	                'person_email' => $this->input->post('email'),

	                // Update Sistem Tambah Kolom TTD Karyawan
	                'person_ttd' => $this->input->post('ttd'),

	                'person_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('person_id' => $this->input->post('id')));
			if (!empty($_FILES)) 
			{
				$imgpath = $this->db->get_where('master_person',array('person_id'=>$this->input->post('id')))->row()->PERSON_TTD;
				@unlink('./assets/img/ttd/'.$imgpath);
				$name = $this->input->post('code');
				$this->img_conf2($name);
				$this->upload->do_upload('file');
				$logo = $this->upload->data();
				$dtup = array ('person_ttd'=>$logo['file_name']);
				$update = $this->crud->update($table,$dtup,array('person_id'=>$this->input->post('id')));
			}
	        echo json_encode(array("status" => TRUE));
	    }




	    public function ajax_update_user()
	    {
	    	$this->_validate_user();
	    	$table = $this->input->post('tbu');
	    	if($this->input->post('password') == '')
	    	{
	    		$data = array(
	                'user_code' => $this->input->post('codeu'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('person'),
	                'user_name' => $this->input->post('username'),
	                'user_level' => $this->input->post('level'),
	                'user_dtsts' => $this->input->post('stsu')
	            );
	    	}
	    	else
	    	{
	    		$data = array(
	                'user_code' => $this->input->post('codeu'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('person'),
	                'user_name' => $this->input->post('username'),
	                'user_password' => md5($this->input->post('password')),
	                'user_dtsts' => $this->input->post('stsu')
	            );
	    	}	    	
	    	$update = $this->crud->update($table,$data,array('user_id' => $this->input->post('idu')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_person($id)
	    {
	    	$data = array(
	                'person_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_person',$data,array('person_id' => $id) );	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_user($id)
	    {
	    	$data = array(
	                'user_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_user',$data,array('user_id' => $id) );
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_person()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_person.PERSON_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('nama', 'Nama', 'is_unique[master_person.PERSON_NAME]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'nama';
		            $data['error_string'][] = 'Nama Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_user()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('codeu') == '')
	        {
	            $data['inputerror'][] = 'codeu';
	            $data['error_string'][] = 'Kode User Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('checku') == '0')
	        {
	        	$this->form_validation->set_rules('codeu', 'Kode', 'is_unique[master_user.USER_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'codeu';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('person') == '')
	        {
	            $data['inputerror'][] = 'person';
	            $data['error_string'][] = 'Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('branch') == '')
	        {
	            $data['inputerror'][] = 'branch';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('username') == '')
	        {
	            $data['inputerror'][] = 'username';
	            $data['error_string'][] = 'Username Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('checku') == '0')
	        {
	        	$this->form_validation->set_rules('username', 'Username', 'is_unique[master_user.USER_NAME]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'username';
		            $data['error_string'][] = 'Username Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        // if($this->input->post('username') != '')
	        // {
	        // 	$this->form_validation->set_rules('username', 'Username', 'is_unique[master_user.USER_NAME]');
	        // 	if($this->form_validation->run() == FALSE)
		       //  {
		       //  	$data['inputerror'][] = 'username';
		       //      $data['error_string'][] = 'Username Tidak Boleh Sama';
		       //      $data['status'] = FALSE;
		       //  }
	        // }
	        if($this->input->post('checku') == '0')
	        {
	        	if($this->input->post('password') == '')
		        {
		            $data['inputerror'][] = 'password';
		            $data['error_string'][] = 'Password Tidak Boleh Kosong';
		            $data['status'] = FALSE;
		        }
	        }	        
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

		//Menu Master Customer
		public function customer()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'CUST');
			$data['title']='Sistem Terpadu - Master Customer';
			$data['menu']='master';
			$data['menulist']='customer';
			$data['isi']='menu/administrator/master/customer';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_cust()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'CUST');
			$data['title']='Sistem Terpadu - Master Customer';
			$data['menu']='master';
			$data['menulist']='customer';
			$this->load->view('menu/administrator/master/print_cust',$data);
	    }

	    public function get_mastercust()
	    {
	    	$this->db->join('chart_of_account b','b.coa_id = a.coa_id','left');
	    	$this->db->where('cust_dtsts','1');
	    	$get = $this->db->get('master_customer a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_cust()
		{
			$res = $this->crud->gen_numb('cust_code','master_customer','CST');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function add_cust()
		{
			$data['title']='Sistem Terpadu - Master Customer Add';
			$data['menu']='master';
			$data['menulist']='customer';
			$data['isi']='menu/administrator/master/customer_add';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function ajax_cust()
		{

			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');

			$list = $this->master_cust->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CUST_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->CUST_ADDRESS;
				$row[] = $dat->CUST_CITY;
				$row[] = $dat->CUST_PHONE;
				$row[] = $dat->CUST_NPWPACC;
				$row[] = $dat->CUST_NPKP;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_cust('."'".$dat->CUST_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}



				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_cust->count_all(),
							"recordsFiltered" => $this->master_cust->count_filtered($brc),
							"data" => $data,
					);
			//output to json format
			echo json_encode($output);
		}

		public function ajax_edit_cust($id)
	    {
	    	// $data = $this->crud->get_by_id('master_customer',array('cust_id' => $id));
	    	// $data = $this->crud->get_by_id2b('master_customer a','chart_of_account b',array('a.cust_id'=>$id),'b.coa_id = a.coa_id','left');
	    	$data = $this->crud->get_by_id3b('master_customer','chart_of_account','master_branch',array('master_customer.cust_id'=>$id),'master_customer.coa_id = chart_of_account.coa_id','master_customer.branch_id=master_branch.branch_id');
        	echo json_encode($data);
	    }

		public function ajax_add_cust()
	    {
	        $this->_validate_cust();
	        $coa = ($this->input->post('accpiutang') != '') ? $this->input->post('accpiutang'):null;
	        $table = $this->input->post('tb');
	        $data = array(
	                'cust_code' => $this->input->post('code'),
	                'branch_id' => $this->session->userdata('user_branch'),
	                'coa_id' => $coa,
	                'cust_name' => $this->input->post('nama'),
	                'cust_address' => $this->input->post('alamat'),
	                'cust_city' => $this->input->post('kota'),
	                'cust_postal' => $this->input->post('area'),
	                'cust_prov' => $this->input->post('prov'),
	                'cust_phone' => $this->input->post('notlp'),
	                'cust_fax' => $this->input->post('fax'),
	                // 'cust_acc' => $this->input->post('accpiutang'),
	                'cust_npwpname' => $this->input->post('namanpwp'),
	                'cust_npwpacc' => $this->input->post('nonpwp'),
	                'cust_npwpadd' => $this->input->post('almtnpwp'),
	                'cust_npkp' => $this->input->post('npkp'),
	                'cust_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_cust()
	    {
	    	$this->_validate_cust();
	    	$coa = ($this->input->post('accpiutang') != '') ? $this->input->post('accpiutang'):null;
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'cust_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'coa_id' => $coa,
	                'cust_name' => $this->input->post('nama'),
	                'cust_address' => $this->input->post('alamat'),
	                'cust_city' => $this->input->post('kota'),
	                'cust_postal' => $this->input->post('area'),
	                'cust_prov' => $this->input->post('prov'),
	                'cust_phone' => $this->input->post('notlp'),
	                'cust_fax' => $this->input->post('fax'),
	                // 'cust_acc' => $this->input->post('accpiutang'),
	                'cust_npwpname' => $this->input->post('namanpwp'),
	                'cust_npwpacc' => $this->input->post('nonpwp'),
	                'cust_npwpadd' => $this->input->post('almtnpwp'),
	                'cust_npkp' => $this->input->post('npkp'),
	                'cust_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('cust_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_cust($id)
	    {
	    	$data = array(
	                'cust_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_customer',$data,array('cust_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_cust()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Customer Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_customer.CUST_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('area') == '')
	        {
	            $data['inputerror'][] = 'area';
	            $data['error_string'][] = 'Area Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('prov') == '')
	        {
	            $data['inputerror'][] = 'prov';
	            $data['error_string'][] = 'Provinsi Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Customer Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kota') == '')
	        {
	            $data['inputerror'][] = 'kota';
	            $data['error_string'][] = 'Kota Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        // if($this->input->post('fax') == '')
	        // {
	        //     $data['inputerror'][] = 'fax';
	        //     $data['error_string'][] = 'No Fax Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        // if($this->input->post('accpiutang') == '')
	        // {
	        //     $data['inputerror'][] = 'accpiutang';
	        //     $data['error_string'][] = 'Acc. Piutang Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        if($this->input->post('namanpwp') == '')
	        {
	            $data['inputerror'][] = 'namanpwp';
	            $data['error_string'][] = 'Nama NPWP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('nonpwp') == '')
	        {
	            $data['inputerror'][] = 'nonpwp';
	            $data['error_string'][] = 'No NPWP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('almtnpwp') == '')
	        {
	            $data['inputerror'][] = 'almtnpwp';
	            $data['error_string'][] = 'Alamat NPWP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('npkp') == '')
	        {
	            $data['inputerror'][] = 'npkp';
	            $data['error_string'][] = 'NPKP Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu Master Customer Internal
		public function gen_custin()
		{
			$res = $this->crud->gen_numb('cstin_code','master_cust_intern','CSTI');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_edit_custin($id)
	    {
	    	$data = $this->crud->get_by_id2('master_cust_intern a','master_person b',array('a.cstin_id'=>$id),'b.person_id = a.person_id');
        	echo json_encode($data);
	    }

		public function ajax_add_custin()
	    {
	        $this->_validate_custin();
	        $table = $this->input->post('tb_in');
	        $data = array(
	                'cstin_code' => $this->input->post('code_in'),
	                'person_id' => $this->input->post('empl'),
	                'cstin_info' => $this->input->post('custininfo'),
	                'cstin_dtsts' => $this->input->post('sts_in')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_custin()
	    {
	    	$this->_validate_custin();
	    	$table = $this->input->post('tb_in');
	    	$data = array(
	                'cstin_code' => $this->input->post('code_in'),
	                'branch_id' => $this->input->post('branch'),
	                'person_id' => $this->input->post('empl'),
	                'cstin_info' => $this->input->post('custininfo'),
	                'cstin_dtsts' => $this->input->post('sts_in')
	            );
	    	$update = $this->crud->update($table,$data,array('cstin_id' => $this->input->post('id_in')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_custin($id)
	    {
	    	$data = array(
	                'cstin_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_cust_intern',$data,array('cstin_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_custin()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code_in') == '')
	        {
	            $data['inputerror'][] = 'code_in';
	            $data['error_string'][] = 'Kode Customer Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_cust_intern.CSTIN_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code_in';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('empl') == '')
	        {
	            $data['inputerror'][] = 'empl';
	            $data['error_string'][] = 'Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('custininfo') == '')
	        {
	            $data['inputerror'][] = 'custininfo';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master lokasi
	    public function location()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'LOC');
			$data['gov']=$this->crud->get_gov();
			$data['title']='Sistem Terpadu - Master Lokasi';
			$data['menu']='master';
			$data['menulist']='location';
			$data['isi']='menu/administrator/master/location';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_gov()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'LOC');
			$data['title']='Sistem Terpadu - Master Lokasi';
			$data['menu']='master';
			$data['menulist']='location';
			$this->load->view('menu/administrator/master/print_gov',$data);
	    }

	    public function get_mastergov()
	    {
	    	$data = $this->crud->get_datamaster('master_gov_type',array('gov_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

	    public function export_loc()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'LOC');
			$data['title']='Sistem Terpadu - Master Lokasi';
			$data['menu']='master';
			$data['menulist']='location';
			$this->load->view('menu/administrator/master/print_loc',$data);
	    }

	    public function get_masterloc()
	    {
	    	$this->db->join('master_gov_type b','b.gov_id = a.gov_id');
	    	$this->db->where('loc_dtsts','1');
	    	$get = $this->db->get('master_location a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_gov()
		{
			$res = $this->crud->gen_numb('gov_code','master_gov_type','GOV');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_loc()
		{
			$res = $this->crud->gen_numb('loc_code','master_location','LOC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function getgov()
		{
			$data = $this->crud->get_gov();
	        echo json_encode($data);
		}

		public function ajax_gov()
		{


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');



			$list = $this->master_gov->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GOV_CODE;				
				$row[] = $dat->GOV_NAME;
				$row[] = $dat->GOV_INFO;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_gov('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_gov->count_all(),
							"recordsFiltered" => $this->master_gov->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_loc()
		{

			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			$list = $this->master_loc->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->LOC_CODE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->GOV_NAME;
				$row[] = $dat->LOC_ADDRESS;
				$row[] = $dat->LOC_CITY;
				$row[] = $dat->LOC_INFO;





				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_loc->count_all(),
							"recordsFiltered" => $this->master_loc->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_gov($id)
	    {
	    	$data = $this->crud->get_by_id('master_gov_type',array('gov_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_edit_loc($id)
	    {
	    	$data = $this->crud->get_by_id('master_location',array('loc_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_add_gov()
	    {
	        $this->_validate_gov();
	        $table = $this->input->post('gtb');
	        $data = array(
	                'gov_code' => $this->input->post('gcode'),	                
	                'gov_name' => $this->input->post('gname'),
	                'gov_info' => $this->input->post('ginfo'),
	                'gov_dtsts' => $this->input->post('gsts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

		public function ajax_add_loc()
	    {
	        $this->_validate_loc();
	        $table = $this->input->post('ltb');
	        $data = array(
	                'loc_code' => $this->input->post('lcode'),
	                'branch_id' => $this->input->post('branch'),
	                'gov_id' => $this->input->post('gov'),
	                'loc_name' => $this->input->post('lname'),
	                'loc_address' => $this->input->post('lalamat'),
	                'loc_city' => $this->input->post('lkota'),
	                'loc_info' => $this->input->post('lket'),
	                'loc_dtsts' => $this->input->post('lsts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_gov()
	    {
	    	$this->_validate_gov();
	    	$table = $this->input->post('gtb');
	    	$data = array(
	                'gov_code' => $this->input->post('gcode'),	                
	                'gov_name' => $this->input->post('gname'),
	                'gov_info' => $this->input->post('ginfo'),
	                'gov_dtsts' => $this->input->post('gsts')
	            );
	    	$update = $this->crud->update($table,$data,array('gov_id' => $this->input->post('gid')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_loc()
	    {
	    	$this->_validate_loc();
	    	$table = $this->input->post('ltb');
	    	$data = array(
	                'loc_code' => $this->input->post('lcode'),
	                'branch_id' => $this->input->post('branch'),
	                'gov_id' => $this->input->post('gov'),
	                'loc_name' => $this->input->post('lname'),
	                'loc_address' => $this->input->post('lalamat'),
	                'loc_city' => $this->input->post('lkota'),
	                'loc_info' => $this->input->post('lket'),
	                'loc_dtsts' => $this->input->post('lsts')
	            );
	    	$update = $this->crud->update($table,$data,array('loc_id' => $this->input->post('lid')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_gov($id)
	    {
	    	$data = array(	                
	                'gov_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_gov_type',$data,array('gov_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_loc($id)
	    {
	    	$data = array(	                
	                'loc_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_location',$data,array('loc_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_gov()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('gcode') == '')
	        {
	            $data['inputerror'][] = 'gcode';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('gcheck') == '0')
	        {
	        	$this->form_validation->set_rules('gcode', 'Kode', 'is_unique[master_gov_type.GOV_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'gcode';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	       	if($this->input->post('gname') == '')
	        {
	            $data['inputerror'][] = 'gname';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('ginfo') == '')
	        {
	            $data['inputerror'][] = 'ginfo';
	            $data['error_string'][] = 'Keterangan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function _validate_loc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('lcode') == '')
	        {
	            $data['inputerror'][] = 'lcode';
	            $data['error_string'][] = 'Kode Lokasi Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lname') == '')
	        {
	            $data['inputerror'][] = 'lname';
	            $data['error_string'][] = 'Kode Lokasi Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('gov') == '')
	        {
	            $data['inputerror'][] = 'gov';
	            $data['error_string'][] = 'Kode Status Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lcheck') == '0')
	        {
	        	$this->form_validation->set_rules('lcode', 'Kode', 'is_unique[master_location.LOC_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'lcode';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	       	if($this->input->post('lalamat') == '')
	        {
	            $data['inputerror'][] = 'lalamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lkota') == '')
	        {
	            $data['inputerror'][] = 'lkota';
	            $data['error_string'][] = 'Kota Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('lket') == '')
	        {
	            $data['inputerror'][] = 'lket';
	            $data['error_string'][] = 'Keterangan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master branch
	    public function branch()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'BRC');
			$data['title']='Sistem Terpadu - Master Cabang';
			$data['menu']='master';
			$data['menulist']='branch';
			$data['isi']='menu/administrator/master/branch';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_branch()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'BRC');
			$data['title']='Sistem Terpadu - Master Cabang';
			$data['menu']='master';
			$data['menulist']='branch';
			$this->load->view('menu/administrator/master/print_branch',$data);
	    }

	    public function get_masterbrc()
	    {
	    	$data = $this->crud->get_datamaster('master_branch',array('branch_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_brc()
		{
			$res = $this->crud->gen_numb('branch_code','master_branch','BRC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_brc()
		{
			$url = base_url();


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			//update sistem tampil berdasarkan branch
			$brc = $this->session->userdata('user_branch');
			$list = $this->master_brc->get_datatables($brc);
			// $list = $this->master_brc->get_datatables();

			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BRANCH_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->BRANCH_ADDRESS;			
				$row[] = $dat->BRANCH_CITY;
				$row[] = $dat->BRANCH_PHONE;
				$row[] = '<img src="'.$url.'assets/img/branchlogo/'.$dat->BRANCH_LOGO.'" class="img-responsive">';



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_brc('."'".$dat->BRANCH_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}









				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_brc->count_all(),

							//update sistem tampil berdasarkan branch
							"recordsFiltered" => $this->master_brc->count_filtered($brc),
							// "recordsFiltered" => $this->master_brc->count_filtered(),


							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_brc($id)
	    {
	    	$data = $this->crud->get_by_id('master_branch',array('branch_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_brc()
	    {
	        $this->_validate_brc();
	        $table = $this->input->post('tb');
	        $data = array(
	                'branch_code' => $this->input->post('code'),
	                'branch_name' => $this->input->post('nama'),
	                'branch_init' => $this->input->post('inisial'),
	                'branch_status' => $this->input->post('stat'),
	                'branch_address' => $this->input->post('alamat'),
	                'branch_city' => $this->input->post('kota'),
	                'branch_phone' => $this->input->post('notlp'),
	                'branch_fax' => $this->input->post('fax'),
	                'branch_dtsts' => $this->input->post('sts')
	            );
	        if (!empty($_FILES))
	        {
	        	$name = $this->input->post('code');
				$this->img_conf($name);
				$this->upload->do_upload('file');
				$logo = $this->upload->data();
	        	$data['branch_logo'] = $logo['file_name'];
	        }
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE, 'error' => $this->upload->display_errors()));
	    }

	    public function ajax_update_brc()
	    {
	    	$this->_validate_brc();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'branch_code' => $this->input->post('code'),
	                'branch_name' => $this->input->post('nama'),
	                'branch_init' => $this->input->post('inisial'),
	                'branch_status' => $this->input->post('stat'),
	                'branch_address' => $this->input->post('alamat'),
	                'branch_city' => $this->input->post('kota'),
	                'branch_phone' => $this->input->post('notlp'),
	                'branch_fax' => $this->input->post('fax'),
	                'branch_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('branch_id' => $this->input->post('id')));
	    	if (!empty($_FILES)) 
			{
				$imgpath = $this->db->get_where('master_branch',array('branch_id'=>$this->input->post('id')))->row()->BRANCH_LOGO;
				@unlink('./assets/img/branchlogo/'.$imgpath);
				$name = $this->input->post('code');
				$this->img_conf($name);
				$this->upload->do_upload('file');
				$logo = $this->upload->data();
				$dtup = array ('branch_logo'=>$logo['file_name']);
				$update = $this->crud->update($table,$dtup,array('branch_id'=>$this->input->post('id')));
			}
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_brc($id)
	    {
	    	$data = array(	                
	                'branch_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_branch',$data,array('branch_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_brc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_branch.BRANCH_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kota') == '')
	        {
	            $data['inputerror'][] = 'kota';
	            $data['error_string'][] = 'Kota Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('fax') == '')
	        {
	            $data['inputerror'][] = 'fax';
	            $data['error_string'][] = 'No Fax Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master COA	    
	    public function coa()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'COA');
			$data['title']='Sistem Terpadu - Master COA';
			$data['menu']='master';
			$data['menulist']='coa';
			$data['isi']='menu/administrator/master/coa';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_coa()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'COA');
			$data['title']='Sistem Terpadu - Master COA';
			$data['menu']='master';
			$data['menulist']='coa';
			$this->load->view('menu/administrator/master/print_coa',$data);
	    }

	    public function get_mastercoa()
	    {
	    	$this->db->join('parent_chart b','b.par_id = a.par_id');
	    	$this->db->join('parent_type c','c.partp_id = b.partp_id');




	    	//update sistem kolom cabang
	    	$this->db->join('master_branch d','d.branch_id = a.branch_id');

	    	$this->db->where('coa_dtsts','1');



	    	$get = $this->db->get('chart_of_account a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function ajax_coaparent()
		{


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');



		//update sistem tampil data table
			$brc = $this->session->userdata('user_branch');
			//$list = $this->master_coapr->get_datatables();
			$list = $this->master_coapr->get_datatables($brc);

			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PAR_ACC;
				$row[] = $dat->PAR_ACCNAME;
				$row[] = $dat->PARTP_NAME;			
				$row[] = $dat->PAR_INFO;


				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_par('."'".$dat->PAR_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}



				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_coapr->count_all(),



							//update sistem tampil data table 
							// "recordsFiltered" => $this->master_coapr->count_filtered(),
							"recordsFiltered" => $this->master_coapr->count_filtered($brc),

							
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_coa()
		{


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


		//update sistem tampil data table
			$brc = $this->session->userdata('user_branch');
			//$list = $this->master_coa->get_datatables();
			$list = $this->master_coa->get_datatables($brc);


			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PAR_ACC.'-'.$dat->PAR_ACCNAME;
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_coa('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_coa->count_all(),



							//update sistem tampil data table 
							// "recordsFiltered" => $this->master_coa->count_filtered(),
							"recordsFiltered" => $this->master_coa->count_filtered($brc),


							
							
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function getcoapr()
		{
			$data = $this->crud->get_coapr();
	        echo json_encode($data);
		}

		public function getcoabrc()
		{
			$data = $this->db->get_where('master_branch',array('branch_dtsts'=>'1'))->result();
	        echo json_encode($data);
		}

		public function getcoaprtp()
		{
			$this->db->where('partp_dtsts','1');
			$que = $this->db->get('parent_type');
			$data = $que->result();
	        echo json_encode($data);
		}

		public function getcoa()
		{
			//update sistem menampilkan COA berdasarkan branch
			$br = $this->session->userdata('user_branch');
			$data = $this->crud->get_coabr($br);

			// $data = $this->crud->get_coa($);
	        echo json_encode($data);
		}

		public function add_coaprtp()
		{
			$this->_validate_coaprtp();
			$table = 'parent_type';
			$data = array (
					'partp_name' => $this->input->post('partp_name'),
					'partp_sts' => $this->input->post('partp_sts'),
					'partp_dtsts' => '1'
				);
			$insert = $this->crud->save($table,$data);
			echo json_encode(array("status"=>TRUE));
		}

		public function add_coapr()
		{
			$this->_validate_coapr();
			$table = $this->input->post('par_tb');
			$data = array (
					'par_acc' => $this->input->post('par_acc'),
					'par_accname' => $this->input->post('par_name'),
					// 'par_type' => $this->input->post('par_type'),
					'partp_id' => $this->input->post('par_type'),
					'par_info' => $this->input->post('par_info'),
					'par_dtsts' => '1'
				);
			$insert = $this->crud->save($table,$data);
			echo json_encode(array("status" => TRUE));
		}		

		public function add_coa()
		{
			$this->_validate_coa();
			$table = $this->input->post('coa_tb');
			$data = array (
					'coa_acc' => $this->input->post('coa_acc'),
					'coa_accname' => $this->input->post('coa_accname'),
					'par_id' => $this->input->post('coa_par'),
					'branch_id' => $this->input->post('coa_brc'),
					'coa_debit' => 0,
					'coa_credit' => 0,
					'coa_saldo' => 0,
					'coa_dtsts' => '1'
				);
			$insert = $this->crud->save($table,$data);
			echo json_encode(array("status" => TRUE));
		}

		public function edit_coaprtp($id)
	    {
	    	$data = $this->crud->get_by_id('parent_type',array('partp_id' => $id));
        	echo json_encode($data);
	    }

		public function edit_coapr($id)
	    {
	    	$data = $this->crud->get_by_id('parent_chart',array('par_id' => $id));
        	echo json_encode($data);
	    }

	    public function edit_coa($id)
	    {
	    	$data = $this->crud->get_by_id('chart_of_account',array('coa_id' => $id));
        	echo json_encode($data);
	    }

	    public function update_coaprtp()
	    {
	    	$this->_validate_coaprtp();
	    	$table = 'parent_type';
	    	$data = array(
	    			'partp_name' => $this->input->post('partp_name'),
					'partp_sts' => $this->input->post('partp_sts')
	            );
	    	$update = $this->crud->update($table,$data,array('partp_id' => $this->input->post('partp_id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function update_coapr()
	    {
	    	$this->_validate_coapr();
	    	$table = $this->input->post('par_tb');
	    	$data = array(
	                'par_acc' => $this->input->post('par_acc'),
					'par_accname' => $this->input->post('par_name'),
					// 'par_type' => $this->input->post('par_type'),
					'partp_id' => $this->input->post('par_type'),
					'par_info' => $this->input->post('par_info')
	            );
	    	$update = $this->crud->update($table,$data,array('par_id' => $this->input->post('par_id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function update_coa()
	    {
	    	$this->_validate_coa();
	    	$table = $this->input->post('coa_tb');
	    	$data = array(
	                'coa_acc' => $this->input->post('coa_acc'),
					'coa_accname' => $this->input->post('coa_accname'),
					'par_id' => $this->input->post('coa_par'),
					'branch_id' => $this->input->post('coa_brc'),
	            );
	    	$update = $this->crud->update($table,$data,array('coa_id' => $this->input->post('coa_id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function delete_coaprtp($id)
	    {
	    	$data = array(	                
	                'partp_dtsts' => '0'
	            );
	    	$update = $this->crud->update('parent_type',$data,array('partp_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function delete_coapr($id)
	    {
	    	$data = array(	                
	                'par_dtsts' => '0'
	            );
	    	$update = $this->crud->update('parent_chart',$data,array('par_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function delete_coa($id)
	    {
	    	$data = array(	                
	                'coa_dtsts' => '0'
	            );
	    	$update = $this->crud->update('chart_of_account',$data,array('coa_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_coaprtp()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('partp_name') == '')
	        {
	            $data['inputerror'][] = 'partp_name';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('partp_check') == '0')
	        {
	        	$this->form_validation->set_rules('partp_name', 'Nama', 'is_unique[parent_type.PARTP_NAME]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'partp_name';
		            $data['error_string'][] = 'Nama Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	       	if($this->input->post('partp_sts') == '')
	        {
	            $data['inputerror'][] = 'partp_sts';
	            $data['error_string'][] = 'Status Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
			if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		public function _validate_coapr()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('par_acc') == '')
	        {
	            $data['inputerror'][] = 'par_acc';
	            $data['error_string'][] = 'No. Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('par_check') == '0')
	        {
	        	$this->form_validation->set_rules('par_acc', 'No Rekening', 'is_unique[parent_chart.PAR_ACC]|trim|alpha_numeric');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'par_acc';
		            $data['error_string'][] = 'No. Rekening Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('par_name') == '')
	        {
	            $data['inputerror'][] = 'par_name';
	            $data['error_string'][] = 'Nama Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('par_type') == '')
	        {
	            $data['inputerror'][] = 'par_type';
	            $data['error_string'][] = 'Jenis Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('par_info') == '')
	        {
	            $data['inputerror'][] = 'par_info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
			if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		public function _validate_coa()
		{
			$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('coa_acc') == '')
	        {
	            $data['inputerror'][] = 'coa_acc';
	            $data['error_string'][] = 'No. Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('coa_check') == '0')
	        {
	        	$this->form_validation->set_rules('coa_acc', 'No Rekening', 'is_unique[chart_of_account.COA_ACC]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'coa_acc';
		            $data['error_string'][] = 'No. Rekening Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('coa_accname') == '')
	        {
	            $data['inputerror'][] = 'coa_accname';
	            $data['error_string'][] = 'Nama Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('coa_par') == '')
	        {
	            $data['inputerror'][] = 'coa_par';
	            $data['error_string'][] = 'Induk Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('coa_brc') == '')
	        {
	            $data['inputerror'][] = 'coa_brc';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
			if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
		}

		//Menu master invoice type
	    public function invoice_type()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'INVT');
			$data['title']='Sistem Terpadu - Master Jenis Invoice';
			$data['menu']='master';
			$data['menulist']='invtyp';
			$data['isi']='menu/administrator/master/invtype';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_invt()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'INVT');
			$data['title']='Sistem Terpadu - Master Jenis Invoice';
			$data['menu']='master';
			$data['menulist']='invtyp';
			$this->load->view('menu/administrator/master/print_invt',$data);
	    }

	    public function get_masterinvt()
	    {
	    	$data = $this->crud->get_datamaster('invoice_type',array('inc_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_invtype()
		{
			$res = $this->crud->gen_numb('inc_code','invoice_type','IVT');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_invtype()
		{

			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');



			$brc = $this->session->userdata('user_branch');
			$list = $this->master_invtype->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INC_CODE;
				$row[] = $dat->INC_NAME;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->INC_ACCRCVNAME;			
				$row[] = $dat->INC_ACCINCNAME;	



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_invtype->count_all(),
							"recordsFiltered" => $this->master_invtype->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function edit_invtype($id)
	    {
	    	$data = $this->crud->get_by_id('invoice_type',array('inc_id' => $id));
        	echo json_encode($data);
	    }

		public function add_invtype()
	    {
	        $this->_validate_invtype();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'branch_id' => $this->input->post('brc'),
	                'inc_code' => $this->input->post('code'),
	                'inc_name' => $this->input->post('nama'),
	                'inc_accrcv' => $this->input->post('accrcv'),
	                'inc_accrcvname' => $this->input->post('accrcvname'),
	                'inc_accinc' => $this->input->post('accinc'),
	                'inc_accincname' => $this->input->post('accincname'),
	                'inc_dtsts' => $this->input->post('sts')	                
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function update_invtype()
	    {
	    	$this->_validate_invtype();
	    	$table = $this->input->post('tb');
	    	$data = array(
	    			'branch_id' => $this->input->post('brc'),
	                'inc_code' => $this->input->post('code'),
	                'inc_name' => $this->input->post('nama'),
	                'inc_accrcv' => $this->input->post('accrcv'),
	                'inc_accrcvname' => $this->input->post('accrcvname'),
	                'inc_accinc' => $this->input->post('accinc'),
	                'inc_accincname' => $this->input->post('accincname')
	            );
	    	$update = $this->crud->update($table,$data,array('inc_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function delete_invtype($id)
	    {
	    	$data = array(	                
	                'inc_dtsts' => '0'
	            );
	    	$update = $this->crud->update('invoice_type',$data,array('inc_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_invtype()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Jenis Invoice Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('brc') == '')
	        {
	            $data['inputerror'][] = 'brc';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[invoice_type.INC_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Jenis Invoice Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('accrcv') == '')
	        {
	            $data['inputerror'][] = 'accrcv';
	            $data['error_string'][] = 'Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('accinc') == '')
	        {
	            $data['inputerror'][] = 'accinc';
	            $data['error_string'][] = 'Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master sales
	    public function salesforce()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'SLS');
			$data['person']=$this->crud->get_person();
			$data['branch']=$this->crud->get_branch();
			$data['title']='Sistem Terpadu - Master Sales';
			$data['menu']='master';
			$data['menulist']='sales';
			$data['isi']='menu/administrator/master/salesforce';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_sales()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'SLS');
			$data['title']='Sistem Terpadu - Master Sales';
			$data['menu']='master';
			$data['menulist']='sales';
			$this->load->view('menu/administrator/master/print_sales',$data);
	    }

	    public function get_mastersales()
	    {
	    	$this->db->join('master_person b','b.person_id = a.person_id');
	    	$this->db->join('master_branch c','c.branch_id = a.branch_id');
	    	$this->db->where('sales_dtsts','1');
	    	$get = $this->db->get('master_sales a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_sls()
		{
			$res = $this->crud->gen_numb('sales_code','master_sales','SLF');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_sls()
		{


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');




			$brc = $this->session->userdata('user_branch');
			$list = $this->master_sls->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->SALES_CODE;
				$row[] = $dat->PERSON_NAME;				
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->SALES_PHONE;
				$row[] = $dat->SALES_EMAIL;




				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_sls('."'".$dat->SALES_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}



				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_sls->count_all(),
							"recordsFiltered" => $this->master_sls->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_sls($id)
	    {
	    	$data = $this->crud->get_by_id('master_sales',array('sales_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_sls()
	    {
	        $this->_validate_sls();
	        $table = $this->input->post('tb');
	        $data = array(
	                'person_id' => $this->input->post('person'),
	                'branch_id' => $this->input->post('brc'),
	                'sales_code' => $this->input->post('code'),	                
	                'sales_phone' => $this->input->post('notlp'),
	                'sales_email' => $this->input->post('mail'),
	                'sales_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_sls()
	    {
	    	$this->_validate_sls();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'person_id' => $this->input->post('person'),
	                'branch_id' => $this->input->post('brc'),
	                'sales_code' => $this->input->post('code'),	                
	                'sales_phone' => $this->input->post('notlp'),
	                'sales_email' => $this->input->post('mail'),
	                'sales_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('sales_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_sls($id)
	    {
	    	$data = array(
	                'sales_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_sales',$data,array('sales_id' => $id));	    	
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_sls()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Sales Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_sales.SALES_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('person') == '')
	        {
	            $data['inputerror'][] = 'person';
	            $data['error_string'][] = 'Karyawan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('brc') == '')
	        {
	            $data['inputerror'][] = 'brc';
	            $data['error_string'][] = 'Cabang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('notlp') == '')
	        {
	            $data['inputerror'][] = 'notlp';
	            $data['error_string'][] = 'No Telepon Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('mail') == '')
	        {
	            $data['inputerror'][] = 'mail';
	            $data['error_string'][] = 'Email Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        $this->form_validation->set_rules('mail', 'Email', 'valid_email');
	        if($this->form_validation->run() == FALSE)
	        {
	        	$data['inputerror'][] = 'mail';
	            $data['error_string'][] = 'Email Tidak Valid';
	            $data['status'] = FALSE;
	        }       

	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master currency
	    public function currency()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'CURR');
			$data['title']='Sistem Terpadu - Master Currency';
			$data['menu']='master';
			$data['menulist']='currency';
			$data['isi']='menu/administrator/master/currency';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_curr()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'CURR');
			$data['title']='Sistem Terpadu - Master Currency';
			$data['menu']='master';
			$data['menulist']='currency';
			$this->load->view('menu/administrator/master/print_curr',$data);
	    }

	    public function get_mastercurr()
	    {
	    	$data = $this->crud->get_datamaster('master_currency',array('curr_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_crc()
		{
			$res = $this->crud->gen_numb('curr_code','master_currency','CUR');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_crc()
		{


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			$list = $this->master_crc->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CURR_CODE;
				$row[] = $dat->CURR_SYMBOL;				
				$row[] = $dat->CURR_NAME;
				$row[] = $dat->CURR_RATE;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_crc('."'".$dat->CURR_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_crc->count_all(),
							"recordsFiltered" => $this->master_crc->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_crc($id)
	    {
	    	$data = $this->crud->get_by_id('master_currency',array('curr_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_crc()
	    {
	        $this->_validate_crc();
	        $table = $this->input->post('tb');
	        $data = array(
	                'curr_code' => $this->input->post('code'),
	                'curr_name' => $this->input->post('nama'),
	                'curr_symbol' => $this->input->post('cr_code'),
	                'curr_rate' => $this->input->post('rate'),
	                'curr_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_crc()
	    {
	    	$this->_validate_crc();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'curr_code' => $this->input->post('code'),
	                'curr_name' => $this->input->post('nama'),
	                'curr_symbol' => $this->input->post('cr_code'),
	                'curr_rate' => $this->input->post('rate'),
	                'curr_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('curr_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_crc($id)
	    {
	    	$data = array(
	                'curr_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_currency',$data,array('curr_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_crc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_currency.CURR_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Mata Uang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	       	if($this->input->post('cr_code') == '')
	        {
	            $data['inputerror'][] = 'cr_code';
	            $data['error_string'][] = 'Simbol Mata Uang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('rate') == '')
	        {
	            $data['inputerror'][] = 'rate';
	            $data['error_string'][] = 'Rate Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master billboard
	    public function billboard()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'REK');
			$data['title']='Sistem Terpadu - Master Billboard';
			$data['menu']='master';
			$data['menulist']='bboard';
			$data['isi']='menu/administrator/master/billboard';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_bb()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'REK');
			$data['title']='Sistem Terpadu - Master Billboard';
			$data['menu']='master';
			$data['menulist']='bboard';
			$this->load->view('menu/administrator/master/print_bb',$data);
	    }

	    public function get_masterbb()
	    {
	    	$data = $this->crud->get_datamaster('master_bboard',array('bb_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_bb()
		{
			$res = $this->crud->gen_numb('bb_code','master_bboard','BBO');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_bb()
		{

			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');

			$list = $this->master_bb->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BB_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->BB_NAME;				
				$row[] = $dat->BB_INFO;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_bb('."'".$dat->BB_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}



				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_bb->count_all(),
							"recordsFiltered" => $this->master_bb->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_bb($id)
	    {
	    	$data = $this->crud->get_by_id('master_bboard',array('bb_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_bb()
	    {
	        $this->_validate_bb();
	        $table = $this->input->post('tb');
	        $data = array(
	                'bb_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'bb_name' => $this->input->post('nama'),
	                'bb_info' => $this->input->post('info'),	                
	                'bb_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_bb()
	    {
	    	$this->_validate_bb();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'bb_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'bb_name' => $this->input->post('nama'),
	                'bb_info' => $this->input->post('info'),	                
	                'bb_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('bb_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_bb($id)
	    {
	    	$data = array(
	                'bb_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_bboard',$data,array('bb_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_bb()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_bboard.BB_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Reklame Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master placement
		public function gen_plc()
		{
			$res = $this->crud->gen_numb('plc_code','master_placement','PLC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function export_plc()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'REK');
			$data['title']='Sistem Terpadu - Master Billboard';
			$data['menu']='master';
			$data['menulist']='bboard';
			$this->load->view('menu/administrator/master/print_plc',$data);
	    }

	    public function get_masterplc()
	    {
	    	$data = $this->crud->get_datamaster('master_placement',array('plc_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function ajax_plc()
		{

			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			$list = $this->master_plc->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PLC_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->PLC_NAME;




				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_plc('."'".$dat->PLC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}


				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_plc->count_all(),
							"recordsFiltered" => $this->master_plc->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_plc($id)
	    {
	    	$data = $this->crud->get_by_id('master_placement',array('plc_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_plc()
	    {
	        $this->_validate_plc();
	        $table = $this->input->post('tb2');
	        $data = array(
	                'plc_code' => $this->input->post('code2'),
	                'branch_id' => $this->input->post('branch2'),
	                'plc_name' => $this->input->post('nama2'),	                
	                'plc_dtsts' => $this->input->post('sts2')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_plc()
	    {
	    	$this->_validate_plc();
	    	$table = $this->input->post('tb2');
	    	$data = array(
	                'plc_code' => $this->input->post('code2'),
	                'branch_id' => $this->input->post('branch2'),
	                'plc_name' => $this->input->post('nama2'),	                
	                'plc_dtsts' => $this->input->post('sts2')
	            );
	    	$update = $this->crud->update($table,$data,array('plc_id' => $this->input->post('id2')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_plc($id)
	    {
	    	$data = array(
	                'plc_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_placement',$data,array('plc_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_plc()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code2') == '')
	        {
	            $data['inputerror'][] = 'code2';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check2') == '0')
	        {
	        	$this->form_validation->set_rules('code2', 'Kode', 'is_unique[master_placement.PLC_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code2';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama2') == '')
	        {
	            $data['inputerror'][] = 'nama2';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master permit type
	    public function permit()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'PAT');
			$data['loc']=$this->crud->get_loc();
			$data['pattyp']=$this->crud->get_pattyp();
			$data['title']='Sistem Terpadu - Master Permit Type';
			$data['menu']='master';
			$data['menulist']='permit';
			$data['isi']='menu/administrator/master/permittype';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		//Menu master Sitac type
	    public function sitac()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'SITAC');
			$data['loc']=$this->crud->get_loc();
			$data['pattyp']=$this->crud->get_pattyp();
			$data['title']='Sistem Terpadu - Master Sitac Type';
			$data['menu']='master';
			$data['menulist']='sitac';
			$data['isi']='menu/administrator/master/sitactype';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_patt()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'PAT');
			$data['title']='Sistem Terpadu - Master Permit Type';
			$data['menu']='master';
			$data['menulist']='permit';
			$this->load->view('menu/administrator/master/print_patt',$data);
	    }

	    public function export_sitt()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'SITAC');
			$data['title']='Sistem Terpadu - Master Sitac Type';
			$data['menu']='master';
			$data['menulist']='sitac';
			$this->load->view('menu/administrator/master/print_sitt',$data);
	    }

	    public function get_masterpatt()
	    {
	    	$data = $this->crud->get_datamaster('master_permit_type',array('prmttyp_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

	    public function get_mastersitt()
	    {
	    	$data = $this->crud->get_datamaster('master_sitac_type',array('sitactype_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

		public function gen_ptyp()
		{
			$res = $this->crud->gen_numb('prmttyp_code','master_permit_type','PMT');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function gen_styp()
		{
			$res = $this->crud->gen_numb('sitactype_code','master_sitac_type','STC');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_ptyp()
		{

			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			$list = $this->master_ptyp->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRMTTYP_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->PRMTTYP_NAME;				
				$row[] = $dat->PRMTTYP_INFO;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_ptyp('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}





				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_ptyp->count_all(),
							"recordsFiltered" => $this->master_ptyp->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_locpat()
		{
			$list = $this->master_pat->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PERMIT_CODE;
				$row[] = $dat->LOC_NAME;				
				$row[] = $dat->PRMTTYP_NAME;
				$row[] = $dat->PERMIT_DESC;
				$row[] = $dat->PERMIT_END_DATE;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_locpat('."'".$dat->PERMIT_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_locpat('."'".$dat->PERMIT_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_locpat('."'".$dat->PERMIT_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_pat->count_all(),
							"recordsFiltered" => $this->master_pat->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_ptyp($id)
	    {
	    	// $data = $this->crud->get_by_id('master_permit_type',array('prmttyp_id' => $id,'branch_id'=>$this->input->post('user_branch')));
	    	$data = $this->crud->get_by_id('master_permit_type',array('prmttyp_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_edit_locpat($id)
	    {
	    	$data = $this->crud->get_by_id('master_permit',array('permit_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_ptyp()
	    {
	        $this->_validate_ptyp();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'branch_id' => $this->input->post('user_branch'),
	                'prmttyp_code' => $this->input->post('code'),
	                'prmttyp_name' => $this->input->post('nama'),
	                'prmttyp_info' => $this->input->post('info'),	                
	                'prmttyp_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_ptyp()
	    {
	    	$this->_validate_ptyp();
	    	$table = $this->input->post('tb');
	    	$data = array(
	    		    'branch_id' => $this->input->post('branch'),
	                'prmttyp_code' => $this->input->post('code'),
	                'prmttyp_name' => $this->input->post('nama'),
	                'prmttyp_info' => $this->input->post('info'),	                
	                'prmttyp_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('prmttyp_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_ptyp($id)
	    {
	    	$data = array(
	                'prmttyp_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_permit_type',$data,array('prmttyp_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_ptyp()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_permit_type.PRMTTYP_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    public function ajax_styp()
		{

			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');


			$list = $this->master_styp->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->SITACTYPE_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->SITACTYPE_NAME;				
				$row[] = $dat->SITACTYPE_INFO;



				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_styp('."'".$dat->SITACTYPE_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_styp('."'".$dat->SITACTYPE_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_styp('."'".$dat->SITACTYPE_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_styp('."'".$dat->SITACTYPE_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_styp('."'".$dat->SITACTYPE_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_styp->count_all(),
							"recordsFiltered" => $this->master_styp->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_locsitac()
		{
			$list = $this->master_pat->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->SITAC_CODE;
				$row[] = $dat->LOC_NAME;				
				$row[] = $dat->SITACTYPE_NAME;
				$row[] = $dat->SITACTYPE_DESC;
				$row[] = $dat->SITACTYPE_END_DATE;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_locsitac('."'".$dat->SITAC_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_locsitac('."'".$dat->SITAC_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_locsitac('."'".$dat->SITAC_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_sitac->count_all(),
							"recordsFiltered" => $this->master_sitac->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_styp($id)
	    {
	    	$data = $this->crud->get_by_id('master_sitac_type',array('sitactype_id' => $id));
        	echo json_encode($data);
	    }

	    public function ajax_edit_locsitac($id)
	    {
	    	$data = $this->crud->get_by_id('master_sitac',array('sitac_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_styp()
	    {
	        $this->_validate_styp();
	        $table = $this->input->post('tb');
	        $data = array(
	        	    'branch_id' => $this->input->post('user_branch'), 
	                'sitactype_code' => $this->input->post('code'),
	                'sitactype_name' => $this->input->post('nama'),
	                'sitactype_info' => $this->input->post('info'),	                
	                'sitactype_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_styp()
	    {
	    	$this->_validate_styp();
	    	$table = $this->input->post('tb');
	    	$data = array(
	    		    'branch_id' => $this->input->post('branch'),
	                'sitactype_code' => $this->input->post('code'),
	                'sitactype_name' => $this->input->post('nama'),
	                'sitactype_info' => $this->input->post('info'),	                
	                'sitactype_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('sitactype_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_styp($id)
	    {
	    	$data = array(
	                'sitactype_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_sitac_type',$data,array('sitactype_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_styp()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_sitac_type.SITACTYPE_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master supplier
	    public function supplier()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'SUPP');
			$data['title']='Sistem Terpadu - Master Supplier';
			$data['menu']='master';
			$data['menulist']='supplier';
			$data['isi']='menu/administrator/master/supplier';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_supp()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'SUPP');
			$data['title']='Sistem Terpadu - Master Supplier';
			$data['menu']='master';
			$data['menulist']='supplier';
			$this->load->view('menu/administrator/master/print_supp',$data);
	    }

	    public function get_mastersupp()
	    {
	    	$this->db->join('chart_of_account b','b.coa_id = a.coa_id','left');
	    	$this->db->where('supp_dtsts','1');
	    	$get = $this->db->get('master_supplier a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_supp()
		{
			$res = $this->crud->gen_numb('supp_code','master_supplier','SUP');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_sup()
		{
			$brc = $this->session->userdata('user_branch');
			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');

			$list = $this->master_sup->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->SUPP_CODE;
				$row[] = $dat->SUPP_NAME;	
				$row[] = $dat->BRANCH_NAME;				
				$row[] = $dat->SUPP_ADDRESS;
				$row[] = $dat->SUPP_CITY;




				// update sistem user level untuk hapus
				if ($user_level=='3'){
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}




				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_sup->count_all(),
							"recordsFiltered" => $this->master_sup->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_sup($id)
	    {
	    	// $data = $this->crud->get_by_id('master_supplier',array('supp_id' => $id));
	    	// $data = $this->crud->get_by_id2b('master_supplier a','chart_of_account b',array('a.supp_id'=>$id),'b.coa_id = a.coa_id','left');
	    	$data = $this->crud->get_by_id3b('master_supplier','chart_of_account','master_branch',array('master_supplier.supp_id'=>$id),'master_supplier.coa_id = chart_of_account.coa_id','master_supplier.branch_id=master_branch.branch_id');
        	echo json_encode($data);
	    }

		public function ajax_add_sup()
	    {
	        $this->_validate_sup();
	        $coa = ($this->input->post('acc') != '') ? $this->input->post('acc'):null;
	        $table = $this->input->post('tb');
	        $data = array(
	                'supp_code' => $this->input->post('code'),
	                'branch_id' => $this->session->userdata('user_branch'),
	                'coa_id' => $coa,
	                'supp_name' => $this->input->post('nama'),
	                'supp_address' => $this->input->post('alamat'),	                
	                'supp_city' => $this->input->post('kota'),
	                'supp_postal' => $this->input->post('postal'),
	                'supp_phone' => $this->input->post('phone'),
	                'supp_fax' => $this->input->post('fax'),
	                'supp_due' => $this->input->post('jtempo'),
	                'supp_otherctc' => $this->input->post('other'),
	                'supp_npwpname' => $this->input->post('npwpname'),
	                'supp_npwpcode' => $this->input->post('npwpacc'),
	                'supp_npwpadd' => $this->input->post('npwpadd'),
	                'supp_nppkpcode' => $this->input->post('nppkpacc'),
	                // 'supp_acc' => $this->input->post('acc'),
	                'supp_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_sup()
	    {
	    	$this->_validate_sup();
	    	$coa = ($this->input->post('acc') != '') ? $this->input->post('acc'):null;
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'supp_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'coa_id' => $coa,
	                'supp_name' => $this->input->post('nama'),
	                'supp_address' => $this->input->post('alamat'),	                
	                'supp_city' => $this->input->post('kota'),
	                'supp_postal' => $this->input->post('postal'),
	                'supp_phone' => $this->input->post('phone'),
	                'supp_fax' => $this->input->post('fax'),
	                'supp_due' => $this->input->post('jtempo'),
	                'supp_otherctc' => $this->input->post('other'),
	                'supp_npwpname' => $this->input->post('npwpname'),
	                'supp_npwpcode' => $this->input->post('npwpacc'),
	                'supp_npwpadd' => $this->input->post('npwpadd'),
	                'supp_nppkpcode' => $this->input->post('nppkpacc'),
	                // 'supp_acc' => $this->input->post('acc'),
	                'supp_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('supp_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_sup($id)
	    {
	    	$data = array(
	                'supp_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_supplier',$data,array('supp_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_sup()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_supplier.SUPP_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('alamat') == '')
	        {
	            $data['inputerror'][] = 'alamat';
	            $data['error_string'][] = 'Alamat Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kota') == '')
	        {
	            $data['inputerror'][] = 'kota';
	            $data['error_string'][] = 'Kota Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('postal') == '')
	        {
	            $data['inputerror'][] = 'postal';
	            $data['error_string'][] = 'Kode Pos Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('phone') == '')
	        {
	            $data['inputerror'][] = 'phone';
	            $data['error_string'][] = 'Telepon Supplier Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        // if($this->input->post('fax') == '')
	        // {
	        //     $data['inputerror'][] = 'fax';
	        //     $data['error_string'][] = 'Fax Supplier Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        // if($this->input->post('acc') == '')
	        // {
	        //     $data['inputerror'][] = 'acc';
	        //     $data['error_string'][] = 'Rek. Akuntansi Supplier Tidak Boleh Kosong';
	        //     $data['status'] = FALSE;
	        // }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Menu master barang
	    public function goods()
		{
			$this->authsys->master_check_($_SESSION['user_id'],'GD');
			$data['supplier']=$this->crud->get_supplier();
			$data['title']='Sistem Terpadu - Master Barang';
			$data['menu']='master';
			$data['menulist']='barang';
			$data['isi']='menu/administrator/master/goods';
			$this->load->view('layout/administrator/wrapper',$data);
		}

		public function export_goods()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'GD');
			$data['title']='Sistem Terpadu - Master Barang';
			$data['menu']='master';
			$data['menulist']='barang';
			$this->load->view('menu/administrator/master/print_goods',$data);
	    }

	    public function get_mastergd()
	    {
	    	$this->db->join('master_supplier b','b.supp_id = a.supp_id');
	    	$this->db->where('gd_dtsts','1');
	    	$get = $this->db->get('master_goods a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

		public function gen_gd()
		{
			$res = $this->crud->gen_numb('gd_code','master_goods','BRG');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function getsupp()
		{
			$data = $this->crud->get_supplier();
	        echo json_encode($data);
		}

		public function ajax_gd()
		{


			// update sistem user level untuk hapus
			$user_level=$this->input->post('user_level');



			//update sistem tampil berdasarkan branch
			$brc = $this->session->userdata('user_branch');
			$list = $this->master_gd->get_datatables($brc);
			// $list = $this->master_gd->get_datatables();


			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_CODE;				
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_STOCK;
				$row[] = $dat->GD_UNIT;
				$row[] = $dat->GD_MEASURE;
				$row[] = $dat->SUPP_NAME;
				$row[] = number_format($dat->GD_PRICE,2);





				// update sistem user level untuk hapus
				if ($user_level=='3'){
					$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>';
				}else {
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="lihat_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-eye-open"></span> </a>  <a href="javascript:void(0)" title="Edit Data" class="btn btn-sm btn-primary btn-responsive" onclick="edit_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-pencil"></span> </a>  <a href="javascript:void(0)" title="Hapus Data" class="btn btn-sm btn-danger btn-responsive" onclick="delete_gd('."'".$dat->GD_ID."'".')"><span class="glyphicon glyphicon-trash"></span> </a>';
				}



				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->master_gd->count_all(),

							//update sistem tampil berdasarkan branch
							"recordsFiltered" => $this->master_gd->count_filtered($brc),
							// "recordsFiltered" => $this->master_gd->count_filtered(),

							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function ajax_edit_gd($id)
	    {
	    	$data = $this->crud->get_by_id('master_goods',array('gd_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_gd()
	    {
	        $this->_validate_gd();
	        $table = $this->input->post('tb');
	        $data = array(
	                'gd_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'supp_id' => $this->input->post('supp'),
	                'gd_name' => $this->input->post('nama'),
	                'gd_unit' => $this->input->post('unit'),	                
	                'gd_measure' => $this->input->post('ukuran'),
	                'gd_price' => $this->input->post('harga'),
	                'gd_info' => $this->input->post('info'),
	                'gd_sts' => $this->input->post('stats'),
	                'gd_type' => $this->input->post('jenis'),
	                'gd_typestock' => $this->input->post('jstock'),
	                'gd_stock' => '0',
	                'gd_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_gd()
	    {
	    	$this->_validate_gd();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'gd_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'supp_id' => $this->input->post('supp'),
	                'gd_name' => $this->input->post('nama'),
	                'gd_unit' => $this->input->post('unit'),	                
	                'gd_measure' => $this->input->post('ukuran'),
	                'gd_price' => $this->input->post('harga'),
	                'gd_info' => $this->input->post('info'),
	                'gd_sts' => $this->input->post('stats'),
	                'gd_type' => $this->input->post('jenis'),
	                'gd_typestock' => $this->input->post('jstock')
	                // 'gd_dtsts' => $this->input->post('sts')
	            );
	    	$update = $this->crud->update($table,$data,array('gd_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_gd($id)
	    {
	    	$data = array(
	                'gd_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_goods',$data,array('gd_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_gd()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_goods.GD_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Barang Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('unit') == '')
	        {
	            $data['inputerror'][] = 'unit';
	            $data['error_string'][] = 'Satuan Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('ukuran') == '')
	        {
	            $data['inputerror'][] = 'ukuran';
	            $data['error_string'][] = 'Ukuran Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('harga') == '')
	        {
	            $data['inputerror'][] = 'harga';
	            $data['error_string'][] = 'Harga Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('stats') == '')
	        {
	            $data['inputerror'][] = 'stats';
	            $data['error_string'][] = 'Status Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Master Departemen
	    public function department()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'DEPT');
			$data['title']='Sistem Terpadu - Master Departemen';
			$data['menu']='master';
			$data['menulist']='department';
			$data['isi']='menu/administrator/master/department';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function export_dept()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'DEPT');
			$data['title']='Sistem Terpadu - Master Departemen';
			$data['menu']='master';
			$data['menulist']='department';
			$this->load->view('menu/administrator/master/print_dept',$data);
	    }

	    public function get_masterdpt()
	    {
	    	$data = $this->crud->get_datamaster('master_dept',array('dept_dtsts'=>'1'));
	    	echo json_encode($data);
	    }

	    public function gen_dept()
		{
			$res = $this->crud->gen_numb('dept_code','master_dept','DPT');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_edit_dept($id)
	    {
	    	$data = $this->crud->get_by_id('master_dept',array('dept_id' => $id));
        	echo json_encode($data);
	    }

		public function ajax_add_dept()
	    {
	        $this->_validate_dept();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'dept_code' => $this->input->post('code'),
	        		'branch_id' => $this->input->post('branch'),
	                'dept_name' => $this->input->post('dept_name'),
	                'dept_info' => $this->input->post('dept_info'),
	                'dept_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_dept()
	    {
	    	$this->_validate_dept();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'dept_code' => $this->input->post('code'),
	                'branch_id' => $this->input->post('branch'),
	                'dept_name' => $this->input->post('dept_name'),
	                'dept_info' => $this->input->post('dept_info')
	            );
	    	$update = $this->crud->update($table,$data,array('dept_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_dept($id)
	    {
	    	$data = array(
	                'dept_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_dept',$data,array('dept_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_dept()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_dept.DEPT_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('dept_name') == '')
	        {
	            $data['inputerror'][] = 'dept_name';
	            $data['error_string'][] = 'Nama Departemen Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('dept_info') == '')
	        {
	            $data['inputerror'][] = 'dept_info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Master Bank
	    public function bank()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'BNK');
			$data['title']='Sistem Terpadu - Master Bank';
			$data['menu']='master';
			$data['menulist']='bank';
			$data['isi']='menu/administrator/master/bank';
			$this->load->view('layout/administrator/wrapper',$data);
	    }

	    public function export_bank()
	    {
	    	$this->authsys->master_check_($_SESSION['user_id'],'BNK');
			$data['title']='Sistem Terpadu - Master Bank';
			$data['menu']='master';
			$data['menulist']='bank';
			$this->load->view('menu/administrator/master/print_bank',$data);
	    }

	    public function get_masterbank()
	    {
	    	$this->db->join('chart_of_account b','b.coa_id = a.coa_id','left');
	    	$this->db->where('bank_dtsts','1');
	    	$get = $this->db->get('master_bank a');
	    	$data = $get->result();
	    	echo json_encode($data);
	    }

	    public function gen_bank()
		{
			$res = $this->crud->gen_numb('bank_code','master_bank','BNK');
			$data['kode'] = $res;
			$data['status'] = TRUE;
			echo json_encode($data);
		}

		public function ajax_edit_bank($id)
	    {
	    	$data = $this->crud->get_by_id2('master_bank a','chart_of_account b',array('bank_id' => $id),'b.coa_id = a.coa_id');
        	echo json_encode($data);
	    }

		public function ajax_add_bank()
	    {
	        $this->_validate_bank();
	        $table = $this->input->post('tb');
	        $data = array(
	        		'bank_code' => $this->input->post('code'),
	        		'coa_id' => $this->input->post('acc_bank'),
	        		'branch_id' => $this->input->post('branch'),
	                'bank_name' => $this->input->post('nama'),
	                'bank_acc' => $this->input->post('rekening'),
	                'bank_accname' => $this->input->post('rekatsnama'),
	                'bank_prodtype' => $this->input->post('jenisproduk'),
	                'bank_branch' => $this->input->post('cabang'),
	                'bank_curr' => $this->input->post('kurensi'),
	                'bank_info' => $this->input->post('info'),
	                'bank_dtsts' => $this->input->post('sts')
	            );
	        $insert = $this->crud->save($table,$data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_update_bank()
	    {
	    	$this->_validate_bank();
	    	$table = $this->input->post('tb');
	    	$data = array(
	                'bank_code' => $this->input->post('code'),
	                'coa_id' => $this->input->post('acc_bank'),
	                'branch_id' => $this->input->post('branch'),
	                'bank_name' => $this->input->post('nama'),
	                'bank_acc' => $this->input->post('rekening'),
	                'bank_accname' => $this->input->post('rekatsnama'),
	                'bank_prodtype' => $this->input->post('jenisproduk'),
	                'bank_branch' => $this->input->post('cabang'),
	                'bank_curr' => $this->input->post('kurensi'),
	                'bank_info' => $this->input->post('info')
	            );
	    	$update = $this->crud->update($table,$data,array('bank_id' => $this->input->post('id')));
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_delete_bank($id)
	    {
	    	$data = array(
	                'bank_dtsts' => '0'
	            );
	    	$update = $this->crud->update('master_bank',$data,array('bank_id' => $id));
        	echo json_encode(array("status" => TRUE));
	    }

	    public function _validate_bank()
	    {
	    	$data = array();
	        $data['error_string'] = array();
	        $data['inputerror'] = array();
	        $data['status'] = TRUE;
	 
	        if($this->input->post('code') == '')
	        {
	            $data['inputerror'][] = 'code';
	            $data['error_string'][] = 'Kode Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('check') == '0')
	        {
	        	$this->form_validation->set_rules('code', 'Kode', 'is_unique[master_bank.BANK_CODE]');
	        	if($this->form_validation->run() == FALSE)
		        {
		        	$data['inputerror'][] = 'code';
		            $data['error_string'][] = 'Kode Tidak Boleh Sama';
		            $data['status'] = FALSE;
		        }
	        }
	        if($this->input->post('nama') == '')
	        {
	            $data['inputerror'][] = 'nama';
	            $data['error_string'][] = 'Nama Bank Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('acc_bank') == '')
	        {
	            $data['inputerror'][] = 'acc_bank';
	            $data['error_string'][] = 'Nama Akun Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('rekening') == '')
	        {
	            $data['inputerror'][] = 'rekening';
	            $data['error_string'][] = 'Nomor Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('rekatsnama') == '')
	        {
	            $data['inputerror'][] = 'rekatsnama';
	            $data['error_string'][] = 'Atas Nama Rekening Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('jenisproduk') == '')
	        {
	            $data['inputerror'][] = 'jenisproduk';
	            $data['error_string'][] = 'Jenis Produk Bank Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('cabang') == '')
	        {
	            $data['inputerror'][] = 'cabang';
	            $data['error_string'][] = 'Nama Cabang Bank Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('kurensi') == '')
	        {
	            $data['inputerror'][] = 'kurensi';
	            $data['error_string'][] = 'Kurensi Akun Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($this->input->post('info') == '')
	        {
	            $data['inputerror'][] = 'info';
	            $data['error_string'][] = 'Info Tidak Boleh Kosong';
	            $data['status'] = FALSE;
	        }
	        if($data['status'] === FALSE)
	        {
	            echo json_encode($data);
	            exit();
	        }
	    }

	    //Image Config
	    public function img_conf($name)
		{
			$nmfile='logo_'.$name.'_';
			$config['upload_path']='./assets/img/branchlogo/';			
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='3000';
			$config['file_name']=$nmfile;
			$this->upload->initialize($config);
		}


		//Image Config2
	    public function img_conf2($name)
		{
			$nmfile='TTD_'.$name.'_';
			$config['upload_path']='./assets/img/ttd/';			
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='3000';
			$config['file_name']=$nmfile;
			$this->upload->initialize($config);
		}
	}
?>