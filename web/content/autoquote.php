<FORM name="form1" METHOD="POST" action="autoquoteAction.php">
<input type="hidden" name=toEmail value="<? echo $mainEmail?>">
<p style="font-size:10px"> 
		<br />
        <br />        

		Please complete the first section of this form in order to receive a response from an agent. Any other information you would like to enter on this form is optional.  Due to certain limitations, we may not be able to quote.		<br />
        <br />        
</p>
<!-- ------------------ Personal Information --------------- -->
<br>	
<b>Personal Information</b>
<br>
<hr size=1 width=550>	

	<TABLE style="font-size:11px">
	<TR>
		<TD ALIGN="RIGHT"> Name</TD>
		<TD><INPUT TYPE="TEXT" NAME="1" class="txt" ></TD>
		<TD width=50></td>
		<TD ALIGN="RIGHT">Email Address</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="10" class="txt"></TD>
	</TR>
		
	<TR>
		<TD ALIGN="RIGHT">Address</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="2" class="txt"></TD>
		<TD></td>					
		<TD ALIGN="RIGHT">Day Phone</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="6" class="txt"></TD> 
	</TR>	
	
	<TR>
		<TD ALIGN="RIGHT">City</td>
		<TD><INPUT TYPE="TEXT" NAME="3"  class="txt">
		<TD></TD>
		<TD ALIGN="RIGHT">Night Phone</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="7" class="txt"></TD> 
	</TR>	
	<TR>
		<TD ALIGN="RIGHT">State</TD>
		<TD><INPUT TYPE="TEXT" NAME="4"  class="txt" style="width:80px">&nbsp;Zip&nbsp;<INPUT TYPE="TEXT" NAME="5" class="txt"  style="width:100px"></TD> 
		<TD></TD>
		<TD ALIGN="RIGHT">Best Time to Call</TD>
		<TD VALIGN="TOP">
			<INPUT TYPE="TEXT" NAME="8"  class="txt" style="width:45px"> &#160; 
			<INPUT TYPE="RADIO" NAME="9" VALUE="a.m.">AM &#160; 
			<INPUT TYPE="RADIO" NAME="9" VALUE="p.m.">PM</TD>
		</TD> 
	</TR>	
    <!--- contact Method --->
    <tr>
    	<td colspan="4" align="right">
        	Preferred Contact Method
        </td>
        <td>
			<INPUT TYPE="RADIO" NAME="contactMethod" VALUE="email">Email &#160; 
			<INPUT TYPE="RADIO" NAME="contactMethod" VALUE="phone">Phone
        </td>
    </tr>
	</TABLE>

<br><br>	
	

<!-- ------------------ Current Carrier --------------- -->
	
<b>Current Auto Insurance Information</b>
<br>
<hr size=1 width=550>	
	
<TABLE style="font-size:11px">
	<TR>
		<TD ALIGN="RIGHT">Company Name</TD>
		<TD><INPUT TYPE="TEXT" NAME="1a" class="txt"></TD>
		<TD></TD>
		<TD ALIGN="RIGHT">Policy Expiration</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="2a" class="txt"></TD>
	</TR>
	<TR>
		<TD ALIGN="RIGHT">Premium Amount</TD>
		<TD><INPUT TYPE="TEXT" NAME="3a" class="txt"></TD>
		<TD></TD>
		<TD ALIGN="RIGHT">Term</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="4a" class="txt"></TD>
	</TR>
	<TR>
		<TD ALIGN="RIGHT" colspan=2>
			Are You A Homeowner?
			<INPUT TYPE="RADIO" NAME="5a" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="5a" VALUE="No">N
		</TD>
		<TD></TD>
		<TD ALIGN="RIGHT">Insurance<br>Carrier</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="6a" class="txt"></TD>
	</TR>
</TABLE>
	
<br><br>	



	
<!-- ------------------ Vehicle Information --------------- -->
	
