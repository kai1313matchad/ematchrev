<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>KPIM Online - Plan Next</title>
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
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
</head>
<style type="text/css">
	@media screen and (max-width: 1024px) 
	{
      .jarak 
      {
        margin-bottom: 10px;
      }
      .test 
      {
    	background-color: #eee;
   	 }
    }
    .blink 
    {
	    animation-duration: 1s;
	    animation-name: blink;
	    animation-iteration-count: infinite;
	    animation-timing-function: steps(2, start);
	}
	@keyframes blink
	{
	    0% 
	    {
	        opacity: 1;
	    }
	    80% 
	    {
	        opacity: 1;
	    }
	    81% 
	    {
	        opacity: 0;
	    }
	    100% 
	    {
	        opacity: 0;
	    }
	}

	button
	{
		font-family: 'Exo 2', sans-serif !important;
	}

	select#konten
	{
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    text-indent: 1px;
	    text-overflow: '';
	}
	
	.bg_bulan{
		background-color:#83B33A;
		
		color:white;
	}

	.bg_hari{
		background-color:#27C0B2;
		color:white;
	}
	#rentang-tanggal2{
		margin-left: -15px;
	}
	
</style>
<body class="bg semua">
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
	            <a href="<?php echo base_url();?>home" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> KPIM Online.</a>
	        </div>
	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li ><a href="<?php echo base_url();?>kpimmingguan">KPIM Mingguan</a></li>
	                <li class="active"><a href="#">KPIM Plan Next</a></li>
	                <li class="dropdown">
	                	<?php
							foreach ($inboxblmbaca as $total)
							foreach ($noteblmbaca as $totalnote)
							foreach ($planblmbaca as $totalplan)
							foreach ($noteplan as $totalnoteplan) 
							{ 
						?>
			            <a href="#" class="dropdown-toggle test" data-toggle="dropdown"><text class="blink">Notifikasi</text>
			            	<span class="caret"></span>
				                <?php if(isset($totalnote->jumlah))
				                {
				                ?> 
			                	<text style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
								<?=$totalnote->jumlah?> <span class="glyphicon glyphicon-pencil"></span> 	
								</text>
				                <?php 
				            	}
				            	?>
			                <!-- batas -->
				                <?php if(isset($totalplan->jumlah))
				                {
				                ?> 
			                    <text style="background-color: #ce0808; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
								<?=$totalplan->jumlah?> <span class="glyphicon glyphicon-remove"></span> 	
								</text>
			                    <?php
				                }
				                ?>
			                <!-- batas -->
				                <?php if(isset($totalnoteplan->jumlah))
				                {
				                ?> 
			                    <text style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
								<?=$totalnoteplan->jumlah?> <span class="glyphicon glyphicon-pencil"></span>
								</text>
				                <?php
				                }
				                ?>
			                <!-- batas -->
				                <?php if(isset($total->jumlah))
				                {
				                ?> 
			                    <text style="background-color: black; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
								<?=$total->jumlah?> <span class="glyphicon glyphicon-envelope"></span> 	
								</text>
				                <?php
				            	}
				            	?>
			        	</a>
			            	<ul class="dropdown-menu"> 
								<li>
									<a href="<?php echo base_url(); ?>kpimmingguan/replykpim">KPIM Mingguan
				                    <?php if(isset($totalnote->jumlah)){?>
			                    		<div style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px; text-align: center;">
										<?=$totalnote->jumlah?> <span class="glyphicon glyphicon-pencil"></span> Catatan Baru
										</div>
									<?php }?>
			                        </a>
			                    </li>
			                    <li>
			                    	<a href="<?php echo base_url(); ?>kpimmingguan/replykpimnext">KPIM Plan Next
			                        <?php if(isset($totalplan->jumlah)){?>
			                       		<div style="background-color: #ce0808; color: white; border-radius: 5px; padding: 5px 5px; text-align: center;">
										<?=$totalplan->jumlah?> <span class="glyphicon glyphicon-remove"></span> Plan tidak disetujui
										</div>
									<?php }?>
									<!-- ganti -->
									<?php if(isset($totalnoteplan->jumlah)){ ?>
			                       		<div style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px; text-align: center;">
										<?=$totalnoteplan->jumlah?> <span class="glyphicon glyphicon-pencil"></span> Catatan pada Plan
										</div>
									<?php }?>
			                        </a>
			                    </li>
			                    <li>
			                    	<a href="<?php echo base_url(); ?>kpimmingguan/pesan">Pesan
									<?php if(isset($total->jumlah)){ ?>
			                       		<div style="background-color: black; color: white; border-radius: 5px; padding: 5px 5px; text-align: center;">
										<?=$total->jumlah?> <span class="glyphicon glyphicon-envelope"></span> Pesan Baru
										</div>
									<?php }?>
									</a>
									<?php }?>
			                    </li>
			                </ul>
					</li>
	                <a class="btn btn-primary navbar-btn" href="<?php echo base_url(); ?>kpimmingguan/jadwal" style="font-family: 'Exo 2', sans-serif; margin-left: 5px ">Jadwal Pengumpulan KPIM</a>
	               
