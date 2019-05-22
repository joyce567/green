<?php
include('connect.php');
include('process_login.php');
?>
<html>
<head>

<title>Contacts</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
</head>
<body>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>id</td>
						<td>Name</td>
						<td>Email</td>
						<td>Phone Number</td>
                        <td>Message</td>
                        <td>Actions</td>
					</tr>
				</thead>
				<tbody>
					<?php
						$select="SELECT * FROM contact";
						$select_query=mysqli_query($conn,$select);
						while($row=mysqli_fetch_array($select_query)){
					?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['pnumber']?></td>
                        <td><?php echo $row['message']?></td>
						
						<?php echo "<td> <a href='view-contact.php?id=".$row['id']."' class='btn btn-success'>View</a></td>"?>
						<?php echo "<td> <a href='update-contact.php?id=".$row['id']."' class='btn btn-primary'>Update</a></td>"?>
						<?php echo "<td> <a href='delete-contact.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>"?>
					</tr>
					<?php
					}
					?>
				</tbody>
		
		</div>
	
	</div>


</body>

</html>
