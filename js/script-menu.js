document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.querySelector(".menu-icon");
    const menu = document.querySelector(".menu");
  
    menuIcon.addEventListener("click", function() {
      menu.classList.toggle("open"); // Alternar a classe 'open' para mostrar ou esconder o menu
    });
  });
  