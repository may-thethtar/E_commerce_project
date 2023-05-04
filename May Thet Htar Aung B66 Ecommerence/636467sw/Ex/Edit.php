
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
  .social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}
.section {
    display: block;
}
.container {
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}

div {
    display: block;
}
.text-center {
    text-align: center;
}
*{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}

.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}
.Add.form{
 text-align:center;
 }
}
.Footer{

  text-align: center;
  padding: 20px;
  background-color: Black;
  color: white;

}
table {
    border: 1 px black;
    padding-up: 10px;
  }

  table,
  td,
  tr {
    padding: 15px;
    font-size: 20px;
    line-height: 3;
    color: #332;
    background-color: #fff;
    height: 20px;
    vertical-align: up;
    width: 80%;

  }

  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  table.center {
    margin-left: auto;
    margin-right: auto;
  }
 main {
    text-align: center;
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
include 'connection.php';

$eid=$_GET['eid'];

$sql=$db-> prepare("SELECT * FROM Item WHERE IID=$eid");
$sql->execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);
$photo="image/".$Image;
?>
	<main>
		<div class="Add">
		<form enctype="multipart/form-data" method="POST" action="Editprocess.php">
		<input type="hidden" name="id" value="<?php echo $IID; ?>"><br>
		 <table class="center">
        <tr>
          <td text-align="center"><label for="fname">Food Name</label></td>
          <td><input type="text" id="lname" name="foodname" placeholder="<?php echo $Foodname?>"></td>
        </tr>

        <tr>
          <td> <label for="cate">Category</label></td>
          <td> <input type="text" id="cate" name="category" placeholder="<?php echo $Category?>"></td>
        </tr>

        <tr>
          <td><label for="des" text-align="center">Descripton</label> </td>
          <td><textarea id="des" name="description" placeholder="<?php echo $Description?>"></textarea></td>
        </tr>

        <tr>
          <td><label for="price">Price</label> </td>
          <td> <input type="text" id="price" name="price" placeholder="<?php echo $Price?>" text-align="center"></textarea></td>
        </tr>

        <tr>
        <img src='<?php echo "image/".$Image;?>' width=200 height=auto><br><br>
	<input type="hidden" name="oldimg" value="<?php echo $image?>">
          <td><label for="image">Image</label></td>
          <td> <input type="file" name="newimg"></textarea></td>
        </tr>

      </table>
      <br>
      <br>
   <input class="btn btn-primary" type="submit" name="buy" value="Submit"><br><br>
      
		<br><br>
			
	</form>
	</div>
	</main>
	<?php 
	include 'footer.php';
	?>
</body>

</html>
