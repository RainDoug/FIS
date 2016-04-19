<?php include('header.php'); ?>
<!--===========================================================================
// Mobile Website Template | INDEX
// Created by: Taylor Schleyer
// 10/28/2013
// Using JqueryMobile as the foundation: http://jquerymobile.com/
// =========================================================================-->

<!-- ========================================================================== -->
<!-- Page1 (Home Page) -->
<!-- ========================================================================== -->
    <div id="page1" data-role="page">
      <header>
        <h1>"<? echo $slogan; ?>"</h1>
      </header>
      <div class="logo">
        <img src="img/logo.png" />
      </div>
      <div class="information">
          <?php if ($addr2!="") { ?>
          <div class="location1">
          <h2>Location 1</h2>
          <? } ?>
            <table>
              <tr>
              <!-- ===========================!(IMPORTANT)!==================================
                    Go into the data sheet and add $googleMaps=''; under $googlePlaces='';
                   ===========================!(IMPORTANT)!================================== -->
                <td width="30%" align="right"><a data-role="button"  href="<? echo $googleMaps; ?>" class="map-button">Map</a></td>
                <td width="70%"><hr></td>
              </tr>
              <tr>
                <td align="right">Hours:</td>
                <td>Mon - Fri, 9AM - 5PM</td>
              </tr>
              <tr>
                <td align="right">Email:</td>
                <td><a href="mailto:<? echo $mainEmail; ?>"><? echo $mainEmail; ?></a></td>
              </tr>
              <tr>
                <td align="right">Phone:</td>
                <td><a href="tel:<? echo $mainPhone; ?>"><? echo $mainPhone; ?></a></td>
              </tr>
              <tr>
                <td align="right">Address:</td>
                <td><? echo $mainAddr; ?></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><? echo $city; ?>, <? echo $state; ?><br><? echo $zip; ?></td>
              </tr>
            </table>
        <?php if ($addr2!="") { ?>
        </div>
        <div class="location2">
          <h2>Location 2</h2>
          <table>
            <tr>
            <!-- ===========================!(IMPORTANT)!==================================
                  Go into the data sheet and add $googleMaps2=''; under $googlePlaces2='';
                 ===========================!(IMPORTANT)!================================== -->
              <td width="30%" align="right"><a data-role="button"  href="<? echo $googleMaps2; ?>" class="map-button">Map</a></td>
              <td width="70%"><hr></td>
            </tr>
            <tr>
              <td align="right">Hours:</td>
              <td>Mon - Fri, 9AM - 5PM</td>
            </tr>
            <tr>
              <td align="right">Email:</td>
              <td><a href="mailto:<? echo $email2; ?>"><? echo $email2; ?></a></td>
            </tr>
            <tr>
              <td align="right">Phone:</td>
              <td><a href="tel:<? echo $phone2; ?>"><? echo $phone2; ?></a></td>
            </tr>
            <tr>
              <td align="right">Address:</td>
              <td><? echo $addr2; ?></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><? echo $city2; ?>, <? echo $state2; ?><br><? echo $zip2; ?></td>
            </tr>
          </table>
        </div>
      <div style="clear:both;"></div>
      <? } ?>
      </div>
      <?php if ($addr3!="") { ?>
      <div style="clear:both;"></div>
      <div class="information">
          <div <?php if ($addr4=="") { echo 'id="full-width"'; } ?> class="location3">
          <h2>Location 3</h2>
          <table>
            <tr>
            <!-- ===========================!(IMPORTANT)!==================================
                  Go into the data sheet and add $googleMaps3=''; under $googlePlaces3='';
                 ===========================!(IMPORTANT)!================================== -->
              <td <?php if ($addr4=="") { echo 'width="50%"'; } elseif ($addr4!="") { echo 'width="30%"'; } else {} ?> align="right"><a data-role="button"  href="<? echo $googleMaps3; ?>" class="map-button">Map</a></td>
              <td <?php if ($addr4=="") { echo 'width="50%"'; } elseif ($addr4!="") { echo 'width="70%"'; } else {} ?>><hr></td>
            </tr>
            <tr>
              <td align="right">Hours:</td>
              <td>Mon - Fri, 9AM - 5PM</td>
            </tr>
            <tr>
              <td align="right">Email:</td>
              <td><a href="mailto:<? echo $email3; ?>"><? echo $email3; ?></a></td>
            </tr>
            <tr>
              <td align="right">Phone:</td>
              <td><a href="tel:<? echo $phone3; ?>"><? echo $phone3; ?></a></td>
            </tr>
            <tr>
              <td align="right">Address:</td>
              <td><? echo $addr3; ?></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><? echo $city3; ?>, <? echo $state3; ?><br><? echo $zip3; ?></td>
            </tr>
          </table>
        </div>
        <? } ?>
        <?php if ($addr4!="") { ?>
        <div class="location2">
          <h2>Location 4</h2>
          <table>
            <tr>
            <!-- ===========================!(IMPORTANT)!==================================
                  Go into the data sheet and add $googleMaps4=''; under $googlePlaces4='';
                 ===========================!(IMPORTANT)!================================== -->
              <td width="30%" align="right"><a data-role="button"  href="<? echo $googleMaps2; ?>" class="map-button">Map</a></td>
              <td width="70%"><hr></td>
            </tr>
            <tr>
              <td align="right">Hours:</td>
              <td>Mon - Fri, 9AM - 5PM</td>
            </tr>
            <tr>
              <td align="right">Email:</td>
              <td><a href="mailto:<? echo $email2; ?>"><? echo $email2; ?></a></td>
            </tr>
            <tr>
              <td align="right">Phone:</td>
              <td><a href="tel:<? echo $phone2; ?>"><? echo $phone2; ?></a></td>
            </tr>
            <tr>
              <td align="right">Address:</td>
              <td><? echo $addr2; ?></td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><? echo $city2; ?>, <? echo $state2; ?><br><? echo $zip2; ?></td>
            </tr>
          </table>
        </div>
      <div style="clear:both;"></div>
      </div>
      <? } ?>
