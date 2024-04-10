window.addEventListener('scroll', function() {
  var cards = document.querySelectorAll('.animacao');
  cards.forEach(function(card) {
    if (isElementInViewport(card)) {
      card.classList.add('visible');
    }
  });
});

function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
