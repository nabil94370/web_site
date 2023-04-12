<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style>
		.password-toggle {
			position: absolute;
			top: 50%;
			right: 5px;
			transform: translateY(-50%);
			cursor: pointer;
		}
		.password-toggle img {
			height: 70px;
		}
		#img_oeil
		{
			margin-right: 10px;
			width: 30px;
			height: 20px;
		}
	</style>
</head>
<body>
     <form action="login.php" method="post" class="all_form">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur"><br>

     	<label>Mot de passe</label>
     	<div style="position: relative;">
			<input type="password" name="passwords" id="password" placeholder="Mot De Passe">
			<span class="password-toggle" onclick="togglePassword()">
				<img src="oeil-ouvert.png" alt="Show/Hide Password" id="img_oeil">
			</span>
		</div><br>

     	<input type="submit" name="submit" value="Login">
		 <a href="inscription.php">
			<button type="button">Inscription</button>
		</a>
     </form>

	 <script>
	function togglePassword() {
		var passwordInput = document.getElementById("password");
		var eyeIcon = document.getElementById("img_oeil");
		if (passwordInput.type === "password") {
			passwordInput.type = "text";
			eyeIcon.src = "oeil-ouvert.png"; // remplacez "oeil-ouvert.png" par le nom de votre image pour l'œil ouvert
		} else {
			passwordInput.type = "password";
			eyeIcon.src = "oeil-ferme.png"; // remplacez "oeil-ferme.png" par le nom de votre image pour l'œil fermé
		}
	}
    </script>
</body>
</html>
