<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM sign WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
        $id=$row['id'];
		$name=$row['name'];
		$pnumber=$row['phonenumber'];
        $idno=$row['idnumber'];
        $duration=$row['duration'];
	}
}
?>
<html>
<head>
	<title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <style>
                
                input[type=int], select {
                  width: 60%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                }
                input[type=text], select {
                  width: 60%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                }
                input[type=submit], select {
                  width: 60%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                }
    </style>
</head>
<body>
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <center><h2>Update Registration</h2><center>
                    <hr>
                <form action="" method="POST">
                    Id:<br>
                    <input type='int' name="id" value="<?php echo $id;?>"><br>
                    Name:<br>
                    <input type='text' name="name" value="<?php echo $name;?>"><br>
                    Phone number:<br>
                    <input type="text" name="pnumber" value="<?php echo $pnumber;?>"><br>
                    ID number:<br>
                    <input type='text' name="idno" value="<?php echo $idno;?>"><br>
                    Duration:<br>
                    <input type='text' name="time" value="<?php echo $duration;?>"><br>
                
                    <input type="submit" name='submit' value="update" class="btn btn-info">
                </form>
            </div>
        </div>
	</div>

</body>

</html>

<?php
include('connect.php');
if(isset($_POST['submit'])){
    $uid=$_POST['id'];
    $uname=$_POST['name'];
    $upnumber=$_POST['pnumber'];
    $uidno=$_POST['idno'];
    $uduration=$_POST['time'];

    $queryupdate=mysqli_query($conn,"update sign set name='$uname',phonenumber='$upnumber',idnumber='$uidno', duration='$uduration' where id='$id'")or die(mysqli_error($conn));
   
    if($queryupdate){
        echo'<script>window.alert("successfully updated")</script>';
        header('refresh:0; url=register_records.php');
    }else{
        echo'failed';
    }
}
?>
