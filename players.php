
<?php 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
    require_once('mysqli_connect.php');
    $sql = "INSERT INTO Players (fname, lname, gender) VALUES ('$fname', '$lname', '$gender')";
    if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
?>