<b>Vehicle Information</b> <I>(include all cars you or your family members own or lease)</I>
<br>
<hr size=1 width=550>	

	<b>Car #1</b>
	<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff">

	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Year</TD>
		<TD><CENTER>Make</TD>
		<TD><CENTER>Model</TD>
		<TD><CENTER>Body Type</TD>
		<TD COLSPAN="3"><CENTER>Vehicle ID# (VIN)</TD>
	</TR>
    <!-- driver Name   -->
    
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1b"  style="width:80px" MAXLENGTH="4"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="2b"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="3b"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="4b"  style="width:80px" MAXLENGTH="20"></TD>
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5b" style="width:150px" MAXLENGTH="17"></TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="2"><CENTER>Name of Title Holder</TD>
		<TD><CENTER>Annual Milage</TD>
		<TD><CENTER>Drive to school/work?</TD>
		<TD><CENTER># of miles<BR>(one way)</TD>
		<TD><CENTER>&#160; Airbags &#160;</TD>
		<TD><CENTER>Car Alarm</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="2"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6b" style="width:150px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="7b"  style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8b" VALUE="Yes">Y <INPUT TYPE="RADIO" NAME="8b" VALUE="No">N</TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="9b" style="width:50px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="10b" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="10b" VALUE="No">N</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="11b" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="11b" VALUE="No">N</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="7"><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="7"><CENTER>				
			Location City: <INPUT CLASS="txt" TYPE="TEXT" NAME="12b" style="width:150px" MAXLENGTH="50"> &#160; 
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="13b" style="width:150px" MAXLENGTH="2"> &#160; 
			Zip: <INPUT CLASS="txt" TYPE="TEXT" NAME="14b" style="width:150px" MAXLENGTH="50">
		</TD>
	</TR>
    <!-- driver name -->
    <tr VALIGN="TOP" BGCOLOR="#dedede">
    	<td align="right"><CENTER>
        	Driver Name
        </td>
        <td colspan="6">
    		 <INPUT CLASS="txt" TYPE="TEXT" NAME="driverName1" style="width:150px" MAXLENGTH="50">     
        </td>
    </tr>

	</TABLE>
	
	<br><br>
	
	<b>Car #2</b> (<span onclick="document.getElementById('car2').style.display='inline';" style="color:blue;text-decoration:underline;">enter info</span>)
	<div id="car2" style="display:none">
	<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff">

	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Year</TD>
		<TD><CENTER>Make</TD>
		<TD><CENTER>Model</TD>
		<TD><CENTER>Body Type</TD>
		<TD COLSPAN="3"><CENTER>Vehicle ID# (VIN)</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1c"  style="width:80px" MAXLENGTH="4"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="2c"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="3c"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="4c"  style="width:80px" MAXLENGTH="17"></TD>
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5c" style="width:150px" MAXLENGTH="20"></TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="2"><CENTER>Name of Title Holder</TD>
		<TD><CENTER>Annual Milage</TD>
		<TD><CENTER>Drive to school/work?</TD>
		<TD><CENTER># of miles<BR>(one way)</TD>
		<TD><CENTER>&#160; Airbags &#160;</TD>
		<TD><CENTER>Car Alarm</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="2"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6c" style="width:150px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="7c"  style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8c" VALUE="Yes">Y <INPUT TYPE="RADIO" NAME="8c" VALUE="No">N</TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="9c" style="width:50px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="10c" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="10c" VALUE="No">N</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="11c" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="11c" VALUE="No">N</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="7"><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="7"><CENTER>				
			Location City: <INPUT CLASS="txt" TYPE="TEXT" NAME="12c" style="width:150px" MAXLENGTH="50"> &#160; 
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="13c" style="width:150px" MAXLENGTH="2"> &#160; 
			Zip: <INPUT CLASS="txt" TYPE="TEXT" NAME="14c" style="width:150px" MAXLENGTH="50">
		</TD>
	</TR>
    <!-- driver name -->
    <tr VALIGN="TOP" BGCOLOR="#dedede">
    	<td align="right"><CENTER>
        	Driver Name
        </td>
        <td colspan="6">
    		 <INPUT CLASS="txt" TYPE="TEXT" NAME="driverName2" style="width:150px" MAXLENGTH="50">     
        </td>
    </tr>
    
	</TABLE>
	</div>
	
	<br><br>
	
	<b>Car #3</b> (<span onclick="document.getElementById('car3').style.display='inline';" style="color:blue;text-decoration:underline;">enter info</span>)
	<div id="car3" style="display:none">
	<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff">

	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Year</TD>
		<TD><CENTER>Make</TD>
		<TD><CENTER>Model</TD>
		<TD><CENTER>Body Type</TD>
		<TD COLSPAN="3"><CENTER>Vehicle ID# (VIN)</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1d"  style="width:80px" MAXLENGTH="4"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="2d"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="3d"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="4d"  style="width:80px" MAXLENGTH="20"></TD>
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5d" style="width:150px" MAXLENGTH="17"></TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="2"><CENTER>Name of Title Holder</TD>
		<TD><CENTER>Annual Milage</TD>
		<TD><CENTER>Drive to school/work?</TD>
		<TD><CENTER># of miles<BR>(one way)</TD>
		<TD><CENTER>&#160; Airbags &#160;</TD>
		<TD><CENTER>Car Alarm</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="2"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6d" style="width:150px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="7d"  style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8d" VALUE="Yes">Y <INPUT TYPE="RADIO" NAME="8d" VALUE="No">N</TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="9d" style="width:50px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="10d" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="10d" VALUE="No">N</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="11d" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="11d" VALUE="No">N</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="7"><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="7"><CENTER>				
			Location City: <INPUT CLASS="txt" TYPE="TEXT" NAME="12d" style="width:150px" MAXLENGTH="50"> &#160; 
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="13d" style="width:150px" MAXLENGTH="2"> &#160; 
			Zip: <INPUT CLASS="txt" TYPE="TEXT" NAME="14d" style="width:150px" MAXLENGTH="50">
		</TD>
	</TR>
    <!-- driver name -->
    <tr VALIGN="TOP" BGCOLOR="#dedede">
    	<td align="right"><CENTER>
        	Driver Name
        </td>
        <td colspan="6">
    		 <INPUT CLASS="txt" TYPE="TEXT" NAME="driverName3" style="width:150px" MAXLENGTH="50">     
        </td>
    </tr>
    
	</TABLE>
	</div>
	
	<br><br>
	
	<b>Car #4</b> (<span onclick="document.getElementById('car4').style.display='inline';" style="color:blue;text-decoration:underline;">enter info</span>)
	<div id="car4" style="display:none">
	<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff">

	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Year</TD>
		<TD><CENTER>Make</TD>
		<TD><CENTER>Model</TD>
		<TD><CENTER>Body Type</TD>
		<TD COLSPAN="3"><CENTER>Vehicle ID# (VIN)</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1e"  style="width:80px" MAXLENGTH="4"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="2e"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="3e"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="4e"  style="width:80px" MAXLENGTH="20"></TD>
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5e" style="width:150px" MAXLENGTH="17"></TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="2"><CENTER>Name of Title Holder</TD>
		<TD><CENTER>Annual Milage</TD>
		<TD><CENTER>Drive to school/work?</TD>
		<TD><CENTER># of miles<BR>(one way)</TD>
		<TD><CENTER>&#160; Airbags &#160;</TD>
		<TD><CENTER>Car Alarm</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="2"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6e" style="width:150px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="7e"  style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8e" VALUE="Yes">Y <INPUT TYPE="RADIO" NAME="8e" VALUE="No">N</TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="9e" style="width:50px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="10e" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="10e" VALUE="No">N</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="11e" VALUE="Yes">Y &#160;<INPUT TYPE="RADIO" NAME="11e" VALUE="No">N</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="7"><CENTER>If vehicle is kept at an address other than that listed above, please indicate below</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="7"><CENTER>				
			Location City: <INPUT CLASS="txt" TYPE="TEXT" NAME="12e" style="width:150px" MAXLENGTH="50"> &#160; 
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="13e" style="width:150px" MAXLENGTH="2"> &#160; 
			Zip: <INPUT CLASS="txt" TYPE="TEXT" NAME="14e" style="width:150px" MAXLENGTH="50">
		</TD>
	</TR>
    <!-- driver name -->
    <tr VALIGN="TOP" BGCOLOR="#dedede">
    	<td align="right"><CENTER>
        	Driver Name
        </td>
        <td colspan="6">
    		 <INPUT CLASS="txt" TYPE="TEXT" NAME="driver4Name" style="width:150px" MAXLENGTH="50">     
        </td>
    </tr>
    
	</TABLE>
	</div>

