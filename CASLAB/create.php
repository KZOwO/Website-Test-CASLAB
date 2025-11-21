<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Preliminary Task</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Add New Preliminary Task</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Post Date</label>
                    <input type="date" name="postOn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Due Date</label>
                    <input type="date" name="deadline" class="form-control" required>
                </div>


                <button type="submit" name="submit" class="btn btn-success">Save</button>
                <a href="index.php" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $title  = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $postOn = $_POST['postOn'];
    $deadline = $_POST['deadline'];

    $connection->query("INSERT INTO listTP (title, subtitle, category, postOn, deadline, description) VALUES ('$title', '$subtitle', '$category', '$postOn', '$deadline', '$description')");
    header("Location: index.php");
    exit;
}
?>

</body>
</html>