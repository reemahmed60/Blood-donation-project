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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Eligibility Survey</title>
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
          <div class="progress-bar bg-danger" style="width:33.3%; ">
            Step1: Eligibility Survey
          </div>

          <div class="progress-bar bg-warning" style="width:33.3%;">
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



<!--The Survey Form starts here!-->
  <div class="row">
      <div class="col-lg-9 col-md-10 col-sm-12 mx-auto" style="margin-top: 50px; padding: 15px;">
        <!-- Card Regular -->
        <div class="card card-cascade" style="padding: 25px;">

          <!-- Card content -->
          <div class="card-body card-body-cascade text-center" style="margin: auto;">

            <!-- Title -->
            <h4 class="card-title text-danger" style="font-weight:1; font-size: 35px;">Step1: Eligibility Survey</h4>
            <hr>
            <!-- Subtitle -->

            <i class="fas fa-poll-h fa-3x blue-text mb-2"></i>
            <p class="font-weight-normal">Please choose at least<span class="font-weight-bold"> one option:</span></p>
            <!-- Questions -->
          </div>
          <hr>

           <form action="process.php" id = "survey" method = "POST">
            <div class="custom-control custom-checkbox mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheck" value = "blue//q1" name="question[]">
          <label class="custom-control-label" for="customCheck">Are you under 18 years old?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck2" value = "blue//q2" name="question[]">
        <label class="custom-control-label" for="customCheck2">Are you over 78 years old?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck3" value = "blue//q3" name="question[]">
        <label class="custom-control-label" for="customCheck3">Do you have iron deficiency?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck4" value = "blue//q4" name="question[]">
        <label class="custom-control-label" for="customCheck4">Do you weigh less than 50kg?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck5" value = "blue//q5" name="question[]">
        <label class="custom-control-label" for="customCheck5">Do you have a serious heart condition, or have you ever had a heart attack or stroke?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck6" value = "blue//q6" name="question[]">
        <label class="custom-control-label" for="customCheck6">Have you had an operation or surgical procedure in the last 6 months, or are you planning on any in the 3 months after your donation?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck7" value = "blue//q7" name="question[]">
        <label class="custom-control-label" for="customCheck7">Are you pregnant, or have you been pregnant in the last 9 months?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck8" value = "blue//q8" name="question[]">
        <label class="custom-control-label" for="customCheck8">Are you taking antibiotics?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck9" value = "blue//q9" name="question[]">
        <label class="custom-control-label" for="customCheck9">Have you (or will you have) any dental work in the week before your donation?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck10" value = "blue//q10" name="question[]">
        <label class="custom-control-label" for="customCheck10">Have you had a tattoo in the 4 months before your donation?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="customCheck11" value = "blue//q11" name="question[]">
        <label class="custom-control-label" for="customCheck11">Have you had a piercing in the 4 months before your donation?</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="last" value = "red//yes" name="question[]">
        <label class="custom-control-label" for="last">None of the above apply to me.</label>
        </div>
        <script src="disable.js"></script>

          <hr>

          <div class="survey-footer clearfix">
            <!--<a href = "donor.php">-->
             <button type="submit" class="btn btn-primary waves-effect waves-light ml-3 mb-3" name = "submit">Send
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
            </button> <!--</a>-->
            <a type="button" class="btn btn-outline-primary waves-effect float-right mr-3 mb-3"
             onclick="resetAnswer()" value="Reset form">Reset <i class="fas fa-undo" aria-hidden="true"></i>
           </a>
             <script src="survey.js"></script>
          </div>
        </form>
        </div>
      </div>
</div><!--end of the survey card container-->


        <!-- FOOTER -->
        <footer class="container" style="margin-top:60px;">
          <p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="contactus.php">Contact Us</a></p>
        </footer>

  </body>
</html>
