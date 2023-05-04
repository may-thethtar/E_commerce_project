<?php

include 'connection.php';
include 'header.php';
$sql =$db->prepare("SELECT * FROM item LIMIT 6");
$sql->execute();
?>
<html>
	<head>
	<title>HOME PAGE FOR JUb</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!--   <style type="text/css"> -->
<style>
.carousel {
  width:640px;
  height:360px;
   margin: auto;
}
.carousel img{
margin: auto;
}
.carousel{
background:black;
}
body{
background:#64766A;
}
  form{
 text-align:center;
 }


</style>
 
	</head>

	<body>
	<br>
	<br>
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/b5.png" class="d-block w-90" alt="..." height="360px">
    </div>
    <div class="carousel-item">
      <img src="image/b2.jpg" class="d-block w-90 " alt="..." height="360px">
    </div>
    <div class="carousel-item">
      <img src="image/b6.png" class="d-block w-90 " alt="..."height="360px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	   <div class="container">
	       <div class="row">
	           <?php 
	               while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	                   extract($row);	               
	           ?>
	               <div class="col-sm-4">
	                   <form method="post" action="manage_cart.php">
	                   <br><br>
	                   
	                   <img class="border border-secondary" src="<?php echo "image/".$Image; ?>" width="120" height="120"><br><br>
	                   Product Name: <?php echo $Foodname;?><br>
	                   Price: <?php echo $Price; ?> MMks<br>
	                   Category:  <?php echo $Category?><br>
	                   <a class="btn btn-primary" name="view" href="eachproduct.php?eid=<?php echo $IID ;?>">View Item </a>
	                   <input type="hidden" name="name" value="<?php echo $Foodname;?>"> 
	                   <input type="hidden" name="price" value="<?php echo $Category;?>"> 
	                   <input type="hidden" name="price" value="<?php echo $Price;?>"> 
	                   <input class="btn btn-primary" type="submit" name="buy" value="Add to Cart"><br><br>
	                   
	                   </form>
	               </div>
	           <?php } ?>
	       </div> 
	   </div>
	   <?php 
	   include 'footer.php';
	   ?>
	</body>
</html>