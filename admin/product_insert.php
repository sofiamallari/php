<?php
	include('heading.php');
	include('../connect/conn.php');
	$sql    = "select COUNT(prod_id) from products";
	$query  = mysqli_query($conn, $sql);
	
	if($query){
		$row    = mysqli_fetch_array($query);
		$result = $row['COUNT(prod_id)'] + 4;
	}
?>

<head>
	<link href = '../register/reg.css' type = 'text/css' rel = 'stylesheet'>
	<link href = 'https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px' rel = 'stylesheet'>
	<link href = 'https://fonts.googleapis.com/css?family=Manuale' rel = 'stylesheet'> 
	<link href = 'https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i' rel = 'stylesheet'>
	
	<style>
		
	</style>
</head>

<h1> Insert new product </h1>

<form method = 'POST' action = 'insert.php' enctype = 'multipart/form-data'>
	<div class = 'form-group col-md-4 forms'>
		<input type = 'hidden' name = 'prod_id' value = <?php echo (int) $result ?> class = 'form-control'>

		<label for = 'brand_select'>Select brand: </label>
		<select class = 'form-control' id = 'brand_select' name = 'brand'>
			<option value = 'alange'   > alange    </option>
			<option value = 'audemars' > audemars  </option>
			<option value = 'baume'    > baume     </option>
			<option value = 'breguet'  > breguet   </option>		
			<option value = 'breitling'> breitling </option>
			<option value = 'bvlgari'  > bvlgari   </option>
			<option value = 'cartier'  > cartier   </option>
			<option value = 'chanel'   > chanel    </option>
			<option value = 'chopard'  > chopard   </option>
			<option value = 'elliot'   > elliot    </option>
			<option value = 'graff'    > graff     </option>
			<option value = 'gucci'    > gucci     </option>
			<option value = 'hugo'     > hugo      </option>
			<option value = 'montblanc'> montblanc </option>
			<option value = 'omega'    > omega     </option>
			<option value = 'patek'    > patek     </option>
			<option value = 'rado'     > rado      </option>
			<option value = 'rolex'    > rolex     </option>
			<option value = 'versace'  > versace   </option>
		</select> <br>

		<input type = 'text' name = 'price' onkeydown = 'return ( event.ctrlKey || event.altKey 
																				|| (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
																				|| (95<event.keyCode && event.keyCode<106)
																				|| (event.keyCode==8) || (event.keyCode==9) 
																				|| (event.keyCode>34 && event.keyCode<40) 
																				|| (event.keyCode==46) )' placeholder = 'price' class = 'form-control' required> <br>
		
		<input type = 'number' name = 'quantity' placeholder = 'quantity' class = 'form-control' required> <br> 
		
		<label for = 'description_textarea'> Description: </label>
		<textarea class = 'form-control' rows = '3' id = 'description_textarea' name = 'description' style = 'resize : none' required> </textarea> <br>
		
		<label for = 'color_select'> Select colour: </label>
		<select class = 'form-control' id = 'color_select' name = 'color'>
			<option value = 'black' > Black  </option>
			<option value = 'blue'  > Blue   </option>
			<option value = 'brown' > Brown  </option>
			<option value = 'gold'  > Gold   </option>
			<option value = 'rose'  > Rose   </option>
			<option value = 'silver'> Silver </option>
			<option value = 'white' > White  </option>
			
		</select> <br>
		
		<label for = 'category'> Gender category </label> 
		<input type = 'radio' name = 'gender' id = 'category' value = 'male' checked> Male </input>
		<input type = 'radio' name = 'gender' id = 'category' value = 'female'> Female </input> <br> <br>
		
		
		<label for = 'fileToUpload'> Insert image: </label>
		<input type = 'file' name = 'fileToUpload' id = 'fileToUpload'> <br>
		
		<input type = 'submit' size = '20' name = 'productInsert' value = 'Insert'>
		<a href = 'admin.php'> Back </a>
		
		