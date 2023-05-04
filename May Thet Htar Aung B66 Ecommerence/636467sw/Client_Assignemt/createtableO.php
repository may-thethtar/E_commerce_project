<?php

include 'connection.php';
try {
	$sql="CREATE TABLE order_manager(Order_id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(Order_id),
  	 Full_Name VARCHAR(100),
    Phone_No BIGINT(100),
   Address VARCHAR(255),
	Pay_Mode VARCHAR(255))";
	$db->exec($sql);//to execute
	echo "Table created sucessfully";
} catch (PDOException $e) {
	echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>