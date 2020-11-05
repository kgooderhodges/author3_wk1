<?php
    // include the file we just wrote - connect
    // $result will store the databasder request results so that we can encode and return them to the index.php
    $result = array();

    function getAllUsers($conn) {
        $query = "SELECT * FROM dip_profdata";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;

            //reutnr $result;
            echo(json_encode($result));
        }
    }

    // get specific user
    function getSingleUser($conn, $id) {
        $query = "SELECT * FROM dip_profdata WHERE id=" . $id . "";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;

            //return $result;
            echo(json_encode($result));
        }
    }

// OLD CODE 

    // include("connect.php"); // like a JS import statement

    // $query = "SELECT * FROM dip_profdata";

    // $runQuery = $pdo->query($query);

    // //put results in the array
    // $result = array();

    // while($row = $runQuery->fetchALL(PDO::FETCH_ASSOC)) {
    //     // put results in square brackets, and then into a row
    //     $result[] = $row;
    // }

    // //return $result;
    // // var_dump($result);
    // echo(json_encode($result));