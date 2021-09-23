<?php  

class M_tambahgoal_atasan extends CI_Model{


	 public function getDataTable($id_dept) {
        $this->db->select("*");
        $this->db->from('master_bobot');
        $this->db->where_in('master_bobot.id_dept', $id_dept);
        $this->db->join('dept', 'dept.id_dept = master_bobot.id_dept','left');
        $this->db->join('karyawan', 'karyawan.id_karyawan = master_bobot.id_kary', 'left');

        $this->db->order_by("master_bobot.tgl_diinput","DESC");

        $query = $this->db->get();        
        return $query;
    }
    public function getGoal_byparent($id){
		$query = $this->db->query("SELECT * FROM master_bobot LEFT JOIN karyawan ON master_bobot.id_kary=karyawan.id_karyawan WHERE id_parent='$id' ORDER BY id_parent ASC")->result_array();
		return $query;
	}

	public function get_goal_dept($id, $dept){
		$query = $this->db->query("SELECT * FROM master_bobot LEFT JOIN karyawan ON master_bobot.id_kary = karyawan.id_karyawan WHERE id_parent= '$id' AND master_bobot.id_dept = '$dept' and master_bobot.id_kary != 0")->result_array();
		return $query;
	}

	public function nama($id){
		$query = $this->db->query("SELECT nama FROM master_bobot WHERE id_bobot = '$id'")->result_array();
		return $query;
	}
	public function getBobot($id){
		$query = $this->db->query("SELECT * FROM master_bobot WHERE id_parent='$id'")->result_array();
		return $query;
	}
	public function getDept($id){
		$query 		= $this->db->query("SELECT nama_dept FROM dept WHERE id_dept = '$id'")->result_array();
		$nama_dept 	= $query[0]['nama_dept']." Department";
		return $nama_dept; 
	}

	public function getEdit($id) {
        $this->db->select("*");
        $this->db->from('master_bobot');
        $this->db->join('dept', 'dept.id_dept = master_bobot.id_dept');
        $this->db->where_in('master_bobot.id_bobot', $id);
        $this->db->order_by("master_bobot.level,master_bobot.id_parent,master_bobot.is_last desc");
        // $this->db->order_by("master_bobot.id_parent","desc");
        // $this->db->group_by("master_bobot.id_dept");
        // $this->db->order_by("master_bobot.id_dept","asc");
        $query = $this->db->get();        
        return $query->row();
    }

    public function editGoal($data, $id){
    	$this->db->where('id_bobot', $id);
    	$this->db->update('master_bobot', $data);
    	if ($this->db->affected_rows() > 0) {
    		$status = TRUE;
    	}else{
    		$status = FALSE;
    	}
    	return $status;
    }

    public function bobotsemua() {
        $this->db->select("*");
        $this->db->from('master_bobot');
        $this->db->join('dept', 'dept.id_dept = master_bobot.id_dept');

        // $this->db->where_in('master_bobot.id_dept', $id_dept);
        // $this->db->group_by("master_bobot.id_dept");

        // $this->db->order_by("master_bobot.id_parent,master_bobot.level");
        $this->db->order_by("master_bobot.level,master_bobot.id_parent,master_bobot.is_last desc");

        
        // $this->db->order_by("master_bobot.id_bobot","asc");
        // $this->db->order_by("master_bobot.id_parent","asc");

        $query = $this->db->get();        
        return $query;
    }
    public function getbobotsatu($id) {
        $this->db->select("*");
        $this->db->from('master_bobot');
        $this->db->join('dept', 'dept.id_dept = master_bobot.id_dept');
        $this->db->where_in('master_bobot.id_bobot', $id);
        $this->db->order_by("master_bobot.level,master_bobot.id_parent,master_bobot.is_last desc");
        // $this->db->order_by("master_bobot.id_parent","desc");
        // $this->db->group_by("master_bobot.id_dept");
        // $this->db->order_by("master_bobot.id_dept","asc");
        $query = $this->db->get();        
        return $query->row();
    }
    public function simpanbobot($data){
        $this->db->insert('master_bobot', $data);
        return TRUE;
    }
}