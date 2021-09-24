<!-- Page Content -->
        <div id="page-wrapper" class="bgisi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Permohonan Cuti Karyawan</h1>
                    </div>                    
                </div>
                <div class="row">
                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div> -->


                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="lihat_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div> -->


                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="approve_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="open_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Open</span>
                        </a>
                    </div> -->

                    <!-- <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div> -->
                    <?php if ($this->session->userdata('user_akses')=="0" OR $this->session->userdata('user_akses')=="1"): ?>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="approve_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Approve</span>
                        </a>
                    </div>
                    <!-- <div class="col-sm-2" <?php //echo (($this->session->userdata('user_akses') != '0')?'style="display:none"' : '');?>>
                        <a href="javascript:void(0)" onclick="open_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div> -->
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="cancel_cuti()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-refresh"> Refresh</span>
                        </a>
                    </div>
                    <?php endif ?>
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" >
                            <li class="active">
                                <a href="#pindah_jabatan" data-toggle="tab">Cuti</a>
                            </li>
                        </ul>

                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content" >
                                <div class="tab-pane fade in active" id="pindah_jabatan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Cuti Karyawan</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">NIK</label>
                                        <div class="col-sm-7">
                                            <input type="hidden" name="id_cuti_karyawan" value="0">
                                            <input type="hidden" name="dept" value="">
                                            <input type="hidden" name="jabatan" value="">
                                            <input type="hidden" name="quota_cuti_karyawan" value="0">
                                            <input type="hidden" name="total_cuti" value="0">
                                            <input type="hidden" name="jumlah_cuti_sebelum" value="0">
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
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="nama_kry" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Atasan</label>
                                        <div class="col-sm-7">
                                            <select id="atasan" name="atasan" class="form-control">
                                                <option value="">Pilih</option>
                                            </select>
                                            <span class="help-block"></span>
                                            <input class="form-control" type="hidden" name="id_atasan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Mulai</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_mulai" type='text' class="form-control text-center" name="tgl_mulai" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Berakhir</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp2'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_berakhir" type='text' class="form-control text-center" name="tgl_berakhir" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah cuti diambil</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="number" name="jumlah_cuti">
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Jenis Cuti</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" id="jenis_cuti" name="jenis_cuti" value="Cuti Tahunan" checked>Cuti Tahunan</label>
                                            <label class="radio-inline"><input type="radio" id="jenis_cuti" name="jenis_cuti" value="Cuti Nikah">Cuti Nikah</label>
                                            <label class="radio-inline"><input type="radio" id="jenis_cuti" name="jenis_cuti" value="Cuti Melahirkan">Cuti Melahirkan</label>
                                            <label class="radio-inline"><input type="radio" id="jenis_cuti" name="jenis_cuti" value="Cuti Duka Cita">Cuti Duka Cita</label>
                                            <label class="radio-inline"><input type="radio" id="jenis_cuti" name="jenis_cuti" value="Cuti Khitan/Baptis">Cuti Khitan/Baptis</label>
                                            <label class="radio-inline"><input type="radio" id="jenis_cuti" name="jenis_cuti" value="Cuti Tidak Terbayar">Cuti Tidak Terbayar</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Keperluan</label>
                                        <div class="col-sm-8">
                                            <!-- <input class="form-control" type="text" name="keperluan"> -->
                                            <textarea id="keperluan" name="keperluan" rows="5" cols="91"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Penyerahan Tugas</label>
                                        <div class="col-sm-7">
                                            <!-- <input class="form-control" type="text" name="penyerahan_tugas"> -->
                                            <select id="penyerahan_tugas" name="penyerahan_tugas" class="form-control">
                                                <option value="">Pilih</option>
                                            </select>
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
                                <a href="javascript:void(0)" onclick="add_cuti()" class="btn btn-block btn-primary btn-default btnAdd">KIRIM</a>
                            </div>
                            <div class="col-sm-offset-1 col-sm-2 text-center">
                                <a href="javascript:void(0)"><button id="btnCancel" onclick="cancel_cuti()" class="btn btn-block btn-danger btn-default ">Cancel</button></a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="update_cuti()" class="btn btn-block btn-primary btn-default btnUpd">Simpan</a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="appr_cuti()" class="btn btn-block btn-primary btn-default btnApr">Approve</a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-2 text-center">
                                <a href="javascript:void(0)" onclick="disappr_cuti()" class="btn btn-block btn-primary btn-default btnApr">Disapprove</a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 table-responsive">
                                <table id="dtb_cuti" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th class="text-center">
                                                Tgl Mulai
                                            </th>
                                            <th class="text-center">
                                                Tgl Berakhir
                                            </th>
                                            <th class="text-center">
                                                Jumlah Cuti
                                            </th>
                                            <th class="text-center">
                                                Jenis Cuti
                                            </th>
                                            <th class="text-center">
                                                Keperluan
                                            </th>
                                            <th class="text-center">
                                                Penyerahan Tugas
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

    <div class="modal fade" id="modal_srch_cuti" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive"> 
                            <table id="dtb_cari_cuti" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nama Atasan</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Berakhir</th>
                                        <th>Acc Atasan</th>
                                        <th>Acc Cuti</th>
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
            branch=$('[name="user_branch"]').val();
            id_karyawan= $('[name="id_karyawan"]').val();
            $('.btnSt').css({'display':'none'});    
            dropatasan();        
            droppenyerahan();
            pick_kryedit(id_karyawan);
            cuti(id_karyawan);
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

        function droppenyerahan()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_karyawan')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('penyerahan_tugas');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["nama_karyawan"]
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
        
        function edit_cuti()
        {
            $('#modal_srch_cuti').modal('show');
            $('.modal-title').text('Cari Cuti');
            table = $('#dtb_cari_cuti').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cuti')?>",
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

        function cancel_cuti(){
            location.reload();
        }

        function lihat_cuti()
        {
            $('#modal_srch_cuti').modal('show');
            $('.modal-title').text('Cari Cuti');
            table = $('#dtb_cari_cuti').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cuti')?>",
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

        function approve_cuti()
        {
            $('#modal_srch_cuti').modal('show');
            $('.modal-title').text('Cari Cuti');
            table = $('#dtb_cari_cuti').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cuti')?>",
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

        function open_cuti()
        {
            $('#modal_srch_cuti').modal('show');
            $('.modal-title').text('Cari Cuti');
            table = $('#dtb_cari_cuti').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_cuti')?>",
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

        function pick_cutiedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cutigb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id_cuti_karyawan"]').val(id);
                    $('[name="quota_cuti_karyawan"]').val(data.jumlah_cuti);
                    $('[name="jumlah_cuti_sebelum"]').val(data.jumlah_cuti);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="user_dept"]').val(data.dept);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="tgl_mulai"]').val(data.tgl_mulai);
                    $('[name="tgl_berakhir"]').val(data.tgl_berakhir);
                    $('[name="atasan"]').val(data.id_atasan);
                    if(data.jenis_cuti != null){
                         $('[name="jenis_cuti"][value="'+data.jenis_cuti+'"]').prop('checked',true);
                    }
                    $('[name="jumlah_cuti"]').val(data.jumlah_cuti);
                    $('[name="keperluan"]').val(data.keperluan);
                    $('[name="penyerahan_tugas"]').val(data.penyerahan);
                    $('.btnAdd').css({'display':'none'});
                    $('.btnUpd').css({'display':'block'});
                    $('.btnApr').css({'display':'none'});
                    $('#modal_srch_cuti').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_cutichk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cutigb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id_cuti_karyawan"]').val(id);
                    $('[name="quota_cuti_karyawan"]').val(data.jumlah_cuti);
                    $('[name="jumlah_cuti_sebelum"]').val(data.jumlah_cuti);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="tgl_mulai"]').val(data.tgl_mulai);
                    $('[name="tgl_berakhir"]').val(data.tgl_berakhir);
                    $('[name="atasan"]').val(data.id_atasan);
                    if(data.jenis_cuti != null){
                         $('[name="jenis_cuti"][value="'+data.jenis_cuti+'"]').prop('checked',true);
                    }
                    $('[name="jumlah_cuti"]').val(data.jumlah_cuti);
                    $('[name="keperluan"]').val(data.keperluan);
                    $('[name="penyerahan_tugas"]').val(data.penyerahan);
                    $('.btnAdd').css({'display':'none'});
                    $('.btnUpd').css({'display':'none'});
                    $('.btnApr').css({'display':'none'});
                    $('#modal_srch_cuti').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_cutiapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_cutigb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var arr = $('[name="user_dept"]').val();
                    $('[name="branch"]').val(data.id_branch);
                    $('[name="dept"]').val(data.dept);
                    $('[name="jabatan"]').val(data.jabatannya);

                    $('[name="id_cuti_karyawan"]').val(id);
                    $('[name="quota_cuti_karyawan"]').val(data.jumlah_cuti);
                    $('[name="jumlah_cuti_sebelum"]').val(data.jumlah_cuti);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="tgl_mulai"]').val(data.tgl_mulai);
                    $('[name="tgl_berakhir"]').val(data.tgl_berakhir);
                    $('[name="atasan"]').val(data.id_atasan);
                    if(data.jenis_cuti != null){
                        $('[name="jenis_cuti"][value="'+data.jenis_cuti+'"]').prop('checked',true);
                    }
                    $('[name="jumlah_cuti"]').val(data.jumlah_cuti);
                    $('[name="keperluan"]').val(data.keperluan);
                    $('[name="penyerahan_tugas"]').val(data.penyerahan);
                    if(data.acc_atasan != null){
                        $('[name="acc_atasan"][value="'+data.acc_atasan+'"]').prop('checked',true);
                        // $('[name="acc_atasan"]').val(data.acc_atasan);
                    }
                    if(data.acc_hc != null){
                        $('[name="acc_hc"][value="'+data.acc_hc+'"]').prop('checked',true);
                        // $('[name="acc_hc"]').val(data.acc_hc);
                    }
                    $('.accatasan').css({'display':'block'});
                    if (arr.includes("2") || arr.includes("f") || arr.includes("q") || arr.includes("17") || arr.includes("32")){
                        $('.acchc').css({'display':'block'});
                    }
                    $('.btnAdd').css({'display':'none'});
                    $('.btnUpd').css({'display':'none'});
                    $('.btnApr').css({'display':'block'});
                    $('#modal_srch_cuti').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_cutiopen(id)
        {
            cuti_open(id);
            $('#modal_srch_cuti').modal('hide');
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

        function add_cuti()
        {
            var jnscuti = '';
            var quota_cuti =  $('[name="quota_cuti_karyawan"]').val()*1;
            var jml_cuti = $('[name="total_cuti"]').val()*1;
            jnscuti = getRadioValue("jenis_cuti");
            if (($('[name="id_karyawan"]').val() !='') && ($('[name="atasan"]').val() !='') && ($('[name="jumlah_cuti"]').val() !='') && (jnscuti !='') && ($('[name="keperluan"]').val() !='')){
                if ((jml_cuti+($('[name="jumlah_cuti"]').val()*1))<=quota_cuti){
                    $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_tambahcuti')?>",
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
                                cuti(id);                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
                }else{
                    alert('Jumlah Cuti yang diambil terlalu besar atau quota cuti habis !');
                }
            }else{
                if ($('[name="id_karyawan"]').val() =='') {
                    alert("Id Karyawan kosong atau tidak ditemukan !");
                }
                
                if ($('[name="atasan"]').val() =='') {
                    alert("Nama atasan harus diisi !");
                }

                if ($('[name="jumlah_cuti"]').val() =='') {
                    alert("Jumlah cuti harus diisi !");
                }

                if (jnscuti =='') {
                    alert("Jenis cuti harus diisi !");
                }

                 if ($('[name="keperluan"]').val() =='') {
                    alert("Keperluan harus diisi !");
                }
            }
        }

        function update_cuti()
        {
            var jnscuti = '';
            var id = $('[name="id_cuti_karyawan"]').val();
            var quota_cuti =  $('[name="quota_cuti_karyawan"]').val()*1;
            var total_cuti = $('[name="total_cuti"]').val()*1;
            jnscuti = getRadioValue("jenis_cuti");
            // alert($('[name="id_karyawan"]').val());
            if (($('[name="id_karyawan"]').val() !='') && ($('[name="atasan"]').val() !='') && ($('[name="jumlah_cuti"]').val() !='') && (jnscuti !='')){
                // alert(((total_cuti + ($('[name="jumlah_cuti"]').val()*1)-($('[name="jumlah_cuti_sebelum"]').val()*1))));
                if (((total_cuti + ($('[name="jumlah_cuti"]').val()*1)-($('[name="jumlah_cuti_sebelum"]').val()*1))) <= quota_cuti){
                    $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_updatecuti/')?>"+id,
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Diupdate'); 
                                var id = $('[name="id_karyawan"]').val();      
                                cuti(id);                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
                }else{
                    alert('Jumlah Cuti yang diambil terlalu besar atau quota cuti habis !');
                }
            }else{
                if ($('[name="id_karyawan"]').val() =='') {
                    alert("Id Karyawan kosong atau tidak ditemukan !");
                }
                
                if ($('[name="atasan"]').val() =='') {
                    alert("Nama atasan harus diisi !");
                }

                if ($('[name="jumlah_cuti"]').val() =='') {
                    alert("Jumlah cuti harus diisi !");
                }

                if (jnscuti =='') {
                    alert("Jenis cuti harus diisi !");
                }
            }
        }

        function appr_cuti()
        {
            var id = $('[name="id_cuti_karyawan"]').val();
            $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_approvecuti/')?>"+id,
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
                                // var radios_atasan = document.getElementsByName('acc_atasan');
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
                                cuti(id);                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
        }

        function disappr_cuti()
        {
            var id = $('[name="id_cuti_karyawan"]').val();
            $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_disapprovecuti/')?>"+id,
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

        function cuti_open(id)
        {
            // var id = $('[name="id_cuti_karyawan"]').val();
            $.ajax({
                        url : "<?php echo site_url('transaction/Permohonan/ajax_opencuti/')?>"+id,
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Status Open'); 
                                // var id = $('[name="id_karyawan"]').val();      
                                // cuti(id);                
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
        }

        function cuti(id)
        {
            table = $('#dtb_cuti').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('transaction/Permohonan/ajax_cuti/')?>"+id,
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

        function del_cuti(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('transaction/Permohonan/ajax_del_cuti/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        id = $('[name="id_karyawan"]').val();
                        alert('Data Berhasil Dihapus');
                        cuti(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function cek_jumlah_cuti(id)
        {         
            var jumlah_cuti = 0;
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_cek_cuti/')?>"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    jumlah_cuti = data.jumlah_cuti;
                    $('[name="total_cuti"]').val(jumlah_cuti);
                    // return jumlah_cuti;
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error cek data');
                }
            }); 
        }

        function kirim_email_atasan(id)
        {
            $.ajax({
                url : "<?php echo site_url('transaction/Permohonan/ajax_kirim_email_cuti_atasan/')?>"+id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Permohonan Cuti Berhasil Terkirim ke Atasan');
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
                url : "<?php echo site_url('transaction/Permohonan/ajax_kirim_email_cuti_hc/')?>"+id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Permohonan Cuti Berhasil Terkirim ke HC');
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
                url : "<?php echo site_url('transaction/Permohonan/ajax_kirim_email_cuti_bod/')?>"+id,
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Permohonan Cuti Berhasil Terkirim ke BOD');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error cek data');
                }
            });  
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
        
    </script>
    <!-- Search -->
    <script>
        function edit_kry()
        {
            $('#modal_po_edit').modal('show');
            $('.modal-title').text('Cari Karyawan');
            table = $('#dtb_po_edit').DataTable({
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
                        data.sts = '0';
                        data.brch = $('[name="branch"]').val();
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
        
    </script>
    <!-- Pick -->
    <script>
        function pick_kryedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="branch"]').val(data.id_branch);
                    // dropbranch();
                    
                    cek_jumlah_cuti(data.id_karyawan);
                    $('[name="branch"]').val(data.id_branch);
                    $('[name="dept"]').val(data.dept);
                    $('[name="jabatan"]').val(data.jabatannya);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="user_dept"]').val(data.dept);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="quota_cuti_karyawan"]').val(data.jumlah_cuti);
                    // mutasi();
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