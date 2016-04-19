<FORM name="form1" METHOD="POST" action="homequoteAction.php">
<input type="hidden" name=toEmail value="<? echo $mainEmail?>">
<p style="font-size:10px"> 
		<br />
        <br />        

Please complete the first section of this form in order to receive a response from an agent. Any other information you would like to enter on this form is optional.  Due to certain limitations, we may not be able to quote.		<br />
        <br />        
</p>
<!-- ------------------ Primary Insured --------------- -->
<br>	
<b>Primary Insured</b>
<br>
<hr size=1 width=550>	
		
	<TABLE style="font-size:11px">
	<TR>
		<TD ALIGN="RIGHT"> Name</TD>
		<TD><INPUT TYPE="TEXT" NAME="1" class="txt" ></TD>
		<TD width=10></td>
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
		<TD ALIGN="RIGHT" valign="top">State<br /><br />Zip</TD>
		<TD valign="top"><INPUT TYPE="TEXT" NAME="4"  class="txt" style="width:80px"><br />
        				<INPUT TYPE="TEXT" NAME="5" class="txt"  style="width:100px"></TD> 
		<TD></TD>
		<TD ALIGN="RIGHT" valign="top">Best Time to Call</TD>
		<TD VALIGN="TOP">
			<INPUT TYPE="TEXT" NAME="8"  class="txt" style="width:45px"> &#160; 
			<INPUT TYPE="RADIO" NAME="9" VALUE="a.m.">AM &#160; 
			<INPUT TYPE="RADIO" NAME="9" VALUE="p.m.">PM</TD>
		</TD> 
	</TR>	
	<TR>
		<TD ALIGN="RIGHT">Date of Birth</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="11" class="txt"></TD>
        
            <!--- contact Method --->
		<td colspan="2" align="right">
        	Preferred<br />Contact Method
        </td>
        <td>
			<INPUT TYPE="RADIO" NAME="contactMethod" VALUE="email">Email &#160; 
			<INPUT TYPE="RADIO" NAME="contactMethod" VALUE="phone">Phone
        </td>   
                
	</TR>	
	
	<TR>
		<TD ALIGN="RIGHT" valign=top>Occupation</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="12" class="txt"></TD>
		<TD></td>					
		<TD ALIGN="RIGHT">Time at<br>Current Job</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="13" class="txt"></TD> 
	</TR>
	<TR>
		<TD ALIGN="RIGHT" valign=top>SSN</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="ssnSelf" class="txt"></TD>
		<TD></td>	
        <TD></td>	
        <TD></td>					
	</TR>
	</TABLE>

<br><br><br>
	



<!-- ------------------ Spouse or Additional Insured --------------- -->
	
<b>Spouse or Additional Insured</b>
<br>
<hr size=1 width=550>	
		
	<TABLE style="font-size:11px">
	<TR>
		<TD ALIGN="RIGHT"> Name</TD>
		<TD><INPUT TYPE="TEXT" NAME="1g" class="txt" ></TD>
	</TR>
		
	<TR>
		<TD ALIGN="RIGHT">Occupation</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="2g" class="txt"></TD>
	</TR>	
	
	<TR>
		<TD ALIGN="RIGHT">Date of Birth</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="3g" class="txt"></TD>
	</TR>	
	<TR>
		<TD ALIGN="RIGHT" valign=top>SSN</TD>
		<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="ssnSpouse" class="txt"></TD>
		<TD></td>	
        <TD></td>	
        <TD></td>					
	</TR>
	</TABLE>

<br><br><br>




<!-- ------------------ Current Carrier --------------- -->
	
