<!DOCTYPE html>
<html>
<head>
	<title>Laporan Goal Referensi</title>
	<link rel="icon" href="<?=base_url()?>/favicon.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />

	<style type="text/css">
		.jarak {
			padding-top: 80px;
		}

		.keterangan{
		background-color: white;
		border: 4px inset cornflowerblue;
	    outline-style: solid;
	    outline-color: black;
	   	width: 50%;
  		margin: 0 auto;
  		margin-top: 10px;

		}	

		.list-group-item{
			border: 1px solid #666666;
			padding-bottom: -20px;
		}
	</style>



	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body class="nilai semua">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container-fluid"> 
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span> 
	            </button>
	            <!--<?php print_r($this->session->all_userdata());?>!-->
	            <a href="<?php echo base_url(); ?>home" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> KPIM Online.</a>
	        </div>
	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
                    <!-- <li><a href="<?php //echo base_url(); ?>reportsub">KPIM Report Subordinate Mingguan</a></li>
                    <li><a href="<?php //echo base_url(); ?>reportsubnext2">KPIM Plan Next Week</a></li> -->

                    <li><a href="<?php echo base_url(); ?>reportkaryawan">Grafik Report Karyawan</a></li>
                    <li class="active dropdown">
	                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Laporan Goal Referensi
	                    <span class="caret"></span>
	                    </a>
	                    <ul class="dropdown-menu"> 
	                    	<li><a href="<?php echo base_url(); ?>Laporan">Laporan Entry Karyawan</a></li>
	                        <li><a href="<?php echo base_url(); ?>Laporan/enamhari">Laporan Entry 6 Hari Kerja</a></li>
	                        <li><a href="<?php echo base_url(); ?>nilai">Nilai Rata-Rata Karyawan</a></li>
	                    </ul>	                    
	                 </li>
                     <?php 
					if ($this->session->userdata('id_dept') == 2  || $this->session->userdata('level') == 1 || $this->session->userdata('level') == 5 || $this->session->userdata('level') == 13) { ?>

                    <li class="dropdown">
	                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Export Data KPIM
	                    <span class="caret"></span>
	                    </a>

	                    <ul class="dropdown-menu"> 
	                    	<li><a href="<?php echo base_url(); ?>Laporan/export_kpimmingguan">Export KPIM Mingguan</a></li>
	                        <li><a href="<?php echo base_url(); ?>Laporan/export_kpimplannext">Export KPIM Plann Next</a></li>
	                    </ul>	                    
	                 </li>
	                <?php } ?>



					<?php 
					if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 5 ) { ?>
	                 <li><a href="<?php echo base_url(); ?>karyawan/subordinate">Susunan Subordinate</a></li>
	                <?php } ?>


                    <?php 
					if ($this->session->userdata('id_dept') == 2 || $this->session->userdata('level') == 1 ) { ?>
                    <li><a href="<?php echo base_url(); ?>kpimmingguan/ijin">Ijin Karyawan</a></li>
                    <li><a href="<?php echo base_url(); ?>pengumuman/libur">Hari Libur</a></li>
                    <?php } ?>


                     <?php 
				if ($this->session->userdata('level') == 1 ) {
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
			?>            
	             </ul>
	            <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        <!-- <span class="glyphicon glyphicon-user"></span>  -->
                        <span style="position: absolute; margin-left: -40px; margin-top: -3px">
                       	<?php
                		foreach ($profilku as $row) { ?>  
                            <!-- <span class="glyphicon glyphicon-user icon-size"></span> -->
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
                                          <?php
                          foreach ($profilku as $row) { 
                        ?>  
                                             <img class="img-responsive" src="<?php echo base_url() ?>/assets/ft_profil/resized/<?php echo $row->img; ?>" alt="<?php echo $row->username; ?>" title="Foto <?php echo $row->username; ?>" style=" border-radius: 50%; border: solid 3px gray; margin-left: 10px">
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
	<div class="container jarak">
		<center><h2>Laporan Goal Referensi</h2></center>
		<center><h4>Karyawan</h4></center><br>

		<div class="container-fluid" style="max-width: 850px; background-color: rgba(201, 222, 255,0.4); border: solid 3px #fcba03; border-radius: 15px; color: black;" >
			<form id="form_findgoal" method="POST" action="<?php echo base_url();?>Laporan_goal/caridata">
				<div class="form-group">
					<div class="col-sm-2">
						<text><font size="3">Department :</font></text>
					</div>
					<div class="col-sm-10">
						<select name="pilihdept" id="pilihdept" class="form-control" required="required" data-live-search="true" onchange="isi_kar()">
							<option value="">-- Pilih Department --</option>
							<option value="all">Semua Department</option>
							<?php foreach ($isinamadept->result() as $key): ?>
							<option value="<?php echo $key->id_dept;?>"> <?php echo $key->nama_dept;?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>&nbsp;&nbsp;
				<div class="form-group">
					<div class="col-sm-2">
						<text><font size="3">Karyawan :</font></text>
					</div>
					<div class="col-sm-10">
						<select name="kar" id="kar" class="form-control" required="required">
							<option value="">-- Pilih Karyawan --</option>
							<option value="all">Semua Karyawan</option>
						</select>
					</div>
				</div>&nbsp;&nbsp;
				<div class="form-group">
					<div class="col-sm-2">
						<text><font size="3">Periode :<br></font><font size="2">(Pilih Tanggal)</font></text>
					</div>
					<div class="col-sm-10">
						<div class="col-sm-5">
							<div class='input-group date tgls' id='periode_start'>     
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input type='text' id="tgl_start2" class="form-control input-group-addon" name="tgl_start" placeholder="Tgl Start" required="required">
							</div>	
						</div>
						<div class="col-sm-1">s.d</div>
						<div class="col-sm-5">
							<div class='input-group date tgls' id='periode_end'>     
								<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input type='text' id="tgl_start2" class="form-control input-group-addon" name="tgl_end" placeholder="Tgl Start" required="required">
							</div>		
						</div>
					</div>
				</div><br><br>
				<div class="form-group">
					<div class="col-sm-2">
						<center>
						</center>	
					</div>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-sm btn-block btn-primary"><span class="glyphicon glyphicon-search"></span> Tampilkan</button>
					</div>
				</div><br><br>
			</form>
		</div>
		<br>
			<div class="container" style="max-width: 1200px; background-color: white;">
				<div class="container">
					<?php 
					$this->load->helper('tgl_indo');
					if ($tampil != ""): ?>
					<a href="<?=base_url('Laporan_goal/cetak_pdf/'.$dept.'/'.$tglstart.'/'.$tglend.'/'.$id_kar)?>" target="_BLANK"><button type="button" class="btn btn-info pull-right" onclick="cetakpdf()"><span class="glyphicon glyphicon-print"></span> CETAK PDF</button></a><br>
					<center><h3><?php if ($nama_depart=="Semua"): ?>
						Semua<?php else: ?><?php echo $nama_depart; endif;?> Department <br><?php echo "(".tgl_indo($tglstart)." s/d ".tgl_indo($tglend).")"; ?></h3></center>
					
							<?php echo $tampil; ?>
					
					<?php endif ?>
				</div>
			</div>
	</div>

	<!-- --------------------------JAVASCRIPT -------------------------->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2totree.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#periode_start').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				// minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});
			$('#periode_end').datetimepicker({
				useCurrent: false,
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				// minDate: moment().millisecond(0).second(0).minute(0).hour(24)
			});
		});	
	</script>
	<script type="text/javascript">
		function isi_kar(){
			var id_dep = $('#pilihdept').val();
			$.ajax({
				url: "<?php echo site_url('Laporan_goal/pick_kar') ?>",
				type: "POST",
				data: {id: id_dep},
				datatype: "JSON",
				success: function(data){
					$('#kar').html(data);
				}
			});
		}
	</script>
</body>
</html>
