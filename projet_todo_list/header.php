<?php include 'db.php'?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projet Todolist</title>
	<link rel="stylesheet" href="perso/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



</head>
</body>
<div class="neon-background">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TATY-TATY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  </div>
</nav>

<div class="container mt-4">
    <h1>Barre de progression des tâches</h1>

    <?php
      // Données factices pour l'exemple
      $totalTasks = count($tasks);
      $completedTasks = count($tasksEffectuees);

	  if($totalTasks != 0){
      // Calcul du pourcentage de tâches effectuées
      $percentage = ($completedTasks / $totalTasks) * 100;
	  }
	  else{
		$percentage = 0;
	  }
    ?>

    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $percentage; ?>%;" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <p><?php echo $completedTasks; ?> tâches effectuées sur <?php echo $totalTasks; ?></p>
  </div>

		
