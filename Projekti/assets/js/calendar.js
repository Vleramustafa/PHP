document.addEventListener("DOMContentLoaded", () => {
    const calendarEl = document.getElementById("calendar");
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        editable: true,
        events: 'api/events.php?action=list',
        dateClick: info => openModal(null, info.dateStr),
        eventClick: info => openModal(info.event.id, info.event.startStr, info.event.title, info.event.extendedProps.description),
        eventDrop: info => {
            updateEventDate(info.event.id, info.event.startStr);
        }
    });
    calendar.render();

    const form = document.getElementById("eventForm");

    form.addEventListener("submit", e => {
        e.preventDefault();
        const id = document.getElementById("eventId").value;
        const title = document.getElementById("eventTitle").value;
        const date = document.getElementById("eventDate").value;
        const description = document.getElementById("eventDesc").value;

        const formData = new FormData();
        formData.append("id", id);
        formData.append("title", title);
        formData.append("date", date);
        formData.append("description", description);

        fetch("api/events.php?action=" + (id ? "edit" : "add"), {
            method: "POST",
            body: formData
        }).then(() => {
            closeModal();
            calendar.refetchEvents();
        });
    });

    window.openModal = (id = null, date = '', title = '', description = '') => {
        document.getElementById("eventId").value = id || '';
        document.getElementById("eventTitle").value = title || '';
        document.getElementById("eventDate").value = date || '';
        document.getElementById("eventDesc").value = description || '';
        document.getElementById("eventModal").classList.remove("hidden");
    };

    window.closeModal = () => {
        document.getElementById("eventModal").classList.add("hidden");
    };

    function updateEventDate(id, newDate) {
        const formData = new FormData();
        formData.append("id", id);
        formData.append("date", newDate);

        fetch("api/events.php?action=move", {
            method: "POST",
            body: formData
        }).then(() => calendar.refetchEvents());
    }
});
