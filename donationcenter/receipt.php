<?php
session_start();
include_once "session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Confirmation</title>
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

              <div class="progress-bar bg-success" style="width:33.3%;">
                Step2: Add Blood Type
              </div>

              <div class="progress-bar bg-danger" style="width:33.3%;">
                Step3: Confirm Information
              </div>
            </div>
            </div>

          </div>
        </div> <!--end of the header card-->
    </div> <!--end of header card container-->
</div>


<div class="container-fluid">
        <div class="row d-flex justify-content-center mt-3">
          <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="card h-100 px-5">
          	<div class="card-body">
          		<div class="row gutters">
          			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="user-profile d-flex justify-content-center">
                    <h5 class="user-name text-danger d-flex text-center mb-3" style="font-weight:1; font-size: 35px;">Please Confirm these information</h5>
                  </div>
                  <div class="about d-flex justify-content-center">
                    <p class="text-secondary" style="font-weight:1;">Please make sure all your information has been entered correctly.<br><small> *You can edit your information from your profile.</small></p>

                  </div><hr>
          				<h6 class="mb-2 text-danger mb-4">Contact Information</h6>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="fullName">Full Name</label>
          					<input type="text" readonly class="form-control-plaintext text-primary" id="fullName" value="<?php echo $loggedin_session." ".$lname;?>">
          				</div>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="eMail">Email</label>
          					<input type="email" readonly class="form-control-plaintext text-primary" id="eMail" value="<?php echo $_SESSION['email']?>">
          				</div>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="phone">Phone</label>
          					<input type="text" readonly class="form-control-plaintext text-primary" id="phone" value="<?php echo $phone;?>">
          				</div>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="website">Address</label>
          					<input type="text" readonly class="form-control-plaintext text-primary" id="address" value="<?php echo $address;?>">
          				</div>
          			</div>
          		</div><hr style="width:260px;">
          		<div class="row gutters">
          			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          				<h6 class="mt-3 mb-2 text-danger mb-4">Personal Information</h6>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="gender">Gender</label>
          					<input type="text" readonly class="form-control-plaintext text-primary" id="gender" value="<?php echo $gender;?>">
          				</div>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="bld">Blood Type</label>
          					<input type="text" readonly class="form-control-plaintext text-primary" id="bld" value="<?php echo $blood;?>">
          				</div>
          			</div>
          			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          				<div class="form-group">
          					<label for="dob">Date of Birth</label>
          					<input type="text" readonly class="form-control-plaintext text-primary" id="dob" value="<?php echo $dob;?>">
          				</div>
          			</div>
          		</div>

              <!--for the buttons.-->
          		<div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-left">
                    <a href="donor.php"><button type="button" id="submit" class="btn btn-secondary">Back</button></a>
              </div>
          			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-right">
                <button class="btn btn-primary" id="btn-confirm" data-toggle="modal" data-target="#myModal">Confirm</button>
                </div>
          		</div>




          	</div> <!--for the entirety of the card.-->
        </div>
        </div>
        </div><!--row-->



        </div> <!-- ./container -->

        <!-- FOOTER -->
        <footer class="container" style="margin-top:60px;">
          <p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="#">Contact Us</a></p>
        </footer>



        <!--Modal window-->
              <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModal">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header d-flex mx-auto">
                      <h4 class="modal-title text-center text-success" id="myModalLabel">Congratulaions!</h4>
                      <i class="fas fa-handshake fa-2x text-success" style="margin:6px 10px 0px 10px;"></i>
                    </div>

                    <!--For Modal content-->
                    <div class="model-body my-4" style="margin:0px 25px 0px 25px;">
                      <p class="text-danger text-center"><i class="fas fa-hand-holding-water fa-4x"></i></p>
                      <p>You are now an eligible blood donor, we hope that you book an appointment
                        very soon. Thank you for your interest in Blood Donation.</p>
                    </div>

                    <div class="modal-footer d-flex mx-auto">
                      <button onclick="document.location.href='set_donor.php';" type="button" class="btn btn-primary">Done</button>
                    </div>

                  </div>
                </div>
              </div>
          <!--Modal end-->

</body>
</html>
