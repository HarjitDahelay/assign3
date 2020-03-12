<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
$post=$_POST; //print_r($post); die;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
	<?php include('menu.php'); ?>
	<div class="col-sm-4 ">
		<div class="panel panel-success ">
			<div class="panel-heading"><b>Search</b></div>
			<div class="panel-body">
				<form name="cart" method="post" action="" onsubmit="return validateForm()">
				  <fieldset>
				    
						 <div class="form-group">
						    <select name="key" class="form-control">
						      <option value="Everithing">Everithing</option>
						      <option value="Parts">Parts</option>
						      <option value="Vendors">Vendors</option>
						    </select>
						  </div>
						
					</fieldset>
					<button type="submit" class="btn btn-primary btn-block create-account" name="submit" value="all">Submit</button>
				</form>
			</div>

		</div>
		</div>


		<div class="col-sm-4 ">
		<div class="panel panel-success ">
			<div class="panel-heading"><b>Search Parts</b></div>
			<div class="panel-body">
				<form name="cart" method="post" action="" onsubmit="return validateForm()">
				  <fieldset>
				    
						 <div class="form-group">
						   <input type="text" class="form-control" placeholder="Description" name="key">
						  </div>
						
					</fieldset>
					<button type="submit" class="btn btn-primary btn-block create-account" name="submit" value="Parts">Submit</button>
				</form>
			</div>

		</div>
		</div>


		<div class="col-sm-4 ">
		<div class="panel panel-success ">
			<div class="panel-heading"><b>Search Vendors</b></div>
			<div class="panel-body">
				<form name="cart" method="post" action="" onsubmit="return validateForm()">
				  <fieldset>
				    
						 <div class="form-group">
						    <input type="text" class="form-control" placeholder="Vendor Name" name="key">
						  </div>
						
					</fieldset>
					<button type="submit" class="btn btn-primary btn-block create-account" name="submit" value="Vendors">Submit</button>
				</form>
			</div>

		</div>
		</div>
</div>
<?php 
require("VendorTableData.php");
require("PartsTableData.php");
 ?>
<div class="container">
	<?php
    if(@$post['submit']=="all"){ ?>


	<center>
	<div class="col-sm-12 ">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Vendors</h3>
			</div>
			<div class="panel-body">
		<table class="table table-striped table-resposive">
			<?php
			if(@$post['key']=="Everithing" || @$post['key']=="Vendors"){
				CreateVendorTableHeader();
				FillVendorTable();
			}
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
		<table class="table table-striped table-resposive">
			<?php
			if(@$post['key']=="Everithing" || @$post['key']=="Parts"){
				CreatePartsTableHeader();
				FillPartsTable();
			}
			?>
		</table>
	</div>
</div>
	</div>
	</center>



	<?php  } ?>

	<?php
    if(@$post['submit']=="Parts"){ ?>
	<center>
	<div class="col-sm-12 ">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Parts</h3>
			</div>
			<div class="panel-body">
		<table class="table table-striped table-resposive">
			<?php
				CreatePartsTableHeader();
				FillPartsTable($post['key']);
			?>
		</table>
	</div>
</div>
	</div>
	</center>
	<?php  } ?>

	<?php
    if(@$post['submit']=="Vendors"){ ?>
	<center>
	<div class="col-sm-12 ">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3>Vendors</h3>
			</div>
			<div class="panel-body">
		<table class="table table-striped table-resposive">
			<?php
				CreateVendorTableHeader();
				FillVendorTable($post['key']);
			?>
		</table>
	</div>
</div>
	</div>
	</center>
	<?php  } ?>

</div>
<script type="text/javascript" src="resource/index.js"></script>

</body>
</html>