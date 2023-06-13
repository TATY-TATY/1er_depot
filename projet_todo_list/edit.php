<?php
include 'header.php';



if (isset($_POST['effectuer'])) {

    $id = $_POST['id'];
    $query = "UPDATE taches SET complete=1 WHERE id=$id";
    $result = mysqli_query($conn, $query);
    header("location: index.php");


}
if (isset($_POST['modifier'])) {
  $id = $_POST['id'];
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $date_ech = $_POST['date_ech'];

  if (updateTask($id, $titre, $description, $date_ech)) {
    header("location: index.php");
  } else {
    // Erreur lors de la mise à jour, effectuez les actions appropriées
    echo "Erreur lors de la mise à jour de la tâche";
  }
}

function updateTask($id, $titre, $description, $date_ech) {
    global $conn;
  
    $id = mysqli_real_escape_string($conn, $id);
    $titre = mysqli_real_escape_string($conn, $titre);
    $description = mysqli_real_escape_string($conn, $description);
    $date_ech = mysqli_real_escape_string($conn, $date_ech);
  
    $query = "UPDATE taches SET titre='$titre', description='$description', date_ech='$date_ech' WHERE id=$id";
    $result = mysqli_query($conn, $query);
  
    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM taches WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $task = mysqli_fetch_assoc($result);
  
?>


<div class="card-body">
  <form method="POST" action="">
    <div class="form-row">
      <div class="col-6">
        <label for="taskInput">Titre</label>
        <input type="text" class="form-control" name="titre" value="<?php echo $task['titre']; ?>">
      </div>
      <div class="col-4">
        <label for="dateInput">Date d'échéance</label>
        <input type="date" class="form-control" name="date_ech" min="<?php echo date('Y-m-d'); ?>" value="<?php echo $task['date_ech']; ?>">
      </div>
      <div class="col-2">
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <button type="submit" class="btn btn-primary mt-4" name="modifier">Modifier</button>
      </div>
      <div class="col-12">
        <label for="markdownEditor">Description</label>
        <textarea class="form-control form-control-sm col-md-6" rows="3" name="description"><?php echo $task['description']; ?></textarea>
      </div>
    </div>
  </form>
</div>
<?php }?>