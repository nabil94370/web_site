<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="ovh5.css">
    <style>
        body {
            text-align: center;
        }
        #titre_ovh {
            margin-top: 50px;
            color: #004DFF;
        }
    </style>
</head>
<body>
<nav class="sidebar-navigation" id="ovhba">
	<ul>
		<li id="admin-view">
			<i class="fa fa-hdd-o">Admin View</i>
		</li>
        <a href="admin.php">
        <li id="admin2-view">
			<i class="fa fa-hdd-o">Entré donnée</i>
		</li>
        </a>
        <a href="../index.html">
        <li id="admin3-view">
			<i class="fa fa-hdd-o">Home</i>
		</li>
        </a>
	</ul>
</nav>  
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
    <h1 id="titre_ovh">Bienvenue Dans la Page d'acceuil</h1>
    <br><br>
    <strong>
    <p id="texte_ovh">
    Bienvenue sur notre site de vente en ligne d'installations de portes blindées, où la sécurité de votre maison ou de votre entreprise est notre priorité absolue. 
    </p>
    </strong>
</div>



<script>
    document.getElementById("admin-view").addEventListener("click", function() {
        window.location.href = "view.php";
    });
</script>

</body>
</html>
