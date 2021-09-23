<!DOCTYPE html>
<html lang="en">
<head>

<title>KPIM Online - Plan Next</title>
<link rel="icon" href="<?=base_url()?>/favicon.gif" type="image/gif">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/metisMenu/metisMenu.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>!-->
<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>

<!--font google!-->
<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- <script src="bootstrap-confirm-delete.js"></script> -->

</head>
<style type="text/css">
	@media screen and (max-width: 1024px) {
      .jarak {
        margin-bottom: 10px;
      }
      .test {
    	background-color: #eee;
   	 }
    }
    .blink {
    animation-duration: 1s;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-timing-function: steps(2, start);
	}
	@keyframes blink {
    0% {
        opacity: 1;
    }
    80% {
        opacity: 1;
    }
    81% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
	}
</style>
<body class="bg semua">
<?php 
date_default_timezone_set('Asia/Jakarta');
 ?>

	<!---Mulai navbar account!-->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container-fluid"> 
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span> 
	            </button>
	            <!--<?php print_r($this->session->all_userdata());?>!-->
	            <a href="<?php echo base_url();?>home" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> KPIM Online.</a>
	        </div>
	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li ><a href="<?php echo base_url();?>kpimmingguan">KPIM Mingguan</a></li>
	                <li class="active"><a href="#">KPIM Plan Next Week</a></li>
	                		<li class="dropdown">
                				<?php
									foreach ($inboxblmbaca as $total)
									foreach ($noteblmbaca as $totalnote)
									foreach ($planblmbaca as $totalplan)
									foreach ($noteplan as $totalnoteplan) { 
								?>

			                    <a href="#" class="dropdown-toggle test" data-toggle="dropdown"><text class="blink">Notifikasi</text>
			                    <span class="caret"></span>
			                     <?php if(isset($totalnote->jumlah)){ ?> 
			                    <text style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
			                        
								<?=$totalnote->jumlah?> <span class="glyphicon glyphicon-pencil"></span> 	
								</text>

			                    <?php } ?>

			                    <!-- batas -->

			                    <?php if(isset($totalplan->jumlah)){ ?> 
			                    <text style="background-color: #ce0808; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
			                        
								<?=$totalplan->jumlah?> <span class="glyphicon glyphicon-remove"></span> 	
								</text>

			                    <?php } ?>			                    

			                    <!-- batas -->

			                    <?php if(isset($totalnoteplan->jumlah)){ ?> 
			                    <text style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
			                        
								<?=$totalnoteplan->jumlah?> <span class="glyphicon glyphicon-pencil"></span> 	
								</text>

			                    <?php } ?>			                    

			                    <!-- batas -->

			                    <?php if(isset($total->jumlah)){ ?> 
			                    <text style="background-color: black; color: white; border-radius: 5px; padding: 5px 5px;  margin-right: 3px; text-align: center;">
			                        
								<?=$total->jumlah?> <span class="glyphicon glyphicon-envelope"></span> 	
								</text>

			                    <?php } ?>
			                    </a>
			                    <ul class="dropdown-menu"> 
			                        <li><a href="<?php echo base_url(); ?>kpimmingguan/replykpim">KPIM Mingguan
			                        <?php if(isset($totalnote->jumlah)){ ?>


			                       	<div style="background-color: orange; color: white; border-radius: 5px; padding: 5px 5px; text-align: center;">
			                        
									<?=$totalnote->jumlah?> <span class="glyphicon glyphicon-pencil"></span> Catatan Baru
									
									</div>
									<?php }?>
			                        </a></li>
			                        <li><a href="<?php echo base_url(); ?>kpimmingguan/replykpimnext">KPIM Plan Next Week
			                        <?php if(isset($totalplan->jumlah)){ ?>


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
			                        </a></li>
			                        <li><a href="<?php echo base_url(); ?>kpimmingguan/pesan">Pesan
			                        
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
	                 <!--<li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">DropDown
	                    <span class="caret"></span>
	                    </a>
	                    <ul class="dropdown-menu">
	                        <li><a href="#">Link 2</a></li>
	                    </ul>
	                 </li>!-->
	             </ul>
	            <ul class="nav navbar-nav navbar-right">
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        <!-- <span class="glyphicon glyphicon-user"></span>  -->
	                        <span style="position: absolute; margin-left: -40px; margin-top: -3px"><?php
								foreach ($profilku as $row) { 
							?>	
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
	                                            <!-- <span class="glyphicon glyphicon-user icon-size"></span> -->
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
												-
												<?php
													foreach ($dept->result() as $row) { 
												?>		
													<b><?php echo $row->deptini; ?></b>
												<?php	}
												?>

	                                        </p>
	                                        <!--<p class="text-left">
	                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
	                                        </p>!-->
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
		<h1 style="padding-top: 20px"><center>KPIM Online - Plan Next Week</center></h1><br><br>
		
<!--
		
		
		<div class="row">
			<div class="col-lg-2 text-right">
				<h4>Nama :</h4>
			</div>
			<div class="col-lg-3 text-left">
				<input class="form-control" size="32" id="nama" name="nama" value="<?php echo $this->session->userdata('username'); ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 text-right">
				<h4>Jabatan :</h4>
			</div>
			<div class="col-lg-3 text-left">
				<?php
					foreach ($jabatan->result() as $row) { 
				?>		
					<input type="text" name="" value="<?php echo $row->nama_akses; ?>">	
				<?php	}
				?>

				<br/>

				
			</div>
			<div class="col-lg-1 text-left">

				<h4>Posisi :</h4>
			</div>
			<div class="col-lg-3 text-left">
				
					<?php
					foreach ($dept->result() as $row) { 
				?>		
					<input type="text" name="" value="<?php echo $row->nama_dept; ?>">	
				<?php	}
				?>
			
			</div>
		</div>
!-->
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
		<!-- <div class="row">
			<div class="col-lg-2 text-left" style="margin-left: 5px">

				<h4><strong>Periode &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </strong></h4>
			</div>



			<div class="col-lg-3 text-center">
				<div class="form-group">
					<div class='input-group date' id='datetimepicker1'>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' class="form-control input-group-addon" name="tgl1" placeholder="Start" required />
					</div>
				</div>
			</div>

			<div class="col-lg-2" style="padding:5px 10px">to</div>

			<div class="col-lg-3 ">
				<div class="form-group text-center">
					<div class='input-group date ' id='datetimepicker2'>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' class="form-control input-group-addon" name="tgl2" placeholder="End" required/> 
					</div>
				</div>
			</div>
		</div> -->

	<form id="form_kpim" action="<?php base_url();?>kpimmingguannext/create" method="POST">
		<div class="row">
			<div class="col-lg-5 text-left" style="margin-left: 5px">
				<h4><strong>Rencana Mingguan : </strong></h4>

			</div>
		</div>
		<div class="row">

    	<div class="col-lg-2">
				<div class="form-group">
					<div class='input-group date' id='datetimepicker1'>     
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' class="form-control input-group-addon" name="tgl" placeholder="Tanggal" required/>
					</div>

					<div class="text-left" style="margin-left: 5px">
					Dept :
					</div>
					<select name="tgs_dept" class="form-control" required oninvalid="this.setCustomValidity('Pilih terlebih dahulu')" oninput="setCustomValidity('')">
						<option value="">-- Pilih Dept --</option>
						<?php foreach ($isinamadept->result() as $key): ?>
						<option value="<?php echo $key->id_dept;?>"> <?php echo $key->nama_dept;?></option>
						<?php endforeach ?>
					</select>


					<!--
					<select name="tgs_dept" class="form-control">
						<option>
							<?php
								foreach ($dept->result() as $row) { 
							?>		
								<i><?php echo $row->dept; ?></i>
							<?php	}

							?>
						</option>
					</select>!-->


				<!--<select name="tgs_dept" class="form-control">

					 <option value="" selected="selected">Pilih Dept</option> 
            <?php   while($row = mysqli_fetch_array($dept))
                {
                    
                    }?>

                <option>
							<?php
								foreach ($dept->result() as $row) { 
							?>		
								<i><?php echo $row->nama_dept; ?></i>
							<?php	}
							?>
						</option>
					</select>!-->



				</div>

			</div>
  
			<!--tanggal-->
			

		
			<!--goal-->
			<div class="col-lg-4">
				<!--input type='text' class="form-control" name="goal" placeholder="Goal"/-->
				<textarea class="form-control jarak" rows="4" cols="20" placeholder="Goal" name="goals" id="goals" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
			</div>
			<!--action-->
			<div class="col-lg-4">
				<!--input type='text' class="form-control" name="action" placeholder="Action"/-->
				<textarea class="form-control jarak" rows="4" cols="40" placeholder="Action" name="action" id="action" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
			</div>
			

				<!--<div id='datetimepicker_tgledit'>
							<input id="MyDate<?php echo $u->id ?>" value="<?php echo $u->tgl ?>" type='text' class="form-control" name="tgledit" placeholder="Tanggal" disabled/> 
						</div>
			<!--Dateline-->
			<div class="col-lg-2">
				<div class="form-group">
					<div class='input-group date' id='datetimepicker4'>     
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' class="form-control input-group-addon" placeholder="Deadline" name="deadline" id="deadline"  required>
					</div>
				</div>
			</div>
			

			
			
			<div class="col-lg-2">
			<button type="submit" style="font-family: 'Exo 2', sans-serif; " name="input" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Tambah Data</button>
			 <!-- <input type="submit" name="input"  class="btn btn-primary" style="font-family: 'Exo 2', sans-serif; font-style: italic;" value="Tambah Data"> -->
			</div>
		</div>
		</form>	




		<!-- Button trigger modal mulai
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		  Edit
		</button>-->

		
		<!--div class="row">
			
			<Bobot>
			<div class="col-lg-3">
				<input type='text' class="form-control" name="bobot" placeholder="Bobot 0-100%"/>
			</div>
			<target>
			<div class="col-lg-2">
				<input type='text' class="form-control" name="targetpoint" placeholder="Target(Point) 0-10" />
			</div>
			<actual>
			<div class="col-lg-2">
				<input type='text' class="form-control" name="actual" placeholder="Actual 0-10" />
			</div>
		</div-->
		<!--div class="row">
			<div class="col-lg-offset-5 col-lg-2">
			<button type="button" class="btn btn-primary"><h4>add</h4></button>
			</div>
		</div-->
		<br/>
		<div class="row">
			<div class="col-lg-12 table-responsive">
				<table class="table table-bordered table-hover table-striped">
					<thead class="text-center" style="background-color: #6db1ff">
					  <tr>
						<th style="text-align: center;">No</th>
						<th style="text-align: center;">Hari/Tanggal</th>
						<th style="text-align: center;">Goal</th>
						<th style="text-align: center;">Action</th>
						<th style="text-align: center;">Deadline</th>
						<th style="text-align: center;">Departement</th>
						<th style="text-align: center;">Action</th>
					  </tr>
					</thead>
					<tbody >
					<?php 
					$no = 1;
					foreach($table as $u){ 
					?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo nama_hari($u->tgl).', '. tgl_indo($u->tgl)?></td>
							<td style="max-width: 200px; word-wrap: break-word; overflow: auto;"><?php echo $u->nama_goals ?></td>
							<td style="max-width: 200px; word-wrap: break-word; overflow: auto;"><?php echo $u->action ?></td>		
							<td><?php echo nama_hari($u->deadline).', '. tgl_indo($u->deadline)?></td>
							<td><?php echo $u->nama_dept ?></td>
							<td width="200px">
									<button data-toggle="modal" data-target="#myModal<?php echo $u->id ?>" type="button" class="btn btn-default btn-sm">
							          <span class="glyphicon glyphicon-edit"></span> 
							          <text style="text-transform: capitalize;"> Edit</text> 


							        </button>
			
		<!-- Modal -->
		<div class="modal fade" id="myModal<?php echo $u->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: #6db1ff">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit</h4>
		      </div>
		      <div class="modal-body">
		      
		     <!--isi modal!-->

		<form id="form_kpim" action="<?php base_url();?>kpimmingguannext/update/<?php echo $u->id ?>" method="POST">
		    <div class="row">
			  	<div class="col-sm-4">
					<div class="col-lg-8">
						<h4>Tanggal :</h4>
					</div>
			 	</div>
				<div class="col-sm-8">
					<div class="col-lg-8 ">
						<div class='input-group date' id='edittgl<?php echo $u->id ?>'>     
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' value="<?php echo $u->tgl ?>" class="form-control input-group-addon" name="tgledit" placeholder="Tanggal" required/>
						</div>



						<!-- <div id='datetimepicker_tgledit'>
						<div class="col-sm-8" style="margin: 5px 5px 0px 0px"><?php echo date("d-m-Y", strtotime($u->tgl)) ?></div>
							<input id="MyDate<?php echo $u->id ?>" value="<?php echo $u->tgl ?>" type='hidden' class="form-control" name="tgledit" placeholder="Tanggal" /> 
						</div> -->
					</div>
				</div>
			</div>

			<div class="row">
			  	<div class="col-sm-4">
					<div class="col-lg-8">
						<h4>Goal :</h4>
					</div>
			 	</div>
				<div class="col-sm-8">
					<div class="col-lg-8 ">
						<input value="<?php echo $u->nama_goals ?>" type="text" class="form-control" id="goal" name="goaledit" placeholder="Goal">
						<!--<textarea class="form-control" rows="5" id="goal" name="goaledit"></textarea>!-->
					</div>
				</div>
			</div>

			<div class="row">
			  	<div class="col-sm-4">
					<div class="col-lg-8">
						<h4>Action :</h4>
					</div>
			 	</div>
				<div class="col-sm-8">
					<div class="col-lg-8 ">
						<!--<input type="text" class="form-control" id="action" name="actionedit">!-->
						<textarea class="form-control" rows="4" id="action" name="actionedit" placeholder="Action"><?php echo $u->action ?></textarea>
					</div>
				</div>
			</div>

		

			<div class="row">
			  	<div class="col-sm-4">
					<div class="col-lg-8">
						<h4>Dept :</h4>
					</div>
			 	</div>
				<div class="col-sm-8">
					<div class="col-lg-8 ">
						<select name="tgs_dept" class="form-control">
						<?php foreach ($isinamadept->result() as $key): ?>
						<option value="<?php echo $key->id_dept;?>" <?php if ($key->id_dept == $u->tgs_dept) { echo 'selected' ;}; ?>> <?php echo $key->nama_dept;?></option>
						<?php endforeach ?>
						</option>
					</select>
						<!--<textarea class="form-control" rows="5" id="goal" name="goaledit"></textarea>!-->
					</div>
				</div>
			</div>

			<div class="row">
			  	<div class="col-sm-4">
					<div class="col-lg-8">
						<h4>Deadline :</h4>
					</div>
			 	</div>
				<div class="col-sm-8">
					<div class="col-lg-8 ">
						<div class='input-group date' id='tanggaldiedit<?php echo $u->id ?>'>     
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
						<input type='text' value="<?php echo date($u->deadline) ?>" class="form-control input-group-addon" name="deadlineedit" placeholder="Tanggal" required/>
						</div>

						<!-- <div  id='datetimepicker_deadlineedit'>
							<div class="col-sm-8" style="margin: 5px 5px 0px 0px"><?php echo date("d-m-Y", strtotime($u->deadline)) ?></div>
							<input id="MyDate<?php echo $u->id ?>" value="<?php echo $u->deadline ?>" type='hidden' class="form-control" name="deadlineedit" placeholder="Tanggal" /> 
						</div> -->
					</div>
				</div>
			</div>




			
			<!--isi modal selesai!-->

		      </div>
		      <div class="modal-footer" style="background-color: #6db1ff">
		        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-family: 'Exo 2', sans-serif;">Close</button>
		        <button type="submit" name="input"  class="btn btn-primary" style="font-family: 'Exo 2', sans-serif;">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>
		<!--Modal selesai!-->
			                    <button type="button" class="btn btn-default btn-sm" data-target="#myModalhapus<?php echo $u->id ?>" data-toggle="modal" name="input" class="btn btn-default" style="font-family: 'Exo 2', sans-serif; text-transform: capitalize;"> <span class="glyphicon glyphicon-trash"></span> Hapus
								</button>
			                    <!-- <?php echo anchor('kpimmingguannext/hapus/'.$u->id,
			                    	'<button type="button" class="btn btn-default btn-sm">
							          <span class="glyphicon glyphicon-trash"></span>
							          	<text style="text-transform: capitalize;"> Hapus</text>  
							        </button>', array('class'=>'hapus', 'onclick'=>"#myModal;")
							    ); ?> -->

							    <!-- Modal -->
								<div class="modal fade" id="myModalhapus<?php echo $u->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
								  <div class="modal-dialog vertical-align-center" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
								      </div>
								      <div class="modal-body" style="background-color: #2372ef; color: white">
								        <h4>Yakin hapus ?</h4>
								      </div>
								      <div class="modal-footer">
											<form id="form_kpim" method="POST" action="<?php echo base_url();?>kpimmingguannext/hapus/<?php echo $u->id?>">
										      	<button type="button" style="font-family: 'Exo 2', sans-serif; " class="btn btn-default" data-dismiss="modal">Batal</button>
											<button type="submit" style="font-family: 'Exo 2', sans-serif; " class="btn btn-primary">Hapus</button>
											</form>
								      </div>
								    </div>
								  </div>
								</div>
			                   
							</td>

						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<br/>
		<div class="row">
			<div class="col-lg-12" style="margin-right: 15px">
				<!--button type="button" class="btn btn-primary">Save</button-->
			<div class="col-sm-2" style="float: left;"><a class= "btn btn-primary" style="font-family: 'Exo 2', sans-serif; margin-top:5px;" href="<?php echo base_url();?>kpimmingguan"><span class="glyphicon glyphicon-arrow-left"></span><h7> KPIM Mingguan</h7></a></div>
			<div class="col-sm-2" style="float: right;">
				<a class= "btn btn-primary" style="font-family: 'Exo 2', sans-serif; margin-top:5px;" href="<?php echo base_url();?>home"><span class="glyphicon glyphicon-home"></span><h7>  Home</h7></a>
				<button type="button" class="btn btn-warning" style="font-family: 'Exo 2'; margin-top:5px"  data-toggle="modal" data-target="#myModalsend">Send</button>
			</div>
		
			</div>
		</div><br><br><br>

		<!-- Modal -->
		<div class="modal fade" id="myModalsend" role="dialog" style="padding-top: 100px;">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Konfirmasi Kirim</h4>
			    </div>
			    <div class="modal-body" style="background-color: #2372ef; ">
			    <form id="form_kpim" action="<?php base_url();?>kpimmingguannext/updatestatus" method="POST">
			    <input type='hidden' class="form-control" name="isistatus" value="2" />
			      <p style="text-align: center; color: white;">Yakin Kirim Plannext?</p>
			    
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" style="font-family: 'Exo 2'; margin-top:5px" data-dismiss="modal">Batal</button>
			      <input type="submit" name="input" style="font-family: 'Exo 2'; margin-top:5px" class="btn btn-primary" value="Kirim"> 
			    </form>
			    </div>
			  </div>
			</div>
		</div>

		
		

			<div class="container">
			<div class="dialogbox">
		    <div class="body">
		      <span class="tip tip-up"></span>
		      <div class="message">
		       
		    <p class="info">
			<text style="font-family: 'Exo 2', sans-serif, medium">
			<b>Ketentuan pengisian nilai aktual :</b><br></text>
			<text style="font-family: 'Exo 2', sans-serif; font-style: italic;">
			1. Total maksimal score karyawan adalah 100<br>
			2. Total nilai maksimal persentase KPIM adalah 75%<br>
			3. Standart bobot penilaian KPIM ditentukan oleh masing - masing departement<br>
			4. Standart penilaian KPIM karyawan (aktual) dilihat dari selesai dikerjakan, masih proses atau tidak dikerjakannya suatu goals<br>
			5. Penilaian juga dipertimbangkan berdasarkan Goals, Action, Result dan Deadline<br>
			6. Untuk Goals yang tidak tercapai pada minggu I harus tetap di cantumkan di KPIM minggu<br>
			7. Plannext Week (Rencana kegiatan/pekerjaan pekan depan) wajib diisi<br></text>
			</p>
		      </div>
			</div>
			</div>
			</div>

		<div class="outputClass" id="outputdiv"></div>
	
		<script type="text/javascript" src="<?php base_url();?>assets/bootstrap/js/bootstrap.js"></script>
		<script src="assets/js/moment.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script>

		function confirmDialog() {
		 return confirm('Apakah anda yakin akan menghapus data?')
		}


		$(function() {
		  $('input[id^=MyDate]').datetimepicker({ format: 'YYYY-MM-DD' });
		});

		$(function() {
		  $('div[id^=tanggaldiedit]').datetimepicker({ format: 'YYYY-MM-DD' });
		});

		$(function() {
		  $('div[id^=edittgl]').datetimepicker({ useCurrent: false,
						format: 'YYYY-MM-DD',
						ignoreReadonly: true,
						minDate: moment().millisecond(0).second(0).minute(0).hour(24) });
		});
		

		// $(function () {
		// 			$('#datetimepicker1').datetimepicker({
		// 				//format: 'DD/MM/YYYY'
		// 				useCurrent: false,
		// 				format: 'YYYY-MM-DD',
		// 				ignoreReadonly: true,
		// 				minDate: moment().millisecond(0).second(0).minute(0).hour(24)
		// 			});         
		// 		});
		// $(function () {
		// 			$('#datetimepicker2').datetimepicker({
		// 				//format: 'DD/MM/YYYY'
		// 				useCurrent: false,
		// 				format: 'YYYY-MM-DD',
		// 				ignoreReadonly: true,
		// 				minDate: moment().millisecond(0).second(0).minute(0).hour(-24).day(7)
		// 			});         
		// 		});

		$(function () {
				   $('#datetimepicker1').datetimepicker({
						//format: 'DD/MM/YYYY'
						useCurrent: false,
						format: 'YYYY-MM-DD',
						ignoreReadonly: true,
						minDate: moment().millisecond(0).second(0).minute(0).hour(24)						
					});         
				   });         
		// 		});
		// $(function () {
		// 		   $('#datetimepicker3').datetimepicker({
		// 				//format: 'DD/MM/YYYY'
		// 				format: 'YYYY-MM-DD'
		// 			});         
		// 		});
		$(function () {
				   $('#datetimepicker4').datetimepicker({
						//format: 'DD/MM/YYYY'
						format: 'YYYY-MM-DD'
					});         
				});
		$(function () {
				   $('#datetimepicker_tgledit').datetimepicker({
						//format: 'DD/MM/YYYY'
						useCurrent: false,
						format: 'YYYY-MM-DD',
						ignoreReadonly: true,
						minDate: moment().millisecond(0).second(0).minute(0).hour(24)
					});         
				});
		$(function () {
				   $('#datetimepicker_deadlineedit').datetimepicker({
						//format: 'DD/MM/YYYY'
						format: 'YYYY-MM-DD'
					});         
				});

		$(function () {
				   $('#datetimepicker5').datetimepicker({
						//format: 'DD/MM/YYYY'
						format: 'YYYY-MM-DD'
					});         
				});
		$(function () {
				   $('#datetimepicker6').datetimepicker({
						//format: 'DD/MM/YYYY'
						format: 'YYYY-MM-DD'
					});         
				});
		</script>
	</div>
</div>


</body>
</html>
