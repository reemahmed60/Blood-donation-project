<?php
session_start();
include_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- Bootstrap core CSS -->
		<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Us</title>
		<link href="carousel.css" rel="stylesheet">
		<link href="main.css" rel="stylesheet">
    <link href="general.css" rel="stylesheet">
		<link href="enquiry.css" rel="stylesheet">

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

	<div class="bg-contact100" >
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="img/contact.png" alt="IMG">
				</div>

				<form action="contact_view.php" class="contact100-form validate-form" method = "POST">
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" value="<?php echo $row['fname']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="msg" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn" name="submit">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
<footer class="container" style="margin-top:60px;">
<p>&copy; 2021 Donation Center. &middot; <a href="faq.php">FAQs</a> &middot; <a href="contactus.php">Contact Us</a></p>
</footer>

</body>
</html>
