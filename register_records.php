<?php
include('admin/connect.php');
include('admin/process_login.php');
?>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Elements - Dark Admin</title>

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
                <a class="navbar-brand" href="index.html">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li class="selected"><a href="tables.html"><i class="fa fa-list-ul"></i> Tables</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message"></span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </nav>
		<div class="container">
			<div class="table-responsive">
				<h4>Registration Table</h4>
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