<!-- ===========================!(IMPORTANT)!==================================

      For any of the following transitions used for navigating page to page,
      use by default, data-role="button" data-transition="slide" and for the
      "About Us" page, use data-role="button" data-transition="slidedown".

      However, you may use any of the following data-role="button"
      data-transitions: slide, slideup, slidedown, pop, fade, and flip.

      Also, if a client wants a certain button colors inverted or flipped so
      that the button may stand out from the rest, place id="reverse" on the <li>.

     ===========================!(IMPORTANT)!================================== -->
        <div class="navigation">
          <ul>
            <li><a href="#page2" data-role="button" data-transition="slideup">About Us</a><div>&#8250;</div></li>
            <li><a href="#page3" data-role="button" data-transition="flip">New Houston Location</a><div>&#8250;</div></li>
            <li><a href="#page4" data-role="button" data-transition="slide">Auto Insurance</a><div>&#8250;</div></li>
            <li><a href="#page5" data-role="button" data-transition="slide">Property Insurance</a><div>&#8250;</div></li>
            <li><a href="#page6" data-role="button" data-transition="slide">Business Insurance</a><div>&#8250;</div></li>
            <li><a href="#page7" data-role="button" data-transition="slide">Life/Health Insurance</a><div>&#8250;</div></li>
            <li><a href="#page8" data-role="button" data-transition="pop">Social</a><div>&#8250;</div></li>
            <li><a href="#page9" data-role="button" data-transition="flip">Get a Quote</a><div>&#8250;</div></li>
            <li><a href="#page10" data-role="button" data-transition="flip">Contact</a><div>&#8250;</div></li>
            
          </ul>
        </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page2 (About Us) -->
