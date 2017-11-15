<?php
/**
 * Created by PhpStorm.
 * User: Vlad Villanueva
 * Date: 04/11/2017
 * Time: 15:05
 */
?>
<nav class="navbar navbar-inverse">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ><img src="../final/A.png" id="#logo" class="col-md-6 col-xs-5"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-center">
        <li><a href="../connect/index.php">Home<span class="sr-only">(current)</span></a></li>

		  <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			Men<span class="caret"></span>
          </a>


          <ul class="dropdown-menu">
            <li><a href="../products.php?id=alange">A.Lange</a></li>
            <li><a href="../products.php?id=baume">Baume & Mercier</a></li>
			<li><a href="../products.php?id=breguet">Breguet</a></li>
			<li><a href="../products.php?id=chopard">Chopard</a></li>
            <li><a href="../products.php?id=elliot">Elliot</a></li>
			<li><a href="../products.php?id=hugo">Hugo</a></li>
            <li><a href="../products.php?id=montblanc">Montblanc</a></li>
            <li><a href="../products.php?id=patek">Patek Philippe</a></li>
			<li><a href="../products.php?id=rado">Rado</a></li>
			<li><a href="../products.php?id=versace">Versace</a></li>
          </ul>
        </li>


		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			Women<span class="caret"></span>
		  </a>

          <ul class="dropdown-menu">
            <li><a href="../products.php?id=audemars">Audemars Piguet</a></li>
		    <li><a href="../products.php?id=breitling">Breitling</a></li>
			<li><a href="../products.php?id=bvlgari">Bvlgari</a></li>
			<li><a href="../products.php?id=cartier">Cartier</a></li>
			<li><a href="../products.php?id=chanel">Chanel</a></li>
            <li><a href="../products.php?id=graff">Graff Diamonds</a></li>
			<li><a href="../products.php?id=gucci">Gucci</a></li>
            <li><a href="../products.php?id=omega">Omega</a></li>
            <li><a href="../products.php?id=rolex">Rolex</a></li>
          </ul>
        </li>


		<li><a href="#">Features<span class="sr-only"></span></a></li>
		<li><a href="#footer">About us<span class="sr-only"></span></a></li>
		<li><a href="#footer">Contact us<span class="sr-only"></span></a></li>

		 <?php

        if(empty($_SESSION['user_id'])){
	        echo "<li><a href='../register/login.php'>Login<span class='sr-only'></span></a></li>";
	        echo "<li><a href='../register/reg.php'>Register<span class='sr-only'></span></a></li>";
        }

        else{

	        include ('conn.php');

	        $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = '".$_SESSION['user_id']."'");
	        $row = mysqli_fetch_assoc($result);
	        $name=$row['fname'];

	        echo "<li><a href='../register/home.php'>".ucfirst($name)."<span class = 'sr-only></span></a></li>";

	        echo "<li><a href='../register/logout.php'><span class='sr-only'></span></a></li>";

	        echo "<li><a href='../register/logout.php'> Logout <span class='sr-only'></span></a></li>";


        }

    ?>


<!--<form class="navbar-form pull-right">
  <div class="form-group">
	<input type="text" class="form-control" placeholder="Search">
  </div>
  <div class="btn-group">
  <button type="button" class="btn btn-default btn-lg btn-new">
		  <span class="glyphicon glyphicon-search new-glyph" aria-hidden="true"> </span>
  </button>
  <button type="button" class="btn btn-default btn-lg btn-new">
		  <span class="glyphicon glyphicon-shopping-cart new-glyph" aria-hidden="true"> </span>
	</button>
  </div>
</form>-->
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>