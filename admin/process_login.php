<?php
session_start();
$conn=mysqli_connect("localhost","root","","cardio") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$admin=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username';");
	
	$row2=mysqli_num_rows($admin);
	
	if($row2<1){
		header("Location: login.php?nouser");
		 
		 }
	else{
			$row=mysqli_fetch_assoc($admin);

			if($row["password"] == $password){
				$_SESSION['username'] = $row["username"];
				header("Location: forms.html");
			}else{
				header("Location: login.php?wrongpwd");
			}
			
			
				
		
		
		
	
}
}
?>