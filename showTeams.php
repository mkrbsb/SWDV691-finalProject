
<?php 
require_once('mysqli_connect.php');
$query1 = "SELECT * FROM Teams";
$response1 = @mysqli_query($db, $query1);
$query2 = "SELECT * FROM Players WHERE teamID IS NOT NULL";
$response2 = @mysqli_query($db, $query2);
$row2 = array();
while($row = mysqli_fetch_array($response2)){
array_push($row2, $row);
}
//print_r($row2);
//  print_r($response1);
//  print_r($response2);
$teamArr = array();
while($row1 = mysqli_fetch_array($response1)){//teams table
  $teamName = $row1['teamName'];
  $teamID = $row1['teamID'];
  foreach($row2 as $r2){//players table

    if($row1['player1'] == $r2['playerId']){
      $p1 = $r2['fname'] . ' ' . $r2['lname']; 
    } else if($row1['player2'] == $r2['playerId']) {
      $p2 = $r2['fname'] . ' ' . $r2['lname']; 
    }
    
    if(isset($p1) && isset($p2)){
      $r = $teamName. ', ' . $p1 . ', ' . $p2. ', '. $teamID;
      array_push($teamArr, $r);
      unset($p1);
      unset($p2);
      unset($teamName);
    }
  }
}

$myJSON = json_encode($teamArr);

echo $myJSON; 

?>