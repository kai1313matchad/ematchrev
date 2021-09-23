	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Buat Reminder</h4>
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
                                <!-- <form class="form-horizontal" action="<?php echo base_url(). 'projectreminder/crud/tambah_reminder'; ?>" id="sch_form" method="post"> -->
                                <form class="form-horizontal" id="sch_form" method="post">
                                    <input type="hidden" class="form-control" name="kodedept">
                                    <input type="hidden" name="kar_id" value="<?php echo $this->session->userdata('id_karyawan')?>">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Reminder</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis Reminder</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jenis">
                                                <option value="">Pilih</option>
                                            <?php foreach ($jenis as $d) { 
                                               $id=$d->id;
                                               $jenis=$d->nama_jenis; ?>
                                                <option value="<?php echo $id;?>"><?php echo $jenis;?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="dept">
                                                <option value="">Pilih</option>
                                            <?php foreach ($dept as $e) { 
                                               $id_dept=$e->id_dept;
                                               $dept=$e->nama_dept; ?>
                                                <option value="<?php echo $id_dept;?>"><?php echo $dept;?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Info</label>
                                        <div class="col-sm-8">
                                            <textarea  class="form-control inputtxtarea" rows="5" name="info">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Jatuh Tempo</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" name="tanggal" />
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
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">E-mail</label>
                                        <div class="col-sm-8">
                                            <select multiple="multiple" class="form-control" id="select_kry" name="sch_member[]">
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label">E-mail Atasan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="email"></textarea>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                             <!-- <button type="submit" class="btn btn-primary" onclick="
   var el = document.getElementsByTagName('select')[0];
  getSelectValues(el);">Save</button>
                                             <button type="submit" class="btn btn-default">Cancel</button> -->
                                             <button class="btn btn-primary" type="reset" onclick="resetbtn()">Reset</button>
                                             <button type="button" class="btn btn-success" onclick="save()">Submit</button>
                                        </div>
                                    </div>
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
            //access_check();
            member_gen();
            $('.dtp').datetimepicker({
                  format: 'YYYY-MM-DD'
             });
            $('.dtm').datetimepicker({                
                  format: 'HH:mm'
             });
            kirim_reminder();
        });

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
                    if(data.length != null)
                    {
                        for (var i = 0; i < data.length; i++) 
                        {
                            option = document.createElement('option');
                            option.value = data[i]["id_karyawan"];
                            option.text = data[i]["nama_karyawan"];
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

        function kirim_reminder()
        {
            $.ajax({
            url : '<?php echo base_url('projectreminder/Crud/get_reminder')?>',
            type: "POST",
            data: $('#sch_form').serialize(),
            dataType: "JSON",
            success: function(data)
                {
                   if(data.length != null)
                    {
                        for (var i = 0; i < data.length; i++) 
                        {
                            id = data[i]["id_reminder"];
                            $.ajax({
                            url : "<?php echo base_url('projectreminder/Crud/kirim_email/')?>"+id,
                            type : "POST",
                            data: data
                            })                      
                        }
                    }  
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Tidak Ada Data Reminder');
                }
            });
        }

        function save()
        {
        url = "<?php echo site_url('projectreminder/Crud/tambah_reminder')?>";
        $.ajax({
                  url : url,
                  type: "POST",
                  data: $('#sch_form').serialize(),
                  dataType: "JSON",
                  success: function(data)
                  {
                    if(data.status)
                    {
                      alert('Data Berhasil Disimpan !');
                      resetbtn();
                    } else {
                      alert(data['error_string']);
                    }
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    alert('Error Adding / Update User Data');
                  }
                });
        }
        function resetbtn()
        {
        // $('[name="form_status"]').val('1');
        // $('[name="bbtype_id"]').prop('readonly', false);
        $('#sch_form')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        }
    </script>