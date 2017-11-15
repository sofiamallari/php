<html>
<head>
<?php      
include('heading.php');

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="images/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="images/assets/css/demo.css">
</head>
<body>
<div id="exTab1" class="container">	
<ul  class="nav nav-tabs">
			<li class="active">
			<a  href="#1a" data-toggle="tab">Credit/Debit Card</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Delivery</a>
			</li>
		</ul>

	<div class="tab-content">
    <div class="tab-pane active" id="1a">
	<div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h1 class="h1">Credit/Debit Card Payment</h1>
            </div>
            <div class="payment">
                <form method='post'action='payment.php'>
                    <div class="form-group owner">
                        <label for="owner">Card Owner</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="images/assets/images/visa.jpg" id="visa">
                        <img src="images/assets/images/mastercard.jpg" id="mastercard">
                        <img src="images/assets/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <a href="receipt.php"><button type="submit" class="btn btn-default" id="confirm-purchase" name="confirm">Confirm</button></a>
                    </div>
                </form>
            </div>
        </div>

        <p class="examples-note">Here are some dummy credit card numbers and CVV codes so you can test out the form:</p>

        <div class="examples">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Card Number</th>
                            <th>Security Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Visa</td>
                            <td>4716108999716531</td>
                            <td>257</td>
                        </tr>
                        <tr>
                            <td>Master Card</td>
                            <td>5281037048916168</td>
                            <td>043</td>
                        </tr>
                        <tr>
                            <td>American Express</td>
                            <td>342498818630298</td>
                            <td>3156</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
				
				
				
			<div class="tab-pane" id="2a">
            <div class="a">
			<table>
					<tr><td id="info">Personal Information</td></tr>
						<?php
						   include('connect/conn.php');
						    $q="SELECT * FROM reg where user_id = '".$_SESSION['user_id']."'";
							$res=mysqli_query($conn,$q);
							$row = mysqli_fetch_assoc($res);
								echo "<tr><td>Full Name: ".ucfirst($row['fname'])." ".ucfirst($row['lname'])."</td></tr>";
								echo "<tr><td>Address:".ucfirst($row['street'])." ".ucfirst($row['barangay'])." ".ucfirst($row['city'])."</td></tr>";	
								echo "<tr><td>Contact Number:".ucfirst($row['contact'])."</td></tr>";	
							
							$que="SELECT SUM(PRODUCTS.PRICE) FROM PRODUCTS, ORDERS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."' and PRODUCTS.PROD_ID = ORDERS.PROD_ID";
							$sql="SELECT * FROM ORDERS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."'";
							$a=mysqli_query($conn,$que);
							$result=mysqli_query($conn,$sql);
							while (($rew =  mysqli_fetch_assoc($a)) && ($r = mysqli_fetch_assoc($result))){
								$s= $rew['SUM(PRODUCTS.PRICE)'] * $r['quantity'];
								echo "<tr><td id='total'>Cart Total: $".$s."</td></tr>";
								
							}	
						?>
			</table>
					<div class="form-group" id="pay-now">
                        <a href="receipt.php"><button type="submit" class="btn btn-default" id="confirm-purchase" name="confirm">Confirm</button></a>
                    </div>
			</div>
			<div class="b">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan='1'>Items Ordered</th>
                            <th class='col-md-2' colspan='2'>Quantity</th>
                            <th class='col-md-2' colspan='2'>Price</th>
                        </tr>
                    </thead>
                    <tbody>	
						<?php
							$query = "SELECT * FROM products JOIN orders ".
	                            "where orders.prod_id = products.prod_id and orders.user_id = '".$_SESSION['user_id']."'";
                            $res=mysqli_query($conn,$query);
							while($row = mysqli_fetch_assoc($res)){
								echo "<tr>";
								echo "<td colspan=1><img class='col-md-4' src='".$row['location']." '/></td>";
								echo "<td class='col-md-2' colspan=2>".$row['quantity']."</td>";
								echo "<td class='col-md-2' colspan=2>".$row['price']."</td>";
								echo "</tr>";
							}
						
						?>
                    </tbody>
                </table>
				 
			</div>
        </div>

   <script src="images/assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="images/assets/js/script.js"></script>