<b>Current Homeowners Insurance Information</b>
<br>
<hr size=1 width=550>	
		
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR>
		<TD ALIGN="RIGHT" VALIGN="CENTER">Company Name <I>(not agency)</I>: </TD>
		<TD VALIGN="TOP"><INPUT  TYPE="TEXT" NAME="1a" SIZE="40" MAXLENGTH="50"></TD>
	</TR>
	<TR>
		<TD ALIGN="RIGHT" VALIGN="CENTER">Policy Expiration Date: </TD>
		<TD VALIGN="TOP"><INPUT  TYPE="TEXT" NAME="2a" SIZE="15" MAXLENGTH="50"> &#160; Premium Amount: $<INPUT  TYPE="TEXT" NAME="3a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
	<TR>
		<TD ALIGN="RIGHT" VALIGN="CENTER">Dwelling Amount Insured For:</TD>
		<TD VALIGN="TOP">$<INPUT  TYPE="TEXT" NAME="4a" SIZE="10" MAXLENGTH="50"> &#160; &#160;  Policy Type: <INPUT TYPE="RADIO" NAME="5a" VALUE="Primary">Primary <INPUT TYPE="RADIO" NAME="5a" VALUE="Secondary">Secondary</TD>
	</TR>
	<TR>
		<TD ALIGN="RIGHT" VALIGN="CENTER">Contents Amount Insured For:</TD>
		<TD VALIGN="TOP">$<INPUT  TYPE="TEXT" NAME="6a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
	
	<TR>
		<TD ALIGN="RIGHT" VALIGN="CENTER">Liability Coverage Limit:</TD>
		<TD VALIGN="TOP">$<INPUT  TYPE="TEXT" NAME="7a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
	
	<TR>
		<TD ALIGN="RIGHT" VALIGN="CENTER">Deductible: Clause 1</TD>
		<TD VALIGN="TOP"><INPUT  TYPE="TEXT" NAME="8a" SIZE="10" MAXLENGTH="50"> &nbsp;&nbsp;&nbsp; Clause 2 <INPUT  TYPE="TEXT" NAME="9a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
</TABLE>

<br><br><br>




<!-- ------------------ Home Information --------------- -->
	
<b>Home Information</b>
<br>
<hr size=1 width=550>	

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
<TR>
	<TD ALIGN="RIGHT">Address</TD>
	<TD VALIGN="TOP"><INPUT TYPE="TEXT" NAME="1b" class="txt"></TD>
</TR>	
<TR>
	<TD ALIGN="RIGHT">City</td>
	<TD><INPUT TYPE="TEXT" NAME="2b"  class="txt">
</TR>	
<TR>
	<TD ALIGN="RIGHT">State</TD>
	<TD><INPUT TYPE="TEXT" NAME="3b"  class="txt" style="width:80px">&nbsp;Zip&nbsp;<INPUT TYPE="TEXT" NAME="4b" class="txt"  style="width:100px"></TD> 
</TR>	
<TR>
	<TD ALIGN="RIGHT" VALIGN="CENTER">How Long At This Address: </TD>
	<TD VALIGN="TOP"><INPUT  TYPE="TEXT" NAME="5b" SIZE="15" MAXLENGTH="50"> &#160; &#160; Year Home Was Built: <INPUT  TYPE="TEXT" NAME="6b" SIZE="4" MAXLENGTH="4"></TD>
</TR>
<TR>
	<TD ALIGN="RIGHT" VALIGN="CENTER">Sq. Footage (excluding garage<BR>and basement): </TD>
	<TD VALIGN="TOP"><INPUT  TYPE="TEXT" NAME="7b" SIZE="5" MAXLENGTH="50"> sq. ft. &#160; &#160; &#160; &#160;# of Claims In Last 3 Years: <INPUT  TYPE="TEXT" NAME="8b" SIZE="2" MAXLENGTH="10"></TD>
</TR>
<TR>
	<TD ALIGN="RIGHT" VALIGN="CENTER">New Home Purchase? </TD>
	<TD VALIGN="TOP"><INPUT  TYPE="CHECKBOX" NAME="9b">&#160; &#160; &#160; &#160;# Closing Date: <INPUT  TYPE="TEXT" NAME="10b" SIZE="2">&#160; &#160; &#160; &#160;# Purchase Price: <INPUT  TYPE="TEXT" NAME="11b" SIZE="2"></TD>
</TR>

<tr>
	<td align="right"> Occupants </td>
    <td align="left">
        <SELECT CLASS="quote" style="width:90" NAME="occupancy">
		<OPTION value="Owner Occupied">Owner Occupied</OPTION> 
		<OPTION value="Tenant Occupied">Tenant Occupied</OPTION>
		<OPTION value="Vacant">Vacant</OPTION>
        </SELECT>
    </td>
</tr>
</TABLE>
				
				
<br><br><br>

<!-- ------------------ Structure Information --------------- -->
	
