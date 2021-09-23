<?php  

class M_sendemail extends CI_Model {


// 	public function getEmail($id){
// 		$this->db->select("id_karyawan, email, dept");
// 		$this->db->from("karyawan");
// 		$this->db->like('dept', $id.",", 'after');
// 		$this->db->or_like('dept',",".$id.",");
// 		$this->db->or_like('dept', $id);
// 		$query = $this->db->get();
// 		return $query->result();
// 	}
    
    public function getEmail($id){
		$id_atasan = $this->session->userdata('id_karyawan');
		$que = $this->db->query("SELECT id_dinilai FROM subordinate WHERE id_penilai = '$id_atasan'")->result();
		$id = array();
		foreach ($que as $value) {
			$id[] = $value->id_dinilai;
		}
		$id_sub = implode("','", $id);
		$query = $this->db->query("SELECT id_karyawan, email, dept FROM karyawan
									WHERE id_karyawan IN('$id_sub')");
		return $query->result();
	}

	public function get_emailsender($id){
		$this->db->select("email");
		$this->db->from("karyawan");
		$this->db->where('id_karyawan', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function save_data($data){
		$this->db->insert('reminder_plannext', $data);
		if ($this->db->affected_rows() > 0) {
			$status = $this->db->insert_id();
		}else{
			$status = 0;
		}
		return $status;
	}

	function getData($id){
		$this->db->select("*");
		$this->db->from('kpim_next');
		$this->db->where('id', $id);
		$query = $this->db->get()->row();
		return $query;
	}

	function getPengirim($id){
		$query = $this->db->query("SELECT email, nama_karyawan FROM karyawan WHERE id_karyawan = '$id'")->row();
		return $query;
	}	
	function getDept($id){
		$query = $this->db->query("SELECT nama_dept FROM dept WHERE id_dept = '$id'")->row();
		return $query->nama_dept;
	}
	function getGoal($idbobot){
		$query = $this->db->query("SELECT nama FROM master_bobot WHERE id_bobot = '$idbobot'")->row();
		return $query->nama;	
	}
	function update_Id($id){
		$query = $this->db->query("UPDATE reminder_plannext SET terkirim ='1' WHERE id_reminder='$id'");
	}
	public function cek_reminder(){
		$hari_ini = date('Y-m-d');
		$query = $this->db->query("SELECT * FROM reminder_plannext WHERE tgl_dikirim = '$hari_ini' AND terkirim='0'");
		return $query->result();
	}

	public function sendAutomatically(){
		$cek 	= $this->cek_reminder();
		if (!empty($cek)) {
			foreach ($cek  as $key => $value) {
				$this->email->clear();
				$plannext 	= $this->getData($value->id_reminder);
				$penerima 	= $value->email_penerima;
				$deskripsi 	= $value->deskripsi_atasan;
				$pengirim 	= $this->getPengirim($value->id_pengirim);
				$goal 		= $this->getGoal($plannext->id_bobot);
				$depart		= $this->getDept($plannext->tgs_dept);
				$tanggal	= $plannext->tgl;
				$deadline 	= $plannext->deadline;
				$plan 		= $value->deskripsi_plan;

				//send email
				$this->email_conf();
				$from 		= $pengirim->email;
				$to 		= $penerima;
				$subjek		= 'Reminder Plan Next - KPIM';
				$konten 	= "
				<tr> 
					<h2 align='center'>Reminder Plannext</h2>
				</tr>
				<hr>
				<br>
				<table border='1'>
					<tr>
						<th>Tanggal</th>
						<th>Department</th>
						<th>Goal</th>
						<th>Plan</th>
						<th>Deadline</th>
						<th>Deskripsi Tambahan</th>
					</tr>
					<tr>
						<td>".$tanggal."</td>
						<td>".$depart."</td>
						<td>".$goal."</td>
						<td>".$plan."</td>
						<td>".$deadline."</td>
						<td>".$deskripsi."</td>
					</tr>
				</table>
				<br>

				<tr>
					<td> Pembuat, </td>
				</tr>
				<br><br><br>
				<tr>
					<td>".$pengirim->nama_karyawan."</td>
				</tr>
				<tr>
					<td>".$depart."</td>
				</tr>
				";
				$this->email_content($from,$to,$subjek,$konten);
				if ($this->email->send()) {
					$this->update_Id($value->id_reminder);
				}
				
			}
		}

	}

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
}
?>