<!-- ========================================================================== -->
    <div id="page2" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>About Us</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          <? echo $businessName; ?> is an independent insurance agency located in <? echo $city; ?>, <? echo $state; ?> and serves East <? echo $stateName; ?> with our primary focus on the East <? echo $stateName; ?> Area, along with Statewide specific programs, as well as <? echo $city; ?> and the Surrounding Counties.
        </p>
        <p>
          The mission of our agency is to provide the insurance protection our clients need by offering quality products, excellent service, and guaranteed value. We are committed to finding the best insurance solutions for you, your family, and your business.
        </p>
        <p>
          As an independent agency, we represent multiple insurance companies. We are able to compare coverage and prices in order to offer our customers the greatest value possible. In addition, <? echo $businessName; ?> combines years of experience with cutting edge products to provide exceptional service to all of our policyholders.
        </p>
        <p>
          We value the opportunity to discuss all of your insurance needs with you. Call us today and allow us to demonstrate our dedication to prompt, friendly service with customer care.
        </p>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ===========================!(IMPORTANT)!==================================

      Copy and Paste any of the following pages from this point on from the
      comment lines with the page title to the closing </div>. Make sure
      to change any necessary tags and titles such as the <h1>Title Name</h1>
      and the "Page#" title so that future updates are easy to find.

      Also, please use any and all PHP variable tags such as "echo $businessName"
      or "echo $stateName" etc... This will help make any and all future updates
      to be easier to update if a certain global name or number needs to be
      changed.

     ===========================!(IMPORTANT)!================================== -->
<!-- ========================================================================== -->
<!-- Page3 (Houston) -->
<!-- ========================================================================== -->
    <div id="page3" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Houston Location</h1><span class="small_logo"></span>
      </header>
      <div class="content">
          <h2>Houston and surrounding areas</h2>
  
    <p>First Insurance Services, established by Willie Yeary in 1975 and expanded in the Houston area by Kyle Yeary, specializes in all commercial lines of business. Kyle has extensive experience and background in the corporate world managing sales, employees and assets as well as a small business owner. </p>
            
  <p>If your premiums have been increasing maybe it’s time you talk to the “Insurance Super Store.” You may have a real savings opportunity with one of our well known specialty companies offering claim-free discounts for many business classes, easy pay plans and renewal discounts. </p>

  <h2>Coverages include:</h2>

  <ul>
    <li>Professional Liability </li>
    <li>Business Auto </li>
    <li>Employment Liability </li>
    <li>Umbrella </li>
    <li>Many Other Coverages </li>
    <li>Property & Liability </li>
    <li>Mechanical Breakdown </li>
    <li>Crime </li>
    <li>Equipment </li>
    <li>Workers Compensation </li>
  </ul>
              
  <p>Some of our specialties include Car Washes, Crossfit boxes and gyms, restaurants, dental offices, and more.</p>
                            
    <p>Specialized programs, commercial & personal policies and more from a staff with over 100 years of combined insurance experience. Let our professionals provide the personal attention you deserve. </p>

    <p>Serving Houston and ALL Texas Areas including other states with specific programs for 40 years </p>

    <p>FOR MORE INFORMATION, CONTACT KYLE YEARY <br>
  Direct <a href="tel:2814604853">(281) 460-4853</a> <br>
  Office <a href="tel:8002565116">(800) 256-5116</a> <br>
  email Kyle: <a href="mailto:kyeary@1stinsurance.net">kyeary@1stinsurance.net</a><br>
  email the office: <a href="mailto:ayeary@1stinsurance.net">ayeary@1stinsurance.net</a><br></p>

  <h2>ASSOCIATIONS</h2>

  <ul>
    <li>CAA Member, Combined Agents of America</li>
    <li>IIAT Member, Independent Insurance Agents of Texas</li>
    <li>SCWA—Southwest Car Wash Association</li>
    <li>Lake Houston Area Chamber of Commerce</li>
    <li>Summer Creek Advisory Board Member</li>
    <li>HC MUD 342 Board Member</li>
  </ul>
  </div>

  <?php include('footer.php'); ?>
  </div>

<!-- ========================================================================== -->
<!-- Page4 (Auto Insurance) -->
<!-- ========================================================================== -->
    <div id="page4" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Auto Insurance</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          <? echo $businessName; ?> offers Auto Insurance Coverage in East <? echo $stateName; ?>. We will be happy to review your coverage to make sure you are getting the most amount of insurance for the least amount of money. We can offer you a wide variety of coverage options!
        </p>
        <h2>Auto Insurance Policies</h2>
        <ul>
          <li>Standard Auto</li>
          <li>Non-Standard Auto</li>
          <li>Classic Cars</li>
          <li>RV</li>
          <li>Motorcycle</li>
          <li>Watercraft</li>
        </ul>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page5 (Property Insurance) -->
