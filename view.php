<!DOCTYPE html>
<html>
<head><title>CRUD USING PHP & BOOTSTARP</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="bike7.jpg">
<div class="page-header">	
<div class="container">
<center><h1>BIKERS</h1></center>
</div>
</div><table class="table table-bordered table-hover" width="50%">
<thead>
	<th>Bike ID</th>
	<th>Bike Name</th>
	
	<th>Bike Price</th>
	<th>Bike Descreiption</th>
	<th>Bike Model</th>
	<th>Bike Type</th>
	<th>Action</th>
</thead>
<tbody>
	<?php include('config.php');
	
		$sql="SELECT * FROM bikes";
		$query=$con->query($sql);
			while($row=$query->fetch_assoc()){ 		
			echo"<tr>
				<td>".$row['id']."</td>
				<td>".$row['bike_name']."</td>
			
				<td>".$row['bike_price']."</td>
				<td>".$row['bike_desc']."</td>
				<td>".$row['bike_model']."</td>
				<td>".$row['bike_type']."</td>
				<td>
					<a href='edit.php?id=".$row['id']."' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span></a>
					<a href='delete.php?id=".$row['id']."' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></a>
				</td>
			</tr>";
		}	
	?>
</tbody>
</table>
</body>
</html>