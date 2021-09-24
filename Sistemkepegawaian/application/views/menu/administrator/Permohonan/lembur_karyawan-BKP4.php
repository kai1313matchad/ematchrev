<!-- Page Content -->
        <div id="page-wrapper" class="bgisi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Permohonan Lembur Karyawan</h1>
                    </div>                    
                </div>
                <div class="row">
                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div> -->
                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="lihat_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div> -->
                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="approve_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="open_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Open</span>
                        </a>
                    </div> -->

                    <!-- <div class="col-sm-2" <?php //echo (($this->session->userdata('user_akses') != '0')?'style="display:none"' : '');?>> -->
                    <?php if ($this->session->userdata('user_akses')=="0" OR $this->session->userdata('user_akses')=="1"): ?>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="approve_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Approve</span>
                        </a>
                    </div>
                    <!-- <div class="col-sm-2" <?php echo (($this->session->userdata('user_akses') != '0')?'style="display:none"' : '');?>>
                        <a href="javascript:void(0)" onclick="open_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div> -->
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="cancel_lembur()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-refresh"> Refresh</span>
                        </a>
                    </div>
                    <?php endif ?>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" >
                            <li class="active">
                                <a href="#pindah_jabatan" data-toggle="tab">Lembur</a>
                            </li>
                        </ul>

                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content" >
                                <div class="tab-pane fade in active" id="pindah_jabatan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Lembur Karyawan</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">NIK</label>
                                        <div class="col-sm-7">
                                            <input type="hidden" name="id_lembur_karyawan" value="0">
                                            <input type="hidden" name="dept" value="">
                                            <input type="hidden" name="jabatan" value="">
                                            <input class="form-control" type="hidden" name="id_karyawan" value="<?= $this->session->userdata('kar_id')?>">
                                            <input class="form-control" type="text" name="nik" value="" readonly>
                                            <input type="hidden" name="po_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_dept" value="">
                                            <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_kry" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Atasan</label>
                                        <div class="col-sm-8">
                                            <select id="atasan" name="atasan" class="form-control">
                                                <option value="">Pilih</option>
                                            </select>
                                            <span class="help-block"></span>
                                            <input class="form-control" type="hidden" name="id_atasan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="taggal" type='text' class="form-control text-center" name="tanggal" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Dari Pukul</label>
                                        <div class="col-sm-4">
                                            <div class="input-group timepicker">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-clock-o"></span>
                                                </span>
                                                <input type="text" class="form-control" name="jam_mulai">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sampai Pukul</label>
                                        <div class="col-sm-4">
                                            <div class="input-group timepicker">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-clock-o"></span>
                                                </span>
                                                <input type="text" class="form-control" name="jam_berakhir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keperluan</label>
                                        <div class="col-sm-8">
                                            <!-- <input class="form-control" type="text" name="keperluan"> -->
                                            <textarea id="keperluan" name="keperluan" rows="5" cols="91"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group accatasan">                            
                                        <label class="col-sm-3 control-label">Acc Atasan</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" id="acc_atasan" name="acc_atasan" value="Ya">Ya</label>
                                            <label class="radio-inline"><input type="radio" id="acc_atasan" name="acc_atasan" value="Tidak" checked>Tidak</label>
                                        </div>
                                    </div>
                                    <div class="form-group acchc">                              
                                        <label class="col-sm-3 control-label">Acc HC</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" id="acc_hc" name="acc_hc" value="Ya">Ya</label>
                                            <label class="radio-inline"><input type="radio" id="acc_hc" name="acc_hc" value="Tidak" checked>Tidak</label>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="add_lembur()" class="btn btn-block btn-primary btn-default btnAdd">KIRIM</a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="update_lembur()" class="btn btn-block btn-primary btn-default btnUpd">Simpan</a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="appr_lembur()" class="btn btn-block btn-primary btn-default btnApr">Approve</a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="disappr_lembur()" class="btn btn-block btn-primary btn-default btnApr">Disapprove</a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 table-responsive">
                                <table id="dtb_lembur" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th class="text-center">
                                                Tanggal
                                            </th>
                                            <th class="text-center">
                                                Waktu Mulai
                                            </th>
                                            <th class="text-center">
                                                Waktu Berakhir
                                            </th>
                                            <th class="text-center">
                                                Keperluan
                                            </th>
                                            <th class="text-center">
                                                Acc Atasan
                                            </th>
                                            <th class="text-center">
                                                Acc HC
                                            </th>
                                            <th class="text-center">
                                                Actions
                                            </th>
                                        </tr>                            
                                    </thead>                        
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- Modal Search -->
    <!-- Modal Departemen Search -->
    <div class="modal fade" id="modal_dept" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_dept" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Info</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_supp" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_supp" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>No.Tlp</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_barang" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_brg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Ukuran</th>
                                        <th>Info</th>
                                        <th>Harga</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_appr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_appr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Approval</th>
                                        <th>PO</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Lokasi</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_curr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_curr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Rate</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_loc" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_loc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Info</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_po_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive"> 
                            <table id="dtb_po_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Cabang</th>
                                        <th>Alamat</th>
                                        <th>No KTP</th>
                                        <th>Nomor HP</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_srch_lembur" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive"> 
                            <table id="dtb_cari_lembur" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nama Atasan</th>
                                        <th>Tanggal</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Berakhir</th>
                                        <th>Acc Atasan</th>
                                        <th>Acc Lembur</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        var id; var suppid; var prc; var qty; var sub;
        var defaults = {
            calendarWeeks: true,
            showClear: true,
            showClose: true,
            allowInputToggle: true,
            useCurrent: false,
            ignoreReadonly: true,
            // minDate: new Date(),
            toolbarPlacement: 'top',
            locale: 'nl',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-angle-up',
                down: 'fa fa-angle-down',
                previous: 'fa fa-angle-left',
                next: 'fa fa-angle-right',
                today: 'fa fa-dot-circle-o',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        };

        $(function() {
                        // var optionsDatetime = $.extend({}, defaults, {format:'DD-MM-YYYY HH:mm'});
                        // var optionsDate = $.extend({}, defaults, {format:'DD-MM-YYYY'});
                        var optionsTime = $.extend({}, defaults, {format:'HH:mm'});
                        // $('.datepicker').datetimepicker(optionsDate);
                        $('.timepicker').datetimepicker(optionsTime);
                        // $('.datetimepicker').datetimepicker(optionsDatetime);
        });

        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            $('#dtp2').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            $('#dts1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            branch=$('[name="user_branch"]').val();
            id_karyawan= $('[name="id_karyawan"]').val();
            $('.btnSt').css({'display':'none'});    
            dropatasan();        
            pick_kryedit(id_karyawan);
            lembur(id_karyawan);
            $('.accatasan').css({'display':'none'});
            $('.acchc').css({'display':'none'});
            $('.btnUpd').css({'display':'none'});
            $('.btnApr').css({'display':'none'});
        });

        function dropatasan()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_karyawan')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('atasan');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["id_karyawan"]
                        option.text = data[i]["nama_karyawan"];
                        select.add(option);
                    }
                    $('#branch').selectpicker({});
                    $('#branch').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        
        function edit_lembur()
        {
            $('#modal_srch_lembur').modal('show');
            $('.modal-title').text('Cari Lembur');
            table = $('#dtb_cari_lembur').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_lembur')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '0';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function cancel_lembur(){
            location.reload();
        }

        function lihat_lembur()
        {
            $('#modal_srch_lembur').modal('show');
            $('.modal-title').text('Cari Lembur');
            table = $('#dtb_cari_lembur').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_lembur')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '2';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function approve_lembur()
        {
            $('#modal_srch_lembur').modal('show');
            $('.modal-title').text('Cari Lembur');
            table = $('#dtb_cari_lembur').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_lembur')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '3';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function open_lembur()
        {
            $('#modal_srch_lembur').modal('show');
            $('.modal-title').text('Cari Lembur');
            table = $('#dtb_cari_lembur').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_lembur')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '1';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function pick_lemburedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_lemburgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id_lembur_karyawan"]').val(id);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="user_dept"]').val(data.dept);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="tgl_mulai"]').val(data.tgl_mulai);
                    $('[name="tgl_berakhir"]').val(data.tgl_berakhir);
                    $('[name="jam_mulai"]').val(data.jam_mulai);
                    $('[name="jam_berakhir"]').val(data.jam_berakhir);
                    $('[name="atasan"]').val(data.id_atasan);
                    $('[name="keperluan"]').val(data.keperluan);
                    if(data.kendaraan_dinas != null){
                         $('[name="kendaraan_dinas"][value="'+data.kendaraan_dinas+'"]').prop('checked',true);
                    }
                    $('.btnAdd').css({'display':'none'});
                    $('.btnUpd').css({'display':'block'});
                    $('.btnApr').css({'display':'none'});
                    $('#modal_srch_lembur').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_lemburchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_lemburgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id_lembur_karyawan"]').val(id);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="tanggal"]').val(data.tanggal);
                    $('[name="jam_mulai"]').val(data.jam_mulai);
                    $('[name="jam_berakhir"]').val(data.jam_berakhir);
                    $('[name="atasan"]').val(data.id_atasan);
                    $('[name="keperluan"]').val(data.keperluan);
                    if(data.kendaraan_dinas != null){
                         $('[name="kendaraan_dinas"][value="'+data.kendaraan_dinas+'"]').prop('checked',true);
                    }
                    $('.btnAdd').css({'display':'none'});
                    $('.btnUpd').css({'display':'none'});
                    $('.btnApr').css({'display':'none'});
                    $('#modal_srch_lembur').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_lemburapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_lemburgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var arr = $('[name="user_dept"]').val();
                    $('[name="branch"]').val(data.id_branch);
                    $('[name="dept"]').val(data.dept);
                    $('[name="jabatan"]').val(data.jabatannya);

                    $('[name="id_lembur_karyawan"]').val(id);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="tanggal"]').val(data.tanggal);
                    $('[name="jam_mulai"]').val(data.jam_mulai);
                    $('[name="jam_berakhir"]').val(data.jam_berakhir);
                    $('[name="atasan"]').val(data.id_atasan);
                    $('[name="keperluan"]').val(data.keperluan);
                    if(data.acc_atasan != null){
                        $('[name="acc_atasan"][value="'+data.acc_atasan+'"]').prop('checked',true);
                    }
                    if(data.acc_hc != null){
                        $('[name="acc_hc"][value="'+data.acc_hc+'"]').prop('checked',true);
                    }
                    $('.accatasan').css({'display':'block'});
                    if (arr.includes("2") || arr.includes("f") || arr.includes("q") || arr.includes("17") || arr.includes("32")){
                        $('.acchc').css({'display':'block'});
                    }
                    $('.btnAdd').css({'display':'none'});
                    $('.btnUpd').css({'display':'none'});
                    $('.btnApr').css({'display':'block'});
                    $('#modal_srch_lembur').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_lemburopen(id)
        {
            lembur_open(id);
            $('#modal_srch_lembur').modal('hide');
        }

        function tambah()
        
        {
            var branch = $('[name=branch]').val();
            if (branch !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/gen_nik/') ?>"+branch,
                        type : "GET",
                        dataType : "JSON",
                        success : function(data)
                        {
                            $('[name="nik"]').val(data.nik);
                            $('[name="id_karyawan"]').val(data.id);
                            $('#genbtn').attr('disabled',true);
                        },
                        error : function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    })
            }else{alert('Branch harus dipilih !');}
        }
        function savekaryawan()
        {
            // alert($('[name="warga_negara"]').val());
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_simpanmutasi')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Disimpan');                       
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function add_keluarga()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahkeluarga')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                keluarga(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_keluarga(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_keluarga/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        keluarga(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function keluarga(id)
        {
            table = $('#dtb_keluarga').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_keluarga/')?>"+id,
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function add_pendidikan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahpendidikan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                pendidikan(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_pendidikan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_pendidikan/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        pendidikan(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function pendidikan(id)
        {
            table = $('#dtb_pendidikan').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_pendidikan/')?>"+id,
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function add_pekerjaan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahpekerjaan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                pekerjaan(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_pekerjaan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_pekerjaan/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        pekerjaan(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function pekerjaan(id)
        {
            table = $('#dtb_pekerjaan').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_pekerjaan/')?>"+id,
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function add_jabatan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahjabatan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                jabatan(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_jabatan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_jabatan/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        jabatan(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function jabatan(id)
        {
            table = $('#dtb_jabatan').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_jabatan/')?>"+id,
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function getRadioValue(theRadioGroup)
        {
            var elements = document.getElementsByName(theRadioGroup);
            for (var i = 0, l = elements.length; i < l; i++)
            {
                if (elements[i].checked)
                {
                    return elements[i].value;
                }
            }
        }

        function add_lembur()
        {
            if (($('[name="id_karyawan"]').val() !='') && ($('[name="atasan"]').val() !='') && ($('[name="jam_mulai"]').val() !='') && ($('[name="jam_berakhir"]').val() !='') && ($('[name="keperluan"]').val() !='')){   
                $.ajax({
                    url : "<?php echo site_url('transaction/Permohonan/ajax_tambahlembur')?>",
                    type: "POST",
                    data: $('#form_po').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Data Berhasil Ditambahkan'); 
                            var id = $('[name="id_karyawan"]').val(); 
                            var id_atasan = $('[name="atasan"]').val(); 
                            kirim_email_atasan(id_atasan);      
                            lembur(id);                
                        }                   
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }else{
                if ($('[name="id_karyawan"]').val() =='') {
                    alert("Id Karyawan kosong atau tidak ditemukan !");
                }
                
                if ($('[name="atasan"]').val() =='') {
                    alert("Nama atasan harus diisi !");
                }

                if ($('[name="jam_mulai"]').val() =='') {
                    alert("Dari pukul ?");
                }

                if ($('[name="jam_berakhir"]').val() =='') {
                    alert("Sampai pukul ?");
                }

                if ($('[name="keperluan"]').val() =='') {
                    alert("Keperluan harus diisi !");
                }
            }
        }

        function update_lembur()
        {
            var id = $('[name="id_lembur_karyawan"]').val();
            if (($('[name="id_karyawan"]').val() !='') && ($('[name="atasan"]').val() !='')){
                $.ajax({
                    url : "<?php echo site_url('transaction/Permohonan/ajax_updatelembur/')?>"+id,
                    type: "POST",
                    data: $('#form_po').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Data Berhasil Disimpan'); 
                            var id = $('[name="id_karyawan"]').val();      
                            lembur(id);                
                        }                   
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }else{
                if ($('[name="id_karyawan"]').val() =='') {
                    alert("Id Karyawan kosong atau tidak ditemukan !");
                }
                
                if ($('[name="atasan"]').val() =='') {
                    alert("Nama atasan harus diisi !");
                }
            }
        }

        function appr_lembur()
        {
            var id = $('[name="id_lembur_karyawan"]').val();
            $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_approvelembur/')?>"+id,
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                var id = $('[name="id_karyawan"]').val(); 
                                var id_atasan = $('[name="atasan"]').val();
                                var acc_atasan = $('[name="acc_atasan"]').val();
                                var acc_hc = $('[name="acc_hc"]').val();
                                var radios_atasan = document.getElementsByName('acc_atasan');
                                // for (var i = 0, length = radios_atasan.length; i < length; i++) {
                                //     if (radios_atasan[i].checked) {            
                                //         acc_atasan = radios_atasan[i].value;
                                //         break;
                                //     }
                                // }
                                // var radios_hc = document.getElementsByName('acc_hc');
                                // for (var i = 0, length = radios_hc.length; i < length; i++) {
                                //     if (radios_hc[i].checked) {            
                                //         acc_hc = radios_hc[i].value;
                                //         break;
                                //     }
                                // }
                                if ((acc_atasan == 'Ya') && (acc_hc == 'Tidak'))  {
                                    alert('Data Berhasil Disimpan, harap atasan konfirmasi ke HRD untuk proses approve !!'); 
                                    kirim_email_hc(id_atasan);
                                }   
                                if ((acc_atasan == 'Ya') && (acc_hc == 'Ya'))  {
                                    kirim_email_bod(id_atasan);
                                }     
                                lembur(id);                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
        }

        function disappr_lembur()
        {
            var id = $('[name="id_cuti_karyawan"]').val();
            $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_disapprovelembur/')?>"+id,
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Sudah Disapprove');
                                cuti(id);                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
        }

        function lembur_open(id)
        {
            $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_openlembur/')?>"+id,
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Status Open');                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
        }

        function lembur(id)
        {
            table = $('#dtb_lembur').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('transaction/Permohonan/ajax_lembur/')?>"+id,
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function del_lembur(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('transaction/Permohonan/ajax_del_lembur/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        id = $('[name="id_karyawan"]').val();
                        alert('Data Berhasil Dihapus');
                        lembur(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function kirim_email_atasan(id)
        {
            $.ajax({
                url : "<?php echo site_url('transaction/Permohonan/ajax_kirim_email_lembur_atasan/')?>"+id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Permohonan Lembur Berhasil Terkirim ke Atasan');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error cek data');
                }
            });  
        }

        function kirim_email_hc(id)
        {
            $.ajax({
                url : "<?php echo site_url('transaction/Permohonan/ajax_kirim_email_lembur_hc/')?>"+id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Permohonan Lembur Berhasil Terkirim ke HC');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error cek data');
                }
            });  
        }

        function kirim_email_bod(id)
        {
            $.ajax({
                url : "<?php echo site_url('transaction/Permohonan/ajax_kirim_email_lembur_bod/')?>"+id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Permohonan Lembur Berhasil Terkirim ke BOD');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error cek data');
                }
            });  
        }

        function pick_kryedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="branch"]').val(data.id_branch);
                    $('[name="dept"]').val(data.dept);
                    $('[name="jabatan"]').val(data.jabatannya);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="user_dept"]').val(data.dept);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('#modal_po_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
</body>
</html>