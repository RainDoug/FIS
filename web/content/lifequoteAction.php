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
							
							/* Contact Method */
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'></TD>";
							$strMessage = $strMessage . "<TD>". $_POST["4"] ." ". $_POST["5"] ."</TD>" ;
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Preferred Contact Method:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>";
							$strMessage = $strMessage .  $_POST["contactMethod"] ."</TD>";
							$strMessage = $strMessage . "</TR>"	;							
							$strMessage = $strMessage . "</TABLE>";
							/* ***  */
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							
							$strMessage = $strMessage . "<b>Personal Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>&#160;</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Self</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Spouse</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Child #1</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Child #2</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Child #3</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Name:</TD>";
							$strMessage = $strMessage . "<TD><CENTER><B>Self</B></TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["3a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Date of<BR>Birth:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["5a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["9a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Sex:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["10a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["11a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["12a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["13a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["14a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Marital Status:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["15a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["16a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["17a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["18a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["19a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Occupation:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["20a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["21a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["22a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["23a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["24a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Height:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["25a"] ."ft. &#160; ". $_POST["26a"] ."in.</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["27a"] ."ft. &#160; ". $_POST["28a"] ."in.</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["29a"] ."ft. &#160; ". $_POST["30a"] ."in.</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["31a"] ."ft. &#160; ". $_POST["32a"] ."in.</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["33a"] ."ft. &#160; ". $_POST["34a"] ."in.</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Weight:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["35a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["36a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["37a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["38a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["39a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' ALIGN='RIGHT'>Have you (they) had<br> any of the following <br>health conditions:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["40a"] ."<BR>". $_POST["41a"] ."<BR>". $_POST["42a"] ."<BR>". $_POST["43a"] ."<BR></TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["44a"] ."<BR>". $_POST["45a"] ."<BR>". $_POST["46a"] ."<BR>". $_POST["47a"] ."<BR></TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["48a"] ."<BR>". $_POST["49a"] ."<BR>". $_POST["50a"] ."<BR>". $_POST["51a"] ."<BR></TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["52a"] ."<BR>". $_POST["53a"] ."<BR>". $_POST["54a"] ."<BR>". $_POST["55a"] ."<BR></TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["56a"] ."<BR>". $_POST["57a"] ."<BR>". $_POST["58a"] ."<BR>". $_POST["59a"] ."<BR></TD>";
							$strMessage = $strMessage . "</TR>";
							
							
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD COLSPAN='6' BGCOLOR='#dedede'><CENTER><I>Please enter information below about TOBACCO usage for all to be covered.</I></TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' ALIGN='RIGHT'>Have you (they)<br> ever used tobacco or <br>nicotine products?:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["60a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["61a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["62a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["63a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["64a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' ALIGN='RIGHT'>Type of <br>Tobacco used?:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["65a"] ."<BR>". $_POST["66a"] ."<BR>". $_POST["67a"] ."<BR>". $_POST["68a"] ."<BR>". $_POST["69a"] ."</TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["70a"] ."<BR>". $_POST["71a"] ."<BR>". $_POST["72a"] ."<BR>". $_POST["73a"] ."<BR>". $_POST["74a"] ."</TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["75a"] ."<BR>". $_POST["76a"] ."<BR>". $_POST["77a"] ."<BR>". $_POST["78a"] ."<BR>". $_POST["79a"] ."</TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["80a"] ."<BR>". $_POST["81a"] ."<BR>". $_POST["82a"] ."<BR>". $_POST["83a"] ."<BR>". $_POST["84a"] ."</TD>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'>". $_POST["85a"] ."<BR>". $_POST["86a"] ."<BR>". $_POST["87a"] ."<BR>". $_POST["88a"] ."<BR>". $_POST["89a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' VALIGN='TOP' ALIGN='RIGHT'>Packs per day:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["90a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["91a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["92a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["93a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["94a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' VALIGN='TOP' ALIGN='RIGHT'># of yrs smoked:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["95a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["96a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["97a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["98a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["99a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD COLSPAN='6' BGCOLOR='#dedede'><CENTER><I>**Quit -- Please enter information if any to be insured are FORMER TOBACCO users.</I></TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' VALIGN='TOP' ALIGN='RIGHT'>**Quit Month/Year:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["100a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["101a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["102a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["103a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["104a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' VALIGN='TOP' ALIGN='RIGHT'>Packs per day:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["105a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["106a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["107a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["108a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["109a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede' VALIGN='TOP' ALIGN='RIGHT'>Years smoked?:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["110a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["111a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["112a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["113a"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["114a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							
											
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							
							$strMessage = $strMessage . "<b>Individual Histories</b></I>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' ALIGN='RIGHT' ROWSPAN='2' BGCOLOR='#dedede'>Self</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP' BGCOLOR='#dedede'><CENTER>Ongoing health conditions? ". $_POST["1b"] .":</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR><TD height=1 bgcolor=#666666 colspan=2></td></tr>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' ALIGN='RIGHT' ROWSPAN='2' BGCOLOR='#dedede'>Spouse</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP' BGCOLOR='#dedede'><CENTER>Ongoing health conditions? ". $_POST["3b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR><TD height=1 bgcolor=#666666 colspan=2></td></tr>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' ALIGN='RIGHT' ROWSPAN='2' BGCOLOR='#dedede'>Child #1</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP' BGCOLOR='#dedede'><CENTER>Ongoing health conditions? ". $_POST["5b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR><TD height=1 bgcolor=#666666 colspan=2></td></tr>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' ALIGN='RIGHT' ROWSPAN='2' BGCOLOR='#dedede'>Child #2</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP' BGCOLOR='#dedede'><CENTER>Ongoing health conditions? ". $_POST["7b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR><TD height=1 bgcolor=#666666 colspan=2></td></tr>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' ALIGN='RIGHT' ROWSPAN='2' BGCOLOR='#dedede'>Child #3</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP' BGCOLOR='#dedede'><CENTER>Ongoing health conditions? ". $_POST["9b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["10b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							
							$strMessage = $strMessage . "<b>Life Coverages</b>";
							$strMessage = $strMessage . "<br>";

							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'>&#160;</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Self</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Spouse</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Child #1</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Child #2</TD>";
							$strMessage = $strMessage . "<TD BGCOLOR='#dedede'><CENTER>Child #3</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Amount of<BR>Coverage:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["1c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["2c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["3c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["4c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["5c"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Type of<BR>Coverage:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["6c"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["7c"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["8c"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["9c"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["10c"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							//termSelf
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Term<BR>Length:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["termSelf"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["termSpouse"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["termC1"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["termC2"] ."</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["termC3"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'><TD ALIGN='RIGHT' BGCOLOR='#dedede'>Disability<BR>Income:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["11c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["12c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>N/A</TD>";
							$strMessage = $strMessage . "<TD><CENTER>N/A</TD>";
							$strMessage = $strMessage . "<TD><CENTER>N/A</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' BGCOLOR='#dedede'>Long Term<BR>Care:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["13c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["14c"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>N/A</TD>";
							$strMessage = $strMessage . "<TD><CENTER>N/A</TD>";
							$strMessage = $strMessage . "<TD><CENTER>N/A</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							$strMessage = $strMessage . "<b>Additional Comments</b>";
							$strMessage = $strMessage . "<br>";
										
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1d"] ."</TD>";
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
									'Subject' => "Online Quote Form Submission - Life/Health"
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
							
							//mail($_POST["toEmail"],"Online Quote Form Submission - Life/Health",$strMessage,$headers)

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