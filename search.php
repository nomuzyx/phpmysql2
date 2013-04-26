<?php
include 'mysqlcon.php';
    if (!empty($_POST['searchtype']))
    {
    	$searchtype=$_POST['searchtype'];
    }
		
    if (!empty($_POST['searchterm']))
    {
    	$searchterm=$_POST['searchterm'];	
    }

	if (empty($searchtype) || empty($searchterm))
	{
		$result = mysqli_query($con,"SELECT * FROM staff");
	}
	else
	{
		
	    $searchterm=trim($searchterm);

		$searchtype= mysql_real_escape_string($searchtype);
		$searchterm= mysql_real_escape_string($searchterm);

		$qry="SELECT * FROM staff WHERE ".$searchtype." like '%".$searchterm."%'";

		$result = mysqli_query($con,$qry);
	}	
	
?>
		  	