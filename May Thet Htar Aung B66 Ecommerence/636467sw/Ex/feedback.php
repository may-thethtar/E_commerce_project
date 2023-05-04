<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Responsive Navigation Bar</title>
   
   <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="style.css"> -->
</head>
<style>
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
}
nav{
  background: #23463f;
  height: 80px;
  width: 100%;
}
label.logo{
  color: #fff;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: #fff;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #fff;
  transition: .5s;
  color: #022f69;
}
.checkbtn{
  font-size: 30px;
  color: #fff;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 968px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 875px){
  .checkbtn{
    display: block;
  }
  nav ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #27282c;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover, a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
    main.img.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 
}
 main{
 text-align:center;
 }
  

</style>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">ALL 4 U</label>
    <ul>
      
      <li><a href="view.php">View Item</a></li>
      <li><a href="add.php">Add Item</a></li>
      <li><a class="active" href="home.php">Feedback</a></li>
     <!--  <li><a href="viewadmin.php">View admin</a></li> -->
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=Shopping","root","");
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
} catch (PDOException $e) {
	echo "Connection Failed: ".$e->getMessage();
}

$sql=$db->prepare("SELECT * FROM Item2");
$sql->execute();

?>
<div class="main">
<table border=2 width=100%>
  <th width=20%  >Name</th><!-- for heading bold/why we should th cause not to show every time while looping  -->
  <th width=10%  > Gmail</th>
  <th width=20%  > Phone</th>
  <th width=10%   >Price </th>
  
  
  <?php 
  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { /* PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set */

      
      extract($row);
  ?>
  <tr>
  
   <td text-align=center ><?php  echo $name;?> </td><!-- this all varibale are the colum of the database -->
   <td><?php  echo $gmail;?> 
   <td><?php  echo $phone;?> 
    <td><?php  echo $feedback;?> 
   
 
   </tr>
 <?php }?>
  
</table>
</div>
<?php 
include 'footer.php';
?>
  
</body>

</html>