<!-- ========================================================================== -->
    <div id="page5" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Property Insurance</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          <? echo $businessName; ?> understands that your property is a very important part of your life. In fact, the single biggest investment you may ever make is your home. Are you sure you have adequately protected your home and other properties?
        </p>
        <h2>Property Insurance Policies</h2>
        <ul>
          <li>Homeowners</li>
          <li>Condo</li>
          <li>Renters</li>
          <li>Mobile Home</li>
          <li>Vacant Dwelling</li>
          <li>Tenant Dwelling</li>
          <li>Fire</li>
          <li>Flood</li>
          <li>Personal Umbrella</li>
        </ul>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page6 (Business Insurance) -->
<!-- ========================================================================== -->
    <div id="page6" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Business Insurance</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          Whether you've just started a home-based business or your business is established and growing, <? echo $businessName; ?> can help you protect your livelihood against the unexpected. We offer tailored programs for all types of businesses and professions.
        </p>
        <h2>Business Insurance Policies</h2>
        <ul>
          <li>Commercial Property</li>
          <li>General Liability</li>
          <li>Small Business Package</li>
          <li>Workers Compensation</li>
          <li>Farm and Ranch</li>
          <li>Bonds</li>
          <li>Inland Marine</li>
          <li>Commercial Auto</li>
          <li>Commercial Umbrella</li>
        </ul>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page7 (Life/Health Insurance) -->
<!-- ========================================================================== -->
    <div id="page7" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Life/Health Insurance</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          Experienced life insurance agents at <? echo $businessName; ?> can assist you by designing a policy that best fits your personal or business needs. We want to help you protect those who are most important to you with the right life insurance. We offer a broad range of optional coverage in East <? echo $stateName; ?>.
        </p>
        <h2>Life/Health Insurance Policies</h2>
        <ul>
          <li>Whole Life</li>
          <li>Universal Life</li>
          <li>Term Life</li>
          <li>Individual Health</li>
          <li>Group Health</li>
          <li>Disability</li>
          <li>Long Term Care</li>
          <li>Annuities</li>
        </ul>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page8 (Social) -->
<!-- ========================================================================== -->
    <div id="page8" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Social</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <div class="widget-social">
          <ul>
              <?PHP $smCounter=0; if ($rss || $rssAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $rss;?>" target="_new">RSS Feed<br><img social src="img/social/rss.png" /></a></li>
              <? } ?>
              <?PHP if ($gp || $gpAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $gp;?>" target="_new">GooglePlus+<br><img social src="img/social/gp.png" /></a></li>
              <? } ?>
              <?PHP if ($fb || $fbAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $fb;?>" target="_new">FaceBook<br><img social src="img/social/fb.png" /></a></li>
              <? } ?>
              <?PHP if ($tw || $twAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $tw;?>" target="_new">Twitter<br><img social src="img/social/tw.png" /></a></li>
              <? } ?>
              <?PHP if ($ig || $igAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $ig;?>" target="_new">Instagram<br><img social src="img/social/ig.png" /></a></li>
              <? } ?>
              <?PHP if ($ms || $msAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $ms;?>" target="_new">Myspace<br><img social src="img/social/ms.png" /></a></li>
              <? } ?>
              <?PHP if ($li || $liAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $li;?>" target="_new">LinkedIn<br><img social src="img/social/li.png" /></a></li>
              <? } ?>
              <?PHP if ($pi || $piAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $pi;?>" target="_new">Pinterest<br><img social src="img/social/pi.png" /></a></li>
              <? } ?>
              <?PHP if ($yt || $ytAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $yt;?>" target="_new">YouTube<br><img social src="img/social/yt.png" /></a></li>
              <? } ?>
              <?PHP if ($bl || $blAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $bl;?>" target="_new">Blogger<br><img social src="img/social/bl.png" /></a></li>
              <? } ?>
              <?PHP if ($wp || $wpAddress) { ++$smCounter ?>
              <li><a href="<?PHP echo $wp;?>" target="_new">WordPress<br><img social src="img/social/wp.png" /></a></li>
              <? } ?>
              <?PHP if ($mainEmail) { ++$smCounter ?>
              <li><a href="mailto:<?PHP echo $mainEmail;?>">Email<br><img social src="img/social/em.png" /></a></li>
              <? } ?>
              <div style="clear:both;"></div>
          </ul>
        </div>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page9 (Get a Quote) -->
