<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
    		<img src="AG-LOGO.png" style="margin-left:70px;" width="150px" height="150px" alt="Image">
      <header style="color:blue;text-align:center;">HGT BOLGA CHAT APP</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Full Name</label>
          <input type="text" name="username" placeholder="Enter your Full Name" required>
        </div>
        <div class="field input">
          <label>Membership No</label>
          <input type="text" name="membershipno" placeholder="Enter your Membership No" required>

        </div>
        <div class="field button">
          <input type="submit" name="submit" value="LOGIN TO START CHAT">
        </div>
      </form>
      <!---
      <div class="link"> <i style="color:blue;">Not yet signed up? </i> <a href="index.php">Signup now</a></div>
      -->
    </section>
  </div>
  






 <!-- PASSWORD VISIBLE javascript -->

 <script>



const pswrdField = document.querySelector(".form input[type='password']"),
toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () =>{
  if(pswrdField.type === "password"){
    pswrdField.type = "text";
    toggleIcon.classList.add("active");
  }else{
    pswrdField.type = "password";
    toggleIcon.classList.remove("active");
  }
}


</script>






<!--   -->

<script>


const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php_login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href = "users.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}



</script>

</body>
</html>
