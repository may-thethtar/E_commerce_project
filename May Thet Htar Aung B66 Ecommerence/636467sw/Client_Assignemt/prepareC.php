
		<form method="POST">
			Name:  <input type="text" name="Name"  ><br><br>
			Gmail: <input type="text" name="Gmail" ><br><br>
			
			Phone:  <input type="text" name="Phone" ><br><br>
			Feedback: <textarea name="Feedback"></textarea><br><br>
			   
			    <input type="submit" name="submit" value="Submit">
			</form>

<?php 
//include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $gmail=$_POST['Gmail'];
    $phone=$_POST['Phone'];
    $feedback=$_POST['Feedback'];
   
    include 'connection.php';
    
    try{
        $sql="INSERT INTO Item2 (Name,Gmail,Phone,Feedback)
    VALUES('$name','$gmail','$phone','$feedback')";
        $db->exec($sql);
        echo "new data added successfully";
        
    }catch(PDOException $e){
        echo "Connection failed:".$e->getMessage();
    }
}



?>