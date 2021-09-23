
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tahapan Pondasi | Quality Control Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Aplikasi Quality Control" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_qc.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- //font -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<!-- lokasi -->
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfXY2npHNq_B_GVvTL0c6fJ-iL2tdN3Ug&libraries=places&sensor=false"></script>
<!-- lokasi end -->




<!-- mulai untuk upload -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/basic.min.css') ?>">
<script type="text/javascript" src="<?php echo base_url('assets/dropzone.min.js') ?>"></script>
<style type="text/css">
.dropzone {
	/*margin-top: 100px;*/
	border: 2px dashed #0087F7;
}

.fotoku{
width:130px;
height: 130px;
/*overflow: hidden;*/
}

.fotoku img{
width:100%;
height: 100%;
overflow: hidden;
}

.album-besar{
width:150px;
float:left;
}
.sub-album{
width:150px;

float:left;
padding:5px;
margin:5px;
text-align:center;
	/*-moz-border-radius:4px;
	-webkit-border-radius: 4px;*/
	border:1px dashed #cccccc;

}


#lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    
    z-index:1032;
}

@media (max-width: 768px){
#lightbox{
 padding-top: 150px;
}


}

.keterangan{
		background-color: white;
		border: 4px inset #29D9C2;
	    /*outline-style: solid;*/
	    box-shadow: 0 0 0 8px #BDF25D;
	    border-radius: 10px;
	    outline-color: black;
	   	max-width: 450px;
  		margin: 0 auto;
  		margin-top: 10px;
  		text-align: justify;
  		padding: 8px;
  		font-size: 20px;

		}


.utkhilang {
    display: none;
}


</style>
<!-- selesai untuk upload -->
</head>
<body >
	<!-- banner -->
	<div class="banner-pondasi jarallax">
		<div class="agileinfo-dot-1">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address" style="padding-bottom: 5px">
						<!-- <div class="col-md-4 banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> Taman Street No.15
