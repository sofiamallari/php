<?php
include('../register/heading.php');
include('../connect/conn.php');
?>
		 <div class="container col-xs-12">
         <p id="nav2"><?php echo "Results"?></p>
         <form>
           <label class="cc"> Price Range:</label>
           <select class="cc">
             <option/>
             <option/>50,000-30,000
             <option/>30,000-20,000
             <option/>20,000-10,000
             <option/>10,000-1,000
           </select>
         </form>
         <hr class="hr-page">
       </div>
	   
       <div class="panel-table-container col-lg-12">
         <table class="panel-table col-lg-12">
           <tr>
				<?php
				$query=mysqli_query($conn,"SELECT * FROM products WHERE brand= '".$_GET['id']."'");
				if (mysqli_num_rows($query) == 0) {
						echo "No products found";
						exit;
				}
				else{
					$i=0;
					echo "<tr>";
					while($row = (mysqli_fetch_assoc($query))){
						if($i%3 == 0){
							echo "</tr><td>";
							$a=$row['prod_id'];
							$b="#modal$a";
							echo "<a data-toggle='modal' data-target='$b'><img src='".$row['location']."'></a><br>";
							echo "<footer class='panel-footer'><p class='brand'>".$row['brand']."</p>";
							echo "<p class='desc'>".$row['description']."</p>";
							echo "<p class='price'>".$row['price']."</p></footer></td>";								
						}else{
							echo "<td>";
							echo "<a data-toggle='modal' data-target='$b'><img src='".$row['location']."'></a><br>";	
							echo "<footer class='panel-footer'><p class='brand'>".$row['brand']."</p>";
							echo "<p class='desc'>".$row['description']."</p>";
							echo "<p class='price'>".$row['price']."</p></footer></td>";	
						}
						$i++;	
					}
				};
				?>
		   </tr>
		</table>
	</div>
	
	  <div>
      <div class="pop-container-fluid modal fade col-xs-12" id="modal1" role="dialog">
        <div class="modal-dialog whole"><div class="pop-content-wrapper "><div class="item-container "><div class="container ">
      	   <div class="col-md-6 white col-xs-12"><div class="product col-xs-12 service-image-left" style="height:18em">
             <img id="item-display" src="bauwo/a13.jpg" alt=""></img></div>
      	    </div>

       <div class="col-md-4 col-xs-12">
	   <?php
		$query="Select * from products where brand='alange'";
		$sql=mysqli_query($conn,$query);
		$i=0;
		while($row = (mysqli_fetch_assoc($sql))){
			if($i%3==0){
				echo "<div class='product-title' style='padding-top: 2em;'>".$row['brand']."</div>";
				echo "<div class='product-desc'>".$row['description']."</div>";
			}
		}
		
		?>
        
       

          <div class="product-rating">
            <i class="fa fa-star gold"></i>
            <i class="fa fa-star gold"></i>
            <i class="fa fa-star gold"></i>
            <i class="fa fa-star gold"></i>
            <i class="fa fa-star-o"></i>
          </div>

          <hr>
      		<div class="product-price">$ 1849.0</div>
          <div class="product-stock">In Stock</div>
          <hr>

          <div class="btn-group cart">
            <button type="button" class="btn btn-success">Add to cart</button>
          </div>
          <br><br>

          <div class="btn-group wishlist">
            <button type="button" class="btn btn-danger">Add to wishlist</button>
      		</div></div></div></div></div></div>
        </div>
      </div>
</html>