<LINK REL=StyleSheet href="main.css" Type="text/css">
</head>

<body>
<center>
<div class="mainContainer">
	<div class="topRow">
		<div class="snContainer">
			<?PHP $smCounter=0;
						if ($fbAddress) { ++$smCounter ?> <a href="<?PHP echo $fbAddress;?>"><img src="images/fb.png" border="0" ></a> <? } ?>
			<?PHP		if ($twAddress) { ++$smCounter ?> <a href="<?PHP echo $twAddress;?>"><img src="images/tw.png" border="0" ></a> <? } ?>
			<?PHP		if ($blAddress) { ++$smCounter ?> <a href="<?PHP echo $blAddress;?>"><img src="images/bl.png" border="0" ></a> <? } ?>
			<?PHP		if ($liAddress) { ++$smCounter ?> <a href="<?PHP echo $liAddress;?>"><img src="images/li.png" border="0" ></a> <? } ?>
            <?PHP		if ($smCounter <= 1) { ?> <a href="mailto:<?PHP echo $mainEmail;?>"><img src="images/mail.png" border="0" ></a><? } ?> 
		</div>
        
		<div class="topRight">
			<a href=about.php class="topLink">About Us</a> | 
			<a href=contact.php class="topLink">Contact Us</a> | 
			<a href=locations.php class="topLink">Locations</a> | 
			<b><?PHP echo $mainPhone; ?></b>
		</div>
        
	</div>
	<div class="headerDiv">
		<a href="/"><img src="images/logo.png" border=0 class="logo" alt="<?PHP echo $headerAlt; ?>"></a>
	</div>

	<div class="navBar">
		<a href="services.php" alt="<?PHP $areaAlt?>Insurance Services</a>
		<a href="quote.php">Get a Rate Quote</a>
		<a href="carriers.php">Our Carriers</a>
		<a href="claims.php">Claims</a>
		<a href="resources.php">Resources</a>
		<a href="coverage.php">Coverage Area</a>
		<a href="contact.php">Contact Us</a>
	</div>
	
	<div class="mainPhoto"><img src="images/main.jpg"></div>
	
	<div class="contentContainer">