<?php
    session_start();
    include_once "config.php";
    $membershipno = $_SESSION['unique_id'];
    $sql = "SELECT DISTINCT * FROM users WHERE NOT unique_id = '{$membershipno}' GROUP BY user_id ORDER BY status ASC";
    $query = pg_query($conn, $sql);
    $output = "";
    if(pg_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(pg_num_rows($query) > 0){
    	//$outgoing_id = $_SESSION['unique_id'];
        include_once "data.php";
        
          
       
        
        
        
        
        
    }
    echo $output;
?>

