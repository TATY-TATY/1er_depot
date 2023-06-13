<?php
  // Méthode mysqli
  $host = "localhost";
  $user = "root";
  $pass = "";
  $base = "projet_todo_list";

  $conn = mysqli_connect($host, $user, $pass, $base);
  if ($conn) {
    // Récupérer toutes les tâches
    $query = "SELECT * FROM taches";
    $result = mysqli_query($conn, $query);

    // Récupérer les tâches effectuées
    $queryEffectuees = "SELECT * FROM taches WHERE complete = 1";
    $resultEffectuees = mysqli_query($conn, $queryEffectuees);

    $tasks = array();
    $tasksEffectuees = array();

    while ($row = mysqli_fetch_assoc($result)) {
      $tasks[] = $row;
    }

    while ($rowEffectuees = mysqli_fetch_assoc($resultEffectuees)) {
      $tasksEffectuees[] = $rowEffectuees;
    }
  } else {
    die("Connexion échec : " . mysqli_connect_error());
  }

  include 'footer.php';
?>
