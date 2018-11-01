<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM bikes WHERE id = '".$_GET['id']."'";

		
		if($con->query($sql)){
			$_SESSION['success'] = 'Bike deleted successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in deleting bike';
		}
	}
	else{
		$_SESSION['error'] = 'Select Bike to delete';
	}

	header('location:view.php');
?>