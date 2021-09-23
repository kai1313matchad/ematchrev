	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Edit Reminder Jatuh Tempo</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Reminder Jatuh Tempo</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12 col-xs-12">
                                <form class="form-horizontal" action="<?php echo base_url(). 'projectreminder/crud/ubah_reminder/<?php echo $d->idr; ?>'; ?>" id="sch_form" method="post">
                                     <?php 
                                           $i=1;
                                           foreach($reminder as $d){ 
                                      ?>
                                    <!-- <input type="hidden" class="form-control" name="kodedept"> -->
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $d->idr;?>">
                                    <input type="hidden" class="form-control" name="email_atasan" value="<?php echo $d->email_atasan;?>">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Reminder</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $d->nama_reminder?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Reminder</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jenis">
                                                <!-- <option value="<?php echo $d->jenis_reminder?>"><?php echo $d->nama_jenis?></option> -->
                                            <?php foreach ($jenis as $e) { ?>
                                                <option value="<?php echo $e->id;?>" <?php if($e->id == $d->jenis_reminder){echo "selected";}; ?>>
                                                    <?php echo $e->nama_jenis;?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="dept">
                                                <!-- <option value="<?php echo $d->dept?>"><?php echo $d->deptini ?></option> -->
                                            <?php foreach ($dept as $e) { ?>
                                                <option value="<?php echo $e->id_dept;?>" <?php if($e->id_dept == $d->dept) {echo "selected";};?>><?php echo $e->nama_dept;?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-8">
                                            <textarea  class="form-control inputtxtarea" rows="5" name="info"><?php echo $d->info_reminder;?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Jatuh Tempo</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" name="tanggal" value="<?php echo $d->tanggal_batas;?>"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Reminder 1</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" name="tanggal_reminder" required/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Reminder 2</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" name="tanggal_reminder2" required/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Reminder 3</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" name="tanggal_reminder3" required/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group"> -->
                                        <!-- <label class="col-sm-3 control-label">E-mail</label> -->
                                        <!-- <div class="col-sm-8"> -->
                                            <!-- <input type="text" class="form-control" name="email" value="<?php echo $d->email_atasan;?>"></input> -->
                                        <!-- </div> -->
                                    <!-- </div> -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">E-mail</label>
                                        <div class="col-sm-8">
                                            <select multiple="multiple" class="form-control" id="select_kry" name="sch_member[]">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                             <button type="submit" class="btn btn-primary" onclick="
   var el = document.getElementsByTagName('select')[0];
  getSelectValues(el);">Save</button>
                                             <button type="submit" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>                            
                        </div>
                    </div>                    
                </div>
            </div>
		</div>
	</div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-am-12">
                    © 2017 E-Match Ad . All Rights Reserved By Match Advertising
                </div>
            </div>
        </div>
    </footer>
    <!-- Jquery -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/projectreminder/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/projectreminder/js/bootstrap.js')?>"></script>
    <!-- DATATABLES -->
    <script src="<?php echo base_url('assets/projectreminder/js/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/js/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/js/datatables/dataTables.responsive.js')?>"></script>
    <!-- DATETIME -->
    <script src="<?php echo base_url('assets/projectreminder/js/dateTime/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/projectreminder/js/dateTime/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- EXTRA JS -->
    <script src="<?php echo base_url('assets/projectreminder/js/extra.js')?>"></script>
    <script>
        $(document).ready(function() {
            member_gen();
            get_tanggal_reminder($('[name="id"]').val());
            $('.dtp').datetimepicker({
                  format: 'YYYY-MM-DD'
             });
            $('.dtm').datetimepicker({                
                  format: 'HH:mm'
             });
        });

        function get_tanggal_reminder(id)
        {
            $.ajax({
            url : '<?php echo base_url('projectreminder/Crud/get_tanggal_reminder/')?>'+id,
            type: "POST",
            data: $('#sch_form').serialize(),
            dataType: "JSON",
            success: function(data)
                { 
                    if(data.length != null)
                    {
                        for (var i = 0; i < data.length; i++) 
                        {
                            if (i==0)
                            {
                                tanggal1 = data[i]['tgl_reminder'];
                            }
                            if (i==1)
                            {
                                tanggal2 = data[i]['tgl_reminder'];
                            }
                            if (i==2)
                            {
                                tanggal3 = data[i]['tgl_reminder'];
                            }
                        }
                        $('[name="tanggal_reminder"]').val(tanggal1);
                        $('[name="tanggal_reminder2"]').val(tanggal2);
                        $('[name="tanggal_reminder3"]').val(tanggal3);
                    }
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Tidak Ada Data Tanggal Reminder');
                }
            });   
        }

        function member_gen()
        {
            $('#select_kry').empty();
            //$('#cbox').parent().removeClass('has-error');
            //alert('halo');
            $.ajax({
            url : '<?php echo base_url('projectreminder/Crud/drop_krybydept')?>',
            type: "POST",
            data: $('#sch_form').serialize(),
            dataType: "JSON",
            success: function(data)
                {                   
                    var select = document.getElementById('select_kry');
                    var option;          
                    email = $('[name="email_atasan"]').val();          
                    if(data.length != null)
                    {
                        for (var i = 0; i < data.length; i++) 
                        {
                            option = document.createElement('option');
                            option.value = data[i]["id_karyawan"];
                            option.text = data[i]["nama_karyawan"];
                            if (email.match(data[i]["email"]) && (data[i]["email"] != ""))
                            {    
                               option.selected = 'Selected';
                            }
                            select.add(option);                            
                        }
                        ms_pick('select_kry');
                    }                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Tidak Ada Data Yang Dipilih');
                    $('#select_kry').empty();
                }
            });
        }
    </script>