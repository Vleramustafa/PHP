<?php
// Change these if needed
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'event_calendar';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
