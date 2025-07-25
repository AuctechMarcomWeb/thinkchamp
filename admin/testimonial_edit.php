<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<?php
$price_id = $_GET['price_id'];
include '../db_con.php';
$que = "select * from testimonial where price_id = $price_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

?>
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Edit Testimonial Details</h4>
               </div>
               <div class="card-body">
                  <div class="form-validation">
                     <form class="needs-validation" method="POST" action="testimonial_upd.php" novalidate enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-xl-6">
                              <input type="hidden" name="price_id" value="<?php echo $row['price_id']; ?>">
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom01">Client Review
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="col-lg-6">
                                    <input type="text" name="paragraph" class="form-control" id="validationCustom01" placeholder="Enter Social Media.." value="<?php echo $row['paragraph']; ?>">
                                 </div>
                              </div>

                           </div>
                           <div class="col-xl-6">
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom03">Client Name
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="col-lg-6">
                                    <input type="text" name="name" class="form-control" id="validationCustom03" placeholder="Enter Rate" value="<?php echo $row['name']; ?>">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom03">Address
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="col-lg-6">
                                    <input type="text" name="address" class="form-control" id="validationCustom03" placeholder="Enter Rate" value="<?php echo $row['address']; ?>">
                                 </div>
                              </div>
                              
                           </div>
                           <div class="col-xl-6">
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom03">Image
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="col-lg-6">
                                    <input type="file" name="image" class="form-control" id="validationCustom03" placeholder="Enter Rate" value="<?php echo $row['image']; ?>">
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <div class="col-lg-8 ms-auto">
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php' ?>