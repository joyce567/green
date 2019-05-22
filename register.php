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
    echo'<script>window.alert("Success")</script>';
    header('refresh:1;url=index.html');
}else{
    echo'<script>window.alert("failed!")</script>';
    header('refresh:0;url=index.html');
}

?>