<?php
session_start();
include_once "session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>Donor Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="carousel.css" rel="stylesheet">
    <link href="general.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a href="home.php"><img src="img/logo11.png" class = "logo"></a>
          <a class="navbar-brand" href="home.php" style = "color: black; "><b>lood Center</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>


  <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Donate</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="check.php" class="dropdown-item">Book Appointment</a>
                <a href="d_check.php" class="dropdown-item">Sign up as a Donor</a>
            </div>
        </li>
    </ul>

  </ul>
  <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-user"></i> Welcome, <?php echo $loggedin_session?></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="profile.php" class="dropdown-item">My Profile</a>
                <a href="profile.php#profile" class="dropdown-item">My Appointments</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php"class="dropdown-item">Logout <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </li>
    </ul>

        </div>
      </nav>
    </header>


    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 col-md-9 col-sm-12 mx-auto" style="margin-top: 50px; padding: 15px;">
          <!-- Card Regular -->
          <div class="card card-cascade" style="padding: 25px;">
    <!--Registertion progress bar-->
            <div class="container text-center mt-5">
            <h2>Donor Registration</h2><hr>
            <div class="progress mt-5" style=" height: 30px;">
              <div class="progress-bar bg-success" style="width:33.3%; ">
                Step1: Eligibility Survey
              </div>

              <div class="progress-bar bg-danger" style="width:33.3%;">
                Step2: Add Blood Type
              </div>

              <div class="progress-bar bg-warning" style="width:33.3%;">
                Step3: Confirm Information
              </div>
            </div>
            </div>

          </div>
        </div> <!--end of the header card-->
    </div> <!--end of header card container-->
</div>


<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-12 col-md-9 col-lg-9" style="margin-top: 50px; padding: 15px;">
        <div class="card card-cascade" style="padding: 25px;">
            <form class="form-horizontal" role="form" method = "POST" action="donor_view.php">
                <h2 class="text-center text-danger" style="font-weight:1; font-size: 35px;">Step2: Add your blood type</h2>
                <hr style="width:550px;">
                <i class="fas fa-pen fa-3x my-4 d-flex justify-content-center"></i>
                <p class="font-weight-normal text-center">Please fill all the<span class="font-weight-bold text-danger"> *Required fields:</span></p>
                <hr>

                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                    <div class="col-sm-9">
                        <input type="text" name="fname" id="firstName" placeholder="First Name" readonly class="form-control-plaintext text-primary" value="<?php echo $loggedin_session?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" readonly class="form-control-plaintext text-primary" name= "email" value="<?php echo $_SESSION['email']?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number* </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" readonly class="form-control-plaintext text-primary" name="phone" value="<?php echo $phone?>">
                        <small class="help-block">Your phone number won't be disclosed anywhere</small>
                    </div>
                </div>

                <div class="form-group">
                  <label for="bloodgroup" class="col-sm-3 control-label">Blood Type* </label>
                  <select class="form-control" name="blood">
                    <div class="col-sm-9 col-lg-4">
                       <option readonly>Select Your Blood Type:</option>
                       <option>O+</option>
                       <option>O-</option>
                       <option>A+</option>
                       <option>A-</option>
                       <option>B+</option>
                       <option>B-</option>
                       <option>AB+</option>
                       <option>AB-</option>
                    </div>
                </select>
              </div>

              <button type="submit" name="submit" class="btn btn-primary btn-block mx-auto" style="width: 200px;">Next</button>
            </form> <!-- /form -->
          </div><!--card-->
          </div><!--col-->
        </div><!--row-->
        </div> <!-- ./container -->

        <!-- FOOTER -->
        <footer class="container" style="margin-top:60px;">
          <p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="contactus.php">Contact Us</a></p>
        </footer>

</body>
</html>
