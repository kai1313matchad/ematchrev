<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pilih Karyawan</title>
	<link rel="icon" href="<?=base_url()?>/favicon.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/select2totree.css" rel="stylesheet">
</head>
<style type="text/css">
	.pad-rentang{
		padding-left:-15px;
	}
</style>
<body class="semua home">
<?php date_default_timezone_set('Asia/Jakarta'); ?>
	<!---Mulai navbar account!-->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container-fluid"> 
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span> 
	            </button>
	            <a href="<?php echo base_url(); ?>home" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> KPIM Online.</a>
	        </div>
	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li><a href="<?php echo base_url();?>reportsub">Penilaian - Report KPIM Mingguan (Subordinate)</a></li>
			        <li><a href="<?php echo base_url(); ?>reportsubnext2">Approve - KPIM Plan Next (Subordinate)</a></li>
	                <li><a href="<?php echo base_url();?>Laporan_goal/atasan">Laporan Goals</a></li>
	                <li class="active"><a href="#">Tambah Goal</a></li>
	                
	                <?php if ($this->session->userdata('level') == 1 ){ ?>
	                <li><a href="<?php echo base_url(); ?>karyawan/bobot">Master Bobot</a></li>
	                 <?php } ?>
	                 <br>
	                <!-- <a class="btn btn-primary navbar-btn" href="<?php echo base_url(); ?>Add_job_subordinate" style="font-family: 'Exo 2', sans-serif; margin-left: 5px "><span class="glyphicon glyphicon-plus"></span> KPIM Subordinate</a> -->
	                <a class="btn btn-warning navbar-btn" href="<?php echo base_url(); ?>kpimmingguan/jadwalnilai" style="font-family: 'Exo 2', sans-serif; margin-left: 5px ">Jadwal Penilaian Terakhir KPIM</a>

	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        <span style="position: absolute; margin-left: -40px; margin-top: -3px">
	                        <?php foreach ($profilku as $row) { ?>
                            <img class="img-responsive" src="<?php echo base_url() ?>/assets/ft_profil/resized/<?php echo $row->img; ?>" alt="<?php echo $row->username; ?>" title="Foto <?php echo $row->username; ?>" style=" border-radius: 50%; width: 2em; height: auto;">
                            <?php } ?>
                            </span>
	                        <strong><?php echo $this->session->userdata('username'); ?></strong>
	                        <span class="glyphicon glyphicon-chevron-down"></span>
	                    </a>
	                    <ul class="dropdown-menu" style="width: 250px">
	                        <li>
	                            <div class="navbar-login">
	                                <div class="row">
	                                    <div class="col-lg-4">
	                                        <p class="text-center">
	                                        <?php foreach ($profilku as $row){ ?>
	                                            <img class="img-responsive" src="<?php echo base_url() ?>/assets/ft_profil/resized/<?php echo $row->img; ?>" alt="<?php echo $row->username; ?>" title="Foto <?php echo $row->username; ?>" style=" border-radius: 50%; border: solid 3px gray; margin-left: 10px">
	                                            <?php } ?>
	                                        </p>
	                                    </div>
	                                    <div class="col-lg-8">
	                                        <p class="text-left" style="max-width: 120px"><strong><?php echo $this->session->userdata('nama_karyawan'); ?></strong></p>
	                                        <p class="text-left small" style="max-width: 120px">
	                                        	<?php foreach ($jabatan as $row){ ?>
													<i><?php echo $row->nama_akses; ?></i>
												<?php }?>
												-
												<?php foreach ($depart as $row){ ?>
													<b><?php echo $row->deptini; ?></b>
												<?php }?>
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <div class="navbar-login navbar-login-session">
	                                <div class="row">
	                                    <div class="col-lg-8">
	                                        <p>
	                                            <a href="<?php echo base_url();?>login/logout" class="btn btn-danger btn-block" style="font-family: 'Exo 2', sans-serif; margin: 0px 25px ">Logout</a>
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                        </li>
	                    </ul>
	                </li>
	            </ul>
	        </div>
	    </div>
	</div>
	<!--selesai navbar-->

	<div style="padding-bottom: 60px; padding-top: 50px;"></div>
	<center><img src="<?php echo base_url();?>assets/img/kpimlogo.png" alt="KIMP Online" name="KPIM Online" style="width:auto; height:90px; margin-bottom: 10px" ></center>
	
	<div class="container-fluid" style="max-width: 600px; background-color: #ebebeb; color: black; border:solid 4px orange; border-radius: 15px;">
		<div class="row"> 
			<h4><div class="col-sm-12 text-center" style="padding-top: 10px">Tambah Goal</div></h4>
		</div>
		<form id="form_kpim" action="<?php echo base_url();?>Tambah_goal_atasan/save" method="POST">
			<div class="row" style="padding-top: 15px">
				<div class="col-sm-3"> 
					<text style="word-spacing: 10px">Departement :</text>
				</div>
				<div class="col-sm-8" style="padding-bottom: 10px">
					<select class="form-control semua" id="pilihdept" name="pilihdept" onchange="isi_goal()" required="required">
						<option value="">--- Pilih Departement ---</option>
						<?php foreach ($isinamadept->result() as $key): ?>
						<option value="<?php echo $key->id_dept;?>"> <?php echo $key->nama_dept;?></option>
						<?php endforeach ?>
				      </select>
				      <input type="hidden" value="<?php echo $this->session->userdata('id_karyawan'); ?>" id="idkar">
				      <input type="hidden" value="<?php echo $this->session->userdata('level'); ?>" id="jab">
				      <input type="hidden" value="<?php echo $this->session->userdata('hak_akses'); ?>" id="hak">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<text style="word-spacing: 12px">Nama Goal :</text>	
				</div>
				<div class="col-sm-8" style="padding-bottom: 10px">
					<input type="text" name="nama_pekerjaan" placeholder="Nama Goal" id="nama_pekerjaan" class="form-control">

				</div>
			</div>
			<div class="row" style="padding-bottom: 10px;">
				<div class="col-sm-3">
					<text style="word-spacing: 32px">Referensi :</text>
				</div>
				<div class="col-sm-8">
					<input type="hidden" id="level_goal" name="level_goal">
					<select style="width: 100%" class="form-control" id="pilihgoalreferensi" name="reference" disabled>
						<option value="">--- Pilih Goal Referensi ---</option>
					</select>
					<i>Note : Goal Referensi dikosongi, jika dijadikan goal utama</i>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"> 
					<text style="word-spacing: 61px">Jenis :</text>
				</div>
				<div class="col-lg-4">
					<input type="radio" name="jenis_goal" value="Pasti"> Pasti</input>
					&nbsp; &nbsp;
					<input type="radio" name="jenis_goal" value="Rutin" checked> Rutin</input>
				</div>
			</div>
			<div class="row" id="rentang-tanggal" style="display: none;">
				<div class="col-sm-3" style="padding-top: 10px">
					<text style="word-spacing: 43px">Tanggal :</text>
				</div>
				<div class="col-sm-8 pad-rentang" style="padding-top: 10px;">
					<div class="col-sm-6">
						<div class='input-group date tgls' id='tgl_input'>     
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type='text' id="tgl_start" class="form-control input-group-addon" name="tgl_start" placeholder="Tgl Start" >
						</div>	
					</div>
					<div class="col-sm-1"></div>
					<div class='input-group date tgls' id='tgl_deadline'>     
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' id="tgl_end" class="form-control input-group-addon" name="tgl_end" placeholder="Tgl Deadline" >
					</div>
				</div>
			</div>
			<div class="row" style="padding-top: 10px;">

			<div class="col-sm-3"> 
				<text style="word-spacing: 16px;">Nilai Goal :</text>
			</div>

			<div id="form_pilih_nilai" class="col-sm-8" style="padding-bottom: 10px">
				<select class="form-control" id="nilai_bobot" name="nilai_bobot" placeholder="Pilih Karyawan" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
					<option value="" selected="">--- Pilih Nilai Bobot ---</option>
					<option value="5">5 ( Lima ) - Ringan</option>
					<option value="6">6 ( Enam ) - Ringan</option>
					<option value="7">7 ( Tujuh ) - Sedang</option>
					<option value="8">8 ( Delapan ) - Sedang</option>
					<option value="9">9 ( Sembilan ) - Berat</option>
					<option value="10">10 ( Sepuluh ) - Berat</option>
				
				
		      </select>
			</div>
		</div>
			<br>
			<div class="row">
				<div class="col-sm-offset-3 col-sm-8 text-center" style="padding-bottom: 15px"> <button type="button" name="input" id="konfirmasi" class="btn btn-primary col-lg-12 btn-block" data-toggle="modal" data-target="#myModal" style="font-family: 'Exo 2', sans-serif; margin-bottom: 10px"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
				</div>
			</div>
			<!-- Modal simpan -->
		  <div class="modal fade" id="myModal" role="dialog" style="padding-top: 100px;">
		    <div class="modal-dialog modal-lg">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><b>Konfirmasi</b></h4>
		        </div>
		        <div class="modal-body">
		           Apakah Anda yakin menginputkan data sebagai berikut?
	                <table class="table">
	                    <tr>
	                        <th>Departement :</th>
	                        <td id="deptnya"></td> <td></td> <td></td>
	                    </tr>
	                    <tr>
	                        <th>Nama Pekerjaan :</th>
	                        <td id="nama_pekerjaannya"></td> <td></td> <td></td>
	                    </tr>
	                    <tr>
	                        <th>Nilai Goal :</th>
	                        <td id="nilai_bobotnya"></td> <td></td> <td></td>
	                    </tr>
	                </table>
		        </div>
		        <div class="modal-footer">
		        	<div class="row">
			        	<div class="col-sm-10">
			        	<!-- ubah warna tombol simpan edit by qoqom -->
				         <button type="submit" id='simpansubordinate' name="input" class="btn btn-success col-sm-12" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
				         </div>
						
						<div class="col-sm-2">
			          	<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-family: 'Exo 2', sans-serif;">Batal</button>
			          	</div>
		          	</div>
		        </div>
		      </div>
		    </div>
		  </div>
		<!-- modal selesai -->
	
		</form>
	</div>
	<br><br>
	<div class="container">
		<div class="col-md-12 col-sm-12">
			<button class="btn btn-sm btn-warning pull-right" style="width: 175px;" data-toggle="modal" data-target="#modalcetak"><span class="glyphicon glyphicon-print"></span> Cetak Goals</button>
			<br><br>
			<div class="table-responsive">
				<table id="databobot" class="table table-bordered table-striped table-hover" width="100%">
					<thead class="text-center" style="background-color: orange;">
						<tr>
							<th style="text-align: center;">No</th>
							<th style="text-align: center;">Department</th>
							<th style="text-align: center;">Type</th>
							<th style="text-align: center;">Nama Goal</th>
							<th style="text-align: center;">Nilai Bobot</th>
							<th style="text-align: center;">Tgl Input</th>
							<th style="text-align: center;">Pembuat</th>
							<th style="text-align: center; width: 10%">Action</th>
						</tr>
					</thead>
					<tbody id="konten"></tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal simpan -->
		  <div class="modal fade" id="modalconfirm" role="dialog" style="padding-top: 100px;">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><b>Konfirmasi</b></h4>
		        </div>
		        <div class="modal-body">
		        	<input type="hidden" name="idbobot" id="idbobot" value="">
		           <font size="3">Apakah Anda yakin untuk close Goal Ini ?</font>
		           <div><span id="namagoal"></span></div>
		           <div style="padding-left: 15px;">
		           		<div id="data-tree">
		           	
		           		</div>
		           </div>
		        </div>
		        <div class="modal-footer">
		        	<div class="row">
			        	<div class="col-sm-9">
			        	<!-- ubah warna tombol simpan edit by qoqom -->
				         <button type="submit" id='deletegoal' name="input" class="btn btn-success col-sm-12" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-ok-circle"></span> Close</button>
				         </div>
						
						<div class="col-sm-3">
			          	<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-ban-circle"></span> Batal</button>
			          	</div>
		          	</div>
		        </div>
		      </div>
		    </div>
		  </div>
		<!-- modal selesai -->

		<div class="modal fade" id="modalcetak" role="dialog" style="padding-top: 100px;">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><b>Cetak Goal</b></h4>
		        </div>
		        <div class="modal-body">
		        	<form id="form_cetak" method="POST" action="Tambah_goal_atasan/print_goal">
		        		<div class="form-group">
		        			<label>Pilih Department : </label>
		        			<select class="form-control semua" id="pilihdept2" name="pilihdept2">
								<option value="">--- Pilih Departement ---</option>
								<?php foreach ($isinamadept->result() as $key): ?>
								<option value="<?php echo $key->id_dept;?>"> <?php echo $key->nama_dept;?></option>
								<?php endforeach ?>
					      	</select>
		        		</div>
		        	</form>
		        </div>
		        <div class="modal-footer">
		        	<div class="row">
			        	<div class="col-sm-9">
			        	<!-- ubah warna tombol simpan edit by qoqom -->
				         <button type="submit" id="btn_cetakgoal" name="cetak" class="btn btn-success col-sm-12" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-print"></span> Cetak</button>
				         </div>
						
						<div class="col-sm-3">
			          	<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-ban-circle"></span> Batal</button>
			          	</div>
		          	</div>
		        </div>
		      </div>
		    </div>
		  </div>

		  <div class="modal fade" id="modaledit" role="dialog" style="padding-top: 100px;">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><b>Edit Goal</b></h4>
		        </div>
		        <div class="modal-body">
		        	<form id="form-edit">
		        		<input type="hidden" name="idgoal" id="idgoal" value="">
		        		<input type="hidden" name="selectdept" id="selectdept" value="">
		        		<div class="form-group">
		        			<label>Goal Referensi :</label>
		        			<div id="form_pilih_goal">
								<input type="hidden" id="editlevel_goal" name="editlevel_goal">
								<input type="hidden" id="editreferensigoal" name="editreferensigoal">
								<select class="form-control semua" id="editpilihgoalreferensi" name="editpilihgoalreferensi" onclick="isilevel_edit()">
									<option value="">--- Pilih Goal Referensi ---</option>
							    </select>
							      
							</div>
		        		</div>
		        		<div class="form-group">
		        			<label>Nama Goal : </label>
		        			<input type="text" name="namagoal_edit" id="namagoal_edit" class="form-control">
		        		</div>
		        		<div class="form-group">
		        			<label>Jenis :</label>&nbsp;&nbsp;&nbsp;&nbsp;
		        			<input type="radio" id="radio1" name="jenisgoal_edit" value="Pasti"> Pasti</input>
							&nbsp; &nbsp;
							<input type="radio" id="radio2" name="jenisgoal_edit" value="Rutin"> Rutin</input>
		        		</div>
		        		<div class="form-group" id="rentang-edit" style="display: none;">
		        			<label>Periode :</label><br>
		        			<div class="col-sm-6">
								<div class='input-group date tgls' id='tgl_input2'>     
									<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
									</span>
									<input type='text' id="tgl_start_edit" class="form-control input-group-addon" name="tgl_start2" placeholder="Tgl Start" >
								</div>	
							</div>
							<div class='input-group date tgls' id='tgl_deadline2'>     
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input type='text' id="tgl_end_edit" class="form-control input-group-addon" name="tgl_end2" placeholder="Tgl Deadline" >
							</div>
		        		</div>
		        		<div class="form-group">
		        			<label>Nilai Bobot :</label>
							<select class="form-control" id="nilaibobot_edit" name="nilaibobot_edit" placeholder="Pilih">
								<option value="5">5 ( Lima ) - Ringan</option>
								<option value="6">6 ( Enam ) - Ringan</option>
								<option value="7">7 ( Tujuh ) - Sedang</option>
								<option value="8">8 ( Delapan ) - Sedang</option>
								<option value="9">9 ( Sembilan ) - Berat</option>
								<option value="10">10 ( Sepuluh ) - Berat</option>
					      	</select>
		        		</div>
		        	</form>
		        </div>
		        <div class="modal-footer">
		        	<div class="row">
			        	<div class="col-sm-9">
			        	<!-- ubah warna tombol simpan edit by qoqom -->
				         <button type="submit" id='editgoal' name="input" class="btn btn-success col-sm-12" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button>
				         </div>
						
						<div class="col-sm-3">
			          	<button type="button" class="btn btn-danger" data-dismiss="modal" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-ban-circle"></span> Batal</button>
			          	</div>
		          	</div>
		        </div>
		      </div>
		    </div>
		  </div>

	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2totree.js"></script>
	<script>
		$(document).ready(function(){
			$("#pilihgoalreferensi").select2ToTree();
			datatabel();
			$("databobot").DataTable();
			$('#tgl_input, #tgl_input2').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				// minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});
			$('#tgl_deadline, #tgl_deadline2').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				// minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});

			$('input:radio[name="jenis_goal"]').change(function(){
		        if ($(this).is(':checked') && $(this).val() == 'Pasti') {
		            $('#rentang-tanggal').show();
		            $('#tgl_start').prop('required', true);
		            $('#tgl_end').prop('required', true);
		    	}
		    	if ($(this).is(':checked') && $(this).val() == 'Rutin') {
		            $('#rentang-tanggal').hide();
		            $('#tgl_start').val(""); 	$('#tgl_start').prop('required', false);
		            $('#tgl_end').val("");		$('#tgl_end').prop('required', false);
		    	}
		    });
		    $('input:radio[name="jenisgoal_edit"]').change(function(){
		        if ($(this).is(':checked') && $(this).val() == 'Pasti') {
		            $('#rentang-edit').show();
		            $('#tgl_start_edit').prop('required', true);
		            $('#tgl_end_edit').prop('required', true);
		    	}
		    	if ($(this).is(':checked') && $(this).val() == 'Rutin') {
		            $('#rentang-edit').hide();
		            $('#tgl_start_edit').val(""); 	$('#tgl_start_edit').prop('required', false);
		            $('#tgl_end_edit').val("");		$('#tgl_end_edit').prop('required', false);
		    	}
		    });
		});
	</script>
	<script>
		 $('#bt-remove').on('click', function(){
	        $('#forpesan').remove();
	     });

	     //print list goal by department
		 $('#btn_cetakgoal').on('click', function(){
		 	var dept = $("#pilihdept2").val();
		 	window.open('<?=base_url()?>Tambah_goal_atasan/print_goal/'+dept, '_blank');

		 });
		$("#konfirmasi").click(function(){
			if ( $('#pilihdept').val() === '' ) {
				alert('Pilih Departement Terlebih Dahulu');
				return false;
			}
			if ( $('#nama_pekerjaan').val() === '' ) {
				alert('Isi Nama Goal Terlebih Dahulu');
				return false;
			}
			if ( $('#nilai_bobot').val() === '' ) {
				alert('Isi Nilai Goal Terlebih Dahulu');
				return false;
			}
			$("#deptnya").text($("#pilihdept option:selected").text());
			if ($('#tgl_start').val()=="" && $('#tgl_end').val()=="") {
				$("#nama_pekerjaannya").text($("#nama_pekerjaan").val());	
			}else{
				$("#nama_pekerjaannya").text($("#nama_pekerjaan").val()+" ("+$('#tgl_start').val()+" s.d "+$('#tgl_end').val()+")");
			}
			$("#nilai_bobotnya").text($("#nilai_bobot option:selected").text());
			return true;

		});

		$("#editgoal").on('click', function(){
			$.ajax({
				url: "<?php echo site_url('Tambah_goal_atasan/editGoal') ?>",
				type: "POST",
				dataType: "JSON",
				data: $("#form-edit").serialize(),
				success: function(data){
					if (data.status) {
						alert('Data Goal berhasil disimpan');	
						location.reload();	
					}else{
						alert('Error Update data');
					}
				}
			});
		});

		function datatabel(){
        	$.ajax({
            url : "<?php echo site_url('Tambah_goal_atasan/getData')?>",
            type: "POST",
            dataType: "JSON",
            success: function(data)
            { 
            	$('#konten').empty();
            	                     
                for (var i = 0; i < data.length; i++) {
                	var close = '';
                	if (data[i]['is_close']=='1') {
                		close = "disabled";
                	}
                  var $tr = $('<tr>').append(
                        $('<td>').text(i+1+".").css('text-align','center'),
                        $('<td>').text(data[i]["nama_dept"]),
                        $('<td>').text(data[i]["jenis_bobot"]).css('text-align','center'),
                        $('<td>').text(data[i]["nama"]),
                        $('<td>').text(data[i]["bobot"]).css('text-align','center'),
                        $('<td>').text(moment(data[i]["tgl_diinput"]).format('DD-MM-YYYY')).css('text-align','center'),
                        $('<td>').text(data[i]["nama_karyawan"]),
                        $('<td align="center">').html("<button class= 'btn btn-sm btn-danger' type='button' onclick='cek_goal("+data[i]['id_bobot']+")'"+close+"><span class='glyphicon glyphicon-remove'></span></button> | <button class= 'btn btn-sm btn-primary' type='button' onclick='edit_goal("+data[i]['id_bobot']+")'"+close+"><span class='glyphicon glyphicon-pencil'></span></button>")
                        ).appendTo('#konten');
                }
                $('#databobot').DataTable({
			        "lengthMenu": [[20, 30, 50, -1], [20, 30, 50, "All"]]
			    });
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
        }

        function edit_goal(id){
        	$("#modaledit").modal('show');
        	$('#tgl_start_edit').val('');
	    	$('#tgl_end_edit').val('');
        	$.ajax({
        		url: "<?php echo site_url('Tambah_goal_atasan/getEdit') ?>",
        		type: "POST",
        		dataType: "JSON",
        		data: {id: id},
        		success: function(data){
        			$("#idgoal").val(id);
        			$("#selectdept").val(data.id_dept);
        			$("#namagoal_edit").val(data.nama);
        			$("input[name=jenisgoal_edit][value=" + data.jenis_bobot + "]").prop('checked', true);
        			if (data.jenis_bobot == "Pasti") {
        				$("#rentang-edit").show();
        				$("#tgl_start_edit").val(data.tgl_start);
        				$("#tgl_end_edit").val(data.tgl_end);
        			}else{
        				$("#rentang-edit").hide();
        			}
        			$("#nilaibobot_edit").val(data.bobot).change();
        			$('#editreferensigoal').val(data.id_parent);
                    $('#editpilihgoalreferensi').val(data.id_parent);
                    //Edit by qoqom
                    // alert(data.id_parent);
                    if (data.id_parent == 0) {
                    	isigoal_edit(0);
                    }else{
                    	isigoal_edit(data.id_parent);	
                    }
        		}
        	});
        }

        function isigoal_edit(id){
    		$.ajax({
			                url : "<?php echo site_url('Tambah_goal_atasan/ambildatabobotkpim')?>",
			                type: "POST",
			                data: {pilihdept: $('#selectdept').val()},
			                dataType: "JSON",
			                success: function(data)
			                { 
			                	$('#editpilihgoalreferensi').empty();

	                    		var select = $('#editpilihgoalreferensi')[0];
	                    		
	                    		option = document.createElement('option');
		                        option.value = '';
		                        option.text = '--- Pilih Goal Referensi ---';
		                        select.add(option);
								$("#editpilihgoalreferensi").select2ToTree({treeData: {dataArr:data}, maximumSelectionLength: 3});

			                    $("#editpilihgoalreferensi").select2ToTree();
			                    $('#editpilihgoalreferensi').val(id).trigger("change");
			                },
			                error: function (jqXHR, textStatus, errorThrown)
			                {
			                    alert('Error get data from ajax');
			                }
			            });
    	}
    	function isilevel_edit(){
			var id = $('#editpilihgoalreferensi').val();
			$.ajax({
	                url : "<?php echo site_url('Tambah_goal_atasan/ambilbobotsatu/')?>" + id,
	                type: "GET",
	                data: {pilihdept:$('#selectdept').val()},
	                dataType: "JSON",
	                success: function(data)
	                {   alert(data.level);
	                    $('#editlevel_goal').val(data.level);
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error get data from ajax');
	                }
	            });
	    }

        function cek_goal(id){
        	// alert(id);
        	$("#idbobot").val(id);
        	$("#modalconfirm").modal('show');
        	$.ajax({
        		url : "<?php echo site_url('Tambah_goal_atasan/cek_deletegoal')?>",
        		type: "POST",
        		data: {id_bobot: id},
        		dataType: "JSON",
        		success: function(data){
        			// console.log(data);
        			$("#namagoal").html("<b>"+data.nama+"</b>");
        			$("#data-tree").html(data.goal);
        		}
        	});
        	// $("#data-tree").html(id);
        }
        $("#deletegoal").on("click", function(){
        	var id = $("#idbobot").val();
        	$("#modalconfirm").modal('hide');
        	$.ajax({
        		url: "<?php echo site_url('Tambah_goal_atasan/delete_goal') ?>",
        		type: "POST",
        		data: {idbobot: id},
        		dataType: "JSON",
        		success: function(data){
        			if (data.status) {
        				location.reload();
        			}
        		} 
        	});
        });

        function isi_goal(){
        	$("#pilihgoalreferensi").prop("disabled", false);
        	$.ajax({
			    url : "<?php echo site_url('Tambah_goal_atasan/ambildatabobotkpim')?>",
			    type: "POST",
			    data: {pilihdept:$('#pilihdept').val()},
			    dataType: "JSON",
			    success: function(data)
			    { 
			    	$('#pilihgoalreferensi').empty();

	        		var select = $('#pilihgoalreferensi')[0];
	        		
	        		option = document.createElement('option');
		            option.value = '';
		            option.text = '--- Pilih Goal Referensi ---';
		            select.add(option);

			        $("#pilihgoalreferensi").select2ToTree({treeData: {dataArr:data}, maximumSelectionLength: 3});
			        $("#pilihgoalreferensi").select2ToTree();
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			        alert('Error get data from ajax');
			    }
			});
        }

        function isilevel(id){
			var id = $('#pilihgoalreferensi').val();
			$.ajax({
	                url : "<?php echo site_url('Tambah_goal_atasan/ambilbobotsatu/')?>" + id,
	                type: "GET",
	                data: {pilihdept:$('#pilihdept').val()},
	                dataType: "JSON",
	                success: function(data)
	                {   
	                    $('#level_goal').val(data.level);
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error get data from ajax');
	                }
	            });
	    }

		</script>
</body>
</html>