<b>Structure Information</b>
<br>
<hr size=1 width=550>	

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">

    <tr>
		<td align="right">
        	Updates To Electrical?
        </td>
        
        <td align="left">
			<INPUT TYPE="RADIO" NAME="electricUpdate" VALUE="Yes">Yes <INPUT TYPE="RADIO" NAME="electricUpdate" VALUE="no">No        	
        </td>  
        
        <td align="right">
        	If so, what year 
        </td>
        
        <td align="left">    
        	<INPUT  TYPE="TEXT" NAME="electricUpdateDate" SIZE="4" MAXLENGTH="4">
        </td>
    </tr>

    <tr>
		<td align="right">
        	Updates To Plumbing?
        </td>
        <td align="left">
			<INPUT TYPE="RADIO" NAME="plumbingUpdate" VALUE="Yes">Yes <INPUT TYPE="RADIO" NAME="plumbingUpdate" VALUE="no">No        	
        </td>  
        <td align="right">
        	If so, what year
        </td> 
        <td align="left">    
        	<INPUT  TYPE="TEXT" NAME="plumbingUpdateDate" SIZE="4" MAXLENGTH="4">
        </td>

    </tr>


	<TR VALIGN="TOP">
		<TD><CENTER>Type</TD>
		<TD><CENTER>Construction</TD>
		<TD><CENTER>Roof</TD>
		<TD><CENTER>Foundation</TD>
		<TD><CENTER></TD>
	</TR>
    
	<TR VALIGN="TOP">
		<TD><CENTER><SELECT  CLASS="quote" NAME="1c"><OPTION>1 Story<OPTION>1 1/2 Story<OPTION>2 Story<OPTION>Split Level<OPTION>Bi-Level<OPTION>Other</SELECT></TD>
		<TD><CENTER><SELECT  CLASS="quote" NAME="2c" SIZE="1"><OPTION>Frame<OPTION>Stucco<OPTION>Veneer<OPTION>Masonry<OPTION>Other</SELECT></TD>
		<TD><CENTER><SELECT  CLASS="quote" NAME="3c">	<OPTION>Asphalt Shingle	<OPTION>Wood Shingle<OPTION>Tile or Slate <OPTION>Steel	<OPTION>Other	</SELECT></TD>
		<TD><CENTER><SELECT  CLASS="quote" NAME="4c">	<OPTION>Basement	<OPTION>Crawl Space	<OPTION>Slab	<OPTION>Other	</SELECT></TD>
		<TD><CENTER></TD>
	</TR>
	<TR>
		<TD>Garage</TD>
		<TD></TD>
		<TD><CENTER>	Age of roof: <INPUT  TYPE="TEXT" NAME="6c" SIZE="3" MAXLENGTH="3">yrs.</TD>
		<TD></TD>
		<TD><CENTER></TD>
	</TR>
    
	<TR>
		<TD><SELECT  CLASS="quote" NAME="5c">	<OPTION>1 Car	<OPTION>2 Car	<OPTION>3 Car	<OPTION>4 Car	<OPTION>None	</SELECT></TD>
		<TD></TD>
		<TD></TD>
		<TD></TD>
		<TD></TD>
	</TR>
    
	<TR>
		<TD><SELECT CLASS="quote"   NAME="7c">	<OPTION>Attached	<OPTION>Detached	<OPTION>Basement	<OPTION>Built-in	<OPTION>Car Port	<OPTION>None	</SELECT>	</TD>
		<TD></TD>
		<TD></TD>
		<TD></TD>
		<TD></TD>
	</TR>
    
</TABLE>

<br><br><br>


<!-- ------------------ Features --------------- -->
	
<b>Features</b>
<br>
<hr size=1 width=550>	
			
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR VALIGN="TOP">
		<TD><CENTER>Bathrooms</TD>
		<TD><CENTER>Deck/Porch/Patio</TD>
		<TD><CENTER>Fireplaces</TD>
	</TR>
	<TR VALIGN="TOP" >
		<TD ALIGN="RIGHT"><NOBR># of Full: <INPUT  TYPE="TEXT" NAME="1d" SIZE="2" MAXLENGTH="2">&#160;</NOBR><BR><NOBR># of Half: <INPUT  TYPE="TEXT" NAME="2d" SIZE="2" MAXLENGTH="2">&#160;</NOBR></TD>
		<TD ALIGN="RIGHT"><NOBR>Deck Sq. Ft.: <INPUT  TYPE="TEXT" NAME="5d" SIZE="4" MAXLENGTH="6">&#160;</NOBR><BR><NOBR>Porch Sq. Ft.: <INPUT  TYPE="TEXT" NAME="6d" SIZE="4" MAXLENGTH="6">&#160;</NOBR><BR><NOBR>Screened Patio Sq. Ft.: <INPUT  TYPE="TEXT" NAME="7d" SIZE="4" MAXLENGTH="6">&#160;</NOBR></TD>
		<TD ALIGN="RIGHT"><NOBR># of Chimneys: <INPUT  TYPE="TEXT" NAME="8d" SIZE="2" MAXLENGTH="2">&#160;</NOBR><BR><NOBR># of Hearths: <INPUT  TYPE="TEXT" NAME="9d" SIZE="2" MAXLENGTH="2">&#160;</NOBR></TD>
	</TR>
