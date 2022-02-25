<?php 
session_start();
//include_once "config.php";
include('includes/header.php');
//include('includes/navbar.php');
?>


 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

 


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary text-center"> Member Profile </h4>
        </div>
        <div class="card-body">

        <?php

 $conn = pg_connect("host=ec2-3-212-143-188.compute-1.amazonaws.com port=5432 dbname=dfmlibde0ugb8m user=zvgmbzipahfthh password=4d0f3e0f3b2857779e9a29cc9ad00865670b7970d3a8bedf8a495d7158d5440f");
                         
                 $view_member_profile = pg_escape_string($conn, $_GET['view_member_profile']);
        
                 
                 if(isset($view_member_profile))
           {

                
                $query = pg_query($conn, "SELECT * FROM users WHERE unique_id = '{$view_member_profile}' ");
                
                       if(pg_num_rows($query) > 0){
                       
              			$row = pg_fetch_assoc($query);
           	       }


          
        ?>


<form action="update_profile.php" method="POST">

<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>" >


<div style="text-align:center;">

<?php echo '<img src=" '.$row['img'].'" width="150px;" height="150px;" alt="Image">'?>

</div>

<br>

<div class="form-group">
    <input type="text" name="" id="username" value="<?php echo $row['username'] ?> Profile" disabled="disabled" readonly="true" class="form-control" autocomplete="off" placeholder="Enter Full Name" required>
    <span id="username_error_message" style="color:red;"></span>
</div>




<div class="form-group">
    <label>Gender</label>
    <input type="phone" name="edit_phone" id="phone" value="<?php echo $row['gender'] ?>" disabled="disabled" readonly="true" class="form-control" autocomplete="off"  required>
    <span id="phone_error_message" style="color: red;"></span>

</div>





<div class="form-group">
    <label>Department</label>
    <input type="text" name="edit_occupation" id="occupation" value="<?php echo $row['department'] ?>" disabled="disabled" readonly="true" class="form-control" autocomplete="off" placeholder="Enter Occupation" required>
    <span id="occupation_error_message" style="color:red;"></span>
</div>





<input type="hidden" name="edit_tithe" value="0">

<input type="hidden" name="edit_usertype" value="member">

 <a href="chat.php?user_id=<?php echo $row['unique_id']; ?>" class="btn btn-danger"> GO BACK </a>



</form>

            <?php
            
                }
            ?>





</div>
</div>
</div>
</div>
</div>
</div>








<script>

function validate(){
	
	var username = document.getElementById("username").value;
    var phone = document.getElementById("phone").value;
	// var department = document.getElementById("department").value;
	var occupation = document.getElementById("occupation").value;
	var place_of_work = document.getElementById("place_of_work").value;
    var residence = document.getElementById("residence").value;
    var home_town = document.getElementById("home_town").value;
	var tithe = document.getElementById("tithe").value;
	
	
	var nametype = /^[A-Z a-z]+$/;
    // var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	

	if (username == ""){
        document.getElementById("username_error_message").innerHTML="** username required";
        return false;
    }
	
	if (nametype.test(username) == false){
        document.getElementById("username_error_message").innerHTML="** Username required letters";
        return false;
    }


	if (phone == ""){
        document.getElementById("phone_error_message").innerHTML="** Contact required";
        return false;
    }
	
	 if (isNaN(phone)){
		document.getElementById("phone_error_message").innerHTML="** Contact must be only digits";
        return false;
	}


	 if (phone.length<10){
		document.getElementById("phone_error_message").innerHTML="** Contact must be 10 digits";
        return false;
	}
	
	if (phone.length>10){
		document.getElementById("phone_error_message").innerHTML="** Contact must be 10 digits";
        return false;
	}

    if ((phone.charAt(0) != 0)){
		document.getElementById("phone_error_message").innerHTML="** Contact must begin with 0";
        return false;
	}



    if (occupation == ""){
        document.getElementById("occupation_error_message").innerHTML="** Occupation required";
        return false;
    }



	if (nametype.test(occupation) == false){
        document.getElementById("occupation_error_message").innerHTML="** Occupation should be only characters";
        return false;
    }




	if (place_of_work == ""){
        document.getElementById("place_of_work_error_message").innerHTML="** Place of work required";
        return false;
    }



	if (nametype.test(place_of_work) == false){
        document.getElementById("place_of_work_error_message").innerHTML="** Work place should be letters";
        return false;
    }




    if (residence == ""){
        document.getElementById("residence_error_message").innerHTML="** Department required";
        return false;
    }



	if (nametype.test(residence) == false){
        document.getElementById("residence_error_message").innerHTML="** Department should be letters";
        return false;
    }



	

	if (isNaN(tithe)){
		document.getElementById("tithe_error_message").innerHTML="** Tithe must be only digits";
        return false;
	}


   if (home_town == ""){
        document.getElementById("home_town_error_message").innerHTML="** Home Town required";
        return false;
    }
	
	if (nametype.test(home_town) == false){
        document.getElementById("home_town_error_message").innerHTML="** Home Town required letters";
        return false;
    } 


	
}
</script>



<?php
include('includes/main_scripts.php');
include('includes/footer.php');
?>