<!-- ========================================================================== -->
    <div id="page9" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Get a Quote</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          <? echo $businessName; ?> wants you to have the best coverage possible for the best price available. Our wide network of insurance carriers work directly with us to make sure you get exactly what you need at the cost you can afford. Trust us with your personal or commercial insurance needs. Click on one of the pages below and fill out a quote form to give us an idea of how we can better help you.
        </p>
        <h2>Fill Out The Form</h2>
        <form class="form" name="contact" method="post" action="form_EmailerCaptcha.php">
          <input type="hidden" name="toEmail" value="<? echo $formEmail; ?>"/>
          <input type="hidden" name="requestType" value="request for contact"/>
          <input type="hidden" name="mailSubject" value="Mobile Quote Request"/>
            <ul>
              <li><input placeholder="Name" name="Name" type="text" id="C-Name" value="" required/></li>
              <li><input placeholder="Email" name="Email" type="text" id="C-Email" value=""/></li>
              <li><input placeholder="Address" name="Address" type="text" id="C-Address" value="" required/></li>
              <li><input placeholder="City" name="City" type="text" id="C-City" value="" required/></li>
              <li><select name="State" id="C-State" required>
        <option selected="selected">Choose State</option>
        <option value="AL">Alabama</option>       <option value="AK">Alaska</option>        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>      <option value="CA">California</option>    <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>   <option value="DE">Delaware</option>      <option value="DC">Dist of Columbia</option>
        <option value="FL">Florida</option>       <option value="GA">Georgia</option>       <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>         <option value="IL">Illinois</option>      <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>          <option value="KS">Kansas</option>        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>     <option value="ME">Maine</option>         <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option> <option value="MI">Michigan</option>      <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>   <option value="MO">Missouri</option>      <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>      <option value="NV">Nevada</option>        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>    <option value="NM">New Mexico</option>    <option value="NY">New York</option>
        <option value="NC">North Carolina</option><option value="ND">North Dakota</option>  <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>      <option value="OR">Oregon</option>        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>  <option value="SC">South Carolina</option><option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>     <option value="<? echo $state; ?>"><? echo $stateName; ?></option>         <option value="UT">Utah</option>
        <option value="VT">Vermont</option>       <option value="VA">Virginia</option>      <option value="WA">Washington</option>
              </select></li>
              <li><input placeholder="Zip" name="Zip" type="text" id="C-Zip" value="" required/></li>
              <li><input placeholder="Cell" name="Cell" type="text" id="C-Cell" value="" required/></li>
              <li><input placeholder="Mobile" name="Mobile" type="text" id="C-Mobile" value=""/></li>
              <li><h2>Interested in one of our services?</h2><li>
              <li>
                <ul class="checkbox">
                    <li><label><input name="ServiceType" type="checkbox" id="C-Service" value="Auto Insurance" />Auto</label></li>
                    <li><label><input name="ServiceType" type="checkbox" id="C-Service" value="Business Insurance" />Business</label></li>
                    <li><label><input name="ServiceType" type="checkbox" id="C-Service" value="Life/Health Insurance" />Life/Health</label></li>
                    <li><label><input name="ServiceType" type="checkbox" id="C-Service" value="Property Insurance" />Property</label></li>
                    <div style="clear:both;"></div>
                </ul>
              </li>
              <li><h2>Send a Message!</h2></li>
              <li><textarea placeholder="Comments" name="Comments" id="C-Comments"></textarea></li>
            </ul>
            <div id="reCAPTCHA" class="reCAPTCHA">
              <label for="verification">
                Enter the following number
                <br>
                <img src="form_reCAPTCHA.php" />
              </label>
              <input type="text" name="verification" id="contactVerification">
            </div>
            <div class="buttons">
              <li><input type="submit" value="Submit" class="btn"/></li>
              <li><input type="reset" value="Cancel" class="btn"/></li>
              <div style="clear:both;"></div>
            </div>
        </form>
      </div>
    <?php include('footer.php'); ?>
    </div>
