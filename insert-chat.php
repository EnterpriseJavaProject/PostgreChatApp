<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = pg_escape_string($conn, $_POST['incoming_id']);
        $message = pg_escape_string($conn, $_POST['message']);
        //$messagetime = mysqli_real_escape_string($conn, $_POST['messagetime']);
        if(!empty($message)){
            $sql = pg_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('{$incoming_id}', '{$outgoing_id}', '{$message}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>
