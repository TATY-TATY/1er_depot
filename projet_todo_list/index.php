<?php include 'header.php'; ?>


<div class="container mt-4">
  <h1 class="text-center">Ma Todolist</h1>

  <div class="card mt-4">

  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#taskModal">Ajouter une tâche</button>

  <ul class="list-group mt-4">
    <?php
    foreach ($tasks as $task) { ?>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
          <h5><?php echo $task['titre'] ?> </h5>
          <small>Date d'échéance : <?php echo $task['date_ech'] ?></small>
        </div>
        <div>
          <a href="#" class="text-success mr-2 edition" data-toggle="modal" data-target="#exampleModal" data-nom="<?php echo $task['id'] ?>">
            <i class="fas fa-check"></i>
          </a>
          <a href="#" class="text-primary mr-2" data-toggle="modal" data-target="#taskModal1" data-nom="<?php echo $task['description'] ?>">
            <i class="fas fa-eye"></i>
          </a>
          <a href="edit.php?id=<?php echo $task['id']; ?>" class="text-info">
            <i class="fas fa-edit"></i>
          </a>

          <a href="delete.php?id=<?php echo $task['id']; ?>" class="text-danger mr-2">
            <i class="fas fa-trash-alt"></i>
          </a>
          <span class="font-weight-bold display-4 <?php echo ($task['complete'] == 0) ? 'text-danger' : 'text-success'; ?>">&#8226;</span>
        </div>
      </li>
    <?php } ?>

  </ul>




  <!-- Modals DESCRIPTION-->
  <div class="modal fade" id="taskModal1" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="taskModalLabel1">DESCRIPTION</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="taskName"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal AFFECTUER -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tache effectuer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="edit.php">
            <div class="form-group d-flex justify-content-center">
              <p>Voulez-vous marquer cette tâche comme effectuée ?</p>
            </div>
            <input type="hidden" name="id" id="idtask" value="">
            <div class="d-flex justify-content-center">
              <button type="submit" name="effectuer" class="btn btn-primary">Confirmer</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="height: 700px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="taskModalLabel">Ajouter une tâche</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="add.php">
            <div class="form-row">
              <div class="col-6">
                <label for="taskInput">Titre</label>
                <input type="text" required name="titre" class="form-control" id="taskInput">
              </div>
              <div class="col-4">
                <label for="dateInput">Date d'échéance</label>
                <input type="date" name="echeance" min="<?php echo date('Y-m-d'); ?>" class="form-control" id="dateInput">
              </div>
              
              <div class="markdown-container col-12"  >
                <label for="markdownEditor" >Description</label>
                <textarea name="description" required class="form-control" rows="10" id=""></textarea>
              </div>
    
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
            </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>







  <?php include 'footer.php'; ?>