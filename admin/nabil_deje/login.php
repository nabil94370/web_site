<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['passwords'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['passwords']);

	if (empty($uname)) {
		header("Location: index.php?error=Nom d'utilisateur obligatoire");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Mot de passe obligatoire");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND passwords='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['passwords'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ovh.php");
		        exit();
            }else{
				header("Location: index.php?error=Nom d'utilisateur ou Mot de passe incorrect");
		        exit();
			}
		}else{
			header("Location: index.php?error=Nom d'utilisateur ou Mot de passe incorrect");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}