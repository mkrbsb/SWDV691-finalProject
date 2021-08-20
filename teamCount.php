
<?php 

require_once('mysqli_connect.php');
$query = "SELECT * FROM Teams WHERE teamName IS NOT NULL";
//echo 'test';
$response = @mysqli_query($db, $query);
//echo 'test2';
$count = 0;
while($row = mysqli_fetch_array($response)){
$count++;
}
echo $count;

?>