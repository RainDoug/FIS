<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_wind.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>

<div class="bodytext">
	<h1>Coverage Area</h1>

	<p>Located in Jasper, Texas while offering Business Insurance opportunities in Louisiana, Oklahoma and New Mexico.</p>
    
    <!--We specifically serve the cities of <?php echo $cities;?> and counties of <?php echo $counties;?>.--></p>
      
	<!--<p><img src="images/coveragemap.jpg" border="0" /> </p>	-->
    
	<?PHP include('servicesBar.php');?>
</div>

<?PHP include ("quoteBlurb_general.php");?>
<?PHP include ("footer.php")?>