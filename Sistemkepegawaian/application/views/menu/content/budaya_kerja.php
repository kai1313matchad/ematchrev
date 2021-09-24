	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Budaya Kerja Perusahaan</h4>
                </div>
            </div>
            <div class="row">             
                <?php
                    if($this->session->flashdata('success'))
                    {
                        echo $this->session->flashdata('success');
                    }                    
                ?>
            </div>
			<div class="row">
				<div id="calendar" class="col-sm-8 col-sm-offset-2">
                    <h3><b>1. Setia dan setia kepada Tuhan </b></h3>
                    <h4><p align="justify">"Saya percaya kepada Tuhan yang menciptakan, memelihara, mengingat kemampuan dan kesempurnaan, yang diimplementasikan dan diperhitungkan untuk kemuliaan."</p></h4>
                    <h3><b>2. Berpikir positif </b></h3>
                    <h4><p align="justify">"Saya selalu harus hidup dengan pandangan, pikiran dan sikap positif dan keberanian sehingga bisa mengembangkan arah yang lebih baik."
                    </p></h4>
                    <h3><b>3. Berani dan Kuat </b></h3>
                    <h4><p align="justify">"Saya rindu tantangan kerja atau tantangan hidup sebagai vitamin dan suplemen untuk membuat saya lebih dewasa, lebih matang dan lebih baik dalam mengatasi semua masalah yang muncul, sehingga bisa menghadapi dan menyelesaikan semua situasi dengan hasil positif."</p></h4>
                    <h3><b>4. Kejujuran, Keyakinan, Integritas </b></h3>
                    <h4><p align="justify">"Saya menjunjung tinggi integritas dan kepercayaan diri untuk memberikan kepedulian dan pengabdian dengan sepenuh hati dalam hasil yang terbaik. Prioritaskan dan jadikan kejujuran sebagai dasar pemikiran, berperilaku dan bertindak."</p></h4>
                    <h3><b>5. Komunikasi </b></h3>
                    <h4><p align="justify">"Saya berkomunikasi dengan baik, mudah dimengerti dan dapat menjelaskan apa yang dikomunikasikan dengan rekan kerja, pelanggan, pemasok, pemerintah dan masyarakat. Menghindari komunikasi yang tidak bertanggung jawab dan sifat negatif seperti provokasi, gosip dan percakapan di sisi lain."</p></h4>
                    <h3><b>6. Bertanggung jawab, Disiplin, dan Rasa Milik </b></h3>
                    <h4><p align="justify">"Saya bertanggung jawab dan disiplin dalam setiap tindakan yang saya lakukan, dan kepemilikan semua yang ada."</p></h4>
                    <h3><b>7. Kerja tim </b></h3>
                    <h4><p align="justify">"Saya bekerja sebagai tim yang fokus pada tercapainya hasil tercapainya. Saya khawatir dengan kesulitan dan kebutuhan tim sesama dan tidak acuh, akan memberikan panduan dan bantuan kepada tim yang perlu mencapai tujuan perusahaan."</p></h4>
                    <h3><b>8. Kreatif dan Inovasi </b></h3>
                    <h4><p align="justify">"Saya selalu meningkatkan pengetahuan, keterampilan, kreativitas dan inovasi untuk tumbuh sesuai dengan pertumbuhan perusahaan untuk meningkatkan daya saing perusahaan."</p></h4>
				</div>
			</div>
		</div>
	</div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    &copy; Holding Center | @2019
                </div>
            </div>
        </div>
    </footer>
    <!-- MODAL -->
    <!-- <div class="modal fade" id="calendarModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Tema</label>
                                <div class="col-xs-9">
                                    <span name="sch_title"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Departemen</label>
                                <div class="col-xs-9">
                                    <span name="sch_dept"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Peserta</label>
                                <div class="col-xs-9">
                                    <span name="sch_member"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Tempat</label>
                                <div class="col-xs-9">
                                    <span name="sch_loc"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Tanggal</label>
                                <div class="col-xs-9">
                                    <span name="sch_date"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Jam</label>
                                <div class="col-xs-9">
                                    <span name="sch_time"></span>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Jquery -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <!-- DATATABLES -->
    <script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/dataTables.responsive.js')?>"></script>
    <!-- FULLCALENDAR -->
    <script src="<?php echo base_url('assets/fullcalendar/lib/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/fullcalendar/fullcalendar.js')?>"></script>
    <script src="<?php echo base_url('assets/fullcalendar/locale-all.js')?>"></script>
    <!-- EXTRA JS -->
    <script src="<?php echo base_url('assets/js/extra.js')?>"></script>
    <script>
    	$(document).ready(function() {
            // access_check();
    		// $('#calendar').fullCalendar({    			
    		// 	header: 
    		// 	{
    		// 		left: 'today,month,listMonth',
    		// 		center: 'title',
    		// 		right: 'prev,next'
    		// 	},
    		// 	views: 
    		// 	{
    		// 		// listWeek: { buttonText: 'Minggu'}
    		// 	},
    		// 	locale: 'id',
    		// 	navLinks: true,
    		// 	eventLimit: true,
    		// 	// events:
    		// 	// [    				
    		// 	// 	{
    		// 	// 		title: 'Meeting Marketing AAaaaaa',
    		// 	// 		// url: 'http://www.google.com',
    		// 	// 		start: '2017-10-23T10:30:00'
    		// 	// 		// end: '2017-10-23T12:30:00'
    		// 	// 	},
    		// 	// 	{
    		// 	// 		title: 'Meeting Marketing AAaaaaa',
    		// 	// 		// url: 'http://www.google.com',
    		// 	// 		start: '2017-10-23T10:30:00'
    		// 	// 		// end: '2017-10-23T12:30:00'
    		// 	// 	}
    		// 	// ]
    		// 	eventSources: 
    		// 	[
    		// 		{
    		// 			events: function(start, end, timezone, callback)
    		// 			{
    		// 				$.ajax({
    		// 					url: '<?php echo site_url('Dashboard/resources')?>',
	    	// 					dataType: 'JSON',
	    	// 					data: 
	    	// 					{
	    	// 						start: start.unix(),
	    	// 						end: end.unix()
	    	// 					},
	    	// 					success: function(msg)
	    	// 					{
	    	// 						var events = msg.events;
	    	// 						callback(events);
	    	// 					}
    		// 				});
    		// 			}	    				
	    	// 		}
    		// 	],
      //           eventClick:  function(event, jsEvent, view) {
      //               $('.modal-title').text('Jadwal Meeting');
      //               $('#modalBody').html(event.description);
      //               $('[name="sch_id"]').val(event.id);
      //               $('[name="sch_title"]').text(event.title);
      //               $('[name="sch_dept"]').text(event.dept);
      //               $('[name="sch_member"]').text(event.anggota);
      //               $('[name="sch_loc"]').text(event.lokasi);
      //               $('[name="sch_date"]').text(event.tanggal);
      //               $('[name="sch_time"]').text(event.jam);
      //               // $('#eventUrl').attr('href',event.url);
      //               $('#calendarModal').modal();
      //           },
    		// });
    	});
    </script>
