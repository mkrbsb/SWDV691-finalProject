
<?php 
$teamName = $_POST["teamName"];
$teamID = $_POST["teamID"];

    require_once('mysqli_connect.php');

    $sql = "UPDATE Teams SET teamName = '$teamName' WHERE teamID = $teamID";

    if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }


?>