<html>
    <head>
        <title>Alpha Watches</title>
    </head>
<?php 
	ob_start(); 
	include("heading.php");

	if(empty($_SESSION)){
	    header("location: login.php");
    }
    else{
	    if($_SESSION['Status'] == 2 ) header("location: admin/admin.php");
	    elseif ($_SESSION['Status'] == 1) header("location: home.php");
    }
?>
    <body>
        <div class="col-md-10 col-md-offset-1">
            <h2> Please Wait for activation</h2>
        </div>

    </body>

<html>
