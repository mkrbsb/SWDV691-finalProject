<?php 

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$playerId = $_POST["playerId"];
$action = $_POST["action"];

    require_once('mysqli_connect.php');

  if($action == 'delete'){
    $sql = "DELETE FROM Players WHERE playerId = '$playerId'";
  } else {
    $sql = "UPDATE Players SET fname = '$fname', lname = '$lname', gender = '$gender' WHERE playerId = '$playerId'";

  }
    if (mysqli_query($db, $sql)) {
      echo "Success";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }


?>