<?php
require('db-conn.php');

// Récupération des données pour les boîtiers
$result = $conn->query("SELECT nom, prix, image_url FROM boitier");
$boitiers = $result->fetch_all(MYSQLI_ASSOC);

// Récupération des données pour les cartes graphiques
$result = $conn->query("SELECT nom, prix, image_url FROM cartegraphique");
$cartesGraphiques = $result->fetch_all(MYSQLI_ASSOC);

// Récupération des données pour les cartes mères
$result = $conn->query("SELECT nom, prix, image_url  FROM cartemere");
$cartesMeres = $result->fetch_all(MYSQLI_ASSOC);

// Récupération des données pour les cartes réseau
$result = $conn->query("SELECT nom, prix, image_url FROM cartereseau");
$cartesReseau = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .left-side, .right-side {
            flex: 1;
            height: 100%;
            border-right: 2px solid #333;
            overflow-y: auto;
            padding: 20px;
        }

        .left-side {
            background-color: #f0f0f0;
        }

        .right-side {
            background-color: #ffffff;
        }

        .component-list {
            list-style-type: none;
            padding: 0;
        }

        .component-list-item {
            margin-bottom: 15px;
        }

        .component-image {
            width: 80%;
            height: auto;
            max-width: 200px;
            display: block;
            margin-top: 10px;
            cursor: move;
        }

        .drop-area {
            border: 2px dashed #333;
            padding: 20px;
            text-align: center;
        }

        #total-price {
            margin-top: 10px;
            font-weight: bold;
        }

        #image-container {
            height: 100%;
            overflow-y: auto;
        }
        .rack {
        background-color: #ddd;
        width: 100%; /* Ajustez la largeur ici (par exemple, 90%) */
        height: 700px; /* Ajustez la hauteur selon vos besoins */
        margin: 20px auto;
        position: relative;
        border: 4px dashed #333; /* Bordure pointillée */
    }
    
    .rack-component {
        position: absolute;
        cursor: move;
        width: 50px; /* Ajustez la largeur des boîtes selon vos besoins */
        height: 500px; /* Ajustez la hauteur des boîtes selon vos besoins */
        background-color: #3498db; /* Couleur de fond des boîtes */
        border: 2px solid #2980b9; /* Bordure des boîtes */
    }

    .rack-component img {
        width: 100%;
        height: 100%;
    }
    </style>
    <title>Page Divisée</title>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <h2>Composants</h2>
            <ul class="component-list">
            <?php foreach ($boitiers as $boitier): ?>
                <li class="component-list-item">
                    <strong>Nom:</strong> <?php echo $boitier['nom']; ?><br>
                    <strong>Prix:</strong> <?php echo $boitier['prix']; ?><br>
                    <img class="component-image" src="<?php echo $boitier['image_url'] . '?prix=' . $boitier['prix']; ?>" alt="<?php echo $boitier['nom']; ?>" draggable="true" ondragstart="drag(event)">
                </li>
            <?php endforeach; ?>
            <?php foreach ($cartesGraphiques as $carteGraphique): ?>
                <li class="component-list-item">
                    <strong>Nom:</strong> <?php echo $carteGraphique['nom']; ?><br>
                    <strong>Prix:</strong> <?php echo $carteGraphique['prix']; ?><br>
                    <img class="component-image" src="<?php echo $carteGraphique['image_url'] . '?prix=' . $carteGraphique['prix']; ?>" alt="<?php echo $carteGraphique['nom']; ?>" draggable="true" ondragstart="drag(event)">
                </li>
            <?php endforeach; ?>
            <?php foreach ($cartesMeres as $carteMere): ?>
                <li class="component-list-item">
                    <strong>Nom:</strong> <?php echo $carteMere['nom']; ?><br>
                    <strong>Prix:</strong> <?php echo $carteMere['prix']; ?><br>
                    <img class="component-image" src="<?php echo $carteMere['image_url'] . '?prix=' . $carteMere['prix']; ?>" alt="<?php echo $carteMere['nom']; ?>" draggable="true" ondragstart="drag(event)">
                </li>
            <?php endforeach; ?>
            <?php foreach ($cartesReseau as $carteReseau): ?>
                <li class="component-list-item">
                    <strong>Nom:</strong> <?php echo $carteReseau['nom']; ?><br>
                    <strong>Prix:</strong> <?php echo $carteReseau['prix']; ?><br>
                    <img class="component-image" src="<?php echo $carteReseau['image_url'] . '?prix=' . $carteReseau['prix']; ?>" alt="<?php echo $carteReseau['nom']; ?>" draggable="true" ondragstart="drag(event)">
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="right-side" ondrop="drop(event)" ondragover="allowDrop(event)">
            <div class="drop-area">
                <h2>Déposer l'image ici</h2>
                <p id="total-price">Prix total: 0</p>
                <button onclick="clearImages()">Effacer toutes les images</button>
            </div>
            <div id="rack-container" class="rack">
                <div class="rack-component" style="left: 50px; top: 50px; margin-top: 50px;" ></div>
                <div class="rack-component" style="left: 400px; top: 100px;"></div>
                <div class="rack-component" style="left: 750px; top: 150px; margin-top: -50px; "></div>
            </div>
        </div>
    </div>
    
    <script>
        var totalPrice = 0;

        function allowDrop(event) {
            event.preventDefault();
        }

        function drop(event) {
            event.preventDefault();
            var data = event.dataTransfer.getData("text");

            var componentPrice = parseFloat(data.split('prix=')[1]);
            totalPrice += componentPrice;
            updateTotalPrice();

            var draggedImage = new Image();
            draggedImage.src = data;

            draggedImage.onload = function() {
                var rackContainer = document.getElementById("rack-container");

                var componentDiv = document.createElement('div');
                componentDiv.classList.add('rack-component');

                var clonedImage = draggedImage.cloneNode(true);
                clonedImage.style.cursor = 'default';
                clonedImage.removeAttribute('draggable');
                clonedImage.classList.add('component-image');

                var deleteButton = document.createElement('button');
                deleteButton.innerHTML = 'X';
                deleteButton.onclick = function() {
                    rackContainer.removeChild(componentDiv);

                    totalPrice -= componentPrice;
                    updateTotalPrice();
                };

                componentDiv.appendChild(clonedImage);
                componentDiv.appendChild(deleteButton);

                rackContainer.appendChild(componentDiv);
            };
        }
        

        function clearImages() {
            var imageContainer = document.getElementById("image-container");
            imageContainer.innerHTML = '';

            totalPrice = 0;
            updateTotalPrice();
        }

        function updateTotalPrice() {
            var totalElement = document.getElementById("total-price");
            totalElement.innerHTML = "Prix total: " + totalPrice.toFixed(2);
        }

        function drag(event) {
            event.dataTransfer.setData("text", event.target.src);
        }
    </script>
</body>
</html>