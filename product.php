<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"cardio");

$name=$_POST['name'];
$phonenumber=$_POST['pnumber'];
$idnum=$_POST['idno'];
$suppname=$_POST['sname'];
$product=$_POST['product'];

$query="insert into product(id,name,phonenumber,idno,suppname,product)VALUES(null,'$name','$phonenumber','$idnum', '$suppname','$product')";
$insert=mysqli_query($conn,$query);

if($insert){
    echo'<script>window.alert("Thank you for purchasing our products.")</script>';
    header('refresh:0;url=index.html');
}
else{
    echo'<script>window.alert("failed")</script>';
}
?>