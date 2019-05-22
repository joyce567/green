<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"cardio");

$name=$_POST['name'];
$pnumber=$_POST['pnumber'];
$idno=$_POST['idno'];
$sname=$_POST['sname'];
$product=$_POST['product'];

$query="insert into product(id,name,phonenumber,idno,suppname,product)VALUES(null,'$name','$pnumber','$idno', '$sname','$product')";
$insert=mysqli_query($conn,$query);

if($insert){
    echo'<script>window.alert("Thank you for purchasing our products")</script>';
    header('refresh:0;url=records.php');
}
else{
    echo'<script>window.alert("failed")</script>';
}
?>