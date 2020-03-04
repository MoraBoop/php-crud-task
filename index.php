<?php include 'db.php';?>
<?php include 'header.php';?>

<body>
    <header class="bg-dark text-white" style="padding: 10px;">
        <h1 class="text-center">PHP Crud - Task</h1>
    </header>
    
    <br>

    <main class="container">
        <div class="row">
            <div class="col-4">
                <form action="saveTask.php" method="post">
                    <div class="form-group card border-primary">
                        <div class="card-body">
                            <p>
                                <label for="">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </p>
                            <p>
                                <label for="">Description</label>                                
                                <textarea name="description" id="description" rows="4" class="form-control"></textarea>
                            </p>
                            <p>
                                <input type="submit" value="Save" name="save" class="form-control btn-primary">
                            </p>
                        </div>
                    </div>
                </form>
                <h5 class="text-center">Powered By <span class="badge badge-secondary">Mora</span></h5>
            </div>
            <div class="col-8">
                <div class="table-responsive">
                    <table class="table border">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Fecha de creacion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>                        
                            <?php 
                                $sql = "select id, title, description, create_at from task";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {                                
                            ?>
                            <tr>
                                <td><?php echo $row["title"]?></td>
                                <td><?php echo $row["description"]?></td>
                                <td><?php echo $row["create_at"]?></td>
                                <td>
                                    <a href="editTask.php?id=<?php echo $row["id"]?>" class="btn btn-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="deleteTask.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>                        
                            <?php                                 
                                }                                                                 
                            ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </main>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>