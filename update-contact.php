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
	}
}
?>
<html>
<head>
	<title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
</head>
<body>
	<div class="container-fluid">
        <form action="" method="POST">
            Id:<br>
            <input type='int' name="id" value="<?php echo $id;?>"><br>
            Name:<br>
            <input type='text' name="name" value="<?php echo $name;?>"><br>
            Email:<br>
            <input type='email' name="email" value="<?php echo $email;?>"><br>
            Phone number:<br>
            <input type="text" name="pnumber" value="<?php echo $pnumber;?>"><br>
            Message:<br>
            <input type="text"  name="message" value="<?php echo $message;?>">

            <input type="submit" name='submit' value="update" class="btn btn-info">
        </form>
	</div>
</body>

</html>

<?php
include('connect.php');
if(isset($_POST['submit'])){
    $uname=$_POST['name'];
    $uemail=$_POST['email'];
    $upnumber=$_POST['pnumber'];
    $umessage=$_POST['message'];

    $queryupdate=mysqli_query($conn,"update contact set name='$name',email='$email',pnumber='$pnumber', message='$message' where id='$id'")or die(mysqli_error($conn));

    if($queryupdate){
        echo'<script>window.alert("successfully updated")</script>';
        header('refresh:0; url=records.php');
    }else{
        echo'<script>window.alert("failed")</script>';
        header('refresh:0; url=records.php');
    }
}
?>
