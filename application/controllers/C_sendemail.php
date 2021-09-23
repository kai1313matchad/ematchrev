<?php  

class C_sendemail extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(array('M_sendemail','M_kpimmingguan','M_reportsub','M_pilihkaryawan','app_model'));
		$this->load->library(array('session', 'form_validation', 'upload', 'user_agent', 'email', 'mypdf'));
        $this->load->helper(array('url', 'form', 'text', 'html', 'security', 'file', 'directory', 'number', 'date', 'download', 'tgl_indo'));
        $this->load->library('email');
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
		$this->load->view('v_sendemail', $data);
	}

	public function getEmail(){
		$id_dept 	= $this->input->post('id');
		$email 		= $this->M_sendemail->getEmail($id_dept);
		echo json_encode($email);
	}

	public function save(){
		$email_pengirim = $this->M_sendemail->get_emailsender($this->session->userdata('id_karyawan'));
		$email_pengirim = $email_pengirim[0]->email;
		$email_penerima = implode(",", $this->input->post('email'));
		$data	= array(
					'id_pengirim'	=> $this->session->userdata('id_karyawan'),
					'id_bobot' 		=> $this->input->post('idbobot_r'),
					'id_dept'		=> $this->input->post('dept_r'),
					'id_plannext'	=> $this->input->post('idplan'),
					'email_pengirim'=> $email_pengirim,
					'email_penerima'=> $email_penerima,
					'tgl_start'		=> $this->input->post('tgl_r'),
					'tgl_end'		=> $this->input->post('deadline_r'),
					'deskripsi_atasan' => $this->input->post('desc_r'),
					'deskripsi_plan'=> $this->input->post('deskripsi'),
					'tgl_dikirim'	=> $this->input->post('tgl_kirim'),
					'terkirim'		=> 0
				);
		$save = $this->M_sendemail->save_data($data);
		return $save;
	}

	public function getData(){
		$id 	= $this->input->post('id');
		$data 	= $this->M_sendemail->getData($id);
		echo json_encode($data);
	}

	public function send_email(){
		$save = $this->save();
		if ($this->input->post('tgl_kirim') == date('Y-m-d') && $save != 0) {
			$penerima 	= $this->input->post('email');
			$deskripsi 	= $this->input->post('deskripsi');
			$pengirim 	= $this->M_sendemail->getPengirim($this->session->userdata('id_karyawan'));
			$goal 		= $this->M_sendemail->getGoal($this->input->post('idbobot_r'));
			$depart		= $this->M_sendemail->getDept($this->input->post('dept_r'));
			$tanggal	= $this->input->post('tgl_r');
			$deadline 	= $this->input->post('deadline_r');
			$plan 		= $this->input->post('desc_r');

			//send email
			$this->email_conf();
			$from 		= $pengirim->email;
			$to 		= implode(",", $penerima);
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
				$data['status'] = TRUE;
				$data['pesan']  = "Reminder berhasil dikirim";
				$this->M_sendemail->update_Id($save);
 			}else{
				$data['status'] = FALSE;
			}
		}else{
			$data['status'] = TRUE;
			$data['pesan']  = "Reminder berhasil disimpan dan dikirim sesuai dengan tanggal kirim";
		}
		
		echo json_encode($data);

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

	public function sendAutomatically(){
		$cek 	= $this->M_sendemail->cek_reminder();
		if (!empty($cek)) {
			foreach ($cek  as $key => $value) {
				$this->email->clear();
				$plannext 	= $this->M_sendemail->getData($cek->id_reminder);
				$penerima 	= $value->email_penerima;
				$deskripsi 	= $value->deskripsi_atasan;
				$pengirim 	= $this->M_sendemail->getPengirim($value->id_pengirim);
				$goal 		= $this->M_sendemail->getGoal($plannext->id_bobot);
				$depart		= $this->M_sendemail->getDept($plannext->tgs_dept);
				$tanggal	= $plannext->tgl;
				$deadline 	= $plannext->deadline;
				$plan 		= $value->deskripsi_plan;

				//send email
				$this->email_conf();
				$from 		= $pengirim->email;
				$to 		= implode(",", $penerima);
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
				$this->email->send();
			}
		}

	}
}
?>