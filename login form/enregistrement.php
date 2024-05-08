<?php
    require_once "../pdo.php";
/* récupération des données du formulaire */

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$password = $_POST['password'];

$photo=$_FILES['image']['name'];
$fichierTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemp, 'user/'.$photo );


if(isset($nom) && isset($password) && isset($prenom) && isset($numero) && !empty($password) && !empty($nom) && !empty($prenom) && !empty($numero))
{
$sql= "INSERT INTO user (nom,prenom,numero,password,photo) VALUES('$nom','$prenom','$numero','$password','$photo')";
$pdo->exec($sql);
header('location:login.php');
}
else{
header('location:inscription.php');

}
?>

 