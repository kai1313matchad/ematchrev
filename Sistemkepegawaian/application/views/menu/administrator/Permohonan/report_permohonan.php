<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Laporan Permohonan Cuti, Ijin Dan Lembur</h1>
                    </div>
                </div>
                <div class="row">
                    <form class="form-horizontal" id="form_pappr" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cabang</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_brc()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="pappr_branch" readonly>
                                <input type="hidden" name="pappr_branchid">


                                 <!-- update sistem cari cabang - Laporan Persetujuan Ijin -->
                                <input type="hidden" name="user_brc" value="<?= $this->session->userdata('user_branch')?>">


                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Karyawan</label>
                            <div class="col-sm-1">
                                <a href="javascript:void(0)" onclick="srch_karyawan()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-search"></span></a>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="nama_karyawan" readonly>
                                <input type="hidden" name="id_karyawan">

                                <!-- update sistem cari approval - Laporan Persetujuan Ijin -->
                                <input type="hidden" name="user_brc" value="<?= $this->session->userdata('user_branch')?>">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="pappr_datestart" type='text' class="form-control input-group-addon" name="datestart" value="" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date dtp' id='dtp1'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input id="pappr_dateend" type='text' class="form-control input-group-addon" name="dateend" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Laporan</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="jenis" name="jenis">
                                    <option value="">Pilih</option>
                                    <option value="Cuti">Cuti</option>
                                    <option value="Ijin">Ijin</option>
                                    <option value="Lembur">Lembur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <a href="javascript:void(0)" onclick="filter_laporan()" class="btn btn-block btn-primary">
                                    <span class="glyphicon glyphicon-filter"> Tampilkan</span>
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:void(0)" onclick="print_laporan()" class="btn btn-block btn-info">
                                    <span class="glyphicon glyphicon-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table id="dtb_laporan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th class="text-center">
                                        Nama
                                    </th>
                                    <th class="text-center">
                                        Tanggal Mulai
                                    </th>
                                    <th class="text-center">
                                        Tanggal Berakhir
                                    </th>
                                    <th class="text-center">
                                        Keperluan
                                    </th>
                                    <th class="text-center">
                                        Nama Atasan
                                    </th>
                                    <th class="text-center">
                                        Acc Atasan
                                    </th>
                                    <th class="text-center">
                                        Acc HC
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- Modal -->
    <div class="modal fade" id="modal_branch" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_branch" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>                
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
    <div class="modal fade" id="modal_karyawan" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_karyawan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Branch</th>  
                                        <th>Alamat Karyawan</th>  
                                        <th>No. KTP</th>  
                                        <th>No. HP</th>             
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
                                        <th class="col-xs-4">Nama Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Klien</th>
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
    <div class="modal fade" id="modal_pattyp" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_pattyp" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.js')?>"></script>
    <!-- Datetime -->
    <script src="<?php echo base_url('assets/addons/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.responsive.js')?>"></script>
    <!-- Select Bst -->
    <script src="<?php echo base_url('assets/addons/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        $(document).ready(function()
        {
            dt_laporan(1);            
        });

        function filter_laporan()
        {
            if ($('[name="jenis"]').val()=='Cuti') {
                dt_laporan(1); 
            }
            if ($('[name="jenis"]').val()=='Ijin') {
                dt_laporan(2); 
            }
            if ($('[name="jenis"]').val()=='Lembur') {
                dt_laporan(3); 
            }
            $('#dtb_laporan').DataTable().ajax.reload(null,false);
        }

        function print_laporan()
        {
            if($('[name="jenis"]').val() == '')
            {
                alert('Pilih Jenis Laporan');
            }
            else
            {
                var seg1 = $('[name="datestart"]').val()?$('[name="datestart"]').val():'null';
                var seg2 = $('[name="dateend"]').val()?$('[name="dateend"]').val():'null';
                var seg3 = $('[name="pappr_branchid"]').val()?$('[name="pappr_branchid"]').val():'null';
                var seg4 = $('[name="id_karyawan"]').val()?$('[name="id_karyawan"]').val():'null';
                if ($('[name="jenis"]').val()=='Cuti') {
                    window.open ( "<?php echo site_url('transaction/Permohonan/print_rptcuti/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4,'_blank');
                }

                if ($('[name="jenis"]').val()=='Ijin') {
                    window.open ( "<?php echo site_url('transaction/Permohonan/print_rptijin/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4,'_blank');
                }

                if ($('[name="jenis"]').val()=='Lembur') {
                    window.open ( "<?php echo site_url('transaction/Permohonan/print_rptlembur/')?>"+seg1+'/'+seg2+'/'+seg3+'/'+seg4,'_blank');
                }
            }
        }
    </script>
    <!-- Showdata -->
    <script>
        function dt_laporan(id)
        {        
            if (id==1) {
                table = $('#dtb_laporan').DataTable({
                            "info": false,
                            "destroy": true,
                            "responsive": true,
                            "processing": true,
                            "serverSide": true,
                            "order": [],
                            "ajax": {
                                "url": "<?php echo site_url('administrator/Showdata/showrpt_cuti')?>",
                                "type": "POST",
                                "data": function(data){
                                    data.id_karyawan = $('[name="id_karyawan"]').val();
                                    data.date_start = $('[name="datestart"]').val();
                                    data.date_end = $('[name="dateend"]').val();
                                    data.branch = $('[name="pappr_branchid"]').val();
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
            if (id==2) {
                table = $('#dtb_laporan').DataTable({
                            "info": false,
                            "destroy": true,
                            "responsive": true,
                            "processing": true,
                            "serverSide": true,
                            "order": [],
                            "ajax": {
                                "url": "<?php echo site_url('administrator/Showdata/showrpt_ijin')?>",
                                "type": "POST",
                                "data": function(data){
                                    data.id_karyawan = $('[name="id_karyawan"]').val();
                                    data.date_start = $('[name="datestart"]').val();
                                    data.date_end = $('[name="dateend"]').val();
                                    data.branch = $('[name="pappr_branchid"]').val();
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

            if (id==3) {
                table = $('#dtb_laporan').DataTable({
                            "info": false,
                            "destroy": true,
                            "responsive": true,
                            "processing": true,
                            "serverSide": true,
                            "order": [],
                            "ajax": {
                                "url": "<?php echo site_url('administrator/Showdata/showrpt_lembur')?>",
                                "type": "POST",
                                "data": function(data){
                                    data.id_karyawan = $('[name="id_karyawan"]').val();
                                    data.date_start = $('[name="datestart"]').val();
                                    data.date_end = $('[name="dateend"]').val();
                                    data.branch = $('[name="pappr_branchid"]').val();
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
        }
    </script>
    <!-- Dropdown -->
    <script>
        function drop_coa()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/getcoa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#ldg_coaid').empty();
                    var select = document.getElementById('balsh_coaid');
                    var option;
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#balsh_coaid').selectpicker({
                        dropupAuto: false
                    });
                    $('#balsh_coaid').selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
    <!-- Search -->
    <script>
        function srch_brc()
        {
            $('#modal_branch').modal('show');
            $('.modal-title').text('Cari Cabang');            
            table = $('#dtb_branch').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_branch')?>",
                    "type": "POST",   



                    //update sistem cari cabang - Laporan Persetujuan Ijin
                    "data": function(data){
                        data.brch = $('[name="user_brc"]').val();
                    }





                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function srch_karyawan()
        {
            $('#modal_karyawan').modal('show');
            $('.modal-title').text('Cari Karyawan');            
            table = $('#dtb_karyawan').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_karyawan')?>",
                    "type": "POST",   



                    //update sistem cari cabang - Laporan Persetujuan Ijin
                    "data": function(data){
                        data.brch = $('[name="user_brc"]').val();
                    }





                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
        function srch_loc()
        {
            $('#modal_loc').modal('show');
            $('.modal-title').text('Cari Lokasi');          
            table = $('#dtb_loc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Marketing/ajax_srch_loc')?>",
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
        function srch_pattype()
        {
            $('#modal_pattyp').modal('show');
            $('.modal-title').text('Cari Jenis Ijin');            
            table = $('#dtb_pattyp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_sitactype')?>",
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
        function srch_appr()
        {
            $('#modal_appr').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_appr')?>",
                    "type": "POST", 


                 //update sistem cari approval - Laporan Persetujuan Ijin
                    "data": function(data){
                        data.brch = $('[name="user_brc"]').val();
                    }



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
        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="pappr_branchid"]').val(data.BRANCH_ID);
                    $('[name="pappr_branch"]').val(data.BRANCH_NAME);
                    $('#modal_branch').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_karyawan(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_karyawan/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nama_karyawan"]').val(data.nama_karyawan);
                    $('#modal_karyawan').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_loc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="pappr_locid"]').val(data.LOC_ID);
                    $('[name="pappr_loc"]').val(data.LOC_NAME);                    
                    $('#modal_loc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_permittype(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_permittype/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="pappr_pattypeid"]').val(data.PRMTTYP_ID);
                    $('[name="pappr_pattype"]').val(data.PRMTTYP_NAME);
                    $('#modal_pattyp').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_apprgb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_apprgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="pappr_apprid"]').val(data.APPR_ID);
                    $('[name="pappr_appr"]').val(data.APPR_CODE);                  
                    $('#modal_appr').modal('hide');
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