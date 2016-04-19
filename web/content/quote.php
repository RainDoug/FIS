<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_computer.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>
<div class="bodytext">

			<? 
				$masterEmail=$formEmail;
				$qType=$_GET["type"]; 
				
				if ($qType=="") 
				{
					$qType=$_POST["type"];
    
				}
			?>
            <h1>
            		<?	
						if ($qType=="auto")	echo "Get An Auto Rate Quote"; 
						if ($qType=="home")	echo "Get Homeowners Rate Quote";
						if ($qType=="life")	echo "Get Life Rate Quote";
						if ($qType=="business")	echo "Get A Business Insurance Quote";
						if ($qType=="")	echo "Get A Rate Quote";
					?>
			</h1>

								<?	if ($qType=="") { ?>
									
									<h2>TYPE OF QUOTE</h2>

									<table cellpadding=15 style="font-size:16px;">
										<tr>
											<td align=center>
												<a href="quote.php?type=auto"><img src=images/quote-auto.jpg border=0></a><br>
												<a href="quote.php?type=auto">Auto</a>
											</td>
											<td align=center>
												<a href="quote.php?type=home"><img src=images/quote-homeowners.jpg border=0></a><br>
												<a href="quote.php?type=home">Homeowners</a>
											</td>
										</tr>
									</table>
                                    
									<table cellpadding=15 style="font-size:16px;">
										<tr>
											<td align=center>
												<a href="quote.php?type=life"><img src=images/quote-life.jpg border=0></a><br>
												<a href="quote.php?type=life">Life/Health</a>
											</td>
											<td align=center>
												<a href="quote.php?type=business"><img src=images/quote-business.jpg border=0></a><br>
												<a href="quote.php?type=business">Business</a>
											</td>
										</tr>
									</table>
                                    
								<? } ?>
									
									
								<?	
								if ($qType=="auto") include("autoquote.php");
								if ($qType=="life") include("lifequote.php");
								if ($qType=="home") include("homequote.php");
								if ($qType=="business") include("businessquote.php");
								?>
</div>                                
<?PHP include ("quoteBlurb_general.php");?>								
<?php include("footer.php"); ?>