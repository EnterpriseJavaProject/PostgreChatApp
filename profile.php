<?php 
session_start();
include_once "config.php";
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
            <h4 class="m-0 font-weight-bold text-primary text-center">MY PROFILE </h4>
        </div>
        <div class="card-body">

        <?php

                //$connection = mysqli_connect("localhost","root","","chatapp");
                // $connection = mysqli_connect("sql206.ezyro.com", "ezyro_29068185", "mc3a3pix", "ezyro_29068185_assemblies_Of_God");
                
               // $conn = pg_connect("host=ec2-3-212-143-188.compute-1.amazonaws.com port=5432 dbname=dfmlibde0ugb8m user=zvgmbzipahfthh 			//password=4d0f3e0f3b2857779e9a29cc9ad00865670b7970d3a8bedf8a495d7158d5440f");
                
                
                 $profile_id = pg_escape_string($conn, $_GET['profile_id']);
                 
                 if(isset($profile_id))
           {
   
            
                $query = "SELECT * FROM users WHERE unique_id = '$profile_id' ";
                $query_run = pg_query($conn, $query);

                foreach($query_run as $row)
            {
        ?>


<form action="update_profile.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>" >



<div class="form-group">
    <label>Change Profile Picture</label>

<input type="file" name="image" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg">

</div>

<br>

<div style="text-align:center;">

<?php echo '<img src=" '.$row['img'].'" width="150px;" height="150px;" alt="Image">'?>

</div>

<br>

<div class="form-group">
    <label>Membership No</label>
    <input type="text" name="edit_unique_id" value="<?php echo $row['unique_id'] ?>" class="form-control" disabled="disabled" readonly="true" autocomplete="off">
    <span id="username_error_message" style="color:red;"></span>
</div>

<div class="form-group">
    <label>Full Name</label>
    <input type="text" name="edit_username" id="username" value="<?php echo $row['username'] ?>" class="form-control" autocomplete="off" placeholder="Enter Full Name" required>
    <span id="username_error_message" style="color:red;"></span>
</div>

<div class="form-group">
    <label>Phone Number</label>
    <input type="phone" name="edit_phone" id="phone" value="<?php echo $row['phone'] ?>" class="form-control" autocomplete="off" placeholder="Enter Phone Number" required>
    <span id="phone_error_message" style="color: red;"></span>

</div>



<div class="form-group">
    <label>Gender</label>
    <!-- <input type="text" name="edit_gender" value="" class="form-control"> -->
    <select name="edit_gender" class="form-control" disabled="disabled" readonly="true" required>
            <option value="<?php echo $row['gender'] ?>"> <?php echo $row['gender'] ?> </option>
            <option>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
</div>










<div class="form-group">
    <label>Occupation</label>
    <input type="text" name="edit_occupation" id="occupation" value="<?php echo $row['occupation'] ?>" disabled="disabled" readonly="true" class="form-control" autocomplete="off" placeholder="Enter Occupation" required>
    <span id="occupation_error_message" style="color:red;"></span>
</div>


<div class="form-group">
    <label>Department</label>
    <!-- <input type="text" name="edit_department" value="" class="form-control" placeholder="Enter Register 2019" required> -->
    <select name="edit_department" class="form-control" disabled="disabled" readonly="true" required>
    <option value="<?php echo $row['department'] ?>"> <?php echo $row['department'] ?> </option>
            <option>Select Department</option>
            <option value="Angelic Voices">Angelic Voices</option>
            <option value="Children">Children</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Healing Voices">Healing Voices</option>
            <option value="Joy Fellowship">Joy Fellowship</option>
            <option value="Men Ministry">Men Ministry</option>
            <option value="Music">Music</option>
            <option value="Women Ministry">Women Ministry</option>
            <option value="Mission Team">Mission Team</option>
            <option value="PathFinders">PathFinders</option>
            <option value="Royal Rangers">Royal Rangers</option>
            <option value="Ushering">Ushering</option>
            <option value="Sunday School">Sunday School</option>
            <option value="Young Singles">Young Singles</option>
            <option value="Youth Ministry">Youth Ministry</option>
            <option value="Media">Media</option>
            <option value="IT">IT</option>
            <option value="None">None</option>
        </select>	
</div>




<div class="form-group">
    <label>Residence</label>
    <input type="text" name="edit_residence" id="residence" value="<?php echo $row['residence'] ?>"  disabled="disabled" readonly="true" class="form-control"   autocomplete="off" placeholder="Enter Residence">
            <span id="residence_error_message" style="color:red;"></span>
</div>











<!-- <div class="form-group">
    <label>Tithe(Ghc)</label>
    <input type="text" name="edit_tithe" id="tithe" value="<?php echo $row['tithe'] ?>" class="form-control" autocomplete="off" placeholder="Enter Tithe" required>
    <span id="tithe_error_message" style="color:red;"></span>

</div> -->




<input type="hidden" name="edit_tithe" value="0">

<input type="hidden" name="edit_usertype" value="member">


<a href="users.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="update_btn" onclick="return validate()" class="btn btn-primary"> UPDATE PROFILE </button>

</form>

            <?php
                }
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
