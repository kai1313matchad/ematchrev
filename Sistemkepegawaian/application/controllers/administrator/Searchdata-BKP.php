<?php
	defined('BASEPATH') OR exit('No direct script access allowed');	
	class Searchdata extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CRUD/M_crud','crud');
			$this->load->model('datatables/search/Dt_srchdept','s_dept');
			// $this->load->model('datatables/search/Dt_srchbank','s_bank');
			// $this->load->model('datatables/search/Dt_srchsupp','s_supp');
			// $this->load->model('datatables/search/Dt_srchcoa','s_coa');
			// $this->load->model('datatables/search/Dt_srchcoabybrc','s_coabybrc');
			// $this->load->model('datatables/search/Dt_srchcoacash','s_coacash');
			// $this->load->model('datatables/search/Dt_srchcoabank','s_coabank');
			// $this->load->model('datatables/search/Dt_srchlocation','s_location');
			// $this->load->model('datatables/search/Dt_srchcust','s_cust');
			// $this->load->model('datatables/search/Dt_srchcustall','s_custall');
			// $this->load->model('datatables/search/Dt_srchgovsts','s_govsts');
			// $this->load->model('datatables/search/Dt_srchpermittype','s_permittype');
			// $this->load->model('datatables/search/Dt_srchbranch','s_branch');
			// $this->load->model('datatables/search/Dt_srchinvtype','s_invtype');
			// $this->load->model('datatables/search/Dt_srchinv','s_inv');
			// $this->load->model('datatables/search/Dt_srchinvbyid','s_invbyid');
			// $this->load->model('datatables/search/Dt_srchappr','s_appr');
			// $this->load->model('datatables/search/Dt_srchgdforlgt','s_gdforlgt');
			// $this->load->model('datatables/search/Dt_srchgdbybrc','s_gdbybrc');
			// $this->load->model('datatables/search/Dt_srchapprbranch','s_apprbranch');
			// $this->load->model('datatables/search/Dt_srchapprbyclient','s_apprbyclient');
			// $this->load->model('datatables/search/Dt_srchapprbyclientbrc','s_apprbyclientbrc');
			// $this->load->model('datatables/search/Dt_srchapprbysts','s_apprbysts');
			// $this->load->model('datatables/search/Dt_srchbappbysts','s_bappbysts');
			// $this->load->model('datatables/search/Dt_srchbapplogbysts','s_bapplogbysts');
			// $this->load->model('datatables/search/Dt_srchpapprbysts','s_papprbysts');
			// $this->load->model('datatables/search/Dt_srchinvbysts','s_invbysts');
			$this->load->model('datatables/search/Dt_srchkrybysts','s_krybysts');
			// $this->load->model('datatables/search/Dt_srchpogabysts','s_pogabysts');
			// $this->load->model('datatables/search/Dt_srchprcbysts','s_prcbysts');
			// $this->load->model('datatables/search/Dt_srchprcsubbysts','s_prcsubbysts');
			// $this->load->model('datatables/search/Dt_srchprcsubpar','s_prcsubpar');
			// $this->load->model('datatables/search/Dt_srchprcgabysts','s_prcgabysts');
			// $this->load->model('datatables/search/Dt_srchrtprcgabysts','s_rtprcgabysts');
			// $this->load->model('datatables/search/Dt_srchprcgabysupp','s_prcgabysupp');
			// $this->load->model('datatables/search/Dt_srchrtprcbysts','s_rtprcbysts');
			// $this->load->model('datatables/search/Dt_srchusgbysts','s_usgbysts');
			// $this->load->model('datatables/search/Dt_srchrtusgbysts','s_rtusgbysts');
			// $this->load->model('datatables/search/Dt_srchcashin','s_cashin');
			// $this->load->model('datatables/search/Dt_srchcashinbysts','s_cashinbysts');
			// $this->load->model('datatables/search/Dt_srchcashout','s_cashout');
			// $this->load->model('datatables/search/Dt_srchcashoutbysts','s_cashoutbysts');
			// $this->load->model('datatables/search/Dt_srchbankin','s_bankin');
			// $this->load->model('datatables/search/Dt_srchbankinbysts','s_bankinbysts');
			// $this->load->model('datatables/search/Dt_srchbankout','s_bankout');
			// $this->load->model('datatables/search/Dt_srchbankoutbysts','s_bankoutbysts');
			// $this->load->model('datatables/search/Dt_srchgiroin','s_giroin');
			// $this->load->model('datatables/search/Dt_srchgiroinbysts','s_giroinbysts');
			// $this->load->model('datatables/search/Dt_srchgiroout','s_giroout');
			// $this->load->model('datatables/search/Dt_srchgirooutbysts','s_girooutbysts');
			// $this->load->model('datatables/search/Dt_srchgiroinrec','s_giroinrec');
			// $this->load->model('datatables/search/Dt_srchgirooutrec','s_girooutrec');
			// $this->load->model('datatables/search/Dt_srchbudgetbysts','s_budgetbysts');
			// $this->load->model('datatables/search/Dt_srchtaxinvoicebysts','s_taxinvoicebysts');
			// $this->load->model('datatables/search/Dt_srchjoubysts','s_joubysts');

			//update sistem jurnal posting ppn
			// $this->load->model('datatables/search/Dt_srchppnbysts','s_ppnbysts');
			// $this->load->model('datatables/search/Dt_srchinvppn','s_invppn');

			//update sistem jurnal pelunasan
			// $this->load->model('datatables/search/Dt_srchinvbybranch','s_invbybranch');
			// $this->load->model('datatables/search/Dt_srchadjbysts','s_adjbysts');

			// $this->load->model('datatables/search/Dt_srchusggabysts','s_usggabysts');
			// $this->load->model('datatables/search/Dt_srchadjgabysts','s_adjgabysts');

			// $this->load->model('datatables/search/Dt_srchrtusggabysts','s_rtusggabysts');

			// $this->load->model('datatables/search/Dt_srchsapprbysts','s_sapprbysts');

			// $this->load->model('datatables/search/Dt_srchsitactype','s_sitactype');
		}

		//Search Approval Cabang
		public function srch_appr()
		{

			//update sistem cari approval - Laporan Order Pembelian
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			//$list = $this->s_appr->get_datatables();
			$list = $this->s_appr->get_datatables($brc);

			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->APPR_BRCNAME;				
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprgb('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_appr->count_all(),


							//update sistem cari cabang - Laporan Kas
							// "recordsFiltered" => $this->s_appr->count_filtered(),
							"recordsFiltered" => $this->s_appr->count_filtered($brc),

							
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Approval Cabang
		public function srch_apprbranch()
		{
			$list = $this->s_apprbranch->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->APPR_CODE.' '.$dat->BRANCH_INIT;
				$row[] = $dat->APPR_BRCNAME;				
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprbranch('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbranch->count_all(),
							"recordsFiltered" => $this->s_apprbranch->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_apprbranch($id)
		{
			$this->db->from('trx_approvalbill a');
			$this->db->join('master_user b','b.user_id = a.user_id');
			$this->db->join('master_branch c','c.branch_id = b.branch_id');
			$this->db->where('a.appr_id',$id);
			$que = $this->db->get();
			$data = $que->row();
			echo json_encode($data);
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
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;

						$row[] = '<textarea class="form-control" name="note_'.$dat->PO_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_kryopen('."'".$dat->id_karyawan."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

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
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;

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
						$row[] = $dat->nomor_ktp;
						$row[] = $dat->nomor_hp;

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

		//Search Approval Global
		public function srch_apprglobal()
		{
			$id = '1';
			$br = $this->input->post('brch');

			//Update Tampil Kolom Alasan Open - Dt_srchapprbysts
			// $brc = 'd.branch_id = '.$br;
			$brc = 'f.branch_id = '.$br;


			$list = $this->s_apprbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->APPR_PO;
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprgb('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbysts->count_all(),
							"recordsFiltered" => $this->s_apprbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Approval Berdasarkan Client
		public function srch_apprbyclient($id)
		{
			$list = $this->s_apprbyclient->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->APPR_BRCNAME;				
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprbyclient('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbyclient->count_all(),
							"recordsFiltered" => $this->s_apprbyclient->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_apprbyclientbrc($id)
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->s_apprbyclientbrc->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->APPR_BRCNAME;				
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprbyclient('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbyclientbrc->count_all(),
							"recordsFiltered" => $this->s_apprbyclientbrc->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Approval Berdasarkan Status Untuk Edit dan Buka Record di halaman approval
		public function srch_apprbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_apprbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->APPR_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Keterangan
						$row[] = $dat->APPR_INFO;

						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISAPPR_INFO;

						
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_appredit('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->APPR_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Keterangan
						$row[] = $dat->APPR_INFO;


						//Update Tampil Kolom Alasan Open - Batton Open
						$row[] = $dat->HISAPPR_INFO;




						//Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<textarea class="form-control" name="note_'.$dat->APPR_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_appropen('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->APPR_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_appropen('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';






						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->APPR_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;

						//Update Tampil Kolom Keterangan
						$row[] = $dat->APPR_INFO;


						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISAPPR_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprchk('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->BRANCH_NAME;
						$row[] = $dat->APPR_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;



						//Update Tampil Kolom Keterangan
						$row[] = $dat->APPR_INFO;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISAPPR_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprapr('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbysts->count_all(),
							"recordsFiltered" => $this->s_apprbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_apprbystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			// $brc = ($this->input->post('chk') != '0')? 'd.branch_id = '.$br : 'd.branch_id = '.$br.' OR d.branch_id IS null';
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_apprbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->BRANCH_NAME;
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprchk('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbysts->count_all(),
							"recordsFiltered" => $this->s_apprbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Approval Berdasarkan Status Untuk halaman bapp
		public function srch_apprforbapp()
		{
			$id = '1';
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_apprbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->APPR_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_apprgb('."'".$dat->APPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_apprbysts->count_all(),
							"recordsFiltered" => $this->s_apprbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_apprgb($id)
		{
			$data = $this->crud->get_by_id('trx_approvalbill',array('appr_id' => $id));
			echo json_encode($data);
		}

		//Search BAPP Berdasarkan Status Untuk Edit dan Buka Record di halaman BAPP
		public function srch_bappbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_bappbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BAPP_CODE;
						$row[] = $dat->APPR_CODE;


						//update tambah kolom nomor bapp logistik
						$row[] = $dat->BALG_CODE;


						$row[] = $dat->BAPP_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISBAPP_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bappedit('."'".$dat->BAPP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BAPP_CODE;
						$row[] = $dat->APPR_CODE;

						//update tambah kolom nomor bapp logistik
						$row[] = $dat->BALG_CODE;


						$row[] = $dat->BAPP_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;

				 		//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISBAPP_INFO;


						$row[] = '<textarea class="form-control" name="note_'.$dat->BAPP_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bappopen('."'".$dat->BAPP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';


						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BAPP_CODE;
						$row[] = $dat->APPR_CODE;


						//update tambah kolom nomor bapp logistik
						$row[] = $dat->BALG_CODE;


						$row[] = $dat->BAPP_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;



						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISBAPP_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bappchk('."'".$dat->BAPP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BAPP_CODE;
						$row[] = $dat->APPR_CODE;

						//update tambah kolom nomor bapp logistik
						$row[] = $dat->BALG_CODE;

						
						$row[] = $dat->BAPP_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISBAPP_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bappapr('."'".$dat->BAPP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bappbysts->count_all(),
							"recordsFiltered" => $this->s_bappbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_bappbystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_bappbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BAPP_CODE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->BAPP_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bappchk('."'".$dat->BAPP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}			
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bappbysts->count_all(),
							"recordsFiltered" => $this->s_bappbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_bappgb($id)
		{
			$data = $this->crud->get_by_id('trx_bapp',array('bapp_id' => $id));
			echo json_encode($data);
		}

		//Search PO Berdasarkan Status Untuk Edit dan Buka Record di halaman PO Logistik
		public function srch_pobysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_pobysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PO_DATE;
						$row[] = $dat->LOC_NAME;
						$row[] = $dat->SUPP_NAME;


						//Update Tampil Harga Vendor - Botton Edite
						$row[] = 'Rp '.number_format($dat->PO_GTOTAL);


						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISPO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_polgtedit('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PO_DATE;
						$row[] = $dat->LOC_NAME;
						$row[] = $dat->SUPP_NAME;



						//Update Tampil Harga Vendor - Botton Open
						$row[] = 'Rp '.number_format($dat->PO_GTOTAL);



						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISPO_INFO;
						// $row[] ='<textarea class="form-control" name="note_'.$dat->PO_ID.'"></textarea>';



						//Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_polgtopen('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->PO_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_polgtopen('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';









						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PO_DATE;
						$row[] = $dat->LOC_NAME;
						$row[] = $dat->SUPP_NAME;


						//Update Tampil Harga Vendor - Botton Lihat
						$row[] = 'Rp '.number_format($dat->PO_GTOTAL);



						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISPO_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_polgtchk('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PO_DATE;
						$row[] = $dat->LOC_NAME;
						$row[] = $dat->SUPP_NAME;



						//Update Tampil Harga Vendor - Botton Approve
						$row[] = 'Rp '.number_format($dat->PO_GTOTAL);
						

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPO_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_polgtapr('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_pobysts->count_all(),
							"recordsFiltered" => $this->s_pobysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_pobystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_pobysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PO_CODE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->PO_DATE;
				$row[] = $dat->LOC_NAME;
				$row[] = $dat->SUPP_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_polgtchk('."'".$dat->PO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_pobysts->count_all(),
							"recordsFiltered" => $this->s_pobysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_krygb($id)
		{
			$data = $this->crud->get_by_id('karyawan',array('id_karyawan' => $id));
			echo json_encode($data);
		}

		//Search Pembelian Berdasarkan Status Untuk Edit dan Buka Record di halaman Pembelian Logistik
		public function srch_prcbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_prcbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;

						

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRC_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prclgtedit('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISPRC_INFO;


						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->PRC_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prclgtopen('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prclgtopen('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';



						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISPRC_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prclgtchk('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRC_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prclgtapr('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcbysts->count_all(),
							"recordsFiltered" => $this->s_prcbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_prcbystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_prcbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRC_CODE;
				$row[] = $dat->PO_CODE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->PRC_DATE;
				$row[] = $dat->LOC_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prclgtchk('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcbysts->count_all(),
							"recordsFiltered" => $this->s_prcbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_prclgtgb($id)
		{
			$data = $this->crud->get_by_id('trx_procurement',array('prc_id' => $id));
			echo json_encode($data);
		}

		public function srch_prcsubbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_prcsubbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRC_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcsublgtedit('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRC_INFO;


						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcsublgtopen('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->PRC_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcsublgtopen('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRC_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcsublgtchk('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRC_CODE;
						$row[] = $dat->PO_CODE;
						$row[] = $dat->APPR_CODE;
						$row[] = $dat->PRC_DATE;
						$row[] = $dat->LOC_NAME;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRC_INFO;

						
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcsublgtapr('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcsubbysts->count_all(),
							"recordsFiltered" => $this->s_prcsubbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_prcsubpar()
		{
			$id = '1';
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_prcsubpar->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat)
			{
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRC_CODE;
				$row[] = $dat->PO_CODE;
				$row[] = $dat->APPR_CODE;
				$row[] = $dat->PRC_DATE;
				$row[] = $dat->LOC_NAME;


				//Update Tampil Kolom Alasan Open
				$row[] = $dat->HISPRC_INFO;


				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcsubpar('."'".$dat->PRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcsubpar->count_all(),
							"recordsFiltered" => $this->s_prcsubpar->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Retur Pembelian Berdasarkan Status Untuk Edit dan Buka Record di halaman Retur Pembelian Logistik
		public function srch_rtprcbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			// $brc = ($this->input->post('chk') != '0')? 'e.branch_id = '.$br : 'e.branch_id = '.$br.' OR e.branch_id IS null';
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_rtprcbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			if($this->input->post('chk') != '0')
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->RTPRC_CODE;
					$row[] = $dat->PRC_CODE;
					$row[] = $dat->PO_CODE;
					$row[] = $dat->RTPRC_DATE;
					$row[] = $dat->APPR_CODE;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprclgtopen('."'".$dat->RTPRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			else
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->RTPRC_CODE;
					$row[] = $dat->PRC_CODE;
					$row[] = $dat->PO_CODE;
					$row[] = $dat->RTPRC_DATE;
					$row[] = $dat->APPR_CODE;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprclgtedit('."'".$dat->RTPRC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_rtprcbysts->count_all(),
							"recordsFiltered" => $this->s_rtprcbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_rtprclgtgb($id)
		{
			$data = $this->crud->get_by_id('procurement_ret',array('rtprc_id' => $id));
			echo json_encode($data);
		}

		//Search Pemakaian Berdasarkan Status Untuk Edit dan Buka Record di halaman Pemakaian Logistik
		public function srch_usgbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			// $brc = ($this->input->post('chk') != '0')? 'd.branch_id = '.$br : 'd.branch_id = '.$br.' OR d.branch_id IS null';
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_usgbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			if($this->input->post('chk') != '0')
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->USG_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->USG_DATE;
					$row[] = $dat->LOC_NAME;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usglgtopen('."'".$dat->USG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			else
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->USG_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->USG_DATE;
					$row[] = $dat->LOC_NAME;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usglgtedit('."'".$dat->USG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_usgbysts->count_all(),
							"recordsFiltered" => $this->s_usgbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_usglgtgb($id)
		{
			$data = $this->crud->get_by_id('trx_usage',array('usg_id' => $id));
			echo json_encode($data);
		}

		//Search Retur Pembelian Berdasarkan Status Untuk Edit dan Buka Record di halaman Retur Pembelian Logistik
		public function srch_rtusgbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			// $brc = ($this->input->post('chk') != '0')? 'd.branch_id = '.$br : 'd.branch_id = '.$br.' OR d.branch_id IS null';
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_rtusgbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			if($this->input->post('chk') != '0')
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->RTUSG_CODE;
					$row[] = $dat->USG_CODE;
					$row[] = $dat->RTUSG_DATE;
					$row[] = $dat->APPR_CODE;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusglgtopen('."'".$dat->RTUSG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			else
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->RTUSG_CODE;
					$row[] = $dat->USG_CODE;
					$row[] = $dat->RTUSG_DATE;
					$row[] = $dat->APPR_CODE;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusglgtedit('."'".$dat->RTUSG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_rtusgbysts->count_all(),
							"recordsFiltered" => $this->s_rtusgbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_rtusglgtgb($id)
		{
			$data = $this->crud->get_by_id('usage_ret',array('rtusg_id' => $id));
			echo json_encode($data);
		}


        //Search Penyesuaian Barang Berdasarkan Status Untuk Edit dan Buka Record di halaman Penyesuaian Barang Logistik
		public function srch_adjustbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			// $brc = ($this->input->post('chk') != '0')? 'd.branch_id = '.$br : 'd.branch_id = '.$br.' OR d.branch_id IS null';
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_adjbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			if($this->input->post('chk') != '0')
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->ADJ_CODE;
					$row[] = $dat->ADJ_DATE;
					$row[] = $dat->ADJ_INFO;
					
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjlgtopen('."'".$dat->ADJ_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			else
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->ADJ_CODE;
					$row[] = $dat->ADJ_DATE;
					$row[] = $dat->ADJ_INFO;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjlgtedit('."'".$dat->ADJ_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_adjbysts->count_all(),
							"recordsFiltered" => $this->s_adjbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}
		
		// <!-- Update sistem penyesuaian barang logistik -->
		public function pick_adjlgtgb($id)
		{
			$data = $this->crud->get_by_id('trx_adjustment',array('adj_id' => $id));
			echo json_encode($data);
		}

		//Search BAPP Logistik Berdasarkan Status Untuk Edit dan Buka Record di halaman BAPP
		public function srch_bapplogbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_bapplogbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat)
					{
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BALG_CODE;
						$row[] = $dat->BALG_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;



						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISBALG_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bapplogedit('."'".$dat->BALG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat)
					{
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BALG_CODE;
						$row[] = $dat->BALG_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;



						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISBALG_INFO;


						//Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bapplogopen('."'".$dat->BALG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->BALG_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bapplogopen('."'".$dat->BALG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';





						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat)
					{
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BALG_CODE;
						$row[] = $dat->BALG_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;



						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISBALG_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bapplogchk('."'".$dat->BALG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat)
					{
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BALG_CODE;
						$row[] = $dat->BALG_DATE;
						$row[] = $dat->CUST_NAME;
						$row[] = $dat->LOC_NAME;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISBALG_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bapplogapr('."'".$dat->BALG_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bapplogbysts->count_all(),
							"recordsFiltered" => $this->s_bapplogbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_bapploggb($id)
		{
			$data = $this->crud->get_by_id('trx_bapplog',array('balg_id' => $id));
			echo json_encode($data);
		}

		//Search PO Berdasarkan Status Untuk Edit dan Buka Record di halaman PO GA
		public function srch_pogabysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_pogabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->POGA_DATE;
						$row[] = $dat->SUPP_NAME;

						//Update Tampil Kolom Alasan Open - Botton Edit
						$row[] = $dat->HISPOGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pogaedit('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->POGA_DATE;
						$row[] = $dat->SUPP_NAME;

						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISPOGA_INFO;



						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->POGA_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pogaopen('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pogaopen('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';



						
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->POGA_DATE;
						$row[] = $dat->SUPP_NAME;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISPOGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pogachk('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->POGA_DATE;
						$row[] = $dat->SUPP_NAME;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPOGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pogaapr('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_pogabysts->count_all(),
							"recordsFiltered" => $this->s_pogabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_pogabystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_pogabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->POGA_CODE;
				$row[] = $dat->POGA_DATE;
				$row[] = $dat->SUPP_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pogachk('."'".$dat->POGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_pogabysts->count_all(),
							"recordsFiltered" => $this->s_pogabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_pogagb($id)
		{
			$data = $this->crud->get_by_id('trx_po_ga',array('poga_id' => $id));
			echo json_encode($data);
		}

		//Search Pembelian Berdasarkan Status Untuk Edit dan Buka Record di halaman Pembelian GA
		public function srch_prcgabysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_prcgabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->PRCGA_DATE;


						//Update Tampil Kolom Alasan Open - Botton Edit
						$row[] = $dat->HISPRCGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgaedit('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->PRCGA_DATE;

						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISPRCGA_INFO;


						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->PRCGA_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgaopen('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgaopen('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';





						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->PRCGA_DATE;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISPRCGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgachk('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->POGA_CODE;
						$row[] = $dat->PRCGA_DATE;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISPRCGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgaapr('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcgabysts->count_all(),
							"recordsFiltered" => $this->s_prcgabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_prcgabystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_prcgabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRCGA_CODE;
				$row[] = $dat->POGA_CODE;
				$row[] = $dat->PRCGA_DATE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgachk('."'".$dat->PRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcgabysts->count_all(),
							"recordsFiltered" => $this->s_prcgabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_prcgagb($id)
		{
			$data = $this->crud->get_by_id('trx_prc_ga',array('prcga_id' => $id));
			echo json_encode($data);
		}

		public function srch_rtprcgabysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_rtprcgabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTPRCGA_CODE;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->RTPRCGA_DATE;


						//Update Tampil Kolom Alasan Open - Botton Edit
						$row[] = $dat->HISRTPRCGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprcgaedit('."'".$dat->RTPRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTPRCGA_CODE;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->RTPRCGA_DATE;

						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISRTPRCGA_INFO;



						



						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->RTPRCGA_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprcgaopen('."'".$dat->RTPRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprcgaopen('."'".$dat->RTPRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTPRCGA_CODE;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->RTPRCGA_DATE;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISRTPRCGA_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprcgachk('."'".$dat->RTPRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTPRCGA_CODE;
						$row[] = $dat->PRCGA_CODE;
						$row[] = $dat->RTPRCGA_DATE;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISRTPRCGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtprcgaapr('."'".$dat->RTPRCGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_rtprcgabysts->count_all(),
							"recordsFiltered" => $this->s_rtprcgabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_rtprcgagb($id)
		{
			$data = $this->crud->get_by_id('prcga_ret',array('rtprcga_id' => $id));
			echo json_encode($data);
		}

		//Search Pemakaian Berdasarkan Status Untuk Edit dan Buka Record di halaman Retur Pemakaian GA
		public function srch_usggabysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_usggabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->USGGA_CODE;
						$row[] = $dat->USGGA_DATE;
						$row[] = $dat->USGGA_INFO;


						//Update Tampil Kolom Alasan Open - Botton Edit
						$row[] = $dat->HISUSGGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usggaedit('."'".$dat->USGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->USGGA_CODE;
						$row[] = $dat->USGGA_DATE;
						$row[] = $dat->USGGA_INFO;


						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISUSGGA_INFO;


						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->USGGA_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usggaopen('."'".$dat->USGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usggaopen('."'".$dat->USGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->USGGA_CODE;
						$row[] = $dat->USGGA_DATE;
						$row[] = $dat->USGGA_INFO;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISUSGGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usggachk('."'".$dat->USGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->USGGA_CODE;
						$row[] = $dat->USGGA_DATE;
						$row[] = $dat->USGGA_INFO;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISUSGGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_usggaapr('."'".$dat->USGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_usggabysts->count_all(),
							"recordsFiltered" => $this->s_usggabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_usggagb($id)
		{
			$data = $this->crud->get_by_id('trx_usage_ga',array('usgga_id' => $id));
			echo json_encode($data);
		}

		public function srch_rtusggabysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_rtusggabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTUSGGA_CODE;
						$row[] = $dat->RTUSGGA_DATE;
						$row[] = $dat->RTUSGGA_INFO;


						//Update Tampil Kolom Alasan Open - Botton Edit
						$row[] = $dat->HISRTUSGGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusggaedit('."'".$dat->RTUSGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTUSGGA_CODE;
						$row[] = $dat->RTUSGGA_DATE;
						$row[] = $dat->RTUSGGA_INFO;



						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISRTUSGGA_INFO;



						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->RTUSGGA_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusggaopen('."'".$dat->RTUSGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusggaopen('."'".$dat->RTUSGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						



						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTUSGGA_CODE;
						$row[] = $dat->RTUSGGA_DATE;
						$row[] = $dat->RTUSGGA_INFO;



						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISRTUSGGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusggachk('."'".$dat->RTUSGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->RTUSGGA_CODE;
						$row[] = $dat->RTUSGGA_DATE;
						$row[] = $dat->RTUSGGA_INFO;



						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISRTUSGGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_rtusggaapr('."'".$dat->RTUSGGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_rtusggabysts->count_all(),
							"recordsFiltered" => $this->s_rtusggabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_rtusggagb($id)
		{
			$data = $this->crud->get_by_id('usage_ga_ret',array('rtusgga_id' => $id));
			echo json_encode($data);
		}

		//Search Penyesuaian Berdasarkan Status Untuk Edit dan Buka Record di halaman Penyesuaian GA
		public function srch_adjgabysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_adjgabysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->ADJGA_CODE;
						$row[] = $dat->ADJGA_DATE;
						$row[] = $dat->ADJGA_INFO;

						//Update Tampil Kolom Alasan Open - Botton Edit
						$row[] = $dat->HISADJGA_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjgaedit('."'".$dat->ADJGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->ADJGA_CODE;
						$row[] = $dat->ADJGA_DATE;
						$row[] = $dat->ADJGA_INFO;

						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISADJGA_INFO;






						//Kolom Text Input Alasan Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->ADJGA_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjgaopen('."'".$dat->ADJGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjgaopen('."'".$dat->ADJGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->ADJGA_CODE;
						$row[] = $dat->ADJGA_DATE;
						$row[] = $dat->ADJGA_INFO;


						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISADJGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjgachk('."'".$dat->ADJGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->ADJGA_CODE;
						$row[] = $dat->ADJGA_DATE;
						$row[] = $dat->ADJGA_INFO;


						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISADJGA_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_adjgaapr('."'".$dat->ADJGA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_adjgabysts->count_all(),
							"recordsFiltered" => $this->s_adjgabysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_adjgagb($id)
		{
			$data = $this->crud->get_by_id('trx_adj_ga',array('adjga_id' => $id));
			echo json_encode($data);
		}

		//Search Master Departemen
		public function srch_dept()
		{

			$br = $this->input->post('brch');
			$brc = 'branch_id = '.$br;

			$list = $this->s_dept->get_datatables($brc);
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
							"recordsFiltered" => $this->s_dept->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Master Jenis Pemerintahan
		public function srch_govsts()
		{
			$list = $this->s_govsts->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->GOV_CODE;
				$row[] = $dat->GOV_NAME;
				$row[] = $dat->GOV_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_govsts('."'".$dat->GOV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_govsts->count_all(),
							"recordsFiltered" => $this->s_govsts->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_govsts($id)
		{
			$data = $this->crud->get_by_id('master_gov_type',array('gov_id' => $id));
			echo json_encode($data);
		}

		//Search Persetujuan Ijin Berdasarkan Status Untuk Edit dan Buka Record di halaman Persetujuan Ijin
		public function srch_papprbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			// $brc = ($this->input->post('chk') != '0')? 'e.branch_id = '.$br : 'e.branch_id = '.$br.' OR e.branch_id IS null';
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_papprbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			// if($this->input->post('chk') != '0')
			// {
			// 	foreach ($list as $dat) {
			// 		$no++;
			// 		$row = array();
			// 		$row[] = $no;
			// 		$row[] = $dat->PAPPR_CODE;
			// 		$row[] = $dat->APPR_CODE;
			// 		$row[] = $dat->PAPPR_DATE;
			// 		$row[] = $dat->CUST_NAME;
			// 		$row[] = $dat->LOC_NAME;
			// 		$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pappropen('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
			// 		$data[] = $row;
			// 	}
			// }
			// else
			// {
			// 	foreach ($list as $dat) {
			// 		$no++;
			// 		$row = array();
			// 		$row[] = $no;
			// 		$row[] = $dat->PAPPR_CODE;
			// 		$row[] = $dat->APPR_CODE;
			// 		$row[] = $dat->PAPPR_DATE;
			// 		$row[] = $dat->CUST_NAME;
			// 		$row[] = $dat->LOC_NAME;
			// 		$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pappredit('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
			// 		$data[] = $row;
			// 	}
			// }
			//Update sistem PERMIT - fungsi edit, lihat, approve, open
			switch ($chk) {
				case '0':
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->PAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->PAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->PAPPR_INFO;

					//Update Tampil Kolom Alasan Open - Botton Edit
					$row[] = $dat->HISPAPPR_INFO;		



					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pappredit('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
					}
					break;
				case '1':
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->PAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->PAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->PAPPR_INFO;

				    //Update Tampil Kolom Alasan Open - Botton Open
					$row[] = $dat->HISPAPPR_INFO;


					// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pappropen('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$row[] = '<textarea class="form-control" name="note_'.$dat->PAPPR_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pappropen('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';



					$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->PAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->PAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->PAPPR_INFO;

					//Update Tampil Kolom Alasan Open - Botton Lihat
					$row[] = $dat->HISPAPPR_INFO;


					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_papprchk('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->PAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->PAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->PAPPR_INFO;

					
					//Update Tampil Kolom Alasan Open - Botton Approve
					$row[] = $dat->HISPAPPR_INFO;


					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_papprapr('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_papprbysts->count_all(),
							"recordsFiltered" => $this->s_papprbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_papprgb($id)
		{
			$data = $this->crud->get_by_id('trx_permitappr',array('pappr_id' => $id));
			echo json_encode($data);
		}

		public function pick_sapprgb($id)
		{
			$data = $this->crud->get_by_id('trx_sitacappr',array('sappr_id' => $id));
			echo json_encode($data);
		}

		//Search Invoice Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_invbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_invbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->INV_CODE;
						$row[] = $dat->INC_CODE.' - '.$dat->INC_NAME;
						$row[] = $dat->INV_DATE;
						$row[] = $dat->CUST_NAME;

                        //Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISINV_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invedit('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->INV_CODE;
						$row[] = $dat->INC_CODE.' - '.$dat->INC_NAME;
						$row[] = $dat->INV_DATE;
						$row[] = $dat->CUST_NAME;


						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISINV_INFO;

                        //Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invopen('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->INV_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invopen('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';



						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->INV_CODE;
						$row[] = $dat->INC_CODE.' - '.$dat->INC_NAME;
						$row[] = $dat->INV_DATE;
						$row[] = $dat->CUST_NAME;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISINV_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invchk('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;

						//Update tambah tombol Approve dan DisApprove
						//----------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//----------------------------------------------------------------------------

						$row[] = $dat->INV_CODE;
						$row[] = $dat->INC_CODE.' - '.$dat->INC_NAME;
						$row[] = $dat->INV_DATE;
						$row[] = $dat->CUST_NAME;

						//Update Tampil Kolom Alasan Open - Approve
						$row[] = $dat->HISINV_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invapr('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_invbysts->count_all(),
							"recordsFiltered" => $this->s_invbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}


		public function srch_invbystsapr($id)
		{
			// $id = $this->input->post('sts');
			// $br = $this->input->post('user_branch');
			// $brc = 'a.branch_id = '.$id;
			// $chk = $this->input->post('chk');
			$data = array();
			$data = $this->db->join('master_branch f','f.branch_id = a.branch_id','left')->join('master_user e','e.user_id = a.user_id','left')->join('his_inv d','d.inv_id = a.inv_id','left')->join('master_customer c','c.cust_id = a.cust_id','left')->join('invoice_type b','b.inc_id = a.inc_id','left')->where('d.hisinv_id in (select max(hisinv_id) from his_inv group by inv_id)')->where('a.inv_sts','2')->where('a.branch_id',$id)->order_by('a.inv_code','desc')->get('trx_invoice a')->result();
			echo json_encode($data);
		}

		public function srch_invbystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_invbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->INV_CODE;
				$row[] = $dat->INC_CODE.' - '.$dat->INC_NAME;
				$row[] = $dat->INV_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invchk('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_invbysts->count_all(),
							"recordsFiltered" => $this->s_invbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_invgb($id)
		{
			$data = $this->crud->get_by_id('trx_invoice',array('inv_id' => $id));
			echo json_encode($data);
		}

		//Ambil data faktur pajak
		public function pick_taxinv($id)
		{
			$data = $this->crud->get_by_id('trx_tax_invoice',array('inv_id' => $id));
			echo json_encode($data);
		}

		//Search Master Bank
		public function srch_bank()
		{
			$list = $this->s_bank->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->BANK_CODE;
				$row[] = $dat->BANK_NAME;				
				$row[] = $dat->BANK_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bank('."'".$dat->BANK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bank->count_all(),
							"recordsFiltered" => $this->s_bank->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_bank($id)
		{
			$data = $this->crud->get_by_id('master_bank',array('bank_id' => $id));
			echo json_encode($data);
		}

		//Search Master Supplier
		public function srch_supp()
		{
			$list = $this->s_supp->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->SUPP_CODE;
				$row[] = $dat->SUPP_NAME;				
				$row[] = $dat->SUPP_ADDRESS.','.$dat->SUPP_CITY;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_supp('."'".$dat->SUPP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_supp->count_all(),
							"recordsFiltered" => $this->s_supp->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_supp($id)
		{
			$data = $this->crud->get_by_id('master_supplier',array('supp_id' => $id));
			echo json_encode($data);
		}

		//Search Master Location
		public function srch_loca()
		{
			$list = $this->s_location->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->LOC_CODE;
				$row[] = $dat->LOC_NAME;				
				$row[] = $dat->LOC_ADDRESS;
				$row[] = $dat->LOC_CITY;
				$row[] = $dat->LOC_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_loc('."'".$dat->LOC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_location->count_all(),
							"recordsFiltered" => $this->s_location->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_loca($id)
		{
			$data = $this->crud->get_by_id('master_supplier',array('supp_id' => $id));
			echo json_encode($data);
		}

		//Search Master Customer
		public function srch_cust()
		{
			$list = $this->s_cust->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CUST_CODE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->CUST_ADDRESS;				
				$row[] = $dat->CUST_CITY;				
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cust('."'".$dat->CUST_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cust->count_all(),
							"recordsFiltered" => $this->s_cust->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_cust($id)
		{
			$data = $this->crud->get_by_id('master_customer',array('cust_id' => $id));
        	echo json_encode($data);
		}

		public function pick_custint($id)
		{
			$data = $this->crud->get_by_id2('master_cust_intern a','master_person b',array('a.cstin_id'=>$id),'a.person_id = b.person_id');
        	echo json_encode($data);
		}

		//Search Master Customer All
		public function srch_custall1()
		{
			$list = $this->s_custall->get_datatables();
			// $que = $this->db->query("select cust_code as code, cust_name as name, cust_address as address from master_customer where cust_dtsts = '1' union all select a.cstin_code as code, b.person_name as name, b.person_address as address from master_cust_intern a join master_person b on b.person_id = a.person_id;");
			// $list = $que->result();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->code;
				$row[] = $dat->name;
				$row[] = $dat->address;
				$row[] = '<a href="javascript:void(0)" title="Lihat Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cust('."'".$dat->code."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_custall->count_all(),
							"recordsFiltered" => $this->s_custall->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_custall()
		{
			$que = $this->db->query("select cust_code as code, cust_name as name, cust_address as address from master_customer where cust_dtsts = '1' union all select a.cstin_code as code, b.person_name as name, b.person_address as address from master_cust_intern a join master_person b on b.person_id = a.person_id;");
			$list = $que->result();
			echo json_encode($list);
		}

		//Search Master Cabang
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

		public function pick_branch($id)
		{
			$data = $this->crud->get_by_id('master_branch',array('branch_id' => $id));
			echo json_encode($data);
		}

		public function pick_invppn($id)
		{
			//$data = $this->s_invppn->get_datatables($id);
			$data = $this->crud->get_by_id('trx_invoice',array('inv_id' => $id));
			echo json_encode($data);
		}

		//Search Master COA
		public function srch_coa()
		{



			//update sistem cari cabang - Laporan Kas
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			//$list = $this->s_coa->get_datatables();
			$list = $this->s_coa->get_datatables($brc);




			
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_coagb('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_coa->count_all(),




							//update sistem cari cabang - Laporan Kas
							// "recordsFiltered" => $this->s_coa->count_filtered(),
							"recordsFiltered" => $this->s_coa->count_filtered($brc),



							
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_coabybrc()
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->s_coabybrc->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_coagb('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_coabybrc->count_all(),
							"recordsFiltered" => $this->s_coabybrc->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_coagb($id)
		{
			$data = $this->crud->get_by_id('chart_of_account',array('coa_id' => $id));
			echo json_encode($data);
		}

		public function srch_coa_cash()
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->s_coacash->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_coacash('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_coacash->count_all(),
							"recordsFiltered" => $this->s_coacash->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_coa_bank()
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->s_coabank->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->COA_ACC;
				$row[] = $dat->COA_ACCNAME;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_coabank('."'".$dat->COA_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_coabank->count_all(),
							"recordsFiltered" => $this->s_coabank->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Transaksi Invoice
		public function srch_inv()
		{
			$list = $this->s_inv->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->INV_CODE;
				$row[] = $dat->INV_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->INV_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_inv('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_inv->count_all(),
							"recordsFiltered" => $this->s_inv->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_invbyid($id)
		{
			$list = $this->s_invbyid->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->INV_CODE;
				$row[] = $dat->INV_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->INV_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_inv('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_invbyid->count_all($id),
							"recordsFiltered" => $this->s_invbyid->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_invoice($id)
		{
			$data = $this->crud->get_by_id('trx_invoice',array('inv_id' => $id));
			echo json_encode($data);
		}

		public function pick_inv($id)
		{
			$data = $this->crud->get_by_id('trx_invoice',array('inv_id' => $id));
			echo json_encode($data);
		}

		//Search Jenis Invoice
		public function srch_invtype()
		{
			$brc = $this->session->userdata('user_branch');
			$list = $this->s_invtype->get_datatables($brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->INC_CODE;
				$row[] = $dat->INC_NAME;				
				$row[] = $dat->INC_ACCRCVNAME;
				$row[] = $dat->INC_ACCINCNAME;;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_invtype('."'".$dat->INC_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_invtype->count_all(),
							"recordsFiltered" => $this->s_invtype->count_filtered($brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_invtype($id)
		{
			$data = $this->crud->get_by_id('invoice_type',array('inc_id' => $id));
			echo json_encode($data);
		}

		//Search Master Permit Type
		public function srch_permittype()
		{
			$list = $this->s_permittype->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->PRMTTYP_CODE;
				$row[] = $dat->PRMTTYP_NAME;				
				$row[] = $dat->PRMTTYP_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_permittype('."'".$dat->PRMTTYP_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_permittype->count_all(),
							"recordsFiltered" => $this->s_permittype->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_permittype($id)
		{
			$data = $this->crud->get_by_id('master_permit_type',array('prmttyp_id' => $id));
			echo json_encode($data);
		}

		//Search Master Permit Type
		public function srch_sitactype()
		{
			$list = $this->s_sitactype->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->SITACTYPE_CODE;
				$row[] = $dat->SITACTYPE_NAME;				
				$row[] = $dat->SITACTYPE_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_permittype('."'".$dat->SITACTYPE_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_sitactype->count_all(),
							"recordsFiltered" => $this->s_sitactype->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_sitactype($id)
		{
			$data = $this->crud->get_by_id('master_sitac_type',array('sitactype_id' => $id));
			echo json_encode($data);
		}

		//Search Kas Masuk
		public function srch_cashin()
		{
			$list = $this->s_cashin->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->CSH_CODE;
				$row[] = $dat->CSH_DATE;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->CSH_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashin('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cashin->count_all(),
							"recordsFiltered" => $this->s_cashin->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Kas Keluar
		public function srch_cashout()
		{
			$list = $this->s_cashout->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->CSHO_CODE;
				$row[] = $dat->CSHO_DATE;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->CSHO_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashout('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cashout->count_all(),
							"recordsFiltered" => $this->s_cashout->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Bank Masuk
		public function srch_bankin()
		{
			$list = $this->s_bankin->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->BNK_CODE;
				$row[] = $dat->BNK_DATE;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->BNK_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankin('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bankin->count_all(),
							"recordsFiltered" => $this->s_bankin->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Bank Keluar
		public function srch_bankout()
		{
			$list = $this->s_bankout->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->BNKO_CODE;
				$row[] = $dat->BNKO_DATE;
				$row[] = $dat->COA_ACC.' - '.$dat->COA_ACCNAME;
				$row[] = $dat->BNKO_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankout('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bankout->count_all(),
							"recordsFiltered" => $this->s_bankout->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Giro Masuk
		public function srch_giroin()
		{
			$list = $this->s_giroin->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->GRIN_CODE;
				$row[] = $dat->GRIN_DATE;
				$row[] = $dat->BANK_NAME;
				$row[] = $dat->GRIN_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroin('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_giroin->count_all(),
							"recordsFiltered" => $this->s_giroin->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Giro Keluar
		public function srch_giroout()
		{
			$list = $this->s_giroout->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->GROUT_CODE;
				$row[] = $dat->GROUT_DATE;
				$row[] = $dat->BANK_NAME;
				$row[] = $dat->GROUT_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroout('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_giroout->count_all(),
							"recordsFiltered" => $this->s_giroout->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Record Giro Masuk
		public function srch_giroinrec()
		{
			$list = $this->s_giroinrec->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKTRX_CODE;
				$row[] = $dat->BNKTRX_DATE;
				$row[] = $dat->GIR_LIQSTS;
				$row[] = $dat->GIR_BLCSTS;
				$row[] = $dat->BNKTRX_AMOUNT;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroinrec('."'".$dat->GIR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_giroinrec->count_all(),
							"recordsFiltered" => $this->s_giroinrec->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Record Giro Keluar
		public function srch_girooutrec()
		{
			$list = $this->s_girooutrec->get_datatables();
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKTRXO_CODE;
				$row[] = $dat->BNKTRXO_DATE;
				$row[] = $dat->GIR_LIQSTS;
				$row[] = $dat->GIR_BLCSTS;
				$row[] = $dat->BNKTRXO_AMOUNT;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_girooutrec('."'".$dat->GOR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_girooutrec->count_all(),
							"recordsFiltered" => $this->s_girooutrec->count_filtered(),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Persetujuan Ijin
		public function pick_permitappr($id)
		{
			$data = $this->crud->get_by_id('trx_permitappr',array('pappr_id' => $id));

			echo json_encode($data);
		}

		//Site Acquisition
		public function pick_sitacappr($id)
		{
			$data = $this->crud->get_by_id('trx_sitacappr',array('sappr_id' => $id));

			echo json_encode($data);
		}

		//Search Barang Untuk Logistik
		public function srch_gdforlgt($suppid,$brcid)
		{
			$list = $this->s_gdforlgt->get_datatables($suppid,$brcid);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_NAME;
				$row[] = $dat->GD_UNIT;
				$row[] = $dat->GD_MEASURE;
				$row[] = $dat->GD_INFO;
				$row[] = $dat->GD_PRICE.' / '.$dat->GD_MEASURE.' '.$dat->GD_UNIT;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_brg('."'".$dat->GD_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_gdforlgt->count_all(),
							"recordsFiltered" => $this->s_gdforlgt->count_filtered($suppid,$brcid),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Barang Berdasarkan Cabang
		public function srch_gdbybrc($brcid)
		{
			$list = $this->s_gdbybrc->get_datatables($brcid);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->GD_CODE;
				$row[] = $dat->GD_NAME;
				$row[] = 'Per '.$dat->GD_UNIT.' '.$dat->GD_MEASURE;
				$row[] = $dat->GD_STOCK;
				$row[] = $dat->GD_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_brg('."'".$dat->GD_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_gdbybrc->count_all(),
							"recordsFiltered" => $this->s_gdbybrc->count_filtered($brcid),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Kas Masuk Berdasarkan Status Untuk Edit dan Buka Record di halaman Kas Masuk
		public function srch_cash_in_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_cashinbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->CSH_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->CSH_DATE;
					    $row[] = $dat->CSH_INFO;

					    //Update Tampil Kolom Alasan Open - Botton edite
						$row[] = $dat->HISCHIN_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashinedit('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->CSH_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->CSH_DATE;
					    $row[] = $dat->CSH_INFO;

						//Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISCHIN_INFO;

						//Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashinopen('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->CSH_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashinopen('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';


						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->CSH_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->CSH_DATE;
						$row[] = $dat->CSH_INFO;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISCHIN_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashinchk('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;


						//Update tambah tombol Approve dan DisApprove
						//----------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//----------------------------------------------------------------------------



						$row[] = $dat->CSH_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->CSH_DATE;
						$row[] = $dat->CSH_INFO;

						//Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISCHIN_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashinapr('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cashinbysts->count_all(),
							"recordsFiltered" => $this->s_cashinbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_cash_in_bystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_cashinbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CSH_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->CSH_DATE;				
				$row[] = $dat->CSH_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashinchk('."'".$dat->CSH_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cashinbysts->count_all(),
							"recordsFiltered" => $this->s_cashinbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Invoice Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_cash_out_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_cashoutbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->CSHO_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->CSHO_DATE;
					    $row[] = $dat->CSHO_INFO;

					    //Update Tampil Kolom Alasan Open - Botton edite
						$row[] = $dat->HISCSHO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashoutedit('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->CSHO_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->CSHO_DATE;
					    $row[] = $dat->CSHO_INFO;

					    //Update Tampil Kolom Alasan Open - Botton open
						$row[] = $dat->HISCSHO_INFO;

						//Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashoutopen('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->CSHO_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashoutopen('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->CSHO_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->CSHO_DATE;
						$row[] = $dat->CSHO_INFO;

						//Update Tampil Kolom Alasan Open - Botton lihat
						$row[] = $dat->HISCSHO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashoutchk('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;

						//Update tambah tombol Approve dan DisApprove
						//----------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//----------------------------------------------------------------------------

						$row[] = $dat->CSHO_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->CSHO_DATE;
						$row[] = $dat->CSHO_INFO;

						//Update Tampil Kolom Alasan Open - Botton approve
						$row[] = $dat->HISCSHO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashoutapr('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cashoutbysts->count_all(),
							"recordsFiltered" => $this->s_cashoutbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_cash_out_bystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_cashoutbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->CSHO_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->CSHO_DATE;				
				$row[] = $dat->CSHO_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_cashoutchk('."'".$dat->CSHO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_cashoutbysts->count_all(),
							"recordsFiltered" => $this->s_cashoutbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Bank Masuk Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_bank_in_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_bankinbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->BNK_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->BNK_DATE;
					    $row[] = $dat->BNK_INFO;


					    //Update Tampil Kolom Alasan Open - Button edite
						$row[] = $dat->HISBNK_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankinedit('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->BNK_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->BNK_DATE;
					    $row[] = $dat->BNK_INFO;


					    //Update Tampil Kolom Alasan Open - Button open
					    $row[] = $dat->HISBNK_INFO;


						$row[] = '<textarea class="form-control" name="note_'.$dat->BNK_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankinopen('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankinopen('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';


						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BNK_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->BNK_DATE;
						$row[] = $dat->BNK_INFO;


						//Update Tampil Kolom Alasan Open - Button Lihat
					    $row[] = $dat->HISBNK_INFO;



						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankinchk('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;

						//Update tambah tombol Approve dan DisApprove
						//--------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//--------------------------------------------------------------------------

						$row[] = $dat->BNK_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->BNK_DATE;
						$row[] = $dat->BNK_INFO;


						//Update Tampil Kolom Alasan Open - Button approve
						$row[] = $dat->HISBNK_INFO;

						
						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankinapr('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bankinbysts->count_all(),
							"recordsFiltered" => $this->s_bankinbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_bank_in_bystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_bankinbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNK_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->BNK_DATE;				
				$row[] = $dat->BNK_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankinchk('."'".$dat->BNK_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bankinbysts->count_all(),
							"recordsFiltered" => $this->s_bankinbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Bank Keluar Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_bank_out_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_bankoutbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->BNKO_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->BNKO_DATE;
					    $row[] = $dat->BNKO_INFO;


					    //Update Tampil Kolom Alasan Open - Botton edite
						$row[] = $dat->HISBNKO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankoutedit('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->BNKO_CODE;
					    $row[] = $dat->COA_ACCNAME;
					    $row[] = $dat->BNKO_DATE;
					    $row[] = $dat->BNKO_INFO;


					    //Update Tampil Kolom Alasan Open - Botton Open
						$row[] = $dat->HISBNKO_INFO;


 						//Update Simpan Kolom Alasan Open - Botton Open
						$row[] = '<textarea class="form-control" name="note_'.$dat->BNKO_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankoutopen('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankoutopen('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';




						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BNKO_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->BNKO_DATE;
						$row[] = $dat->BNKO_INFO;


					    //Update Tampil Kolom Alasan Open - Botton Lihat
						$row[] = $dat->HISBNKO_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankoutchk('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;

						//Update tambah tombol Approve dan DisApprove
						//--------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//--------------------------------------------------------------------------

						$row[] = $dat->BNKO_CODE;
						$row[] = $dat->COA_ACCNAME;
						$row[] = $dat->BNKO_DATE;
						$row[] = $dat->BNKO_INFO;


					    //Update Tampil Kolom Alasan Open - Botton Approve
						$row[] = $dat->HISBNKO_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankoutapr('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bankoutbysts->count_all(),
							"recordsFiltered" => $this->s_bankoutbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_bank_out_bystschk()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_bankoutbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->BNKO_CODE;
				$row[] = $dat->COA_ACCNAME;
				$row[] = $dat->BNKO_DATE;				
				$row[] = $dat->BNKO_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_bankoutchk('."'".$dat->BNKO_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_bankoutbysts->count_all(),
							"recordsFiltered" => $this->s_bankoutbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Giro Masuk Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_giro_in_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_giroinbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->GRIN_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GRIN_DATE;
					    $row[] = $dat->GRIN_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRIN_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroinedit('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->GRIN_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GRIN_DATE;
					    $row[] = $dat->GRIN_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRIN_INFO;

						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroinopen('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->GRIN_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroinopen('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->GRIN_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GRIN_DATE;
					    $row[] = $dat->GRIN_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRIN_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroinchk('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;

						//Update tambah tombol Approve dan DisApprove
						//----------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//----------------------------------------------------------------------------

					    $row[] = $dat->GRIN_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GRIN_DATE;
					    $row[] = $dat->GRIN_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRIN_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_giroinapr('."'".$dat->GRIN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_giroinbysts->count_all(),
							"recordsFiltered" => $this->s_giroinbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Giro Masuk Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_giro_out_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_girooutbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->GROUT_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GROUT_DATE;
					    $row[] = $dat->GROUT_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_girooutedit('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->GROUT_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GROUT_DATE;
					    $row[] = $dat->GROUT_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRO_INFO;

						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_girooutopen('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->GROUT_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_girooutopen('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->GROUT_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GROUT_DATE;
					    $row[] = $dat->GROUT_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_girooutchk('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;

						//Update tambah tombol Approve dan DisApprove
						//----------------------------------------------------------------------------
						$row[] = '<a href="javascript:void(0)" title="Approve Data" class="btn btn-sm btn-success btn-responsive" onclick="pick_approve('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-ok"></span> </a>';
						
						$row[] = '<a href="javascript:void(0)" title="Disapprove Data" class="btn btn-sm btn-danger btn-responsive" onclick="pick_disapprove('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-remove"></span> </a>';
						//----------------------------------------------------------------------------

					    $row[] = $dat->GROUT_CODE;
					    $row[] = $dat->BANK_NAME;
					    $row[] = $dat->GROUT_DATE;
					    $row[] = $dat->GROUT_INFO;

					    //update kolom alasan open
					    $row[] = $dat->HISGRO_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_girooutapr('."'".$dat->GROUT_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_girooutbysts->count_all(),
							"recordsFiltered" => $this->s_girooutbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}


		//Search PPN Cabang Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_ppn_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			$brc = 'a.branch_id = '.$br;
			$list = $this->s_ppnbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk)
			{
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->POSTPPN_CODE;
					    $row[] = $dat->POSTPPN_DATE;
					    $row[] = $dat->POSTPPN_DATE_FIRST;
					    $row[] = $dat->POSTPPN_DATE_LAST;

					    //update kolom alasan open
					    $row[] = $dat->HISPOSTPPN_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_postppnedit('."'".$dat->POSTPPN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->POSTPPN_CODE;
					    $row[] = $dat->POSTPPN_DATE;
					    $row[] = $dat->POSTPPN_DATE_FIRST;
					    $row[] = $dat->POSTPPN_DATE_LAST;

					    //update kolom alasan open
					    $row[] = $dat->HISPOSTPPN_INFO;


						//$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_postppnopen('."'".$dat->POSTPPN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->POSTPPN_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_postppnopen('."'".$dat->POSTPPN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->POSTPPN_CODE;
					    $row[] = $dat->POSTPPN_DATE;
					    $row[] = $dat->POSTPPN_DATE_FIRST;
					    $row[] = $dat->POSTPPN_DATE_LAST;

					    //update kolom alasan open
					    $row[] = $dat->HISPOSTPPN_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_postppnchk('."'".$dat->POSTPPN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
					    $row[] = $dat->POSTPPN_CODE;
					    $row[] = $dat->POSTPPN_DATE;
					    $row[] = $dat->POSTPPN_DATE_FIRST;
					    $row[] = $dat->POSTPPN_DATE_LAST;

					    //update kolom alasan open
					    $row[] = $dat->HISPOSTPPN_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_postppnapr('."'".$dat->POSTPPN_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_ppnbysts->count_all(),
							"recordsFiltered" => $this->s_ppnbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Anggaran Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_budget_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$chk = $this->input->post('chk');
			// $brc = ($chk != '0')? 'd.branch_id = '.$br : 'd.branch_id = '.$br.' OR d.branch_id IS null';
			$list = $this->s_budgetbysts->get_datatables($id,$br);
			$data = array();
			$no = $_POST['start'];
			// if($this->input->post('chk') != '0')
			// {
			// 	foreach ($list as $dat) {
			// 		$no++;
			// 		$row = array();
			// 		$row[] = $no;
			// 	    $row[] = $dat->BUD_CODE;
			// 	    $row[] = $dat->BUD_DATE;

			// 	    // $row[] = $dat->BUD_APPR;
			// 	    $row[] = $dat->APPR_CODE;				

			// 	    $row[] = $dat->LOC_NAME;
			// 	    $row[] = $dat->LOC_ADDRESS;
			// 		$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_budgetopen('."'".$dat->BUD_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
			// 		$data[] = $row;
			// 	}
			// }
			// else
			// {
			// 	foreach ($list as $dat) {
			// 		$no++;
			// 		$row = array();
			// 		$row[] = $no;
			// 	    $row[] = $dat->BUD_CODE;
			// 	    $row[] = $dat->BUD_DATE;

			// 	    // $row[] = $dat->BUD_APPR;
			// 	    $row[] = $dat->APPR_CODE;	
			
			// 	    $row[] = $dat->LOC_NAME;
			// 	    $row[] = $dat->LOC_ADDRESS;
			// 		$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_budgetedit('."'".$dat->BUD_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
			// 		$data[] = $row;
			// 	}
			// }

			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BUD_CODE;
					    $row[] = $dat->BUD_DATE;
					    $row[] = $dat->APPR_CODE;				
					    $row[] = $dat->LOC_NAME;
					    $row[] = $dat->LOC_ADDRESS;

						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISBDG_INFO;

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_budgetedit('."'".$dat->BUD_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BUD_CODE;
					    $row[] = $dat->BUD_DATE;
					    $row[] = $dat->APPR_CODE;				
					    $row[] = $dat->LOC_NAME;
					    $row[] = $dat->LOC_ADDRESS;

						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISBDG_INFO;

						$row[] = '<textarea class="form-control" name="note_'.$dat->BUD_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_budgetopen('."'".$dat->BUD_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';

						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BUD_CODE;
					    $row[] = $dat->BUD_DATE;
					    $row[] = $dat->APPR_CODE;				
					    $row[] = $dat->LOC_NAME;
					    $row[] = $dat->LOC_ADDRESS;

						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISBDG_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_budgetchk('."'".$dat->BUD_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->BUD_CODE;
					    $row[] = $dat->BUD_DATE;
					    $row[] = $dat->APPR_CODE;				
					    $row[] = $dat->LOC_NAME;
					    $row[] = $dat->LOC_ADDRESS;

						//Update Tampil Kolom Alasan Open - Botton Edite
						$row[] = $dat->HISBDG_INFO;


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_budgetapr('."'".$dat->BUD_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_budgetbysts->count_all(),
							"recordsFiltered" => $this->s_budgetbysts->count_filtered($id,$br),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		//Search Faktur Pajak Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_taxinvoice_bysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = ($this->input->post('chk') != '0')? 'd.branch_id = '.$br : 'd.branch_id = '.$br.' OR d.branch_id IS null';
			$list = $this->s_taxinvoicebysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			if($this->input->post('chk') != '0')
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
				    $row[] = $dat->TINV_CODE;
				    $row[] = $dat->TINV_DATE;				
				    $row[] = $dat->TINV_TAXHEADCODE;
				    $row[] = $dat->TINV_TAXCODE;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_taxinvoiceopen('."'".$dat->TINV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			else
			{
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
				    $row[] = $dat->TINV_CODE;
				    $row[] = $dat->TINV_DATE;				
				    $row[] = $dat->TINV_TAXHEADCODE;
				    $row[] = $dat->TINV_TAXCODE;
					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_taxinvoiceedit('."'".$dat->TINV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
				}
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_taxinvoicebysts->count_all(),
							"recordsFiltered" => $this->s_taxinvoicebysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_cashingb($id)
		{
			$data = $this->crud->get_by_id('trx_cash_in',array('csh_id' => $id));
			echo json_encode($data);
		}

		public function pick_cashoutgb($id)
		{
			$data = $this->crud->get_by_id('trx_cash_out',array('csho_id' => $id));
			echo json_encode($data);
		}

		public function pick_bankingb($id)
		{
			$data = $this->crud->get_by_id('trx_bankin',array('bnk_id' => $id));
			echo json_encode($data);
		}

		public function pick_bankoutgb($id)
		{
			$data = $this->crud->get_by_id('trx_bankout',array('bnko_id' => $id));
			echo json_encode($data);
		}

		public function pick_giroingb($id)
		{
			$data = $this->crud->get_by_id('trx_giro_in',array('grin_id' => $id));
			echo json_encode($data);
		}

		public function pick_girooutgb($id)
		{
			$data = $this->crud->get_by_id('trx_giro_out',array('grout_id' => $id));
			echo json_encode($data);
		}

		public function pick_postppngb($id)
		{
			$data = $this->crud->get_by_id('trx_post_ppn',array('postppn_id' => $id));
			echo json_encode($data);
		}

		public function pick_budgetgb($id)
		{
			$data = $this->crud->get_by_id('trx_budget',array('bud_id' => $id));
			echo json_encode($data);
		}

		public function pick_taxinvoicegb($id)
		{
			$data = $this->crud->get_by_id('trx_tax_invoice',array('tinv_id' => $id));
			echo json_encode($data);
		}

		//Search Pembelian GA berdasarkan supplier
		public function srch_prcgabysupp($id)
		{
			$list = $this->s_prcgabysupp->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;
				$row[] = $dat->PRCGA_CODE;
				$row[] = $dat->POGA_CODE;
				$row[] = $dat->PRCGA_INV;				
				$row[] = $dat->PRCGA_DATE;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_prcgabysupp('."'".$dat->PRCGA_ID."'".')">Pilih</a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_prcgabysupp->count_all($id),
							"recordsFiltered" => $this->s_prcgabysupp->count_filtered($id),
							"data" => $data,
					);
			echo json_encode($output);
		}

		public function pick_prcgabysupp($id)
		{
			$data = $this->crud->get_by_id2('trx_prc_ga a','trx_po_ga b',array('prcga_id' => $id),'b.poga_id = a.poga_id');
        	echo json_encode($data);
		}


		//Search Invoice Berdasarkan Status Untuk Edit dan Buka Record di halaman Invoice
		public function srch_joubysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_joubysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->JOU_CODE;
						if (is_null($dat->JOU_REFF)){
							$row[] = '';
						}else{
							$row[] = $dat->JOU_REFF;
						}
						if (is_null($dat->JOU_DATE)){
							$row[] ='';
						}else{
							$row[] = $dat->JOU_DATE;
						}
						// if (is_null($dat->JOU_INFO)){
							$row[] = '';
						// }else{
						// 	$row[] = $dat->JOU_INFO;
						// }

                        //Update Tampil Kolom Alasan Open - Botton Edite
					    // $row[] = $dat->HISJOU_INFO;
						$row[] = '';
						
						


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_jouedit('."'".$dat->JOU_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '1':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->JOU_CODE;
						$row[] = $dat->JOU_REFF;
						$row[] = $dat->JOU_DATE;
						$row[] = $dat->JOU_INFO;


						//Update Tampil Kolom Alasan Open - Botton Open
						// $row[] = $dat->HISJOU_INFO;
						$row[] = '';

                        //Update Simpan Kolom Alasan Open - Botton Open
						// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_jouopen('."'".$dat->JOU_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$row[] = '<textarea class="form-control" name="note_'.$dat->JOU_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_jouopen('."'".$dat->JOU_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';



						$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->JOU_CODE;
						$row[] = $dat->JOU_REFF;
						$row[] = $dat->JOU_DATE;
						$row[] = $dat->JOU_INFO;

						//Update Tampil Kolom Alasan Open - Botton Lihat
						// $row[] = $dat->HISJOU_INFO;
						$row[] = '';

						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_jouchk('."'".$dat->JOU_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
						$no++;
						$row = array();
						$row[] = $no;
						$row[] = $dat->JOU_CODE;
						$row[] = $dat->JOU_REFF;
						$row[] = $dat->JOU_DATE;
						$row[] = $dat->JOU_INFO;

						//Update Tampil Kolom Alasan Open - Approve
						// $row[] = $dat->HISJOU_INFO;
						$row[] = '';


						$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_jouapr('."'".$dat->JOU_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
						$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_joubysts->count_all(),
							"recordsFiltered" => $this->s_joubysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function pick_jougb($id)
		{
			$data = $this->crud->get_by_id('account_journal',array('jou_id' => $id));
			echo json_encode($data);
		}

		//update sistem jurnal pelunasan
		public function srch_invbybranch($id)
		{
			$list = $this->s_invbybranch->get_datatables($id);
			$data = array();
			$no = $_POST['start'];
			foreach ($list as $dat) {
				$no++;
				$row = array();
				$row[] = $no;				
				$row[] = $dat->INV_CODE;
				$row[] = $dat->INV_DATE;
				$row[] = $dat->CUST_NAME;
				$row[] = $dat->INV_INFO;
				$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_inv('."'".$dat->INV_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
				$data[] = $row;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_invbyid->count_all($id),
							"recordsFiltered" => $this->s_invbyid->count_filtered($id),
							"data" => $data,
					);			
			echo json_encode($output);
		}

		public function srch_sapprbysts()
		{
			$id = $this->input->post('sts');
			$br = $this->input->post('brch');
			$brc = 'a.branch_id = '.$br;
			$chk = $this->input->post('chk');
			$list = $this->s_sapprbysts->get_datatables($id,$brc);
			$data = array();
			$no = $_POST['start'];
			switch ($chk) {
				case '0':
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->SAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->SAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->SAPPR_INFO;

					//Update Tampil Kolom Alasan Open - Botton Edit
					$row[] = $dat->HISSAPPR_INFO;		



					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_sappredit('."'".$dat->SAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
					}
					break;
				case '1':
				foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->SAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->SAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->SAPPR_INFO;

				    //Update Tampil Kolom Alasan Open - Botton Open
					$row[] = $dat->HISSAPPR_INFO;


					// $row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_pappropen('."'".$dat->PAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$row[] = '<textarea class="form-control" name="note_'.$dat->SAPPR_ID.'"></textarea><a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_sappropen('."'".$dat->SAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';



					$data[] = $row;
					}
					break;
				case '2':
					foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->SAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->SAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->SAPPR_INFO;

					//Update Tampil Kolom Alasan Open - Botton Lihat
					$row[] = $dat->HISSAPPR_INFO;


					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_sapprchk('."'".$dat->SAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
					}
					break;
				case '3':
					foreach ($list as $dat) {
					$no++;
					$row = array();
					$row[] = $no;
					$row[] = $dat->SAPPR_CODE;
					$row[] = $dat->APPR_CODE;
					$row[] = $dat->SAPPR_DATE;
					$row[] = $dat->CUST_NAME;
					$row[] = $dat->LOC_NAME;

					$row[] = $dat->SAPPR_INFO;

					
					//Update Tampil Kolom Alasan Open - Botton Approve
					$row[] = $dat->HISSAPPR_INFO;


					$row[] = '<a href="javascript:void(0)" title="Pilih Data" class="btn btn-sm btn-info btn-responsive" onclick="pick_sapprapr('."'".$dat->SAPPR_ID."'".')"><span class="glyphicon glyphicon-check"></span> </a>';
					$data[] = $row;
					}
					break;
				default:
					# code...
					break;
			}
			$output = array(
							"draw" => $_POST['draw'],
							"recordsTotal" => $this->s_sapprbysts->count_all(),
							"recordsFiltered" => $this->s_sapprbysts->count_filtered($id,$brc),
							"data" => $data,
					);			
			echo json_encode($output);
		}
	}
?>