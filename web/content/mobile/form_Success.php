<?php include("header.php"); ?>
	<div data-role="page">
	  <header>
	    <a href="index.php" class="back-button">Back</a>
	    <h1>Form Success</h1><span class="small_logo"></span>
	  </header>
	  <div class="content">
	    <h2><? echo $slogan; ?></h2>
		<p>
			Thank you for your quote request! We will process your information and contact you shortly.
		</p>
		<p>
			If you have any questions or concerns, please feel free to give us a call at <a href="tel:<? echo $mainPhone; ?>"><? echo $mainPhone; ?></a> or send us an email at <a href="mailto:<? echo $mainEmail; ?>"><? echo $mainEmail; ?></a>.
		</p>
	   </div>
	   <?php include('footer.php'); ?>
	</div>
  </body>
</html>