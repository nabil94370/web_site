document.addEventListener('DOMContentLoaded', function () {
    const colorToggleBtn = document.getElementById('colorToggleBtn');
    let colorToggle = false;
  
    colorToggleBtn.addEventListener('click', function () {
      colorToggle = !colorToggle;
      toggleColor();
    });
  
    function toggleColor() {
      const body = document.body;
      const buttons = document.querySelectorAll('.button');
      const name = document.querySelector('.name');
      const description = document.querySelector('.description');
      const greentext = document.querySelector('.greentext');
  
      if (colorToggle) {
        body.style.backgroundColor = 'white';
        name.style.color = 'black';
        description.style.color = 'black';
        greentext.style.color = '#FF0000';
  
        // Parcourir tous les boutons pour changer la couleur de l'icône en noir
        buttons.forEach(button => {
          const icon = button.querySelector('i');
          if (icon) {
            icon.style.color = 'black';
          }
        });
      } else {
        body.style.backgroundColor = '#091B2E';
        name.style.color = 'white';
        description.style.color = 'white';
        greentext.style.color = 'green';
        // Parcourir tous les boutons pour changer la couleur de l'icône en blanc
        buttons.forEach(button => {
          const icon = button.querySelector('i');
          if (icon) {
            icon.style.color = 'white';
          }
        });
      }
    }
  });
  