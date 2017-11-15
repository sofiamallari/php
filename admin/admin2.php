<?php 
session_start();
/*if(isset($_SESSION['logged_in'])==0){
	header('Location: ../admin/admin.php');
}else{
	header('Location: ../register/register.php');
}*/
if(empty($_SESSION['user_id'])){
	header("location: ../login.php");
}
	ob_start();
	include ('../connect/conn.php');
	include('table.html');

$query = "SELECT * FROM reg";
$result = mysqli_query($conn, $query); 
if (mysqli_num_rows($result) == 0) {
		echo "No rows found";
		exit;
}
?>
<div class="container">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<!--<div class="show-entries">
							<span>Show</span>
							<select>
								<option>5</option>
								<option>10</option>
								<option>15</option>
								<option>20</option>
							</select>
							<span>entries</span>
						</div>-->						
					</div>
					<div class="col-sm-4">
						<h2 class="text-center">Customer <b>Details</b></h2>
					</div>
                    <div class="col-sm-4">
                        <div class="search-box">
							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
								<input type="text" class="form-control" placeholder="Search&hellip;">
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
						<th>id</th>
						<th>Email</th>
						<th>Password</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Middle Name</th>
						<th>Gender</th>
                        <th>Status</th>
						<th><center>Action</center></th>
						<th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						
                      <?php
                        while($row =(mysqli_fetch_assoc($result))){
									if($row['Status']!=2){
                      ?>
										<tr>
										<td> <?php echo $row['user_id']?><td>
										 <?php echo $row['email']?>
										<td> <?php echo $row['password']?><td>
										 <?php echo $row['fname']?>
										<td> <?php echo $row['lname']?><td>
										<?php echo $row['mname']?>
										<td> <?php echo $row['gender']?><td>
										<?php echo $row['Status']?>
										<td>
											<a href="?act=<?php echo $row['user_id']?>" class="btn btn-default btn-xs">Activate</a>
											<a href="?deact=<?php echo $row['user_id']?>" class="btn btn-default btn-xs">Dectivate</a>
										</td>
										<td>
											<a href="admin_insert.php?id=<?php echo $row['user_id']?>" class="view" title="Insert" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
											<a href="admin_update.php?idd=<?php echo $row['user_id']?>"class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254; </i><?php echo $row['user_id']?></a>
											<a href="?iddd=<?php echo $row['user_id']?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
										</td>
										</tr>
                    </tr>	
                </tbody>
<?php		
}
else{
		echo " ";
									}}
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
