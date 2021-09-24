<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Project Match Terpadu" content="Match Terpadu">
    <meta name="Author" content="Kaisha Satrio">
    <title><?php echo $title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">   
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin/metisMenu/metisMenu.min.css')?>" rel="stylesheet">
    <!-- sbadmin -->
    <link href="<?php echo base_url('assets/sbadmin/css/sb-admin-2.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/responsive.dataTables.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/addons/select2-bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/addons/extra.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <style type="text/css">
        body 
        {
            background-color: white;
            font-size: 14px;
            font-family: 'times new roman';
        }

        #columns {
            width: 1000px;
        }

        #columns .column {
            position: relative;
            /*width: 48%;*/
            padding: 1%;
            border: solid 1px #000;
        }

        #columns .left {
            float: left;
            width: 30%;
        }

        #columns .right {
            float: right;
            width: 68%;
        }

        @media print
        {
            .hidden-print
            {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container hidden-print">
        <div class="row">
            <div class="col-sm-2 col-xs-3">
                <button class="btn btn-block btn-primary" type="button" onclick="printDiv()">Print</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Data Karyawan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_master_karyawan" class="table table-bordered" cellspacing="0" width="100%">
                    <head>
                        <tr>

                        </tr>
                    </head>
                    <tbody>
                        <div class="col-sm-8 col-xs-12">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <h3 class="page-header">Data Pribadi</h3>
                                </div> 
                                <input type="hidden" name="id_karyawan" value="<?= $id;?>">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Perusahaan</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='perusahaan'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">NIK</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='nik'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Nama Lngkap</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='nama_lengkap'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">E-mail</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='email'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Nomor HP</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='nomor_hp'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='pendidikan'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Tanggal Masuk Kerja</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='tanggal_masuk'></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
                <!-- <div class="col-lg-12">
                    <h3 class="page-header">Riwayat Keluarga</h3>
                </div>  -->
                <div class="col-sm-8 col-xs-12">
                    <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                            <table id="dtb_keluarga" class="table" cellspacing="0" width="100%">
                                <head>
                                    <tr>
                                        <td><h3 class="page-header">Portofolio Mutasi Jabatan</h3></td>
                                    </tr>
                                </head>
                                <tbody id="tb_content_mutasi"></tbody>
                            </tabel>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        $(document).ready(function()
        {
            var id = $('[name="id_karyawan"]').val();
            tabledata(id);
            tabledata_mutasi(id);
            // tabledata_pendidikan(id);
            // tabledata_pekerjaan(id);
            // tabledata_jabatan(id);
        });

        function tabledata(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_masterkaryawan_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    var newSrc='';
                    var tgl = moment(data.tgl_masuk).locale('id').format('DD-MM-YYYY');
                    $("#nik").html(data.nik);
                    $("#nama_lengkap").html(data.nama_karyawan);
                    $("#email").html(data.email);
                    $("#nomor_hp").html(data.nomor_hp);
                    $("#pendidikan").html(data.pendidikan_terakhir);
                    $("#tanggal_masuk").html(tgl);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tabledata_mutasi(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_mutasi_jabatan_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var tgl='';
                    for (var i = 0; i < data.length; i++)
                    {   
                        tgl = moment(data.tgl_mutasi).locale('id').format('DD-MM-YYYY');
                        var tr1 = $('<div class="col-sm-12 col-xs-12">').append(
                                  $('<div class="col-sm-5"><h4>'+data[i]["perusahaan_mutasi"]+'</h4></div>'),
                                  $('</div>')
                                  ).appendTo('#tb_content_mutasi'); 
                         var tr2 = $('<div class="col-sm-12 col-xs-12">').append(
                                   $('<div class="form-group">'),
                                   $('<div class="col-sm-5">Pangkat</div>'), 
                                   $('<div class="col-sm-1">'+' : '+'</div>'),
                                   $('<div class="col-sm-6">'+data[i]["pangkat_mutasi"]+'</div>'),
                                   $('</div>'),
                                   $('</div>')
                                   ).appendTo('#tb_content_mutasi'); 
                         var tr3 = $('<div class="col-sm-12 col-xs-12">').append(
                                   $('<div class="form-group">'),
                                   $('<div class="col-sm-5">Jabatan</div>'), 
                                   $('<div class="col-sm-1">'+' : '+'</div>'),
                                   $('<div class="col-sm-6">'+data[i]["jabatan_mutasi"]+'</div>'),
                                   $('</div>'),
                                   $('</div>')
                                   ).appendTo('#tb_content_mutasi');
                         var tr4 = $('<div class="col-sm-12 col-xs-12">').append(
                                   $('<div class="form-group">'),
                                   $('<div class="col-sm-5">Divisi</div>'), 
                                   $('<div class="col-sm-1">'+' : '+'</div>'),
                                   $('<div class="col-sm-6">'+data[i]["dept_mutasi"]+'</div>'),
                                   $('</div>'),
                                   $('</div>')
                                   ).appendTo('#tb_content_mutasi');
                         var tr5 = $('<div class="col-sm-12 col-xs-12">').append(
                                   $('<div class="form-group">'),
                                   $('<div class="col-sm-5">Tanggal Mutasi</div>'), 
                                   $('<div class="col-sm-1">'+' : '+'</div>'),
                                   $('<div class="col-sm-6">'+tgl+'</div>'),
                                   $('</div>'),
                                   $('</div>')
                                   ).appendTo('#tb_content_mutasi');      
                    }
                    // dtable2();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function printDiv()
        {
            window.print();
        }
    </script>
</body>
</html>