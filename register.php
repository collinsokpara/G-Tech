<!DOCTYPE html>
<html>
<head>
	<title>Reistration</title>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.0.17, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
</head>
<body>
<?php
include 'header.php';

?>
<section class="mbr-section mbr-section-full mbr-parallax-background mbr-after-navbar w3-opacity-min" id="header2-9" data-rv-view="38" style="background-image: url(assets/images/tree.jpg); height: 200px; position: center; background-attachment: fixed;">

</section>



<!-- Beginning of the reg form -->

<section id="content">
<div class="container totalformcontainer w3-card-12">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
<form action method="post" id="signupForm">
<h2>Please Sign Up <small>(It's free and always will be)</small></h2>
<hr class="colorgraph">
<div class="row">
<div class="alert alert-info helloparticipants">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
<p style="color:black"><b><i class="fa fa-frown-o"></i> Hello Participant,</b> We are going through a Rebranding Process. Registration is Suspended Indefinitely till the Process is over. We will Notify you when we are ready.</p></div> <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<label>Referrals Name</label>
<input type="text" class="form-control  input-md" value="Ref: None" readonly/>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<div class="form-group">
<label for="email-login">Select Title</label>
<select class="form-control input-md" name="title">
<option value>-- Select Title --</option>
<option value="29">Advocate</option><option value="14">Ambassador</option><option value="8">Barrister</option><option value="22">Bishop</option><option value="33">Brigadier</option><option value="34">Captain</option><option value="40">Chancellor</option><option value="9">Coloniel</option><option value="17">Councillor</option><option value="28">Dame</option><option value="7">Doctor</option><option value="39">Elder</option><option value="10">Engineer</option><option value="18">Envagelist</option><option value="37">Eze</option><option value="32">General</option><option value="16">Governor</option><option value="13">Governor</option><option value="30">Justice</option><option value="25">King</option><option value="27">Lord</option><option value="11">Madam</option><option value="5">Master</option><option value="6">Miss</option><option value="1">Mr.</option><option value="4">Mrs</option><option value="36">Oba</option><option value="38">Obi</option><option value="35">Officer</option><option value="21">Pastor</option><option value="31">Pope</option><option value="19">Prelate</option><option value="15">President</option><option value="23">Prince</option><option value="24">Princess</option><option value="3">Professor</option><option value="2">Provost</option><option value="26">Queen</option><option value="20">Reverend</option><option value="12">Senator</option> </select>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-8">
<div class="form-group">
<label>Enter your Fullname</label>
<input type="text" class="form-control input-md" name="fullname" placeholder="Enter your fullname" required>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label>Gender</label>
<select class="form-control input-md" name="gender" required>
<option value>-- Select Sex --</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label>Select Resident State</label>
<select class="form-control input-md" name="state"  required>
<option value>-- Select State --</option>
<option value="1">Abia</option><option value="2">Abuja</option><option value="3">Adamawa</option><option value="4">Akwa-ibom</option><option value="5">Anambra</option><option value="6">Bauchi</option><option value="7">Bayelsa</option><option value="8">Benue</option><option value="9">Borno</option><option value="10">Cross-River</option><option value="11">Delta</option><option value="12">Ebonyi</option><option value="13">Edo</option><option value="14">Ekiti</option><option value="15">Enugu</option><option value="17">Gombe</option><option value="18">Imo</option><option value="16">International</option><option value="19">Jigawa</option><option value="21">Kaduna</option><option value="20">Kano</option><option value="22">Kastina</option><option value="23">Kebbi</option><option value="24">Kogi</option><option value="25">Kwara</option><option value="26">Lagos</option><option value="27">Nasarawa</option><option value="28">Niger</option><option value="29">Ogun</option><option value="30">Ondo</option><option value="31">Osun</option><option value="32">Oyo</option><option value="33">Plateau</option><option value="34">Rivers</option><option value="35">Sokoto</option><option value="36">Taraba</option><option value="37">Yobe</option><option value="38">Zamfara</option> </select>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label for="mobile">Contact Mobile <small>(080x Format)</small> <span class="phoneMSG"></span></label>
<input type="text" class="form-control input-md mobile" maxlength="15" name="mobile" placeholder="Mobile number in the 080x, 070x Format">
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label for="email">Enter your Email Address <span class="emailMSG"></span></label>
<input type="text" class="form-control input-md email" name="email" placeholder="Enter your Email address" required>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label for="password">Enter your Password</label>
<input type="password" class="form-control input-md" id="password1" name="password1" placeholder="Please enter your password" required>
<span id="pwdMeter" class="neutral" style="float:right; margin:-30px 0 0 0; display:none">Very Weak</span>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label for="password">Confirm Password</label>
<input type="password" class="form-control input-md" id="password2" name="password2" placeholder="Please confirm your password" required>
<span style="float:right" id="password_match_span"></span>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label for="email">Choose Username <small> [Uneditable] </small><span class="usernameMSG"></span></label>
<input type="text" class="form-control input-md username" maxlength="15" name="username" placeholder="Enter your Unique Username. No spaces" required>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group">
<label><i class="w3-badge w3-red">Captcha</i> Your Verification Code <small><span id="randomcaptcha"> 4 X 5 = ? </span></small></label>
<input type="text" name="captcha_answer" placeholder="Your verification code" class="form-control input-md" required>
<input name="captcha_answer_raw" type="hidden" value="20"/>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="terms-and-condition.html" target="_blank">Terms and Conditions</a>
set out by this site, including our <a href="disclaimer.html" target="_blank"> Disclaimer </a>.
</div>
</div>
<hr class="colorgraph">
<div class="row">
<input type="hidden" name="refererID" value/>
<input type="hidden" name="refererID_bringer" value="0"/>
<input type="hidden" name="pkID" value/>
<input type="hidden" name="payTO" value/>
<input type="hidden" name="token" value="hjtU6349BTI8Tcurtyfugv77"/>
<div class="col-xs-12 col-md-6"><button type="submit" class="btn btn-theme btn-block btn-lg signupBotton w3-light-blue" tabindex="7"> <i class="fa fa-edit"></i> Create my Account</button></div>
<div class="col-xs-12 col-md-6">Already have an account? <a onclick="document.getElementById('loginform').style.display='block'" class="nav-link btn w3-grey btn-black-outline signin-link">Sign In</a>
<!-- <li class="nav-item nav-btn"><a  class="nav-link btn btn-black btn-black-outline">Sign in</a></li> -->

<div class="col-xs-12 col-md-12"><span id="ingnix_registration_message"></span></div>
</div>
</form>
</div>
</div>
</div>
</section>

<!-- end of the reg form -->


<?php

include 'footer.php';
?>

  <script>
document.getElementById("randomcaptcha").innerHTML =
Math.floor(Math.random() * 39843) + 30000;
</script>
  
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
<input name="cookieData" type="hidden" data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
</body>
</html>