<!-- 	                <?php 
					if ($this->session->userdata('level') == 1 )
					{
						$base = base_url();
						echo '<li class="dropdown">
				                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Data Karyawan
				                    <span class="caret"></span>
				                    </a>
				                    <ul class="dropdown-menu"> 
				                        <li><a href="'.$base.'Addkaryawan">Tambah Karyawan</a></li>
				                        <li><a href="'.$base.'Karyawan">Data Karyawan</a></li>
				                    </ul>
				                 </li>';
					}
					?> -->
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        <span style="position: absolute; margin-left: -40px; margin-top: -3px">
	                        <?php
								foreach ($profilku as $row)
								{ 
							?>	
							<?php $alamatfoto =  $row->img; 
							if (empty($alamatfoto))
							{
								$alamatfoto = 'kosong.png';
							}?>
                            <img class="img-responsive" src="<?php echo base_url() ?>/assets/ft_profil/resized/<?php echo $alamatfoto; ?>" alt="<?php echo $row->username; ?>" title="Foto <?php echo $row->username; ?>" style=" border-radius: 50%; width: 2em; height: auto;">
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
	                                             <?php
													foreach ($profilku as $row) { 
												?>	
												<?php $alamatfoto =  $row->img; 
												if (empty($alamatfoto)) {
													$alamatfoto = 'kosong.png';
												}?>
	                                            <img class="img-responsive" src="<?php echo base_url() ?>/assets/ft_profil/resized/<?php echo $alamatfoto; ?>" alt="<?php echo $row->username; ?>" title="Foto <?php echo $row->username; ?>" style=" border-radius: 50%; border: solid 3px gray; margin-left: 10px">
	                                            <?php } ?>
	                                        </p>
	                                    </div>
	                                    <div class="col-lg-8">
	                                        <p class="text-left" style="max-width: 120px"><strong><?php echo $this->session->userdata('nama_karyawan'); ?></strong></p>
	                                        <p class="text-left small" style="max-width: 120px">
	                                        	<?php
													foreach ($jabatan->result() as $row) { 
												?>		
													<i><?php echo $row->nama_akses; ?></i>
												<?php	}
												?>
												-
												<?php
													foreach ($dept->result() as $row) { 
												?>		
													<b><?php echo $row->deptini; ?></b>
												<?php	}
												?>

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
	                                            <a href="<?php base_url();?>login/logout" class="btn btn-danger btn-block" style="font-family: 'Exo 2', sans-serif; margin: 0px 25px ">Logout</a>
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


	<div class="container" style="width:95%">
		<div class="background">
			<h1 style="padding-top: 10px"><center>KPIM Online - Plan Next</center></h1>
			<br><br>
			<div class="row" id="alert_">
			</div>
			<div class="row">
				<div class="col-lg-4 text-left" style="margin-left: 5px">
					<h4><strong>
						<span class="glyphicon glyphicon-user"></span> Nama  &nbsp &nbsp &nbsp&nbsp: &nbsp<?php echo $this->session->userdata('nama_karyawan'); ?>
					</strong></h4>
					<h4><strong>
						<span class="glyphicon glyphicon-briefcase"></span> Jabatan &nbsp  : &nbsp<?php echo $this->session->userdata('jabatannya'); ?>
					</strong></h4>
				</div>
			</div>
			<form id="form_kpim">
				<div class="row">
					<div class="col-lg-5 text-left" style="margin-left: 5px">
						<h4><strong>Rencana : </strong></h4>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-md-2"> -->
					<div class="col-lg-2 col-sm-12 col-xs-12">
						<div class="form-group">
							<!-- <label>Tanggal Start :</label> -->
							<div class='input-group date tgls' id='tgl_input'>     
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input type='text' class="form-control input-group-addon" name="tgl" placeholder="Start" required/>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class='input-group date tgls' id='tgl_dl'>     
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input type='text' class="form-control input-group-addon" placeholder="Deadline" name="deadline" id="deadline" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-4 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
						<div class="form-group">
							<!-- <label>Department</label> -->
							<select name="tgs_dept"  id="pilihdept" class="form-control" data-live-search="true" onchange="isigoal()">
								<option value="all">-- Pilih Dept --</option>
								
								<?php foreach ($isinamadept->result() as $key): ?>
								<option value="<?php echo $key->id_dept;?>"> <?php echo $key->nama_dept;?></option>
								<?php endforeach ?>
							</select>
						</div>
						<!-- <label>Goal Referensi</label> -->
						<div class="form-group">
					        <div class="col-sm-12 col-xs-12 col-lg-12 input-group">
					        	<input type="hidden" name="goalsId">
						        <select class="form-control" style="max-width: 322px;" id="pilihgoalreferensi" name="pilihgoalreferensi" onchange="pickGoals()">
										<option value="">--- Pilih Goal ---</option>
							    </select>
							    <span class="input-group-btn">
									<button type="button" onclick="add_goal()" style="font-family: 'Exo 2', sans-serif; " name="input" id="btn_addgoal" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Goal</button>	
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-sm-12 col-xs-12" style="margin-top: -50px;">
						<div class="form-group">
						<!-- <label>Deskripsi Plan</label> -->
							<textarea class="form-control jarak" rows="5" cols="30" placeholder="*Description" name="action" id="action" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
						</div>
				    </div>
					<div class="col-lg-3 col-sm-12 col-xs-12">
						<button type="button" onclick="refresh_plan()" style="font-family: 'Exo 2', sans-serif; " name="input" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
						<button type="button" onclick="add_plan()" style="font-family: 'Exo 2', sans-serif; " name="input" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Tambah Data</button>
					</div>		
				</div>
			</form>
			<br>
			<div class="row">
				<div class="col-sm-12 col-xs-12 table-responsive">
                    <table id="dataTablenext" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
                        <thead class="text-center" style="background-color: #6db1ff">
                            <tr>
								<th class="col-xs-1 text-center">Tanggal</th>
								<th class="col-xs-2 text-center">Goal</th>
								<th class="col-xs-2 text-center">Type</th>
								<th class="col-xs-4 text-center">Plan</th>
								<th class="col-xs-1 text-center">Deadline</th>
								<th class="col-xs-1 text-center">Departement</th>
								<th class="col-xs-1 text-center">Status</th>
								<th class="col-xs-2 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbcontent"></tbody>
                    </table>
                </div>
			</div>
			<div class="row">
				<div class="col-lg-12" style="margin-right: 15px">
					<div class="col-sm-2" style="float: left;">
						<a class= "btn btn-primary" style="font-family: 'Exo 2', sans-serif; margin-top:5px;" href="<?php echo base_url();?>kpimmingguan"><span class="glyphicon glyphicon-arrow-left"></span><h7> KPIM Mingguan</h7></a>
					</div>
					<div class="col-sm-3" style="float: right;">
						<button class= "btn btn-primary" style="font-family: 'Exo 2', sans-serif; margin-top:5px;" onclick="ayo(); printContent('div1'); window.location.reload();return false;"><span class="glyphicon glyphicon-print"></span> Print</button>
						<a class= "btn btn-primary" style="font-family: 'Exo 2', sans-serif; margin-top:5px;" href="<?php echo base_url();?>home"><span class="glyphicon glyphicon-home"></span><h7>  Home</h7></a>
						<button type="button" class="btn btn-warning btnHide" style="font-family: 'Exo 2'; margin-top:5px;"  onclick="chkPlan()">Send Plan Tambahan</button>
						<button type="button" class="btn btn-warning" style="font-family: 'Exo 2'; margin-top:5px"  onclick="opensendplan()">Send</button>
					</div>
				</div>
			</div>

	<h3 style="padding-top: 1px"><center>(Isi dulu dan Permintaan Approve Kepada Atasan Masing-masing)</center></h3>

			<br><br><br>
			<div class="row">
				<div class="container">
					<div class="dialogbox">
					    <div class="body">
					    	<span class="tip tip-up"></span>
					    	<div class="message">
					    		<p class="info">
								<text style="font-family: 'Exo 2', sans-serif, medium">
									<b>Penjelasan Warna pada tabel :</b><br>
								</text>
									<text style="font-family: 'Exo 2', sans-serif; font-style: italic;">
										<table style="font-family: 'Exo 2', sans-serif; ">
											<tr>
												<td style="width: 20px;">1. </td>
												<td><div style="background-color:  #ddd; width: 30px; height: 30px; border:black 1px solid; "></div></td>
												<td align="left">&nbsp; Warna Abu-abu adalah input kpim plannext sesuai dengan deadline goal / tanpa deadline</td>
											</tr>
											<tr>
												<td style="width: 20px;">2. </td>
												<td><div style="background-color:  #cf2323; width: 30px; height: 30px; border:black 1px solid; "></div></td>
												<td align="left">&nbsp; Warna Merah adalah data KPIM yang melebihi deadline goal</td>
											</tr> 
										</table>
									</text>
								</p>
					    		<p class="info">
									<text style="font-family: 'Exo 2', sans-serif, medium">
									<b>Ketentuan pengisian nilai aktual :</b><br></text>
									<text style="font-family: 'Exo 2', sans-serif; font-style: italic;">
										1. Total maksimal score karyawan adalah 100.<br>
										2. Total nilai maksimal persentase KPIM adalah 75%.<br>
										3. Standart bobot penilaian KPIM ditentukan oleh masing - masing departement perusahaan.<br>
										4. Standart penilaian KPIM karyawan (result) dilihat dari selesai dikerjakan, masih proses atau tidak dikerjakannya suatu goals.<br>
										5. Penilaian juga dipertimbangkan berdasarkan Goals, Description, Result dan Deadline.<br>
										6. Untuk Goals yang tidak tercapai pada minggu I harus tetap di cantumkan di KPIM minggu berikutnya.<br>
										7. Plannext(Rencana kegiatan/pekerjaan) wajib diisi dan diapprove.<br>
										8. Plannext KPIM karyawan 5 hari kerja memiliki batas akhir permintaan approve atasan hari sabtu jam 00.00 WIB (malam). <br>
										9. Plannext KPIM karyawan 6 hari kerja memiliki batas akhir permintaan approve atasan hari minggu jam 00.00 WIB (malam). <br>
									</text>
								</p>
					      	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="modal_goals" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #6db1ff">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Edit</b></h4>
		        </div>
		        <div class="modal-body">
		        	<div class="row">
		        		<div class="col-sm-12 col-xs-12 table-responsive">
		        			<table id="dtbGoals" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
		        				<thead style="background-color: #6db1ff">
		        					<tr>
		        						<td class="text-center">Dept.</td>
		        						<td class="text-center">Goal/Pekerjaan</td>
		        						<td class="text-center">Action</td>
		        					</tr>
		        				</thead>
		        				<tbody id="tbgoalcontent"></tbody>
		        			</table>
		        		</div>
		        	</div>
		       	</div>
		        <div class="modal-footer" style="background-color: #6db1ff">
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		    </div>
		</div>
	</div>


	<div class="modal fade" id="modal_edit" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #6db1ff">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Edit</b></h4>
		        </div>
		        <div class="modal-body">
		        	<form id="form_edit" class="form-horizontal">
		        		<div class="row">
		        			<div class="col-sm-4">
								<h4>Tanggal</h4>
							</div>
							<div class="col-sm-8">
								<!-- <input type="text" name="tgl_plan" class="form-control" readonly> -->
								<div class='input-group date tgls' id='tgl_edit'>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
									<input type='text' class="form-control input-group-addon" name="tgl_plan" placeholder="Tanggal" required/>
								</div>
							</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-sm-4">
		        				<h4>Dept</h4>
		        			</div>
		        			<div class="col-sm-8">
		        				<!-- <input type="text" name="dept_plan" class="form-control" readonly> -->
		        				<input type="hidden" name="id_plan">
		        				<!-- edited by qoqom -->
		        				<select name="tgs_dept_plan"  id="pilihdept_plan" class="form-control" data-live-search="true" onchange="isigoal_editplan()">
									<option value="all">-- Pilih Dept --</option>
									<?php foreach ($isinamadept->result() as $key): ?>
									<option value="<?php echo $key->id_dept;?>"> <?php echo $key->nama_dept;?></option>
									<?php endforeach ?>
								</select>
		        			</div>
		        		</div>

		        		<div class="row">
		        			<div class="col-sm-4">
		        				<h4>Goals</h4>
		        			</div>
		        			<div class="col-sm-8">
		        				<!-- <input type="text" name="goals_plan" class="form-control" readonly> -->
		        				<select name="goals_plan" id="goals_plan" class="form-control" data-live-search="true" onchange="pickGoals_edit()">
		        				</select>
		        			</div>
		        		</div>

		        		<div class="row">
		        			<div class="col-sm-4">
		        				<h4>Description</h4>
		        			</div>
		        			<div class="col-sm-8">
		        				<textarea class="form-control" rows="4" name="desc_plan"></textarea>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-sm-4">
		        				<h4>Deadline</h4>
		        			</div>
		        			<div class="col-sm-8">
		        				<!-- <input type="text" name="dl_plan" class="form-control" readonly> -->
		        				<div class='input-group date tgls' id='dl_edit'>
		        					<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
									<input type='text' class="form-control input-group-addon" name="dl_plan" placeholder="Tanggal" required/>
								</div>
		        			</div>
		        		</div>
		        	</form>
		       	</div>
		        <div class="modal-footer" style="background-color: #6db1ff">
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" style="font-family: 'Exo 2', sans-serif;" name="input"  class="btn btn-primary" onclick="upd_plan()">Save changes</button>
		        </div>
		    </div>
		</div>
	</div>


	<div class="modal fade" id="modal_hapus" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Konfirmasi</b></h4>
		        </div>
		        <div class="modal-body" style="background-color: #2372ef; color: white;">
					<h4 class="text-center">Yakin Hapus?</h4>
		        	<form id="form_hapus" class="form-horizontal">
		        		<input type="hidden" name="id_plan_hps">
		        	</form>
		       	</div>
		        <div class="modal-footer">
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" style="font-family: 'Exo 2', sans-serif;" name="input"  class="btn btn-primary" onclick="del_plan()">Hapus</button>
		        </div>
		    </div>
		</div>
	</div>


	<div class="modal fade" id="modal_send" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Konfirmasi</b></h4>
		        </div>
		        <div class="modal-body" style="background-color: #2372ef; color: white;">
		        	<div class="row" id="alertSend_">

					</div>
		        	<form id="form_send" class="form-horizontal">
		        		<h4 class="text-center">Anda akan mengirim Plan KPIM periode tanggal</h4>
		        		<h3 class="text-center"><span name="awal"></span> s/d <span name="akhir"></span></h3>
		        		<input type="hidden" name="awal_">
		        		<input type="hidden" name="akhir_">
		        		<input type="hidden" name="countMust_">
		        		<input type="hidden" name="countPlan_">
		        		<div class="row">
		        			<div class="col-xs-6">
		        				<h4 class="text-center">Yang Harus Diinput</h4>
		        				<p id="periode" class="text-center"></p>
		        			</div>
		        			<div class="col-xs-6">
		        				<h4 class="text-center">Plan Anda</h4>
		        				<p id="periodeplan" class="text-center"></p>
		        			</div>
		        		</div>
		        	</form>
		       	</div>
		        <div class="modal-footer">
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" style="font-family: 'Exo 2', sans-serif;" name="input"  class="btn btn-primary" onclick="sendplan_()">Kirim</button>
		        </div>
		    </div>
		</div>
	</div>


	<div class="modal fade" id="modal_sendadd" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Konfirmasi</b></h4>
		        </div>
		        <div class="modal-body" style="background-color: #2372ef; color: white;">
		        	<div class="row" id="alertSendAdd_">

					</div>
					<div class="row">
						<div class="col-xs-12"><h3 class="text-center">Anda Akan Menambakan Plan Minggu Ini Pada Tanggal</h3></div>
						<div class="col-xs-12 text-center" id="planAdd">
							
						</div>
					</div>
		       	</div>
		        <div class="modal-footer">
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" style="font-family: 'Exo 2', sans-serif;" name="input"  class="btn btn-primary" onclick="sendaddplan_()">Kirim</button>
		        </div>
		    </div>
		</div>
	</div>


	<div class="modal fade" id="modal_note" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Catatan</b></h4>
		        </div>
		        <div class="modal-body" style="background-color: #2372ef; color: white;">
		        	<div class="row">
		        		<div class="form-group">
		        			<div class="col-xs-offset-2 col-xs-8">
		        				<textarea class="form-control" name="notes" readonly></textarea>
		        			</div>
		        		</div>
		        	</div>
		       	</div>
		        <div class="modal-footer">
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-default" data-dismiss="modal">Tutup</button>
		        </div>
		    </div>
		</div>
	</div>

	<div class="modal fade" id="modal_goal" role="dialog" style="padding-top: 100px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title text-center" id="myModalLabel"><b>Tambah Goal</b></h4>
		        </div>
		        <form name="form_tambah_goal" id="form_tambah_goal">
		        	<!-- edit by qoqom -->
		        <input type="hidden" name="pilihdept_tambah" id="pilihdept_tambah" value="">	
		        <div class="modal-body" style="background-color: #70a8ff;">
		        	<div class="row">
		        		<div class="form-group">
		        			<div class="col-sm-3"> 
								<label>Goal Referensi:</label>
							</div>
		        			<div class="col-xs-9 col-sm-9">
		        				<!-- <div class="input-group"> -->
				        			<input type="hidden" name="goalsId">
					        		<select class="form-control" id="pilihgoalreferensi2" name="pilihgoalreferensi2" onchange="pickGoals2()">
									<option value="">--- Pilih Goal ---</option>
						    		</select>
								<!-- </div> -->
		        			</div>
		        		</div>
		        	</div>
		        	<br>
		        	<div class="row">
		        		<input type="hidden" id="id_dept_tambah" name="id_dept_tambah">
		        		<div class="col-sm-3"> 
							<label>Nama Goal :</label>
						</div>
		        		<div class="col-xs-9 col-sm-9">
			        		<div class="form-group">
			        			<input type='text' class="form-control" placeholder="Nama Goal" name="nama_goal" id="nama_goal" required>
			        		</div>
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="col-sm-3"> 
							<label>Jenis Goal :</label>
						</div>
						<div id="form_jns_goal" class="col-sm-9" style="padding-bottom: 10px">
							<input type="radio" name="jenis_goal" value="Pasti"> Pasti</input>&nbsp;&nbsp;
							<!-- deleted by qoqom -->
							<!-- <input type="radio" name="jenis_goal" value="Plan">Plan</input> -->
							<input type="radio" name="jenis_goal" value="Rutin"> Rutin</input>
						</div>
			        </div>
			        <div class="row" id="rentang-tanggal">
						<div class="col-sm-3">
							<label>Tanggal :</label>
						</div>
						<div id="rentang-tanggal2" class="col-sm-9" style="padding-bottom: 10px">
							<!-- <div class="form-group"> -->
								<div class="col-sm-6">
									<div class='input-group date tgls' id='tgl_start'>     
										<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type='text' id="tgl_start" class="form-control input-group-addon" name="tgl_start" placeholder="Tgl Start" >
									</div>	
								</div>
								<div class='input-group date tgls' id='tgl_deadline'>     
									<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
									</span>
									<input type='text' id="tgl_end" class="form-control input-group-addon" name="tgl_end" placeholder="Tgl Deadline" >
								</div>
							<!-- </div> -->
						</div>
					</div>
			        <div class="row">
			        	<div class="col-sm-3"> 
			        		<label>Nilai Goal :</label>
			        	</div>
			        	<div id="form_pilih_nilai" class="col-sm-9" style="padding-bottom: 10px">
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
			        <!-- disable by qoqom -->
			        <!-- <div class="row">
			        	<div class="col-xs-offset-3 col-xs-10">
				        	<div class="form-group">
				        		<button type="button" onclick="tambah_goal()" style="font-family: 'Exo 2', sans-serif; " name="input" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Simpan Goal</button>
				        	</div>
			        	</div>
			        </div> -->
		       	</div>
		        <div class="modal-footer">
		        	<!-- added by qoqom -->
		        	<button type="button" onclick="tambah_goal()" style="font-family: 'Exo 2', sans-serif; " name="input" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Simpan Goal</button>
		        	<button type="button" style="font-family: 'Exo 2', sans-serif;" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Tutup</button>
		        </div>
		    	</form>
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
			//added by qoqom
			$('#rentang-tanggal').hide();
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


			$("#pilihgoalreferensi").select2ToTree();
			$("#pilihgoalreferensi, #btn_addgoal").prop('disabled', 'disabled');
			$("#pilihgoalreferensi2").prop('disabled', 'disabled');
			$('#dataTablenext').DataTable({
				//order: [[0, 'desc']],
				bSort : false,
				//scrollY: '500px',
				fixedHeader: true,
				scrollCollapse: true,
				paging: false,
				searching: false,
				bInfo : false
	        });
			//added by qoqom
			$('#tgl_start').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				// minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});
			$('#tgl_deadline').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				// minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});


			$('table').on('scroll', function () {
				$("table > *").width($("table").width() + $("table").scrollLeft());
			});
			
			get_list();
			$('#tgl_input').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});
			$('#tgl_dl').datetimepicker({
				format: 'YYYY-MM-DD'
			});
			$('#tgl_edit').datetimepicker({
				format: 'YYYY-MM-DD'
			});
			$('#dl_edit').datetimepicker({
				format: 'YYYY-MM-DD'
			});
			$('#pilihdept_plan').selectpicker({});
			$('#pilihdept').selectpicker({});

			
		});
		$('#pilihdept').on('change', function(){
			if ($('#pilihdept').val() == "") {
				$("#pilihgoalreferensi").prop('disabled', 'disabled');
				$('#pilihgoalreferensi2').prop('disabled','disabled');
			}else{
				$("#pilihgoalreferensi, #btn_addgoal, #deadline").prop('disabled', false);
				$('#pilihgoalreferensi2').prop('disabled', false);	
			}
			
		});

		function add_goal()
		{
			$('#modal_goal').modal('show');
		}

		function tambah_goal()
		{	
			$.ajax({
		        url : "<?php echo site_url('Kpimmingguannext/simpanbobot2')?>",
		        type: "POST",
		        data: $('#form_tambah_goal').serialize(),
		        // data: {pilihdept:$('#pilihdept').val()},
		        dataType: "JSON",
		        success: function(data)
		        {
		        	// var base_url = window.location.origin;
		        	var base_url = <?php echo json_encode(base_url()); ?>;
		        	if (data.test == 1){
		        		alert('Data Bobot berhasil disimpan');
		        		$('#modal_goal').modal('hide');
		        		//added by qoqom
		        		isigoal();
		        		//deleted by qoqom
		        		// window.location.replace(base_url+'/ematch/kpimmingguannext');
		        	}else{
		        		alert('Gagal menyimpan data !')
		        	}
		        	
		        	// redirect(base_url(). 'kpimmingguannext' , 'refresh');
		        },
		        error: function (jqXHR, textStatus, errorThrown)
		        {
		            alert('Error get data from ajax');
		        }
		    });
		}
		function isigoal(){
			var id = $('#pilihdept').val();
			//added by qoqom
			$('#pilihdept_tambah').val(id);
    		$.ajax({
	                url : "<?php echo site_url('kpimmingguannext/pick_goal/')?>"+id,
	                type: "GET",
	                // data: {pilihdept:$('#pilihdept').val()},
	                dataType: "JSON",
	                success: function(data)
	                { 
	                	$('#pilihgoalreferensi').empty();
	                	$('#pilihgoalreferensi2').empty();
                		var select = $('#pilihgoalreferensi')[0];
                		var select2 = $('#pilihgoalreferensi2');
                		
                		option = document.createElement('option');
                        option.value = '';
                        option.text = '--- Pilih Goal ---';
                        option2 = document.createElement('option');
                        
                        //added by qoqom
                        $('#pilihgoalreferensi2').width(393);
                        select.add(option);
                        select2.add(option2);

	                    var mydata = data;

						$("#pilihgoalreferensi").select2ToTree({treeData: {dataArr:mydata}, maximumSelectionLength: 3});
	                    $("#pilihgoalreferensi").select2ToTree();
	                    $("#pilihgoalreferensi2").select2ToTree({treeData: {dataArr:mydata}, maximumSelectionLength: 3});
	                    $("#pilihgoalreferensi2").select2ToTree();
	                },
	                error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error get data from ajax');
	                }
	            });
    	}
    	//add by qoqom
    	function isigoal_edit(id){
    		$.ajax({
    			//disabled by qoqom
			    // url : "<?php //echo site_url('kpimmingguannext/pick_goal/')?>"+id,
			    url : "<?php echo site_url('kpimmingguannext/ambildatabobotkpim/')?>"+id,
			    type: "POST",
			    data: {pilihdept:$('#pilihdept_plan').val()},
			    dataType: "JSON",
			    success: function(data)
			    { 
			    	$('#goals_plan').empty();

	        		var select = $('#goals_plan')[0];
	        		
	        		option = document.createElement('option');
		            option.value = '';
		            option.text = '--- Pilih Goal ---';
		            select.add(option);

			        var mydata = data;
			        $('#goals_plan').width(300);
					$("#goals_plan").select2ToTree({treeData: {dataArr:mydata}, maximumSelectionLength: 3});
			        $("#goals_plan").select2ToTree();
			        $('#goals_plan').val(id).trigger("change");
			    },
			    error: function (jqXHR, textStatus, errorThrown)
			    {
			        alert('Error get data from ajax');
			    }
			});
    	}
    	//added by qoqom
    	function isigoal_editplan(){
    		var id = $('#pilihdept_plan').val();
    		// $('#pilihdept_').val(id);
    		$.ajax({
	            url : "<?php echo site_url('kpimmingguannext/pick_goal/')?>"+id,
	            type: "GET",
	            // data: {pilihdept:$('#pilihdept').val()},
	            dataType: "JSON",
	            success: function(data)
	            { 
	            	$('#goals_plan').empty();
	            	$('#goals_plan').empty();
            		var select = $('#goals_plan')[0];
            		var select2 = $('#goals_plan')[0];
            		
            		option = document.createElement('option');
                    option.value = '';
                    option.text = '--- Pilih Goal ---';
                    //added by qoqom
                    $('#goals_plan').width(300);
                    select.add(option);
                    select2.add(option);

	                var mydata = data;

					$("#goals_plan").select2ToTree({treeData: {dataArr:mydata}, maximumSelectionLength: 3});
	                $("#goals_plan").select2ToTree();
	                // $("#goals_plan").select2ToTree({treeData: {dataArr:mydata}, maximumSelectionLength: 3});
	                // $("#goals_plan").select2ToTree();
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error get data from ajax');
	            }
	        });
    	}
		function chkPlan()
		{
			$('#alertSendAdd_').empty();
			$.ajax({
	            url : "<?php echo site_url('Kpimmingguannext/chk_planthisweek')?>",
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	if(data.status)
                	{
                		$('#planAdd').empty();
                		for (var i = 0; i < data['perplan'].length; i++)
	                	{
	                		var v = $('<h4>').append(moment(data['perplan'][i]).locale('id').format('dddd, DD-MM-YYYY')).appendTo('#planAdd');
	                	}
                	}
                	else
                	{
                		var dv = $('<div class="col-sm-12">').append('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Plan Anda Minggu Ini Tidak Lengkap, Tidak Input Pada Tanggal '+data.res+'</div>').appendTo('#alertSendAdd_');
                	}
                	$('#modal_sendadd').modal('show');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop bank');
                }
            });
		}

		function sendaddplan_()
		{
			$.ajax({
		        url : "<?php echo site_url('Kpimmingguannext/sendPlanAdd')?>",
		        type: "GET",
		        dataType: "JSON",
	            success: function(data)
	            {
	            	if(data.status)
	                {
	                	window.location.reload(true);
	                }
	                else
	                {
	                	var dv = $('<div class="col-sm-12">').append('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Plan Anda Minggu Ini Tidak Lengkap, Tidak Input Pada Tanggal '+data.res+'</div>').appendTo('#alertSendAdd_');
	                }
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	            	alert('Send Plan Add Error');
	            }
	        });
		}

		function add_plan()
		{
			var rs = validate_()
			if(rs > 0 )
			{
				alert('Data Belum Lengkap');
			}
			else
			{
				$.ajax({
		            url : "<?php echo site_url('Kpimmingguannext/add_plannext')?>",
		            type: "POST",
		            data: $('form').serialize(),
		            dataType: "JSON",
	            	success: function(data)
	                {
	                	if(data.status)
	                	{
	                		// $("#dataTablenext").dataTable().fnDestroy();
	                		$("#dataTablenext").dataTable().fnDraw();
	                		$('#action').val("");
	                		
	                		get_list();
	                		// $('#form_kpim')[0].reset();
	                		// $('#pilihdept').selectpicker('refresh');
	                	}
	                	else
	                	{
	                		var dv = $('<div class="col-sm-12">').append(data.lb_msg).appendTo('#alert_');
	                	}
	                },
	            	error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error get data from ajax drop bank');
	                }
	            });
			}
		}

		function refresh_plan()
		{
			$("#dataTablenext").dataTable().fnDraw();
			get_list();
			$('#form_kpim')[0].reset();
	        $('#pilihdept').selectpicker('refresh');
		}

		function upd_plan()
		{
			if ($('[name="tgl_plan"]').val() == '' || $('[name="tgs_dept_plan"]').val() == '' || $('[name="goals_plan"]').val() == '' || $('[name="desc_plan"]').val() == '' || $('[name="dl_plan"]').val() == '')
			{
				alert('Data Tidak Lengkap');
			}
			else
			{
				$.ajax({
		            url : "<?php echo site_url('Kpimmingguannext/upd_plannext')?>",
		            type: "POST",
		            data: $('#form_edit').serialize(),
		            dataType: "JSON",
	            	success: function(data)
	                {
	                	if(data.status)
	                	{
	                		$("#dataTablenext").dataTable().fnDestroy();
	                		get_list();
	                		// drop_goals(0);
	                		$('#form_kpim')[0].reset();
	                		$('#pilihdept').selectpicker('refresh');
	                		$('#modal_edit').modal('hide');
	                	}
	                	else
	                	{
	                		var dv = $('<div class="col-sm-12">').append(data.lb_msg).appendTo('#alert_');
	                	}
	                },
	            	error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error get save data');
	                }
	            });
			}
		}

		function del_plan()
		{
			$.ajax({
	            url : "<?php echo site_url('Kpimmingguannext/del_plannext')?>",
	            type: "POST",
	            data: $('#form_hapus').serialize(),
	            dataType: "JSON",
            	success: function(data)
                {
                	if(data.status)
                	{
                		// $("#dataTablenext").dataTable().fnDestroy();
                		$("#dataTablenext").dataTable().fnDraw();
                		get_list();
                		// drop_goals(0);
                		$('#form_kpim')[0].reset();
                		$('#pilihdept').selectpicker('refresh');
                		$('#modal_hapus').modal('hide');
                	}
                	else
                	{
                		var dv = $('<div class="col-sm-12">').append(data.lb_msg).appendTo('#alert_');
                	}
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get save data');
                }
            });
		}

		function opensendplan()
		{
			$('#alertSend_').empty();
			$.ajax({
	            url : "<?php echo site_url('Kpimmingguannext/getplantosend_')?>",
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	$('[name="awal"]').text(moment(data.monday).locale('id').format('DD-MM-YYYY'));
                	$('[name="akhir"]').text(moment(data.saturday).locale('id').format('DD-MM-YYYY'));
                	$('[name="awal_"]').text(data.monday);
                	$('[name="akhir_"]').text(data.saturday);
                	$('[name="countMust_"]').val(data['period'].length);
                	$('[name="countPlan_"]').val(data['perplan'].length);
                	$('#periode').empty();
                	$('#periodeplan').empty();
                	for (var i = 0; i < data['period'].length; i++)
                	{
                		var v = $('<h4>').append(moment(data['period'][i]).locale('id').format('dddd, DD-MM-YYYY')).appendTo('#periode');
                	}
                	for (var i = 0; i < data['perplan'].length; i++)
                	{
                		var v = $('<h4>').append(moment(data['perplan'][i]).locale('id').format('dddd, DD-MM-YYYY')).appendTo('#periodeplan');
                	}
                	$('#modal_send').modal('show');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Send Plan Error');
                }
            });
		}

		function sendplan_()
		{
			var countMust = $('[name="countMust_"]').val();
			var countPlan = $('[name="countPlan_"]').val();
			if(countPlan < countMust)
			{
				var dv = $('<div class="col-sm-12">').append('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Jumlah Plan Anda Kurang Dari Jumlah Hari Kerja Anda Untuk Minggu Depan</div>').appendTo('#alertSend_');
			}
			else
			{
				$.ajax({
		            url : "<?php echo site_url('Kpimmingguannext/sendPlan')?>",
		            type: "GET",
		            dataType: "JSON",
	            	success: function(data)
	                {
	                	if(data.status)
	                	{
	                		window.location.reload(true);
	                	}
	                	else
	                	{
	                		var dv = $('<div class="col-sm-12">').append('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Jumlah Plan Anda Kurang Dari Jumlah Hari Kerja Anda Untuk Minggu Depan</div>').appendTo('#alertSend_');
	                	}
	                },
	            	error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Send Plan Error');
	                }
	            });
			}
		}

		function get_list()
		{
			var i=0;
			$('#tbcontent').empty();
			$.ajax({
	            url : "<?php echo site_url('Kpimmingguannext/get_allplannext')?>",
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
					
					function idnBulanTahun(mY){
						//format parameter mm-yyyy
						var d = mY.split('-');
						var m = parseInt(d[0])-1;
						var bulan = ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI",
						  "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"
						];
						return bulan[m]+' '+d[1]; 
					}
					
					function unique(array){
						return array.filter(function(el,index,arr){
							return index == arr.indexOf(el);
						});
					}
					
					var bulan  = [];
					var cekDt  = '';
					for (var i = 0; i < data.length; i++){
						$tgl	= data[i]["tgl"].split('-');
						$dt 	= $tgl[1]+'-'+$tgl[0]; 
						if(cekDt != $dt) {
							//alert($dt);
							bulan.push($dt);
						}
						cekDt = $dt;
					}
					
					var hari   = [];
					var cekHr  = '';
					for (var i = 0; i < data.length; i++){
						$dt 	= data[i]["tgl"]; 
						if(cekHr != $dt) {
							//alert($dt);
							hari.push($dt);
						}
						cekHr = $dt;
					}
					
					$.each(bulan,function(i,val){
						$bulan = val;
						$('<tr>').append($('<td class="text-left bg_bulan" colspan="8"><b>'+idnBulanTahun(val)+'</b></td>')).appendTo('#tbcontent');
						
						//$('<tr>').append($('<td class="text-left bg_bulan"><b>'+idnBulanTahun(val)+'</b></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>')).appendTo('#tbcontent');
						
						$.each(hari,function(j,isi){
							$bln	= isi.split('-');
							$tb		= $bln[1]+'-'+$bln[0]; 
							if($tb==$bulan){
								$hari = isi;
								$('<tr>').append($('<td class="text-left bg_hari" colspan="8"><b>'+moment(isi).locale('id').format('dddd, DD-MM-YYYY')+'</b></td>')).appendTo('#tbcontent');
								
								//$('<tr>').append($('<td class="text-left bg_hari"><b>'+moment(isi).locale('id').format('dddd, DD-MM-YYYY')+'</b></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>')).appendTo('#tbcontent');
								
								$no = 1;
								for (var i = 0; i < data.length; i++){
									if(isi==data[i]["tgl"]){
										var tgl_in = Date.parse(data[i]["tgl"]);
										var tgl_dl = Date.parse(data[i]["deadline"]);
										
										var btn = (data[i]["id_approve"] != '1')?'<td class="text-center"><button type="button" onclick="edit_('+data[i]["id"]+')" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> <text style="text-transform: capitalize;"> Edit</text></button><button type="button" onclick="hapus_('+data[i]["id"]+')" class="btn btn-danger btn-sm" class="btn btn-default" style="text-transform: capitalize;"> <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>':'<td class="text-center"><button type="button" class="btn btn-default btn-sm" disabled><span class="glyphicon glyphicon-edit"></span> <text style="text-transform: capitalize;"> Edit</text></button><button type="button" class="btn btn-default btn-sm" class="btn btn-default" style="text-transform: capitalize;" disabled> <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>';
										
										var sts = (data[i]["id_approve"] != '0')?'<td class="text-center"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span></button><br><button type="button" onclick="note_('+data[i]["id"]+')" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span>Note</button></td>':'<td class="text-center"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button><br><button type="button" onclick="note_('+data[i]["id"]+')" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span>Note</button></td>';
										
										//var $tr = $('<tr>').append($('<td class="text-left" colspan="7">aaaa</td>')).appendTo('#tbcontent');
										var merah  = '';
										if (data[i]['tgl'] >= data[i]['tgl_end'] && data[i]['jenis_bobot'] == "Pasti") {
											merah  = ' style="background-color: #cf2323; color: white;"';
										}
										var $tr = $('<tr '+merah+'>').append(
											//$('<td class="text-center" data-order="'+tgl_in+'">'+moment(data[i]["tgl"]).locale('id').format('dddd, DD-MM-YYYY')+'</td>'),
											$('<td class="text-center">'+$no+'</td>'),
											$('<td class="text-center">'+data[i]["nama_goals"]+'</td>'),
											$('<td class="text-center">'+data[i]["jenis_bobot"]+'</td>'),
											$('<td class="text-center">'+data[i]["action"]+'</td>'),
											$('<td class="text-center" data-order="'+tgl_dl+'">'+moment(data[i]["deadline"]).locale('id').format('dddd, DD-MM-YYYY')+'</td>'),
											$('<td class="text-center">'+data[i]["nama_dept"]+'</td>'),
											$(sts),
											$(btn)
										).appendTo('#tbcontent');
										
										$no++;
									}
								}
							}
						});
					});
					//dtables();
					
                	/* for (var i = 0; i < data.length; i++)
                	{
                		var tgl_in = Date.parse(data[i]["tgl"]);
                		var tgl_dl = Date.parse(data[i]["deadline"]);
						
                		var btn = (data[i]["id_approve"] != '1')?'<td class="text-center"><button type="button" onclick="edit_('+data[i]["id"]+')" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-edit"></span> <text style="text-transform: capitalize;"> Edit</text></button><button type="button" onclick="hapus_('+data[i]["id"]+')" class="btn btn-default btn-sm" class="btn btn-default" style="text-transform: capitalize;"> <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>':'<td class="text-center"><button type="button" class="btn btn-default btn-sm" disabled><span class="glyphicon glyphicon-edit"></span> <text style="text-transform: capitalize;"> Edit</text></button><button type="button" class="btn btn-default btn-sm" class="btn btn-default" style="text-transform: capitalize;" disabled> <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>';
						
                		var sts = (data[i]["id_approve"] != '0')?'<td class="text-center"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok"></span></button><br><button type="button" onclick="note_('+data[i]["id"]+')" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span>Note</button></td>':'<td class="text-center"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button><br><button type="button" onclick="note_('+data[i]["id"]+')" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span>Note</button></td>';
						
						//var $tr = $('<tr>').append($('<td class="text-left" colspan="7">aaaa</td>')).appendTo('#tbcontent');
						
                		var $tr = $('<tr>').append(
                			$('<td class="text-center" data-order="'+tgl_in+'">'+moment(data[i]["tgl"]).locale('id').format('dddd, DD-MM-YYYY')+'</td>'),
                			$('<td class="text-center">'+data[i]["nama_goals"]+'</td>'),
                			$('<td class="text-center">'+data[i]["action"]+'</td>'),
                			$('<td class="text-center" data-order="'+tgl_dl+'">'+moment(data[i]["deadline"]).locale('id').format('dddd, DD-MM-YYYY')+'</td>'),
                			$('<td class="text-center">'+data[i]["nama_dept"]+'</td>'),
                			$(sts),
                			$(btn)
                		).appendTo('#tbcontent');
                	} 
                	dtables();*/ 
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop bank');
                }
            });
		}

		function dtables()
      	{
	        $('#dataTablenext').DataTable({
				order: [[0, 'desc']],
				scrollY: 300,
				paging: false
	        });
      	}

      	function dtb_goals()
      	{
	        $('#dtbGoals').DataTable({});
      	}

      	function modal_goals(id)
      	{
      		$("#dtbGoals").dataTable().fnDestroy();
      		$('#tbgoalcontent').empty();
      		$.ajax({
	            url : "<?php echo site_url('karyawan/getbobot2_/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                    	var $tr = $('<tr>').append(
                    		$('<td class="text-center">'+data[i]["nama_dept"]+'</td>'),
                    		$('<td class="text-center">'+data[i]["nama"]+'</td>'),
                    		$('<td class="text-center"><button type="button" onclick="pickGoals('+data[i]["id_bobot"]+')" class="btn btn-primary btn-sm" class="btn btn-default" style="text-transform: capitalize;"> Pilih</button></td>')
                    		).appendTo('#tbgoalcontent');
                    }
                    $('#dtbGoals').DataTable({});
                    $('#modal_goals').modal('show');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data for goals list');
                }
            });
      	}

      	function openGoals()
      	{
      		$("#dtbGoals").dataTable().fnDestroy();
      		$('#tbgoalcontent').empty();
      		var id = $('#pilihdept option:selected').val();
      		if(id!='all')
      		{
      			$.ajax({
		            url : "<?php echo site_url('karyawan/getbobot2_/')?>"+id,
		            type: "GET",
		            dataType: "JSON",
	            	success: function(data)
	                {
	                    $('#tbgoalcontent').empty();
	                    $("#dtbGoals").dataTable().fnDestroy();
	                    for (var i = 0; i < data.length; i++)
	                    {
	                    	var $tr = $('<tr>').append(
	                    		$('<td class="text-center">'+data[i]["nama_dept"]+'</td>'),
	                    		$('<td class="text-center">'+data[i]["nama"]+'</td>'),
	                    		$('<td class="text-center"><button type="button" onclick="pickGoals('+data[i]["id_bobot"]+')" class="btn btn-primary btn-sm" class="btn btn-default" style="text-transform: capitalize;"> Pilih</button></td>')
	                    		).appendTo('#tbgoalcontent');
	                    }
	                    $('#dtbGoals').DataTable({});
	                    $('#modal_goals').modal('show');
	                },
	            	error: function (jqXHR, textStatus, errorThrown)
	                {
	                    alert('Error get data for goals list');
	                }
	            });
      		}
      		else
      		{
      			alert('Pilih Dept. Terlebih Dahulu');
      		}
      	}

      	// function pickGoals(id)
      	function pickGoals()
      	{
      		var id = $('#pilihgoalreferensi').val();
      		$.ajax({
	            url : "<?php echo site_url('karyawan/getdl_/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	// alert(data.id_bobot);
                	// $('[name="goalsNm"]').val(data.nama);
                	$('[name="goalsId"]').val(data.id_bobot);
                	if (data.jenis_bobot == "Pasti") {
                		// check_deadline(id);
                	}else{
                		$("#tgl_dl").datetimepicker("destroy");
                		$("#tgl_dl").datetimepicker({format: "YYYY-MM-DD"});
                	}
                	// $('#modal_goals').modal('hide');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Pilih Goals');
                }
            });
      	}
      	function check_deadline(id){
      		$.ajax({
      			url: "<?php echo site_url('kpimmingguannext/cek_deadline') ?>",
      			type: "POST",
      			dataType: "JSON",
      			data: {idbobot: id},
      			success: function(data){
      				console.log(data.tgl_end);
      				var tgl = data.tgl_end.split("-");
      				$("#tgl_dl").datetimepicker("destroy");
      				$("#tgl_dl").datetimepicker({ minDate: 0, maxDate: new Date(tgl), format: "YYYY-MM-DD" });
      			}
      		});
      	}

      	function pickGoals2()
      	{
      		var id = $('#pilihgoalreferensi2').val();
      		$.ajax({
	            url : "<?php echo site_url('karyawan/getdl_/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	// alert(data.id_bobot);
                	// $('[name="goalsNm"]').val(data.nama);
                	$('[name="goalsId"]').val(data.id_bobot);
                	// $('#modal_goals').modal('hide');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Pilih Goals');
                }
            });
      	}

      	function pickGoals_edit()
      	{
      		var id = $('#goals_plan').val();
      		$.ajax({
	            url : "<?php echo site_url('karyawan/getdl_/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	// alert(data.id_bobot);
                	// $('[name="goalsNm"]').val(data.nama);
                	$('[name="goalsId"]').val(data.id_bobot);
                	if (data.jenis_bobot == "Pasti") {
                		// check_deadline2(id);
                	}else{
                		$("#dl_edit").datetimepicker("destroy");
                		$("#dl_edit").datetimepicker({format: "YYYY-MM-DD"});
                	}
                	// $('#modal_goals').modal('hide');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Pilih Goals');
                }
            });
      	}
      	function check_deadline2(id){
      		$.ajax({
      			url: "<?php echo site_url('kpimmingguannext/cek_deadline') ?>",
      			type: "POST",
      			dataType: "JSON",
      			data: {idbobot: id},
      			success: function(data){
      				console.log(data.tgl_end);
      				var tgl = data.tgl_end.split("-");
      				$("#dl_edit").datetimepicker("destroy");
      				$("#dl_edit").datetimepicker({ minDate: 0, maxDate: new Date(tgl), format: "YYYY-MM-DD" });
      				// $("#dl_edit").datetimepicker("refresh");
      			}
      		});
      	}

		function drop_goals(id)
        {
            $.ajax({
	            url : "<?php echo site_url('karyawan/getbobot_/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                    $('#goals_plan').empty();
                    var select = document.getElementById('goals_plan');
                    var option;
                    option = document.createElement('option');
                        option.value = '';
                        option.text = '--- Pilih salah satu ---';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["id_bobot"];
                        option.text = data[i]["nama"];
                        select.add(option);
                    }
                    $('#goals_plan').selectpicker({
                        dropupAuto: false
                    });
                    $('#goals_plan').selectpicker('refresh');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop bank');
                }
            });
        }

        function get_dl(id)
        {
        	$.ajax({
	            url : "<?php echo site_url('karyawan/getdl_/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	var tglinput = $('[name="tgl"]').val();
                	var dl = (data.sts_bobot != '0')?data.custom_dl:moment(tglinput).add(data.fix_dl,'days').locale('id').format('YYYY-MM-DD');
                   	$('[name="deadline"]').val(dl);
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Pilih Goals');
                }
            });
        }

        function edit_(id)
        {
        	$.ajax({
	            url : "<?php echo site_url('Kpimmingguannext/get_plannext/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	$('select#pilihdept_plan').val(data.tgs_dept);
                	$('#pilihdept_plan').selectpicker('refresh');
                	// drop_goals(data.tgs_dept);
                	isigoal_edit(data.id_bobot);
                	$('[name="id_plan"]').val(data.id);
                	$('[name="tgl_plan"]').val(data.tgl);
                	$('[name="dept_plan"]').val(data.nama_dept);
                	$('[name="goals_plan"]').val(data.nama_goals);
                	$('[name="desc_plan"]').val(data.action);
                	$('[name="dl_plan"]').val(data.deadline);
                	// $('select#goals_plan').val(data.id_bobot);
                	// $('#pilihdept_plan').selectpicker('refresh');
                	$('#modal_edit').modal('show');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop bank');
                }
            });
        }

        function note_(id)
        {
        	$.ajax({
	            url : "<?php echo site_url('Kpimmingguannext/get_plannext/')?>"+id,
	            type: "GET",
	            dataType: "JSON",
            	success: function(data)
                {
                	$('[name="notes"]').val(data.note);
                	$('#modal_note').modal('show');
                },
            	error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop bank');
                }
            });
        }

        function hapus_(id)
        {
        	$('[name="id_plan_hps"]').val(id);
        	$('#modal_hapus').modal('show');
        }

        function validate_()
        {
        	var cou = 0;
        	var date1 = $('[name="tgl"]').val();
            if (date1 == '')
            {
                cou = cou+1;
            }
            var dept = $('[name="tgs_dept"]').val();
            if (dept == 'all')
            {
                cou = cou+1;
            }
            var goals = $('[name="goalsNm"]').val();
            if (goals == '')
            {
                cou = cou+1;
            }
            var act = $('[name="action"]').val();
            if (act == '')
            {
                cou = cou+1;
            }
            var dl = $('[name="deadline"]').val();
            if (dl == '')
            {
                cou = cou+1;
            }
            var goall = $('[name="pilihgoalreferensi"]').val();
            if (goall == "") {
            	cou = cou + 1;
            }
            return cou;
        }
	</script>
</body>
</html>