<html>
<head>
    <meta charset="utf-8">
    <title> Alpha Watches Customer </title>
	<link href="register/cart.css" style="stylesheet">
</head>
<?php
	include("heading.php");
    if(empty($_SESSION['user_id'])){
		header('location: login.php');
	}
    include ('connect/conn.php');
    // user procedural connection
    $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
    $sql = mysqli_query($conn, "SELECT * FROM products WHERE prod_id = prod_id");
    $row = mysqli_fetch_assoc($result);
?>
	<body>
		<div class="col-md-10 col-md-offset-1">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Price</th>
			                <th>Quantity</th>
			                <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM products JOIN orders ".
	                            "where orders.prod_id = products.prod_id and ".
                                "orders.user_id = '".$_SESSION['user_id']."'";
                            $result = mysqli_query($conn, $query);
                            while($row =(mysqli_fetch_assoc($result))) {
                                echo "<tr>";
                                    echo "<td><img src=".$row['location']." class='col-xs-4'></td>";
 								    echo "<td>".$row['description']."</td>";
                                    echo "<td>$".$row['price']."</td>";
				                    echo "<td><form method='post' action='cart.php'><input type='text' value='".$row['quantity']."' name='quantity' required></td>";
				                    echo "<input type='hidden' value='".$row['order_id']."' name='orders'>";
				                    echo "<td><button type='submit' name='del_item' value='".$row['order_id']."'>Remove</button>";
							    echo "</tr>";
                            }
							$sql = "SELECT SUM(PRODUCTS.PRICE) FROM PRODUCTS, ORDERS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."' and PRODUCTS.PROD_ID = ORDERS.PROD_ID";
							$q="SELECT * FROM ORDERS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."'";
							$result = mysqli_query($conn,$sql);
							$res= mysqli_query($conn,$q);
							while (($rew =  mysqli_fetch_assoc($result)) && ($r = mysqli_fetch_assoc($res))){
	
								$s= $rew['SUM(PRODUCTS.PRICE)'] * $r['quantity'];
								echo "<p class='total'>Cart Total: $".$s."</p>";
								
							}								
                        ?>
                    </tbody>
                </table>
						<button type='submit' name='checkout' class="checkout">Checkout</button>
						
						</form>
						<?php
							if(isset($_POST['del_item'])){
									$a=$_POST['del_item'];
									mysqli_query($conn,"delete from orders where order_id = '$a'");
									header("Refresh: 0");
							}
							if(isset($_POST['checkout'])){
									$q=$_POST['quantity'];
									$r=$_POST['orders'];
									if($q==0){
										echo "Quantity must not be 0";
									}
									else{
									mysqli_query($conn,"update orders set`quantity`='$q' where order_id='$r'");
									echo $conn->error;
									header("location:checkout.php");
									}
								
									
						}
						?>
						
            </div>
        </div>
		
		 <script src="js/notify.min.js">
            <!-- DO NOT REMOVE ME -VLAD -->
        </script>
	</body>
</html>