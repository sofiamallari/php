<html>
<?php
	include("heading.php");
	if(empty($_SESSION['user_id']))
		header("location: login.php");
	else{
		include ('connect/conn.php');

		// user procedural connection
		$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
		$row = mysqli_fetch_assoc($result);
	}
?>	
	<body>
	
		<div class = "container">
			<div class = "row">
				<div class = "panel-heading">
					<h3>Wishlist </h3>
				</div>
				<a href="wish.php">
				<button type = "submit" class = "btn btn-primary" name = 'wist'>Modify Wishlist</button>				
				</a>
				<div class = "panel-heading">
					<h3>Cart</h3>
				</div>
				<a href="cart.php">
				<button type = "submit" class = "btn btn-primary" name = 'wist'>Modify Cart</button>				
				</a>
				<div class = "col-sm-12">
					<div class = "panel">
						<div class = "panel-heading">
							<h3> Account Details </h3>
						</div>

						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-6">
								<tbody>
									<tr>
										<th> Email Address </th>
										<td> <?php echo $row['email'] ?> </td>
									</tr>
									<tr>
										<th> Given Name </th>
										<td> <?php echo $row['fname'] ?> </td>
									</tr>
									<tr>
										<th> Middle Name </th>
										<td> <?php echo $row['mname'] ?> </td>
									</tr>
									<tr>
										<th> Surname </th>
										<td> <?php echo $row['lname'] ?> </td>
									</tr>
									<tr>
										<th> Gender </th>
										<td> <?php echo $row['gender'] == 'male' ? 'Male' : "Female"; ?> </td>
									</tr>
								</tbody>
							</table>
							<a href="editDetails.php">
							<button type = "submit" class = "btn btn-primary" name = 'wist'>Edit Account</button>				
							</a>
						</div>
					</div>
				</div>

			

		<div class = "container">
			<div class = "row">

				<div class = "col-sm-12">
					<div class = "panel">
					
						<div class = "panel-heading col-sm-6">
							<h3> Billing Address</h3>
						</div>
						
						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-6">
								<tbody>
									<tr>
										<th>Contact Number: </th>
										<td><?php echo $row['contact'];?> </td>
										<th>Street: </th>
										<td><?php echo $row['street'];?> </td>
									</tr>
									<tr>
										<th>Barangay: </th>
										<td> <?php echo $row['barangay'];?></td>
										<th>City: </th>
										<td><?php echo $row['city'];?> </td>
									</tr>
									<tr>
										<th>Zip: </th>
										<td><?php echo $row['zip']; ?> </td>
										<th>Landmark: </th>
										<td><?php echo $row['landmark']; ?> </td>
									</tr>
								</tbody>
							</table>
							<a href="editDetails.php">
							<button type = "submit" class = "btn btn-primary" name = 'wist'>Edit Address</button>				
							</a>
						</div>
					</div>
					
				</div>



</html>