<br><br><br>



<!-- ------------------ Liability Limit --------------- -->
	
	
<b>Liability Limit</b> <I>for ALL Cars</I>
<br>
<hr size=1 width=550>
	
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%">
	<TR VALIGN="TOP" BGCOLOR="#dedede">
	<TD><CENTER>
	Choose either &#160; <B>Bodily Injury</B> &#160; <U><I>and</I></U> &#160; <B>Property Damage</B></TD>
	<TD><CENTER>
	<U><I>or</I></U> &#160; <B>Single Limit</B></TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
	<TD><CENTER>
		<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
		<TR VALIGN="TOP">
		<TD><CENTER>
		Bodily Injury<BR>
		<SELECT CLASS="quote" NAME="1f">
		<OPTION>
        
		<OPTION>$25,000/50,000 
		<OPTION>$50,000/100,000
		<OPTION>$100,000/300,000
		<OPTION>$250,000/500,000
        <OPTION>$500,000/500,000</SELECT></TD>
		<TD>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</TD>
		<TD><CENTER>
		Property Damage<BR>
		<SELECT CLASS="quote"  NAME="2f">
		<OPTION>
        
		<OPTION>$25,000
		<OPTION>$50,000
		<OPTION>$100,000
		</SELECT></TD>
		</TR>
		</TABLE>
	</TD>
	<TD><CENTER>
	Single Limit<BR>
	<SELECT CLASS="quote"  NAME="3f">
	<OPTION>
	<OPTION>$100,000
	<OPTION>$300,000
	<OPTION>$500,000</SELECT></TD>
	</TR>
	</TABLE>	
	

