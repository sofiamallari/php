<?php
	session_start();
	
	/*
	if(isset($_SESSION['logged_in'])==0)
		header('Location: ../admin/admin.php');
	else
		header('Location: ../register/register.php');
	*/
	
	if(empty($_SESSION['user_id']))
		header("location: ../login.php");
	
	ob_start();
	include('../connect/conn.php');
	include('table.html');
	
	$query = "SELECT * FROM reg";
	$result = mysqli_query($conn, $query);
	
	$product_query = "SELECT * FROM products ";
	$product_result = mysqli_query($conn, $product_query);
	
	if(mysqli_num_rows($result) == 0){
		echo "No rows found";
		exit;
	}
?>

<div class = 'container'>
	<div class = 'table-wrapper'>
		<div class = 'table-title'>
			<div class = 'row'>
				<div class = 'col-sm-4'>
					<!--
					<div class = 'show-entries'>
						<span> Show </span>
						<select>
							<option> 5 </option>
							<option> 10 </option>
							<option> 15 </option>
							<option> 20 </option>
						</select>
						<span> entries </span>
					</div>
					-->
				</div>
				
				<div class = 'col-sm-4'>
					<h2 class = 'text-center'> Customer <b>Details</b> </h2>
				</div>
				
				<div class = 'col-sm-4'>
					<div class = 'search-box'>
						<span class = 'input-group-addon'> <i class = 'material-icons'> &#xE8B6; </i> </span>
						<input type = 'text' class = 'form-control' placeholder = 'Search&hellip;'>
					</div>
				</div>
			</div>
		</div>
		
		<table class = 'table table-bordered'>
			<thead>
				<tr>
					<th><center>ID</th>
					<th><center>Email</th>
					<th><center>Password</th>
					<th><center>First Name</th>
					<th><center>Last Name</th>
					<th><center>Middle Name</th>
					<th><center>Gender</th>
					<th><center>Status</th>
					<th><center>Action</center></th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<?php
						while($row = (mysqli_fetch_assoc($result))){
							if($row['Status'] != 2){
							
					?>			
								<tr>
								<td> <center> <?php echo $row['user_id']?>
								<td> <center> <?php echo $row['email']?>
								<td> <center> <?php echo $row['password']?>
								<td> <center> <?php echo $row['fname']?>
								<td> <center> <?php echo $row['lname']?>
								<td> <center> <?php echo $row['mname']?>
								<td> <center> <?php echo $row['gender']?>
								<td> <center> <?php echo $row['Status']?>
								<td> <center>
									<a href='?act=<?php echo $row['user_id']?>' class = 'btn btn-default btn-xs'>Activate</a>
									<a href='?deact=<?php echo $row['user_id']?>' class = 'btn btn-default btn-xs'>Dectivate</a>
								</td>
								<td> <center>
									<a href="admin_insert.php?id=<?php echo $row['user_id']?>" class="view" title="Insert" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
									<a href="admin_update.php?idd=<?php echo $row['user_id']?>"class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254; </i></a>
									<a href="?iddd=<?php echo $row['user_id']?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
								</td>
								</tr>
				</tr>
				
				<?php
							
					}else{
						echo " ";
							}
						}
						
						if(isset($_GET['act'])){
							$act=$_GET['act'];
							mysqli_query($conn,"update reg set Status='1' where user_id='$act'");
						}
						
						if(isset($_GET['deact'])){
							$deact=$_GET['deact'];
							mysqli_query($conn,"update reg set Status='0' where user_id='$deact'");
						}
						
						if(isset($_GET['iddd'])){
							$iddd=$_GET['iddd'];
							mysqli_query($conn,"delete from reg where user_id='$iddd'");
						}						
					
					echo "<div style = 'float: right'><a href = '../logout.php'>Logout</a></div>";

				?>
			</tbody>
		</table>
	</div>
</div>
			
<div class = 'container'>
	<div class = 'table-wrapper'>
		<div class = 'table-title'>
			<div class = 'row'>
				<div class = 'col-sm-4'>
					<!--
					<div class = 'show-entries'>
						<span> Show </span>
						<select>
							<option> 5 </option>
							<option> 10 </option>
							<option> 15 </option>
							<option> 20 </option>
						</select>
						<span> entries </span>
					</div>
					-->
				</div>
				
				<div class = 'col-sm-4'>
					<h2 class = 'text-center'> Product <b>Details</b> </h2>
				</div>
				
				<div class = 'col-sm-4'>
					<div class = 'search-box'>
						<span class = 'input-group-addon'> <i class = 'material-icons'> &#xE8B6; </i> </span>
						<input type = 'text' class = 'form-control' placeholder = 'Search&hellip;'>
					</div>
				</div>
			</div>
		</div>
		
		<table class = 'table table-bordered'>
			<thead>
				<tr>
					<th><center>Product ID</center></th>
					<th><center>Brand</center></th>
					<th><center>Price</center></th>
					<th><center>Quantity</center></th>
					<th><center>Description</center></th>
					<th><center>Color</center></th>
					<th><center>Gender</center></th>
					<th><center>Location</center></th>
					<th><center>Status<center></th>
					<th><center>Action</center></th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			
						<tbody>
				<tr>
					<?php
						while($row = (mysqli_fetch_assoc($product_result))){
							if(true){
							
					?>			
								<tr>
								<td> <center> <?php echo $row['prod_id']?>
								<td> <center> <?php echo $row['brand']?>
								<td> <center> <?php echo "₱".$row['price']?>
								<td> <center> <?php echo $row['quantity']?>
								<td> <center> <?php echo $row['description']?>
								<td> <center> <?php echo $row['color']?>
								<td> <center> <?php echo $row['gender']?>
								<td> <center> <?php echo $row['location']?>
								<td> <center> <?php echo $row['status']?>
								<td> <center>
									<a href='?act=<?php echo $row['prod_id']?>' class = 'btn btn-default btn-xs'>Activate</a>
									<a href='?deact=<?php echo $row['prod_id']?>' class = 'btn btn-default btn-xs'>Dectivate</a>
								</td>
								<td> <center>
									<a href='product_insert.php?id=<?php echo $row['prod_id']?>' class="view" title="Insert" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
									<a href="product_update.php?idd=<?php echo $row['prod_id']?>"class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254; </i></a>
									<a href="?iddd=<?php echo $row['prod_id']?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
								</td>
								</tr>
				</tr>
				
				<?php
							
							}else
								echo " ";	
						}
						
						if(isset($_GET['act'])){
							$act=$_GET['act'];
							mysqli_query($conn,"update products set Status='1' where prod_id='$act'");
						}
						
						if(isset($_GET['deact'])){
							$deact=$_GET['deact'];
							mysqli_query($conn,"update products set Status='0' where prod_id='$deact'");
						}
						
						if(isset($_GET['iddd'])){
							$iddd=$_GET['iddd'];
							mysqli_query($conn,"delete from products where prod_id='$iddd'");
						}						
					
					echo "<div style = 'float: right'><a href = '../register/logout.php'>Logout</a></div>";

				?>
			</tbody>
		</table>
	</div>
</div>
			
			



