

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_dashboard.php">
  <div class="sidebar-brand-icon">
  <img class="img-profile rounded-circle" src="images/Assemblies_Of_God_Logo.jpg" width="50" height="50">
    <!-- <i class="fas fa-laugh-wink"></i> -->
  </div>
  <div class="sidebar-brand-text mx-3"> DASHBOARD </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">



<!-----------All NPP Members Profile------------->
<!-- <li class="nav-item active">
  <a class="nav-link" href="all_npp_members_profile.php">
  <i class="fas fa-fw fa-chart-area"></i>
    <span>All NPP Members Profile</span></a>
</li> -->

<!-- Divider -->
<hr class="sidebar-divider">





<!-----------Admin Profile------------->
<li class="nav-item active">
  <a class="nav-link" href="#">
  <i class="fas fa-download fa-sm"></i>
    <span>GENERATE REPORTS</span></a>
</li>

<br>


<!-- ATETEBUBU/AMANTING CONSTITUENCY -->
<!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-chart-area"></i>
          <span>ADMIN ACTIONS</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="#">ADMIN ACTIONS</a>:</h6>
            <a class="collapse-item" href="adminDashboardLogin.php">Admins Dashboard</a>
            <a class="collapse-item" href="viewAllMembersPage.php">Members Dashboard</a>

          </div>
        </div>
      </li>

     


      <br> -->



<!-- DEPARTMENT -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-download fa-sm"></i>
          <span>DEPARTMENTS</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="user_page/u_kintampo_north_constituency.php">Departments</a>:</h6>

            <!-- <a class="collapse-item" href="#">Media</a> -->
            <form action="pdfNoDeptPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Without Dept
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'None' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <!-- <a class="collapse-item" href="angelicVoicesPDF.php">Angelic Voices</a> -->
            <form action="pdfAngelicVoicesPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">  Angelic Voices
              
               <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Angelic Voices' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo ': '.$row.' </a>';

                      ?>
              
               </button>
            </form>



                        <!-- <a class="collapse-item" href="angelicVoicesPDF.php">Angelic Voices</a> -->
                        <form action="pdfChildrenPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">  Children
              
               <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Children' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo ': '.$row.' </a>';

                      ?>
              
               </button>
            </form>



            <!-- <a class="collapse-item" href="#">Healing Voices</a> -->
            <form action="pdfHealingVoicesPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Healing Voices
               <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id FROM members where department = 'Healing Voices' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo ': '.$row.' </a>';

                      ?>
               
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Joy Fellowship</a> -->
            <form action="pdfJoyFellowshipPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Joy Fellowship
               <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id FROM members where department = 'Joy Fellowship' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo ': '.$row.' </a>';

                      ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Men's Ministry</a> -->
            <form action="pdfMenMinistryPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Men's Ministry
               <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

                    // $connection = mysqli_connect("localhost","root","","mobile_app");
                    //  $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     //$connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id FROM members where department = 'Men Ministry' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo ': '.$row.' </a>';

                      ?>
               </button>
            </form>



            <form action="pdfMusicPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light"> Music
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Music' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Women Ministry</a> -->
            <form action="pdfWomenMinistryPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Women Ministry
               <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Women Ministry' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo ': '.$row.' </a>';

                      ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Mission Team</a> -->
            <form action="pdfMissionTeamPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Mission Team
                <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Mission Team' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="pathFindersPDF.php">Pathfinders</a> -->
            <form action="pdfPathFindersPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Pathfinders
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'PathFinders' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Royal Rangers</a> -->
            <form action="pdfRoyalRangersPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Royal Rangers
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Royal Rangers' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Ushering</a> -->
            <form action="pdfUsheringPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Ushering
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Ushering' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



                        <!-- <a class="collapse-item" href="#">Ushering</a> -->
                        <form action="pdfSundaySchoolPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Sunday School
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Sunday School' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Young Singles</a> -->
            <form action="pdfYoungSinglesPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light"> Young Singles
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Young Singles' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Youth Ministry</a> -->
            <form action="pdfYoungMinistryPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Youth Ministry
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Youth Ministry' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Media</a> -->
            <form action="pdfMediaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Media
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'Media' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="pdfITPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">IT
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where department = 'IT' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


          </div>
        </div>
      </li>

<br>

