<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_business.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>

<div class="bodytext">

						<h1>Business Insurance</h1>
						
						<p><a href="quote.php"><img src=images/quote-blurb.jpg align=right border=0 style="margin-left:30px"></a>
						Whether you've just started a home-based business or your business is established and growing,  <b><?PHP echo $businessName; ?></b> can help you protect your livelihood 
						against the unexpected.  We offer tailored programs for all types of businesses and professions in <b><?PHP echo  $area;?></b>. </p>
                         
						<p>Call us at <span style="white-space:nowrap"><?PHP echo  $mainPhone;?></span>  or start a <a href="quote.php">Free Rate Quote</a>. 
                        We can review your insurance requirements and create a portfolio to protect 
						your assets and minimize your risk of loss.</p>
						
						<p>For more information on business insurance <a href=business-detail.php>click here</a>.</p>
                      <div class="servicesList">
                                        <h1>Business Insurance Products:</h1>
    
                                        <ul>
                                            <li>Commercial Property</li>
                                            <li>General Liability</li>
                                            <li>Small Bus. Package</li>
                                            <!--<li>Workers Compensation</li>
                                            <li>Farm and Ranch</li>
                                            <li>Bonds</li>
                                            <li>Inland Marine</li> -->
                                            <li>Commercial Auto</li>
                                            <li>Commercial Umbrella</li>
                                            <!--<li>Professional Liability</li>-->
                                        </ul>
  </div>

                        
                        <div class="servicesImages">
                        	<img src="images/business-photo1.jpg" alt="<?PHP echo $altTag1?>" border="0"/>
                            <img src="images/business-photo2.jpg" alt="<?PHP echo $altTag2?>" border="0"/>
                            <img src="images/business-photo3.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
                        </div>

                          
	</div>					
    <?PHP include ("quoteBlurb_general.php");?>
<?php include("footer.php"); ?>