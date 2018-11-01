<!DOCTYPE html>
<html>
<head>
<title>CRUD USING PHP & BOOTSTARP</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body background="bike7.jpg">

<div class="page-header">	
<div class="container">
<center><h1>BIKERS</h1></center>
</div>
</div>
<div class="container">
<div class="col-md-12">
	<form action="Addbike.php" method="POST" enctype="multipart/form-data" class="transparent">
		<input type="hidden" name="id">
		<div class="item form-group">
			<label class="col-md-3">Bike Name:</label>
			<div class="col-md-9">
			<input type="text" name="bike_name" class="form-control" required/>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="item form-group">
			<label class="col-md-3">Bike Price:</label>
			<div class="col-md-9">
			<input type="number" name="bike_price" class="form-control" required/>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="item form-group">
			<label class="col-md-3">Bike Description:</label>
			<div class="col-md-9">
			<textarea rows="4" cols="120" name="bike_desc" class="form-control" required></textarea>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="item form-group">
			<label class="col-md-3">Bike Model:</label>
			<div class="col-md-9">
			<input type="text" name="bike_model" class="form-control" required/>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="item form-group">
			<label class="col-md-3">Bike Type:</label>
			<div class="col-md-8">
			<div class="radio-inline">
			<input type="radio" name="bike_type" value="NEW"  /><strong>NEW</strong>
			</div><div class="radio-inline">
			<input type="radio" name="bike_type" value="OLD" /><strong>OLD</strong>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 col-md-offset-3">
		<input type="submit" name="add" value="Add" class="btn btn-success"/>
		<a href='view.php' class='btn btn-danger'><span>Cancel</span></a>
		</div>
	</form>
	<div>
</div>
</body>
</html>