<!-- RESIDENCE -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-download fa-sm"></i>
          <span>RESIDENCE</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="#">RESIDENCE</a>:</h6>
            <form action="residenceBukerePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Bukere
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Bukere' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceBongoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Bongo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Bongo' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceDadweoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Dadweo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Dadweo' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="residenceDaporetindongoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Daporetindongo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Dapor%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceDuluguPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Dulugu
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Dulug%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceKumbosicoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Kumbosico
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Kumbosi%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceEstatePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Estate
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Estate' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residencePologoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Pologo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Polo%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceSoePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Soe
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Soe%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceSorkabisiPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Sorkabisi
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Sorkabi%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="residenceSunbrunguPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Sunbrungu
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%brungu%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceTanzuaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Tanzua
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Tanz%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>

            <form action="residenceTindonsobligoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Tindonsobligo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Tindon' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceVeaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Vea
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Vea' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceYikenePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Yikene
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Yikene' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceYorogoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Yorogo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Yorog%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="residenceZaarePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Zaare
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence = 'Zaare' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="residenceZorbisiPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Zorbisi
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where residence LIKE '%Zorbi%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>

          </div>
        </div>
      </li>


<br>

<!-- REGIONS -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
        <i class="fas fa-download fa-sm"></i>
          <span>REGIONS</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="user_page/u_nkoranza_north_constituency.php">REGIONS</a>:</h6>
            <form action="regionPdfAhafoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">  Ahafo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Ahafo' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form> 

            <!-- <a class="collapse-item" href="#">Healing Voices</a> -->
            <form action="regionPdfAshantiPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Ashanti
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Ashanti' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Joy Fellowship</a> -->
            <form action="regionPdfBonoEastPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Bono East
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Bono East' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Men's Ministry</a> -->
            <form action="regionPdfBrongAhafoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Brong Ahafo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Brong Ahafo' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Women Ministry</a> -->
            <form action="regionPdfCentralPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Central
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Central' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Mission Team</a> -->
            <form action="regionPdfEasternPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Eastern
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Eastern' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="pathFindersPDF.php">Pathfinders</a> -->
            <form action="regionPdfGreaterAccraPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Greater Accra
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Greater Accra' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Royal Rangers</a> -->
            <form action="regionPdfNorthEastPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">North East
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'North East' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Ushering</a> -->
            <form action="regionPdfNorthernPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Northern
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Northern' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Young Singles</a> -->
            <form action="regionPdfOtiPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Oti
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Oti' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Youth Ministry</a> -->
            <form action="regionPdfSavannahPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Savannah
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Savannah' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Media</a> -->
            <form action="regionPdfUpperEastPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Upper East
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Upper East' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <!-- <a class="collapse-item" href="#">Media</a> -->
            <form action="regionPdfUpperWestPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Upper West
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Upper West' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <!-- <a class="collapse-item" href="#">Ushering</a> -->
            <form action="regionPdfWesternPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Western
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Western' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Young Singles</a> -->
            <form action="regionPdfWesternNorthPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Western North
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Western North' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <!-- <a class="collapse-item" href="#">Youth Ministry</a> -->
            <form action="regionPdfVoltaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Volta
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");
                      $query = "SELECT id FROM members where region = 'Volta' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


  
          </div>
        </div>
      </li>


<br>









<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
        <i class="fas fa-download fa-sm"></i>
          <span>COUNTRY</span>
        </a>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="#">COUNTRY</a>:</h6>

            <form action="countryBeninPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Benin
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Benin' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="countryBurkinaFasoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Burkina Faso
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Burkina Faso' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="countryCameroonPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Cameroon
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Cameroon' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>





            <form action="countryCongoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Congo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Congo' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="countryCôtedIvoirePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Côte d'Ivoire
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Côte dIvoire' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="countryGabonPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Gabon
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Gabon' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>










            <form action="countryGhanaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Ghana
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Ghana' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="countryMaliPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Mali
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Mali' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="countryNigerPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Niger
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Niger' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="countryNigeriaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Nigeria
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Nigeria' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>





            <form action="countrySenegalPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Senegal
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Senegal' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="countrySouthAfricaPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">South Africa
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'South Africa' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="countryTogoPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Togo
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where country = 'Togo' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>

          </div>
        </div>
      </li>


<br>










<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
        <i class="fas fa-download fa-sm"></i>
          <span>EMPLOYMENT STATUS</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFIve" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="#">EMPLOYMENT STATUS</a>:</h6>

            <form action="unemployedMembersPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Unemployed
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where occupation = 'No' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="selfEmployedPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Self Employed
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where occupation LIKE '%Self%' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="studentMembersPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Students
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where occupation = 'student' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>

          </div>
        </div>
      </li>












