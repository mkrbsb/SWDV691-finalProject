<?php 

    require_once('mysqli_connect.php');
    

    $sql = "DELETE FROM Teams";

    if (mysqli_query($db, $sql)) {
        $sql2 = "UPDATE Players SET teamID = NULL";
        if (mysqli_query($db, $sql2)) {
            echo "Success";
        }

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }


?>