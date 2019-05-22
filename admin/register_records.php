<?php
include('connect.php');
include('process_login.php');
?>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <strong><h2>Administrator</h2></strong>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="records.php"><i class="fa fa-list-ul"></i>Contacts</a></li>
                    <li><a href="product_records.php"><i class="fa fa-list-ul"></i>Products</a></li>
                    <li><a href="register_records.php"><i class="fa fa-list-ul"></i>Registration</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                        <a href="logout.php"><i class="fa fa-power-off"></i>Log Out</a>
                </ul>
            </div>
        </nav>
        
        <div class="container">
                <div class="table-responsive">
                    <h3><strong>Registration Table</strong></h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>Name</td>
                                <td>Phone Number</td>
                                <td>ID number</td>
                                <td>Duration</td>                
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select="SELECT * FROM sign";
                                $select_query=mysqli_query($conn,$select);
                                while($row=mysqli_fetch_array($select_query)){
                            ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['phonenumber']?></td>
                                <td><?php echo $row['idnumber']?></td>
                                <td><?php echo $row['duration']?></td>
                                
                                <?php echo "<td> <a href='view-register.php?id=".$row['id']."' class='btn btn-success'>View</a></td>"?>
                                <?php echo "<td> <a href='update-register.php?id=".$row['id']."' class='btn btn-primary'>Update</a></td>"?>
                                <?php echo "<td> <a href='delete-register.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>"?>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            
        </div>
	</div>

</body>

</html>