<br><br><br>		



	
	
<!-- ------------------ Other Coverages --------------- -->
	
<b>Other Coverages</b>
<br>
<hr size=1 width=550>
	
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%">

	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<td width=50%>Personal Injury Protection/Medical Payments</td>
		<TD>
			<CENTER>
			<SELECT CLASS="quote"  NAME="1o">
			<OPTION>None
			<OPTION>$2,500 
			<OPTION>$5,000 
			<OPTION>$10,000 
			</SELECT>
		</TD>
	</tr>
	<tr>
		<td>Uninsured/Underinsured Motorist - Bodily Injury</td>
		<TD>
			<CENTER>
			<SELECT CLASS="quote"  NAME="2o">
			<OPTION>None
			<OPTION>$25,000/$50,000
			<OPTION>$50,000/$100,000
			<OPTION>$100,000/$300,000
			<OPTION>$250,000/$500,000
			</SELECT>
		</TD>
	</tr>
	<!--<tr>
		<td>Uninsured/Underinsured Motorist - Property Damage</td>	
		<TD>
			<CENTER>
			<SELECT CLASS="quote"  NAME="3o">
			<OPTION>None
	        <OPTION>$15,000
			<OPTION>$25,000 
			<OPTION>$50,000 
			<OPTION>$100,000 
			</SELECT>
		</TD>
		
	</TR>-->
	</TABLE>		
	


<!-- ------------------ Deductibles --------------- -->
	
<br><br><br>
	
