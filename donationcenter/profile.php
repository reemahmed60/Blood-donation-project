<?php
session_start();
include_once "session.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <!--  <link href="carousel.css" rel="stylesheet">-->
    <link href="general.css" rel="stylesheet">
    <link href="profile.css" rel="stylesheet">
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


<!--Beginning of the profile bit-->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="img/bld1.jpg" alt="profile pic"/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                              <!--  <input type="file" name="file"/>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      <?php echo $loggedin_session." ".$lname;?>
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Info</a>
                                </li>
                              <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Appointments</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>-->
                </div>
                <div class="row">
                <div class="col-md-4">
                        <div class="profile-work">
                            <p>PROFILE</p>
                            <a href="edit.php">Edit Profile</a><br/>
                            <!--<a href="delete.php">Delete Profile</a><br/>-->

                            <p>APPOINTMENTS</p>
                            <a href="check.php">Book Appointment</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $loggedin_session." ".$lname;?></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email'];?></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $phone;?></p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Eligibile to Donate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $donor;?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $address;?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $blood;?></p>
                                            </div>
                                        </div>


                            </div>


                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Day and Date:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dayt;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Time of Appointment:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $time;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $loc;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Booking:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $doc;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood type to donate:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $blood;?></p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label></label><br/>
                                        <small class="text-primary">*A confirmation email should be sent to you with the details of your appointment when you book it.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



      <!-- FOOTER -->
    <footer class="container" style="margin-top:60px;">
    <p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="contactus.php">Contact Us</a></p>
    </footer>

      </body>
</html>
