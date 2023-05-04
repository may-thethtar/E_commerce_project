<?php
session_start();
include 'connection.php';

if ($_SERVER['REQUEST_METHOD']=="POST")
{
	if(isset($_POST['purchase'])){
		
		try{
			$sql="INSERT INTO order_manager(Full_Name, Phone_No, Address, Pay_Mode) VALUES(?,?,?,?)";
			$sq= $db->prepare($sql);
			
			$fullname= $_POST['fullname'];
			$phoneno= $_POST['phone_no'];
			$address=$_POST['address'];
			$paymode= $_POST['pay_mode'];
			if($sq->execute(array($fullname,$phoneno,$address,$paymode))){
				
			}
			else echo "FAILED";
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}
}
session_destroy();
header("Location: index.php");

?>