<b>Deductibles and Misc.</b>
<br>
<hr size=1 width=550>	
	
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff" CLASS="formtext">
	<TR VALIGN="TOP" BGCOLOR="#dedede">
	<TD VALIGN="CENTER"><CENTER><SPAN CLASS="largeformtext">
	<B>Car#</B></TD>
	<TD><CENTER>
	Comprehensive Deductible</TD>
	<TD><CENTER>
	Collision Deductible</TD>
	<TD><CENTER>
	Towing</TD>
	<TD><CENTER>
	Rental Reimbursement</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
	<TD VALIGN="CENTER" BGCOLOR="#dedede"><CENTER><SPAN CLASS="largeformtext">
	1</TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="1g">
	<OPTION> 
	<OPTION>None 
	<OPTION>$100
	<OPTION>$250
	<OPTION>$500 
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="2g">
	<OPTION> 
	<OPTION>None
	<OPTION>$250
	<OPTION>$500
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="3g" VALUE="Yes">Yes</TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="4g" VALUE="Yes">Yes</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
	<TD VALIGN="CENTER" BGCOLOR="#dedede"><CENTER><SPAN CLASS="largeformtext">
	2</TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="5g">
	<OPTION> 
	<OPTION>None
	<OPTION>$100
	<OPTION>$250
	<OPTION>$500 
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="6g">
	<OPTION> 
	<OPTION>None
	<OPTION>$250
	<OPTION>$500
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="7g" VALUE="Yes">Yes</TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="8g" VALUE="Yes">Yes</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
	<TD VALIGN="CENTER" BGCOLOR="#dedede"><CENTER><SPAN CLASS="largeformtext">
	3</TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="9g">
	<OPTION> 
	<OPTION>None
	<OPTION>$100
	<OPTION>$250
	<OPTION>$500 
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="10g">
	<OPTION> 
	<OPTION>None
	<OPTION>$250
	<OPTION>$500
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="11g" VALUE="Yes">Yes</TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="12g" VALUE="Yes">Yes</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
	<TD VALIGN="CENTER" BGCOLOR="#dedede"><CENTER><SPAN CLASS="largeformtext">
	4</TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="13g">
	<OPTION> 
	<OPTION>None
	<OPTION>$100
	<OPTION>$250
	<OPTION>$500 
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<SELECT CLASS="quote" NAME="14g">
	<OPTION> 
	<OPTION>None
	<OPTION>$250
	<OPTION>$500
	<OPTION>$1000</SELECT></TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="15g" VALUE="Yes">Yes</TD>
	<TD><CENTER>
	<INPUT TYPE="CHECKBOX" NAME="16g" VALUE="Yes">Yes</TD>
	</TR>
	</TABLE>	
	
	
<!-- ------------------ Driver Information --------------- -->
		
<br><br><br>
	
<b>Driver Information</b> <I>(include all licensed drivers in your household)</I>
<br>
<hr size=1 width=550>		
	
<B>Driver #1</B> 				
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%">
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3"><CENTER>Driver's Name</TD>
		<TD COLSPAN="3"><CENTER>Drivers License Information</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1h" style="width:200px" MAXLENGTH="50"></TD>
		<TD COLSPAN="3"><CENTER>
			DL#: <INPUT CLASS="txt" TYPE="TEXT" NAME="2h"  style="width:100px" MAXLENGTH="20">
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="3h" style="width:100px" MAXLENGTH="2">
			Yr's Licensed: <INPUT CLASS="txt" TYPE="TEXT" NAME="4h" style="width:100px" MAXLENGTH="2">
		</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Relation</TD>
		<TD><CENTER>Date of Birth</TD>
		<TD><CENTER>Sex</TD>
		<TD><CENTER>Marital Status</TD>
		<TD COLSPAN="2"><CENTER>Courses Completed Last 3 yrs</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5h" style="width:80px" MAXLENGTH="20" VALUE="Self"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6h" style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="7h" VALUE="Male">M<BR><INPUT TYPE="RADIO" NAME="7h" VALUE="Female">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8h" VALUE="Married">Married&#160;<INPUT TYPE="RADIO" NAME="8h" VALUE="Single">Single</TD>
		<TD COLSPAN="2" ALIGN="RIGHT">
			Drivers&#160;Ed:&#160;<INPUT TYPE="RADIO" NAME="9h" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="9h" VALUE="No">N&#160;<BR>
			Defensive Driving;<INPUT TYPE="RADIO" NAME="10h" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="10h" VALUE="No">N&#160;<br>
			Drug & Alcohol Awareness:&#160;<INPUT TYPE="RADIO" NAME="11h" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="11h" VALUE="No">N&#160;
		</TD>
	</TR>
    <!-- Drivers SSN -->
    <TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3" align="right" valign="middle">Driver's SSN</TD>
		<TD COLSPAN="3" align="left" ><INPUT CLASS="txt" TYPE="TEXT" NAME="driverSSN1" style="width:80px" MAXLENGTH="20" ></TD>
	</TR>
