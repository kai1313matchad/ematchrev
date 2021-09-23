<!DOCTYPE html>
<html>
<head>
	<title>Data Pengumuman Saya</title>
	<link rel="icon" href="<?php echo base_url()?>/favicon.gif" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url(); ?>assets/css/extra.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		.container {
			width: 1000px;
			height: auto;
			margin-top: 40px
		}

		.jarak {
			margin-top: 8px;
		}
	</style>



	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body class="bg semua">

<?php if ($this->session->flashdata('message_name')) { ?>
	<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <?= $this->session->flashdata('message_name') ?>
  	</div>
    
<?php } ?>
	
	<div class="container">
	<div style="float: right;">
		<a class= "btn btn-primary" href="<?php echo base_url(); ?>index" style="font-family: 'Exo 2', sans-serif;"><span class="glyphicon glyphicon-home"></span><h7><i> Home</i></h7></a>
		<a class= "btn btn-primary" href="<?php echo base_url(); ?>Pengumuman" style="font-family: 'Exo 2', sans-serif;"><h7><i>Tambah Pengumuman</i></h7></a>
		<a href="<?php echo base_url();?>login/logout" class="btn btn-danger" style="font-family: 'Exo 2', sans-serif; margin: 0px 25px ">Logout</a>
	</div>
	
		<h2>Pengumuman Dari Saya</h2>
		<table id="dataTables" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>NO.</th>
	                <th>Tanggal Posting</th>
	                <th>Penulis</th>
	                <th>Ditujukan</th>
	                <th>Judul Pengumuman</th>
	                <th>Isi Pengumuman</th>
	                <th>Action</th>
	                
	            </tr>
	        </thead>
			
			<tbody >
						<?php 
						$no = 1;
						if (!isset($table)) {
							echo "tidak ada data";
						}
						else {
							
						foreach($table as $u){ 
							
						?>
							<tr>
								<!--<td style="text-align: center;"><?php echo $u->id_post ?></td>!-->
								<td style="text-align: center;"><?php echo $no++ ?></td>
								<td style="text-align: center;"><?php echo date("d-m-Y", strtotime($u->tgl_post)) ?></td>
								<td style="text-align: center;"><?php echo $u->nama_karyawan ?></td>
								<td style="text-align: center;"><?php echo $u->deptini ?></td>
								<td style="text-align: center;"><?php echo $u->judul_post ?></td>
								<td style="text-align: center;"><?php echo $u->isi_post ?></td>
								<td>
									<button data-toggle="modal" data-target="#myModal<?php echo $u->id_post ?>" type="button" class="btn btn-default btn-sm">
							          <span class="glyphicon glyphicon-edit"></span> 
							          <text style="text-transform: capitalize;"> Edit</text> 


							        </button>
			
		
								<!-- Modal -->
								  <div class="modal fade" id="myModal<?php echo $u->id_post ?>" role="dialog">
								    <div class="modal-dialog modal-lg">
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">Edit Pengumuman</h4>
								        </div>

								        <!-- isi modal -->
								        <div class="modal-body">
								          	<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default">
													    <div class="panel-heading" style="text-align: center;">Form Posting Pengumuman</div>
													    <div class="panel-body">
													    
															  <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Pengumuman/Editpengumumanku/<?php echo $u->id_post ?>">
															    <div class="form-group">
															      <label class="control-label col-sm-2">Judul Pengumuman:</label>
															      <div class="col-sm-10">
															        <input type="text" value="<?php echo $u->judul_post?>" class="form-control" id="judul_pengumuman" placeholder="Judul Pengumuman" name="judul_pengumuman">
															      </div>
															    </div> 





																<div class="col-sm-12"><hr></div>

															    <div class="form-group">
															      <label class="control-label col-sm-2">Ditujukan Kepada:</label>
															      <?php $tujuan_post = explode(',', $u->tujuan_post);?>

															     	<div class="row" >



																	    	<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="15" <?php if(in_array("15", $tujuan_post)) {echo 'CHECKED';}; ?>>Semua Departement </label>
																			</div>
<!-- 

																	    <div class="col-sm-3" style="padding-right: 90px">


																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="1" <?php if(in_array("1", $tujuan_post)) {echo 'CHECKED';}; ?>>IT</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="2" <?php if(in_array("2", $tujuan_post)) {echo 'CHECKED';}; ?>>HC</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="3" <?php if(in_array("3", $tujuan_post)) {echo 'CHECKED';}; ?>>PAT</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="4" <?php if(in_array("4", $tujuan_post)) {echo 'CHECKED';}; ?>>GA</label>
																			</div>
																		</div> <br><br> -->
<!-- 
																		<div class="col-sm-3" style="padding-right: 90px">
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="6" <?php if(in_array("6", $tujuan_post)) {echo 'CHECKED';}; ?>>Finance</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="7" <?php if(in_array("7", $tujuan_post)) {echo 'CHECKED';}; ?>>Logistic</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="8" <?php if(in_array("8", $tujuan_post)) {echo 'CHECKED';}; ?>>Production</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="9" <?php if(in_array("9", $tujuan_post)) {echo 'CHECKED';}; ?>>SITAC</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="10" <?php if(in_array("10", $tujuan_post)) {echo 'CHECKED';}; ?>>Accounting</label>
																			</div>
																		</div>


																		<div class="col-sm-3">
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="5" <?php if(in_array("5", $tujuan_post)) {echo 'CHECKED';}; ?>>Marketing </label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="11" <?php if(in_array("11", $tujuan_post)) {echo 'CHECKED';}; ?>>Secretary</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="12" <?php if(in_array("12", $tujuan_post)) {echo 'CHECKED';}; ?>>Internal Audit</label>
																			</div>
																		</div> 
 -->

				
	
																	<div class="col-sm-12"><hr></div>
														     		<div class="col-sm-2"></div>

														     		<!-- Pengumuman Match -->
																    <div class="col-sm-3" style="padding-right: 90px">
																    	<b>Match Advertising:</b>
																    	<br>

																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="1" <?php if(in_array("1", $tujuan_post)) {echo 'CHECKED';}; ?>>IT</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="2" <?php if(in_array("2", $tujuan_post)) {echo 'CHECKED';}; ?>>HC</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="3" <?php if(in_array("3", $tujuan_post)) {echo 'CHECKED';}; ?>>PAT</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="4" <?php if(in_array("4", $tujuan_post)) {echo 'CHECKED';}; ?>>GA</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="5" <?php if(in_array("5", $tujuan_post)) {echo 'CHECKED';}; ?>>Marketing</label>
																			</div>
																	</div>

																	<div class="col-sm-3" style="padding-right: 90px">
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="6" <?php if(in_array("6", $tujuan_post)) {echo 'CHECKED';}; ?>>Finance</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="7" <?php if(in_array("7", $tujuan_post)) {echo 'CHECKED';}; ?>>Logistik</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="8" <?php if(in_array("8", $tujuan_post)) {echo 'CHECKED';}; ?>>Production</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="9" <?php if(in_array("9", $tujuan_post)) {echo 'CHECKED';}; ?>>SITAC</label>
																			</div>
																	</div>


																	<div class="col-sm-3">
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="a" <?php if(in_array("a", $tujuan_post)) {echo 'CHECKED';}; ?>>Accounting</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="b" <?php if(in_array("b", $tujuan_post)) {echo 'CHECKED';}; ?>>Secretary</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="c" <?php if(in_array("c", $tujuan_post)) {echo 'CHECKED';}; ?>>Internal Audit</label>
																			</div>
																			<div class="checkbox">
																			  <label><input type="checkbox" name="dept[]" value="l" <?php if(in_array("l", $tujuan_post)) {echo 'CHECKED';}; ?>>Vendor</label>
																			</div>
																	</div>

																	<div class="col-sm-12"><hr></div>


																	<div class="col-sm-2"></div>
																	<!-- Pengumuman WPI -->
																    <div class="col-sm-3" style="padding-right: 90px">
																    	<b>Wiperindo :</b>
																    	<br>

																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="w" <?php if(in_array("w", $tujuan_post)) {echo 'CHECKED';}; ?>>IT</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="f" <?php if(in_array("f", $tujuan_post)) {echo 'CHECKED';}; ?>>HC</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="g" <?php if(in_array("g", $tujuan_post)) {echo 'CHECKED';}; ?>>PAT</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="h" <?php if(in_array("h", $tujuan_post)) {echo 'CHECKED';}; ?>>GA</label>
																		</div>
																	</div>

																	<div class="col-sm-3" style="padding-right: 90px">
																		<div class="checkbox">
																	  <label><input type="checkbox" name="dept[]" value="i" <?php if(in_array("i", $tujuan_post)) {echo 'CHECKED';}; ?>>Marketing </label>
																	</div>
																	<div class="checkbox">
																	  <label><input type="checkbox" name="dept[]" value="j" <?php if(in_array("j", $tujuan_post)) {echo 'CHECKED';}; ?>>Finance</label>
																	</div>
																	<div class="checkbox">
																	  <label><input type="checkbox" name="dept[]" value="k" <?php if(in_array("k", $tujuan_post)) {echo 'CHECKED';}; ?>>Logistic</label>
																	</div>
																	<div class="checkbox">
																	  <label><input type="checkbox" name="dept[]" value="d" <?php if(in_array("d", $tujuan_post)) {echo 'CHECKED';}; ?>>Production</label>
																	</div>
																	</div>


																	<div class="col-sm-3">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="m" <?php if(in_array("m", $tujuan_post)) {echo 'CHECKED';}; ?>>SITAC</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="n" <?php if(in_array("n", $tujuan_post)) {echo 'CHECKED';}; ?>>Accounting</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="o" <?php if(in_array("o", $tujuan_post)) {echo 'CHECKED';}; ?>>Secretary</label>
																		</div>
																	</div>

																	<div class="col-sm-12"><hr></div>

																	<div class="col-sm-2"></div>
																	<!-- Pengumuman KCT -->
																    <div class="col-sm-3" style="padding-right: 90px">
																    	<b>KCT :</b>
																    	<br>

																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="p" <?php if(in_array("p", $tujuan_post)) {echo 'CHECKED';}; ?>>IT</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="q" <?php if(in_array("q", $tujuan_post)) {echo 'CHECKED';}; ?>>HC</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="r" <?php if(in_array("r", $tujuan_post)) {echo 'CHECKED';}; ?>>PAT</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="s" <?php if(in_array("s", $tujuan_post)) {echo 'CHECKED';}; ?>>GA</label>
																		</div>
																	</div>

																	<div class="col-sm-3" style="padding-right: 90px">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="t" <?php if(in_array("t", $tujuan_post)) {echo 'CHECKED';}; ?>>Marketing </label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="u" <?php if(in_array("u", $tujuan_post)) {echo 'CHECKED';}; ?>>Finance</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="v" <?php if(in_array("v", $tujuan_post)) {echo 'CHECKED';}; ?>>Logistic</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="v" <?php if(in_array("v", $tujuan_post)) {echo 'CHECKED';}; ?>>Production</label>
																		</div>
																	</div>


																	<div class="col-sm-3">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="x" <?php if(in_array("x", $tujuan_post)) {echo 'CHECKED';}; ?>>SITAC</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="y" <?php if(in_array("y", $tujuan_post)) {echo 'CHECKED';}; ?>>Accounting</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="z" <?php if(in_array("z", $tujuan_post)) {echo 'CHECKED';}; ?>>Secretary</label>
																		</div>
																	</div>

																	<div class="col-sm-12"><hr></div>
																	<div class="col-sm-2"></div>
																	<!-- Pengumuman Wiklan -->
																    <div class="col-sm-3" style="padding-right: 90px">
																    	<b>Wiklan :</b>
																    	<br>

																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="22" <?php if(in_array("22", $tujuan_post)) {echo 'CHECKED';}; ?>>IT</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="17" <?php if(in_array("17", $tujuan_post)) {echo 'CHECKED';}; ?>>HC</label>
																		</div>
																	</div>

																	<div class="col-sm-3" style="padding-right: 90px">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="16" <?php if(in_array("16", $tujuan_post)) {echo 'CHECKED';}; ?>>Marketing </label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="20" <?php if(in_array("20", $tujuan_post)) {echo 'CHECKED';}; ?>>Finance</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="23" <?php if(in_array("23", $tujuan_post)) {echo 'CHECKED';}; ?>>Secretary</label>
																		</div>
																	</div>


																	<div class="col-sm-3">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="19" <?php if(in_array("19", $tujuan_post)) {echo 'CHECKED';}; ?>>SITAC</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="21" <?php if(in_array("21", $tujuan_post)) {echo 'CHECKED';}; ?>>Accounting</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="18" <?php if(in_array("18", $tujuan_post)) {echo 'CHECKED';}; ?>>GA</label>
																		</div>
																	</div>

																	<div class="col-sm-12"><hr></div>

																	<div class="col-sm-2"></div>
																	<!-- Pengumuman RCP -->
																    <div class="col-sm-3" style="padding-right: 90px">
																    	<b>RCP :</b>
																    	<br>

																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="36" <?php if(in_array("36", $tujuan_post)) {echo 'CHECKED';}; ?>>IT</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="32" <?php if(in_array("32", $tujuan_post)) {echo 'CHECKED';}; ?>>HC</label>
																		</div>
																	</div>

																	<div class="col-sm-3" style="padding-right: 90px">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="31" <?php if(in_array("31", $tujuan_post)) {echo 'CHECKED';}; ?>>Marketing </label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="34" <?php if(in_array("34", $tujuan_post)) {echo 'CHECKED';}; ?>>Finance</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="37" <?php if(in_array("37", $tujuan_post)) {echo 'CHECKED';}; ?>>Secretary</label>
																		</div>
																	</div>


																	<div class="col-sm-3">
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="35" <?php if(in_array("35", $tujuan_post)) {echo 'CHECKED';}; ?>>Accounting</label>
																		</div>
																		<div class="checkbox">
																		  <label><input type="checkbox" name="dept[]" value="33" <?php if(in_array("33", $tujuan_post)) {echo 'CHECKED';}; ?>>GA</label>
																		</div>
																	</div>

																	<div class="col-sm-12"><hr></div>												
																	

																	</div>
															    </div>



																<div class="form-group">  
															    	<div class="col-sm-2">
															    		<label class="control-label col-sm-2">Isi Pengumuman:</label>
															    	</div>

															    	<div class="col-sm-10">
															    		<textarea id="isi_pengumuman" name="isi_pengumuman" class="form-control" rows="3"><?php echo $u->isi_post?></textarea>
															    	</div>
															    </div>
												
															   

															    <div class="form-group">        
															      <div class="col-sm-offset-2 col-sm-10">
															      <br>
															      <button type="submit" id="checkBtn" name="input" class="btn btn-primary col-sm-12">Simpan Perubahan <span class="glyphicon glyphicon-save"></span></button>
															        <!-- <button type="submit" class="btn btn-default">Posting</button> -->
															      </div>
															    </div>
															  </form>
													    </div>
													 </div>
												</div>
											</div>
								        </div>
								        <!-- selesai isi modal -->

								        <div class="modal-footer">
								          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        </div>
								      </div>
								    </div>
								  </div>
								  <!-- modal selesai -->

			                    <!-- <?php echo anchor('Pengumuman/hapus/'.$u->id_post,
			                    	'<button type="button" class="btn btn-default btn-sm">
							          <span class="glyphicon glyphicon-trash"></span>
							          	<text style="text-transform: capitalize;"> Hapus</text>  
							        </button>', array('class'=>'hapus', 'onclick'=>"return confirmDialog();")
							    ); ?> -->
			                   
							</td>


							</tr>
						<?php } } ?>
						</tbody>
			
		</table>

	</div>
	<br/>

	<div style="padding-bottom: 30px"></div>


	<!--tinymce source-->
			<script src="<?php echo base_url(); ?>assets/js/tinymce/js/tinymce/tinymce.dev.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/tinymce/js/tinymce/plugins/wordcount/plugin.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
			<script>
			tinymce.init({
				selector: "textarea",
				theme: "modern",
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker toc",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern codesample"
				],
				external_plugins: {
					//"moxiemanager": "/moxiemanager-php/plugin.js"
				},
				content_css: "css/development.css",
				add_unload_trigger: false,

				toolbar: "insertfile undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table codesample",

				image_advtab: true,
				image_caption: true,

				style_formats: [
					{title: 'Bold text', format: 'h1'},
					{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
					{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
					{title: 'Example 1', inline: 'span', classes: 'example1'},
					{title: 'Example 2', inline: 'span', classes: 'example2'},
					{title: 'Table styles'},
					{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
				],

				template_replace_values : {
					username : "Jack Black"
				},

				template_preview_replace_values : {
					username : "Preview user name"
				},

				link_class_list: [
					{title: 'Example 1', value: 'example1'},
					{title: 'Example 2', value: 'example2'}
				],

				image_class_list: [
					{title: 'Example 1', value: 'example1'},
					{title: 'Example 2', value: 'example2'}
				],

				templates: [
					{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
					{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
				],

				setup: function(ed) {
					/*ed.on(
						'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
						'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
						'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
						console.log(e.type, e);
					});*/
				},

				spellchecker_callback: function(method, data, success) {
					if (method == "spellcheck") {
						var words = data.match(this.getWordCharPattern());
						var suggestions = {};

						for (var i = 0; i < words.length; i++) {
							suggestions[words[i]] = ["First", "second"];
						}

						success({words: suggestions, dictionary: true});
					}

					if (method == "addToDictionary") {
						success();
					}
				}
			});

			if (!window.console) {
				window.console = {
					log: function() {
						tinymce.$('<div></div>').text(tinymce.grep(arguments).join(' ')).appendTo(document.body);
					}
				};
			}
			</script>
			<!--tinymce source-->

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>

	<script type="text/javascript">
			function confirmDialog() {
		 return confirm('Apakah anda yakin akan menghapus data?')
		}
	</script>

	<script type="text/javascript">
	$(document).ready(function () {
	    $('#checkBtn').click(function() {
	      checked = $("input[type=checkbox]:checked").length;

	      if(!checked) {
	        alert("Anda harus memilih salah satu!");
	        return false;
	      }

	    });
	});

	</script>

	<script type="text/javascript">
	<!--
	 
	$(document).ready(function () {
	 
	window.setTimeout(function() {
	    $(".alert").fadeTo(1500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 5000);
	 
	});
	// untuk tampilan alert -->
	</script>


	<script type="text/javascript" src="<?php base_url();?>assets/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/moment.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
</body>
</html>