<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Crud extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('projectreminder/M_crud','crud');
			$this->load->model('projectreminder/M_data');
			$this->load->library('email');
		}

		function tambah_schedule()
		{
			$tema = $this->input->post('tema');
			$dept = $this->input->post('kodedept');	
			$tgl = date('Y-m-d',strtotime($this->input->post('tanggal')));
			$jam = $this->input->post('jam');	
		    $info = $this->input->post('info');	
		    $data = array(
					'SCH_TITLE' => $tema,
					'SCH_DEPT' => $dept,
					'SCH_DATE' => $tgl,
					'SCH_TIME' => $jam,
					'SCH_INFO' => $info
					);
			    $table = 'schedule';
				$this->M_data->input_data($data,$table);
				redirect('Post/create');
		}	

		function update_schedule()
		{
			$id = $this->input->post('id');
			$tema = $this->input->post('tema');
			$dept = $this->input->post('kodedept');	
			$tgl = date('Y-m-d',strtotime($this->input->post('tanggal')));
			$jam = $this->input->post('jam');	
		    $info = $this->input->post('info');	
		    $status = $this->input->post('status');	
		    $where =  array('SCH_ID' => $id);
		    $data = array(
					'SCH_TITLE' => $tema,
					'SCH_DEPT' => $dept,
					'SCH_DATE' => $tgl,
					'SCH_TIME' => $jam,
					'SCH_INFO' => $info,
                    'STATUS' =>  $status
					);
			$table='schedule';
			$this->M_data->update_data($where,$data,$table);
			redirect('Post/edit');
		}	

		function update_notulen()
		{
			$id = $this->input->post('id');
		    $hasil = $this->input->post('hasil');
		    $where =  array('SCH_ID' => $id);
		    $data = array(
					'SCHDT_INFO' => $hasil,
					);
			$table='schedule';
			$this->M_data->update_data($where,$data,$table);
			redirect('Post/notulen');
		}

        function get_reminder()
        {
        	$data = $this->crud->get_tanggal_reminder();
            echo json_encode($data);
        }

        function get_tanggal_reminder($id)
        {
        	$data = $this->crud->get_tanggal_reminder_by_id($id);
            echo json_encode($data);
        }

        function kirim_email($id)
        {
        	$data = $this->crud->get_reminder($id); 
        	$nama = $data->nama_reminder;
        	$tgl = $data->tanggal_batas;
        	$to = $data->email_atasan;
        	$dept = $data->dept;
        	$jenis = $data->jenis_reminder;
        	$info = $data->info_reminder;
        	$nama_jenis = $this->crud->get_jenis_reminder($jenis);
            $nama_dept = $this->crud->get_department($dept);
            $data = array(
            		'status' => '1'
                    );
            $where = 'id_reminder ='.$id;
            $table = 'tanggal_reminder';
            $this->M_data->update_data($where,$data,$table);
            $this->email_conf();
			$from = 'systemmatch@match-advertising.com';
			$subj = 'Project Reminder';
			$content = 'Dear Team <br> Diberitahukan reminder sebagai berikut<br>
				<table>
					<tr>
						<td>Nama Reminder</td>
						<td>
							: '.$nama.'
						</td>
					</tr>
					<tr>
						<td>Jenis Reminder</td>
						<td>
							: '.$nama_jenis.'
						</td>
					</tr>
					<tr>
						<td>Tanggal Batas Waktu</td>
						<td>
							: '.$tgl.'
						</td>
					</tr>
					<tr>
						<td>Dept. Terkait</td>
						<td>
							: '.$nama_dept.'
						</td>
					</tr>
					<tr>
						<td>Info</td>
						<td>
							: '.$info.'
						</td>
					</tr>
				</table>
				<br>Diharapkan perhatiannya';
			$this->email_content($from,$to,$subj,$content);
			$this->email->send();
        }

		function tambah_reminder()
		{
            $this->_validate_reminder();
			$nama = $this->input->post('nama');
			$jenis = $this->input->post('jenis');	
			$info = $this->input->post('info');
			$tgl = date('Y-m-d',strtotime($this->input->post('tanggal')));
			$tgl2 = date('Y-m-d',strtotime($this->input->post('tanggal_reminder')));
			$tgl3 = date('Y-m-d',strtotime($this->input->post('tanggal_reminder2')));
			$tgl4 = date('Y-m-d',strtotime($this->input->post('tanggal_reminder3')));

			$person = $this->input->post('sch_member[]');
			$email = array();
			$member = array();
			foreach ($person as $prs) 
			{
				$que = $this->db->get_where('karyawan',array('id_karyawan'=>$prs));
				$res = $que->row();
				$email[] = $res->email;
				$member[] = $res->nama_karyawan;
				//$table3 = 'member_schedule';
				//$data3 = array(
				//		'kry_id' => $prs,
				//		'sch_id' => $id
				//	);
				//$insert3 = $this->crud->save($table3,$data3);
			}
			$dest = implode(', ', $email);
			//$email = $this->input->post('email');
			$to	= $dest;

			$dept = $this->input->post('dept');
		    $data = array(
					'nama_reminder' => $nama,
					'jenis_reminder' => $jenis,
					'info_reminder' => $info,
					'tanggal_batas' => $tgl,
					'email_atasan' => $to,
					'dept' => $dept
					);
			$table = 'reminder';
		    $this->M_data->input_data($data,$table);
		    $data['status']=($this->db->affected_rows())?TRUE:FALSE;

		    $id_reminder = $this->db->insert_id();
		    $data2=array(
		    	   'id_reminder' => $id_reminder,
		    	   'tgl_reminder' => $tgl2,
		    	   'status' => '0'
		    	   );
		    $table2 = 'tanggal_reminder';
		    $this->M_data->input_data($data2,$table2);
		    $data3=array(
		    	   'id_reminder' => $id_reminder,
		    	   'tgl_reminder' => $tgl3,
		    	   'status' => '0'
		    	   );
		    $this->M_data->input_data($data3,$table2);
		    $data4=array(
		    	   'id_reminder' => $id_reminder,
		    	   'tgl_reminder' => $tgl4,
		    	   'status' => '0'
		    	   );
		    $this->M_data->input_data($data4,$table2);

            $nama_jenis = $this->crud->get_jenis_reminder($jenis);
            $nama_dept = $this->crud->get_department($dept);
			$dest = $email;
			$this->email_conf();
			$from = 'systemmatch@match-advertising.com';
			$to = $dest;
			$subj = 'Project Reminder';
			$content = 'Dear Team <br> Diberitahukan reminder sebagai berikut<br>
				<table>
					<tr>
						<td>Nama Reminder</td>
						<td>
							: '.$nama.'
						</td>
					</tr>
					<tr>
						<td>Jenis Reminder</td>
						<td>
							: '.$nama_jenis.'
						</td>
					</tr>
					<tr>
						<td>Tanggal Batas Waktu</td>
						<td>
							: '.$tgl.'
						</td>
					</tr>
					<tr>
						<td>Dept. Terkait</td>
						<td>
							: '.$nama_dept.'
						</td>
					</tr>
					<tr>
						<td>Info</td>
						<td>
							: '.$info.'
						</td>
					</tr>
				</table>
				<br>Diharapkan perhatiannya';
			$this->email_content($from,$to,$subj,$content);
			$this->email->send();
            echo json_encode($data);
		    // redirect('projectreminder/Reminder/create');
		}

		function ubah_reminder()
		{
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$jenis = $this->input->post('jenis');	
			$info = $this->input->post('info');
			$tgl = date('Y-m-d',strtotime($this->input->post('tanggal')));
			$tgl2 = date('Y-m-d',strtotime($this->input->post('tanggal_reminder')));
			$tgl3 = date('Y-m-d',strtotime($this->input->post('tanggal_reminder2')));
			$tgl4 = date('Y-m-d',strtotime($this->input->post('tanggal_reminder3')));

			$person = $this->input->post('sch_member[]');
			$email = array();
			$member = array();
			foreach ($person as $prs) 
			{
				$que = $this->db->get_where('karyawan',array('id_karyawan'=>$prs));
				$res = $que->row();
				$email[] = $res->email;
				$member[] = $res->nama_karyawan;
				//$table3 = 'member_schedule';
				//$data3 = array(
				//		'kry_id' => $prs,
				//		'sch_id' => $id
				//	);
				//$insert3 = $this->crud->save($table3,$data3);
			}
			$dest = implode(', ', $email);
			//$email = $this->input->post('email');
			$to	= $dest;
			$dept = $this->input->post('dept');
			$where=array('id' => $id);
		    $data = array(
					'nama_reminder' => $nama,
					'jenis_reminder' => $jenis,
					'info_reminder' => $info,
					'tanggal_batas' => $tgl,
					'email_atasan' => $to,
					'dept' => $dept
					);
			$table = 'reminder';
		    $this->M_data->update_data($where,$data,$table);

		    $table2 = 'tanggal_reminder';
		    $where2 = array('id_reminder' => $id);
		    $this->M_data->delete_data($where2,$table2);
		    $id_reminder =$id;
		    $data2=array(
		    	   'id_reminder' => $id_reminder,
		    	   'tgl_reminder' => $tgl2,
		    	   'status' => '0'
		    	   );
		    $this->M_data->input_data($data2,$table2);
		    $data2=array(
		    	   'id_reminder' => $id_reminder,
		    	   'tgl_reminder' => $tgl3,
		    	   'status' => '0'
		    	   );
		    $this->M_data->input_data($data2,$table2);
		    $data2=array(
		    	   'id_reminder' => $id_reminder,
		    	   'tgl_reminder' => $tgl4,
		    	   'status' => '0'
		    	   );
		    $this->M_data->input_data($data2,$table2);
            $nama_jenis = $this->crud->get_jenis_reminder($jenis);
			$dest = $email;
			$this->email_conf();
			$from = 'systemmatch@match-advertising.com';
			$to = $dest;
			$subj = 'Project Reminder';
			$content = 'Dear Team <br> Diberitahukan reminder sebagai berikut<br>
				<table>
					<tr>
						<td>Nama Reminder</td>
						<td>
							: '.$nama.'
						</td>
					</tr>
					<tr>
						<td>Jenis Reminder</td>
						<td>
							: '.$nama_jenis.'
						</td>
					</tr>
					<tr>
						<td>Tanggal Batas Waktu</td>
						<td>
							: '.$tgl.'
						</td>
					</tr>
					<tr>
						<td>Dept. Terkait</td>
						<td>
							: '.$dept.'
						</td>
					</tr>
					<tr>
						<td>Info</td>
						<td>
							: '.$info.'
						</td>
					</tr>
				</table>
				<br>Diharapkan perhatiannya';
			$this->email_content($from,$to,$subj,$content);
			$this->email->send();

			redirect('projectreminder/Reminder/edit_reminder');
		}

		function tambah_jenis()
		{
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');	
		    $data = array(
					'nama_jenis' => $nama,
					'keterangan' => $keterangan,
					);
			    $table = 'jenis_reminder';
				$this->M_data->input_data($data,$table);
				redirect('projectreminder/Reminder/create_jenis');
		}

		function ubah_jenis()
		{
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');	
			$where=array('id' => $id);
		    $data = array(
					'nama_jenis' => $nama,
					'keterangan' => $keterangan,
					);
			    $table = 'jenis_reminder';
				$this->M_data->update_data($where,$data,$table);
				redirect('projectreminder/Reminder/edit_jenis_reminder');
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

		public function drop_krybydept()
		{
			//$dept = $this->input->post('sch_dept[]');
			$dpt = array();
			//for($i=0;$i<count($dept);$i++)
			//{
				$que = $this->db->get('dept');
				$res = $que->row();
				$dpt[] = $res->id_dept;
			//}
			$check = implode('', $dpt);
			$data = $this->crud->get_krybydept($check);
			echo json_encode($data);
		}

		public function _validate_reminder()
		{
		    $data = array();
		    $data['error_string'] = array();
		    $data['inputerror'] = array();
		    $data['status'] = TRUE;

		    if($this->input->post('jenis') == '')
		    {
		      $data['inputerror'][] = 'jenis';
		      $data['error_string'][] = 'Jenis Reminder Tidak Boleh Kosong';
		      $data['status'] = FALSE;
		    }
		    
		    if($data['status'] === FALSE)
		    {
		      echo json_encode($data);
		      exit();
		    }
		}
	}
?>