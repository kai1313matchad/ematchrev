<!DOCTYPE html>
<html>
<head>
	<title>Pilih Karyawan</title>
	<link rel="icon" href="<?=base_url()?>/favicon.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">
</head>
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
	                <li class="active"><a href="#">Laporan Goals</a></li>
	                <li><a href="<?php echo base_url(); ?>Tambah_goal_atasan">Tambah Goal</a></li>
	                
	                <?php if ($this->session->userdata('level') == 1 ){ ?>
	                <li><a href="<?php echo base_url(); ?>karyawan/bobot">Master Bobot</a></li>
	                 <?php } ?>

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

	<div style="padding-bottom: 60px;  padding-top: 50px;"></div>
	<center><img src="<?php echo base_url();?>assets/img/kpimlogo.png" alt="KIMP Online" name="KPIM Online" style="width:auto; height:90px; margin-bottom: 10px" ></center>
	<div class="container-fluid" style="max-width: 600px; background-color: gray; color: white; border:solid 4px orange; border-radius: 15px;">
		<div class="row"> 
			<h4><div class="col-sm-12 text-center" style="padding-top: 10px">Laporan Goal Subordinate</div></h4>
		</div>
		<form id="form_kpim" action="<?php echo base_url();?>Laporan_goal/laporan_subordinate" method="POST">
			<div class="row" style="padding-top: 15px">
				<div class="col-sm-3"> 
					<text style="word-spacing: 10px">Departement :</text>
				</div>
				<div class="col-sm-8" style="padding-bottom: 10px">
					<select class="form-control semua" id="pilihdept" name="pilihdept" onchange="isi_kar()" required="required">
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
					<text style="word-spacing: 20px">Subordinate :</text>	
				</div>
				<div class="col-sm-8" style="padding-bottom: 10px">
					<select class="form-control" id="pilihsub" name="pilihsub" required="required">
						<!-- <option value="">--- Pilih Subordinate ---</option>
						<?php //foreach ($sub_ord as $key2 => $value2): 
								//foreach ($value2 as $keya => $valuea) { ?>
									<option value="<?php //echo $valuea['id_karyawan'] ?>"><?php //echo $valuea['nama_karyawan'] ?></option>
						<?php	//}
							?>
						<?php //endforeach ?> -->
						<option value="">-- Pilih Karyawan --</option>
						<option value="all">Semua Karyawan</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"> 
					<text style="word-spacing: 44px">Tanggal :</text>
				</div>
				<div class="col-lg-4 text-center">
					<div class="form-group">
						<div class='input-group date' id='datetimepicker1' style="color: black">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type='text' class="form-control input-group-addon" name="tglstart" placeholder="Start" required />
						</div>
					</div>
				</div>

				<div class="col-sm-4 text-center">
					<div class="form-group">
						<div class='input-group date' id='datetimepicker2' style="color: black;">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type='text' class="form-control input-group-addon" name="tglend" placeholder="End" required />
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-3 col-sm-8 text-center" style="padding-bottom: 15px"> <button type="submit" name="input"  class="btn btn-warning col-sm-12" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-search"></span> Tampilkan</button>
				</div>
			</div>
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
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.js"></script>
	<script>
		$(document).ready(function(){
			$('#datetimepicker1').datetimepicker({
				format: 'YYYY-MM-DD'
			});
			$('#datetimepicker2').datetimepicker({
				format: 'YYYY-MM-DD'
			});

		})
	</script>
	<script type="text/javascript">
		// function cek_dept(){
		// 	var id_s = $('#pilihsub').val();
		// 	var id_d = $('#pilihdept').val();
		// 	$.ajax({
		// 		type: "POST",
		// 		url: "<?php //echo base_url().'Laporan_goal/cek_department' ?>",
		// 		data: {id_dept: id_d, id_sub: id_s},
		// 		success: function(data){
		// 			parsedObj = jQuery.parseJSON(data);	
		// 			if (parsedObj.status === "false") {
		// 				$('#pilihdept').val("");
		// 				alert('Pilih Department yang benar');
		// 			}			
		// 		}
		// 	});
		// }
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
					$('#pilihsub').html(data);
				}
			});
		}
	</script>
</body>
</html>