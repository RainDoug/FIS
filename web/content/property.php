<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_home.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>

<div class="bodytext">
						<h1>Property Insurance</h1>

						<p><a href="quote.php?type=home"><img src=images/quote-blurb.jpg align=right border=0 class=quoteblurb></a>
						<b><?PHP echo $businessName; ?></b> understands that your property is a very important part of your 
                        life.  In fact, the single biggest investment you may ever make is your 
						home.  Are you sure you have adequately protected your home and other properties?</p> 
                        
                        <p>We offer property insurance products to customers in <b><?PHP echo  $area;?></b>.  </p>
						<p>Call us at <span style="white-space:nowrap"><?PHP  echo $mainPhone;?></span> or start a <a href="quote.php?type=home">Free Rate Quote</a>.</p>
						<p>For more information on property insurance <a href=property-detail.php>click here</a>.</p>

                      <div class="servicesList">
                                        <h1>Property Insurance Products:</h1>
    
                                        <ul>
                                                <li>Homeowners</li>
                                                <li>Condo</li>
                                                <li>Renters</li>
                                                <li>Mobile Home</li>
                                                <li>Vacant Dwelling</li>
                                                <li>Tenant Dwelling</li>
                                                <li>Fire</li>
												<li>Flood</li>
                                                <li>Personal Umbrella</li>
                                                
                                        </ul>
                        </div>

                        
                        <div class="servicesImages">
                        	<img src="images/property-photo1.jpg" alt="<?PHP echo $altTag1?>" border="0"/>
                            <img src="images/property-photo2.jpg" alt="<?PHP echo $altTag2?>" border="0"/>
                            <img src="images/property-photo3.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
                        </div>

</div>
<?PHP include ("quoteBlurb_general.php");?>
<?php include("footer.php"); ?>