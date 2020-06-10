<?php
if($_POST)
{
/* require('constant.php'); */
define('SITE_KEY',"6LfqovwUAAAAAB2OHbzWuN1xNc0K_KIpD8wIP2pZ"); 
define('SECRET_KEY',"6LfqovwUAAAAAEnPF7fahO7DWHyyVxmhcMqYFT_y");
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $content        = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Phone Number</b>";
	}	
	if(empty($content)) {
		$empty[] = "<b>Comments</b>";
	}
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {
		
		require('component/recaptcha/src/autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}
	
	$from="maheshpeddi234@gmail.com";
	$to="maheshpeddi1234@gmail.com";
	$subject="new message";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
  	$content1 = '<html><body><h3 align="left">Visitor Information</h3>
               <table border="1" width="45%" cellpadding="5" cellspacing="5">
                <tr>
                 <td width="15%"><b>Name</b></td>
                 <td width="30%">'.$user_name.'</td>
                </tr>
                <tr>
                 <td width="15%"><b>Email Address</b></td>
                 <td width="30%">'.$user_email.'</td>
                </tr>
                <tr style="height:150px">
                 <td style="vertical-align:top" width="15%"><b>Message</b></td>
                 <td style="vertical-align:top" width="30%">'.$content.'</td>
                </tr>
               </table></body></html>'; 

	if(mail($to,$subject,$content1,$headers)){
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the comments. We will get back to you shortly.'));
	    die($output);
	}
	else {
		$output = json_encode(array('type'=>'error', 'text' => 'Unable to send message, please try after some time'));
	    die($output);
	}
}
?>