<?php

$response = array();

require_once 'db_con.php';
try {
    $sql = "SELECT `email`, `timestamp` FROM `subscribers`;";
    $results = $conn->query($sql);

    if($results->num_rows > 0){
        while($result = $results->fetch_assoc()) {
            $user = "<b>Email: </b>".$result["email"]."<br><b>Timestamp: </b>".$result["timestamp"]."<br><br>";
            array_push($response, $user);
        }
    } else {
        $user = "<br>No subscribed users found!<br>";
        array_push($response, $user);
    }
} catch(Exception $e) {
    $user = "<br>An error occurred!<br>Please try again.<br>";
    array_push($response, $user);
}
$conn->close();

echo serialize($response);


?>
