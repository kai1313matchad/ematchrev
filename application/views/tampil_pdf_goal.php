<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	li {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		line-height: 1.1em;
	}
	td {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 16px;
	}
	#marg {
		padding-left: 20px;
	}
</style>
</head>
<body>
	<div class="container">
		<table width="100%">
			<tr>
				<td width="20%">
					<img class="img-responsive" src="<?php echo base_url()?>assets/img/logo.png" width="150px">
				</td>
				<td width="80%" align="center">
					<u>LAPORAN LIST GOAL</u>
					<br>
					<?php echo $dept; ?>
				</td>
			</tr>
		</table>
		<hr>
		<div id="marg">
			<?php echo $goal; ?>	
		</div>
		
	</div>
</body>
</html>



