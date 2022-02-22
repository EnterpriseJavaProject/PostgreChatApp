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
    //$new_img_name = $_FILES['image']['name'];


 
 
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];         
                    if(in_array($img_ext, $extensions) === true){
                    $types = ["image/jpeg", "image/jpg", "image/png"]; 
                        if(in_array($img_type, $types) === true){
                            $new_img_name = $time.$img_name;


                            
                            
                            
                                                       
     $query = "UPDATE users SET username='$username', phone='$phone', tithe='$tithe', usertype='$usertype', img ='$new_img_name' WHERE user_id ='$user_id'";
    $query_run = pg_query($conn, $query);

    if ($query_run) 
    {   
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

 
 
 

}
}
}
}

?>
