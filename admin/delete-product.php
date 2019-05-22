<?php
include('connect.php');
$id=$_GET['id'];
$query=("delete from product where id='$id'");
$delete_query=mysqli_query($conn,$query);
if($delete_query){
	echo"<script>window.alert('successfully deleted')</script>";
	header('refresh:0;url=product_records.php');
}
else{
	echo"<script>window.alert('failed')</script>";
	header('refresh:0;url=product_records.php');
}

?>