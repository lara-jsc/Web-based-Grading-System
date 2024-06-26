<?php
    include('connect_db.php');

    $sql = "DELETE FROM  stud_grades WHERE stud_id = ".$_GET['id'];

  

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
    header("Location: display.php");

?>