<?php 
include 'db.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'delete from task where id =' . $id;    
    $conn->query($sql);    
}
header('Location: index.php');
?>

