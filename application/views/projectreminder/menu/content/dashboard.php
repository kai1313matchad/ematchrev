	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Schedule Meeting</h4>
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
                </div>
            </div>
			<!-- <div class="col-sm-12 col-xs-12 table-responsive">
				<table id="dash_table" class="table table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="text-center">
								No
							</th>
							<th class="text-center">
								Tanggal
							</th>
							<th class="text-center">
								Departemen
							</th>
							<th class="text-center">
								Agenda
							</th>
							<th class="text-center">
								Status
							</th>
							<th class="text-center">
								Detail
							</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div> -->
			<div class="row">
				<div id="calendar" class="col-sm-8 col-sm-offset-2">
					
				</div>
			</div>
		</div>
	</div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    © 2017 E-Match Ad . All Rights Reserved By Match Advertising
                </div>
            </div>
        </div>
    </footer>

    <!-- MODAL -->
    <div class="modal fade" id="calendarModal" role="dialog">
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
                                <label class="col-xs-3 control-label">Nama Project</label>
                                <div class="col-xs-9">
                                    <span name="nama"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Jenis Reminder</label>
                                <div class="col-xs-9">
                                    <span name="jenis"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Info Reminder</label>
                                <div class="col-xs-9">
                                    <span name="info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Tanggal Batas</label>
                                <div class="col-xs-9">
                                    <span name="tanggal"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Departemen</label>
                                <div class="col-xs-9">
                                    <span name="dept"></span>
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
    </div>

    <!-- Jquery -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/projectreminder/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/projectreminder/js/bootstrap.js')?>"></script>
    <!-- DATATABLES -->
    <script src="<?php echo base_url('assets/projectreminder/js/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/js/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/js/datatables/dataTables.responsive.js')?>"></script>
    <!-- FULLCALENDAR -->
    <script src="<?php echo base_url('assets/projectreminder/fullcalendar/lib/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/fullcalendar/fullcalendar.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/fullcalendar/locale-all.js')?>"></script>
    <!-- EXTRA JS -->
    <script src="<?php echo base_url('assets/projectreminder/js/extra.js')?>"></script>
    <script>
    	$(document).ready(function() {      		
    		$('#calendar').fullCalendar({    			
    			header: 
    			{
    				left: 'today,month,listMonth',
    				center: 'title',
    				right: 'prev,next'
    			},
    			views: 
    			{
    				// listWeek: { buttonText: 'Minggu'}
    			},
    			locale: 'id',
    			navLinks: true,
    			eventLimit: true,
    			// events:
    			// [    				
    			// 	{
    			// 		title: 'Meeting Marketing AAaaaaa',
    			// 		// url: 'http://www.google.com',
    			// 		start: '2017-10-23T10:30:00'
    			// 		// end: '2017-10-23T12:30:00'
    			// 	},
    			// 	{
    			// 		title: 'Meeting Marketing AAaaaaa',
    			// 		// url: 'http://www.google.com',
    			// 		start: '2017-10-23T10:30:00'
    			// 		// end: '2017-10-23T12:30:00'
    			// 	}
    			// ]
    			eventSources: 
    			[
    				{
    					events: function(start, end, timezone, callback)
    					{
    						$.ajax({
    							url: '<?php echo site_url('projectreminder/Dashboard/resources')?>',
	    						dataType: 'JSON',
	    						data: 
	    						{
	    							start: start.unix(),
	    							end: end.unix()
	    						},
	    						success: function(msg)
	    						{
	    							var events = msg.events;
	    							callback(events);
	    						}
    						});
    					}	    				
	    			}
    			],
                eventClick:  function(event, jsEvent, view) {
                    $('.modal-title').text('Jadwal Project');
                    $('#modalBody').html(event.title);
                    $('[name="id"]').val(event.id);
                    $('[name="nama"]').text(event.title);
                    $('[name="dept"]').text(event.dept);
                    $('[name="jenis"]').text(event.jenis);
                    $('[name="info"]').text(event.info);
                    $('[name="tanggal"]').text(event.tanggal);
                    // $('#eventUrl').attr('href',event.url);
                    $('#calendarModal').modal();
                },
    		});
    	});
    </script>