</TABLE>		
	
<br><br>

<b>Driver #2</b> (<span onclick="document.getElementById('driver2').style.display='inline';" style="color:blue;text-decoration:underline;">enter info</span>)
<div id="driver2" style="display:none">
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%">
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3"><CENTER>Driver's Name</TD>
		<TD COLSPAN="3"><CENTER>Drivers License Information</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1i" style="width:200px" MAXLENGTH="50"></TD>
		<TD COLSPAN="3"><CENTER>
			DL#: <INPUT CLASS="txt" TYPE="TEXT" NAME="2i"  style="width:100px" MAXLENGTH="20">
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="3i" style="width:100px" MAXLENGTH="2">
			Yr's Licensed: <INPUT CLASS="txt" TYPE="TEXT" NAME="4i" style="width:100px" MAXLENGTH="2">
		</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Relation</TD>
		<TD><CENTER>Date of Birth</TD>
		<TD><CENTER>Sex</TD>
		<TD><CENTER>Marital Status</TD>
		<TD COLSPAN="2"><CENTER>Courses Completed Last 3 yrs</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5i" style="width:80px" MAXLENGTH="20" ></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6i" style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="7i" VALUE="Male">M<BR><INPUT TYPE="RADIO" NAME="7i" VALUE="Female">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8i" VALUE="Married">Married&#160;<INPUT TYPE="RADIO" NAME="8i" VALUE="Single">Single</TD>
		<TD COLSPAN="2" ALIGN="RIGHT">
			Drivers&#160;Ed:&#160;<INPUT TYPE="RADIO" NAME="9i" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="9i" VALUE="No">N&#160;<BR>
			Defensive Driving;<INPUT TYPE="RADIO" NAME="10i" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="10i" VALUE="No">N&#160;<br>
			Drug & Alcohol Awareness:&#160;<INPUT TYPE="RADIO" NAME="11h" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="11i" VALUE="No">N&#160;
		</TD>
	</TR>
    <!-- Drivers SSN -->
    <TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3" align="right" valign="middle">Driver's SSN</TD>
		<TD COLSPAN="3" align="left"><INPUT CLASS="txt" TYPE="TEXT" NAME="driverSSN2" style="width:80px" MAXLENGTH="20" ></TD>
	</TR></TABLE>
</div>
	
<br><br>

<b>Driver #3</b> (<span onclick="document.getElementById('driver3').style.display='inline';" style="color:blue;text-decoration:underline;">enter info</span>)

<div id="driver3" style="display:none">

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%">
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3"><CENTER>Driver's Name</TD>
		<TD COLSPAN="3"><CENTER>Drivers License Information</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1j" style="width:200px" MAXLENGTH="50"></TD>
		<TD COLSPAN="3"><CENTER>
			DL#: <INPUT CLASS="txt" TYPE="TEXT" NAME="2j"  style="width:100px" MAXLENGTH="20">
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="3j" style="width:100px" MAXLENGTH="2">
			Yr's Licensed: <INPUT CLASS="txt" TYPE="TEXT" NAME="4j" style="width:100px" MAXLENGTH="2">
		</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Relation</TD>
		<TD><CENTER>Date of Birth</TD>
		<TD><CENTER>Sex</TD>
		<TD><CENTER>Marital Status</TD>
		<TD COLSPAN="2"><CENTER>Courses Completed Last 3 yrs</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5j" style="width:80px" MAXLENGTH="20" ></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6j" style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="7j" VALUE="Male">M<BR><INPUT TYPE="RADIO" NAME="7j" VALUE="Female">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8j" VALUE="Married">Married&#160;<INPUT TYPE="RADIO" NAME="8j" VALUE="Single">Single</TD>
		<TD COLSPAN="2" ALIGN="RIGHT">
			Drivers&#160;Ed:&#160;<INPUT TYPE="RADIO" NAME="9j" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="9j" VALUE="No">N&#160;<BR>
			Defensive Driving;<INPUT TYPE="RADIO" NAME="10j" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="10j" VALUE="No">N&#160;<br>
			Drug & Alcohol Awareness:&#160;<INPUT TYPE="RADIO" NAME="11h" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="11j" VALUE="No">N&#160;
		</TD>
	</TR>
    <!-- Drivers SSN -->
    <TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3" align="right"  valign="middle">Driver's SSN</TD>
		<TD COLSPAN="3" align="left"><INPUT CLASS="txt" TYPE="TEXT" NAME="driverSSN3" style="width:80px" MAXLENGTH="20" ></TD>
	</TR></TABLE>
