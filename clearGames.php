
<?php 
require_once('mysqli_connect.php');

$query = "DELETE FROM Games";
$response = @mysqli_query($db, $query);

?>