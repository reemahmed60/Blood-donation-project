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
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
                <div class="row">
                  
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      <?php echo $loggedin_session." ".$lname;?>
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee Info</a>
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
                            <a href="edit.php" class="text-danger">Edit Profile</a><br/>
                            <!--<a href="delete.php">Delete Profile</a><br/>-->

                            <p>APPOINTMENTS</p>
                            <a href="check.php">Book Appointment</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <form method="POST" action="update_profile.php" id="form">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                  <input type="text" placeholder="First Name" name="fname" class="form-control" style = "height:30px; width:260px;" autofocus>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                              <input type="text" placeholder="Email" name="email" class="form-control" style = "height:30px; width:260px;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                              <input type="text" placeholder="Password" name="password" class="form-control" style = "height:30px; width:260px;">

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                              <input type="text" placeholder="Phone number" name="phone" class="form-control" style = "height:30px; width:260px;">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                              <textarea placeholder="Address" name="address" class="form-control" style="height:200px"> </textarea>
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

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Eligibile to Donate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $donor;?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="submit" class = "btn btn-primary" name="submit" value = "Update"></input>
                                        <button type="button" class ="btn btn-outline-primary waves-effect float-right mr-3 mb-3"
                                         onclick="resetForm()" value="Reset form">Reset <i class="fas fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <script src="reset.js"></script>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
        </div>



      <!-- FOOTER -->
    <footer class="container" style="margin-top:60px;">
    <p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="contactus.php">Contact Us</a></p>
    </footer>

      </body>
</html>
