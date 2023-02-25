<?php
session_start();
include_once "session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>FAQ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
 <!-- Custom styles for this template -->
    <link href="faq.css" rel="stylesheet">
    <link href="general.css" rel="stylesheet">
<body>

<!--navbar-->


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
    <!-- Row -->

            <div class="container mt-sm-60 mt-30">
                <div class="hk-row">
                    <div class="col-xl-4">
                        <div class="card">
                            <h6 class="card-header">
                                            Category
                                        </h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center active">
                                    <i class="ion ion-md-sunny mr-15"></i>Frequently Asked Questions(FAQ).<span class="badge badge-light badge-pill ml-15">06</span>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-8">
                        <div class="card card-lg">
                            <h3 class="card-header border-bottom-0" id="top">
                                            Frequently Asked Questions(FAQ).
                                        </h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">HOW OFTEN CAN I DONATE BLOOD?</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                        <div class="card-body pa-15">You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">WHAT IF I SAY NO?</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">You’ll always be free to decline to donate, and your answer will remain confidential. But there’s no easy way to say this: by saying no, you’re robbing a sick person of what might be their only chance. Being someone’s match means YOU are their best hope of channelling their inner Bee Gees and staying alive.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false"> CAN I GIVE TO A SPECIFIC PERSON?</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">No. When you register to become a donor, you do it to save anyone’s life. We understand you might be driven to join because a loved one is sick. But the chances of you being a match for them are super extra tiny. When you register, you accept that you might be called to save the life of someone you’ve never met, even someone from another country.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">WHY ARE THERE AGE LIMITS?</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">Statistics show that younger people are more likely to be chosen as donors in life-saving transplants. Of course, people older than the age limit in their country can make good donors too, and that’s why we ask potential donors to stay on the registry until they reach the donor age limit (usually around 60 years old). But younger donors have fewer health complications that would prevent them from donating and may provide better transplant outcomes.</div>
                                    </div>
                                </div>
                                  <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">WHO CAN DONATE BLOOD?</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply.
                                        </div>
                                    </div>
                                </div>

                                 <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">WHAT SHOULD I DO AFTER DONATING BLOOD?</a>
                                    </div>
                                    <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">After you give blood:<ul><h5>Take the following precautions:</h5>
                                            <li>Drink an extra four glasses (eight ounces each) of non-alcoholic liquids.</li>
                                            <li>Keep your bandage on and dry for the next five hours, and do not do heavy exercising or lifting.</li>
                                            <li>If the needle site starts to bleed, raise your arm straight up and press on the site until the bleeding stops.</li>
                                            <li>Because you could experience dizziness or loss of strength, use caution if you plan to do anything that could put you or others at risk of harm. For any hazardous occupation or hobby, follow applicable safety recommendations regarding your return to these activities following a blood donation.</li>
                                            <li>Eat healthy meals and consider adding iron-rich foods to your regular diet, or discuss taking an iron supplement with your health care provider, to replace the iron lost with blood donation.</li>
                                            <li>Remember to enjoy the feeling of knowing you have helped save lives!</li>
                                            <li>If you get a bruise:  Apply ice to the area intermittently for 10-15 minutes during the first 24 hours. Thereafter, apply warm, moist heat to the area intermittently for 10-15 minutes. A rainbow of colors may occur for about 10 days.</li>
                                            <li>If you get dizzy or lightheaded:  Stop what you are doing, lie down, and raise your feet until the feeling passes and you feel well enough to safely resume activities.</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>




                        </div>
                    </div>
                    <a class="btn btn-lg btn-danger" href="#top" role="button" style="margin-top:30px;">Back to Top</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>

<!-- FOOTER -->
<footer class="container" style="margin-top:60px;">
  <p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="contactus.php">Contact Us</a></p>
</footer>

</body>
</html>
