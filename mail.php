<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminn.css">
    <script src="style.js" defer></script>
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- nice selecy -->
  <link rel="stylesheet" href="css/nice-select.min.css">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            <img src="logo_porte.jpg" alt="" width="50px" height="50px">
            </span>
          </a>  
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> À propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="property.html">Propriété</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.html">Pourquoi nous</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.html">Témoignage</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="mail.php">Contact</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- client section -->
  <div class="containere">
    <h1>Contactez-nous</h1>
    <form action="envoie-d'email.php" method="post">
        <label for="fname">Nom & prénom</label>
        <input type="text" id="fname" name="nom" placeholder="Votre nom et prénom">

        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

        <label for="emailAddress">Email</label>
        <input id="emailAddress" type="email" name="email" placeholder="Votre email">

        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Votre message" style="height:200px"></textarea>

        <button class="good_btn" type="submit">Envoyer</button>
        <button class="cancel_btn"><a href="index.html">Annuler</a></button>
    </form>
  </div>

  <!-- end client section -->

  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +33 06 37 43 53 91
          </span>
        </a>
        <a href="mail.php">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : nblabbes@gmail.com
          </span>
        </a>
        <a href="https://www.google.com/maps/place/Mairie+de+Sucy-en-Brie/@48.7708729,2.5237451,15z/data=!4m6!3m5!1s0x47e60bf65ba9a17d:0xd3eb0fad016c8fe4!8m2!3d48.7708729!4d2.5237451!16s%2Fg%2F1td4tl2b">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class=" col-md-4 col-lg-4 ">
            <div class="info_about">
              <h4>
                À PROPOS DE NOUS
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vitae. Dolorem incidunt consectetur, recusandae enim officiis mollitia modi consequatur ab non animi provident quis asperiores eius omnis suscipit maiores perferendis?
              </p>
            </div>
          </div>
          <div class=" col-md-4 col-lg-3 mx-auto">
            <div class="info_links">
              <h4>
                LIENS RAPIDES
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="" href="about.html"> À propos</a>
                <a class="" href="property.html">Propriété</a>
                <a class="" href="why.html">Pourquoi nous</a>
                <a class="" href="testimonial.html">Témoignage</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- nice select -->
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>
</html>