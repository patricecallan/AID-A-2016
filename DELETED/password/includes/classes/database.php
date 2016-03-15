<?php
    //Enter your database connection details here.
    $host = 'patricecallan.co.uk.mysql'; //HOST NAME.
    $db_name = 'patricecallan_c'; //Database Name
    $db_username = 'patricecallan_c'; //Database Username
    $db_password = 'dBpa22Word'; //Database Password

    try
    {
        $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
?>