
<?php 
$tid = $_POST["teamID"];
$teamID = (int)$tid;
$gp= $_POST["gamePoints"];
$gamePoints = (int)$gp;
    require_once('mysqli_connect.php');
    
        $sql1 = "SELECT * FROM TotalPoints WHERE teamID = '$teamID'";
        if($response1 = mysqli_query($db, $sql1)){
            $num_rows = mysqli_num_rows($response1);
            if($num_rows == 0) {
                $sql2 = "INSERT INTO TotalPoints (teamID, totalPoints) VALUES ('$teamID', '$gamePoints');";
            } else {
                while($row = @mysqli_fetch_array($response1)){
       
                        $points = $row['totalPoints'] + $gamePoints;
                        $sql2 = "UPDATE TotalPoints SET totalPoints = '$points' WHERE teamID = '$teamID'";
                }
            }
            if($response2 = @mysqli_query($db, $sql2)) {
                    echo "success";
            }
        }
?>