<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		//$pagePhoto="images/shortHead_Pen.jpg";
		//$pagePhotoAlt="";
?>
<?php include("header.php"); ?>

<div class="bodytext">
    <img src="images/pray-for.jpg" width="580" height="200" alt="pray for us picture" />
	<h1 style="clear:both"><? echo $businessName;?></h1>
	<a href="quote.php"><img src="images/QuotePill.png" border="0" alt="<?PHP echo $altTag4?>" align="left" /></a>
    <p style="margin-bottom:25px;">Our Agents are standing by to help!  Ask for a free quote today!</p>

    <?PHP include('servicesBar.php');?>
    
    
    
	<h2>We Are A Full Service Agency.</h2><!-- need picture of their office or something they would like here-->
    <img src="images/homePhoto-2.jpg" border="0" alt="<?PHP echo $altTag3?>" class="pagePic" />
	<p>At <?PHP echo $businessName; ?>, our primary concern is serving our customers. Our dedicated 
professionals work with you to develop a cost effective insurance plan.  We are able to offer you a 
choice of insurance plans and programs through our access to 
several of the top insurance companies.</p>  
<p><?PHP echo $businessName; ?> is a full service 
agency that is able to continue to provide expanded coverage as your 
insurance needs change.   We 
offer a full range of coverage-home, renters, auto, business, life, 
health and more.  </p>
    
    <p>We offer commercial and personal insurance for a broad range of needs.  Our Agents, Producers, and Customer Service Representatives are licensed professionals. With many Years of combined experience, our staff is dedicated to providing our clients with coverage at the best rates our carriers offer.</p>
	
    <h2><?PHP echo $siteDescription;?></h2>
    <p>Insurance is an important investment for the safety of your family, 
car, home, and business.  We strive to provide the best 
combination of price, coverage and service to fit your specific 
budget.</p>
     
</div>

<?PHP include ("quoteBlurb_general.php");?>
<?PHP include ("footer.php")?>