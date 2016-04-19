<?php
  @session_start();
  if ( $_SESSION['captcha2'] != $_POST['verification2'] ) {
    // What happens when the reCAPTCHA was entered INCORRECTLY
    include('form_Failed.php');
    exit;
  } else {
  	// What happens when the reCAPTCHA was entered CORRECTLY
    include('form_Success.php');
  }

require_once "Mail.php";

$from = $_POST["Name"] . "<" . $_POST["Email"] . ">";
$to = $_POST["toEmail"];
//$subject = "Rainman Form Request\r\n\r\n";
	if ($_POST["mailSubject"]=="") $subject="Rainman Form Request\r\n\r\n";
	else $subject=$_POST["mailSubject"];
							$time = time ();
							$timestamp = date("g:i A, m/d/y",$time) . "<br>";
							$body = "";
							$body = $body . "<b>Submitted:</b> ";
							$body = $body . $timestamp;
							$body = $body . "<br>";
							$body = $body . "<b>Website:</b> ";
							$body = $body . $businessName;
							$body = $body . "<br><br>";

							$body = $body . "<table>";

							foreach( $_POST as $key => $value){
								switch ($key) {
									case "submit":
									case "mailSubject":
									case "toEmail":
									case "requestType":
									case "recaptcha_challenge_field":
									case "recaptcha_response_field":
									case "verification2":
										break;
									default:
										switch ($value) {
											case "spacer":
												$body = $body . "<tr><td colspan='2' align='center'><strong>" . $key . "</strong></td></tr>";
												break;
											default:
												$body = $body . "<tr><td align='right'><strong>" . $key . "</strong>  :</td><td>" . $value . "</td></tr>";
										}
								}
							}

							$body = $body . "</table>";

$host = "mail.emailsrvr.com";
$username = "noreply@rainman.com";
$password = "bevo1990";


// To send HTML mail, the Content-type header must be set
//http://stackoverflow.com/questions/7814910/how-to-send-an-html-email-using-smtp-in-php?rq=1
$headers = array ('MIME-Version' => '1.0',
        'Content-Type' => "text/html; charset=ISO-8859-1",
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
     );



$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {

}
?>

