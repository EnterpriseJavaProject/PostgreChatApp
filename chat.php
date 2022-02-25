<?php 
  session_start();
  include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<?php include_once "header.php"; ?>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		<script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  		
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
   .image_upload
{
	position: absolute;
	top:7px;
	right:70px;
}
.image_upload > form > input
{
    display: none;
}

.image_upload img
{
    width: 24px;
    cursor: pointer;
}

.chat_message_area
{
	position: relative;
	width: 100%;
	height: auto;
	background-color: #FFF;
    border: 1px solid #CCC;
    border-radius: 3px;
}
   </style>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$user_id}'");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
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
          	
                      //$connection = mysqli_connect("localhost","root","","chatapp");  
                      $query = "SELECT lastactivity FROM users WHERE unique_id = '{$user_id}'";
                      $query_run = pg_query($conn, $query);
                      $row = pg_fetch_array($query_run);
		      echo $row['lastactivity'];
		      
		      
		    
                ?>
            </p>
  
      
      
        </div>
        
        
      </header>
      

      <div class="chat-box">

 
      </div>
	<div class="form-group">

		<div class="chat_message_area">
		
		   <form class="typing-area" action="#">
		   
		        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
		        
       <textarea type="text" name="message" id="emoji" class="input-field chat_message" placeholder="Type a message here..." autocomplete="off" rows="4" cols="50">

</textarea>
     <button style="background-color:blue;" class="start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'"><i class="fab fa-telegram-plane"></i></button>
   
	</form>	   
			<div class="image_upload">
				<form class="typing-area" id="uploadImage"  method="post" action="upload.php">
				<input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
					<label for="uploadFile"><img src="upload.png"  /></label>
					
		<input type="file" name="uploadFile" class="input-field-image" id="uploadFile" accept=".jpg, .png" />
		
				</form>
			</div>
		</div>
	</div>
      
	
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

$(document).ready(function(){


const form = document.querySelector(".typing-area"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");



	$('#uploadFile').on('change', function(){
		$('#uploadImage').ajaxSubmit({
			target: ".chat-box",
			resetForm: true
		});
	});

form.onsubmit = (e)=>{

    e.preventDefault();
}


inputField.focus();
inputField.onkeyup = ()=>{

 
    if(inputField.value != ""){
    
            $('#emoji').emojioneArea({
	pickerPosition:"top",
	toneStyle: "bullet"
	});

    	sendBtn.classList.add("active");
    }
    else{
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
              var element = $('#emoji').emojioneArea();
	      element[0].emojioneArea.setText('');
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
  



});
</script>

</body>
</html>
