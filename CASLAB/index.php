<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap CRUD</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/tootplate-strategic-style.css">
</head>
<body class="bg-light">


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Informatics Lab</h3>
        </div>
        <div class="card-body">
            <a href="create.php" class="btn btn-success mb-3">+ Add New Preliminary Task</a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        
                        <th width="10%">ID</th>
                        <th width="10%">Title</th>
                        <th width="20%">Subtitle</th>
                        <th width="10%">Category</th>
                        
                        <th width="30%">Description</th>
                        <th width="10%">Opens On</th>
                        <th width="40%">Closes On</th>    
                        
                    </tr>
                    
                    
                </thead>
                <tbody>
                    <?php
                    $result = $connection->query("SELECT * FROM listTP");
                    while ($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['subtitle']; ?></td>
                        <td><?= $row['category']; ?></td>
                            <td><?= $row['description']; ?></td>
                            <td><?= $row['postOn']; ?></td>
                            <td><?= $row['deadline']; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"
                               onclick="return confirm('Delete This Document?')">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>