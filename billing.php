<?php
ob_start();
include('connect/conn.php');
if(isset($_POST['register'])){
				$idd=$_POST['user_id'];
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$mname=$_POST['mname'];
				$contact=$_POST['contact'];
				$street=$_POST['street'];
				$barangay=$_POST['barangay'];
				$city=$_POST['city'];
				$zip=$_POST['zip'];
				$landmark=$_POST['landmark'];
				$r="UPDATE reg set 
						`fname`='".$fname."',
						`lname`='".$lname."',
						`mname`='".$mname."',
						`contact`='".$contact."',
						`street`='".$street."',
						`barangay`='".$barangay."',
						`city`='".$city."',
						`zip`='".$zip."',
						`landmark`='".$landmark."',
						WHERE `reg`.`user_id`='$idd'
						";
	mysqli_query($conn,$r);
	echo $conn->error;
}
header("location: home.php");
?>
