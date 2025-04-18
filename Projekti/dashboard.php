<?php
require_once 'includes/db.php';
require_once 'includes/auth.php';
requireLogin();

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
?>

<?php include 'templates/header.php'; ?>
<?php include 'templates/nav.php'; ?>

<main class="container">
    <h2>Welcome, <?= htmlspecialchars($username) ?> 👋</h2>
    <div id="calendar"></div>

    <!-- Modal for Adding/Editing Events -->
    <div id="eventModal" class="modal hidden">
        <form id="eventForm">
            <input type="hidden" id="eventId">
            <input type="text" id="eventTitle" placeholder="Event Title" required>
            <input type="date" id="eventDate" required>
            <textarea id="eventDesc" placeholder="Description"></textarea>
            <div class="form-actions">
                <button type="submit" class="btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeModal()">Cancel</button>
            </div>
        </form>
    </div>
</main>

<?php include 'templates/footer.php'; ?>
