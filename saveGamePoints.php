
<?php 

$gameID = $_POST["gameID"];
$teamID = $_POST["teamID"];
$team = $_POST["team"];
$gamePoints = $_POST["gamePoints"];
    require_once('mysqli_connect.php');

if($team =='1'){
    $sql = "UPDATE Games SET gamePoints1 = '$gamePoints' WHERE gameID = '$gameID'";

} else {
    $sql = "UPDATE Games SET gamePoints2 = '$gamePoints' WHERE gameID = '$gameID'";
}
    if (mysqli_query($db, $sql)) {
        echo 'success';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    

?>