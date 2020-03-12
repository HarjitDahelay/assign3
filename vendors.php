<?php 
include('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
$post=$_POST;
$connection = ConnectToDatabase();
$sql="INSERT INTO Vendors (VendorNo, VendorName, Address1, Address2, City, Prov, PostCode, Country, Phone, Fax) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$statement = $connection->prepare($sql);
        $statement->execute([$post['VendorNo'], $post['VendorName'], $post['Address1'], $post['Address2'], $post['City'], $post['Prov'], $post['PostCode'], $post['Country'], $post['Phone'], $post['Fax']]);
		header('Location: index.php');
		}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>
<div class="container">
	<?php include('menu.php'); ?>
	<div class="col-sm-5 ">
		
		<div class="panel panel-success ">
			<div class="panel-heading"><b>Vendor Detail</b></div>
			<div class="panel-body">
<form name="vendorF" method="post" action="" onsubmit="return validateForm()">
  <fieldset>
    
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Vendor Number<span class="text-danger">*</span></label>
		  <input type="text" name="VendorNo" value="" class="form-control" id="numberValid">
		  <div class="text-danger" id="number-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Vendor Name<span class="text-danger">*</span></label>
		  <input name="VendorName" type="text" value="" class="form-control" id="nameValid">
		  <div class="text-danger" id="name-feed"></div>
		</div>
		
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Address1<span class="text-danger">*</span></label>
		  <input type="text" name="Address1" value="" class="form-control" id="add1Valid">
		  <div class="text-danger"  id="address1-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Address2<span class="text-danger">*</span></label>
		  <input type="text" name="Address2" value="" class="form-control" id="add2Valid">
		  <div class="text-danger"  id="address2-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">City<span class="text-danger">*</span></label>
		  <input type="text" name="City" value="" class="form-control" id="cityValid">
		  <div class="text-danger"  id="city-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Post Code<span class="text-danger">*</span></label>
		  <input type="text" name="PostCode" value="" class="form-control" id="postal">
		  <div class="text-danger"  id="postal-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Province<span class="text-danger">*</span></label>
		  <input type="text" name="Prov" value="" class="form-control" id="provinceValid">
		  <div class="text-danger" id="province-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Country<span class="text-danger">*</span></label>
		  <input type="text" name="Country" value="" class="form-control" id="country">
		  <div class="text-danger"  id="country-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Phone<span class="text-danger">*</span></label>
		  <input type="text" name="Phone" value="" class="form-control" id="phone">
		  <div class="text-danger"  id="phone-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Fax<span class="text-danger">*</span></label>
		  <input type="text" name="Fax" value="" class="form-control" id="prd2">
		  <div class="text-danger"  id="fax-feed"></div>
		</div>
		
		
		
		
	</fieldset>
	<button type="submit" class="btn btn-primary btn-block create-account">Submit</button>
</form>
	</div>
</div>
</div>
</div>

<script type="text/javascript" src="resource/index.js"></script>

</body>
</html>