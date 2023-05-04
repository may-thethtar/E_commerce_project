<?php

if(isset($_POST['submit']))
{
    $uid=$_POST['name'];
    $pwd=$_POST['pwd'];
}
if($uid=="admin" and $pwd="123")
{
    header("Location:home.php");
    
}

else {
    header("Location:Login.php");
}
?>