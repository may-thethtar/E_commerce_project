
		<form method="POST">
			FoodName:  <input type="text" name="foodname"  ><br><br>
			Category: <input type="text" name="category" ><br><br>
			Description: <textarea name="description"></textarea><br><br>
			Price:  <input type="text" name="price" ><br><br>
			Image: <input type="file" name="image"><br><br>
			   
			    <input type="submit" name="submit" value="Submit">
			</form>

<?php 
//include 'connection.php';
if(isset($_POST['submit'])){
    $foodname=$_POST['foodname'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $image=$_POST['image'];
    include 'connection.php';
    
    try{
        $sql="INSERT INTO Item (foodname,category,description,price,image)
    VALUES('$foodname','$category','$description','$price','$image')";
        $db->exec($sql);
        echo "new data added successfully";
        
    }catch(PDOException $e){
        echo "Connection failed:".$e->getMessage();
    }
}



?>