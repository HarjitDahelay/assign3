<?php

	function ConnectToDatabase()
	{

		$connectionString = 'odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\Users\dell\Desktop\setup\htdocs\Assignment4Files\\assignment5.mdb';

		$connection = new PDO($connectionString);
		$connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $connection;

	}

?>
