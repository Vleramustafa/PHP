<?php
session_start();
require_once 'includes/db.php';
require_once 'includes/auth.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.1/fullcalendar.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.1/fullcalendar.min.js"></script>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Event Calendar</div>
    <div class="nav-links">
        <a href="logout.php">Log Out</a>
    </div>
    <div class="theme-toggle" onclick="toggleTheme()">
        &#9790; <!-- Sun/Moon Icon -->
    </div>
</div>

<!-- Main Container -->
<div class="container">
    <h2>My Calendar</h2>
    <div id="calendar"></div>
</div>

<!-- Modal for Event Details -->
<div id="eventModal" class="modal hidden">
    <div class="modal-content">
        <h3>Add/Edit Event</h3>
        <form id="eventForm">
            <input type="hidden" id="eventId" name="id">
            <label for="eventTitle">Title:</label>
            <input type="text" id="eventTitle" name="title" required>
            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" name="date" required>
            <label for="eventDescription">Description:</label>
            <textarea id="eventDescription" name="description"></textarea>
            <div class="form-actions">
                <button type="button" class="btn cancel" onclick="closeModal()">Cancel</button>
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</div>

<script src="assets/js/app.js"></script>
<script>
    // Initialize FullCalendar
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            events: function(start, end, timezone, callback) {
                $.ajax({
                    url: 'api/events.php?action=list',
                    dataType: 'json',
                    success: function(data) {
                        var events = data.map(function(event) {
                            return {
                                title: event.title,
                                start: event.start,
                                description: event.description,
                                id: event.id
                            };
                        });
                        callback(events);
                    }
                });
            },
            dayClick: function(date, jsEvent, view) {
                openModal(date);
            },
            eventClick: function(calEvent, jsEvent, view) {
                openModal(calEvent.start, calEvent.title, calEvent.description, calEvent.id);
            }
        });
    });

    // Dark/Light Mode Toggle
    function toggleTheme() {
        document.body.classList.toggle('dark');
        localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
    }

    // Check for theme preference on page load
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark');
    }

    // Open Modal to Add or Edit Event
    function openModal(date = '', title = '', description = '', id = '') {
        $('#eventTitle').val(title);
        $('#eventDate').val(moment(date).format('YYYY-MM-DD'));
        $('#eventDescription').val(description);
        $('#eventId').val(id);

        $('#eventModal').removeClass('hidden').addClass('active');
    }

    // Close Modal
    function closeModal() {
        $('#eventModal').removeClass('active').addClass('hidden');
    }

    // Handle Event Form Submission
    $('#eventForm').submit(function(e) {
        e.preventDefault();
        
        const formData = {
            title: $('#eventTitle').val(),
            date: $('#eventDate').val(),
            description: $('#eventDescription').val(),
            id: $('#eventId').val() || ''
        };

        const action = formData.id ? 'edit' : 'add';
        
        $.post('api/events.php?action=' + action, formData, function(response) {
            alert(response);
            $('#calendar').fullCalendar('refetchEvents');
            closeModal();
        });
    });
</script>

</body>
</html>
