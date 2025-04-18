<?php
require_once '../includes/db.php';
require_once '../includes/auth.php';
requireLogin();

$user_id = $_SESSION['user_id'];
$action = $_GET['action'] ?? '';

if ($action === 'list') {
    $stmt = $conn->prepare("SELECT id, title, event_date AS start, description FROM events WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $events = [];
    while ($row = $result->fetch_assoc()) {
        $events[] = array_merge($row, ['description' => $row['description'] ?? '']);
    }
    echo json_encode($events);
    exit;
}

if ($action === 'add') {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $desc = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO events (user_id, title, event_date, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $title, $date, $desc);
    $stmt->execute();
    echo "Event Added";
    exit;
}

if ($action === 'edit') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $desc = $_POST['description'];

    // Ensure event belongs to user
    $stmt = $conn->prepare("UPDATE events SET title = ?, event_date = ?, description = ? WHERE id = ? AND user_id = ?");
    $stmt->bind_param("sssii", $title, $date, $desc, $id, $user_id);
    $stmt->execute();
    echo "Event Updated";
    exit;
}

if ($action === 'delete') {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM events WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $id, $user_id);
    $stmt->execute();
    echo "Event Deleted";
    exit;
}

if ($action === 'move') {
    $id = $_POST['id'];
    $newDate = $_POST['date'];

    $stmt = $conn->prepare("UPDATE events SET event_date = ? WHERE id = ? AND user_id = ?");
    $stmt->bind_param("sii", $newDate, $id, $user_id);
    $stmt->execute();
    echo "Event Moved";
    exit;
}

http_response_code(400);
echo "Invalid Request";
