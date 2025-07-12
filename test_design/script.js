const cards = document.querySelectorAll('.card');
let flippedCards = [];

cards.forEach(card => {
  const input = card.querySelector('input');
  
  input.addEventListener('change', () => {
    if (input.checked) {
      flippedCards.push(card);

      if (flippedCards.length === 2) {
        const [first, second] = flippedCards;

        const id1 = first.dataset.id;
        const id2 = second.dataset.id;

        if (id1 !== id2 || id1 == id1 ) {
          setTimeout(() => {
            first.querySelector('input').checked = false;
            second.querySelector('input').checked = false;
            flippedCards = [];
          }, 1000);
        } else {
          flippedCards = [];
        }
      }
    }
  });
});
