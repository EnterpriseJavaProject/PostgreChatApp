<?php 
  session_start();
  include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>

<style>
.eye_visibility{
  position: absolute;
   		right: 80px;
   		transform: translate(0, -50%);
   		top: 572px;
   		cursor: pointer;
   }
   .fa {
   font-size: 30px;
   color: black;
   }
   
   </style>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = pg_escape_string($conn, $_GET['user_id']);
          $sql = pg_query($conn, "SELECT * FROM users WHERE unique_id = '{$user_id}'");
          if(pg_num_rows($sql) > 0){
            $row = pg_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        

        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        
        <a href="view_member_profile.php?profile_id=<?php echo $row['unique_id']; ?>" > 
        <img src="<?php echo $row['img']; ?>" alt="">
        <div class="details">

          <span><?php echo $row['username'] ?> </span>
          <p><?php echo $row['status']; ?> </p> 
 </a>
<hr>

             <p style="color:black;">  Last seen
          	<?php
          	
                      $connection = pg_connect("localhost","root","","chatapp");  
                      $query = "SELECT lastactivity FROM users WHERE unique_id = '{$user_id}'";
                      $query_run = pg_query($connection, $query);
                      $row = pg_fetch_array($query_run);
		      echo $row['lastactivity'];
                ?>
            </p>
          
        </div>
        
        
      </header>
      

      <div class="chat-box">

 
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">


    


    
     <button style="background-color:blue;"><i class="fab fa-telegram-plane"></i></button>
        
      </form>
    </section>
  </div>







  <!-- CHAT JAVASCRIPT -->




<script>
var state = false;

 function toggle(){
	 
	 if(state){
		 document.getElementById(
				 "password").
				 setAttribute("type",
						 "password");
		 document.getElementById(
				 "eye").style.color='#7a797e';
		 state = false;
	 }
	 
	 else{
		 document.getElementById(
		 "password").
		 setAttribute("type",
				 "text");
 		 document.getElementById(
		 "eye").style.color='#5887ef';
 		 state = true;
	 }
 }

</script>



<script>


const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

inputField.focus();
inputField.onkeyup = ()=>{
    if(inputField.value != ""){
        sendBtn.classList.add("active");
    }else{
        sendBtn.classList.remove("active");
    }
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              inputField.value = "";
              scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
}, 500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }
  


</script>

</body>
</html>
