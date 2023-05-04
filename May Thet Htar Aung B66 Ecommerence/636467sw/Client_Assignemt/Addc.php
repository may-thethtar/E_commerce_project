<?php 
try {
	$db = new PDO("mysql:host=localhost;dbname=Shopping","root","");
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
} catch (PDOException $e) {
	echo "Connection Failed: ".$e->getMessage();
}

include 'header.php';


?>
<html>
<head>
<title>
</title>
<style>
body {
    background-color: #444442;
    padding-top: 85px;
}

h3{
    font-family: 'Poppins', sans-serif, 'arial';
    font-weight: 600;
    font-size: 72px;
    color: white;
    text-align: center;
}

h4 {
    font-family: 'Roboto', sans-serif, 'arial';
    font-weight: 400;
    font-size: 20px;
    color: #9b9b9b;
    line-height: 1.5;
}

/* ///// inputs /////*/

input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: -5px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}

.styled-input {
    float: left;
    width: 293px;
    margin: 1rem 0;
    position: relative;
    border-radius: 4px;
}

@media only screen and (max-width: 768px){
    .styled-input {
        width:100%;
    }
}

.styled-input label {
    color: #999;
    padding: 1.3rem 30px 1rem 30px;
    position: absolute;
    top: 10px;
    left: 0;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    pointer-events: none;
}

.styled-input.wide { 
    width: 650px;
    max-width: 100%;
}

input,
textarea {
    padding: 30px;
    border: 0;
    width: 100%;
    font-size: 1rem;
    background-color: #2d2d2d;
    color: white;
    border-radius: 4px;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.075s ease;
    transition: all 0.075s ease;
}

textarea {
    width: 100%;
    min-height: 15em;
}

.input-container {
    width: 650px;
    max-width: 100%;
    margin: 20px auto 25px auto;
}

.submit-btn {
    float: right;
    padding: 7px 35px;
    border-radius: 60px;
    display: inline-block;
    background-color: #4b8cfb;
    color: white;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
              0 2px 10px 0 rgba(0,0,0,0.07);
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}

.submit-btn:hover {
    transform: translateY(1px);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
              0 1px 1px 0 rgba(0,0,0,0.09);
}

@media (max-width: 768px) {
    .submit-btn {
        width:100%;
        float: none;
        text-align:center;
    }
}

input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 

input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}

</style>

</head>

      <div class="container">
	<div class="row">
			<h3>Contact us</h3>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<form method="POST" action="Addc.php" enctype="multipart/form-data">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input name="Name" type="text" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="Gmail" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="Phone" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="Feedback" required ></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<input class="btn-lrg submit-btn" type="submit" name="submit"  width=50%>
			</div>
	</div>
	</form>
</div>

      <br>
      <br>
     <?php 
     include 'footer.php';
     ?>
    
</html>
<?php
if (isset($_POST['submit'])){
    try {
        include("connection.php");
        $sql = "INSERT INTO Item2(Name, Gmail, Phone, Feedback)
         VALUES(?,?,?,?)";
        $sq = $db->prepare($sql);

        $name = $_POST['Name'];
        $gmail = $_POST['Gmail'];
        $phone = $_POST['Phone'];
        $feedback = $_POST['Feedback'];

        if ($sq->execute(array($name, $gmail, $phone, $feedback))) {
        }
       // echo "insert data successful";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }}


?>