<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_vehicle.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>

<div class="bodytext">
						<h1>Auto Insurance</h1>
						
						<p><a href="quote.php"><img src=images/quote-blurb.jpg align=right border=0 class=quoteblurb></a>
						<b><?PHP echo $businessName; ?></b> offers Auto Insurance Coverage in <b><?PHP  echo  $area;?></b>.  
                        We will be happy to review your coverage to make sure you are getting the most amount 
						of insurance for the least amount of money.  We can offer you a wide variety of coverage options! </p>
                        <p>Call us at <span style="white-space:nowrap"><?PHP echo $mainPhone;?></span>  or start a <a href="quote.php">Free Rate Quote</a>.</p>

						<p>For more information on Auto Insurance <a href=vehicle-detail.php>click here</a>.</p>

                      <div class="servicesList">
                                        <h1>Vehicle Insurance Products:</h1>
    
                                        <ul>
                                            <li>Standard Auto</li>
                                            <!--<li>Non-Standard Auto</li>-->
                                            <li>Classic Cars</li>
                                            <li>RV</li>
                                            <li>Motorcycle</li>
                                            <li>Watercraft</li>
                                            <!--<li>Travel Trailer</li>-->
                                        </ul>
                        </div>

                        
                        <div class="servicesImages">
                        	<img src="images/vehicle-photo1.jpg" alt="<?PHP echo $altTag1?>" border="0"/>
                            <img src="images/vehicle-photo2.jpg" alt="<?PHP echo $altTag2?>" border="0"/>
                            <img src="images/vehicle-photo3.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
                        </div>
	</div>								
<?PHP include ("quoteBlurb_general.php");?>    	
<?php include("footer.php"); ?>