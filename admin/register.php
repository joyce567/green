<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"cardio");

$name=$_POST['name'];
$email=$_POST['email'];
$pnumber=$_POST['pnumber'];
$message=$_POST['message'];

$query="INSERT INTO contact(id,name,email,pnumber,message)VALUE(NULL,'$name','$email','$pnumber','$message')";
$insert=mysqli_query($conn,$query);
if($insert){
    echo'<script>window.alert("Thank you for contacting us,we will get back to you")</script>';
    header('refresh:1;url=records.php');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:0;url=update-contact.php');
}

?>