<br>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
        <i class="fas fa-download fa-sm"></i>
          <span>OTHER REPORTS</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"><a href="#">OTHER REPORTS</a>:</h6>

            <form action="MembersNotBaptisedPDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Members Not Baptised
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where year_baptised = 'No' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>


            <form action="allMembersPayingTithePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Members Paying Tithe
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id from members where tithe >= 1 ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="allMembersNotPayingTithePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">Members Not Paying Tithe
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id from members where tithe <= 0 ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>



            <form action="allMaleMembersPagePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">All Male Members
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where gender = 'Male' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>





            <form action="allFemaleMembersPagePDF.php" method="POST">
               <button type="submit" name="btn_pdf" class="btn btn-light">All Female Members
               <?php
                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT id FROM members where gender = 'Female' ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo ': '.$row.' </a>';
                ?>
               </button>
            </form>

          </div>
        </div>
      </li>


<br>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->












  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">   
          <h5 class="modal-title" id="exampleModalLabel">Admin Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you want to close this page?.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="admin_login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>




<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" required>
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>

    <i style="font-size:27px;color:blue;font-style-italic;">  ASSEMBLIES OF GOD | Holy Ghost Temple </i>

    <!-- <i style="font-size:32px;color:blue;">   <i style="color:yellow;">ASSEMBLIES OF</i> <i style="color:#3060f0;">GOD</i> | <i style="font-style: italic;font-size: 32px;font-weight: bolder;"> <i style="color:yellow;">Holy Ghost</i> <i style="color:#3060f0;">Temple</i>  </i> </i> -->



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" required>
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>



      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">3+</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            LAST 3 ADMIN LOGIN DETAILS
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <!-- <div class="small text-gray-500">December 12, 2019</div> -->
              <span class="font-weight-bold">
              
              <?php


                      $connection = mysqli_connect("localhost","root","","assemblies_of_God");  
                      $query = "SELECT username, lastactivity FROM `admin_login` ORDER BY `lastactivity` DESC LIMIT 1";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_fetch_array($query_run);

                      // $_SESSION['id'] = $usertypes['id'];
                      // $_SESSION['id'] = $usertypes['id'];


                      echo '   '.$row['username'].'  Login at ' .$row['lastactivity']. '';
                ?>
              
              
              
              <!-- Admin can Generate Report of all members -->
              
              </span>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-success">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <!-- <div class="small text-gray-500">December 7, 2019</div> -->
              <span class="font-weight-bold">
              

              <?php


$connection = mysqli_connect("localhost","root","","assemblies_of_God");  
$query = "SELECT username, lastactivity FROM `admin_login` GROUP by `lastactivity` ORDER BY `lastactivity` DESC LIMIT 1 OFFSET 1";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run);

// $_SESSION['id'] = $usertypes['id'];
// $_SESSION['id'] = $usertypes['id'];


echo '   '.$row['username'].'  Login at ' .$row['lastactivity']. '';
?>
              
              
              
              
              </span>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-warning">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <!-- <div class="small text-gray-500">December 2, 2019</div> -->
              <span class="font-weight-bold">
              


              <?php


$connection = mysqli_connect("localhost","root","","assemblies_of_God");  
$query = "SELECT username, lastactivity FROM `admin_login` GROUP by `lastactivity` ORDER BY `lastactivity` DESC LIMIT 1 OFFSET 2";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run);

// $_SESSION['id'] = $usertypes['id'];
// $_SESSION['id'] = $usertypes['id'];


echo '   '.$row['username'].'  Login at ' .$row['lastactivity']. '';
?>
              
              
              
              
           </span>
            </div>
          </a>
          <!-- <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-danger">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <span class="font-weight-bold">Admin can delete member information</span>
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div> -->
      </li>

      <!-- Nav Item - Messages -->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="#" role="button" data-toggle="#" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <!-- Counter - Messages -->
          <span class="badge badge-danger badge-counter">7</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">
            Message Center
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
              <div class="small text-gray-500">Emily Fowler · 58m</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
              <div class="status-indicator"></div>
            </div>
            <div>
              <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
              <div class="small text-gray-500">Jae Chun · 1d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
              <div class="status-indicator bg-warning"></div>
            </div>
            <div>
              <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
              <div class="small text-gray-500">Morgan Alvarez · 2d</div>
            </div>
          </a>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div>
              <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
              <div class="small text-gray-500">Chicken the Dog · 2w</div>
            </div>
          </a>
          <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
      </li>

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">





          <?php echo "Admin";  ?>

          
          
          </span>
          <!-- <i class="fas fa-laugh-wink"></i> -->
           <img class="img-profile rounded-circle" src="images/Assemblies_Of_God_Logo.jpg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin_login.php" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->

