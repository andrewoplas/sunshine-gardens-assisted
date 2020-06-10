<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="contact details">
    <meta name="author" content="">
   <!--  <link rel="icon" href="../../favicon.ico"> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167344352-1"></script>

		<script>

		  window.dataLayer = window.dataLayer || [];

 		 function gtag(){dataLayer.push(arguments);}

		  gtag('js', new Date());



 		 gtag('config', 'UA-167344352-1');

		</script>
    <title>Sunshine Gardens Assisted Living :: Contact</title>
	<style type="text/css">
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #663399;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #FFFFFF;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #663399;
	border: 0px solid #663399;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #663399 5%, #30C9C9 100%);
	background-color:#663399;
}
</style>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel/carousel.css" rel="stylesheet">
	<link href="css/sunshine-styles.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img alt="sunshine logo" src="images/logo-sunshine.jpg"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="amenities.html">Amenities</a></li>
                <li><a href="services.html">Services</a></li>
				        <li><a href="about-us.html">About Us</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="events.html">Events</a></li>
                <li class="active"><a href="contact.php">Contact</a></li> 
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    
	<br /><br /><br /><br />
	
	<?php
    $result="";
	if(isset($_POST['submit'])){
		//reCAPTCHA validation
/* 	if (isset($_POST['g-recaptcha-response'])) {
		
		require('component/recaptcha/src/autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha("6LfqovwUAAAAAEnPF7fahO7DWHyyVxmhcMqYFT_y");

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) {
					$result ="Captcha verification failed! Please try again";			
		  }	
	} */
	$from="maheshpeddi234@gmail.com";
	$to="maheshpeddi1234@gmail.com";
	$subject="new message";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
  	$content = '<html><body><h3 align="left">Visitor Information</h3>
  <table border="1" width="45%" cellpadding="5" cellspacing="5">
   <tr>
    <td width="15%"><b>Name</b></td>
    <td width="30%">'.$_POST["name"].'</td>
   </tr>
   <tr>
    <td width="15%"><b>Email Address</b></td>
    <td width="30%">'.$_POST["email"].'</td>
   </tr>
   <tr style="height:150px">
    <td style="vertical-align:top" width="15%"><b>Message</b></td>
    <td style="vertical-align:top" width="30%">'.$_POST["message"].'</td>
   </tr>
  </table></body></html>'; 
	if(mail($to,$subject,$content,$headers)){
    $result="Thank you for contacting us.we will contact you soon";		
	}
	else {
		$result= "Please try after some time";
	}
	}
?>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing innerPage">

      


      <!-- START THE FEATURETTES -->

     <!--  <div class="row pb40 pad-30">
        <div class="col-md-12">
          <h1>Contact Us</h1>
          <p>Sunshine Gardens<br/>422 Comfort Drive,<br />Marion, IL 62959.<br />618-364-0482</p>
        </div>
		<div class="clear"></div>
      </div> -->
	  
	  <div class="form-style-8">
  <h2 style="color:#FFD700" align="middle">Contact Us</h2>
  <form  method="post" id="email-form" name="email-form" data-name="Email Form" enctype="multipart/form-data">
    <input type="text" maxlength="256" name="name" data-name="name" placeholder="Full Name" required=""/>
    <input type="email" maxlength="256" name="email" data-name="email" placeholder="Email" required=""/>
    <input type="number" maxlength="10" name="mobile" data-name="mobile" placeholder="Mobile" required=""/>
    <textarea maxlength="2000" id="message" name="message" placeholder="Message" onkeyup="adjust_textarea(this)" required=""></textarea>
	<!-- <div class="g-recaptcha" data-sitekey="6LfqovwUAAAAAB2OHbzWuN1xNc0K_KIpD8wIP2pZ"></div> -->
    <input type="submit" name="submit" value="Submit" data-wait="Please wait..." /> 
	<br>
	<br>
	<p style="color:red"><b><?php echo $result ?></b></p>
  </form>
</div>

      <!-- /END THE FEATURETTES -->
	  
	  <!-- start: contact section -->
	  	<div class="row contactSec">
        <div class="col-lg-4 bgGrey">
          <h2>Our Initiatives</h2>
          <p>
		  	Monthly Wellness Program<br />
			Religious Services<br />
			Laundry Service
		  </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 bgGrey borderLR">
          <h2>Social Presence</h2>
          <a href="https://www.facebook.com/SunshineGardensMarion/" ><img alt="See more of Sunshine Gardens on Facebook" src="images/icon-fb.gif" class="mr15"></a>
        </div><!-- /.col-lg-4 -->
		<div class="col-lg-4 bgGrey borderLR">
          <h2>Sitemap</h2>
          <ul><li class="active"><p><a class="btn btnLearnMore" href="sitemap.html" role="button">Sitemap</a></p></li></ul>
        </div>
        <div class="col-lg-4 bgGrey">
          <h2>Contact Us</h2>
          <p>Sunshine Gardens<br/>422 Comfort Drive,<br />Marion, IL 62959.<br />618-364-0482</p>
        </div><!-- /.col-lg-4 -->
		<div class="clear"></div>
	  <!-- end: contact section -->
		</div>     
		
		<!-- /.container -->
</div>

      <!-- FOOTER -->
      <div class="container padLR0">
      <footer>
        <div style="overflow: hidden;" class="footer">
          <p>Copyright &copy; 2020 Sunshine Gardens</p>
          <p>
            <a id="sitemap" href="sitemap.html"><b>Sitemap</b></a>
          </p>
        </div>
      </footer>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery-1.10.1.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
