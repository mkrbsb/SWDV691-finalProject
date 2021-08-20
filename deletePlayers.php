<?php 

    require_once('mysqli_connect.php');
    
    $sql = "DELETE FROM Players";

    if (mysqli_query($db, $sql)) {
        echo "Success";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }


?>