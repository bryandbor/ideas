<?php
    header('Content-Type: application/json');
    $connection = mysql_connect('localhost', 'root', '@Greellow8');
    mysql_select_db('ideasDB', $connection);
    $query = "SELECT * FROM visitors";
    $results = mysql_query($query, $connection);
    $jsonData = '[';
    $iCounter = 0;
    while ($row = mysql_fetch_array($results)) {
        if ($iCounter != 0) {
            $jsonData = $jsonData.' , ';
        }
        $jsonData = $jsonData.' { "id":"i'.$iCounter++.'", "ip":"'.$row['ip'].'", "first_visit":"'.$row['first_visit'].'", "latest_visit":"'.$row['latest_visit'].'"} ';
    }
    $jsonData = $jsonData.' ]';
    echo $jsonData;
?>