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
							$strMessage = $strMessage . "<b>Submitted:</b>";
							$strMessage = $strMessage . $timestamp;
							$strMessage = $strMessage . "<br><br>";
							$strMessage = $strMessage . "<b>Business:</b> ";
							$strMessage = $strMessage . $businessName;							
							$strMessage = $strMessage . "<br><br>";
							$strMessage = $strMessage . "<b>Primary Insured</b>";
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
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["6"] ."</TD>"; 
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
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Date of Birth:</td>";
							$strMessage = $strMessage . "<TD>". $_POST["11"] ."</td>";
							$strMessage = $strMessage . "</TR>"	;
							
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Occupation:</td>";
							$strMessage = $strMessage . "<TD>". $_POST["12"] ."</td>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>How long at current job:</td>";
							$strMessage = $strMessage . "<TD>". $_POST["13"] ."</td>";
							$strMessage = $strMessage . "</TR>"	;
							//ssnSelf
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>SSN:</td>";
							$strMessage = $strMessage . "<TD>". $_POST["ssnSelf"] ."</td>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "</TR>"	;
							
							$strMessage = $strMessage . "</TABLE>";
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							
							$strMessage = $strMessage . "<b>Spouse or Additional Insured</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Name:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["1g"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Occupation:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["2g"] ."</TD>";
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Date of Birth</td>";
							$strMessage = $strMessage . "<TD>". $_POST["3g"] ."</td>";
							$strMessage = $strMessage . "</TR>"	;
							//ssnSpouse
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>SSN:</td>";
							$strMessage = $strMessage . "<TD>". $_POST["ssnSpouse"] ."</td>";
							$strMessage = $strMessage . "</TR>"	;

							$strMessage = $strMessage . "</TABLE>";
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Current Homeowners Insurance Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Company Name <I>(not agency)</I>: </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["1a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Policy Expiration Date: </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["2a"] ." &#160; Premium Amount: $". $_POST["3a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Dwelling Amount Insured For:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>$". $_POST["4a"] ." &#160; &#160;  Policy Type: ". $_POST["5a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Contents Amount Insured For:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["6a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Liability Coverage Limit:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["7a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Deductible:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>Clause 1 ". $_POST["8a"] ." &nbsp;&nbsp;&nbsp; Clause 2 ". $_POST["9a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
						
							$strMessage = $strMessage . "<b>Home Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Address</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["1b"] ."</TD>";
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>City</td>";
							$strMessage = $strMessage . "<TD>". $_POST["2b"] ."</td>";
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>State</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["3b"] ."&nbsp;Zip&nbsp;". $_POST["4b"] ."</TD>";
							$strMessage = $strMessage . "</TR>"	;
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>How Long At Present Address: </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["5b"] ." &#160; &#160; Year Home Was Built: ". $_POST["6b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Sq. Footage: </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["7b"] ." sq. ft. &#160; &#160; &#160; &#160;# of Claims In Last 3 Years: ". $_POST["8b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>New Home Purchase? </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["9b"] ."&#160; &#160; &#160; &#160;# Closing Date: ". $_POST["10b"] ."&#160; &#160; &#160; &#160;# Purchase Price: ". $_POST["11b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							//occupancy
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' VALIGN='CENTER'>Occupants: </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>" . $_POST["occupancy"] . "</TD>";
							$strMessage = $strMessage . "</TR>";
							
							
							$strMessage = $strMessage . "</TABLE>";
							
							
							
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Structure Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
					//	electricUpdate
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><CENTER> Electrical Update: ". $_POST["electricUpdate"] . "</TD>";
							$strMessage = $strMessage . "<TD>Date: ". $_POST["electricUpdateDate"] . "</TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "</TR>";							
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><CENTER> Plumbing Update: ". $_POST["plumbingUpdate"] ." </TD>";
							$strMessage = $strMessage . "<TD> Date: ". $_POST["plumbingUpdateDate"] ." </TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "</TR>";	
							
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><CENTER><b>Type</TD>";
							$strMessage = $strMessage . "<TD><CENTER><b>Construction</TD>";
							$strMessage = $strMessage . "<TD><CENTER><b>Roof</TD>";
							$strMessage = $strMessage . "<TD><CENTER><b>Foundation</TD>";
							$strMessage = $strMessage . "<TD><CENTER><b>Garage</TD>";
							$strMessage = $strMessage . "</TR>";
							
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["3c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["5c"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD><CENTER>	Age of roof: ". $_POST["6c"] ." yrs.</TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7c"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
								
												
												
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Features</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana' cellspacing=7>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><CENTER>Bathrooms</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Deck/Porch/Patio</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Fireplaces</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' >";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'><NOBR># of Full: ". $_POST["1d"] ."&#160;</NOBR><BR><NOBR># of Half: ". $_POST["2d"] ."&#160;</NOBR></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'><NOBR>Deck Sq. Ft.: ". $_POST["5d"] ."&#160;</NOBR><BR><NOBR>Porch Sq. Ft.: ". $_POST["6d"] ."&#160;</NOBR><BR><NOBR>Screened Patio Sq. Ft.: ". $_POST["7d"] ."&#160;</NOBR></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'><NOBR># of Chimneys: ". $_POST["8d"] ."&#160;</NOBR><BR><NOBR># of Hearths: ". $_POST["9d"] ."&#160;</NOBR></TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
												
												
							
											
											
											
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Additional Features</b>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana' cellspacing=7>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><CENTER>Heating System</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Central Air</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Central Vac</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Security Alarm</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Fire Alarm</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Smoke Detector</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Swimming Pool</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' >";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1e"]. "</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2e"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["3e"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4e"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["5e"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6e"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7e"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD>Dogs?</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["8e"] ."&nbsp;&nbsp; Breed: ". $_POST["9e"] ."</TD>";
							$strMessage = $strMessage . "<td width=30></td>";
							$strMessage = $strMessage . "<TD>Trampoline?</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["10e"] ."</TD>";
							$strMessage = $strMessage . "<td width=30></td>";
							$strMessage = $strMessage . "<TD>Acreage?</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["11e"] ." &nbsp;&nbsp;How many acres: ". $_POST["12e"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</table>";
							
							
														
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Additional Comments</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana' cellspacing=7 width=500>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><i>Claims or Losses</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD>". $_POST["1f"]. "</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD><br><i>Comments</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP'>";
							$strMessage = $strMessage . "<TD>". $_POST["2f"]. "</TD>";
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
									'Subject' => "Online Quote Form Submission - Property"
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
							//mail($_POST["toEmail"],"Online Quote Form Submission - Property",$strMessage,$headers)
							


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