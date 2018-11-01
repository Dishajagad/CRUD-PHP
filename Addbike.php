<?php
	session_start();
	include_once('config.php');
	
	if(isset($_POST['add']))
	{
		$id=$_POST['id'];
		$bike_nm=$_POST['bike_name'];
		$bike_prc=$_POST['bike_price'];
		$bike_desc=$_POST['bike_desc'];
		$bike_md=$_POST['bike_model'];
		$bike_tp=$_POST['bike_type'];
		
		
			/*f (isset($_FILES['bike_image']['name'])) {
			move_uploaded_file($_FILES['bike_image']['name'],"image/".$_FILES['bike_image']['name']);
			$bike_img=$_FILES["bike_image"]["name"];
			
			}*/ 
		
		$sql="INSERT INTO bikes(bike_name,bike_price,bike_desc,bike_model,bike_type) VALUES('$bike_nm','$bike_prc','$bike_desc','$bike_md','$bike_tp')";
		
		if($con->query($sql))
		{
			$_SESSION['success']='Bike added successfully';
		}
		else
		{
			$_SESSION['error']='something wrong';
		}
		header('location:view.php');
	}
	else{
		
		$_SESSION['error']="Fill up the form first";
	}
	


?>