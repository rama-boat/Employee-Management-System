document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("Sidebar");
    const content = document.getElementById("content");

    sidebar.addEventListener("mouseenter", function () {
        sidebar.classList.remove("hide");
        content.classList.remove("hide-sidebar");
    });

    sidebar.addEventListener("mouseleave", function () {
        sidebar.classList.add("hide");
        content.classList.add("hide-sidebar");
    });
});

