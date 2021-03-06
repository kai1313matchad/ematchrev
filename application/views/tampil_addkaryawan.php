<!DOCTYPE html>
<html>
<head>
	<title>Tambah Karyawan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url()?>/favicon.gif" type="image/gif">
	<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<!-- <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> -->
	<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="semua" style="background-image: -webkit-gradient(radial, center center, 0, center center, 506, color-stop(0, #FFEFEB), color-stop(1, #918f8c)) ">
	<div style="padding-bottom: 10px"></div>

		<center>
			<img src="assets/img/HoldingCenter.png" alt="KPIM Online" name="KPIM Online" style="width:auto; height:90px; margin-bottom: 10px" >
		</center>

	<div class="container-fluid" style="width: 600px; background-color: gray; color: white; border:solid 4px orange; border-radius: 15px;">
		<div name="jarak konten" style="padding: 10px 10px 10px 10px">
			<div align="center">Tambah Karyawan</div><br/>

			<div id="alert alert-message"><?php echo $this->session->flashdata('msg'); ?></div>
			<form id="form_kpim"  action="<?php echo base_url();?>Addkaryawan/insert" method="POST" enctype="multipart/form-data">

			<div class="row" >
			    <div class="col-sm-3">
			      Nama Lengkap :
			    </div>
			    <div class="col-sm-9">
			      <input type='text' class="form-control" name="nama" placeholder="Nama Lengkap" id="nama" required/>
			    </div>
			</div>

			<div class="row" style="padding-top: 20px">
			    <div class="col-sm-3">
			      Username :
			    </div>
			    <div class="col-sm-9">
			      <input type='text' class="form-control" name="username" placeholder="Username" id="username" pattern=".{3,}" required title="Maksimal 3 karakter" />
			    </div>
			</div>

			<div class="row" style="padding-top: 20px">
			    <div class="col-sm-3">
			      Password :
			    </div>
			    <div class="col-sm-9">
			      <input type='password' class="form-control" name="password" placeholder="Password" id="password" title="Maksimal 5 karakter" pattern=".{3,}" max="20" required/>
			    </div>
			</div>

			<div class="row" style="padding-top: 20px">
			    <div class="col-sm-3">
			      Pangkat :
			    </div>
			    <div class="col-sm-9">
			      <select class="form-control" id="sel1" name="pangkat" required>
			      <option value="">-- Pilih Pangkat --</option>
			       <?php 
		            foreach($isijabatan as $row)
		            { 
		              echo '<option value="'.$row->id_akses.'">'.$row->nama_akses.'</option>';
		            }
		            ?>
			      </select>
			    </div>
			</div>

			<div class="row" style="padding-top: 20px">
			    <div class="col-sm-3">
			      Nama Jabatan :
			    </div>
			    <div class="col-sm-9">
			      <input type='text' class="form-control" name="jabatannya" placeholder="Nama Jabatan" id="jabatannya" required/>
			    </div>
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-sm-3" style="padding-top: 10px">
				Hari Kerja :
				</div>


			    <div class="col-sm-9" >
					<select name="harikerja" id="" class="form-control">
						<option value="5">5 Hari (Senin - Jum'at)</option>
						<option value="6">6 Hari (Senin - Sabtu)</option>
					</select>				
				</div>

				
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-sm-3" style="padding-top: 10px">
				Alamat Email :
				</div>

			    <div class="col-sm-9">
			      <input type='text' class="form-control" name="email" placeholder="Alamat Email" id="email" required/>
			    </div>				
			</div>

			<div class="row" style="padding-top: 20px">
				<div class="col-sm-3" style="padding-top: 10px">
				Pilih Hak Akses :
				<br><small>*Biarkan kosong bila tidak memiliki hak menilai</small>
				</div>


				<div class="col-lg-9">
					<div class="checkbox">
					  <label><input id="allmenilai" onclick="pilihhakmenilai()" type="checkbox" value="">Pilih Hak Menilai</label>
					</div>
				</div>


			    <div class="col-sm-3" >
					<div class="checkbox">
					  <label><input  class="menilai" type="checkbox" name="hak[]" value="2">Staff</label>
					</div>
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="3">Head</label>
					</div>
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="7">Assistant SPV</label>
					</div>
				</div>

				<div class="col-sm-3" >
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="6">SPV</label>
					</div>
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="8">Assistant Manager</label>
					</div>
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="4">Manager</label>
					</div>
				</div>

				<div class="col-sm-3" >
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="9">Senior Manager</label>
					</div>
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="10">Senior Staff</label>
					</div>
					<div class="checkbox">
					  <label><input class="menilai" type="checkbox" name="hak[]" value="11">Non Staff</label>
					</div>
				</div>
			</div>

			<hr>


			<div class="row" >
				<div class="col-sm-3" style="padding-top: 10px">
				<h4>Departement Match Ad :</h4>
				</div>

				<div class="col-lg-9">
					<div class="checkbox">
					  <label><input id="allmatch" onclick="pilihdeptmatch()" type="checkbox" value="">Pilih semua Dept. Match</label>
					</div>
				</div>

			    <div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="1">IT</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="2">HC</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="3">PAT</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="4">GA</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="5">Marketing </label>
					</div>				
				</div>

				<div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="6">Finance</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="7">Logistic</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="8">Production</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="9">SITAC</label>
					</div>
					
				</div>


				<div class="col-sm-4">
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="a">Accounting</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="b">Secretary</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="c">Internal Audit</label>
					</div>
					<div class="checkbox">
					  <label><input class="match" type="checkbox" name="dept[]" value="l">Vendor</label>
					</div>
				</div>

			</div>

			<hr>

			<div class="row" >
				<div class="col-sm-3" style="padding-top: 10px">
				<h4>Departement Wiperindo :</h4>
				</div>

				<div class="col-lg-9">
					<div class="checkbox">
					  <label><input id="allwpi" onclick="pilihdeptwpi()" type="checkbox" value="">Pilih semua Dept. WPI</label>
					</div>
				</div>

			    <div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="w">IT</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="f">HC</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="g">PAT</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="h">GA</label>
					</div>
									
				</div>

				<div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="i">Marketing </label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="j">Finance</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="k">Logistic</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="d">Production</label>
					</div>
					
					
				</div>


				<div class="col-sm-4">
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="m">SITAC</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="n">Accounting</label>
					</div>
					<div class="checkbox">
					  <label><input class="wpi" type="checkbox" name="dept[]" value="o">Secretary</label>
					</div>
				</div>
			</div>

			<hr>

			<div class="row" >
				<div class="col-sm-3" style="padding-top: 10px">
				<h4>Departement KCT :</h4>
				</div>

				<div class="col-lg-9">
					<div class="checkbox">
					  <label><input id="allkct" onclick="pilihdeptkct()" type="checkbox" value="">Pilih semua Dept. KCT</label>
					</div>
				</div>

			    <div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="p">IT</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="q">HC</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="r">PAT</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="s">GA</label>
					</div>
									
				</div>

				<div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="t">Marketing </label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="u">Finance</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="v">Logistic</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="e">Production</label>
					</div>
					
					
				</div>


				<div class="col-sm-4">
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="x">SITAC</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="y">Accounting</label>
					</div>
					<div class="checkbox">
					  <label><input class="kct" type="checkbox" name="dept[]" value="z">Secretary</label>
					</div>
				</div>

			</div>

			<hr>

			<div class="row">
				<div class="col-sm-3" style="padding-top: 10px">
				<h4>Departement WIKLAN :</h4>
				</div>

				<div class="col-lg-9">
					<div class="checkbox">
					  <label><input id="allwiklan" onclick="pilihdeptwiklan()" type="checkbox" value="">Pilih semua Dept. WIKLAN</label>
					</div>
				</div>

			    <div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="22">IT</label>
					</div>
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="17">HC</label>
					</div>
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="18">GA</label>
					</div>
									
				</div>

				<div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="16">Marketing </label>
					</div>
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="20">Finance</label>
					</div>
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="23">Secretary</label>
					</div>
				</div>


				<div class="col-sm-4">
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="19">SITAC</label>
					</div>
					<div class="checkbox">
					  <label><input class="wik" type="checkbox" name="dept[]" value="21">Accounting</label>
					</div>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm-3" style="padding-top: 10px">
				<h4>Departement RCP :</h4>
				</div>

				<div class="col-lg-9">
					<div class="checkbox">
					  <label><input id="allrcp" onclick="pilihdeptrcp()" type="checkbox" value="">Pilih semua Dept. RCP</label>
					</div>
				</div>

			    <div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="36">IT</label>
					</div>
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="32">HC</label>
					</div>
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="33">GA</label>
					</div>
									
				</div>

				<div class="col-sm-2" style="padding-right: 90px">
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="31">Marketing </label>
					</div>
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="34">Finance</label>
					</div>
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="37">Secretary</label>
					</div>
				</div>


				<div class="col-sm-4">
					<div class="checkbox">
					  <label><input class="rcp" type="checkbox" name="dept[]" value="35">Accounting</label>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-3">
					Foto Profil :<br>
					<small>*Ukuran Maks 2 MB. usahakan foto persegi</small>
				</div>

				<div class="col-sm-9">
					<span class="btn btn-default btn-file" style="background-color: white">
					<input type="file" name="ft_profil" style="cursor: pointer;">
					</span>
				</div>
				
			</div>

			<!-- <div class="row">
				<div class="col-sm-3">
					Foto Profil 2 :<br>
					<small>*Ukuran Maks 2 MB. usahakan foto persegi</small>
				</div>

				<div class="col-sm-9">
					<span class="btn btn-default btn-file" style="background-color: white">
					<input type="file" name="ft_profil2" style="cursor: pointer;">
					</span>
				</div>
				
			</div> -->

			<div class="row" style="padding-top: 10px">
				<div class="col-sm-12 text-right">
					<!--<button type="submit" id="checkBtn" style="font-family: 'Exo 2', sans-serif; " name="input" class="btn btn-warning"><span class="glyphicon glyphicon-floppy-save"></span> Tambah Karyawan</button>-->
					<!-- <input type="submit" id="checkBtn" name="input" style="font-family: 'Exo 2', sans-serif; font-style: italic;" class="btn btn-warning" value="Tambah Karyawan"> -->
				</div>
			</div>

			</form>

		</div>
	</div>
	<br/>
	<div style="padding-bottom: 30px">
	<center><a class= "btn btn-warning" href="<?php echo base_url(); ?>Index" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-home"></span><h7><i> Home</i></h7></a>
	</a>
	<a class= "btn btn-warning" href="<?php echo base_url(); ?>Karyawan" style="font-family: 'Exo 2', sans-serif;"><h7><i>Data Karyawan</i></h7></a>
	<a href="<?php base_url();?>login/logout" class="btn btn-danger" style="font-family: 'Exo 2', sans-serif; margin: 0px 25px ">Logout</a>
	</center>
	</div>

	<script type="text/javascript">
	$(document).ready(function () {
	    $('#checkBtn').click(function() {
	      checked = $("input[type=checkbox]:checked").length;

	      if(!checked) {
	        alert("Anda harus memilih salah satu Departement!");
	        return false;
	      }

	    });
	});

	// utk all checkbox

	function pilihhakmenilai(){
		if ($('#allmenilai').prop('checked')) {
	    	$('.menilai').prop('checked', true);
	    	}
	    else {
	        $('.menilai').prop('checked', false);
	    }
	}

	function pilihdeptmatch(){
		if ($('#allmatch').prop('checked')) {
	    	$('.match').prop('checked', true);
	    	}
	    else {
	        $('.match').prop('checked', false);
	    }
	}

	function pilihdeptwpi(){
		if ($('#allwpi').prop('checked')) {
	    	$('.wpi').prop('checked', true);
	    	}
	    else {
	        $('.wpi').prop('checked', false);
	    }
	}

	function pilihdeptkct(){
		if ($('#allkct').prop('checked')) {
	    	$('.kct').prop('checked', true);
	    	}
	    else {
	        $('.kct').prop('checked', false);
	    }
	}

	function pilihdeptwiklan(){
		if ($('#allwiklan').prop('checked')) {
	    	$('.wik').prop('checked', true);
	    	}
	    else {
	        $('.wik').prop('checked', false);
	    }
	}
	function pilihdeptrcp(){
		if ($('#allrcp').prop('checked')) {
	    	$('.rcp').prop('checked', true);
	    	}
	    else {
	        $('.rcp').prop('checked', false);
	    }
	}
	</script>

	<script>   
   $(".alert-message").alert();
window.setTimeout(function() { $(".alert-message").alert('close'); }, 2000);
	</script>

	<script type="text/javascript">
	<!--
	 
	$(document).ready(function () {
	 
	window.setTimeout(function() {
	    $(".alert").fadeTo(1500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 4000);
	 
	});
	//-->
	</script>

</body>
</html>