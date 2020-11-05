<?php 

    $db_dsn = array(
        'host' => 'localhost',
        'dbname' => 'idp',
        'charset' => 'utf8',
    );
    
    $dsn = 'mysql:' . http_build_query($db_dsn, '', ';');

    // Set up connection credentials
    $db_user = 'root';
    $db_pass = '';

    $pdo = new PDO($dsn, $db_user, $db_pass);

    /* check connection */
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        // var_dump($pdo);
        // echo "you're in! enjoy the show";
    } catch (PDOException $exception) {
        echo 'Connection error: ' . $exception->getMessage();
        exit();
    }