<?php

include('db.php');
$id = $_GET['id'];
$delete = "DELETE FROM home WHERE id = $id";
$run_data = mysqli_query($con,$delete);

if($run_data){
	header('location:home.php');
}else{
	echo "Donot Delete";
}


?>