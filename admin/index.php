<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css.css">
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
     	<input type="password" name="passwords" placeholder="Mot De Passe"><br>

     	<input type="submit" name="submit" value="Login">
		 <a href="inscription.php">
			<button type="button">Inscription</button>
		</a>
     </form>
</body>
</html>