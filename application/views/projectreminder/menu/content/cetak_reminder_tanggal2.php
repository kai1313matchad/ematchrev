<head>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">   
        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/datatables/css/responsive.dataTables.css')?>" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    
        <style type="text/css">
            .maxh{
                    height: 300px;
                    max-height: 300px;
                    overflow-y: scroll;
                }
        </style>
</head>
<body>
    <div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Cetak Data Jatuh Tempo</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-sm-offset-0 col-xs-offset-0">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Data Jatuh Tempo</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 table-responsive">
                                    <div id="printableArea">
                                        <table id="dtb_Reminder" class="table table-bordered table-hover table-striped iki" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Nama Reminder</th>
                                                    <th>Jenis Reminder</th>
                                                    <th>Info</th>
                                                    <th>Tanggal Jatuh Tempo</th>
                                                    <th>Departemen</th>
                                                    <th>E-ail Atatasn</th>
                                                    <th>Tanggal Reminder</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tb_content">
                                                <?php 
                                                    $i=1;
                                                    foreach($reminder as $d){ 
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->nama_reminder ?></td>
                                                    <td><?php echo $d->jenis ?></td>
                                                    <td><?php echo $d->info_reminder ?></td>
                                                    <td><?php echo date('d - m - Y',strtotime($d->tanggal_batas)) ?></td>
                                                    <td><?php echo $d->deptini ?></td>
                                                    <td><?php echo $d->email_atasan ?></td>
                                                    <td><?php echo $d->tgl_reminder ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>    
                                </div>
                                <table>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <!-- <td>
                                                <button type="button" class="btn btn-default" onclick="printDiv('printableArea')" value="print a div!">Download</button>
                                            </td> -->
                                            <td>
                                                <button type="button" onclick="window.location.href='<?php echo base_url()?>projectreminder/reminder/cetak'" class="btn btn-default">Batal</button>
                                            </td>
                                        </tr>
                                </table>
                            </div>  
                        </div>
                    </div>                    
                </div>
            </div>
		</div>
	</div>
</body>
<!-- jQuery -->
<?php include 'application/views/projectreminder/menu/layout/jspack.php' ?>
<script>
$(document).ready(function()
        {
            dtable();
        });

function dtable()
        {
            $('#dtb_Reminder').DataTable({
                info: false,
                searching: false,
                bLengthChange: false,
                paging: false,
                ordering: false,
                columnDefs:
                [
                    {className: 'text-center', targets: '_all'},
                    {orderable: false, targets: '_all'}
                ],
                dom: 'Bfrtip',
                buttons: 
                {
                    dom: 
                    {
                        button: 
                        {
                            tag: 'button',
                            className: 'btn btn-sm btn-info'
                        }
                    },
                    buttons: ['excelHtml5','print']
                }
            });
        }

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>