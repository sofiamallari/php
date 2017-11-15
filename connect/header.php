<?php ob_start();?>
<!DOCTYPE HTML>
<html>
<head><meta charset="utf-8"><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<link href="../final/fonts.css" rel="stylesheet">
<link href="../final/css/underline.css" type="text/css" rel="stylesheet">
<link href="../final/footer.css" type="text/css" rel="stylesheet">
<title>Alpha: Wrist Watch</title>

<style>
.middle {
  transition: .5s ease;
  position: absolute;
  top: 75%;
  left: 50%;
  width: 24em;
  align-content: center;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.image {
  opacity: 0.9;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
  z-index: -1;
}
.middle-text {
 color: black;
  font-size: 1em;
  font-family: 'Oswald', sans-serif;
}
.middle-title{
  color:black;
  font-size: 2em;
  font-family: 'Playfair Display', serif;
}
.middle-title1{
  color:black;
  font-size: 2em;
  font-family: 'Playfair Display', serif;

}

.middle-contain{
    height: 12em;
    padding-left: 3em;
    padding-top: 3em;
    background-color: white;
    align-content: center;
    align-self: center;
}
.middle-contain1{
    height: 12em;
    padding-left: 2.5em;
    padding-top: 3em;
    background-color: white;
    align-content: center;
    align-self: center;
}
.middle-btn{
  border-style: inset !important;
  border-color: black;
  margin-left: 4em;
}
.middle-btn1{
  border-style: inset !important;
  border-color: black;
  margin-left: 5em;
}
.navbar , .btn-new{
	background:black;
}
navbar-fixed-top {
    min-height: 80px;
}
.navbar-fixed-top .navbar-collapse {
    max-height: 80px;
}

@media (min-width: 768px) {
    .navbar-fixed-top .navbar-collapse {
        max-height: 100px;
    }
}
.navbar .navbar-brand{
	height: 100px;
}
.nav{
	position:relative;
	top:20px;
	font-family: 'Playfair Display', serif;
	font-size:15pt;
}
#brand{
	text-align:center;
	font-family: 'Playfair Display', serif;
	font-size:12pt;
}

.cert{
	height:500px;
	width:100%;
	background:black;
	position:relative;
	top:100px;
}
.id{
	height:350px;
	position:relative;
	top:100px;
	font-size:4em;
	color:#eaeaea;
	text-align:left;
	font-family: 'Abril Fatface', cursive;
}
.a{
	color:#eaeaea;
	font-size:15px;
}

.brand , .desc ,.price{
	text-align:center;
}

@media (min-width: 768px) {
    .container, .panel-table,  {
        max-height: 100px;
		max-width: 500px;
    }
}

</style>
</head>
<body>

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
				Men
				<span class="caret"></span>
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
				Women
				<span class="caret"></span>
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
          echo "<li><a href='../login.php'>Login<span class='sr-only'></span></a></li>";
          echo "<li><a href='../reg.php'>Register<span class='sr-only'></span></a></li>";
        }

        else{

          include ('conn.php');
		  
          $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = '".$_SESSION['user_id']."'");
          $row = mysqli_fetch_assoc($result);
		  $name=$row['fname'];

          echo "<li><a href='../home.php'>".ucfirst($name)."<span class = 'sr-only></span></a></li>";

          echo "<li><a href='../logout.php'><span class='sr-only'></span></a></li>"; 

          echo "<li><a href='../logout.php'> Logout <span class='sr-only'></span></a></li>";

        
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