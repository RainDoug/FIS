 <?php
 
 
 if(isset($_POST['requestType']) && !empty($_POST['requestType'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LcGyRwTAAAAAKQZKdLDUHEMdv87niumLv7u052v';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
           require_once "Mail.php";

							$time = time ();
							$timestamp = date("g:i A, m/d/y",$time) . "<br>"; 					
							$strMessage = "";
														
							$strMessage = $strMessage . "<font face=verdana style='font-size:11px;'>";
							$strMessage = $strMessage . "<b>Submitted:</b> ";
							$strMessage = $strMessage . $timestamp;
							$strMessage = $strMessage . "<br><br>";
							$strMessage = $strMessage . "<b>Website:</b> ";
							$strMessage = $strMessage . $businessName;
							$strMessage = $strMessage . "<br><br>";
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";

							foreach( $_POST as $key => $value){
								switch ($key) {
									case "submit":
									case "toEmail":
									case "requestType":
									case "g-recaptcha-response":
									case "x":
									case "y":
										break;
									default:
										switch ($value) {
											case "spacer":
												$strMessage = $strMessage . "<TR><TD colspan='2' align='center'><strong>" . $key . "</strong></TD></TR>";
												break;
											default:
												$strMessage = $strMessage . "<TR><TD ALIGN='RIGHT'><strong>" . $key . "</strong>  :</TD><TD>". $value ."</TD></TR>";
										}
								}
							}
							
							$strMessage = $strMessage . "</TABLE>";																							

							//$toEmail="john@rainman.com";
							//$toEmail="pbarrow@1stinsurance.net";
 				    	
							if ($_POST["fullname"]=="") $Name="Online Customer";
							else $Name=$_POST["fullname"];
							
							
							if ($_POST["email"]=="") $Email=$toEmail;
							else $Email=$_POST["email"];
							
							
							//$headers  = "Rainman Forms <noreply@rainman.com>\r\n"; 
    						//$headers .= "Content-type: text/html\r\n"; 
							
							if ($_POST["mailSubject"]=="") $mailSubject="Online Request";
								else $mailSubject=$_POST["mailSubject"];							
							 
							 
							 
							 
						    $from = "Rainman Forms <noreply@rainman.com>";
							$to = "pbarrow@1stinsurance.net";
  							$host =  "mail.emailsrvr.com";
							$username = "noreply@rainman.com";
							$password = "Cr34t3stuff";
							  
							$headers = array ('MIME-Version' => '1.0',
									'Content-Type' => "text/html; charset=ISO-8859-1",
									'From' => $from,
									'To' => $to,
									'Subject' => $mailSubject
								 );
							
							  
							  
							$smtp = Mail::factory('smtp',
							  array ('host' => $host,
								'auth' => true,
								'username' => $username,
								'password' => $password));
							 
							 
							$mail = $smtp->send($to, $headers, $strMessage);
							 
							if (PEAR::isError($mail)) {
							  echo("<p>" . $mail->getMessage() . "</p>");
							} else {
							 // echo("<p>Message successfully sent!</p>");
							}

            
            //$succMsg = 'Your contact request have submitted successfully.';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;
if(isset($_SERVER['HTTP_REFERER'])){
   // header("Location:".$_SERVER['HTTP_REFERER']."?err=1");
   if($errMsg!=''){
   ?>
   <script>alert('<?php echo $errMsg ?>');history.back(-1);</script>
   <?php }
   else {
    echo("<p>Message successfully sent!</p>");}
}
?>