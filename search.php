<?php
    session_start();
    include_once "config.php";

    $membershipno = $_SESSION['unique_id'];
    $searchTerm = pg_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM users WHERE NOT unique_id = '{$membershipno}' AND (username LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = pg_query($conn, $sql);
    if(pg_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>
