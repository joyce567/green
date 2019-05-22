<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM contact WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
        $id=$row['id'];
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
              
                input[type=email], select {
                  width: 60%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                }
                
                input[type=], select {
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
  
            <div class="container">
                <div class="row">
                    <div class="c0l-sm-3"></div>
                    <div class="col-sm-">
                    <center><h2>Update Contact</h2><center>
                   <hr>
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
                            <textarea  name="message" value="<?php echo $message;?>"></textarea><br><br>
                            <input type="submit" name='submit' value="Update" class="btn btn-info">
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
        $uemail=$_POST['email'];
        $upnumber=$_POST['pnumber'];
        $umessage=$_POST['message'];

        $queryupdate=mysqli_query($conn,"update contact set name='$uname',email='$uemail',pnumber='$upnumber', message='$umessage' where id='$id'")or die(mysqli_error($conn));

        if($queryupdate){
            echo'<script>window.alert("successffully updated")</script>';
            header('refresh:1; url=records.php');
        }else{
            echo'<script>window.alert("failed")</script>';
            header('refresh:0; url=records.php');
        }
    }
?>

