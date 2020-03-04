<?php 
include 'db.php';
include 'header.php';

//$title = '';
//$description = '';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'select title, description from task where id = ' . $id;    
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $title = $row['title'];
        $description = $row['description'];
    }    
}

if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "update task set title = '" . $title . "', description = '" . $description . "' where id =" . $id;
    $conn->query($sql);

    header('Location: index.php');
}

?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <form action="editTask.php?id=<?php echo $_GET['id']?>" method="post">
                <div class="form-group card border-success">
                    <div class="card-body">
                        <p>
                            <label for="">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo $title?>">
                        </p>
                        <p>
                            <label for="">Description</label>                                
                            <textarea name="description" id="description" rows="4" class="form-control"><?php echo $description?></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Update" name="update" class="form-control btn-success">
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
