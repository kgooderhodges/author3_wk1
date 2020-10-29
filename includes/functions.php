<?php
    // include the file we just wrote - connect
    include("connect.php"); // like a JS import statement

    $query = "SELECT * FROM dip_profdata";

    $runQuery = $pdo->query($query);

    //put results in the array
    $result = array();

    while($row = $runQuery->fetchALL(PDO::FETCH_ASSOC)) {
        // put results in square brackets, and then into a row
        $result[] = $row;
    }

    //return $result;
    // var_dump($result);
    echo(json_encode($result));