<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_Pen.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>
<div class="bodytext">
	<h1>Insurance Resources</h1>
						<table>
							<tr>
								<td align=center>
									<a href="glossary.php"><img src="images/resource-photo2.jpg" border=0></a>
								</td>
								<td width=3></td>
								<td align=center>
									<a href="links.php"><img src="images/resource-photo1.jpg" border=0></a>
								</td>
							</tr>
							<tr>
								<td align=center>
									<a href="glossary.php" class="resourcestable">Glossary of Terms</a>
								</td>
								<td width=30></td>
								<td align=center>
									<a href="links.php" class="resourcestable">Useful Links</a>
								</td>
							</tr>
                            <tr>
								<td width=3 align=center>
									<a href="calculators.php"><img src="images/resource-photoCalc.jpg" border=0></a>
								</td>
                            </tr>                            
                            <tr>
								<td align=center>
									<a href="calculators.php" class="resourcestable">Calculators</a>
								</td>
							</tr>                            
						</table>
</div>
<?PHP include ("quoteBlurb_general.php");?>
<?PHP include ("footer.php")?>