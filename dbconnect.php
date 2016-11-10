<?php

    $servername ="localhost";
    $username ="nadiatrushy";
    $password ="";
    $dbname ="c9";
    
    
    //create the connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

?>