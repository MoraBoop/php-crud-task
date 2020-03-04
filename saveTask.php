<?php
    include 'db.php';
    
    if(isset($_POST['save']))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];        
        $sql = "insert into task (title, description) values ('". $title ."', '" . $description . "')";            
        $conn->query($sql);
    } 
    header('Location: index.php');
?>