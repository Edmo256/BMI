<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <?php
   $title = "Contact Us | Beautiful Minds International School";
   $description = "Get in touch with us directly with the form below to inquire and enrollment or for general questions about our school. We look forward to serving you!";
   $keywords = "Address, Phone Numbers , Google Map Directions, Offices";
   ?>
   <?php include 'includes/head.php' ?>
</head>
<!-- ==== body starts ==== -->

<body id="top">

   <!------------ Header Section -------------->
   <?php include 'includes/header.php' ?>

   <!-- page wrapper starts -->
   <div id="page-wrapper">
      <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
         <div class="container">
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-down">
               <h1>Contact</h1>
               <!-- Breadcrumbs -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact</li>
                  </ol>
               </nav>
               <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
         </div>
         <!-- /container -->
      </div>
      <!-- /jumbotron -->
      <!-- ==== Page Content ==== -->
      <div class="page container">
         <div class="row">
            <!-- page with sidebar starts -->
            <div class="col-lg-9 page-with-sidebar">
               <div class="col-md-12">
                  <div class="row">
                     <!-- contact-info-->
                     <div class="contact-info col-lg-12">
                        <!-- contact-info-->
                        <h3 class="mb-2">Contact Information </h3>
                        <p class="h7">get in touch with us today</p>
                        <p>You can contact us directly with the form below to inquire and enrollment or for general questions about our school. We look forward to serving you!
                        </p>
                        <h4 class="mt-5">Send us a message</h4>
                        <!-- Form Starts -->
                        <div id="contact_form">
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-md-6">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control input-field" required="">
                                 </div>
                                 <div class="col-md-6">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control input-field" required="">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control input-field">
                                 </div>
                                 <div class="col-md-12">
                                    <label>Message<span class="required">*</span></label>
                                    <textarea name="message" id="message" class="textarea-field form-control" rows="3" required=""></textarea>
                                 </div>
                              </div>
                              <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Send message</button>
                           </div>
                           <!-- /form-group-->
                           <!-- Contact results -->
                           <div id="contact_results"></div>
                        </div>
                        <!-- /contact)form-->
                     </div>
                     <!-- /contact-info-->
                     <div class="col-lg-12">
                        <!-- contact info boxes start-->
                        <div class="contact-info res-margin">
                           <div class="row res-margin mt-5 res-margin">
                              <div class="col-lg-3 mt-5 res-margin">
                                 <div class="contact-icon bg-secondary text-light">
                                    <!---icon-->
                                    <i class="fa fa-map-marker top-icon"></i>
                                    <!-- contact-icon info-->
                                    <div class="contact-icon-info">
                                       <h5>Visit us</h5>
                                       <p>P.O Box 676, Ntinda</p>
                                    </div>
                                 </div>
                                 <!-- /contact-icon-->
                              </div>
                              <!-- /col-lg -->
                              <div class="col-lg-6 mt-5">
                                 <div class="contact-icon bg-secondary text-light">
                                    <!---icon-->
                                    <i class="fa fa-envelope top-icon"></i>
                                    <!-- contact-icon info-->
                                    <div class="contact-icon-info">
                                       <h5>Write us</h5>
                                       <p><a href="mailto:beautifulmindsinternational@gmail.com">beautifulmindsinternational@gmail.com</a></p>
                                    </div>
                                 </div>
                                 <!-- /contact-icon-->
                              </div>
                              <!-- /col-lg-->
                              <div class="col-lg-3 mt-5 res-margin">
                                 <div class="contact-icon bg-secondary text-light">
                                    <!---icon-->
                                    <i class="fa fa-phone top-icon"></i>
                                    <!-- contact-icon info-->
                                    <div class="contact-icon-info">
                                       <h5>Call us</h5>
                                       <p>(123) 456-789</p>
                                    </div>
                                 </div>
                                 <!-- /contact-icon-->
                              </div>
                              <!-- /col-lg-->
                           </div>
                           <!-- /row -->
                        </div>
                        <!-- /contact-info-->
                     </div>
                     <!-- /col-lg-->
                  </div>
                  <!-- /row-->
                  <!-- map-->
                  <div class="map-section mt-5">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4342449550126!2d32.613764741418166!3d0.3658603019670966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dba3d630a5f01%3A0x96c902568669343e!2sNtinda%20Kigowa%20Rd%2C%20Kampala!5e0!3m2!1sen!2sug!4v1668665965210!5m2!1sen!2sug" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <!-- /map-->
               </div>
               <!-- /col-lg-12-->
            </div>
            <!-- /page-with-sidebar -->
            <!------------ Sidebar Section -------------->
            <?php include 'includes/sidebar-abt.php' ?>
            <!--/sidebar -->
         </div>
         <!-- /row -->
      </div>
      <!-- /page -->
   </div>
   <!--/ page-wrapper -->

   <!------------ Footer Section -------------->
   <?php include 'includes/footer.php' ?>

   <!------------ Script Section -------------->
   <?php include 'includes/script.php' ?>
   <!-- maps -->
</body>

</html>