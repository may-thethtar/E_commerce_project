<?php

include 'connection.php';

$did=$_POST['id'];
$foodname=$_POST['foodname'];
$category=$_POST['category'];
$description=$_POST['description'];
$price=$_POST['price'];


$oldimg=$_POST['oldimg'];
$newimg=$_FILES['newimg']['name'];

if($newimg!="")
{
    $updatephoto = $newimg;
    move_uploaded_file($_FILES['newimg']['tmp_name'], "image/".$newimg);
}
else {
    $updatephoto = $oldimg;
}
$sql=$db->prepare("UPDATE item SET IID='$did', foodname='$foodname', category='$category',
description='$description', price='$price', image='$updatephoto'
WHERE IID='$did'");
$sql->execute();
header('location: view.php');
?>