<!-- ========================================================================== -->
<!-- Page10 (Contact Us) -->
<!-- ========================================================================== -->
    <div id="page10" data-role="page">
      <header>
        <a href="#" class="back-button" data-rel="back" data-direction="reverse"><div>&#8249;</div>Back</a>
        <h1>Contact Us</h1><span class="small_logo"></span>
      </header>
      <div class="content">
        <h2><? echo $slogan; ?></h2>
        <p>
          We care about you. <? echo $businessName; ?> wants to make sure you’re treated with respect and courtesy at all times. It is our duty to provide you with the best and quality customer service there is possible. Give us a call at <? echo $mainPhone; ?> if you have any questions, concerns, or comments. We want to hear from you. You can also fill out this form and we’ll get back to you as soon as we can.
        </p>
        <h2>Fill Out The Form</h2>
        <form class="form" name="contact" method="post" action="form_EmailerCaptcha2.php">
          <input type="hidden" name="toEmail" value="<? echo $formEmail; ?>"/>
          <input type="hidden" name="requestType" value="request for contact"/>
          <input type="hidden" name="mailSubject" value="Mobile Contact Request"/>
            <ul>
              <li><input placeholder="Name" name="Name" type="text" id="C-Name" value="" required/></li>
              <li><input placeholder="Email" name="Email" type="text" id="C-Email" value=""/></li>
              <li><input placeholder="Address" name="Address" type="text" id="C-Address" value="" required/></li>
              <li><input placeholder="City" name="City" type="text" id="C-City" value="" required/></li>
              <li><select name="State" id="C-State" required>
        <option selected="selected">Choose State</option>
        <option value="AL">Alabama</option>       <option value="AK">Alaska</option>        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>      <option value="CA">California</option>    <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>   <option value="DE">Delaware</option>      <option value="DC">Dist of Columbia</option>
        <option value="FL">Florida</option>       <option value="GA">Georgia</option>       <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>         <option value="IL">Illinois</option>      <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>          <option value="KS">Kansas</option>        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>     <option value="ME">Maine</option>         <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option> <option value="MI">Michigan</option>      <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>   <option value="MO">Missouri</option>      <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>      <option value="NV">Nevada</option>        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>    <option value="NM">New Mexico</option>    <option value="NY">New York</option>
        <option value="NC">North Carolina</option><option value="ND">North Dakota</option>  <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>      <option value="OR">Oregon</option>        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>  <option value="SC">South Carolina</option><option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>     <option value="<? echo $state; ?>"><? echo $stateName; ?></option>         <option value="UT">Utah</option>
        <option value="VT">Vermont</option>       <option value="VA">Virginia</option>      <option value="WA">Washington</option>
              </select></li>
              <li><input placeholder="Zip" name="Zip" type="text" id="C-Zip" value="" required/></li>
              <li><input placeholder="Cell" name="Cell" type="text" id="C-Cell" value="" required/></li>
              <li><input placeholder="Mobile" name="Mobile" type="text" id="C-Mobile" value=""/></li>
              <li><h2>Send a Message!</h2></li>
              <li><textarea placeholder="Comments" name="Comments" id="C-Comments"></textarea></li>
            </ul>
            <div id="reCAPTCHA2" class="reCAPTCHA">
              <label for="verification2">
                Enter the following number
                <br>
                <img src="form_reCAPTCHA2.php" />
              </label>
              <input type="text" name="verification2" id="contactVerification2">
            </div>
            <div class="buttons">
              <li><input type="submit" value="Submit" class="btn"/></li>
              <li><input type="reset" value="Cancel" class="btn"/></li>
              <div style="clear:both;"></div>
            </div>
        </form>
      </div>
    <?php include('footer.php'); ?>
    </div>
  </body>
</html>
