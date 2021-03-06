    <style type="text/css">
        .maxh{
            height: 300px;
            max-height: 300px;
            overflow-y: scroll;
        }
    </style>
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

                            <!-- <?php echo $isinya ?> -->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <div id="printableArea">
                            <table id="dataTables" class="table table-bordered table-hover table-striped iki" cellspacing="0" width="100%">
                                <form name="form1" action="#" method="post">
                                <?php 
                                $i=1;
                                 foreach($reminder as $d){ 
                                ?>
                                    <tr>
                                        <td>Nama Reminder</td>
                                        <td>:</td>
                                        <td><?php echo $d->nama_reminder ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis</td>
                                        <td>:</td>
                                        <td><?php echo $d->jenis ?></td>
                                    </tr>
                                    <tr>
                                        <td>Info</td>
                                        <td>:</td>
                                        <td><?php echo $d->info_reminder ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Jatuh Tempo</td>
                                        <td>:</td>
                                        <td><?php echo date('d - m - Y',strtotime($d->tanggal_batas)) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Departemen</td>
                                        <td>:</td>
                                        <td><?php echo $d->deptini ?></td>
                                    <tr>
                                        <td>E-mail Atasan</td>
                                        <td>:</td>
                                        <td><?php echo $d->email_atasan ?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            </div>
                            <table>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-default" onclick="printDiv('printableArea')" value="print a div!">Cetak</button>
                                        </td>
                                        <td>
                                            <button type="button" onclick="window.location.href='<?php echo base_url()?>projectreminder/reminder/cetak'" class="btn btn-default">Batal</button>
                                        </td>
                                    </tr>
                                 </form>
                            </table>
                        </div>
                    </div>  
                        </div>
                    </div>                    
                </div>
            </div>
		</div>
	</div>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>