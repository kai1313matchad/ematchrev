<!DOCTYPE html>
<html>

<head>
	<title>Laporan Karyawan Ijin</title>
	<link rel="icon" href="<?=base_url()?>/favicon.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript" scr="<?php echo base_url(); ?>/assets/js/jquery-1.11.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>

<style type="text/css">
	.test {
    	background-color: #eee;
    }

    .panel-default > .panel-heading {
	  background-color: white;
	}

</style>

<body class="semua bg">
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
	            <!--<?php print_r($this->session->all_userdata());?>!-->
	            <a href="<?php echo base_url(); ?>index" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> KPIM Online.</a>
	        </div>

	        <div class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">

                    <li><a href="<?php echo base_url(); ?>/laporan/disiplin_entry"" >SDM Disiplin Entry Laporan</a></li>

                    <li><a href="<?php echo base_url(); ?>/laporan/entry" >Laporan Input KPIM</a></li>


                    <li class="active">
	                    <a href="<?php echo base_url(); ?>/kpimmingguan/ijin_sdm" >Laporan Karyawan Ijin </a>
                    </li>                        
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


	<div style="padding-bottom: 60px"></div>
		<center>
		<img src="<?php echo base_url();?>assets/img/kpimlogo.png" alt="KIMP Online" name="KPIM Online" style="width:auto; height:70px; margin-bottom: 10px" >
		</center>
		<!-- <h1 style="padding-top: 20px; color: #0f6296"><center>Pesan</center></h1> -->






		<!-- 
		<?php 
		$startDate = DateTime::createFromFormat("Y/m/d","2017/10/11");
		$endDate = DateTime::createFromFormat("Y/m/d","2017/10/15");

		$periodInterval = new DateInterval( "P1D" ); // 1-day, though can be more sophisticated rule
		$endDate->add( $periodInterval );
		$period = new DatePeriod( $startDate, $periodInterval, $endDate );


		foreach($period as $date){
		   echo $date->format("Y-m-d") , PHP_EOL;
		} ?>
		 -->


		

			


	<div class="container" style="padding-top: 50px">
		<div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab"><b>Data Karyawan Ijin</b></a>
                            </li>
                           
                        </ul>
                </div>

                <form id="form_kpim" action="" method="POST">
                	<br>
		            <div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-2"> 
							<text><h3>Pilih Tanggal :</h3></text>
						</div>

						<div class="col-lg-3 text-center">
							<div class="form-group">
								<div class='input-group date' id='datetimepicker1' style="color: black">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
									<input type='text' class="form-control input-group-addon" name="tglstart" placeholder="Start" required />
								</div>
							</div>
						</div>

						<div class="col-sm-3 text-center">
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
						<div class="col-sm-1"></div>
						<div class="col-sm-2"></div>
						<div class="col-sm-6 text-center" style="padding-bottom: 15px"> 
							<a href="javascript:void(0)" onclick="dt_ijin()" class="btn btn-block btn-primary">
								<span class="glyphicon glyphicon-zoom-in"></span> Tampilkan</button>
						    </a>	
					    </div>
				    </div>
				</form>
	            <div id='div1'>	
	                <div class="panel-body">
	                    <div class="tab-content">
	                        <div class="tab-pane fade in active" id="tab1">
	                        	<div class="col-lg-12 table-responsive">
									<table id="dataTablesmasuk" class="table table-bordered table-hover table-striped" style="text-align: center;" width="100%">
										<thead class="text-center" style="background-color: #6db1ff">
										  <tr>
											<th style="text-align: center;">No</th>
											<th style="text-align: center;">Hari/Tanggal</th>
											<th style="text-align: center;">Karyawan</th>
											<th style="text-align: center;">Status Ijin</th>
											<th style="text-align: center;">Keterangan</th>
											<th style="text-align: center;">Departement</th>
											<!-- <th style="text-align: center;">Action</th> -->
										  </tr>
										</thead>
										<tbody id="tb_content"></tbody>
									</table>
								</div><!-- ini tutup div pesan terkirim -->

	            				<!-- Tombol Print -->
								<div class="col-lg-12" align="Lest">
									<button class="btn btn-primary" style="font-family: 'Exo 2', sans-serif;  " onclick="ayo(); printContent('div1'); window.location.reload();return false;"><span class="glyphicon glyphicon-print"></span> Print Report</button> 
									<text style="color:blue">*Pastikan Search Nama Karyawan Benar!</text>	
								</div>
	                        </div>

	                	</div>
	        		</div>
	            </div>
        	</div>
			<div class="row">
				<div class="container">
					<div class="dialogbox">
					    <div class="body">
					    	<span class="tip tip-up"></span>
					    	<div class="message">
					    		<p class="info">
									<text style="font-family: 'Exo 2', sans-serif, medium">
									<b>Ketentuan Karyawan Ijin :</b><br></text>
									<text style="font-family: 'Exo 2', sans-serif; font-style: italic;">
										1. Ijin Karyawan bisa menggunakan KPIM dengan status saat input <b>Desciption</b> : Ijin, Sakit, Dinas dan <b>Result</b> : input detail ijin.<br>
										2. Bagi karyawan yang masa kerja 1 tahun lebih bisa menggunakan aplikasi HC Online, <b>Perihal Cuti</b> : Tahunan, Nikah, Melahirkan, Duka Cita, <br> Khitan/Babtis, Tidak Terbayar.<br>
										3. Bagi karyawan yang masa kerja 1 tahun lebih atau karyawan tetap dan belum memiliki akses bisa menggajukan akses HC Online ke HRD Holding.<br>
									</text>
								</p>
					      	</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
			
    <script>
		function printContent(el){
		    var restorepage = document.body.innerHTML;
		    var printcontent = document.getElementById(el).innerHTML;
		    document.body.innerHTML = printcontent;
		    window.print();
		    document.body.innerHTML = restorepage;

		}
	</script>


	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/moment.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>

	<script>
		$(function() {
		  $('input[id^=MyDate]').datetimepicker({ format: 'YYYY-MM-DD' });
		});


		

		$(function () {
					$('#datetimepicker1').datetimepicker({
						format: 'YYYY-MM-DD'
					});         
				});
		$(function () {
					$('#datetimepicker2').datetimepicker({
						//format: 'DD/MM/YYYY'
						format: 'YYYY-MM-DD'
					});         
				});
	</script>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

	<script>
	function ayo(){
        $("#dataTablesmasuk td:nth-child(7)").css({'display':'none'});
        //$("#dataTables td:nth-child(8)").css({'display':'none'});
        $("#dataTablesmasuk th:nth-child(7)").css({'display':'none'});
        //$("#dataTables th:nth-child(8)").css({'display':'none'});
    }

	$(document).ready(function() {
		// $('#dataTablesmasuk').DataTable();
		dt_ijin()
	} );

	$(document).ready(function() {
		//$('#dataTableskirim').DataTable();
	} );

	$(document).ready(function() {
		//$('#dataTablesmasukdept').DataTable();
	} );

	function dt_ijin()
        {
        	$("#tb_content").empty();
            $.ajax({
                url : "<?php echo site_url('Kpimmingguan/tampil_ijin_KPIM')?>",
                type: "POST",
                data: $('#form_kpim').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                    	// alert($('[name="tglstart"]').val());
                        var tr = $('<tr>').append(
                        	$('<td>').text(i+1),
                        	$('<td>').text(data[i]["tgl"]),
                        	$('<td>').text(data[i]["nama_karyawan"]),
                        	$('<td>').text(data[i]["nama_goals"]),
                        	$('<td>').text(data[i]["action"]),
                        	$('<td>').text(data[i]["nama_dept"])
                            ).appendTo('#tb_content')                        
                    }
                    dtable();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

		function dtable()
        {
            $('#dataTablesmasuk').DataTable({
                info: false,
                searching: false,
                destroy: true,
                // bLengthChange: false,
                paging: false,
                ordering: false,
                columnDefs:
                [
                    // {className: 'text-center', targets: '_all'},
                    {orderable: false, targets: '_all'}
                ],
                dom: 'Bfrtip',
                buttons: 
                {
                    dom: 
                    {
                        button: 
                        {
                            tag: 'button',
                            className: 'btn btn-sm btn-info'
                        }
                    },
                    buttons: ['excelHtml5','print']
                }
            });
        }

	</script>


</body>
</html>