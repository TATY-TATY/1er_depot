<?php 
include 'db.php';



    if(isset($_GET['id'])){
        $id = $_GET['id'];
        deleteTask($id);

    }


    function deleteTask($id) {
        global $conn;
      
        $id = mysqli_real_escape_string($conn, $id);
      
        $query = "DELETE FROM taches WHERE id=$id";
        $result = mysqli_query($conn, $query);
      
        if ($result) {
            header("location: index.php");
        } else {
          return false;
        }
      }
      
?>