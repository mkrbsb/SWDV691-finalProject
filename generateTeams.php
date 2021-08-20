
<?php 

require_once('mysqli_connect.php');
$query = "SELECT * FROM Players WHERE teamID IS NULL";

$response = @mysqli_query($db, $query);

$count = 0;
$nameIdArr = array();
    while($row = mysqli_fetch_array($response)){
        $count++;
        $nameId = $row['playerId'];
        array_push($nameIdArr, $nameId);
    }
    //print_r($nameIdArr);
    if($count % 2 == 0 && $count >= 8 && ($count / 2) % 2 == 0){
        while($count != 0){
            $queryTeam = '';
            $queryTeams = '';
            $randNum = rand(0, ($count-1));
            $count--;
            $p1 = $nameIdArr[$randNum];

            array_splice($nameIdArr, $randNum, 1); 

            $randNum = rand(0, ($count-1));
            $count--;
            $p2 = $nameIdArr[$randNum];

            array_splice($nameIdArr, $randNum, 1); 

            $queryTeam = "INSERT INTO Teams (player1, player2) VALUES ('$p1', '$p2'); ";
        
            $team = @mysqli_query($db, $queryTeam);

            $last_id = mysqli_insert_id($db);
        
            $queryTeam1 = "UPDATE Players SET teamID='$last_id' WHERE playerId='$p1'; ";
            $team1 = @mysqli_query($db, $queryTeam1);

            $queryTeam2 = "UPDATE Players SET teamID='$last_id' WHERE playerId='$p2'; ";
            $team2 = @mysqli_query($db, $queryTeam2);

        }

            echo 'success';

        //insert into Teams table and update the Players table with new team ID (insert_id()).

    } else { 
        if($count % 2 != 0 && $count < 8) {
            echo 'both';
        } else if($count % 2 != 0){ 
            echo 'odd';
        } else if($count < 6){ 
            echo 'less';
        } else if (($count / 2) % 2 != 0) {
            echo 'team';
        }
    }

?>