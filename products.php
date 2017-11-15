<?php
include('heading.php');
include('connect/conn.php');
if($_SESSION['user_id']==null){
	header("location:register/login.php");
}else{
$sql=mysqli_query($conn,"SELECT * FROM reg WHERE user_id= '".$_SESSION['user_id']."'");

?>
		 <div class="container col-xs-12">
         <form>
           <label class="cc"> Price Range:</label>
           <select class="cc">
			 <option/>
             <option value="50">50,000-30,000
             <option value="30">30,000-20,000
             <option value="20">20,000-10,000
             <option value="10">10,000-1,000
           </select>
		   
		   <label class="cc"> Color:</label>
           <select class="cc">
			 <option/>
             <option value="gold">Gold
             <option value="rose">Rose
             <option value="white">White
             <option value="black">Black
             <option value="silver">Silver
             <option value="brown">Brown
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
							if($row['status'] == 1){?>
							<a href="../catalog.php?id=<?php echo $row['prod_id']?>">
							<?php
							echo "<img src='".$row['location']."' class='images'></a><br>";
							echo "<footer class='panel-footer'><p class='brand'>".$row['brand']."</p>";
							echo "<p class='desc'>".$row['description']."</p>";
							echo "<p class='price'>".$row['price']."</p></footer></td>";		
							}else{
							echo "</tr><td>";
							}
						}else{
							if($row['status']==1){
							echo "<td>";?>
							<a href="../catalog.php?id=<?php echo $row['prod_id']?>">
							<?php
							echo "<img src='".$row['location']."' class='images'></a><br>";	
							echo "<footer class='panel-footer'><p class='brand'>".$row['brand']."</p>";
							echo "<p class='desc'>".$row['description']."</p>";
							echo "<p class='price'>".$row['price']."</p></footer></td>";	
							}
							else{
								echo "<td>";
							}
						}
						$i++;	
					}
				};
}
				?>
		   </tr>
		</table>
	</div>
</html>