</TABLE>
		
<br><br><br>

<!-- ------------------ Additional Features --------------- -->
	
<b>Additional Features</b>
<br>
<hr size=1 width=550>	

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR VALIGN="TOP">
		<TD><CENTER>Heating System</TD>
		<TD><CENTER>Security Alarm</TD>
		<TD><CENTER>Fire Alarm</TD>
	</TR>
	<TR VALIGN="TOP" >
		<TD><CENTER>
			<SELECT  NAME="1e"  class="quote">
			<OPTION>None
			<OPTION>Electric
			<OPTION>Gas
			<OPTION>Oil
			<OPTION>Propane
			<OPTION>Solar
			<OPTION>Other
			</SELECT>
		</TD>
		<TD><CENTER><SELECT class="quote" NAME="4e"><OPTION>None<OPTION>Monitored<OPTION>Not Monitored</SELECT></TD>
		<TD><CENTER><SELECT class="quote" NAME="5e"><OPTION>None<OPTION>Monitored<OPTION>Not Monitored</SELECT></TD>
	</TR>
</TABLE>

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR VALIGN="TOP">
		<TD><CENTER>Central Air</TD>
		<TD><CENTER>Central Vac</TD>
		<TD><CENTER>Smoke Detector</TD>
		<TD><CENTER>Swimming Pool</TD>
	</TR>
	<TR VALIGN="TOP" >
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="2e" VALUE="Yes"> Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="3e" VALUE="Yes"> Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="6e" VALUE="Yes"> Yes</TD>
		<TD><CENTER><INPUT TYPE="CHECKBOX" NAME="7e" VALUE="Yes"> Yes</TD>
	</TR>
</TABLE>
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" style="font-size:11px">
	<TR>
		<TD>Dogs?</TD>
		<TD><INPUT TYPE="CHECKBOX" NAME="8e" VALUE="Yes"> Yes &nbsp;&nbsp;Breed:<INPUT  TYPE="TEXT" NAME="9e" SIZE="2" MAXLENGTH="50"></TD>
		<td width=30></td>		
		<TD>Trampoline?</TD>
		<TD><INPUT TYPE="CHECKBOX" NAME="10e" VALUE="Yes"> Yes</TD>
	</tr>
	<tr>
		<TD>Acreage?</TD>
		<TD><INPUT TYPE="CHECKBOX" NAME="11e" VALUE="Yes"> Yes &nbsp;&nbsp;How many acres:<INPUT  TYPE="TEXT" NAME="12e" SIZE="2" MAXLENGTH="10"></TD>
	</TR>
</table>

<br><br><br>




<!-- ------------------ Additional Comments --------------- -->

<b>Additional Comments</b>
<br>
<hr size=1 width=550>	
					
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
<TR>
	<TD>
		<CENTER>
		<I>Describe any claims/losses in the last 3 years</I>
	</TD>
</TR>
<TR VALIGN="TOP">
	<TD><CENTER><TEXTAREA CLASS="searchboxes" NAME="1f" COLS="55" ROWS="4" WRAP="PHYSICAL"></TEXTAREA></TD>
</TR>
<TR>
	<TD>
		<br>
		<CENTER>
		<I>
		Please give any additional comments you feel appropriate for this quotation. If you<br>
		have additional information where there was not enough space, please enter it here.</I>
	</TD>
</TR>
<TR VALIGN="TOP">
	<TD><CENTER><TEXTAREA CLASS="searchboxes" NAME="2f" COLS="55" ROWS="4" WRAP="PHYSICAL"></TEXTAREA></TD>
</TR>

</TABLE>

<br>
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