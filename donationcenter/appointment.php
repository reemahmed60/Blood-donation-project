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

    <title>Appointment Booking</title>

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


<!--Appointment form starts here-->
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-12 col-md-9 col-lg-9" style="margin-top: 50px; padding: 15px;">
        <div class="card card-cascade" style="padding: 25px;">
            <form class="form-horizontal" role="form" method="POST" action="appt_view.php">
                <h2 class="text-center text-danger" style="font-weight:1; font-size: 35px;">Appointment Booking</h2>
                <hr style="width:550px;">
                <i class='far fa-calendar-plus fa-3x d-flex justify-content-center mb-3'></i>
                <p class="font-weight-normal text-center">Here are all the available dates and times for appointments in <span class="font-weight-bold text-danger"> Yanbu General Hospital:</span></p>
                <hr>

                <div class="form-group">
                    <label for="bloodType" class="col-sm-6 control-label">Appointment to donate blood type:</label>
                    <div class="col-sm-9">
                        <input type="text" name="blood" id="bldtype" readonly class="form-control-plaintext text-danger" value="<?php echo $blood?>">
                    </div>
                </div>


                <div class="form-group">
                  <label for="bloodgroup" class="col-sm-3 control-label">Available dates and times: </label>
                  <!--date-time picker-->

                  <div class="table-responsive mt-3">
                                <table class="table">
                <thead>
                  <tr>
                    <?php
                  include_once"connect.php";
                  $obj = new connect2db;
                  $sql="SELECT day, date FROM times";
                  $result=mysqli_query($obj->connect(),$sql);

                  while($row=mysqli_fetch_array($result)){ ?>

                    <th scope="col">
                      <input type="radio" value="<?php echo $row['day'];?> (<?php echo $row['date'];?>)" name="dayt">
                    <?php echo $row['day']; ?></input><br>
                   (<?php echo $row['date'];?>)<?php  }?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php $sql2="SELECT HOUR(t.time) AS h, MINUTE(t.time) AS m FROM times as t";
                    $result=mysqli_query($obj->connect(),$sql2);

                    while($row=mysqli_fetch_array($result)){ ?>
                  <div class="radio">
                    <td><label>
                      <input class="form-check-input" name="time" type="radio" value="<?php echo $row['h'];?>:<?php echo $row['m'];?>" id="flexCheckDefault" />
                      <?php echo $row['h'];?>:<?php echo $row['m'];?>0PM
                    </label></td>
                  </div>
                    <?php } ?>
                  </tr>

                </tbody>
              </table>
              </div>



              </div>

              <hr style="width:360px; margin-top:50px; margin-bottom:50px;">
              <h4 class="mx-3">Your Contact Information</h4><br>
              <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email: </label>
                  <div class="col-sm-9">
                      <input type="email" id="email" placeholder="Email" readonly class="form-control-plaintext text-primary" name= "email" value="<?php echo $_SESSION['email']?>">
                  </div>
              </div>

              <div class="form-group">
                  <label for="phoneNumber" class="col-sm-3 control-label">Phone number: </label>
                  <div class="col-sm-9">
                      <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" readonly class="form-control-plaintext text-primary" name="phone" value="<?php echo $phone?>">
                      <small class="help-block">Your phone number won't be disclosed anywhere</small>
                  </div>
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
