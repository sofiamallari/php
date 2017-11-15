<?php
		if(isset($_POST['register'])){
		$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL)); 
		$password =md5($_REQUEST['password']);
		$fname =trim(filter_input(INPUT_POST,"fname",FILTER_SANITIZE_SPECIAL_CHARS));
		$lname =trim(filter_input(INPUT_POST,"lname",FILTER_SANITIZE_SPECIAL_CHARS));
		$mname =trim(filter_input(INPUT_POST,"mname",FILTER_SANITIZE_SPECIAL_CHARS));
		$gender=trim(filter_input(INPUT_POST,"gender",FILTER_SANITIZE_SPECIAL_CHARS));
		$Status = $_POST['Status'];
		
		$noError = True;
		include 'connect/conn.php';
	
		$q="SELECT * from reg WHERE email= '".$email."'";
		$result=mysqli_query($conn,$q);
		if(mysqli_num_rows($result)>=1){	
			echo "record already exists<br>";
			$noError = false;
		}
		
		if((preg_match("/^[a-zA-Z ]+$/",$fname))==0){
				echo "Only letters and white space allowed for Firstname<br>";
				$noError = false;
		}else if((preg_match("/^[a-zA-Z ]+$/",$lname))==0){
				echo "Only letters and white space allowed for Lastname<br>";
				$noError = false;
		}else if((preg_match("/^[a-zA-Z ]+$/",$mname))==0){
				echo "Only letters and white space allowed for Middlename<br>";
				$noError = false;
		}else if((preg_match('/\./', $email)) == 0){
			echo "Invalid Email Address<br>";
		}
		
		if($noError == True){
		$query = "INSERT INTO reg(email, password, fname, lname, mname, gender, Status)
							VALUES('$email', '$password', '$fname', '$lname', '$mname', '$gender','$Status')";
		// procedural
		$result = mysqli_query($conn, $query);
		
		$sql="SELECT * FROM reg";
		$r = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($r) == 0) {
		echo "No rows found";
		exit;
		}

		while ($row = mysqli_fetch_assoc($r)) {
			$Status=$row["Status"];
		}
		if($email!=" "){
			session_start();
			setcookie("email",$email,false);
			$_SESSION['Status']=0;
			header("location: unactivated.php");
		}
		else{
			echo "Regisration unsuccessful. <a href = register.php'>Click here to register again</a>";
		}

	}
	}
?>

<html>
	<head>
			<?php 
			include("heading.php");
			?>
			<link href="css/reg.css" type="text/css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
			
	</head>

	<body>
			
			<h1>Register</h1>
			<h5>Personal Information &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
			&ensp;&ensp;&ensp;Terms and Conditions</h5>
			
			<form method = 'post' action = 'register.php'>
				<div class="form-group col-md-4 forms">
					<input type="text" name="fname" class="form-control" placeholder="First name" required>
					<br>
					<input type="text" name="lname" class="form-control" placeholder="Last name" required>
					<br>
					<input type="text" name="mname" class="form-control" placeholder="Middle name" required>
					<br>
					<input type="email" name="email" class="form-control" placeholder="Email Address" required>
					<br>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<br>
					  <input type="radio" name="gender" value="male" checked> Male &nbsp;
					  <input type="radio" name="gender" value="female"> Female<br>
					  <br>
					  <input type = 'submit' name = 'register' value = 'Register' class="submit">					  
					  <input type='hidden' name="Status" value="0">
				</div>				
			</form>
		
				<div class="col-md-8 terms">
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. 
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund 
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. 
				</div>
	</body>
</html>