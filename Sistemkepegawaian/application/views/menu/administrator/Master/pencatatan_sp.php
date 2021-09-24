<!-- Page Content -->
        <div id="page-wrapper" class="bgisi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pencatatan Surat Peringatan Karyawan</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <!-- <div class="col-xs-2">
                        <button class="btn btn-block btn-info" onclick="exp_sp()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div> -->
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" >
                            <li class="active">
                                <a href="#pindah_jabatan" data-toggle="tab">Pindah Jabatan</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content" >
                                <div class="tab-pane fade in active" id="pindah_jabatan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Surat Peringatan</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-8">
                                            <select id="branch" name="branch" class="selectpicker">
                                                <option value="">- Pilih - </option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor SP</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" id="genbtn" onclick="tambah()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="hidden" name="id_karyawan">
                                            <input class="form-control" type="text" name="nomor_sp" value="" >
                                            <input type="hidden" name="po_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">NIK</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="hidden" name="id_karyawan">
                                            <input class="form-control" type="text" name="nik" value="" readonly>
                                            <input type="hidden" name="po_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
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
                                        <label class="col-sm-3 control-label">Tanggal SP</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_sp" type='text' class="form-control text-center" name="tgl_sp" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Atasan Pemberi SP</label>
                                        <div class="col-sm-8">
                                            <select id="atasan" name="atasan" class="selectpicker">
                                                <option value="">Pilih</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jenis SP</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="jenis_sp" name="jenis_sp">
                                                <option value="">Pilih</option>
                                                <option value="ST">Surat Teguran (ST)</option>
                                                <option value="SP1">Surat Peringatan 1 (SP1)</option>
                                                <option value="SP2">Surat Peringatan 2 (SP2)</option>
                                                <option value="SP3">Surat Peringatan 3 (SP3)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keterangan SP</label>
                                        <div class="col-sm-8">
                                            <textarea id="keterangan" name="keterangan" rows="5" cols="91"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_sp()" class="btn btn-block btn-primary btn-default">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_mutasi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nomor SP
                                                        </th>
                                                        <th class="text-center">
                                                            Branch
                                                        </th>
                                                        <th class="text-center">
                                                            Nama Karyawan
                                                        </th>
                                                        <th class="text-center">
                                                            Tanggal 
                                                        </th>
                                                        <th class="text-center">
                                                            Atasan Pemberi SP
                                                        </th>
                                                        <th class="text-center">
                                                            Jenis SP
                                                        </th>
                                                        <th class="text-center">
                                                            Keterangan
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br>  
                                </div>
                            </div>
                        </form>
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
                                        <th>Kode Dept</th>
                                        <th>Departemen</th>
                                        <th>Perusahaan</th>
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

    <div class="modal fade" id="modal_kry_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive"> 
                            <table id="dtb_kry_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Cabang</th>
                                        <th>Alamat</th>
                                        <th>No KTP</th>
                                        <th>Nomor HP</th>
                                        <th>Alasan Open</th>
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
            id=$('[name="po_id"]').val();


            //update system - Surat Tugas
            branch=$('[name="user_branch"]').val();
            id_karyawan= $('[name="id_karyawan"]').val();
            if ((branch=='3') || (branch=='8')){
                $('[name="tsurat"]').show();
            }else {$('[name="tsurat"]').hide}
            $('.btnSt').css({'display':'none'});


            // barang(id);
            prc = 0; qty = 0; sub = 0;
            $('[name=po_qty]').on('input', function() {
                hitung();
            });
            dropbranch();
            dropatasan();
            surat_peringatan();
            // if (id_karyawan != ""){
            //     keluarga(id_karyawan);
            // }
        });

        function dropbranch()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_branch')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    // document.getElementById('branch').options.length = 0;
                    var select = document.getElementById('branch');
                    var option;
                    option = document.createElement('option');
                    // option.value = "";
                    // option.text = "Pilih";
                    // select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["BRANCH_ID"]
                        option.text = data[i]["BRANCH_NAME"];
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
                    $('#atasan').selectpicker({});
                    $('#atasan').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function edit_kry()
        {
            $('#modal_kry_edit').modal('show');
            $('.modal-title').text('Cari Karyawan');
            table = $('#dtb_kry_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_krybysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="branch"]').val();
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

        function pick_krychk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('select[name=branch]').val(data.id_branch);
                    $('.selectpicker').selectpicker('refresh');
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('#modal_kry_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function srch_dept()
        {
            $('#modal_dept').modal('show');
            $('.modal-title').text('Cari Departemen');
            table = $('#dtb_dept').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_dept')?>",
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
        function pick_dept(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_pick_dept/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="dept_id_sekarang"]').val(data.DEPT_ID);
                    $('[name="dept_sekarang"]').val(data.DEPT_NAME);
                    $('[name="perusahaan_sekarang"]').val(data.DEPT_INFO);
                    $('#modal_dept').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function srch_dept_mutasi()
        {
            $('#modal_dept').modal('show');
            $('.modal-title').text('Cari Departemen');
            table = $('#dtb_dept').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_dept_mutasi')?>",
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
        function pick_dept_mutasi(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_pick_dept/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="dept_id_mutasi"]').val(data.DEPT_ID);
                    $('[name="dept_mutasi"]').val(data.DEPT_NAME);
                    $('[name="mutasi_perusahaan"]').val(data.DEPT_INFO);
                    $('#modal_dept').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function exp_jabatan()
        {
            var id =  $('[name="id_karyawan"]').val();
            if ($('[name="id_karyawan"]').val() != ''){
                window.open ( "<?php echo site_url('administrator/Master/export_jabatan/')?>"+id,'_blank');
            }else{
                alert('Data karyawan belum dipilih !');
            }
        }

        function print_po()
        {
            var ids = $('[name=po_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_po/')?>"+ids,'_blank');
        }

        //update sistem - Cetak Surat Tugas
        function print_surat_tugas()
        {
            var ids = $('[name=po_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_surat_tugas/')?>"+ids,'_blank');
        }
        function tambah()
        {
            var branch = $('[name=branch]').val();
            if (branch !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/gen_sp/') ?>"+branch,
                        type : "GET",
                        dataType : "JSON",
                        success : function(data)
                        {
                            $('[name="nomor_sp"]').val(data.nomor_sp);
                            $('[name="id_sp"]').val(data.id);
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

        function add_sp()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahsp')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                surat_peringatan();                 
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

        function del_mutasi(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_mutasi/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        mutasi();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function mutasi()
        {
            table = $('#dtb_mutasi').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_mutasi')?>",
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

        function surat_peringatan()
        {
            table = $('#dtb_mutasi').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_peringatan')?>",
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

        function del_peringatan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_sp/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        surat_peringatan();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        
    </script>
    <!-- Search -->
    <script>
        
    </script>
    <!-- Pick -->
    <script>
        //update sistem simpan kolom alasan open
        function pick_alasan()
        {
            var alasan=$('[name="note_'+id+'"]').val();
            // var alasan='tes1';
            return alasan;
        }
    </script>
</body>
</html>