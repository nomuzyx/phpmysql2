<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>
<body>
<?php
include 'search.php';
//include 'mysqlcon.php';
//$result=$_GET["result"];
?>
<div class="container" style="margin:2%">	
	<div class="row" style="margin:2%">
    		<div class="span5">
    			<a href="search.html">Search</a>  
  	  				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  	  			<a href="entryform.php?addedit=Add">Add</a>
  	  		</div>	
  	  		<div class="span7">
  	  		</div>	
	</div>
	<div class="row" style="margin:2%">
		<form class="form-search" action="index.php" method="post">
  	  		<div class="span12 control-group">		
					Choose Search Type:
					<select name="searchtype">
						<option value="name">Name</option>
						<option value="code">Code</option>
					</select>
					
					Enter Search Term:
					<input name="searchterm" type="text" value='<?php echo !empty($searchterm)? $searchterm : ""; ?>'>

					<button type="submit" class="btn btn-success">Search</button>
			</div>
		</form>	   	
	</div>
	<div class="row" style="margin:2%">
		<div class="span8">
			<table class="table table-striped table-bordered">
				<tr>
				<th>Code</th>
				<th>Name</th>
				<th>Action</th>
				</tr>
		</div>
		<div class="span4">
      		
	  	</div>	
	</div> 
</div>
<?php

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['code'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo '<td><a href="entryform.php?mcode='.$row['code'].'&addedit='."Edit".'">Edit</a></td>';
  echo '<td><a href="delete.php?mcode='.$row['code'].'">Delete</a> </td>';
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>