<?php
session_start();
include_once "config.php";


$get_string = 0;





//Update Session

if (isset($_POST['update_btn']))
 {

    $user_id = $_POST['user_id'];
    $username = $_POST['edit_username'];
    $phone = $_POST['edit_phone'];
    $usertype = $_POST['edit_usertype'];
    $tithe = $_POST['edit_tithe'];
    $new_img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

 
 
               // if(isset($_FILES['image'])){
                    //$img_name = $_FILES['image']['name'];
                   // $img_type = $_FILES['image']['type'];
                  //  $tmp_name = $_FILES['image']['tmp_name'];
                    
                    
          
                   // $new_img_name = $img_name;


                            
                            
                            
                                                       
     $query = "UPDATE users SET username='$username', phone='$phone', tithe='$tithe', usertype='$usertype', img ='$new_img_name' WHERE user_id ='$user_id'";
    $query_run = pg_query($conn, $query);

    if ($query_run) 
    {   
     // $new_img_name = $img_name;
      move_uploaded_file($tmp_name,"".$new_img_name);
      $_SESSION['status'] = $username .   "---->  Your profile has been updated successfully";
      $_SESSION['status_code'] = "success";
      header('Location: users.php');

    }

    else
    {
      $_SESSION['status'] = "Profile not updated";
      $_SESSION['status_code'] = "error";
      header('Location: users.php');
    }

 




//}
}

?>
