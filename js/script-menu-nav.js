document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");
    const menu = document.querySelector(".menu");

    menuIcon.addEventListener("click", function () {
        menu.classList.toggle("active");
    });

    const menuItems = document.querySelectorAll(".menu a");
    menuItems.forEach(item => {
        item.addEventListener("click", function () {
            if (window.innerWidth <= 768) {
                menu.classList.remove("active");
            }
        });
    });
});

window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    const scrolled = window.scrollY > 0; // Verifica se a página foi rolada

    if (scrolled) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
});