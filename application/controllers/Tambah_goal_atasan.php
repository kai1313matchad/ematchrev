<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tambah_goal_atasan extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_laporangoal','M_kpimmingguan','M_reportsub','app_model','M_karyawanku','M_tambahgoal_atasan'));
        $this->load->library(array('session', 'form_validation', 'upload', 'user_agent', 'email', 'mypdf'));
        $this->load->helper(array('url', 'form', 'text', 'html', 'security', 'file', 'directory', 'number', 'date', 'download', 'tgl_indo'));
	}

	function index(){
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
		$this->load->view('tampil_tambahgoal_atasan', $data);
	}

	public function save(){
		$this->app_model->getLogin();

		$tgl_start 		= $this->input->post('tgl_start');
		$tgl_end		= $this->input->post('tgl_end');
		if ($tgl_start == "" && $tgl_end == "") {
            $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        }else{
            $nama_pekerjaan = $this->input->post('nama_pekerjaan')." (".$tgl_start." s.d ".$tgl_end.")";
        }
        $level_goal = 0 ;
        $parent = $this->input->post('reference');
        if ($parent !=''){
            $data = array(
                            'is_last' => 0
                    );        
            $this->db->where('id_bobot', $this->input->post('reference'));
            $this->db->update('master_bobot', $data);
            $level_goal = (int) $this->input->post('level_goal') + 1;
            $data = array(
                    'id_dept'       => $this->input->post('pilihdept'),
                    'id_parent'     => $parent,
                    'id_kary'       => $this->session->userdata('id_karyawan'),
                    'level'         => $level_goal,
                    'nama'          => $nama_pekerjaan,
                    'tgl_start'     => $tgl_start,
                    'tgl_end'       => $tgl_end,
                    'jenis_bobot'   => $this->input->post('jenis_goal'),
                    'bobot'         => $this->input->post('nilai_bobot'),
                    'tgl_diinput'   => date('Y-m-d H:i:s'),
                    'reff'          => 1
                    );  
        }else{
            $data = array(
                    'id_dept'       => $this->input->post('pilihdept'),
                    'id_kary'       => $this->session->userdata('id_karyawan'),
                    'id_parent'     => 0,
                    'level'         => 0,
                    'nama'          => $nama_pekerjaan,
                    'tgl_start'     => $tgl_start,
                    'tgl_end'       => $tgl_end,
                    'jenis_bobot'   => $this->input->post('jenis_goal'),
                    'bobot'         => $this->input->post('nilai_bobot'),
                    'tgl_diinput'   => date('Y-m-d H:i:s'),
                    'reff'          => 1
                    );  
        }
        $this->M_tambahgoal_atasan->simpanbobot($data);
        redirect(base_url(). 'tambah_goal_atasan' , 'refresh');
	}

    public function getData(){
        $id_karyawan = $this->session->userdata('id_karyawan');
        $this->db->where('id_karyawan', $id_karyawan);
        $query = $this->db->get('karyawan');
            if($query->num_rows()>0){
                foreach ($query->result() as $row) {
                    $dept = $row->dept;
                }
            }
        $id_dept = explode(',', $dept);
        $data = $this->M_tambahgoal_atasan->getDataTable($id_dept)->result();
        echo json_encode($data);
    }

    public function getEdit(){
        $id     = $this->input->post('id');
        $data   = $this->M_tambahgoal_atasan->getEdit($id);
        echo json_encode($data);
    }

    public function editGoal(){
        $id         = $this->input->post('idgoal');
        $tgl_start  = $this->input->post('tgl_start2');
        $tgl_end    = $this->input->post('tgl_end2');
        if ($tgl_start=="" && $tgl_end=="") {
            $namagoal   = $this->input->post('namagoal_edit');
        }else{
            $namagoal   = $this->input->post('namagoal_edit')." (".$tgl_start." s.d ".$tgl_end.")";
        }
        $level_goal = 0;
        $oldparent = $this->input->post('editreferensigoal');
        $parent = $this->input->post('editpilihgoalreferensi');
        if ($parent!= "") {
            $this->db->where('id_parent', $oldparent);
            $this->db->select('count(*) jml');
            $q = $this->db->get('master_bobot');
            $data = $q->result_array();
            $jml_ref = $data[0]['jml'];
            if ($jml_ref <= 1) {
                $data = array(
                            'is_last' => 1
                    );        
                $this->db->where('id_bobot', $oldparent);
                $this->db->update('master_bobot', $data);
            }
            //update is_last menjadi 0 untuk parent baru 
            $data = array(
                            'is_last' => 0
                    );        
            $this->db->where('id_bobot', $this->input->post('editpilihgoalreferensi'));
            $this->db->update('master_bobot', $data);
            $level_goal = intval($this->input->post('editlevel_goal'))  + 1;

            $data = array(
                        'id_parent' => $parent,
                        'level' => $level_goal,
                        'id_kary' => $this->session->userdata('id_karyawan'),
                        'nama' => $namagoal,
                        'tgl_start'     => $tgl_start,
                        'tgl_end'       => $tgl_end,
                        'jenis_bobot' => $this->input->post('jenisgoal_edit'),
                        'bobot' => $this->input->post('nilaibobot_edit'),
                        'tgl_diinput' => date('Y-m-d H:i:s')
                    ); 

        }else{
            $data   = array(
                        'nama'          => $namagoal,
                        'id_kary' => $this->session->userdata('id_karyawan'),
                        'jenis_bobot'   => $this->input->post('jenisgoal_edit'),
                        'tgl_start'     => $tgl_start,
                        'tgl_end'       => $tgl_end,
                        'bobot'         => $this->input->post('nilaibobot_edit')
                      );
        }
        
        $status['status'] = $this->M_tambahgoal_atasan->editGoal($data, $id); 
        echo json_encode($status);
    }

    public function cek_deletegoal(){
        $id_bobot       = $this->input->post('id_bobot');
        $data['goal']   = $this->get_goal_tree($id_bobot);
        $namagoal       = $this->M_tambahgoal_atasan->nama($id_bobot);
        $data['nama']   = $namagoal[0]['nama'];
        echo json_encode($data);
    }
    function get_goal_tree($id){
        $menu = ''; $span='';  $bold='';
        $array = $this->M_tambahgoal_atasan->getGoal_byparent($id);
        foreach ($array as $key => $value) {
            if ($value['id_parent']=="0") {
                $span = 'list-group-item-info';
                $bold = " font-weight: bold;";
            }
            $menu .="<li><font size='2'style='color: black;".$bold."'>".$value['nama']."</font>";
            $menu .= "<ul>".$this->get_goal_tree($value['id_bobot'])."</ul>"; 
            $menu .= "</li>";
        }
        return $menu;
    }

    public function delete_goal(){
        $id     = $this->input->post('idbobot');
        $return = $this->del_goal($id);
        //if ($return) {
            $data['status'] = TRUE;
        //}
        echo json_encode($data);
    }
    public function del_goal($idbobot){
        $list   = $this->M_tambahgoal_atasan->getBobot($idbobot);
        if (!empty($list)) {
             foreach ($list as $key => $curitem) {
                  $this->del_goal($curitem['id_bobot']);
             }
        }
        $this->db->update('master_bobot', array('is_close' => '1'),array('id_bobot' => $idbobot)); 
    }
    public function get_goal_dept($id,$dept){
        $menu = ''; $span='';  $bold='';
        $array = $this->M_tambahgoal_atasan->get_goal_dept($id, $dept);
        foreach ($array as $key => $value) {
            if ($value['id_parent']=="0") {
                $bold = " font-weight: bold;";
            }
            $menu .="<li><font style='color: black;".$bold."'>".$value['nama']." <i>(created by ".$value['nama_karyawan'].")</i></font>";
            $menu .= "<ul>".$this->get_goal_dept($value['id_bobot'], $dept)."</ul>"; 
            $menu .= "</li>";
        }
        return $menu;
    }
    public function print_goal($dept){
        $data['goal']   = $this->get_goal_dept('0', $dept);
        $data['dept']   = $this->M_tambahgoal_atasan->getDept($dept);
        $this->load->view('tampil_pdf_goal', $data);

        $html = $this->output->get_output();
        $this->mypdf->loadHtml($html);
        $this->mypdf->set_option('isRemoteEnabled', TRUE);
        $this->mypdf->setPaper('A4', 'potrait');
        $this->mypdf->render();
        $this->mypdf->stream("Laporan-listgoal.pdf", array("Attachment"=> 0));  

    }

    public function ambildatabobotkpim(){

        $ini_dept = $this->input->post('pilihdept');
        if ($ini_dept == 'all') {
            $query = $this->M_tambahgoal_atasan->bobotsemua()->result();
            $nama_goal = $this->buildTree2($query->result_array());
            $data = $nama_goal;
        }

        else{
            //ambil data goal referensi edit by qoqom
            $query = $this->db->query("SELECT id_bobot AS id, concat(nama, ' (',nama_karyawan,')') AS text, id_bobot,id_parent,is_last,level,nama  FROM master_bobot JOIN dept ON master_bobot.id_dept = dept.id_dept JOIN karyawan ON karyawan.id_karyawan = master_bobot.id_kary WHERE master_bobot.id_dept = '$ini_dept' AND master_bobot.is_close IS NULL ORDER BY id_bobot ASC")->result_array();
            $nama_goal = $this->buildTree2($query);
            $data = $nama_goal;
        }

        echo json_encode($data);

        return $data;

    }
    public function ambilbobotsatu($id){

        $data = $this->M_tambahgoal_atasan->getbobotsatu($id);

        echo json_encode($data);

        return $data;

    }
    public function buildTree2(array $elements, $parentId = 0) {
        $tree = array();
    
        foreach ($elements as $element) {
            if ($element['id_parent'] == $parentId) {
                $children = $this->buildTree2($elements, $element['id_bobot']);
                if ($children) {
                    $element['inc'] = $children;
                }
                $tree[] = $element;
            }
        }
    
        return $tree;
    }
}