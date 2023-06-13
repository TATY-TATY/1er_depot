<?php 
include 'header.php'; 
if(isset($_POST['ajouter'])){
    $titre=$_POST['titre'];
    $description=$_POST['description'];
    $date=$_POST['echeance'];

    $titre = mysqli_real_escape_string($conn, $titre);
    $description = mysqli_real_escape_string($conn, $description);
    $date = mysqli_real_escape_string($conn, $date);

    $query = "INSERT INTO taches (titre, description, date_ech) VALUES ('$titre', '$description', '$date')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: index.php");
    }
}

?>
