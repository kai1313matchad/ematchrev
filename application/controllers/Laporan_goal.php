<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_goal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_laporangoal','M_kpimmingguan','M_reportsub','app_model'));
        $this->load->library(array('session', 'form_validation', 'upload', 'user_agent', 'email', 'mypdf'));
        $this->load->helper(array('url', 'form', 'text', 'html', 'security', 'file', 'directory', 'number', 'date', 'download', 'tgl_indo'));
	}

	function index(){
		$keyjabatan = $this->session->userdata('id_karyawan');
        $data['jabatan'] = $this->M_kpimmingguan->getJabatan($keyjabatan);

        $keydept = $this->session->userdata('id_karyawan');
        $data['dept'] = $this->M_kpimmingguan->getDept($keydept);
		$data['profilku'] = $this->M_kpimmingguan->getdataku()->result();
		$key = $this->session->userdata('id_karyawan');
        $this->db->where('id_karyawan', $key);
        $query = $this->db->get('karyawan');
        if($query->num_rows()>0){
            foreach ($query->result() as $row) {
            	$dept = $row->dept;
            }
        }
        $id_dept = explode(',', $dept);
        $this->db->where_in('id_dept', $id_dept);
        $query2 = $this->db->get('dept');

        if($query2->num_rows()>0)
        {
            $data['isinamadept'] = $query2;
        }
		$data['tampil'] = '';
		$data['dept'] = '';
		$data['tglstart'] = '';
		$data['tglend'] = '';
		$data['id_kar'] = '';
		$this->load->view('tampil_laporangoal', $data);
	}

	function pick_kar(){
		$id_dept = $this->input->post('id');
		$result = $this->M_laporangoal->isi_karyawan($id_dept);
		return $result;
	}

	function cek_department(){
		$id_dept = $this->input->post('id_dept');
		$id_sub = $this->input->post('id_sub');
		$cek = $this->M_laporangoal->cek_dept($id_dept, $id_sub);
		$cek = $cek[0]['dept'];
		$dept = explode(",", $cek);
		if (in_array($id_dept, $dept)) {
			$data['status'] = "true";
		}else{
			$data['status'] = "false";
		}
		echo json_encode($data);
	}
	function atasan(){
		$this->app_model->getLogin();
		$data['profilku'] = $this->M_kpimmingguan->getdataku()->result();

        $keyjabatan = $this->session->userdata('id_karyawan');
        $data['jabatan'] = $this->M_reportsub->getJabatan($keyjabatan)->result();

        $keydept = $this->session->userdata('id_karyawan');
        $data['depart'] = $this->M_reportsub->getDept($keydept)->result();

        $this->load->model(array('M_pilihkaryawan', 'app_model'));

        $data['ambilkaryawanall'] = $this->M_reportsub->ambilkaryawanall();
       	$data['isidept'] = $this->M_pilihkaryawan->ambilDept();
		$data['sub_ord'] = $this->M_laporangoal->get_subordinate($keyjabatan);
        $this->db->where('id_karyawan', $keydept);
        $query = $this->db->get('karyawan');
	        if($query->num_rows()>0){
	            foreach ($query->result() as $row) {
	            	$dept = $row->dept;
	            }
	        }
        $id_dept = explode(',', $dept);
        $this->db->where_in('id_dept', $id_dept);
        $query2 = $this->db->get('dept');
	        if($query2->num_rows()>0){
	            $data['isinamadept'] = $query2;
	        }
		$data['tampil'] = '';
		$data['dept'] = '';
		$data['tglstart'] = '';
		$data['tglend'] = '';
		$data['id_kar'] = '';
		$this->load->view('tampil_laporangoal_atasan', $data);
	}
	function laporan_subordinate(){
		$data['profilku'] = $this->M_kpimmingguan->getdataku()->result();
		$keyjabatan = $this->session->userdata('id_karyawan');
        $data['jabatan'] = $this->M_reportsub->getJabatan($keyjabatan)->result();
        $keydept = $this->session->userdata('id_karyawan');
        $data['depart'] = $this->M_reportsub->getDept($keydept)->result();
		$data['profilku'] = $this->M_kpimmingguan->getdataku()->result();
		$key = $this->session->userdata('id_karyawan');
		$data['sub_ord'] = $this->M_laporangoal->get_subordinate($keyjabatan);
        $this->db->where('id_karyawan', $key);
        $query = $this->db->get('karyawan');
	        if($query->num_rows()>0){
	            foreach ($query->result() as $row) {
	            	$dept = $row->dept;
	            }
	        }
        $id_dept = explode(',', $dept);
        $this->db->where_in('id_dept', $id_dept);
        $query2 = $this->db->get('dept');
	        if($query2->num_rows()>0){
	            $data['isinamadept'] = $query2;
	        }
	    $id_kar = $this->input->post('pilihsub');
		$dept = $this->input->post('pilihdept');
		$tglstart = $this->input->post('tglstart');
		$tglend = $this->input->post('tglend');
		$namadept = $this->M_laporangoal->getDept($dept);
		$data['nama_depart'] = $namadept[0]->nama_dept;
		$data['tampil'] = $this->get_goal_tree('0',$dept, $tglstart, $tglend, $id_kar);
		$data['dept'] = $dept;
				$data['tglstart'] = $tglstart;
				$data['tglend'] = $tglend;
				$data['id_kar'] = $id_kar;
		$this->load->view('tampil_laporangoal_atasan', $data);
	}

	function caridata(){
		$keyjabatan = $this->session->userdata('id_karyawan');
        $data['jabatan'] = $this->M_kpimmingguan->getJabatan($keyjabatan);

        $keydept = $this->session->userdata('id_karyawan');
        $data['dept'] = $this->M_kpimmingguan->getDept($keydept);
		$data['profilku'] = $this->M_kpimmingguan->getdataku()->result();
			//ambil department karyawan
			$key = $this->session->userdata('id_karyawan');
	        $this->db->where('id_karyawan', $key);
	        $query = $this->db->get('karyawan');
	        if($query->num_rows()>0){
	            foreach ($query->result() as $row) {
	            	$dept = $row->dept;
	            }
	        }
	        $id_dept = explode(',', $dept);
	        $this->db->where_in('id_dept', $id_dept);
	        $query2 = $this->db->get('dept');

	        if($query2->num_rows()>0){
	            $data['isinamadept'] = $query2;
	        }
	        //end of kary department
		$dept = $this->input->post('pilihdept');
		$tglstart = $this->input->post('tgl_start');
		$tglend = $this->input->post('tgl_end');
		$id_kar = $this->input->post('kar');
				$data['dept'] = $dept;
				$data['tglstart'] = $tglstart;
				$data['tglend'] = $tglend;
				$data['id_kar'] = $id_kar;
		if ($dept == "all") {
			$data['nama_depart'] = "Semua";
			$data['tampil'] = $this->get_all_goal('0', $tglstart, $tglend, $id_kar);
		}else{
			$namadept = $this->M_laporangoal->getDept($dept);
			$data['nama_depart'] = $namadept[0]->nama_dept;
			$data['tampil'] = $this->get_goal_tree('0',$dept, $tglstart, $tglend, $id_kar);
		}
		$this->load->view('tampil_laporangoal', $data);
	}

	function get_goal_tree($id, $id_dept, $tglstart, $tglend, $id_kar){
		$menu = ''; $span='';  $bold='';
		$array = $this->M_laporangoal->getGoal_byparent($id, $id_dept);
		foreach ($array as $key => $value) {
			if ($value['id_parent']=="0") {
				$span = 'list-group-item-info';
				$bold = " font-weight: bold;";
			}
			$kar = $this->M_laporangoal->getKpim_karyawan($id_dept,$tglstart, $tglend, $value['id_bobot'], $id_kar);
			$menu .="<li><font style='color: black;".$bold."' class='namag'>".$value['nama']." <i>(created by ".$value['nama_karyawan'].")</i></font>";
			if (!empty($kar)) {
				$menu .="<table class='table table-bordered' style='border: 1px solid black; border-collapse: collapse; width='100%' color: black;'>
							<thead>
								<tr  bgcolor='#cfe1ff'>
									<th style='border: 1px solid black; text-align:center;'>Nama</th>
									<th style='border: 1px solid black; text-align:center;'>Tgl Start</th>
									<th style='border: 1px solid black; text-align:center;'>Deskripsi</th>
									<th style='border: 1px solid black; text-align:center;'>Kendala</th>
									<th style='border: 1px solid black; text-align:center;'>Result</th>
									<th style='border: 1px solid black; text-align:center;'>Deadline</th>
								</tr>
							</thead>
							<tbody>";
				foreach ($kar as $key1 => $value1) {
					$menu .= "
								<tr>
									<td style='border: 1px solid black;'>".$value1['nama_karyawan']."</td>
									<td style='border: 1px solid black; text-align:center;'>".tgl_indo($value1['tgl'])."</td>
									<td style='border: 1px solid black;'>".$value1['action']."</td>
									<td style='border: 1px solid black;'>".$value1['kendala']."</td>
									<td style='border: 1px solid black;'>".$value1['result']."</td>
									<td style='border: 1px solid black; text-align:center;'>".tgl_indo($value1['deadline'])."</td>
								</tr>";
				}
				$menu .= "</tbody>
						</table>";
			}
			$menu .= "<ul>".$this->get_goal_tree($value['id_bobot'], $id_dept, $tglstart, $tglend, $id_kar)."</ul>"; 
		   	$menu .= "</li>";
		}
		return $menu;

	}

	function get_all_goal($id, $tglstart, $tglend, $id_kar){
		$menu = ''; $span=''; $arrow = ''; $bold= ''; 
		$array = $this->M_laporangoal->getGoal($id);
		foreach ($array as $key => $value) {
			$depart = '';
			if ($value['id_parent']=="0") {
				$span = 'list-group-item-info';
				$arrow = "<span class='glyphicon glyphicon-arrow-right'></span> ";
				$bold = " font-weight: bold;";
				$depart = $this->M_laporangoal->getDept($value['id_dept']);
				$depart = "<span class='glyphicon glyphicon-arrow-right'></span> ".$depart[0]->nama_dept." Department ";
			}
			$kar = $this->M_laporangoal->getKpim_karyawan('',$tglstart, $tglend, $value['id_bobot'], $id_kar);
			$menu .="<li><font style='color: black;".$bold."' class='namag'>".$value['nama']." ".$depart." <i>(created by ".$value['nama_karyawan'].")</i></font>";
			if (!empty($kar)) {
				$menu .="<table class='table table-bordered' style='border: 1px solid black; border-collapse: collapse; width:100%; color: black;'>
							<thead>
								<tr  bgcolor='#cfe1ff'>
									<th style='border: 1px solid black; text-align:center;'>Nama</th>
									<th style='border: 1px solid black; text-align:center;'>Tgl Start</th>
									<th style='border: 1px solid black; text-align:center;'>Deskripsi</th>
									<th style='border: 1px solid black; text-align:center;'>Kendala</th>
									<th style='border: 1px solid black; text-align:center;'>Result</th>
									<th style='border: 1px solid black; text-align:center;'>Deadline</th>
								</tr>
							</thead>
							<tbody>";
				foreach ($kar as $key1 => $value1) {
					$menu .= "
								<tr>
									<td style='border: 1px solid black;'>".$value1['nama_karyawan']."</td>
									<td style='border: 1px solid black; text-align:center;'>".tgl_indo($value1['tgl'])."</td>
									<td style='border: 1px solid black;'>".$value1['action']."</td>
									<td style='border: 1px solid black;'>".$value1['kendala']."</td>
									<td style='border: 1px solid black;'>".$value1['result']."</td>
									<td style='border: 1px solid black; text-align:center;'>".tgl_indo($value1['deadline'])."</td>
								</tr>";
				}
				$menu .= "</tbody>
						</table>";
			}
			$menu .= "<ul>".$this->get_all_goal($value['id_bobot'], $tglstart, $tglend, $id_kar)."</ul>";
		   	$menu .= "</li>";
		}
		return $menu;

	}
	
	function cetak_pdf(){
		$dept = $this->uri->segment(3);
		$tglstart = $this->uri->segment(4);
		$tglend = $this->uri->segment(5);
		$id_kar = $this->uri->segment(6);
		$data['tampil'] = '';
		if ($dept == "all") {
			$data['namadept'] 	= "Semua Department";
			$data['header'] 	= "Laporan Goal Referensi";
			$data['tanggal']	= tgl_indo($tglstart)." s/d ".tgl_indo($tglend);
			$data['tampil'] 	.= $this->get_all_goal('0', $tglstart, $tglend, $id_kar);
		}else{
			$namadept = $this->M_laporangoal->getDept($dept);
			$data['namadept'] 	= $namadept[0]->nama_dept;
			$data['header'] 	= "Laporan Goal Referensi";
			$data['tanggal']	= tgl_indo($tglstart)." s/d ".tgl_indo($tglend);
			$data['tampil'] 	.= $this->get_goal_tree('0',$dept, $tglstart, $tglend, $id_kar);
		}
		$this->load->view('tampil_laporanpdf_goal', $data);
		$html = $this->output->get_output();
		$this->mypdf->loadHtml($html);
		$this->mypdf->setPaper('A4', 'potrait');
		$this->mypdf->render();
		$this->mypdf->stream("Laporan-goal.pdf", array("Attachment"=> 0));	
		// echo json_encode($tampil);
	}
}
