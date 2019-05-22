<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"cardio");

$name=$_POST['name'];
$phonenumber=$_POST['pnumber'];
$idno=$_POST['idno'];
$duration=$_POST['time'];

$query="insert into sign(id,name,phonenumber,idnumber,duration)VALUES(null,'$name','$phonenumber','$idno', '$duration')";
$insert=mysqli_query($conn,$query);

if($insert){
    echo'<script>window.alert("You have successfully registered with us,please visit our offices for more directions")</script>';
    header('refresh:0;url=forms.html');
}
else{
    echo'<script>window.alert("failed")</script>';
}
?>