</div>	
	
<br><br>

<b>Driver #4</b> (<span onclick="document.getElementById('driver4').style.display='inline';" style="color:blue;text-decoration:underline;">enter info</span>)
<div id="driver4" style="display:none">
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%">
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3"><CENTER>Driver's Name</TD>
		<TD COLSPAN="3"><CENTER>Drivers License Information</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD COLSPAN="3"><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1k" style="width:200px" MAXLENGTH="50"></TD>
		<TD COLSPAN="3"><CENTER>
			DL#: <INPUT CLASS="txt" TYPE="TEXT" NAME="2k"  style="width:100px" MAXLENGTH="20">
			State: <INPUT CLASS="txt" TYPE="TEXT" NAME="3k" style="width:100px" MAXLENGTH="2">
			Yr's Licensed: <INPUT CLASS="txt" TYPE="TEXT" NAME="4k" style="width:100px" MAXLENGTH="2">
		</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Relation</TD>
		<TD><CENTER>Date of Birth</TD>
		<TD><CENTER>Sex</TD>
		<TD><CENTER>Marital Status</TD>
		<TD COLSPAN="2"><CENTER>Courses Completed Last 3 yrs</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5k" style="width:80px" MAXLENGTH="20" ></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6k" style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="7k" VALUE="Male">M<BR><INPUT TYPE="RADIO" NAME="7k" VALUE="Female">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="8k" VALUE="Married">Married&#160;<INPUT TYPE="RADIO" NAME="8k" VALUE="Single">Single</TD>
		<TD COLSPAN="2" ALIGN="RIGHT">
			Drivers&#160;Ed:&#160;<INPUT TYPE="RADIO" NAME="9k" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="9k" VALUE="No">N&#160;<BR>
			Defensive Driving;<INPUT TYPE="RADIO" NAME="10k" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="10k" VALUE="No">N&#160;<br>
			Drug & Alcohol Awareness:&#160;<INPUT TYPE="RADIO" NAME="11h" VALUE="Yes">Y&#160;<INPUT TYPE="RADIO" NAME="11k" VALUE="No">N&#160;
		</TD>
	</TR>
    <!-- Drivers SSN -->
    <TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD COLSPAN="3" align="right" valign="middle">Driver's SSN</TD>
		<TD COLSPAN="3" align="left"><INPUT CLASS="txt" TYPE="TEXT" NAME="driverSSN4" style="width:80px" MAXLENGTH="20" ></TD>
	</TR></TABLE>
</div>	




<!-- ------------------ Driver History --------------- -->

<br><br><br>
	
<b>Driver History</b> 
<br>
<hr size=1 width=550>	

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff" CLASS="formtext">
	<TR BGCOLOR="#f6f6f6">
		<TD COLSPAN="5"><I>List ANY convictions for ANY driver <B>convicted of moving traffic violations</B> in the past 3 years</I></TD>
	</TR>
		<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Driver</TD>
		<TD><CENTER>Date</TD>
		<TD><CENTER>Type of Conviction</TD>

		<TD><CENTER>Speed Over Limit</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="2l"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="3l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="5l" style="width:80px" MAXLENGTH="3"> mph</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="7l"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="8l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="10l" style="width:80px" MAXLENGTH="3"> mph</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="11l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="12l"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="13l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="15l" style="width:80px" MAXLENGTH="3"> mph</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="16l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="17l"  style="width:80px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="18l" style="width:130px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="20l" style="width:80px" MAXLENGTH="3"> mph</TD>
	</TR>
</TABLE>

