<?php

include 'connection.php';
include 'header.php';
$sql =$db->prepare("SELECT * FROM item ");
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
header{
background:#C0A9BD;}
body{
background:#64766A;}
h1 {text-align: center;}


.container
{
background:#94A7AE;
}
</style>
	</head>
	<body>
	<br><br>
	 <h2 align="center"><i><b>All Items of " All 4 U "</b> </i></h2><br><br>
	   <div class="container">
	       <div class="row">
	           <?php 
	               while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	                   extract($row);	               
	           ?>
	           
	               <div class="col-md-4">
	               <br>
	               <br>
	              
	                   <form method="post" action="manage_cart.php" align="center">
	                   <img class="border border-secondary" src="<?php echo "image/".$Image; ?>" width="150" height="150"><br><br>
	                   Product Name: <?php echo $Foodname;?><br>
	                   
	                   Price: <?php echo $Price; ?> MMks<br>
	                   
	                   <br>
	                   <!-- <button class="btn btn-primary mb1 bg-black" name="view">View Item</button> -->
	                   <a class="btn btn-primary mb1 bg-black" name="view" href="eachproduct.php?eid=<?php echo $IID ;?>"> View Item  </a>
	                  <!--  <input class="btn btn-primary mb1 bg-black" type="submit" name="" value="Add to Cart"> -->
	                   <input type="hidden" name="name" value="<?php echo $Foodname;?>"> 
	                   <input type="hidden" name="price" value="<?php echo $Price;?>"> 
	                   <input class="btn btn-primary mb1 bg-black" type="submit" name="buy" value="Add to Cart"><br><br>
	                   
	                   </form>
	                   <br>
	               </div>
	           <?php } ?>
	       </div> 
	       <br><br>
	   </div>
	   <br>
	   <?php 
	   include 'footer.php';
	   ?>
	</body>
</html>