<?php 
include('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
$post=$_POST;
$connection = ConnectToDatabase();
$sql="INSERT INTO Parts(PartID, VendorNo, Description, OnHand, OnOrder, Cost, ListPrice) VALUES (?, ?, ?, ?, ?, ?, ?)";

		$statement = $connection->prepare($sql);
       $statement->execute([$post['PartID'], $post['VendorNo'], $post['Description'], $post['OnHand'], $post['OnOrder'], $post['Cost'], $post['ListPrice']]);
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
	
</head>
<body>
<div class="container">
	<?php include('menu.php'); ?>
	<div class="col-sm-5 ">
		
		<div class="panel panel-success ">
			<div class="panel-heading"><b>Parts Detail</b></div>
			<div class="panel-body">
<form name="PartF" method="post" action="" onsubmit="return validateFormp()">
  <fieldset>
    
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Part ID<span class="text-danger">*</span></label>
		  <input type="text" name="PartID" value="" class="form-control" id="nameValid">
		  <div class="text-danger text-danger" id="id-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Vendor Number<span class="text-danger">*</span></label>
		  <input name="VendorNo" type="text" value="" class="form-control" id="emailValid">
		  <div class="text-danger" id="vendor-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Description<span class="text-danger">*</span></label>
		  <input type="text" name="Description" value="" class="form-control" id="phone">
		  <div class="text-danger"  id="desc-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">On Hand<span class="text-danger">*</span></label>
		  <input type="text" name="OnHand" value="" class="form-control" id="addValid">
		  <div class="text-danger"  id="hand-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">On Order<span class="text-danger">*</span></label>
		  <input type="text" name="OnOrder" value="" class="form-control" id="cityValid">
		  <div class="text-danger"  id="order-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Cost<span class="text-danger">*</span></label>
		  <input type="text" name="Cost" value="" class="form-control" id="postal">
		  <div class="text-danger"  id="cost-feed"></div>
		</div>
		<div class="form-group has-success">
		  <label class="form-control-label" for="inputSuccess1">Last Price<span class="text-danger">*</span></label>
		  <input type="text" name="ListPrice" value="" class="form-control" id="provinceValid">
		  <div class="text-danger" id="price-feed"></div>
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