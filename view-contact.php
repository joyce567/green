<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM contact WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$name=$row['name'];
		$email=$row['email'];
        $pnumber=$row['pnumber'];
        $message=$row['message'];
		$uid=$row['id'];
	}
}
?>
<html>
<head>
	<title>view</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
</head>
<body>
	<div class="container-fluid">
        <form action="register.php" method="POST">
            Id:<br>
            <input type='int' name="id" value="<?php echo $id;?>"><br>
            Name:<br>
            <input type='text' name="name" value="<?php echo $name;?>"><br>
            Email:<br>
            <input type='email' name="email" value="<?php echo $email;?>"><br>
            Phone number:<br>
            <input type="text" name="pnumber" value="<?php echo $pnumber;?>"><br>
            Message:<br>
            <textarea  name="message" value="<?php echo $message;?>"></textarea>
        </form>
	
	</div>

</body>

</html>
