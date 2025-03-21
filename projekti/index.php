
<?php
$host = "localhost";
$username = "root";  
$password = "";      
$dbname = "blog";

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php
include 'db.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

include 'header.php';
?>

<h1>Welcome to My Blog</h1>

<div class="posts">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='post'>";
            echo "<h2><a href='post.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h2>";
            echo "<p>" . substr($row['content'], 0, 200) . "...</p>";
            echo "<p><a href='post.php?id=" . $row['id'] . "'>Read More</a></p>";
            echo "</div>";
        }
    } else {
        echo "<p>No posts available.</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>