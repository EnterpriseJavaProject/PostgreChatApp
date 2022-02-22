<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $logout_id = $_SESSION['unique_id'];
        //$logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
  	
            $sql = pg_query($conn, "UPDATE users SET status = 'Offline now' WHERE unique_id= '{$logout_id}'");
            
            if($sql){
            
            $lastactivity = pg_query($conn, "UPDATE users set lastactivity = now() WHERE unique_id=  '{$logout_id}'");

                session_unset();
                session_destroy();
                header("location: login.php");
            }
        }else{
            header("location: users.php");
        }
    }else{ 
    
	$sql = pg_query($conn, "UPDATE users SET status = 'Offline now' WHERE unique_id= '{$logout_id}'");
        header("location: login.php");
    }
?>