Sidoarjo - East Java, 61257</p>
						</div> -->
						<!-- <div class="col-md-3 banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:marketing@tritunggalmetalworks.com">marketing@tritunggalmetalworks.com</a></p>
						</div> -->
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> Head Office (62-31) 7870870 - Sidoarjo</p>
						</div>
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> Branch Office (62-21) 8291734 - Jakarta</p>
						</div>
						<div class="col-md-2 agileinfo-social-grids" style="color: white">
							
							<script>
							var d=new Date();
							var weekday=new Array("Ahad","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
							var monthname=new Array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
							document.write(weekday[d.getDay()] + ", ");
							document.write(d.getDate() + " " );
							document.write(monthname[d.getMonth()] + " ");
							document.write(d.getFullYear());
							</script>
							
						</div>
						<div class="col-md-2 agileinfo-social-grids">
						<iframe frameborder='0' height='25' id='sidebar-gadget1' name='sidebar-gadget1' src='//www-blogger-opensocial.googleusercontent.com/gadgets/ifr?url=http://www.dwebresources.com/widgets/google_clock.xml&container=blogger&view=default&lang=in&country=ALL&sanitize=0&v=be64a465e8b03bec&libs=com.google.gadgets.analytics:core&parent=http://gilangkencure.blogspot.com/&up_mode=1&up_bg=%23000000&up_color=%2388ECFB&up_font&up_bold=1&mid=1#up_bold=1&up_gmt=99&up_color=%2388ECFB&up_font&up_bg=%ff66ff&up_mode=1&st=e%3DAFlCd0XxtNliwM4RXgodqJ%252FE4n8xUWmGRgUuTN1FHI0w8yOXHi%252Fi48HACtcLEygrIux1ukdUmO6E%252BsSbz8la9Yr1zm8reTYZ%252BVgb4sa2V0gexkhErvEsxmDWVTYmy9%252FU%252BZwKhOCCbp9b%26c%3Dblogger&rpctoken=-7441248477833140870' style='display: block;' width='100px'></iframe>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<div class="header-top-grids">
						<div class="agileits-logo">
							<h3><a href="#">Quality Control Application</a></h3>
						</div>
						<div class="top-nav">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav>
										<ul class="nav navbar-nav">
											<li><a href="<?php echo base_url() ?>qcindex">Home</a></li>
											<!-- <li><a href="about.html">About</a></li>
											<li><a href="gallery.html">Gallery</a></li> -->
											<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pondasi <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a class="hvr-bounce-to-bottom" href="<?php echo base_url() ?>pondasi">Input Pondasi</a></li>
													<li><a class="hvr-bounce-to-bottom" href="<?php echo base_url() ?>pondasi/terkirim">Laporan Terkirim</a></li>          
												</ul>
											</li>

											<?php if ($this->session->userdata('level') != '2' AND $this->session->userdata('level') != '11' AND $this->session->userdata('level') != '12') { ?>


											<li><a href="<?php echo base_url() ?>pondasi/laporan">Laporan Pondasi</a></li>

											<!-- <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a class="hvr-bounce-to-bottom" href="<?php echo base_url() ?>recovering/laporan">Laporan Recovering</a></li>
												</ul>
											</li> -->

											<?php } ?>
											
											<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username'); ?> <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a class="hvr-bounce-to-bottom" href="<?php echo base_url() ?>login/logout">Logout</a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h3 class="agileinfo_header">Tahapan <span>Pondasi</span></h3>
			<p class="agileits_dummy_para">Isilah data dengan lengkap dan benar!</p>
			<br>
			<div class="row">
				<div class="keterangan">
				<p><b>Keterangan :</b><br>
				Foto Slumtest 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp= 
				1 Foto<br>
				Foto Pembesian 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp= 
				2 Foto<br>
				Foto Pengecoran 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp = 
				2 Foto<br>
				Foto Surat Jalan 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp= 
				1 Foto<br>
				Foto Lebar Galihan
				  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp = 
				2 Foto<br><!-- &nbsp -->
				Foto Kedalaman Galihan 
				&nbsp &nbsp &nbsp &nbsp= 
				2 Foto<br>
				Foto Material Pembesian 
				&nbsp &nbsp &nbsp = 
				3 Foto<br>
				Foto Pengelasan Pembesian = 3 Foto<br>
				</p>
				</div>
			</div>
			<br><br>
			

			<div class="container">
				<!-- <form id="form_pondasi" action="<?php echo base_url();?>pondasi/create" method="POST"> -->

				<form  action="<?php echo base_url();?>pondasi/create" method="POST">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="Tanggal">Tanggal :</label>
			  				<?php
			  				date_default_timezone_set('Asia/Jakarta');
			  				$inputsekarang = date("d-M-Y \P\u\k\u\l h:i:s A");?>
							<input type="text" style="text-align: center;" name="tgl" class="form-control" value="<?php echo $inputsekarang;?>" disabled>
					    	<!-- <input type="text" class="form-control" id="" placeholder=" Enter Name"> -->
				  		</div>
				  		
				  		<div class="form-group">
					    	<label for="Nama">Nama PIC :</label>
					    	<input type="text" name="nama_karyawan" style="text-align: center;" class="form-control" value="<?= $this->session->userdata('nama_karyawan') ?>" disabled>
					    	<input type="hidden" style="text-align: center;" name="id_karyawan" class="form-control" value="<?= $this->session->userdata('id_karyawan') ?>">
					  	</div>	
					  	<div class="form-group">
					    	<label for="perusahaan">Perusahaan :</label>
					    	<select class="form-control" id="perusahaan" name="perusahaan" required>
						      <option value="">-- Pilih Perusahaan --</option>
						      <option value="PT. Kreasi Cipta Tritunggal">PT. Kreasi Cipta Tritunggal (Tritunggal Metalworks)</option>
						      <option value="PT. Multi Artistikacithra Advertising">PT. Multi Artistikacithra Advertising (Match Advertising)</option>
						      <option value="PT. Wijaya Persada Indonesia">PT. Wijaya Persada Indonesia (Wiperindo)</option>
						      <option value="Vendor">Vendor</option>
						    </select>
			  			</div>
			  			<div class="form-group">
			  				<label for="Vendor">Vendor :</label>
			  				<input id="vendor" class="form-control" type="text" name="vendor" placeholder="Nama Vendor">
			  			</div>
			  			<div class="form-group">
			  				<label for="Foto">Status Foto :</label>
			  				<select class="form-control" id="status_foto" name="status_foto" required>
						      <option value="">-- Pilih Status Foto --</option>
						      <option value="Siang">Siang</option>
						      <option value="Malam">Malam</option>
						    </select>
			  			</div>			  		
			  		</div>

			  		<script>
		  				$("select[name=perusahaan]").change(function(){
						   if($(this).val()=="Vendor")
						   {
						    document.getElementById("vendor").setAttribute("required", "");
						   }
						   else
						   {	
						   	document.getElementById("vendor").removeAttribute("required");
						   }

						});
			  		</script>

			  		<!-- ambil latitude -->
			  		<script>
			  			showlocation();
		  				function showlocation() {
						   // One-shot position request.
						   navigator.geolocation.getCurrentPosition(callback);
						}

						function callback(position) {
						   document.getElementById('latitude').innerHTML = position.coords.latitude;
						   document.getElementById('longitude').innerHTML = position.coords.longitude;
						   // document.getElementById('latitudeedit').innerHTML = position.coords.latitude;
						   // document.getElementById('longitudeedit').innerHTML = position.coords.longitude;


						// mulai convert ke alamat ke ajax.php pada folder luar
						   setTimeout(function() {
			                  $.ajax({
			                    url: 'ajax.php',
			                    type: 'POST',
			                    data: {lat: position.coords.latitude, lng: position.coords.longitude},
			                    success: function(data){
			                      $('.resultgps').html(data);
			                      $('.resultgps2').val(data);
			                      $('.resultgpsedit').val(data);
			                    },
			                    error: function(){
			                      alert('Error GPS!');
			                    }
			                  })
			              }
			              , 1000);
			            };
						

		  			</script>

		  			
		  			
			

					<!-- <div class="resultgps"></div> -->
					
					<!-- <script type="text/javascript">
					setInterval(function() {
						var lihat = $('#gpse').val();
						alert(lihat);
					},5000)
					</script> -->

					 

			  	<!-- <?php

					$lat = -7.2925927;
					$lng= 112.7330891; //longitude
					echo $lat;

				
					$address = getaddress($lat, $lng);
					// $address= getaddress($lat, $lng);
					if($address)
					{
					echo $address;
					}
					else
					{
					echo "Not found";
					}
				

				function getaddress($lat,$lng)
					{
						if(!null == $lat && !null == $lng){
						$url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
						$json = @file_get_contents($url);
						$data=json_decode($json);
						$status = $data->status;
						if($status=="OK")
						return $data->results[0]->formatted_address;
						else
						return false;
						}
					}
					?> -->


			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<input class="btn btn-warning" type="button" value="Refresh Location" onclick="showlocation()" />
			  				<br>
							Latitude: <span id="latitude"></span>,
							Longitude: <span id='longitude'></span>
							<br>
			  				<label class="form-check-label">Lokasi GPS <input type="radio" class="form-check-input" name="gps" checked="checked" value="gps"/></label> 

							<!-- <label class="form-check-label"> &nbsp Input Teks <input type="radio" class="form-check-input" name="gps" value="teks"/> </label> -->

							<input style="" class="form-control resultgps2" type="text" placeholder="Alamat gps" id="tampil" disabled> <!-- ini ditampilkan saja -->

							<input style="display: none" class="form-control resultgps2" type="text" id="gpse" name="alamat" placeholder="Alamat gps" required> <!-- ini inputan -->

							<input style="display: none" class="form-control" type="text" id="tekse" name="alamatteks" placeholder="Alamat" >

							<input style="display: none; margin-top: 10px" class="form-control" type="text" id="kota" name="kota" placeholder="Kota" >

							<input style="display: none; margin-top: 10px" class="form-control" type="text" id="prov" name="prov" placeholder="Provinsi" >
							
							<!-- <input type="text" name="otherAnswer" id="otherAnswer"/> -->
			  			</div>

			  			<!-- untuk tdk bisa simpan jk alamat gps kosong -->
						<script>
							$(document).ready(function(){						    
							    $("#simpane").click(function(){
							    	if($("#gpse").val()=="" || $("#gpse").val()==null ){
							        alert("Alamat GPS tidak ditemukan, cek kembali atau gunakan input teks");
							        // document.getElementById("simpane").setAttribute("disabled", "");
								    }
								});
							    return false;
							});
				  		</script>
						<!-- selesai -->

			  			<script>
			  				$("input[type='radio'][name=gps]").change(function(){
							   if($(this).val()=="teks")
							   {
							      document.getElementById("gpse").style.display = 'none';
							      document.getElementById("tampil").style.display = 'none';
							      // $('#gpse').val('');
							      document.getElementById("tekse").style.display = 'block';
							      document.getElementById("kota").style.display = 'block';
							      document.getElementById("prov").style.display = 'block';
							      document.getElementById("tekse").setAttribute("required", "");
							      document.getElementById("kota").setAttribute("required", "");
							      document.getElementById("prov").setAttribute("required", "");
							      document.getElementById("gpse").removeAttribute("required");
							      document.getElementById("simpan").removeAttribute("disabled", "");
							      document.getElementById("simpan").style.display = 'none';
							      document.getElementById("tekssimpan").style.display = 'block';


							     	
							      // $("#tekse").show();
							   }
							   else
							   {
							   		// document.getElementById("gpse").style.display = 'block';
							   		document.getElementById("tampil").style.display = 'block';
							   		document.getElementById("tekse").style.display = 'none';
							   		document.getElementById("kota").style.display = 'none';
							      	document.getElementById("prov").style.display = 'none';
							   		document.getElementById("tekse").removeAttribute("required");
							   		document.getElementById("kota").removeAttribute("required");
							   		document.getElementById("prov").removeAttribute("required");
							   		document.getElementById("simpan").style.display = 'block';
							      	document.getElementById("tekssimpan").style.display = 'none';
							   		// document.getElementById("gpse").setAttribute("required", "");
							   		
							       // $("#gpse").show();
							       // $("#tekse").hide(); 
							   }

							});
			  			</script>

			  			
			  			<!-- select2 -->
						<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
						<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

						<script>
						  $(document).ready(function() { 
						   $("select.select").select2(); 
						  });
						</script>

						<div class="form-group">
					    	<label for="perusahaan">Jenis Reklame :</label>
							<section>
								<select class="select form-control" id="reklame" name="reklame" required>

								   <option value="">-- Pilih Jenis Reklame --</option>
								   <optgroup label="Outdoor :">
								    <option value="Billboards">Billboards</option>
								    <option value="Baliho">Baliho</option>
								    <option value="Neon Box">Neon Box</option>
								    <option value="Midi Board">Midi Board</option>
								    <option value="Pedestrian Bridge (JPO)">Pedestrian Bridge (JPO)</option>
								    <option value="Videotron">Videotron</option>
								    <option value="Road Sign">Road Sign</option>
								    <option value="Tower Sign">Tower Sign</option>
								    <option value="Bando Jalan">Bando Jalan</option>
								    <option value="Letter Sign">Letter Sign</option>
								   </optgroup>

								   <optgroup label="Indoor :">
								   <option value="Letter Sign (Back Light)">Letter Sign (Back Light)</option>
								    <option value="Letter Sign (Non Light)">Letter Sign (Non Light)</option>
								    <option value="Running Text (Tulisan)">Running Text (Tulisan)</option>
								    <option value="Moving Sign-LED (Gambar)">Moving Sign-LED (Gambar)</option>
								   </optgroup>
								   
								</select>
							</section>
						</div>



			  			<div class="form-group">
			  				<label for ="description">Keterangan :</label>
			  			 	<textarea rows="5"  class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
			  			</div>

			  			<button type="submit" id="simpane" class="btn btn-primary col-md-12"><i class="glyphicon glyphicon-floppy-save" style="color: white"></i> Simpan</button>

			  			<button type="submit" id="tekssimpan" class="btn btn-primary col-md-12 utkhilang"><i class="glyphicon glyphicon-floppy-save" style="color: white;"></i> Simpan</button>


					</div>
				</form>
			</div>

			<?php 
				$no = 1;
				
				foreach($table as $posting){ 
				?>
				<?php $tgl = $posting->tanggal ;?>
					<hr>
					<!-- <div class="col-md-12">
					<button class="btn btn-primary" style="cursor:default;"><?php echo $no++?> )</button>	
					</div> -->

					<!-- untuk memanggil data foto pada table lain -->

					<!-- slumtest -->
					<?php $data_foto = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Slumtest'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_foto2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Slumtest')); ?>
					<?php $tot_fotoslumtest = $data_foto2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- slumtest selesai-->

					<!-- Pembesian -->
					<?php $data_fotopembesian = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Pembesian'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotopembesian2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Pembesian')); ?>
					<?php $tot_fotopembesian = $data_fotopembesian2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- Pembesian Selesai -->

					<!-- pengecoran -->
					<?php $data_fotopengecoran = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Pengecoran'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotopengecoran2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Pengecoran')); ?>
					<?php $tot_fotopengecoran = $data_fotopengecoran2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- pengecoran -->

					<!-- surat jalan -->
					<?php $data_fotosj = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Surat Jalan'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotosj2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Surat Jalan')); ?>
					<?php $tot_fotosj = $data_fotosj2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- surat jalan -->

					<!-- Lebar galihan -->
					<?php $data_fotolg = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Lebar Galihan'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotolg2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Lebar Galihan')); ?>
					<?php $tot_fotolg = $data_fotolg2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- Lebar galihan -->

					<!-- kedalaman galihan -->
					<?php $data_fotokg = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Kedalaman Galihan'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotokg2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Kedalaman Galihan')); ?>
					<?php $tot_fotokg = $data_fotokg2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- kedalaman galihan -->

					<!-- material pembesian -->
					<?php $data_fotomp = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Material Pembesian'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotomp2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Material Pembesian')); ?>
					<?php $tot_fotomp = $data_fotomp2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- material pembesian -->

					<!-- pengelasan pembesian -->
					<?php $data_fotopp = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Pengelasan Pembesian'))->result(); ?>
					<!-- untuk menghitung maks foto -->
					<?php $data_fotopp2 = $this->db->get_where('foto_pondasi', array('id_posting' => $posting->id_pondasi, 'jenis_foto' => 'Pengelasan Pembesian')); ?>
					<?php $tot_fotopp = $data_fotopp2->num_rows(); ?>
					<!-- untuk menghitung maks foto selesai-->
					<!-- pengelasan pembesian -->



					<!-- untuk falidasi tombol tambah foto slumtest tidak bisa jika foto maksimal -->
					<?php if ($tot_fotoslumtest >= 1 ){ ?>

					<script>
						$(document).ready(function(){						    
						    $("#slumtest<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Slumtest adalah 1 Foto");
						        document.getElementById("slumtest<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto pembesian tidak bisa jika foto maksimal -->
					<?php if ($tot_fotopembesian >= 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#pembesian<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Pembesian adalah 2 Foto");
						        document.getElementById("pembesian<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto pengecoran tidak bisa jika foto maksimal -->
					<?php if ($tot_fotopengecoran >= 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#pengecoran<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Pengecoran adalah 2 Foto");
						        document.getElementById("pengecoran<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto surat jalan tidak bisa jika foto maksimal -->
					<?php if ($tot_fotosj >= 1 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#sj<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Surat Jalan adalah 1 Foto");
						        document.getElementById("sj<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto lebar galihan tidak bisa jika foto maksimal -->
					<?php if ($tot_fotolg >= 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#lg<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Lebar Galihan adalah 2 Foto");
						        document.getElementById("lg<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto kedalaman galihan tidak bisa jika foto maksimal -->
					<?php if ($tot_fotokg >= 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#kg<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Kedalaman Galihan adalah 2 Foto");
						        document.getElementById("kg<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto Material Pembesian tidak bisa jika foto maksimal -->
					<?php if ($tot_fotomp >= 3 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#mp<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Material Pembesian adalah 3 Foto");
						        document.getElementById("mp<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi tombol tambah foto Pengelasan Pembesian tidak bisa jika foto maksimal -->
					<?php if ($tot_fotopp >= 3 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#pp<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Maksimal Foto Pengelasan Pembesian adalah 3 Foto");
						        document.getElementById("pp<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- batas -->

					<!-- untuk falidasi foto slumtest harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotoslumtest < 1 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Slumtest harus 1 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto pembesian harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotopembesian < 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Pembesian harus 2 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto pengecoran harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotopengecoran < 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Pengecoran harus 2 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto surat jalan harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotosj < 1 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Surat Jalan harus 1 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto lebar galihan harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotolg < 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Lebar Galihan harus 2 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto Kedalaman Galihan harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotokg < 2 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Kedalaman Galihan harus 2 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto Material Pembesian harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotomp < 3 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Material Pembesian harus 3 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>

					<!-- untuk falidasi foto Pengelasan Pembesian harus lengkap sebelum simpan dan kirim -->
					<?php if ($tot_fotopp < 3 ){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#send<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Foto Pengelasan Pembesian harus 3 Foto");
						        document.getElementById("send<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>


					<!-- untuk falidasi edit tidak bisa jika sdh ada foto -->
					<?php if (!empty($data_foto || $data_fotopembesian || $data_fotopengecoran || $data_fotosj || $data_fotolg || $data_fotokg || $data_fotomp || $data_fotopp )){ ?>
					<script>
						$(document).ready(function(){						    
						    $("#editku<?php echo $posting->id_pondasi ?>").click(function(){
						        alert("Sudah ada foto yang diupload, Hapus dulu foto jika ingin edit laporan");
						        document.getElementById("editku<?php echo $posting->id_pondasi ?>").setAttribute("disabled", "");
						    });
						    return false;
						});
			  		</script>
					<?php } ?>
					<!-- untuk falidasi edit tidak bisa jika sdh ada foto -->



					

					<!-- untuk lightbox -->
						<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						        
						        <div class="modal-content pull-right">
						        	<button class="btn btn-warning" style="position:fixed;z-index:999; border-color: white; border:solid; border-radius: 50%; right: -3%; top: -15px;"  data-dismiss="modal">X</button>
						            <div class="modal-body">
						            	<div class="col-md-12">
						            	
						                <img style="width: 100%; height: auto; padding: 0px 0px 10px 0px" src="" alt="" />
						                </div>

						                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
						            </div>
						        </div>
						    </div>
						</div>

						<script>
							$(document).ready(function() {
						    var $lightbox = $('#lightbox');
						    
						    $('[data-target="#lightbox"]').on('click', function(event) {
						        var $img = $(this).find('img'), 
						            src = $img.attr('src'),
						            alt = $img.attr('alt'),
						            css = {
						                'maxWidth': $(window).width() - 100,
						                'maxHeight': $(window).height() - 100
						            };
						    
						        $lightbox.find('.close').addClass('hidden');
						        $lightbox.find('img').attr('src', src);
						        $lightbox.find('img').attr('alt', alt);
						        $lightbox.find('img').css(css);
						    });
						    
						    $lightbox.on('shown.bs.modal', function (e) {
						        var $img = $lightbox.find('img');
						            
						        $lightbox.find('.modal-dialog').css({'width': $img.width()});
						        $lightbox.find('.close').removeClass('hidden');
						    });
						});
						</script>
						<!-- untuk lightbox selesai-->

				<div class="col-md-12">
					<center><b><h3><?php echo $posting->reklame ?></h3></b></center>
					<center><h4 style=" text-transform: capitalize;"><?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</h4></center>

					<h5>Dipost oleh <?php echo $posting->nama_karyawan ?>	</h5>
					<div>
						<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
						<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
					</div>
					<h4><text style="color: #0b3789">Perusahaan &nbsp:&nbsp <?php echo $posting->perusahaan ?></text></h4>
					<?php if(!empty($posting->vendor)){ ?>
					<h4><text style="color: #0b3789">Vendor  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp:&nbsp <?php echo $posting->vendor ?></text></h4>
					<?php } ?>
					<h4><text style="color: #0b3789">Kondisi Foto :&nbsp <?php echo $posting->status_foto ?></text></h4>					
					<!-- <h4><text style="color: #0b3789">Jenis Rekalame : <?php echo $posting->reklame ?></text></h4>
					<h4 style=" text-transform: capitalize;"><text style="color: #0b3789; ">Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h4> -->
					<p style="font-style: italic;">Keteragan : <?php echo $posting->ket ?></p>
					

					<input type="text" name="alamate" id="alamate" style="visibility: hidden;" value="<?php echo $posting->alamat ?>">


					<!-- untuk menampilkan data foto -->
					<!-- <div class="col-md-12"> -->
					<div class="row">

					<?php if (!empty($data_foto)){ ?>	
					<div class="col-md-12">
					<h3>Foto Slumtest :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_foto as $foto) { ?>

						

						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan data foto selesai -->

					<!-- untuk menampilkan foto pembesian mulai -->
					<div class="row">

					<?php if (!empty($data_fotopembesian)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Pembesian :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotopembesian as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto pembesian selesai -->

					<!-- untuk menampilkan foto pengecoran mulai -->
					<div class="row">

					<?php if (!empty($data_fotopengecoran)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Pengecoran :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotopengecoran as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto pengecoran selesai -->

					<!-- untuk menampilkan foto surat jalan mulai -->
					<div class="row">

					<?php if (!empty($data_fotosj)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Surat Jalan :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotosj as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto surat jalan selesai -->


					<!-- untuk menampilkan foto lebar galihan mulai -->
					<div class="row">

					<?php if (!empty($data_fotolg)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Lebar Galihan :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotolg as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto lebar galihan selesai -->

					<!-- untuk menampilkan foto Kedalaman Galihan mulai -->
					<div class="row">

					<?php if (!empty($data_fotokg)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Kedalaman Galihan :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotokg as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto Kedalaman Galihan selesai -->

					<!-- untuk menampilkan foto Material Pembesian mulai -->
					<div class="row">

					<?php if (!empty($data_fotomp)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Material Pembesian :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotomp as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto Material Pembesian selesai -->

					<!-- untuk menampilkan foto Pengelasan Pembesian mulai -->
					<div class="row">

					<?php if (!empty($data_fotopp)){ ?>	
					<div class="col-md-12" style="border-top: 2px dashed gray">
					<h3>Foto Pengelasan Pembesian :</h3>
					</div>				

					<?php } ?>

					<?php
						foreach($data_fotopp as $foto) { ?>


						<span class="album-besar sub-album">
								
							<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">	
							<div class="fotoku">
							<img class="img-responsive" src="<?php echo base_url() ?>/assets/upload-foto/pondasi/<?= $foto->nama_foto ?>">
							</div>
							</a>

							<button data-toggle="modal" data-target="#modalHapusfoto<?= $foto->id ?>" type="button" class="btn btn-danger btn-sm col-md-12">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
					        
						</span>
						<!-- <div style="color: red; font-size: 55px"><?= $foto->nama_foto ?></div> -->
						

						<!-- Modal hapus foto-->
						<div class="modal fade" id="modalHapusfoto<?php echo $foto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
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
									<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus_fotosatu/<?php echo $foto->id?>">
								      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Hapus</button>
									</form>
						      </div>
						    </div>
						  </div>
						</div>
					<?php
						}
					?>
					</div>
					<!-- untuk menampilkan foto Pengelasan Pembesian selesai -->

					<!-- mulai tombol -->
					<div class="col-md-12" style="border-top: 2px dashed gray"></div><br>					
					<div class="row" style="margin-bottom: 5px">
						<div class="col-md-3">
							<button data-toggle="modal" style="height: 50px; color: white; background-color: #184169" data-target="#modalslumtest<?php echo $posting->id_pondasi ?>" type="button" id="slumtest<?php echo $posting->id_pondasi ?>" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Slumtest ( 1 Foto )
					        </button>
				        </div>

				        <div class="col-md-3">
					        <button data-toggle="modal" style="height: 50px; color: white; background-color: #13314D" id="pembesian<?php echo $posting->id_pondasi ?>" data-target="#modalpembesian<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Pembesian ( 2 Foto )
					        </button>
				    	</div>

				        <div class="col-md-3">
					        <button data-toggle="modal" style="height: 50px; color: white; background-color: #121C25" id="pengecoran<?php echo $posting->id_pondasi ?>" data-target="#modalpengecoran<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Pengecoran ( 2 Foto )
					        </button>
				    	</div>

				    	<div class="col-md-3">
					        <button data-toggle="modal" style="height: 50px; color: white; background-color: #121C25" id="sj<?php echo $posting->id_pondasi ?>" data-target="#modalsj<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Surat Jalan ( 1 Foto )
					        </button>
				    	</div>
				    </div>

				    <div class="row" style="margin-bottom: 5px">
						<div class="col-md-3">
							<button data-toggle="modal" style="height: 50px; color: white; background-color: #C9283E" data-target="#modallg<?php echo $posting->id_pondasi ?>" type="button" id="lg<?php echo $posting->id_pondasi ?>" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Lebar Galihan ( 2 Foto )
					        </button>
				        </div>

				        <div class="col-md-3">
					        <button data-toggle="modal" style="height: 50px; color: white; background-color: #820333" id="kg<?php echo $posting->id_pondasi ?>" data-target="#modalkg<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Kedalaman Galihan ( 2 Foto )
					        </button>
				    	</div>

				        <div class="col-md-3">
					        <button data-toggle="modal" style="height: 50px; color: white; background-color: #540032" id="mp<?php echo $posting->id_pondasi ?>" data-target="#modalmp<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Material Pembesian ( 3 Foto )
					        </button>
				    	</div>

				    	<div class="col-md-3">
					        <button data-toggle="modal" style="height: 50px; color: white; background-color: #2E112D" id="pp<?php echo $posting->id_pondasi ?>" data-target="#modalpp<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-plus-sign"></span> Tambah Foto Pengelasan Pembesian ( 3 Foto )
					        </button>
				    	</div>
				    </div>

				        
				        
				    <div class="row" style="margin-bottom: 10px">
				        <div class="col-md-6">
							<button data-toggle="modal" data-target="#myModal<?php echo $posting->id_pondasi ?>" style="height: 40px" id="editku<?php echo $posting->id_pondasi ?>" type="button" class="btn btn-warning btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-edit"></span> Edit
					        </button>
				        </div>

				        <div class="col-md-6">
					        <button data-toggle="modal" data-target="#modalHapus<?php echo $posting->id_pondasi ?>" style="height: 40px" type="button" class="btn btn-danger btn-sm form-control">
					        <span  style="color: white" class="glyphicon glyphicon-trash"></span> Hapus
					        </button>
				        </div>
			        </div>

					<div class="row">
						<div class="col-md-12">
						<button type="button" class="btn btn-primary btn-sm form-control" style="height: 50px" data-toggle="modal" id="send<?php echo $posting->id_pondasi ?>" data-target="#myModalsend<?php echo $posting->id_pondasi ?>">Simpan dan Kirim</button>
						</div>
					</div>
					<br>
					<!-- <hr> -->
					<div style="border: solid 2px black"></div>
					<br>
				</div>

					<!-- Modal simpan dan kirim send -->
					<div class="modal fade" id="myModalsend<?php echo $posting->id_pondasi ?>" role="dialog" style="padding-top: 100px;">
						<div class="modal-dialog modal-lg">
						  <div class="modal-content">
						    <div class="modal-header">
						      <button type="button" class="close" data-dismiss="modal">&times;</button>
						      <h4 class="modal-title">Konfirmasi Simpan dan Kirim</h4>
						    </div>
						    <div class="modal-body" style="background-color: #f44242; ">
						    <form id="form_kpim" action="<?php base_url();?>pondasi/updatestatus" method="POST">
						    <input type='hidden' class="form-control" name="id" value="<?php echo $posting->id_pondasi ?>" /> 
						    <input type='hidden' class="form-control" name="isistatus" value="1" /> 
						      <p style="text-align: center; color: white;">Yakin Simpan dan Kirim laporan?</p>
						      
						    
						    </div>
						    <div class="modal-footer">
						    	<div style="float: left;">*<span style="color: red; font-weight: bold;">Pastikan data sudah benar!</span> Laporan tidak bisa diedit jika telah dikirim</div>
						      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						      <input type="submit" name="input" class="btn btn-primary" value="Kirim"> 
						    </form>
						    </div>
						  </div>
						</div>
					</div>


					<!-- Modal upload slumtest-->
					 <div class="modal fade" id="modalslumtest<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Slumtest (1 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftslumtest<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotoslumtest; ?>;
								var maksimal = 1 - jumlahfoto; 
								
								// alert(typeOf(jumlahfoto));

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftslumtest<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Slumtest";
									c.append("jenis_foto",a.jenis_foto);
								});			

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload selesai-->

					 <!-- Modal upload pembesian-->
					<div class="modal fade" id="modalpembesian<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Pembesian (2 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftpembesian<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotopembesian; ?>;
								var maksimal = 2 - jumlahfoto; 								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftpembesian<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Pembesian";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					</div>
					 <!-- modal upload pembesian selesai-->

					<!-- Modal upload pengecoran-->
					<div class="modal fade" id="modalpengecoran<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Pengecoran (2 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftpengecoran<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotopengecoran; ?>;
								var maksimal = 2 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftpengecoran<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Pengecoran";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload pengecoran selesai-->

					 <!-- Modal upload surat jalan-->
					<div class="modal fade" id="modalsj<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Surat Jalan (1 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftsj<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotosj; ?>;
								var maksimal = 1 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftsj<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Surat Jalan";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload surat jalan selesai-->

					<!-- Modal upload lebar galihan-->
					<div class="modal fade" id="modallg<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Lebar Galihan (2 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftlg<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotolg; ?>;
								var maksimal = 2 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftlg<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Lebar Galihan";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload surat jalan selesai-->

					 <!-- Modal upload lebar galihan-->
					<div class="modal fade" id="modallg<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Lebar Galihan (2 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftlg<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotolg; ?>;
								var maksimal = 2 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftlg<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Lebar Galihan";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload lebar galihan selesai-->

					 <!-- Modal upload kedalaman galihan-->
					<div class="modal fade" id="modalkg<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Kedalaman Galihan (2 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftkg<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotokg; ?>;
								var maksimal = 2 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftkg<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Kedalaman Galihan";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload Kedalaman Galihan selesai-->

					 <!-- Modal upload Material Pembesian-->
					<div class="modal fade" id="modalmp<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Material Pembesian (3 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftmp<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotomp; ?>;
								var maksimal = 3 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftmp<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Material Pembesian";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload Material Pembesian selesai-->

					 <!-- Modal upload Pengelasan Pembesian-->
					<div class="modal fade" id="modalpp<?php echo $posting->id_pondasi ?>" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Foto Pengelasan Pembesian (3 Foto)</h4>
					        </div>
					        <div class="modal-body">
					        	<!-- isi -->
						        <div class="row">
						        	<div class="col-md-6">
						        		<h5><text>Jenis Rekalame : <?php echo $posting->reklame ?></text></h5>
										<h5 style=" text-transform: capitalize;"><text>Alamat : <?php echo $posting->alamat ?> ( Via : <?php echo $posting->jenis_alamat ?> )</text></h5>
										<div>
											<span class="glyphicon glyphicon-calendar"></span> <?php echo date('d-M-Y', strtotime($tgl)); ?>
											<span class="glyphicon glyphicon-time"></span> <?php echo date('H:i:s', strtotime($tgl)); ?>
										</div>
									</div>
									<div class="col-md-6">
										<h5><text>Vendor : <?php echo $posting->vendor ?></text></h5>
										<h5><text>Kondisi Foto : <?php echo $posting->status_foto ?></text></h5>
										<h5><text>Perusahaan : <?php echo $posting->perusahaan ?></text></h5>
										
										<p>Keteragan : <?php echo $posting->ket ?></p>
									</div>
								</div>

					        	<div class="dropzone" id="ikiftpp<?php echo $posting->id_pondasi ?>">
								  <div class="dz-message">
								   <h3>Klik di sini atau Drop gambar di sini</h3>
								  </div>
								</div>



								<script type="text/javascript">
								var jumlahfoto = <?php echo $tot_fotopp; ?>;
								var maksimal = 3 - jumlahfoto;
								

								Dropzone.autoDiscover = false;

								var foto_upload= new Dropzone("#ikiftpp<?php echo $posting->id_pondasi ?>",{
								url: "<?php echo base_url('pondasi/proses_upload/') ?>" + "<?php echo $posting->id_pondasi ?>",
								maxFilesize: 5,
								maxFiles: maksimal,
								method:"post",
								// data:{}
								acceptedFiles:"image/*",
								paramName:"userfile",
								dictInvalidFileType:"Type file ini tidak dizinkan",
								addRemoveLinks:true,
								capture: "camera",
								});


								//Event ketika Memulai mengupload
								foto_upload.on("sending",function(a,b,c){
									a.token=Math.random();
									c.append("token_foto",a.token);
									 //Menmpersiapkan token untuk masing masing foto
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.tokens="<?php echo $posting->alamat ?>";
									c.append("alamat",a.tokens);
								});

								// reklame
								foto_upload.on("sending",function(a,b,c){
									a.reklame="<?php echo $posting->reklame ?>";
									c.append("reklame",a.reklame);
								});

								// tgl
								foto_upload.on("sending",function(a,b,c){
									a.tgl="<?php echo date('d-M-Y, H:i', strtotime($tgl)); ?>";
									c.append("tgl",a.tgl);
								});

								// alamat
								foto_upload.on("sending",function(a,b,c){
									a.ket_alamat="<?php echo $posting->jenis_alamat ?>";
									c.append("ket_alamat",a.ket_alamat);
								});

								// PT
								foto_upload.on("sending",function(a,b,c){
									a.perusahaan="<?php echo $posting->perusahaan ?>";
									c.append("perusahaan",a.perusahaan);
								});

								// Jenis Foto
								foto_upload.on("sending",function(a,b,c){
									a.jenis_foto="Pengelasan Pembesian";
									c.append("jenis_foto",a.jenis_foto);
								});

								//Event ketika foto dihapus
								foto_upload.on("removedfile",function(a){
									var token=a.token;
									$.ajax({
										type:"post",
										data:{token:token},
										url:"<?php echo base_url('pondasi/remove_foto') ?>",
										cache:false,
										dataType: 'json',
										success: function(){
											console.log("Foto terhapus");
										},
										error: function(){
											console.log("Error");

										}
									});
								});


								</script>
					        <!--   <p>This is a large modal.</p> -->
					        </div>
					        <div class="modal-footer">
					        <a href="<?= base_url(); ?>pondasi"><button type="button" class="col-xs-12 col-sm-12 col-lg-12 btn btn-primary">Selesai</button></a>
					          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					        </div>
					      </div>
					    </div>
					 </div>
					 <!-- modal upload Material Pembesian selesai-->

					 

					<!-- Modal edit -->
					<div class="modal fade" id="myModal<?php echo $posting->id_pondasi ?>" tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog modal-lg" role="document">

					    	<!-- <div class="modal fade" id="myModal<?php echo $posting->id_pondasi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-lg" role="document"> -->
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Edit Laporan</h4>
					        </div>
					        <!-- isi modal -->
					        <div class="modal-body">
					        	<form  action="<?php echo base_url();?>pondasi/edit" method="POST">
									<div class="col-md-6 form-line">
										<input style="visibility: hidden;" type="text" name="key" value="<?php echo $posting->id_pondasi ?>">
							  			<div class="form-group">							  				
							  				<label for="Tanggal">Tanggal :</label>
							  				<?php
							  				date_default_timezone_set('Asia/Jakarta');
							  				$inputsekarang = date("d-M-Y \P\u\k\u\l h:i:s A");?>
											<input type="text" style="text-align: center;" name="tgl" class="form-control" value="<?php echo date('d-M-Y, H:i:s', strtotime($posting->tanggal)); ?>" disabled>
									    	<!-- <input type="text" class="form-control" id="" placeholder=" Enter Name"> -->
								  		</div>
								  		
								  		<div class="form-group">
									    	<label for="Nama">Nama PIC :</label>
									    	<input type="text" name="nama_karyawan" style="text-align: center;" class="form-control" value="<?php echo $posting->nama_karyawan ?>" disabled>
									    	<input type="hidden" style="text-align: center;" name="id_karyawan" class="form-control" value="<?php echo $posting->id_kar ?>">
									  	</div>	
									  	<div class="form-group">
									    	<label for="perusahaan">Perusahaan :</label>
									    	<select class="form-control" id="perusahaan<?php echo $posting->id_pondasi ?>" name="perusahaan" required>
										      <option value="">-- Pilih Perusahaan --</option>
										      <option value="PT. Kreasi Cipta Tritunggal" <?php if ($posting->perusahaan == 'PT. Kreasi Cipta Tritunggal') {echo 'selected';} ?>>PT. Kreasi Cipta Tritunggal (Tritunggal Metalworks)</option>
										      <option value="PT. Multi Artistikacithra Advertising" <?php if ($posting->perusahaan == 'PT. Multi Artistikacithra Advertising') {echo 'selected';} ?>>PT. Multi Artistikacithra Advertising (Match Advertising)</option>
										      <option value="PT. Wijaya Persada Indonesia" <?php if ($posting->perusahaan == 'PT. Wijaya Persada Indonesia') {echo 'selected';} ?>>PT. Wijaya Persada Indonesia (Wiperindo)</option>
										      <option value="Vendor" <?php if ($posting->perusahaan == 'Vendor') {echo 'selected';} ?>>Vendor</option>
										    </select>
							  			</div>
							  			<div class="form-group">
							  				<label for="Vendor">Vendor :</label>
							  				<input class="form-control" type="text" id="vendor<?php echo $posting->id_pondasi ?>" name="vendor" placeholder="Nama Vendor" value="<?php echo $posting->vendor ?>">
							  			</div>
							  			<div class="form-group">
							  				<label for="Foto">Status Foto :</label>
							  				<select class="form-control" id="status_foto" name="status_foto" required>
										      <option value="">-- Pilih Status Foto --</option>
										      <option value="Siang" <?php if ($posting->status_foto == 'Siang') {echo 'selected';} ?>>Siang</option>
										      <option value="Malam" <?php if ($posting->status_foto == 'Malam') {echo 'selected';} ?>>Malam</option>
										    </select>
							  			</div>			  		
							  		</div>

							  		<!-- ambil latitude -->
							  		<!-- <script>
							  			showlocation();
						  				function showlocation() {
										   // One-shot position request.
										   navigator.geolocation.getCurrentPosition(callback);
										}

										function callback(position) {
										   document.getElementById('latitude').innerHTML = position.coords.latitude;
										   document.getElementById('longitude').innerHTML = position.coords.longitude;


										// mulai convert ke alamat ke ajax.php pada folder luar
										   setTimeout(function() {
							                  $.ajax({
							                    url: 'ajax.php',
							                    type: 'POST',
							                    data: {lat: position.coords.latitude, lng: position.coords.longitude},
							                    success: function(data){
							                      $('.resultgps').html(data);
							                      $('.resultgps2').val(data);
							                    },
							                    error: function(){
							                      alert('error!');
							                    }
							                  })
							              }
							              , 1000);
							            };
										

						  			</script> -->

							  		<div class="col-md-6">
							  			<div class="form-group">
							  				<input class="btn btn-warning" type="button" value="Refresh Location" onclick="showlocation()" />
							  				<br>
											<!-- Latitude: <span id="latitudeedit"></span>,
											Longitude: <span id='longitudeedit'></span> -->
											<br>
											<label class="form-check-label">Tetap lokasi awal <input type="radio" class="form-check-input" id="gps<?php echo $posting->id_pondasi ?>" name="gpsedit" checked="checked" value="alamatawal"/></label>

							  				<label class="form-check-label">Lokasi GPS (edit) <input type="radio" class="form-check-input" id="gps<?php echo $posting->id_pondasi ?>" name="gpsedit" value="gps"/></label> 

											<!-- <label class="form-check-label"> &nbsp Input Teks (edit) <input type="radio" class="form-check-input" id="gps<?php echo $posting->id_pondasi ?>" name="gpsedit" value="teks"/> </label> -->

											<input style="" class="form-control" value="<?php echo $posting->alamat ?>" type="text" placeholder="Alamat gps" id="alamatawal<?php echo $posting->id_pondasi ?>" disabled> <!-- ini ditampilkan saja utk alamatawal-->

											<input style="display: none" class="form-control resultgpsedit" type="text" placeholder="Alamat gps" id="tampil<?php echo $posting->id_pondasi ?>" disabled> <!-- ini ditampilkan saja utk gps-->

											<input style="display: none" class="form-control" value="<?php echo $posting->alamat ?>" type="text" id="gpse<?php echo $posting->id_pondasi ?>" name="alamattetap" placeholder="Alamat gps"> <!-- ini inputan tetap -->

											<input style="display: none" class="form-control resultgpsedit" type="text" id="gpse<?php echo $posting->id_pondasi ?>" name="alamat" placeholder="Alamat gps"> <!-- ini inputan gps -->

											<input style="visibility: hidden; display: none" value="<?php echo $posting->jenis_alamat ?>" class="form-control" type="text" name="jenis_alamatawal"> <!-- ini inputan jenis alamat awal -->

											<input style="display: none" class="form-control" type="text" id="tekse<?php echo $posting->id_pondasi ?>" name="alamatteks" placeholder="Alamat" >

											<input style="display: none; margin-top: 10px" class="form-control" type="text" id="kota<?php echo $posting->id_pondasi ?>" name="kota" placeholder="Kota" >

											<input style="display: none; margin-top: 10px" class="form-control" type="text" id="prov<?php echo $posting->id_pondasi ?>" name="prov" placeholder="Provinsi" >
											
											<!-- <input type="text" name="otherAnswer" id="otherAnswer"/> -->
							  			</div>

							  			<script>
							  				$("select[id=perusahaan<?php echo $posting->id_pondasi ?>]").change(function(){
											   if($(this).val()=="Vendor")
											   {
											    document.getElementById("vendor<?php echo $posting->id_pondasi ?>").setAttribute("required", "");
											   }
											   else
											   {	
											   	document.getElementById("vendor<?php echo $posting->id_pondasi ?>").removeAttribute("required");
											   }

											});
								  		</script>

							  			<script>
							  				$("input[type='radio'][id=gps<?php echo $posting->id_pondasi ?>]").change(function(){
											   if($(this).val()=="teks")
											   {
											      document.getElementById("gpse<?php echo $posting->id_pondasi ?>").style.display = 'none';
											      document.getElementById("alamatawal<?php echo $posting->id_pondasi ?>").style.display = 'none';
											      document.getElementById("tampil<?php echo $posting->id_pondasi ?>").style.display = 'none';
											      // $('#gpse').val('');
											      document.getElementById("tekse<?php echo $posting->id_pondasi ?>").style.display = 'block';
											      document.getElementById("kota<?php echo $posting->id_pondasi ?>").style.display = 'block';
											      document.getElementById("prov<?php echo $posting->id_pondasi ?>").style.display = 'block';
											      document.getElementById("tekse<?php echo $posting->id_pondasi ?>").setAttribute("required", "");
											      document.getElementById("kota<?php echo $posting->id_pondasi ?>").setAttribute("required", "");
											      document.getElementById("prov<?php echo $posting->id_pondasi ?>").setAttribute("required", "");
											      document.getElementById("gpse<?php echo $posting->id_pondasi ?>").removeAttribute("required");

											     	
											      // $("#tekse").show();
											   }
											   if($(this).val()=="gps")
											   {
											   		// document.getElementById("gpse").style.display = 'block';
											   		document.getElementById("tampil<?php echo $posting->id_pondasi ?>").style.display = 'block';
											   		document.getElementById("alamatawal<?php echo $posting->id_pondasi ?>").style.display = 'none';
											   		document.getElementById("tekse<?php echo $posting->id_pondasi ?>").style.display = 'none';
											   		document.getElementById("kota<?php echo $posting->id_pondasi ?>").style.display = 'none';
											      	document.getElementById("prov<?php echo $posting->id_pondasi ?>").style.display = 'none';
											   		document.getElementById("tekse<?php echo $posting->id_pondasi ?>").removeAttribute("required");
											   		document.getElementById("kota<?php echo $posting->id_pondasi ?>").removeAttribute("required");
											   		document.getElementById("prov<?php echo $posting->id_pondasi ?>").removeAttribute("required");

											   		// document.getElementById("gpse").setAttribute("required", "");
											   		
											       // $("#gpse").show();
											       // $("#tekse").hide(); 
											   }
											   if($(this).val()=="alamatawal")
											   {
											   		// document.getElementById("gpse").style.display = 'block';
											   		document.getElementById("alamatawal<?php echo $posting->id_pondasi ?>").style.display = 'block';
											   		document.getElementById("tampil<?php echo $posting->id_pondasi ?>").style.display = 'none';
											   		document.getElementById("tekse<?php echo $posting->id_pondasi ?>").style.display = 'none';
											   		document.getElementById("kota<?php echo $posting->id_pondasi ?>").style.display = 'none';
											      	document.getElementById("prov<?php echo $posting->id_pondasi ?>").style.display = 'none';
											   		document.getElementById("tekse<?php echo $posting->id_pondasi ?>").removeAttribute("required");
											   		document.getElementById("kota<?php echo $posting->id_pondasi ?>").removeAttribute("required");
											   		document.getElementById("prov<?php echo $posting->id_pondasi ?>").removeAttribute("required");
											   		// document.getElementById("gpse").setAttribute("required", "");
											   		
											       // $("#gpse").show();
											       // $("#tekse").hide(); 
											   }

											});
							  			</script>

							  			
							  			<!-- select2 -->
										<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
										<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

										<script>
										  $(document).ready(function() { 
										   $("select.select").select2(); 
										  });
										</script>

										<div class="form-group">
									    	<label for="perusahaan">Jenis Reklame :</label>
											<section>
												<select style="width: 100%" class="select form-control" id="reklame" name="reklame" required>

												   <option value="">-- Pilih Jenis Reklame --</option>
												   <optgroup label="Outdoor :">
												    <option value="Billboards" <?php if ($posting->reklame == 'Billboards') {echo 'selected';} ?>>Billboards</option>
												    <option value="Baliho" <?php if ($posting->reklame == 'Baliho') {echo 'selected';} ?>>Baliho</option>
												    <option value="Neon Box" <?php if ($posting->reklame == 'Neon Box') {echo 'selected';} ?>>Neon Box</option>
												    <option value="Midi Board" <?php if ($posting->reklame == 'Midi Board') {echo 'selected';} ?>>Midi Board</option>
												    <option value="Pedestrian Bridge (JPO)" <?php if ($posting->reklame == 'Pedestrian Bridge (JPO)') {echo 'selected';} ?>>Pedestrian Bridge (JPO)</option>
												    <option value="Videotron" <?php if ($posting->reklame == 'Videotron') {echo 'selected';} ?>>Videotron</option>
												    <option value="Road Sign" <?php if ($posting->reklame == 'Road Sign') {echo 'selected';} ?>>Road Sign</option>
												    <option value="Tower Sign" <?php if ($posting->reklame == 'Tower Sign') {echo 'selected';} ?>>Tower Sign</option>
												    <option value="Bando Jalan" <?php if ($posting->reklame == 'Bando Jalan') {echo 'selected';} ?>>Bando Jalan</option>
												    <option value="Letter Sign" <?php if ($posting->reklame == 'Letter Sign') {echo 'selected';} ?>>Letter Sign</option>
												   </optgroup>

												   <optgroup label="Indoor :">
												   <option value="Letter Sign (Back Light)" <?php if ($posting->reklame == 'Letter Sign (Back Light)') {echo 'selected';} ?>>Letter Sign (Back Light)</option>
												    <option value="Letter Sign (Non Light)" <?php if ($posting->reklame == 'Letter Sign (Non Light') {echo 'selected';} ?>>Letter Sign (Non Light)</option>
												    <option value="Running Text (Tulisan)" <?php if ($posting->reklame == 'Running Text (Tulisan)') {echo 'selected';} ?>>Running Text (Tulisan)</option>
												    <option value="Moving Sign-LED (Gambar)" <?php if ($posting->reklame == 'Moving Sign-LED (Gambar)') {echo 'selected';} ?>>Moving Sign-LED (Gambar)</option>
												   </optgroup>
												   
												</select>
											</section>
										</div>



							  			<div class="form-group">
							  				<label for ="description">Keterangan :</label>
							  			 	<textarea rows="5"  class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"><?php echo $posting->ket;?></textarea>
							  			</div>

							  			<button type="submit" class="btn btn-primary col-md-12"><i class="glyphicon glyphicon-floppy-save" style="color: white"></i>  Simpan</button>


									</div>
								</form>
								
					          	<p >.</p>
					        </div>
					        <!-- isi modal selesai -->
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					</div>

					<!-- Modal hapus -->
					<div class="modal fade" id="modalHapus<?php echo $posting->id_pondasi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top: 100px;">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
					      </div>
					      <div class="modal-body" style="background-color: #2372ef; color: white">
					        <h4>Yakin hapus ?</h4>
					      </div>
					      <div class="modal-footer">
								<form id="form_kpim" method="POST" action="<?php echo base_url();?>pondasi/hapus/<?php echo $posting->id_pondasi?>">
							      	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary">Hapus</button>
								</form>
					      </div>
					    </div>
					  </div>
					</div>
			<?php } ?>

			
		

		</div>
	</div>
	<!-- //contact -->
<!-- footer -->
<div class="footer">
		<div class="container">
			<h2 class="agileinfo_header">Tahapan <span>Pondasi</span></h2>
				<p class="agileits_dummy_para">Halaman entry laporan pondasi.</p>
				
		</div>
	</div>
<!-- //footer -->
	<!-- jarallax -->
	<script src="<?php echo base_url(); ?>assets/js/jarallax.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->

	<!-- untuk scroll -->
	<script>
	$(document).ready(function(){

		// hide #trik_scroll first
		$("#trik_scroll").hide();
		
		// fade in #trik_scroll
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#trik_scroll').fadeIn();
				} else {
					$('#trik_scroll').fadeOut();
				}
			});

			// scroll body to 0px on click
			$('#trik_scroll a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});

	});
	</script>
	<style>
	#trik_scroll {
	position:fixed;_position:absolute;bottom:20px; right:12px;
	clip:inherit;
	_bottom:expression(document.documentElement.scrollTop+
	document.documentElement.clientHeight-this.clientHeight);
	_left:expression(document.documentElement.scrollLeft+
	document.documentElement.clientWidth - offsetWidth); -webkit-transition-duration: 0.3s;   -moz-transition-duration: 0.3s;   -o-transition-duration: 0.3s; }
	#trik_scroll:hover {
	position:fixed;_position:absolute; bottom:23px; right:12px;
	clip:inherit;
	_bottom:expression(document.documentElement.scrollTop+
	document.documentElement.clientHeight-this.clientHeight);
	_left:expression(document.documentElement.scrollLeft+
	document.documentElement.clientWidth - offsetWidth);}
	</style>
	<div id="trik_scroll"><a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-buttons-2/512/back_on_top-512.png" border="0" height="40"/></a></div>
	<!-- untuk scroll selesai-->




	
</body>	

	

</html>