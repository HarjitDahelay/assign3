<?php

	include("connection.php");

	function FillVendorTable($key=null)
	{
		if($key != null){
       	$where=" where VendorName='%$key%'";
       }
       else{
       	$where="";
       }
		$tableBodyText = "";

		$connection = ConnectToDatabase();

		 $querySelect = "SELECT VendorNo,VendorName,Address1,Address2,City,Prov,PostCode,Country,Phone,Fax FROM Vendors".$where; //print_r($querySelect); die;
		$preparedQuerySelect = $connection -> prepare($querySelect);
		$preparedQuerySelect -> execute();

		while ($row = $preparedQuerySelect -> fetch())
		{

			$vendorNo = $row['VendorNo'];
			$vendorName = $row['VendorName'];

			$tableBodyText .= "<tr>";
			$tableBodyText .= "<td>".$row['VendorNo']."</td>";
			$tableBodyText .= "<td>".$row['VendorName']."</td>";
			$tableBodyText .= "<td>".$row['Address1']."</td>";
			$tableBodyText .= "<td>".$row['Address2']."</td>";
			$tableBodyText .= "<td>".$row['City']."</td>";
			$tableBodyText .= "<td>".$row['Prov']."</td>";
			$tableBodyText .= "<td>".$row['PostCode']."</td>";
			$tableBodyText .= "<td>".$row['Country']."</td>";
			$tableBodyText .= "<td>".$row['Phone']."</td>";
			$tableBodyText .= "<td>".$row['Fax']."</td>";
			$tableBodyText .= "</tr>";

		}

		echo $tableBodyText;

	}


	function CreateVendorTableHeader()
	{

		$text = "<tr id='tableHeader'>";
		$text .= "<th>VendorNo</th>";
		$text .= "<th>VendorName</th>";
		$text .= "<th>Address1</th>";
		$text .= "<th>Address2</th>";
		$text .= "<th>City</th>";
		$text .= "<th>Prov</th>";
		$text .= "<th>PostCode</th>";
		$text .= "<th>Count</th>";
		$text .= "<th>Phone</th>";
		$text .= "<th>Fax</th>";

		$text .= "</tr>";

		echo $text;

	}

?>



