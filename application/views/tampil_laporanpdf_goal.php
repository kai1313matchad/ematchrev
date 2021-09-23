<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.table th
    {
        border: solid 1px black !important;
        margin: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        font-size: 12px;
    }
    .table td
    {
        border: solid 1px black !important;
        margin: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        font-size: 12px;
    }
    .namag {
    	font-size: 12px;
    }
    .table{
        width: 100%;
    }
</style>
<body>
	<div class="container">
			<center><h4 class="page-header"><?= $header."<br>".$namadept."<br>".$tanggal; ?></h4></center>
			<?php echo $tampil; ?>
	</div>
	
</body>
</html>