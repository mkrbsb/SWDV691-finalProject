
<?php 
require_once('mysqli_connect.php');
$query1 = "SELECT * FROM Games";
$response1 = @mysqli_query($db, $query1);
$query2 = "SELECT * FROM Teams";
$response2 = @mysqli_query($db, $query2);
$row2 = array();
while($row = mysqli_fetch_array($response2)){
array_push($row2, $row);
}
$gameArr = array();
while($row1 = mysqli_fetch_array($response1)){//teams table
  foreach($row2 as $r2){//players table

    if($row1['team1'] == $r2['teamID']){
      $t1 = $r2['teamName']; 
      $teamID1 = $r2['teamID'];
      $gameID = $row1['gameID'];
      $gamePoints1 = $row1['gamePoints1'];

    } else if($row1['team2'] == $r2['teamID']) {
      $t2 = $r2['teamName']; 
      $teamID2 = $r2['teamID'];
      $gamePoints2 = $row1['gamePoints2'];
    } else if($row1['team2'] == NULL) {
        $t2 = 'BYE';
    }
    
    if(isset($t1) && isset($t2)){

      $r = $t1 .', '. $teamID1.', ' . $t2. ', '. $teamID2. ', '. $gameID. ', '. $gamePoints1. ', '. $gamePoints2;
      array_push($gameArr, $r);

      unset($t1);
      unset($t2);
      unset($teamName);
      unset($gameID);
    }
  }
}

$myJSON = json_encode($gameArr);

echo $myJSON; 

?>