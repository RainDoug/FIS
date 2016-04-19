<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?PHP include('data.php'); ?>

<head>
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />

<!--[if IE]>
<style>
.contentContainer .bodytext {
	background-image:none;
    background-color:#FFF;
}
</style>
<![endif]-->

<script>
function clearText(field){
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31755309-58', 'auto');
  ga('send', 'pageview');

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="<?PHP include('meta-description.php'); ?>" />
<meta name="keywords" content="<?PHP include('meta.php'); ?>" />

<?PHP include('title.php'); ?>

<LINK REL=StyleSheet href="main.css" Type="text/css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<center>
<div class="mainContainer">
	<div class="topRow">
    	
		<div class="snContainer">
        	<span class="snConnect">Connect With Us:</span>
			<?PHP $smCounter=0;
						if ($fbAddress) { ++$smCounter ?> <a href="<?PHP echo $fbAddress;?>"><img src="images/fb.png" border="0" ></a> <? } ?>
			<?PHP		if ($twAddress) { ++$smCounter ?> <a href="<?PHP echo $twAddress;?>"><img src="images/tw.png" border="0" ></a> <? } ?>
			<?PHP		if ($blAddress) { ++$smCounter ?> <a href="<?PHP echo $blAddress;?>"><img src="images/bl.png" border="0" ></a> <? } ?>
			<?PHP		if ($liAddress) { ++$smCounter ?> <a href="<?PHP echo $liAddress;?>"><img src="images/li.png" border="0" ></a> <? } ?>
            <?PHP		if ($smCounter <= 1) { ?> <a href="mailto:<?PHP echo $mainEmail;?>"><img src="images/mail.png" border="0" ></a><? } ?> 
	  </div>
        
		<div class="topRight">
			<a href="about.php">About Us</a> | 
			<a href="contact.php">Contact Us</a> | 
			<!--<a href="locations.php">Locations</a> | -->
			<b><?PHP echo $mainPhone; ?></b>
		</div>
        
	</div>
    <a href="index.php">
	<div class="headerDiv">
		
	</div></a>
    
    

	<div class="navBar">
    	<ul>
        	<li><a href="index.php">Home</a></li>
            <li><a href="services.php">Insurance Services</a></li>
            <li><a href="quote.php">Get a Quote</a></li>
            <!--<li><a href="carriers.php">Our Carriers</a></li>-->
            <li><a href="about.php">About Us</a></li>
            <li><a href="claims.php">Claims</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="coverage.php">Coverage Area</a></li>
            <li><a href="carriers.php">Carriers</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            
         </ul>
	</div>
	
	<div class="mainPhoto">
    		<?PHP if ($pagePhoto!=""){ ?>  
            	<img src="<?PHP echo $pagePhoto?>" alt="<?PHP echo $pagePhotoAlt; ?>" />
			<? } else { ?>
                        <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/
                        swflash.cab#version=7,0,0,0"
                        WIDTH="900" HEIGHT="215" id="slidesimple" ALIGN="">
                            <PARAM NAME=movie VALUE="slidesimple.swf">
                            <PARAM NAME=loop VALUE=true>
                            <PARAM NAME=menu VALUE=false>
                            <PARAM NAME=quality VALUE=high>
                            <PARAM NAME=bgcolor VALUE=#ffffff>
                            <EMBED src="slidesimple.swf"
                            loop="false"
                            menu="false"
                            quality="high"
                            bgcolor="#FFFFFF"
                            WIDTH="900"
                            HEIGHT="215"
                            TYPE="application/x-shockwave-flash"
                            PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                            </EMBED>
                        </OBJECT>     
    			<?PHP } ?>    
    </div>
	
	<div class="contentContainer">