<?php  

class M_laporangoal extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getGoal($id){
		$query = $this->db->query("SELECT * FROM master_bobot LEFT JOIN karyawan ON master_bobot.id_kary=karyawan.id_karyawan WHERE id_parent='$id' AND NOT id_kary = 0 ORDER BY master_bobot.id_dept ASC")->result_array();
		return $query;
	}
	public function getGoal_byparent($id, $id_dept){
		$query = $this->db->query("SELECT * FROM master_bobot LEFT JOIN karyawan ON master_bobot.id_kary=karyawan.id_karyawan WHERE id_parent='$id' AND master_bobot.id_dept='$id_dept' AND master_bobot.is_close IS NULL AND NOT id_kary = 0 ORDER BY id_parent ASC")->result_array();
		return $query;
	}
	public function getDept($id){
		$query = $this->db->query("SELECT nama_dept FROM dept WHERE id_dept='$id'")->result();
		return $query;
	}
	public function get_subordinate($id_a){
		$id = [];
		$get_sub = $this->db->query("SELECT * FROM subordinate WHERE id_penilai = '$id_a'")->result_array();
		foreach ($get_sub as $key => $value) {
			$id[] = $value['id_dinilai'];
		}
		$data = [];
		foreach ($id as $key2 => $value2) {
			$data[] = $this->db->query("SELECT * FROM karyawan WHERE id_karyawan = '$value2' AND status = 'Aktif'")->result_array();
		}
		return $data;
	}
	public function cek_dept($id_dept, $id_sub){
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->where('id_karyawan', $id_sub);
		$result = $this->db->get()->result_array();
		return $result;
	}
	public function isi_karyawan($id){
		$this->db->select("*");
        $this->db->from("karyawan");
        $this->db->where('status','Aktif');
        $this->db->LIKE("dept", $id);
        $this->db->order_by("nama_karyawan", "ASC");
		$query = $this->db->get();
			echo "<option value='all'>Semua Karyawan</option>";
			foreach ($query->result() as $row){   
			    echo "<option value=".$row->id_karyawan.">".$row->nama_karyawan."</option>";
			}
	}
	public function getKpim_Karyawan($id_dept,$tglstart, $tglend, $idbobot, $id_kar){
		$this->db->select('*');
		$this->db->from('kpim_karyawan a');
		$this->db->join('karyawan b', 'b.id_karyawan=a.id_karyawan');
		if ($id_dept != '') {
			$this->db->where('a.tgs_dept', $id_dept);
		}
		if ($id_kar != "all") {
			$this->db->where('a.id_karyawan', $id_kar);
		}
		$this->db->where('a.id_bobot', $idbobot);
		$this->db->where('tgl >=', $tglstart);
		$this->db->where('tgl <=', $tglend);
		$this->db->order_by('a.id','ASC');
		$result = $this->db->get()->result_array();
        return $result;
	}
	public function getKpim_Karyawan2($tglstart, $tglend, $idbobot){
		$this->db->select('*');
		$this->db->from('kpim_karyawan a');
		$this->db->join('karyawan b', 'b.id_karyawan=a.id_karyawan');
		$this->db->where('a.id_bobot', $idbobot);
		$this->db->where('tgl >=', $tglstart);
		$this->db->where('tgl <=', $tglend);
		$this->db->order_by('a.id','ASC');
		$result = $this->db->get()->result_array();
        return $result;
	}

	
}