<br><br>

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff" CLASS="formtext">
	<TR BGCOLOR="#f6f6f6">
		<TD COLSPAN="3"><I>List ANY driver who has had <B>license suspensions, revocations or DUI convictions</B> below</I></TD>
	</TR>
		<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Driver</TD>
		<TD><CENTER>License Suspended or Revoked</TD>
		<TD><CENTER>DUI Conviction For:</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1m" SIZE="12" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="checkbox" NAME="2m" VALUE="Suspended">Suspended &#160; <INPUT TYPE="checkbox" NAME="3m" VALUE="Revoked">Revoked &#160; </TD>
		<TD><CENTER><INPUT TYPE="checkbox" NAME="4m" VALUE="Alcohol">Alcohol &#160; <INPUT TYPE="checkbox" NAME="5m" VALUE="Drugs">Drugs &#160; </TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="6m" SIZE="12" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT TYPE="checkbox" NAME="7m" VALUE="Suspended">Suspended &#160; <INPUT TYPE="checkbox" NAME="8m" VALUE="Revoked">Revoked &#160; </TD>
		<TD><CENTER><INPUT TYPE="checkbox" NAME="9m" VALUE="Alcohol">Alcohol &#160; <INPUT TYPE="checkbox" NAME="10m" VALUE="Drugs">Drugs &#160; </TD>
	</TR>

</TABLE>

<br><br>			

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" BGCOLOR="#ffffff" CLASS="formtext">
	<TR BGCOLOR="#f6f6f6">
		<TD COLSPAN="7"><I>List ANY driver <B>involved in accidents</B>, regardless of fault, in the past 5 years</I></TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#dedede">
		<TD><CENTER>Driver</TD>
		<TD><CENTER>Date</TD>
		<TD><CENTER>Description</TD>
		<TD><CENTER>Cost</TD>
		
		<TD><CENTER>Injuries</TD>
		<TD><CENTER>At Fault</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="1n" style="width:110px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="2n"  style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="3n" style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER>$<INPUT CLASS="txt" TYPE="TEXT" NAME="4n" style="width:50px" MAXLENGTH="15"></TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="6n" VALUE="Yes">Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="7n" VALUE="Yes">Yes</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="8n" style="width:110px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="9n"  style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="10n" style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER>$<INPUT CLASS="txt" TYPE="TEXT" NAME="11n" style="width:50px" MAXLENGTH="15"></TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="13n" VALUE="Yes">Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="14n" VALUE="Yes">Yes</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="15n" style="width:110px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="16n"  style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="17n" style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER>$<INPUT CLASS="txt" TYPE="TEXT" NAME="18n" style="width:50px" MAXLENGTH="15"></TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="20n" VALUE="Yes">Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="21n" VALUE="Yes">Yes</TD>
	</TR>
	<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="22n" style="width:110px" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="23n"  style="width:80px" MAXLENGTH="20"></TD>
		<TD><CENTER><INPUT CLASS="txt" TYPE="TEXT" NAME="24n" style="width:100px" MAXLENGTH="50"></TD>
		<TD><CENTER>$<INPUT CLASS="txt" TYPE="TEXT" NAME="25n" style="width:50px" MAXLENGTH="15"></TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="27n" VALUE="Yes">Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="28n" VALUE="Yes">Yes</TD>
	</TR>
</TABLE>

<br><br><br>




<!-- ------------------ Additional Comments --------------- -->

<b>Additional Comments</b>
<br>
<hr size=1 width=550>	
					
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
<TR>
	<TD>
		<br>
		<CENTER>
		<I>
		Please give any additional comments you feel appropriate for this quotation. 
	</TD>
</TR>
<TR VALIGN="TOP">
	<TD><CENTER><TEXTAREA CLASS="searchboxes" NAME="1p" COLS="55" ROWS="4" WRAP="PHYSICAL"></TEXTAREA></TD>
</TR>

</TABLE>

	
<br><br>
<center>

<font style="font-size:10px">
Please click on the <b>"Submit Quote"</b> button to send your quote request.<br>
<i>One of our representatives will respond to your submission as soon as possible.</i>

<br><br>



<input type="submit" value="Submit Quote">



</FORM>
<font style="font-size:9px">
Submission of quote request form to this agency does not constitute a binding confirmation of new or revised insurance coverage.


<br><br>