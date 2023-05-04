
<?php

include 'connection.php';//to call the connection
try {
    $sql="CREATE DATABASE Shopping";//that wa the statment$
    $db->exec($sql);//to execute
    echo "database created sucessfully";
} catch (PDOException $e) {
    echo"Connection Failed:".$e->getMessage();//if connection failed and then getmessage is the reson for connection failed
}

?>