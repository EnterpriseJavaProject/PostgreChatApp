<?php 
    session_start();
    include_once "config.php";
    $username = pg_escape_string($conn, $_POST['username']);
    $membershipno = pg_escape_string($conn, $_POST['membershipno']);
    if(!empty($membershipno) && !empty($username)){
        $sql = pg_query($conn, "SELECT * FROM users WHERE unique_id = '{$membershipno}'");
        if(pg_num_rows($sql) > 0){
            $row = pg_fetch_assoc($sql);
            //$user_pass = md5($password);
            $user_username = $username;
            $enc_username = $row['username'];
            if($user_username == $enc_username){
                $status = "Active now";
                $sql2 = pg_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$membershipno}'");

                if($sql2){
                    $_SESSION['unique_id'] = $membershipno;
                    echo "success";
                    $lastactivity = "UPDATE users set lastactivity = now() where unique_id= '{$membershipno}' ";
            	    $sql = pg_query($conn, $lastactivity);
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Username or Membership No is Incorrect!";
            }
        }else{
        
            echo "$username  and  $membershipno does not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>
