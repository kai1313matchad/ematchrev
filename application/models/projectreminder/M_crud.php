<?php

class M_crud extends CI_Model {

	var $table = 'dept';
	function __construct() {
        parent::__construct();
    }

    function getAll() {
    	$getb = $this->db->get($this->table);
    	return $getb;
    }

    function delete($key){
        $this->db->where('id_dept',$key);
        $this->db->delete($this->table);
    }    

    //fungsi insert ke database
    function get_insert($data){
       	$this->db->insert($this->table, $data);
      	return TRUE;
    }

    function get_update($data, $key){
        $this->db->where("id_dept", $key);
        $this->db->update($this->table, $data);
        return TRUE;
    }

    public function get_krybydept($deli)
        {
            $this->db->select('*');
            $this->db->from('karyawan a');
            $this->db->join('dept b','FIND_IN_SET(b.id_dept, a.dept)');
            // $this->db->where('a.dept REGEXP "['.$deli.']"');
            $this->db->where('a.status !=','Blokir');
//          $this->db->or_where('a.status','Cuti');
            $this->db->not_like('a.nama_karyawan','admin');
//          $this->db->or_not_like('a.nama_karyawan','ADMIN');
            $this->db->group_by('a.id_karyawan');
            $query = $this->db->get();
            return $query->result();
        }

    public function get_jenis_reminder($id)
    {
        $this->db->select('nama_jenis');
        $this->db->from('jenis_reminder');
        $this->db->where('id =',$id);
        $query = $this->db->get();
        return $query->row()->nama_jenis;
    }

    public function get_department($id)
    {
        $this->db->select('nama_dept');
        $this->db->from('dept');
        $this->db->where('id_dept =',$id);
        $query = $this->db->get();
        return $query->row()->nama_dept;
    }

    public function get_tanggal_reminder()
    {
        $this->db->select('*');
        $this->db->from('tanggal_reminder');
        $this->db->where('tgl_reminder =',date('Y-m-d'));
        $this->db->where('status =','0');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_tanggal_reminder_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tanggal_reminder');
        //$this->db->where('tgl_reminder =',date('Y-m-d'));
        $this->db->where('id_reminder =',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_reminder($id)
    {
        $this->db->select('*');
        $this->db->from('reminder');
        $this->db->where('id =',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_by_idres($tb,$id)
    {
        $this->db->from($tb);
        $this->db->where($id);
        $query = $this->db->get();
        return $query->result();
    }
}
