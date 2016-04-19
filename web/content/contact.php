<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_city.jpg";
		$pagePhotoAlt="Contact US for Quality Insurance Products";
?>
<?php include("header.php"); ?>
<div class="bodytext">
	<h1>Contact Us</h1>
    
    <div class="contactLocation">
        <h2><?PHP echo $city;?> Location</h2>
                        <table class="contactTable">
                            <?PHP if ($mainPhone) { ?>
                            <tr>
                                <td width=100><b>phone</b></td>
                                <td></td>
                                <td><?PHP echo $mainPhone?></td>
                            </tr>
                            <?PHP } ?>
							<td width=100><b>phone</b></td>
                                <td></td>
                                <td>800-256-5116</td>
							</td>
                            
                            <?PHP if ($altPhone) { ?>
                            <tr>
                                <td><b>or call</b></td>
                                <td></td>
                                <td><?PHP echo $altPhone;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($tollFree) { ?>
                            <tr>
                                <td><b>toll free</b></td>
                                <td></td>
                                <td><?PHP echo $tollFree;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mainFax) { ?>
                            <tr>
                                <td><b>fax</b></td>
                                <td></td>
                                <td><?PHP echo $mainFax?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mainEmail) { ?>
                            <tr>
                                <td><b>email</b></td>
                                <td></td>
                                <td>
                                <a href="mailto:<?PHP echo $mainEmail;?>"><?PHP echo $mainEmail;?></a>
                                </td>
                            </tr>
                           
                           <?PHP } ?>
                            
                            <?PHP if ($mainAddr) { ?>
                            <tr>
                                <td><b>address</b></td>
                                <td></td>
                                <td><?PHP echo $mainAddr;?><br/>
                                    <?PHP echo $city;?>, <?PHP echo $state;?> <?PHP echo $zip?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mailAddr) { ?>
                            <tr>
                                <td><b>mailing address</b></td>
                                <td></td>
                                <td><?PHP echo $mailAddr;?><br />
                                <?PHP echo $mailCity;?>, <?PHP echo $mailState;?> <?PHP echo $mailZip?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mainDirections) { ?>
                            <tr>
                                <td valign=top><b>Directions</b></td>
                                <td></td>
                                <td><?PHP echo $mainDirections;?>
                                </td>
                            </tr>
                            <?PHP } ?>
                        </table>
                        <div class="googleMap">
                            <?PHP echo $googlePlace;?>
                        </div>
    </div>
<?PHP if ($city2) { ?>
    <div class="contactLocation">
        <h2><?PHP echo $city2;?> Location</h2>
                        <table class="contactTable">
                            <?PHP if ($phone2) { ?>
                            <tr>
                                <td width=100><b>phone</b></td>
                                <td></td>
                                <td><?PHP echo $phone2?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($altPhone2) { ?>
                            <tr>
                                <td><b>or call</b></td>
                                <td></td>
                                <td><?PHP echo $altPhone2;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($tollFree2) { ?>
                            <tr>
                                <td><b>toll free</b></td>
                                <td></td>
                                <td><?PHP echo $tollFree2;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($fax2) { ?>
                            <tr>
                                <td><b>fax</b></td>
                                <td></td>
                                <td><?PHP echo $fax2?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($email2) { ?>
                            <tr>
                                <td><b>email</b></td>
                                <td></td>
                                <td>
                                <a href="mailto:<?PHP echo $email2;?>"><?PHP echo $email2;?></a>
                                </td>
                            </tr>
                           
                           <?PHP } ?>
                            
                            <?PHP if ($addr2) { ?>
                            <tr>
                                <td><b>address</b></td>
                                <td></td>
                                <td><?PHP echo $addr2;?><br/>
                                    <?PHP echo $city2;?>, <?PHP echo $state2;?> <?PHP echo $zip2?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mailAddr2) { ?>
                            <tr>
                                <td><b>mailing address</b></td>
                                <td></td>
                                <td><?PHP echo $mailAddr2;?><br />
                                <?PHP echo $city2;?>, <?PHP echo $state2;?> <?PHP echo $zip2?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($directions2) { ?>
                            <tr>
                                <td valign=top><b>Directions</b></td>
                                <td></td>
                                <td><?PHP echo $directions2;?>
                                </td>
                            </tr>
                            <?PHP } ?>
                        </table>
                        <div class="googleMap">
                            <?PHP echo $googlePlace2;?>
                        </div>
    </div>
<?PHP } ?>

</div>
<?PHP include ("quoteBlurb_general.php");?>
<?PHP include ("footer.php")?>