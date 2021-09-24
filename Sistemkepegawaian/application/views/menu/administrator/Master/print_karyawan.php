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
                    <div id="columns">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-5">
                                        <img id="img_logo" class="img-responsive" src="" width="230" height="250">
                                    </div>
                                </div>
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
                                        <label class="col-sm-5 control-label">NIK :</label>
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
                                        <label class="col-sm-5 control-label">Alamat Sekarang</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='alamat_sekarang'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='tempat_tgl_lahir'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='jenis_kelamin'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Agama</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='agama'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Status Nikah</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='status_nikah'></span>
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
                                        <label class="col-sm-5 control-label">Nomor KTP</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='nomor_ktp'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Nomor NPWP</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='nomor_npwp'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Nomor BPJS Kesehatan</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='bpjs_kesehatan'></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label">Nomor BPJS Ketenagakerjaan</label>
                                        <div class="col-sm-1">:</div>
                                        <div class="col-sm-6">
                                            <span id='bpjs_ketenagakerjaan'></span>
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
                    </div>
                    </tbody>
                </table>
                <!-- <div class="col-lg-12">
                    <h3 class="page-header">Riwayat Keluarga</h3>
                </div>  -->
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                            <table id="dtb_keluarga" class="table" cellspacing="0" width="100%">
                                <head>
                                    <tr>
                                        <td><h3 class="page-header">Riwayat Keluarga</h3></td>
                                    </tr>
                                </head>
                                <tbody id="tb_content_keluarga"></tbody>
                            </tabel>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                    <h3 class="page-header">Riwayat Pendidikan</h3>
                </div> -->
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                            <table id="dtb_pendidikan" class="table" cellspacing="0" width="100%">
                                <head>
                                    <tr>
                                        <td><h3 class="page-header">Riwayat Pendidikan</h3></td>
                                    </tr>
                                </head>
                                <tbody id="tb_content_pendidikan"></tbody>
                            </tabel>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                            <table id="dtb_pekerjaan" class="table" cellspacing="0" width="100%">
                                <head>
                                    <tr>
                                        <td><h3 class="page-header">Pengalaman Kerja</h3></td>
                                    </tr>
                                </head>
                                <tbody id="tb_content_pekerjaan"></tbody>
                            </tabel>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                            <table id="dtb_jabatan" class="table" cellspacing="0" width="100%">
                                <head>
                                    <tr>
                                        <td><h3 class="page-header">Riwayat Jabatan</h3></td>
                                    </tr>
                                </head>
                                <tbody id="tb_content_jabatan"></tbody>
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
            tabledata2(id);
            tabledata_keluarga(id);
            tabledata_pendidikan(id);
            tabledata_pekerjaan(id);
            tabledata_jabatan(id);
        });

        function tabledata()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_masterkaryawan')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data.length; i++)
                    {
                        var tgl = moment(data[i]["tgl_lahir"]).locale('id').format('DD-MM-YYYY');
                        var tr = $('<tr>').append(
                            $('<td>'+data[i]["nik"]+'</td>'),
                            $('<td>'+data[i]["nama_karyawan"]+'</td>'),
                            $('<td>'+data[i]["jenis_kelamin"]+'</td>'),
                            $('<td>'+data[i]["tempat_lahir"]+', '+tgl+'</td>'),
                            $('<td>'+data[i]["alamat_karyawan"]+'</td>'),
                            $('<td>'+data[i]["nomor_hp"]+'</td>'),
                            $('<td>'+data[i]["email"]+'</td>'),
                            $('<td>'+data[i]["nomor_ktp"]+'</td>'),
                            $('<td>'+data[i]["nomor_npwp"]+'</td>')
                            ).appendTo('#tb_content')                        
                    }
                    dtable();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tabledata2(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_masterkaryawan_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // alert(data.nik);
                    var newSrc='';
                    var tgl = moment(data.tgl_lahir).locale('id').format('DD-MM-YYYY');
                    $("#perusahaan").html(data.BRANCH_NAME);
                    $("#nik").html(data.nik);
                    $("#nama_lengkap").html(data.nama_karyawan);
                    $("#alamat_sekarang").html(data.alamat_karyawan);
                    $("#tempat_tgl_lahir").html(data.tempat_lahir+', '+tgl);
                    $("#jenis_kelamin").html(data.jenis_kelamin);
                    $("#agama").html(data.agama);
                    $("#status_nikah").html(data.status_nikah);
                    $("#email").html(data.email);
                    $("#nomor_hp").html(data.nomor_hp);
                    $("#nomor_ktp").html(data.nomor_ktp);
                    $("#nomor_npwp").html(data.nomor_npwp);
                    $("#bpjs_kesehatan").html(data.nomor_bpjs_kesehatan);
                    $("#bpjs_ketenagakerjaan").html(data.nomor_bpjs_ketenagakerjaan);
                    $("#pendidikan").html(data.pendidikan_terakhir);
                    $("#tanggal_masuk").html(data.tgl_masuk);
                    if (data.img != ''){
                        newSrc = "<?php echo base_url()?>"+"assets/img/"+data.img;

                    }else{
                        newSrc = "<?php echo base_url()?>"+"assets/img/photo.png";
                    }
                    $('#img_logo').attr('src', newSrc); 
                    // dtable();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tabledata_keluarga(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_riwayat_keluarga_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    // var tr = $('<tr>').append(
                    //          $('<td><h3 class="page-header">Riwayat Keluarga</h3></td>'),
                    //          $('</tr>')
                    //          ).appendTo('#tb_content_keluarga');
                    for (var i = 0; i < data.length; i++)
                    {
                        var status= data[i]["status_keluarga"];
                        if (status == '1') { sts='Suami';}
                        if (status == '2') { sts='Istri';}
                        if (status == '3') { sts='Anak ke-1';}
                        if (status == '4') { sts='Anak ke-2';}
                        if (status == '5') { sts='Anak ke-3';}
                        if (status == '6') { sts='Anak ke-4';}
                        if (status == '7') { sts='Anak ke-5';}
                        
                        // var tr1 = $('<tr>').append(
                        //           $('<td>'+'  '+'</td>'),
                        //           $('<td>'+data[i]["nama_keluarga"]+'</td>'),
                        //           $('<td>'+'  '+'</td>'),
                        //           $('</tr>')
                        //           ).appendTo('#tb_content_keluarga'); 
                         var tr2 = $('<tr>').append(
                                   $('<td>'+data[i]["jenis_kelamin"]+'</td>'),
                                   $('<td>'+data[i]["nama_keluarga"]+'</td>'),
                                   $('<td>'+sts+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_keluarga'); 
                         var tr3 = $('<tr>').append(
                                   $('<td>'+'  '+'</td>'),
                                   $('<td>Usia : '+ data[i]["usia_keluarga"]+' tahun</td>'),
                                   $('<td>'+'  '+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_keluarga');      
                    }
                    // dtable2();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tabledata_pendidikan(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_riwayat_pendidikan_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    // var tr = $('<tr>').append(
                    //          $('<td><h3 class="page-header">Riwayat Pendidikan</h3></td>'),
                    //          $('</tr>')
                    //          ).appendTo('#tb_content_pendidikan');
                    for (var i = 0; i < data.length; i++)
                    {   
                        // var tr1 = $('<tr>').append(
                        //           $('<td>'+'  '+'</td>'),
                        //           $('<td>'+data[i]["jurusan"]+'</td>'),
                        //           $('<td>'+'  '+'</td>'),
                        //           $('</tr>')
                        //           ).appendTo('#tb_content_pendidikan'); 
                         var tr2 = $('<tr>').append(
                                   $('<td>'+data[i]["tahun_masuk"]+' - '+data[i]["tahun_selesai"]+'</td>'),
                                   $('<td>'+data[i]["jurusan"]+'</td>'),
                                   $('<td>'+data[i]["tingkat_pendidikan"]+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_pendidikan'); 
                         var tr3 = $('<tr>').append(
                                   $('<td>'+'  '+'</td>'),
                                   $('<td>'+ data[i]["nama_sekolah"]+' - '+data[i]["status_kelulusan"]+'</td>'),
                                   $('<td>'+'  '+'</td>'),
                                   $('</tr>')
                            ).appendTo('#tb_content_pendidikan');      

                    }
                    // dtable3();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tabledata_pekerjaan(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_riwayat_pekerjaan_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    // var tr = $('<tr>').append(
                    //          $('<td><h3 class="page-header">Pengalaman Kerja</h3></td>'),
                    //          $('</tr>')
                    //          ).appendTo('#tb_content_pekerjaan');
                    for (var i = 0; i < data.length; i++)
                    {   
                        var tr1 = $('<tr>').append(
                                  $('<td>'+data[i]["tgl_mulai"]+'</td>'),
                                  $('<td>'+data[i]["nama_perusahaan"]+'</td>'),
                                  $('<td>'+'  '+'</td>'),
                                  $('</tr>')
                                  ).appendTo('#tb_content_pekerjaan');      
                         var tr2 = $('<tr>').append(
                                   $('<td>'+' - '+'</td>'),
                                   $('<td>sebagai :'+data[i]["jabatan"]+'</td>'),
                                   $('<td>'+' '+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_pekerjaan');
                         var tr3 = $('<tr>').append(
                                   $('<td>'+data[i]["tgl_berakhir"]+'</td>'),
                                   $('<td>'+' '+'</td>'),
                                   $('<td>'+' '+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_pekerjaan'); 
                    }
                    // dtable4();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tabledata_jabatan(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/get_riwayat_jabatan_by_id/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    // var tr = $('<tr>').append(
                    //          $('<td><h3 class="page-header">Riwayat Jabatan</h3></td>'),
                    //          $('</tr>')
                    //          ).appendTo('#tb_content_jabatan');
                    for (var i = 0; i < data.length; i++)
                    {   
                        var tr1 = $('<tr>').append(
                                  $('<td><h4>'+data[i]["perusahaan"]+'</h4></td>'),
                                  $('</tr>')
                                  ).appendTo('#tb_content_jabatan'); 
                         var tr2 = $('<tr>').append(
                                   $('<td>Pangkat :'+data[i]["pangkat"]+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_jabatan'); 
                         var tr3 = $('<tr>').append(
                                   $('<td>Jabatan :'+ data[i]["jabatan"]+'</td>'),
                                   $('</tr>')
                                   ).appendTo('#tb_content_jabatan'); 
                    }
                    // dtable5();
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