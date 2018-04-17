<?php    

    include 'userinformation.php';

    $mysqli = new mysqli($host_db, $user_db, $password_db, $database_db);
     
    if ($mysqli->connect_error) {
        die("Failed to connect: " . $mysqli->connect_error);
    }

?>