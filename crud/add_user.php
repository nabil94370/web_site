<?php 
include('connection.php');
$date = ($_POST['dates']);
    $date_unpose = ($_POST['date_unpose']);
    $porte_numero = $_POST['Numéro'];
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $Agence = $_POST['Agence'];
    $Adresse = $_POST['adressess'];
    $Etage = $_POST['Etage'];

$sql = "INSERT INTO `etudiant` (first_name,last_name,dates,dates_unpose,porte_numero,agences,adresses,Etage) VALUES ('$nom', '$prenom','$date','$date_unpose','$porte_numero','$Agence','$Adresse','$Etage')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>