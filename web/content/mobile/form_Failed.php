<?php include("header.php"); ?>
	<div data-role="page">
	  <header>
	    <a href="#" class="back-button" onclick="history.go(-1);">Back</a>
	    <h1>Form Failed</h1><span class="small_logo"></span>
	  </header>
	  <div class="content">
	    <h2><? echo $slogan; ?></h2>
	    <p>
			The reCAPTCHA wasn't entered correctly. Go back and try it again.
		</p>
	   </div>
	   <?php include('footer.php'); ?>
	</div>
  </body>
</html>