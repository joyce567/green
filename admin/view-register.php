<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM sign WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$name=$row['name'];
		$pnumber=$row['phonenumber'];
        $idno=$row['idnumber'];
        $duration=$row['duration'];
		$uid=$row['id'];
	}
}
?>
<html>
<head>
	<title>view</title>
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

</style>
</head>
<body>
	<div class="container-fluid">
       <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
           <center><h2>View Registration</h2><center>
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
             </form>
           </div>
       </div>
	
	</div>

</body>

</html>
