<?php
include('../connect/conn.php');
if(isset($_POST['Update'])){
				$idd=$_POST['user_id'];
				$email=$_POST['email'];
				$password=md5($_POST['pass']);
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$mname=$_POST['mname'];
				$gender=$_POST['gender'];
				$Status=$_POST['Status'];
				$r="UPDATE reg set 
						`email`='".$email."',
						`password`='".$password."',
						`fname`='".$fname."',
						`lname`='".$lname."',
						`mname`='".$mname."',
						`gender`='".$gender."',
						`Status`='".$Status."'
						WHERE user_id='$idd'
						";
	mysqli_query($conn,$r);
	echo $conn->error;
}
else if(isset($_POST['productUpdate'])){
				$idd         = $_POST['prod_id'];
				$brand       = $_POST['brand'];
				$price       = $_POST['price'];
				$quantity    = $_POST['quantity'];
				$description = $_POST['description'];
				$color       = $_POST['color'];
				$gender      = $_POST['gender'];

	//$target_dir = "..\\images\\".$brand."\\";
	$target_dir = "images/".$brand."/";
	$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
	if($check !== false)
		$uploadOk = 1;
	else
		$uploadOK = 0;

	$sql = 	"SELECT COUNT(PROD_ID) FROM products WHERE brand = ".'"'.$brand.'"';
	$brandQuery = mysqli_query($conn, $sql);
	$brandCount = 0;
	
	if($brandQuery){
		$row    = mysqli_fetch_array($brandQuery);
		$brandCount = $row['COUNT(PROD_ID)'];  
	}	

	$filename = basename($_FILES['fileToUpload']['name']);
	$location = "..\\\images\\\\".$brand."\\\\".$filename;
			
	$query = "UPDATE products
							SET

							`brand`       = '".$brand."',
							`price`       = '".$price."',
							`quantity`    = '".$quantity."',
							`description` = '".$description."',
							`color`       = '".$color."',
							`gender`      = '".$gender."',
							`location`     = '".$location."' where products.prod_id = $idd";													
	
	echo $query;

	mysqli_query($conn, $query);
}
	header("location: admin.php");
?>
