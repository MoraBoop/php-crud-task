<?php 
    $serverName = "localhost";
    $userName = "root";
    $password = "jm73972104";
    $dbname = "myTasks";
    
    $conn = new mysqli($serverName, $userName, $password, $dbname);

    //Check Connection
    if($conn->connect_error){
        die("Conexion fallida: " . $conn->connect_error);
    }
?>