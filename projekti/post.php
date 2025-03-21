<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Post not found!";
        exit;
    }
} else {
    echo "Invalid post ID!";
    exit;
}

include 'header.php';
?>

<h1><?php echo $row['title']; ?></h1>
<p><em>Posted on <?php echo $row['created_at']; ?></em></p>
<div class="content">
    <p><?php echo nl2br($row['content']); ?></p>
</div>

<?php include 'footer.php'; ?>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "New post created successfully.";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

include 'header.php';
?>

<h1>Create New Post</h1>

<form method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>

    <button type="submit">Submit</button>
</form>

<?php include 'footer.php'; ?>