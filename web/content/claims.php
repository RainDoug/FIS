<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="";
		$pagePhoto="images/shortHead_Pen.jpg";
		$pagePhotoAlt="Best insurance in all of " . $area;
?>
<?php include("header.php"); ?>
<div class="bodytext">
	<h1>How To Start a Claim</h1>
									
									
									<p>At <? echo $businessName;?>, we know that the manner in which we handle your claim is one of the most important aspects of our relationship with you. We will assist you in any way we can with each step of the claims process.</p>
                                    
									<p>
                                    To report a claim during business hours, please call our agency at <?PHP echo $mainPhone;?> as soon as possible. We will direct you concerning the next steps you need to take in the claims process.
                                    </p>
                                    
                                    <p>Outside of business hours, please contact your insurance carrier directly, then contact us as soon as possible.</p>
									
									<p>The following information may be helpful to you immediately following an accident.</p>									
									
									<h1>Auto/Boat/RV:</h1>
                                    
									<h2>Windshield:</h2>
									<ul>
										<li>Call our office to report the damage. 
										<li>We will verify your coverage/deductible and then advise you on how to get it repaired.
									</ul>
									
									<h2>One Vehicle Accident:</i></h2>
									<ul>
										<li>Stop your vehicle and move it to a safe place.</li>
										<li>Determine if you or any passengers are injured.  Call for medical assistance if needed.</li>
									<li>Call our office as soon as possible to report the accident.  We will verify your coverage/deductible and then advise you how to proceed.</li>
									</ul>
									<h2>Two (or more) Vehicle Accident:</h2>
									<ul>
										<li>Stop your vehicle and move it to a safe place, if possible.
										<li>Remain at the scene of the accident, and determine if you or any passengers are injured.  Call for medical assistance if needed.
										<li>Exchange the following information with the other driver(s):  names, addresses, telephone numbers, type and ownership of vehicles, insurance information, a description of damages.
										<li>Get the names, addresses and telephone numbers of any witnesses.
										<li>Call the police.  Cooperate with the police and answer all of their questions.
										<li>Do not admit fault to anyone.  You do not have all of the facts about the accident yet.
										<li>If your vehicle must be towed, ask that it be taken to a storage lot of your choice.
										<li>Call our office and report the accident as soon as possible.  Our staff will verify your coverage/deductible and set up your claim or advise you how to proceed.
									</ul>
									<h1>Property (Fire/Water/Wind/Theft/Vandalism/Etc):</h1>
									<ul>
										<li>Make whatever repairs are necessary to ensure no further damage can occur.  For instance, turn off the water main for burst pipes, place a tarp on the roof for leaks, etc. (Keep a record of repair costs and retain receipts for these immediate and necessary expenditures.)
										<li>If the loss involves theft or vandalism, call the police immediately.
										<li>Call our office to report the claim as soon as possible.  We will advise you how to proceed.
									</ul>

<?PHP /*
                                    
                                    <h1>24 Hour Claim Numbers</h1>
                                    
                                    <p><strong>ALLSTATE</strong> 800-626-4527 <em>AUTO GLASS CLAIMS</em></p>
                                    <p><strong>ALLSTATE</strong> 800-ALLSTATE <em>PERSONAL</em></p>
                                    <p><strong>ALLSTATE</strong> 800-386-6126 <em>COMMERCIAL AUTO</em></p>
                                    <p><strong>ALLSTATE</strong> 800-359-1000 <em>COMMERCIAL PROPERTY</em></p>
                                    <p><strong>ALLSTATE</strong> <em>Visit <a href="http://www.allstate.com/">WWW.ALLSTATE.COM</a> TO SUBMIT CLAIMS ONLINE</em></p>
                                    <p><strong>ATLAS GENERAL</strong> 972-310-7016</p>
                                    <p><strong>AM COMP</strong> 800-749-1898</p>
                                    <p><strong>AMERICA FIRST</strong> 877-263-7890</p>
                                    <p><strong>AMERICAN MERCURY</strong> 800-503-3724 <em>AUTO GLASS CLAIMS - LYNX</em></p>
                                    <p><strong>ATLAS GENERAL AGENCY</strong> 972-310-7016</p>
                                    <p><strong>BEACON INSURANCE</strong> 800-925-7581</p>
                                    <p><strong>CENTRAL INSURANCE</strong> 888-263-2924</p>
                                    <p><strong>CENTRAL INSURANCE</strong> 866-410-4753 <em>GUARDIAN GLASS NETWORK</em></p>
                                    <p><strong>CENTRAL INSURANCE</strong> 800-988-9808 <em>SAFELITE GLASS NETWORK</em></p>
                                    <p><strong>CNA</strong> 877-724-2669 <em>COMMERCIAL</em></p>
                                    <p><strong>CNA</strong> 800-588-7400 <em>PERSONAL</em></p>
                                    <p><strong>DAIRYLAND</strong> 800-833-2244</p>
                                    <p><strong>DEEP SOUTH</strong> 888-80CLAIM</p>
                                    <p><strong>FOREMOST</strong> 800-527-3905</p>
                                    <p><strong>HARTFORD COMMERCIAL</strong> 800-327-3636</p>
                                    <p><strong>HARTFORD PERSONAL</strong> 800-243-5860</p>
                                    <p><strong>HARTFORD STEAM BOILER</strong> 888-472-5677</p>
                                    <p><strong>HOCHHEIM PRAIRIE </strong> 888-473-6256</p>
                                    <p><strong>HOCHHEIM PRAIRIE</strong> 800-SERVPRO <em>EMERGENCY WATER OR FIRE</em></p>
                                    <p><strong>INSURORS INDEMNITY</strong> 254-759-3723</p>
                                    <p><strong>KEMPER</strong> 877-252-7878</p>
                                    <p><strong>NATIONAL LLOYDS</strong> 800-749-6419</p>
                                    <p><strong>PROGRESSIVE</strong> 888-502-8330</p>
                                    <p><strong>REPUBLIC</strong> 800-451-0286</p>
                                    <p><strong>SAFECO</strong> 800-332-3226</p>
                                    <p><strong>SERVICE LLOYDS</strong> 800-299-6977</p>
                                    <p><strong>STATE AUTO</strong> 800-925-7581</p>
                                    <p><strong>TEXAS MUTUAL</strong> 800-892-5246 <em>WORK COMP</em></p>
                                    <p><strong>TEXAS MUTUAL</strong> 877-404-7999 <em>Fax First Report of Injury</em></p>
                                    <p><strong>TRAVELERS</strong> 800-252-4633</p>
                                    <p><strong>UNITRIN (TRINITY)</strong> 888-253-7834 <em>PERSONAL &amp; COMMERCIA</em>L</p>
                                    <p><strong>UNITRIN (TRINITY)</strong> 800-265-0518 <em>AUTO GLASS CLAIMS - LYNX PROGRAM</em></p>
                                    <p><strong>ZURICH</strong> 800-987-3373 <em>COMMERCIAL</em></p>
                                    <p><strong>ZURICH</strong> 800-987-3373 <em>AUTO GLASS CLAIMS</em></p>
*/?>									
</div>
<?PHP include ("quoteBlurb_general.php");?>
<?PHP include ("footer.php")?>