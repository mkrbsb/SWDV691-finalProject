
<?php 

require_once('mysqli_connect.php');
$query = "SELECT * FROM Teams"; //removed WHERE pgameID IS NULL

$response = @mysqli_query($db, $query);

$count = 0;
$teamIdArr = array();
$teamNameArr = array();
$nameNull;
    while($row = mysqli_fetch_array($response)){
        $count++;
        $teamID = $row['teamID'];
        array_push($teamIdArr, $teamID);
        array_push($teamNameArr, $nameId);
        if($row['teamName'] == NULL){
            $nameNull = 'null';
        }
    }
if($count % 2 !=  0){
    echo 'odd';
} else if($nameNull == 'null'){
    echo 2;
} else {

        while($count != 0){
            $queryTeam = '';
            $queryTeams = '';
            $randNum = rand(0, ($count-1));
            $count--;
            $t1 = $teamIdArr[$randNum];

            array_splice($teamIdArr, $randNum, 1); 

            $randNum = rand(0, ($count-1));
            $count--;
            $t2 = $teamIdArr[$randNum];

            array_splice($teamIdArr, $randNum, 1); 

            $queryTeam = "INSERT INTO Games (team1, team2) VALUES ('$t1', '$t2'); ";
        
            $team = @mysqli_query($db, $queryTeam);
          
        }


    
    echo 'success';
   
}
?>
