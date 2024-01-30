<!DOCTYPE html>
<html>
  <head>
    <title>Slideshow Images</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="slider_petit.css">
    <link rel="stylesheet" href="slideeee.css">
    <link rel="stylesheet" href="banderole.css">
    <style>
      .rubrique{
        margin-right: 55px;
        width: 150px;
      }
      .rubrique_div{
        display: flex;
        background-color: white;
        flex-direction: column;
        color: black;
      }
    </style>
    <script src="slider.js"></script>
  </head>
  <body>
  <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Portefolio</a>
        <a href="#">Contact</a>
        <div class="animation start-home"></div>
    </nav>

    <<div class="sliders-container">
  <div class="sliders-track">
    <div class="slides"><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""></div>
    <div class="slides"><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""></div>
    <div class="slides"><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""><img src="mario.jpg" alt=""></div>
  </div>
  <div class="sliders-arrows">
    <div class="arrow prev" id="fleche_a_gauche"><img src="arrow_left.png" alt="" width="50"></div>
    <div class="arrow next" id="fleche_a_droite"><img src="flèchedroite.jpg" alt="" width="50"></div>
  </div>
</div>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
    
    <div class="slider">
  <span id="slide-1"></span>
  <span id="slide-2"></span>
  <span id="slide-3"></span>
  <div class="image-container" style="left: 0;">
    <a href="commentaire.php"><img src="lol.jpg" class="slide active" width="800" height="500" /></a> <!-- Largeur et hauteur modifiées -->
    <a href="commentaire_fortnite.php"><img src="fornite.jpg" class="slide" width="800" height="500" /></a> <!-- Largeur et hauteur modifiées -->
    <a href="commentaire_valo.php"><img src="valorant.jpg" class="slide" width="800" height="500" /></a> <!-- Largeur et hauteur modifiées -->
  </div>
  <div class="buttons">
    <a href="#slide-1" class="active"></a>
    <a href="#slide-2"></a>
    <a href="#slide-3"></a>
  </div>
</div>

<script>
  var currentSlide = document.querySelector('.image-container');
  var currentPosition = 0;
  var slideInterval = setInterval(nextImage, 2000); // Interval en millisecondes (2 secondes)
  var buttons = document.querySelectorAll('.buttons a');

  // Ajouter la classe active à la première image (slide) et au premier bouton
  var firstSlide = document.querySelector('.slide');
  firstSlide.classList.add('active');
  buttons[0].classList.add('active');

  function nextImage() {
    currentPosition -= 800;
    if (currentPosition < -1600) {
      currentPosition = 0;
    }
    currentSlide.style.left = currentPosition + 'px';

    // Mettre à jour la classe active sur les boutons
    var activeButtonIndex = Math.abs(currentPosition / 800);
    for (var i = 0; i < buttons.length; i++) {
      if (i === activeButtonIndex) {
        buttons[i].classList.add('active');
      } else {
        buttons[i].classList.remove('active');
      }
    }
  }
</script>

  </body>
</html>
