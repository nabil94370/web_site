window.addEventListener('load', function() {
    var sliderTrack = document.querySelector('.sliders-track');
    var slides = document.querySelectorAll('.slides');
    var prevArrow = document.querySelector('.arrow.prev');
    var nextArrow = document.querySelector('.arrow.next');
    var slideWidth = slides[0].offsetWidth;
    var currentIndex = 0;
    var timer;
  
    prevArrow.addEventListener('click', function() {
      clearInterval(timer);
      if (currentIndex === 0) {
        currentIndex = slides.length - 1;
      } else {
        currentIndex--;
      }
      updateSlider();
      startAutoScroll();
    });
  
    nextArrow.addEventListener('click', function() {
      clearInterval(timer);
      if (currentIndex === slides.length - 1) {
        currentIndex = 0;
      } else {
        currentIndex++;
      }
      updateSlider();
      startAutoScroll();
    });
  
    function updateSlider() {
      var translateXValue = -currentIndex * slideWidth;
      sliderTrack.style.transform = 'translateX(' + translateXValue + 'px)';
    }
  
    function startAutoScroll() {
      clearInterval(timer);
      timer = setInterval(function() {
        if (currentIndex === slides.length - 1) {
          currentIndex = 0;
        } else {
          currentIndex++;
        }
        updateSlider();
      }, 3000); // Temps en millisecondes entre chaque défilement automatique
    }
  
    startAutoScroll();
  });
  