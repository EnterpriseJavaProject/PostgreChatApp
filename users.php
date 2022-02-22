<?php 
  session_start();
  include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
      
 
        <div class="content">
        
          <?php 
            $membershipno = $_SESSION['unique_id'];
            $sql = pg_query($conn, "SELECT * FROM users WHERE unique_id = '{$membershipno}'");
            if(pg_num_rows($sql) > 0){
              $row = pg_fetch_assoc($sql);
            }
          ?>
                       <a href="my_profile.php?profile_id=<?php echo $row['unique_id']; ?>" > 
          <img src="<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['username'] ?></span>
            <p><?php echo $row['status']; ?></p>
            
               </a>
            
            <hr>

             <p>  
          	<?php

                      //$connection = mysqli_connect("localhost","root","","chatapp");
                      $query = "SELECT user_id FROM users where status = 'Active now' ORDER BY user_id";
                      $query_run = pg_query($conn, $query);
                      $row = pg_num_rows($query_run);
           
                     echo '<h4 style="color:red;font-weigth:bold;">'.$row.' Members Online </h4>';
                ?>
            </p>
          </div>
        </div>
     
        
        
 <a href="logout.php?logout_id=<?php echo $row['unique_id']; ?>" onclick="if (!confirm('Are you sure you want to logout!')) return false" class="logout">Logout</a>
        

        
      </header>
      <div class="search">
        <span class="text">Search for a Member</span>
        <input type="text" placeholder="Enter members name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>








   <!-- USERS JAVASCRIPT -->


<script>


const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php_users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);





</script>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>


</body>
</html>
