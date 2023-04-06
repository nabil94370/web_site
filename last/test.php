<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Présentation de portes blindées</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Présentation de portes blindées</h1>
    <nav>
      <ul>
        <li><a href="#presentation">Présentation</a></li>
        <li><a href="#avantages">Avantages</a></li>
        <li><a href="#modeles">Modèles</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="presentation">
      <h2>Présentation</h2>
      <p>Notre entreprise est spécialisée dans la fabrication et la vente de portes blindées. Nous proposons une large gamme de produits de haute qualité, qui répondent aux normes de sécurité les plus exigeantes. Nos portes sont fabriquées sur mesure, en fonction des besoins et des exigences de nos clients.</p>
    </section>
    <section id="avantages">
      <h2>Avantages</h2>
      <ul>
        <li>Protection maximale contre les cambriolages et les intrusions</li>
        <li>Isolation thermique et acoustique optimale</li>
        <li>Design personnalisable, adapté à tous les styles d'habitation</li>
        <li>Installation rapide et facile</li>
        <li>Service après-vente de qualité</li>
      </ul>
    </section>
    <section id="modeles">
      <h2>Modèles</h2>
      <ul>
        <li><img src="modele1.jpg" alt="Modèle 1"><h3>Modèle 1</h3></li>
        <li><img src="modele2.jpg" alt="Modèle 2"><h3>Modèle 2</h3></li>
        <li><img src="modele3.jpg" alt="Modèle 3"><h3>Modèle 3</h3></li>
        <li><img src="modele4.jpg" alt="Modèle 4"><h3>Modèle 4</h3></li>
      </ul>
    </section>
    <section id="contact">
      <h2>Contact</h2>
      <form action="envoyer.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <input type="submit" value="Envoyer">
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 - Tous droits réservés</p>
  </footer>
</body>
</html>
