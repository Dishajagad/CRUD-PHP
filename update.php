<?php
	session_start();
	include_once('config.php');


	
	if(isset($_POST['edit'])){

		$id=$_POST['id'];
		$bike_nm=$_POST['bike_name'];
		$bike_prc=$_POST['bike_price'];
		$bike_des=$_POST['bike_desc'];
		$bike_md=$_POST['bike_model'];
		$bike_tp=$_POST['bike_type'];
		
			/*f (isset($_FILES['bike_image']['name'])) {
			move_uploaded_file($_FILES['bike_image']['name'],"image/".$_FILES['bike_image']['name']);
			$bike_img=$_FILES["bike_image"]["name"];
			
			}*/ 
		
		$sql="UPDATE bikes SET bike_name='$bike_nm' , bike_price='$bike_prc' , bike_desc='$bike_des' , bike_model='$bike_md' , bike_type='$bike_tp' WHERE id= '$id'";
		
		if($con->query($sql))
		{
			$_SESSION['success']='Bike Updated successfully';
		}
		else
		{
			$_SESSION['error']='something wrong';
		}
	}
		header('location:view.php');
		
?>