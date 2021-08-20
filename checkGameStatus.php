
<?php 
require_once('mysqli_connect.php');
$query1 = "SELECT * FROM Games";
$response1 = @mysqli_query($db, $query1);

$clear = '';
while($row1 = mysqli_fetch_array($response1)){
    $g1 = $row1['gamePoints1'];
    $g2 = $row1['gamePoints2'];
    if($g1 == NULL|| $g2 == NULL) {
        $clear = 1;
        echo $clear;
        return;
    } 

}

?>