<?php
include('connect.php');
if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM product WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$name=$row['name'];
		$pnumber=$row['phonenumber'];
        $idno=$row['idno'];
        $sname=$row['suppname'];
        $product=$row['product'];
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
               <center><h2>View Product</h2><center>
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
                    Supp Name:<br>
                    <input type='text' name="sname" value="<?php echo $sname;?>"><br>
                    Product:<br>
                    <select name="product" value="<?php echo $product;?>">:
                            <option>Green Tea 2300/=</option>
                            <option>Super Nutrition 3000/=</option>
                            <option>Kuding tea 1200/=</option>
                            <option>Ganoderma 2100/=</option>
                            <option>Propolis 2400/=</option>
                            <option>Eye Shine 5600/=</option>
                            <option>Vig power 3500/=</option>
                    </select>
                </form>
           </div>
       </div>
	
	</div>

</body>

</html>
