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
							
							$strMessage = $strMessage . "<b>Current Auto Insurance Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Company Name:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["1a"] ."</TD>";
							$strMessage = $strMessage . "<TD width=50></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Policy Expiration:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["2a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Premium Amount:</TD>";
							$strMessage = $strMessage . "<TD>". $_POST["3a"] ."</TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Term:</TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["4a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT' colspan=2>";
							$strMessage = $strMessage . "Are You A Homeowner? ";
							$strMessage = $strMessage . $_POST["5a"];
							$strMessage = $strMessage . "</TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD ALIGN='RIGHT'>Insurance<br>Carrier: </TD>";
							$strMessage = $strMessage . "<TD VALIGN='TOP'>". $_POST["6a"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Vehicle Information</b>";
							$strMessage = $strMessage . "<br>";
							
							$strMessage = $strMessage . "<b>Car #1</b>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD><CENTER>Year</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Make</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Model</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Body Type</TD>";
							$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Vehicle ID# (VIN)</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["3b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4b"] ."</TD>";
							$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["5b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Name of Title Holder</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Annual Milage</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Drive to school/work?</TD>";
							$strMessage = $strMessage . "<TD><CENTER># of miles<BR>(one way)</TD>";
							$strMessage = $strMessage . "<TD><CENTER>&#160; Airbags &#160;</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Car Alarm</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>". $_POST["6b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["9b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["10b"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["11b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>";	
							$strMessage = $strMessage . "Location City: ". $_POST["12b"] ." &#160; ";
							$strMessage = $strMessage . "State: ". $_POST["13b"] ." &#160; ";
							$strMessage = $strMessage . "Zip: ". $_POST["14b"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
					// driver1
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>Driver Name:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["driverName1"] ."</TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD COLSPAN='3'></TD>";
							$strMessage = $strMessage . "</TR>";
					
							$strMessage = $strMessage . "</TABLE>";
							
							
							if ($_POST["1c"]!="") 
							{
								$strMessage = $strMessage . "<br>";
								$strMessage = $strMessage . "<b>Car #2</b>";
								$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD><CENTER>Year</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Make</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Model</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Body Type</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Vehicle ID# (VIN)</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["1c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["2c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["3c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["4c"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["5c"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Name of Title Holder</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Annual Milage</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Drive to school/work?</TD>";
								$strMessage = $strMessage . "<TD><CENTER># of miles<BR>(one way)</TD>";
								$strMessage = $strMessage . "<TD><CENTER>&#160; Airbags &#160;</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Car Alarm</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>". $_POST["6c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["7c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["8c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["9c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["10c"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["11c"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>		"	;	
								$strMessage = $strMessage . "Location City: ". $_POST["12c"] ." &#160;";
								$strMessage = $strMessage . "State: ". $_POST["13c"] ." &#160; ";
								$strMessage = $strMessage . "Zip: ". $_POST["14c"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
							// driver2
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>Driver Name:</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["driverName2"] ."</TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'></TD>";
								$strMessage = $strMessage . "</TR>";								
								$strMessage = $strMessage . "</TABLE>";
							}
							
							
							
							if ($_POST["1d"]!="")
							{
								$strMessage = $strMessage . "<br>";	
								$strMessage = $strMessage . "<b>Car #3</b>";
								$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD><CENTER>Year</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Make</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Model</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Body Type</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Vehicle ID# (VIN)</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["1d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["2d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["3d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["4d"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["5d"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Name of Title Holder</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Annual Milage</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Drive to school/work?</TD>";
								$strMessage = $strMessage . "<TD><CENTER># of miles<BR>(one way)</TD>";
								$strMessage = $strMessage . "<TD><CENTER>&#160; Airbags &#160;</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Car Alarm</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>". $_POST["6d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["7d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["8d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["9d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["10d"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["11d"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>		"	;	
								$strMessage = $strMessage . "Location City: ". $_POST["12d"] ." &#160; ";
								$strMessage = $strMessage . "State: ". $_POST["13d"] ." &#160; ";
								$strMessage = $strMessage . "Zip: ". $_POST["14d"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
						// driver3
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>Driver Name:</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["driverName3"] ."</TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'></TD>";
								$strMessage = $strMessage . "</TR>";								

								$strMessage = $strMessage . "</TABLE>";

							}
							
							if ($_POST["1e"]!="")
							{
								$strMessage = $strMessage . "<br>";	
								$strMessage = $strMessage . "<b>Car #4</b>";
								$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD><CENTER>Year</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Make</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Model</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Body Type</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Vehicle ID# (VIN)</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["1e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["2e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["3e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["4e"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["5e"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Name of Title Holder</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Annual Milage</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Drive to school/work?</TD>";
								$strMessage = $strMessage . "<TD><CENTER># of miles<BR>(one way)</TD>";
								$strMessage = $strMessage . "<TD><CENTER>&#160; Airbags &#160;</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Car Alarm</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>". $_POST["6e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["7e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["8e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["9e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["10e"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["11e"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='7'><CENTER>		";		
								$strMessage = $strMessage . "Location City: ". $_POST["12e"] ." &#160; ";
								$strMessage = $strMessage . "State: ". $_POST["13e"] ." &#160; ";
								$strMessage = $strMessage . "Zip: ". $_POST["14e"] ."</TD>";
								$strMessage = $strMessage . "</TR>";
						// driver4
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>Driver Name:</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["driverName4"] ."</TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'></TD>";
								$strMessage = $strMessage . "</TR>";								
								
								$strMessage = $strMessage . "</TABLE>";
							}
							
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";							
							$strMessage = $strMessage . "<b>Liability Limit</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Bodily Injury<BR>". $_POST["1f"];
							$strMessage = $strMessage . "</TD>";
							/*$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Property Damage<BR>". $_POST["2f"];
							$strMessage = $strMessage . "</TD>";*/
							$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Single Limit<BR>". $_POST["3f"];
							$strMessage = $strMessage . "</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
				
							$strMessage = $strMessage . "<b>Other Coverages</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
 							$strMessage = $strMessage . "<td width='50%'>Personal Injury Protection/Medical Payments</td>";
							$strMessage = $strMessage . "<TD>";
							$strMessage = $strMessage . "<CENTER>". $_POST["1o"]. "</TD>";
							$strMessage = $strMessage . "</tr>";
							$strMessage = $strMessage . "<tr>";
							$strMessage = $strMessage . "<td>Uninsured/Underinsured Motorist - Bodily Injury</td>";
							$strMessage = $strMessage . "<TD>";
							$strMessage = $strMessage . "<CENTER>". $_POST["2o"] ."</TD>";
							$strMessage = $strMessage . "</tr>";
							$strMessage = $strMessage . "<tr>";
							$strMessage = $strMessage . "<td>Uninsured/Underinsured Motorist - Property Damage</td>	";
							$strMessage = $strMessage . "<TD>";
							$strMessage = $strMessage . "<CENTER>". $_POST["3o"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>	";
								
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";

									
							$strMessage = $strMessage . "<b>Deductibles and Misc.</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana' cellspacing=9>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER'><CENTER>";
							$strMessage = $strMessage . "<B>Car#</B></TD>";
							$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Comprehensive Deductible</TD>";
							$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Collision Deductible</TD>";
							$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Towing</TD>";
							$strMessage = $strMessage . "<TD><CENTER>";
							$strMessage = $strMessage . "Loss of Use</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' BGCOLOR='#dedede'><center>";
							$strMessage = $strMessage . "1</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["3g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4g"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' BGCOLOR='#dedede'><CENTER>";
							$strMessage = $strMessage . "2</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["5g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8g"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' BGCOLOR='#dedede'><CENTER>";
							$strMessage = $strMessage . "3</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["9g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["10g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["11g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["12g"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD VALIGN='CENTER' BGCOLOR='#dedede'><CENTER>";
							$strMessage = $strMessage . "4</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["13g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["14g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["15g"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["16g"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>	";
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
														
							$strMessage = $strMessage . "<b>Driver Information</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<B>Driver #1</B> ";				
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Driver's Name</TD>";
							$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Drivers License Information</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["1h"] ."</TD>";
							$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>";
							$strMessage = $strMessage . "DL#: ". $_POST["2h"];
							$strMessage = $strMessage . "&nbsp;&nbsp;State: ". $_POST["3h"];
							$strMessage = $strMessage . "&nbsp;&nbsp;Yr's Licensed: ". $_POST["4h"];
							$strMessage = $strMessage . "</TD>";
							$strMessage = $strMessage . "</TR>";
					//driverSSN
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER> Driver SSN:</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["driverSSN1"] ."</TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "<TD></TD>";
							$strMessage = $strMessage . "</TR>";
												
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD><CENTER>Relation</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Date of Birth</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Sex</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Marital Status</TD>";
							$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Courses Completed Last 3 yrs</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["5h"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6h"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7h"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8h"] ."</TD>";
							$strMessage = $strMessage . "<TD COLSPAN='2' ALIGN='RIGHT'>";
							$strMessage = $strMessage . "Drivers&#160;Ed:&#160;". $_POST["9h"] ."<BR>";
							$strMessage = $strMessage . "Defensive Driving:&#160;". $_POST["10h"];
							$strMessage = $strMessage . "<br>Drug & Alcohol Awareness:&#160;". $_POST["11h"];
							$strMessage = $strMessage . "</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>	";
							
							
							
							if ($_POST["1i"]!="")
							{
								$strMessage = $strMessage . "<br>";
								$strMessage = $strMessage . "<B>Driver #2</B> ";				
								$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Driver's Name</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Drivers License Information</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["1i"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>";
								$strMessage = $strMessage . "DL#: ". $_POST["2i"];
								$strMessage = $strMessage . "&nbsp;&nbsp;State: ". $_POST["3i"];
								$strMessage = $strMessage . "&nbsp;&nbsp;Yr's Licensed: ". $_POST["4i"];
								$strMessage = $strMessage . "</TD>";
								$strMessage = $strMessage . "</TR>";
						//driverSSN
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD ><CENTER> Driver SSN:</TD>";
								$strMessage = $strMessage . "<TD ><CENTER>". $_POST["driverSSN2"] ."</TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "</TR>";
								
								
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD><CENTER>Relation</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Date of Birth</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Sex</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Marital Status</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Courses Completed Last 3 yrs</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["5i"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["6i"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["7i"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["8i"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='2' ALIGN='RIGHT'>";
								$strMessage = $strMessage . "Drivers&#160;Ed:&#160;". $_POST["9i"] ."<BR>";
								$strMessage = $strMessage . "Defensive Driving:&#160;". $_POST["10i"];
								$strMessage = $strMessage . "<br>Drug & Alcohol Awareness:&#160;". $_POST["11i"];
								$strMessage = $strMessage . "</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "</TABLE>	";
							}
							
							
							
							
							
							if ($_POST["1j"]!="")
							{
								$strMessage = $strMessage . "<br>";
								$strMessage = $strMessage . "<B>Driver #3</B> ";
								$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Driver's Name</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Drivers License Information</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["1j"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>";
								$strMessage = $strMessage . "DL#: ". $_POST["2j"];
								$strMessage = $strMessage . "&nbsp;&nbsp;State: ". $_POST["3j"];
								$strMessage = $strMessage . "&nbsp;&nbsp;Yr's Licensed: ". $_POST["4j"];
								$strMessage = $strMessage . "</TD>";
								$strMessage = $strMessage . "</TR>";

						//driverSSN
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD ><CENTER> Driver SSN:</TD>";
								$strMessage = $strMessage . "<TD ><CENTER>". $_POST["driverSSN3"] ."</TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "</TR>";
								
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD><CENTER>Relation</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Date of Birth</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Sex</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Marital Status</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Courses Completed Last 3 yrs</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["5j"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["6j"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["7j"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["8j"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='2' ALIGN='RIGHT'>";
								$strMessage = $strMessage . "Drivers&#160;Ed:&#160;". $_POST["9j"] ."<BR>";
								$strMessage = $strMessage . "Defensive Driving:&#160;". $_POST["10j"];
								$strMessage = $strMessage . "<br>Drug & Alcohol Awareness:&#160;". $_POST["11j"];
								$strMessage = $strMessage . "</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "</TABLE>	";
							}
							
							
							if ($_POST["1k"]!="")
							{
								$strMessage = $strMessage . "<br>";
								$strMessage = $strMessage . "<B>Driver #4</B> ";				
								$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Driver's Name</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>Drivers License Information</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>". $_POST["1k"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='3'><CENTER>";
								$strMessage = $strMessage . "DL#: ". $_POST["2k"];
								$strMessage = $strMessage . "&nbsp;&nbsp;State: ". $_POST["3k"];
								$strMessage = $strMessage . "&nbsp;&nbsp;Yr's Licensed: ". $_POST["4k"];
								$strMessage = $strMessage . "</TD>";
								$strMessage = $strMessage . "</TR>";
						//driverSSN
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD ><CENTER> Driver SSN:</TD>";
								$strMessage = $strMessage . "<TD ><CENTER>". $_POST["driverSSN4"] ."</TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "<TD></TD>";
								$strMessage = $strMessage . "</TR>";
								
								
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
								$strMessage = $strMessage . "<TD><CENTER>Relation</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Date of Birth</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Sex</TD>";
								$strMessage = $strMessage . "<TD><CENTER>Marital Status</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='2'><CENTER>Courses Completed Last 3 yrs</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["5k"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["6k"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["7k"] ."</TD>";
								$strMessage = $strMessage . "<TD><CENTER>". $_POST["8k"] ."</TD>";
								$strMessage = $strMessage . "<TD COLSPAN='2' ALIGN='RIGHT'>";
								$strMessage = $strMessage . "Drivers&#160;Ed:&#160;". $_POST["9k"] ."<BR>";
								$strMessage = $strMessage . "Defensive Driving:&#160;". $_POST["10k"];
								$strMessage = $strMessage . "<br>Drug & Alcohol Awareness:&#160;". $_POST["11k"];
								$strMessage = $strMessage . "</TD>";
								$strMessage = $strMessage . "</TR>";
								$strMessage = $strMessage . "</TABLE>	";
							}
							
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";
							
														
							$strMessage = $strMessage . "<b>Driver History</b>";
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD><CENTER>Driver</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Date</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Type of Conviction</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Speed Over Limit</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["3l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["5l"] ." mph</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["10l"] ." mph</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["11l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["12l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["13l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["15l"] ." mph</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["16l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["17l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["18l"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["20l"] ." mph</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
													
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";							
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD><CENTER>Driver</TD>";
							$strMessage = $strMessage . "<TD><CENTER>License Suspended or Revoked</TD>";
							$strMessage = $strMessage . "<TD><CENTER>DUI Conviction For:</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1m"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2m"] ."&#160; ". $_POST["3m"] ."&#160; </TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["4m"] ."&#160; ". $_POST["5m"] ."&#160; </TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6m"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7m"] ."&#160; ". $_POST["8m"] ."&#160; </TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["9m"] ."&#160; ". $_POST["10m"] ."&#160; </TD>";
							$strMessage = $strMessage . "</TR>";

							$strMessage = $strMessage . "	</TABLE>";
					
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#dedede'>";
							$strMessage = $strMessage . "<TD><CENTER>Driver</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Date</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Description</TD>";
							$strMessage = $strMessage . "<TD><CENTER>Cost</TD>";
							
							$strMessage = $strMessage . "<TD><CENTER>Injuries</TD>";
							$strMessage = $strMessage . "<TD><CENTER>At Fault</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["2n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["3n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["4n"] ."</TD>";
							
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["6n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["7n"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["8n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["9n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["10n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["11n"] ."</TD>";
							
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["13n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["14n"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["15n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["16n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["17n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["18n"] ."</TD>";
							
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["20n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["21n"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["22n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["23n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["24n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>$". $_POST["25n"] ."</TD>";
							
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["27n"] ."</TD>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["28n"] ."</TD>";
							$strMessage = $strMessage . "</TR>";
							$strMessage = $strMessage . "</TABLE>";
							
							
							
							$strMessage = $strMessage . "<br>";
							$strMessage = $strMessage . "<br>";	
							
							$strMessage = $strMessage . "<b>Additional Comments</b>";
							$strMessage = $strMessage . "<br>";
										
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";
							$strMessage = $strMessage . "<TR VALIGN='TOP' BGCOLOR='#f6f6f6'>";
							$strMessage = $strMessage . "<TD><CENTER>". $_POST["1p"] ."</TD>";
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
									'Subject' => "Online Quote Form Submission - Vehicle"
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
							//mail($_POST["toEmail"],"Online Quote Form Submission - Vehicle",$strMessage,$headers)
							

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