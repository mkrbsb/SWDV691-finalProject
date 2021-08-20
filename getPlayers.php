
<?php 

    require_once('mysqli_connect.php');
    $query = "SELECT * FROM Players";

    $response = @mysqli_query($db, $query);

         $playerArr = array();
        while($row = mysqli_fetch_array($response)){
          if($row['teamID'] != NULL){} else {
            $name = $row['fname'] . ' ' . $row['lname'];
            $r = $row['fname'] . ', ' . $row['lname'] . ', ' . $row['gender']. ', ' . $row['playerId'];
            array_push($playerArr, $r);
          }
            
        }
         $myJSON = json_encode($playerArr);
         echo $myJSON;   

?>