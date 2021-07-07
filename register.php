<!DOCTYPE html>
<html lang="en">

<?php require_once "head.php" ?>

<head>

    <script type="text/javascript"> 

        $(document).ready(function() {
            $("#register").click(function() {

                fname=$("#fname").val();
                lname=$("#lname").val();
                email=$("#email").val();
                password=$("#password").val();
                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname" +lname + "&email=" + &email +"&password="+ password,
                    success: function(html)(
                        if(html=='true')
                        {

                            $("#add_err2").html('<div class="alert alert-success"> \
                            <strong>Account</strong> processed.</div>'); \ \

                            window.location.href = "index.php";

                        } elseif (html=='false') {
                            
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Email Address</strong> already in system.</div>'); \ \

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>First Name</strong> is required.</div>'); \ \

                        } else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Last Name</strong> is required.</div>'); \ \

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Email Address</strong> is required.</div>'); \ \

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Email Address</strong> format is not valid.</div>'); \ \

                        } else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Password</strong> must be atleast 4 characters.</div>'); \ \

                        } else{
                            $("#add_err2").html('<div class="alert alert-danger"> \
                            <strong>Error</strong> processing request. Please try again. </div>'); \ \
                        }
                    ),
                    beforesend:function() {}
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });

    </script>

</head>


<body>

  <!-- ======= Header ======= -->
  <?php require_once "nav.php" ?>

  <main id="main">
    <!-- ======= Contact Section ======= -->

    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Register</li>
        </ol>
        <h2>Registration Form</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <section id="contact" class="contact">
        <div class="container">

                <div class="row">
                  <div id="add_err2"></div>
                    <!-- <form action="forms/contact.php" method="post" class="php-email-form"> -->
                    <form role="form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                            <input type="text" id="fname" name="fname" maxlength="25" class="form-control" placeholder="First Name" >
                            </div>

                            <div class="col-md-6">
                            <input type="text" id="lname" name="lname" maxlength="25" class="form-control" placeholder="Last Name" >
                            </div>

                            <div class="col-md-12">
                            <input type="email" id="email" name="email" maxlength="25" class="form-control" placeholder="Email Address" >
                            </div>

                            <div class="col-md-12">
                            <input type="password" id="password" name="password" maxlength="250" class="form-control" placeholder="Password" >
                            </div>

                            <div class="form-group col-md-12 text-center">
                                <!-- <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div> -->

                                <button type="submit" id="register">Submit</button>
                            </div>

                        </div>
                    </form>

                        <div class="form-group col-md-12">
                            <a href="login.php"><button type="submit" class="btn btn-danger">Already a member? Login here</button></a>
                        </div>

                </div>

        </div>
                

      </section><!-- Registration Session-->

      
<!-- ======= Footer ======= -->

    <?php require_once "footer.php" ?>

<!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>