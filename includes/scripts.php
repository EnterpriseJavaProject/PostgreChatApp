  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <script src="js/demo/datatables-demo.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


<script src="js/custom.js"></script>



  
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

  <script src="js/sweetalert.min.js"></script>


    <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
    ?>


<script>
    swal({
    title: "<?php echo $_SESSION['status'];  ?>",
    //text: "You clicked the button!",
    icon: "<?php echo $_SESSION['status_code'];  ?>",
    button: "OK Done!",
    });
</script>

 

    <?php
            
            unset($_SESSION['status']);
        }
    ?>





 





  <script>

    function toggleCheckbox(box)
    {
        var id = $(box).attr("value");
        if ($(box).prop("checked") == true) 
        {
            var visible = 1;
        }
        else
        {
            var visible = 0;
        }

        var data = {
            "search_data": 1,
            "id": id,
            "visible": visible
        };


        $.ajax({
            type: "post",
            url: "try.php",
            data: data,
            status: function (response) {
                // alert("Data Checked");

            }
        });
    }

</script>



<script type="text/javascript">
    $(function(){
        $('.bars li .bar').each(function(key, bar){
            var percentage = $(this).data('percentage');
            $(this).animate({
                'height' : percentage + '%'
            },1000);

        });
    });

    </script>