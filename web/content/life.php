<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_city.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>

<div class="bodytext">
						<h1>Life Insurance and Personal Financial Products</h1>
						
						<p><a href="quote.php?type=life"><img src=images/quote-blurb.jpg align=right border=0 style="margin-left:30px"></a>
						Experienced life insurance agents at <b><?PHP echo $businessName; ?></b> can assist you by designing a 
                        policy that best fits your personal or business needs.  We want to 
						help you protect those who are most important to you with the right life 
                        insurance.  We offer a broad range of optional 
						coverage in <b><?PHP echo  $area;?></b>.</p>
                        
                        <p>We also offer a broad range of financial products to help you grow and plan for your future.</p>
                        
						<p>Call us at <span style="white-space:nowrap"><?PHP echo  $mainPhone;?></span> or start a <a href="quote.php?type=life">Free Rate Quote</a>.</p>
						<p>For more information on life insurance <a href=life-detail.php>click here</a>.</p>
						
						
                      <div class="servicesList">
                                        <h1>Life Insurance and Personal Financial Products:</h1>
    
                                        <ul>
                                            <li>Whole Life</li>
                                            <li>Universal Life</li>
                                            <!--<li>Variable Life</li>-->
                                            <li>Term Life</li>
                                            <li>Individual Health</li>
                                            <li>Group Health</li>
                                            <li>Disability</li>
											<li>Long Term Care</li>
                                            <li>Annuities</li>
											<!--<li>Financial Products</li>-->
                                        </ul>
                        </div>

                        <div class="servicesImages">
                        	<img src="images/life-photo1.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
                            <img src="images/life-photo2.jpg" alt="<?PHP echo $altTag4?>" border="0"/>
                            <img src="images/life-photo3.jpg" alt="<?PHP echo $altTag5?>" border="0"/>
                        </div>
</div>        
<?PHP include ("quoteBlurb_general.php");?>                
<?php include("footer.php"); ?>