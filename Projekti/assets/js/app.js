const toggle = document.getElementById("theme-toggle");
const body = document.body;

function applyTheme(theme) {
    if (theme === "dark") {
        body.classList.add("dark");
    } else {
        body.classList.remove("dark");
    }
}

toggle.addEventListener("click", () => {
    const isDark = body.classList.toggle("dark");
    localStorage.setItem("theme", isDark ? "dark" : "light");
});

window.addEventListener("DOMContentLoaded", () => {
    const userPref = localStorage.getItem("theme");
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    applyTheme(userPref || (systemPrefersDark ? "dark" : "light"));
});
