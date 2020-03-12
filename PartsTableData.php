<?php



	function FillPartsTable($key=null)
	{
       if($key != null){
       	$where=" where Description='%$key%'";
       }
        else{
       	$where="";
       }
		$tableBodyText = "";

		$connection = ConnectToDatabase();

		 $querySelect = "SELECT PartID,VendorNo,Description,OnHand,OnOrder,Cost,ListPrice FROM Parts".$where;
		$preparedQuerySelect = $connection -> prepare($querySelect);
		$preparedQuerySelect -> execute();

		while ($row = $preparedQuerySelect -> fetch())
		{
			$tableBodyText .= "<tr>";
			$tableBodyText .= "<td>".$row['PartID']."</td>";
			$tableBodyText .= "<td>".$row['VendorNo']."</td>";
			$tableBodyText .= "<td>".$row['Description']."</td>";
			$tableBodyText .= "<td>".$row['OnHand']."</td>";
			$tableBodyText .= "<td>".$row['OnOrder']."</td>";
			$tableBodyText .= "<td>".$row['Cost']."</td>";
			$tableBodyText .= "<td>".$row['ListPrice']."</td>";
			$tableBodyText .= "</tr>";

		}
		echo $tableBodyText;
	}

	function CreatePartsTableHeader()
	{

		$text = "<tr id='tableHeader'>";
		$text .= "<th>PartID</th>";
		$text .= "<th>VendorNo</th>";
		$text .= "<th>Description</th>";
		$text .= "<th>OnHand</th>";
		$text .= "<th>OnOrder</th>";
		$text .= "<th>Cost</th>";
		$text .= "<th>ListPrice</th>";
		$text .= "</tr>";

		echo $text;

	}

?>



