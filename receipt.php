<html>
<head>
<?php
include('heading.php');
include('connect/conn.php');
?>
</head>
<table class="col-md-6" style="font-family: 'Playfair Display', serif; font-size:20px; left:350px; ">
<h1 style="font-family: 'Playfair Display', serif; text-align:center; font-size:50px; padding-bottom:20px;">Thank You for Purchasing!</h1>
<h1 style="font-family: 'Playfair Display', serif; text-align:center; font-size:50px; padding-bottom:20px;">Official Receipt</h1>
<?php
                            $query = "SELECT * FROM products JOIN orders ".
	                            "where orders.prod_id = products.prod_id and ".
                                "orders.user_id = '".$_SESSION['user_id']."'";
                            $result = mysqli_query($conn, $query);

                            while($row =(mysqli_fetch_assoc($result))) {
                                echo "<tr style='padding-bottom:20px;'>";
 								    echo "<td style='padding-bottom:20px;'>".$row['description']."</td>";
                                    echo "<td style='padding-bottom:20px;'>$".$row['price']."</td>";
				                    echo "<td style='padding-bottom:20px;'>".$row['quantity']."</td>";
				                echo "</tr>";
                            }
							$sql = "SELECT SUM(PRODUCTS.PRICE) FROM PRODUCTS, ORDERS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."' and PRODUCTS.PROD_ID = ORDERS.PROD_ID";
							$q="SELECT * FROM ORDERS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."'";
							$result = mysqli_query($conn,$sql);
							$res= mysqli_query($conn,$q);
							while (($rew =  mysqli_fetch_assoc($result)) && ($r = mysqli_fetch_assoc($res))){
	
								$s= $rew['SUM(PRODUCTS.PRICE)'] * $r['quantity'];
								echo "<td style='left:400px;'>Cart Total: $".$s."</td>";
								
							}								
?>
</table>
</html>