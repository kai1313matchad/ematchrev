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
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/rowGroup.dataTables.min.css')?>" rel="stylesheet">
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
        }
        .bg-table
        {
            min-height: 1000px;
        }
        .bt-border
        {
            border-bottom: solid 2px black;
        }
        .border-pay
        {
            border: solid 2px black;
            min-height: 50px;
        }
        tr.group,
        tr.group:hover {
            background-color: #ddd !important;
        }

        tr.subgroup,
        tr.subgroup {
           background-color: cornsilk !important;
        }
        .row-start
        {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="form_rptpappr">
            <input type="hidden" name="branch" value="<?php echo $branch; ?>">
            <input type="hidden" name="date_start" value="<?php echo $datestart; ?>">
            <input type="hidden" name="date_end" value="<?php echo $dateend; ?>">
            <input type="hidden" name="karyawan" value="<?php echo $karyawan; ?>">
        </form>        
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <!-- update sistem - Logo Branch -->
                <!-- <img src="https://www.matchadonline.com/logo_n_watermark/mobile_1481852222932_2logo4.png"> -->
                <img id="img_logo" class="img-responsive" src="">


            </div>
            <div class="col-sm-6 col-xs-6">
                <h2 class="text-center"><u><span name="rptpappr_type"></span> </u></h2>
                <h3 class="text-center" name="rptpappr_branch"></h3>
                <h4 class="text-center" name="rptpappr_period"></h4>
            </div>
        </div>
        <div id="tp1" class="row row-start">
            <div class="col-sm-12 col-xs-12 table-responsive">
                <table id="dtb_rptsappr_t1" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">
                                Nama Karyawan
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
                    <tbody id="tb_content_tp1"></tbody>
                </table>
                <br>
                <br>
                <tr>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-right"><p id="date"></p></div>
                </tr>
                <br>
                <br>
                <tr>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-right">Pembuat&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                    <div class="col-sm-4 text-right">Diketahui&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <div class="col-sm-4">                      </div>
                    <div class="col-sm-4 text-right">(...........................)</div>
                    <div class="col-sm-4 text-right">(...........................)</div>
                </tr>
                <tr>
                    <div class="col-sm-4">                      </div>
                    <div class="col-sm-4 text-right">HC&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                    <div class="col-sm-4 text-right">BOD&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                </tr>
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
    <script src="<?php echo base_url('assets/datatables/js/dataTables.rowGroup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.rowGrouping.js')?>"></script>
    <!-- Number to Money -->
    <script src="<?php echo base_url('assets/addons/jquery.number.js') ?>"></script>
    <!-- Addon -->
    <script src="<?php echo base_url('assets/addons/extra.js')?>"></script>
    <script>
        $(document).ready(function()
        {
            check_();
            $('[name="rptpappr_period"]').text($('[name="date_start"]').val()+' s/d '+$('[name="date_end"]').val());
            if($('[name="branch"]').val() != '')
            {
                pick_branch($('[name="branch"]').val());
            }

            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            t = (("0"+n.getHours()).slice(-2)) +":"+ (("0"+n.getMinutes()).slice(-2));
            document.getElementById("date").innerHTML = "Surabaya, "+ d + "/" + m + "/" + y;
        });

        function check_()
        {
            $('#tp1').removeClass('row-start');
            $('[name="rptpappr_type"]').text('LAPORAN IJIN KARYAWAN');
            gen_tp1(0);
        }

        function gen_tp1(v)
        {
            $.ajax({
                url : "<?php echo site_url('transaction/Permohonan/gen_laporan_ijin')?>",
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        // var appr=data['a'][i]["APPR_CODE"];
                        // if (appr == null) {appr='';}
                        var tr = $('<tr>').append(
                            $('<td>'+data['a'][i]["nama_karyawan"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["tgl_mulai"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["tgl_berakhir"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["keperluan"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["nama_atasan"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["acc_atasan"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["acc_hc"]+'</td>')
                            ).appendTo('#tb_content_tp1');
                    }
                    dt_tp1(v);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function gen_tp2(v)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Sitac/gen_rptpappr_t2')?>",
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["SAPPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["SAPPR_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["APPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SAPPR_WIDTH"]+'m X '+data['a'][i]["PAPPR_LENGTH"]+'m X '+data['a'][i]["SAPPR_PLCSUM"]+' Muka'+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SITACTYPE_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            $('<td class="text-right chgnum">'+data['a'][i]["SPAY_AMOUNT"]+'</td>'),
                            ).appendTo('#tb_content_tp2');
                    }
                    dt_tp2(v);
                    $('td.chgnum').number(true);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function gen_tp3()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Sitac/gen_rptpappr_t3')?>",
                type: "POST",
                data: $('#form_rptpappr').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var jenis_ijin = data['a'][i]["SITACTYPE_NAME"];
                        // if (jenis_ijin == null){jenis_ijin='';}
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["SAPPR_CODE"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["SAPPR_DATE"]).format('DD-MMMM-YYYY')+'</td>'),
                            // $('<td class="text-center">'+data['a'][i]["SITAC_NAME"]+'</td>'),
                            $('<td class="text-center">'+jenis_ijin+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["LOC_NAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SITDOC_JENIS"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SITDOC_KETERANGAN"]+'</td>'),
                            $('<td class="text-center">'+moment(data['a'][i]["SITDOC_TGL1"]).format('DD-MMMM-YYYY')+' s/d '+moment(data['a'][i]["SITDOC_TGL2"]).format('DD-MMMM-YYYY')+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["SITDOC_NOMINAL"]+'</td>')
                            // $('<td class="text-center">'+data['a'][i]["PDOC_RCVNUM"]+' / '+moment(data['a'][i]["PDOC_DATERCV"]).format('DD-MMMM-YYYY')+'</td>')
                            ).appendTo('#tb_content_tp3');
                    }
                    dt_tp3(3);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function tes()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Accounting/gen_balancesheet')?>",
                type: "POST",
                data: $('#form_trbal').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    for (var i = 0; i < data['a'].length; i++)
                    {
                        var slc = (data['a'][i]["saldo"] < 0)? 0 : data['a'][i]["saldo"];
                        var sld = (data['a'][i]["saldo"] < 0)? Math.abs(data['a'][i]["saldo"]) : 0;
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['a'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['a'][i]["COA_ACC"]+' - '+data['a'][i]["COA_ACCNAME"]+'</td>'),
                            // $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>'),
                            // $('<td name="credit'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+data['a'][i]["saldo"]+'</td>')
                            $('<td name="debet'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+sld+'</td>'),
                            $('<td name="credit'+data['a'][i]["COA_ACC"]+'" class="text-right chgnum">'+slc+'</td>')
                            ).appendTo('#tb_content');
                    }
                    for (var i = 0; i < data['b'].length; i++)
                    {
                        var sld = (data['b'][i]["saldo"] < 0)? 0 : data['b'][i]["saldo"];
                        var slc = (data['b'][i]["saldo"] < 0)? Math.abs(data['b'][i]["saldo"]) : 0;
                        var tr = $('<tr>').append(
                            $('<td class="text-center">'+data['b'][i]["PAR_ACCNAME"]+'</td>'),
                            $('<td class="text-center">'+data['b'][i]["COA_ACC"]+' - '+data['b'][i]["COA_ACCNAME"]+'</td>'),
                            // $('<td name="debet'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+data['b'][i]["saldo"]+'</td>'),
                            // $('<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">0</td>')
                            $('<td name="debet'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+sld+'</td>'),
                            $('<td name="credit'+data['b'][i]["COA_ACC"]+'" class="text-right chgnum">'+slc+'</td>')
                            ).appendTo('#tb_content');
                    }
                    dt_journal2();
                    $('td.chgnum').number(true);                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }

        function dt_tp1(v)
        {
            $('#dtb_rptsappr_t1').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    dataSrc: v
                },
            });
        }

        function dt_tp2(v)
        {
            $('#dtb_rptpappr_t2').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {visible: false, targets: v},                    
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    endRender: function(rows, group)
                    {
                        var sum = rows.data().pluck(7)
                        .reduce(function(a,b)
                        {
                            return a+b.replace(/[^\d]/g, '')*1;
                        }, 0);                        
                        sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(sum);
                        return $('<tr/>')                        
                        .append( '<td colspan="6" class="text-right">Sub Total</td>' )
                        .append( '<td class="text-right">'+sum+'</td>');
                    },
                    dataSrc: v
                },
                drawCallback: function(settings)
                {
                    var api = this.api(), data;
                    total = api.column(7).data().reduce( function (a,b)
                    {
                        return parseInt(a) + parseInt(b);
                    }, 0);                    
                    sum = $.fn.dataTable.render.number(',','.',0,'Rp ').display(total);
                    $('[name="grand-total"]').text(sum);
                }
            });
        }

        function dt_tp3(v)
        {
            $('#dtb_rptpappr_t3').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                // responsive: true,
                columnDefs:
                [
                    {orderable: false, targets: '_all'}
                ],
                // order: [[0, 'asc']],
                rowGroup:
                {
                    dataSrc: v
                },
            });
        }

        function pick_branch(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_branch/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="rptpappr_branch"]').text(data.BRANCH_NAME);


                    //update sistem - Logo Branch
                    var newSrc = "<?php echo base_url()?>/assets/img/branchlogo/"+data.BRANCH_LOGO;
                    $('#img_logo').attr('src', newSrc);

                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            })
        }
    </script>
</body>
</html>