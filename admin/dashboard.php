<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">

            <div class="col-xl-4">
                <a href="add_testimonial.php">
                    <div class="card text-white bg-primary">
                        <div class="card-header">
                            <h5 class="card-title text-white">Admission Forms</h5>
                            <?php
                  include '../db_con.php';
                  $enrollment_query = "SELECT * FROM enrollment_form";
                  $enrollment_query_run = mysqli_query($con, $enrollment_query);

                  if ($enrollment_total = mysqli_num_rows($enrollment_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $enrollment_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> 0 </p>';
                  }
                  ?>
                        </div>
                        <div class="card-body mb-0">
                            <h5 class="text-center text-white"><a href="admission_list.php" class="text-white">Admission
                                    List</a></h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4">
                <a href="add_testimonial.php">
                    <div class="card text-white bg-primary">
                        <div class="card-header">
                            <h5 class="card-title text-white">Total Testimonial</h5>
                            <?php
                  include '../db_con.php';
                  $testimonial_query = "SELECT * FROM testimonial";
                  $testimonial_query_run = mysqli_query($con, $testimonial_query);

                  if ($testimonial_total = mysqli_num_rows($testimonial_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $testimonial_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> 0 </p>';
                  }
                  ?>
                        </div>
                        <div class="card-body mb-0">
                            <h5 class="text-center text-white"><a href="add_testimonial.php"
                                    class="text-white">Testimonial List</a></h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4">
                <a href="contact_list.php">
                    <div class="card text-white bg-primary">
                        <div class="card-header">
                            <h5 class="card-title text-white">Total Contacts Query</h5>
                            <?php
                  include '../db_con.php';
                  $contact_query = "SELECT * FROM contact";
                  $contact_query_run = mysqli_query($con, $contact_query);

                  if ($contact_total = mysqli_num_rows($contact_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $contact_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> 0 </p>';
                  }
                  ?>
                        </div>
                        <div class="card-body mb-0">
                            <h5 class="text-center text-white"><a href="contact_list.php" class="text-white">Contact
                                    List</a></h5>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<!--**********************************
   Content body end
   ***********************************-->
<!--**********************************
   Footer start
   ***********************************-->
<?php include 'footer.php' ?>
<!--**********************************
   Footer end
   ***********************************-->
<!--**********************************
   Support ticket button start
   ***********************************-->
<!--**********************************
   Support ticket button end
   ***********************************-->
</div>
<!--**********************************
   Main wrapper end
   ***********************************-->
<!--**********************************
   Scripts
   ***********************************-->
<!-- Required vendors -->

</body>

</html>