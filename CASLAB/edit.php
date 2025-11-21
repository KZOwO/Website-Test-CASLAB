<?php
include "db.php";

$id = $_GET['id'];
$result = $connection->query("SELECT * FROM listTP WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit TP</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            <h3 class="mb-0">Edit User</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="<?= $row['title']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" value="<?= $row['subtitle']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" value="<?= $row['category']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" value="<?= $row['description']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Opens On</label>
                    <input type="date" name="postOn" value="<?= $row['postOn']; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Closes on</label>
                    <input type="date" name="deadline" value="<?= $row['deadline']; ?>" class="form-control" required>
                </div>

                <button type="submit" name="update" class="btn btn-warning">Update</button>
                <a href="index.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $id     = $_POST['id'];
    $title  = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $postOn = $_POST['postOn'];
    $deadline = $_POST['deadline'];

    $connection->query("UPDATE listTP SET title='$title', subtitle='$subtitle', postOn = '$postOn', deadline = '$deadline', description = '$description' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>

</body>
</html>