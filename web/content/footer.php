
</div>	<!--FROM HEADER contentContainer-->

	<div id="footerContainer">
     	<div id="bottomNav">
        	<ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="quote.php">Free Rate Quote</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="carriers.php">Carriers</a></li>
                <li><a href="claims.php">Claims</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="coverage.php">Coverage Area</a></li> 
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>		
    
        <div id="legal">
            <ul>
                <li>&copy; <?PHP echo $copyYear?><br /><?PHP echo $businessName; ?></li>
                <li><?PHP echo $mainAddr;?> <br /> <?PHP echo $city;?>, <?PHP echo $state;?> <?PHP echo $zip?></li>
				<li>800-256-5116</li>
                <li><a href=privacy.php class=bottom>Privacy Policy</a></li>
                <li><a href=terms.php class=bottom>Terms and Conditions</a></li>
            </ul>
        </div>	

        <div id="bottomSocialMedia">
            <p>Connect With Us:</p>
                <ul>    		
                <?PHP $smCounter=0;
                            if ($fbAddress) { ++$smCounter ?> <li> <a href="<?PHP echo $fbAddress;?>"><img src="images/fb.png" border="0" ></a></li> <?php } ?>
                <?PHP		if ($twAddress) { ++$smCounter ?> <li><a href="<?PHP echo $twAddress;?>"><img src="images/tw.png" border="0" ></a></li> <?php } ?>
                <?PHP		if ($blAddress) { ++$smCounter ?> <li><a href="<?PHP echo $blAddress;?>"><img src="images/bl.png" border="0" ></a></li> <?php } ?>
                <?PHP		if ($liAddress) { ++$smCounter ?> <li><a href="<?PHP echo $liAddress;?>"><img src="images/li.png" border="0" ></a></li> <?php } ?>
                <?PHP		if ($smCounter <= 1) { ?> <li><a href="mailto:<?PHP echo $mainEmail;?>"><img src="images/mail.png" border="0" ></a></li> <?php } ?>
                </ul>
                
             <p class="power"><a href="http://rainman.com"  target="_blank">
                <img src="http://rainman.com/logos/RainmanChrome50xWide.png" alt="rainman web development" border="0" /><br />
                powered by rainman.com</a></p>
        
        </div>       
	</div> <!--footer-->
        <div id="footerDesc">
        	<?PHP echo $footerDescription?>
        </div>	    
</div> <!--FROM HEADER mainContainer-->
</body>
</html>