
<?php 
require_once('mysqli_connect.php');
$query1 = "SELECT * FROM TotalPoints JOIN Teams ON Teams.TeamID = TotalPoints.TeamID ORDER BY totalPoints DESC";
$response1 = @mysqli_query($db, $query1);

$pointsArr = array();
while($row1 = mysqli_fetch_array($response1)){//teams table
  $teamName = $row1['teamName'];
 
     $t1 = $row1['totalPoints'];
      $r = $teamName .', '. $t1;
      array_push($pointsArr, $r);
      unset($t1);
      unset($teamName);
}

$myJSON = json_encode($pointsArr);

echo $myJSON; 


?>