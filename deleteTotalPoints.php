
<?php 
require_once('mysqli_connect.php');
$query = "DELETE FROM TotalPoints";
$response = @mysqli_query($db, $query);

?>