<?php
require_once "Mail.php";
/*$from = "noreply@1stinsurance.net";
$to = "krishna04priya@gmail.com";
$subject = "1stinsurance - Contact Form";
$_POST['name']="Priya";
$_POST['email']="priya@newlineinfo.com";
$_POST['phone']="12345";
$_POST['msg']="test msg";
$msg = "Name: " . $_POST['name'] . "\r\n";
$msg .= "Email: " . $_POST['email'] . "\r\n";
$msg .= "Phone: " . $_POST['phone'] . "\r\n";
$msg .= "Message: " . $_POST['msg'] . "\r\n";

$host = "mail.emailsrvr.com";
$port = "465";
$username = "jamie@rainman.com";
$password = "***********";
$headers = array ('From' => $_POST['email'], 'To' => $to, 'Subject' => $subject, 'Date' => date("r"));
$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true, 'port' => $port, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, stripslashes($msg));
if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<script>location.href='thank_you.html#thankyou';</script>"); }*/
$from = "Rainman Forms <noreply@rainman.com>";
$to = "krishna04priya@gmail.com";

$host =  "mail.emailsrvr.com";
$username = "noreply@rainman.com";
$password = "Cr34t3stuff";
$subject = "1stinsurance - Contact Form";

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
 
$body="sample content";
$mail = $smtp->send($to, $headers, $body);
 
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}

?>