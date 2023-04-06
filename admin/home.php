<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home2.css">
    <title>page_admin</title>   
</head>
<body>
    
    <div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="simple.php" method="POST" class="all_form">
            <div class="form_1">   
            <label for=""  class="form-label_1">adresse</label>
                <input type="text" name="cours" class="jsp_2">
            </div>
            <div class="form_2">
            <label for=""  class="form-label_2">La date</label>
                <input type="date" name="date_cours" class="jsp_2"> 
            </div>
            <div class="form_3">
            <label for=""  class="form-label_3">Nom & Prénom</label>
                <input type="text" name="nom" class="jsp_2">
            </div>
            <div class="form_4">   
            <label for=""  class="form-label_4">types</label>
                <input type="text" name="types" class="jsp_2">   
            </div>
                
                          

                
                  
                
                
                <input type="submit" name="ajouter" class="btn btn-primary mt-4" value="Ajouter">

                <input type="submit" name="ajouter" class="btn btn-primary mt-4" value="Supprimer">
        
        </form>
    
    </div>
    <div class="col-2"></div>
    </div>
    </div>
    <h1>Bonjour, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Se déconnecté</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
     
}
 ?>

