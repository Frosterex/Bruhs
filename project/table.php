<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="index.css" type="text/css" />	
</head>
<header class="mainHeader">
	<img src="lol.gif" width="150px">
			<nav><ul>
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="table.php">Introduction</a></li>
				<li><a href="#">Schedule</a></li>
				</ul></nav>
</header>	


<body>
<style>
	#books{
		color: blue;
		border-color: red;
	}	
</style>	
<?php 
	
	include_once "test.php";
	
	$sql = "SELECT id, coursename, price, description, courseduration, Availseat from tbltable";
	
	$result = mysqli_query($cnn, $sql);
	
	if(mysqli_num_rows($result)>0){
	?>
	
	<table id="books" width="800" border="1">
	<tbody>
		<tr>
		<th scope="col">ID</th>
		<th scope="col">Coursename</th>
		<th scope="col">Price</th>
		<th scope="col">Description</th>
		<th scope="col">Courseduration</th>
		<th scope="col">Avaliseat</th>	
		</tr>
		
	<?php 
	while($row = mysqli_fetch_assoc($result)){
	?>
	
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['coursename'];?></td>
	<td><?php echo $row['price'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['courseduration'];?></td>
	<td><?php echo $row['Availseat'];?></td>
	</tr>
	
		<?php
	}
		?>
	</tbody>
	</table>
	<?php
	}else{
		echo "<br>";
		echo "No result.";
	}
	?>