<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script type="text/javascript" src="resource/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
<?php include('menu.php');
require("VendorTableData.php");
require("PartsTableData.php");
 ?>
	<center>
	<div class="col-sm-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Vendors</h3>
			</div>
			<div class="panel-body">
				<table class="table table-strped table-resposive">
			<?php
				CreateVendorTableHeader();
				FillVendorTable();
			?>
		</table>
			</div>
		</div>
		
	</div>
	<div class="col-sm-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Parts</h3>
			</div>
			<div class="panel-body">
				<table class="table table-strped table-resposive">
			<?php
				CreatePartsTableHeader();
				FillPartsTable();
			?>
		</table>
			</div>
		</div>
		
	</div>
	</center>
</div>


<script type="text/javascript" src="resource/index.js"></script>

</body>
</html>