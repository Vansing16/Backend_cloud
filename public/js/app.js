


document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.getElementById("sidebar");
    const minimizeIcon = document.getElementById("icon-minimize");
    const menuIcon = document.getElementById("menu-icon");

    menuIcon.addEventListener("click", function() {
        sidebar.classList.add("show");
        minimizeIcon.classList.add("show");
    });

    minimizeIcon.addEventListener("click", function() {
        console.log("Minimize icon clicked");
        if (sidebar.classList.contains("show")) {
            sidebar.classList.remove("show");
            minimizeIcon.classList.remove("show");
        } else {
            console.log("Sidebar is not shown. No action taken.");
        }
    });
});


// Add this JavaScript to set the active class based on the current page
document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname;

    links.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
});
