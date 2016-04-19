<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_computer.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>
<?PHP include ("quoteBlurb_general.php");?>

<?
require_once "Mail.php";

							$time = time (); 
							$timestamp = date("g:i A, m/d/y",$time) . "<br>"; 



							$strMessage = "";
							
							
							$strMessage = $strMessage . "<font face=verdana style='font-size:11px;'>";
							$strMessage = $strMessage . "<b>Submitted:</b> ";
							$strMessage = $strMessage . $timestamp;
							$strMessage = $strMessage . "<br><br>";
							$strMessage = $strMessage . "<b>Business:</b> ";
							$strMessage = $strMessage . $businessName;
							$strMessage = $strMessage . "<br><br>";							
							$strMessage = $strMessage . "<b>Personal Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Name:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["1"] ."</TD>";
							$strMessage = $strMessage . "<TD width=50></td>";
							$strMessage = $strMessage . "<TD ALIGN=RIGHT>Email Address:</TD>";
							$strMessage = $strMessage . "<TD VALIGN=TOP>". $_POST["10"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Address:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["2"] ."</TD>";
							$strMessage = $strMessage . "<TD></td>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Day Phone:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["6"] ."</TD>" ;
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'></td>";
							$strMessage = $strMessage . "<TD>". $_POST["3"] ."</td>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Night Phone:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["7"] ."</TD>" ;
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'></TD>";
							$strMessage = $strMessage . "<TD>". $_POST["4"] ." ". $_POST["5"] ."</TD>" ;
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Best Time to Call:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>";
							$strMessage = $strMessage .  $_POST["8"] ." &#160;" ;
							$strMessage = $strMessage .  $_POST["9"] ."</TD>";
							$strMessage = $strMessage . "</TD>" ;
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "</TABLE>";
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							
							$strMessage = $strMessage . "<b>Business Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD align='right'>Business Name:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["1a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD align='right'>Number of Employees:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["2a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD align='right'>Description:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["3a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
													
							if ($_POST["1"]=="") $Name="Online Customer";
							else $Name=$_POST["1"];
							
							
							if ($_POST["10"]=="") $Email=$_POST["toEmail"];
							else $Email=$_POST["10"];
							
							
							//$headers  = "From: $Name<$Email>\r\n"; 
    						//$headers .= "Content-type: text/html\r\n"; 
							
							 $from = "Rainman Forms <noreply@rainman.com>";
							$to = "pbarrow@1stinsurance.net";
							
							$host =  "mail.emailsrvr.com";
							$username = "noreply@rainman.com";
							$password = "Cr34t3stuff";
							  
							$headers = array ('MIME-Version' => '1.0',
									'Content-Type' => "text/html; charset=ISO-8859-1",
									'From' => $from,
									'To' => $to,
									'Subject' =>"Online Quote Form Submission - Business"
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
							
							//mail($_POST["toEmail"],"Online Quote Form Submission - Business",$strMessage,$headers)
							
				    	
?>
<div class="bodytext">
						<p>Thank you for completing our free insurance quote form. We will process your
						information and contact you shortly. If you have any questions, please <a href=contact.php>contact us</a>.</p>
     <div id="servicesBar">
        <a href="vehicle.php"><img src="images/icon-auto.png" alt="<?PHP echo $altTagAuto;?>" border="0" /></a>
        <a href="business.php"><img src="images/icon-business.png" alt="<?PHP echo $altTagBusiness;?>" border="0" /></a>
        <!--<a href="life.php"><img src="images/icon-health.png" alt="<?PHP echo $altTagLife;?>" border="0" /></a>-->
        <a href="property.php"><img src="images/icon-property.png" alt="<?PHP echo $altTagProperty;?>" border="0" /> </a>
    </div>
                        
</div>
<?php include("footer.php"); ?>