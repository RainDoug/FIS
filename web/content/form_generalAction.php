<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_computer.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>
<?php include("formEmailer.php"); ?>

<div class="bodytext">

     <div id="servicesBar">
        <a href="vehicle.php"><img src="images/icon-auto.png" alt="<?PHP echo $altTagAuto;?>" border="0" /></a>
        <a href="business.php"><img src="images/icon-business.png" alt="<?PHP echo $altTagBusiness;?>" border="0" /></a>
        <!--<a href="life.php"><img src="images/icon-health.png" alt="<?PHP echo $altTagLife;?>" border="0" /></a>-->
        <a href="property.php"><img src="images/icon-property.png" alt="<?PHP echo $altTagProperty;?>" border="0" /> </a>
    </div>
	
    <h1>Form Submitted</h1>
    
	<p>Thank you for your <?PHP echo $_POST["requestType"]; ?>.<br />
    We will process your information and contact you shortly.<br />
    If you have any questions, please <a href=contact.php>contact us</a>.</p>
</div>

<?php include("footer.php"); ?>