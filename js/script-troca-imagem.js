window.addEventListener('scroll', function() {
    var logo = document.getElementById('logo');
    if (window.scrollY > 0) {
      logo.classList.add('scrolled');
      logo.innerHTML = '<a href="#inicio"><img src="imagens/santossalles.png" alt="Logo" /></a>';
    } else {
      logo.classList.remove('scrolled');
      logo.innerHTML = '<a href="#inicio"><img src="imagens/santossalleswhite.png" alt="Logo" /></a>';
    }
  });
  