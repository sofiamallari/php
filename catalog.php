<?php
include('heading.php');
include('connect/conn.php');
error_reporting(0);
$sql=mysqli_query($conn,"Select * FROM reg WHERE user_id = '".$_SESSION['user_id']."'");
$query=mysqli_query($conn,"Select * FROM products WHERE prod_id='".$_GET['id']."'");
	
	echo "<div class='catalogs'>";
	while($row = mysqli_fetch_assoc($query)){?>	
	<img src="<?php echo $row['location'];?>" class="col-xs-4">
	<p class="catbrand"><?php echo $row['brand'];?></p>
	<p class="catdesc"><?php echo $row['description'];?></p>
	<p class="catprice"><?php echo "$".$row['price'];?></p>
	<p class="off">(50% Off)</p>
	<form method="post" action="catalog.php">
	<input type ='hidden' name ="prod_id" value="<?php echo $row['prod_id']; ?>">
	<input type="submit" name="cart" value="Add to Cart" class="car">
	<input type="submit" name="wish" value="Add to Wishlist" class="wis">
	</form>
	
<?php	
}
echo "</div>";

if((isset($_GET['id']))==0){
	echo "Choose from the products";
}
if(isset($_POST['wish'])){
	$b=$_POST['prod_id'];
	$c=$_SESSION['user_id'];
	
	$sql="Insert into wish(user_id,prod_id)
			VALUES('$c','$b')";
	mysqli_query($conn,$sql);

	echo $conn->error;	
	//header("location:../register/wish.php");
}
if(isset($_POST['cart'])){
	$b=$_POST['prod_id'];
	$c=$_SESSION['user_id'];
	
	$query = "SELECT * FROM ORDERS WHERE USER_ID = ". $c ." AND PROD_ID = ".$b;
	$res = mysqli_fetch_assoc(mysqli_query( $conn , $query));
	echo $conn->error;
	if($res){
			$sql = "UPDATE ORDERS SET QUANTITY = QUANTITY + 1 WHERE USER_ID = ".$c ." AND PROD_ID = ".$b;
			mysqli_query($conn,$sql);
	}else{
	$sql="Insert into orders(user_id,prod_id,quantity)
			VALUES('$c','$b',1)";
	mysqli_query($conn,$sql);

	echo $conn->error;
	header("location: cart.php");
}
}
?>