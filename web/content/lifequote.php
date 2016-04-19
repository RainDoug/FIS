<FORM name="form1" METHOD="POST" action="lifequoteAction.php">
<input type="hidden" name="toEmail" value="<?PHP echo $mainEmail?>"/>

<p style="font-size:10px"> 
		<br />
        <br />        

		Please complete the first section of this form in order to receive a response from an agent. Any other information you would like to enter on this form is optional.  Due to certain limitations, we may not be able to quote.
		<br />
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
		<TD><INPUT TYPE="TEXT" NAME="3"  class="txt"></TD>
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

<br><br><br>
	
<!-- ------------------ Information About Yourself And Family --------------- -->

<b>Personal Information</b> <I>Please enter information below for all to be covered.</I>
<br>
<hr size=1 width=550>	

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR BGCOLOR="#dedede">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">&#160;</TD>
		<TD BGCOLOR="#dedede"><CENTER>Self</TD>
		<TD BGCOLOR="#dedede"><CENTER>Spouse</TD>
		<TD BGCOLOR="#dedede"><CENTER>Child #1</TD>
		<TD BGCOLOR="#dedede"><CENTER>Child #2</TD>
		<TD BGCOLOR="#dedede"><CENTER>Child #3</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Name:</TD>
		<TD><CENTER><B>Self</B></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="1a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="2a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="3a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="4a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Date of<BR>Birth:</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="5a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="6a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="7a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="8a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="9a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Sex:</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="10a" VALUE="M">M &#160; <INPUT TYPE="RADIO" NAME="10a" VALUE="F">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="11a" VALUE="M">M &#160; <INPUT TYPE="RADIO" NAME="11a" VALUE="F">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="12a" VALUE="M">M &#160; <INPUT TYPE="RADIO" NAME="12a" VALUE="F">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="13a" VALUE="M">M &#160; <INPUT TYPE="RADIO" NAME="13a" VALUE="F">F</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="14a" VALUE="M">M &#160; <INPUT TYPE="RADIO" NAME="14a" VALUE="F">F</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Marital Status:</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="15a" VALUE="Married">M &#160; <INPUT TYPE="RADIO" NAME="15a" VALUE="Single">S</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="16a" VALUE="Married">M &#160; <INPUT TYPE="RADIO" NAME="16a" VALUE="Single">S</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="17a" VALUE="Married">M &#160; <INPUT TYPE="RADIO" NAME="17a" VALUE="Single">S</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="18a" VALUE="Married">M &#160; <INPUT TYPE="RADIO" NAME="18a" VALUE="Single">S</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="19a" VALUE="Married">M &#160; <INPUT TYPE="RADIO" NAME="19a" VALUE="Single">S</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Occupation:</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="20a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="21a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="22a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="23a" SIZE="10" MAXLENGTH="50"></TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="24a" SIZE="10" MAXLENGTH="50"></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Height:</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="25a" SIZE="1" MAXLENGTH="1">ft. &#160; <INPUT  TYPE="TEXT" NAME="26a" SIZE="2" MAXLENGTH="2">in.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="27a" SIZE="1" MAXLENGTH="1">ft. &#160; <INPUT  TYPE="TEXT" NAME="28a" SIZE="2" MAXLENGTH="2">in.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="29a" SIZE="1" MAXLENGTH="1">ft. &#160; <INPUT  TYPE="TEXT" NAME="30a" SIZE="2" MAXLENGTH="2">in.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="31a" SIZE="1" MAXLENGTH="1">ft. &#160; <INPUT  TYPE="TEXT" NAME="32a" SIZE="2" MAXLENGTH="2">in.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="33a" SIZE="1" MAXLENGTH="1">ft. &#160; <INPUT  TYPE="TEXT" NAME="34a" SIZE="2" MAXLENGTH="2">in.</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Weight:</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="35a" SIZE="3" MAXLENGTH="3">lbs.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="36a" SIZE="3" MAXLENGTH="3">lbs.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="37a" SIZE="3" MAXLENGTH="3">lbs.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="38a" SIZE="3" MAXLENGTH="3">lbs.</TD>
		<TD><CENTER><INPUT  TYPE="TEXT" NAME="39a" SIZE="3" MAXLENGTH="3">lbs.</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" ALIGN="RIGHT">Have you (they) had<br> any of the following <br>health conditions:</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="40a" VALUE="Heart">Heart<BR><INPUT TYPE="CHECKBOX" NAME="41a" VALUE="Cancer">Cancer<BR><INPUT TYPE="CHECKBOX" NAME="42a" VALUE="Diabetes">Diabetes<BR><INPUT TYPE="CHECKBOX" NAME="43a" VALUE="HBP">HBP</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="44a" VALUE="Heart">Heart<BR><INPUT TYPE="CHECKBOX" NAME="45a" VALUE="Cancer">Cancer<BR><INPUT TYPE="CHECKBOX" NAME="46a" VALUE="Diabetes">Diabetes<BR><INPUT TYPE="CHECKBOX" NAME="47a" VALUE="HBP">HBP</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="48a" VALUE="Heart">Heart<BR><INPUT TYPE="CHECKBOX" NAME="49a" VALUE="Cancer">Cancer<BR><INPUT TYPE="CHECKBOX" NAME="50a" VALUE="Diabetes">Diabetes<BR><INPUT TYPE="CHECKBOX" NAME="51a" VALUE="HBP">HBP</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="52a" VALUE="Heart">Heart<BR><INPUT TYPE="CHECKBOX" NAME="53a" VALUE="Cancer">Cancer<BR><INPUT TYPE="CHECKBOX" NAME="54a" VALUE="Diabetes">Diabetes<BR><INPUT TYPE="CHECKBOX" NAME="55a" VALUE="HBP">HBP</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="56a" VALUE="Heart">Heart<BR><INPUT TYPE="CHECKBOX" NAME="57a" VALUE="Cancer">Cancer<BR><INPUT TYPE="CHECKBOX" NAME="58a" VALUE="Diabetes">Diabetes<BR><INPUT TYPE="CHECKBOX" NAME="59a" VALUE="HBP">HBP</TD>
	</TR>
	
	<!-- ------------------ Tobacco Information --------------- -->
	
	<TR BGCOLOR="#f6f6f6">
		<TD COLSPAN="6" BGCOLOR="#dedede"><CENTER><I>Please enter information below about TOBACCO usage for all to be covered.</I></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" ALIGN="RIGHT">Have you (they)<br> ever used tobacco or <br>nicotine products?:</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="RADIO" NAME="60a" VALUE="NEVER">Never<BR><INPUT TYPE="RADIO" NAME="60a" VALUE="PRESENT">Present<BR><INPUT TYPE="RADIO" NAME="60a" VALUE="QUIT">Quit**</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="RADIO" NAME="61a" VALUE="NEVER">Never<BR><INPUT TYPE="RADIO" NAME="61a" VALUE="PRESENT">Present<BR><INPUT TYPE="RADIO" NAME="61a" VALUE="QUIT">Quit**</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="RADIO" NAME="62a" VALUE="NEVER">Never<BR><INPUT TYPE="RADIO" NAME="62a" VALUE="PRESENT">Present<BR><INPUT TYPE="RADIO" NAME="62a" VALUE="QUIT">Quit**</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="RADIO" NAME="63a" VALUE="NEVER">Never<BR><INPUT TYPE="RADIO" NAME="63a" VALUE="PRESENT">Present<BR><INPUT TYPE="RADIO" NAME="63a" VALUE="QUIT">Quit**</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="RADIO" NAME="64a" VALUE="NEVER">Never<BR><INPUT TYPE="RADIO" NAME="64a" VALUE="PRESENT">Present<BR><INPUT TYPE="RADIO" NAME="64a" VALUE="QUIT">Quit**</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" ALIGN="RIGHT">Type of <br>Tobacco used?:</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="65a" VALUE="SMOKELESS">smokeless<BR><INPUT TYPE="CHECKBOX" NAME="66a" VALUE="CIGAR">cigar<BR><INPUT TYPE="CHECKBOX" NAME="67a" VALUE="CIGARETTE">cigarette<BR><INPUT TYPE="CHECKBOX" NAME="68a" VALUE="PIPE">pipe<BR><INPUT TYPE="CHECKBOX" NAME="69a" VALUE="PATCH or GUM">patch/gum</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="70a" VALUE="SMOKELESS">smokeless<BR><INPUT TYPE="CHECKBOX" NAME="71a" VALUE="CIGAR">cigar<BR><INPUT TYPE="CHECKBOX" NAME="72a" VALUE="CIGARETTE">cigarette<BR><INPUT TYPE="CHECKBOX" NAME="73a" VALUE="PIPE">pipe<BR><INPUT TYPE="CHECKBOX" NAME="74a" VALUE="PATCH or GUM">patch/gum</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="75a" VALUE="SMOKELESS">smokeless<BR><INPUT TYPE="CHECKBOX" NAME="76a" VALUE="CIGAR">cigar<BR><INPUT TYPE="CHECKBOX" NAME="77a" VALUE="CIGARETTE">cigarette<BR><INPUT TYPE="CHECKBOX" NAME="78a" VALUE="PIPE">pipe<BR><INPUT TYPE="CHECKBOX" NAME="79a" VALUE="PATCH or GUM">patch/gum</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="80a" VALUE="SMOKELESS">smokeless<BR><INPUT TYPE="CHECKBOX" NAME="81a" VALUE="CIGAR">cigar<BR><INPUT TYPE="CHECKBOX" NAME="82a" VALUE="CIGARETTE">cigarette<BR><INPUT TYPE="CHECKBOX" NAME="83a" VALUE="PIPE">pipe<BR><INPUT TYPE="CHECKBOX" NAME="84a" VALUE="PATCH or GUM">patch/gum</TD>
		<TD VALIGN="CENTER"><INPUT TYPE="CHECKBOX" NAME="85a" VALUE="SMOKELESS">smokeless<BR><INPUT TYPE="CHECKBOX" NAME="86a" VALUE="CIGAR">cigar<BR><INPUT TYPE="CHECKBOX" NAME="87a" VALUE="CIGARETTE">cigarette<BR><INPUT TYPE="CHECKBOX" NAME="88a" VALUE="PIPE">pipe<BR><INPUT TYPE="CHECKBOX" NAME="89a" VALUE="PATCH or GUM">patch/gum</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" VALIGN="TOP" ALIGN="RIGHT">Packs per day:</TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="90a" SIZE="3" MAXLENGTH="50"><BR></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="91a" SIZE="3" MAXLENGTH="50"><BR></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="92a" SIZE="3" MAXLENGTH="50"><BR></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="93a" SIZE="3" MAXLENGTH="50"><BR></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="94a" SIZE="3" MAXLENGTH="50"><BR></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" VALIGN="TOP" ALIGN="RIGHT"># of yrs smoked:</TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="95a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="96a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="97a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="98a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="99a" SIZE="3" MAXLENGTH="50"></TD>
	</TR>
	
	<!-- ------------------ Former Tobacco User Information --------------- -->
	
	<TR BGCOLOR="#f6f6f6">
		<TD COLSPAN="6" BGCOLOR="#dedede"><CENTER><I>**Quit -- Please enter information if any to be insured are FORMER TOBACCO users.</I></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" VALIGN="TOP" ALIGN="RIGHT">**Quit Month/Year:</TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="100a" SIZE="9" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="101a" SIZE="9" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="102a" SIZE="9" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="103a" SIZE="9" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="104a" SIZE="9" MAXLENGTH="50"></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" VALIGN="TOP" ALIGN="RIGHT">Packs per day:</TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="105a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="106a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="107a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="108a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="109a" SIZE="3" MAXLENGTH="50"></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede" VALIGN="TOP" ALIGN="RIGHT">Years smoked?:</TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="110a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="111a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="112a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="113a" SIZE="3" MAXLENGTH="50"></TD>
		<TD VALIGN="CENTER"><CENTER><INPUT  TYPE="TEXT" NAME="114a" SIZE="3" MAXLENGTH="50"></TD>
	</TR>
</TABLE>

<br><br><br>

<!-- ------------------ Individual Histories --------------- -->

<b>Individual Histories</b> <I>Please list any individual histories on each person to be covered.</I>
<br>
<hr size=1 width=550>	

<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR BGCOLOR="#f6f6f6">
		<TD VALIGN="CENTER" ALIGN="RIGHT" ROWSPAN="2" BGCOLOR="#dedede">Self</TD>
		<TD VALIGN="TOP" BGCOLOR="#dedede"><CENTER>Is person to be insured currently on any prescription medications for<BR>ongoing health conditions?<INPUT TYPE="RADIO" NAME="1b" VALUE="Yes">Yes &#160;<INPUT TYPE="RADIO" NAME="1b" VALUE="No">No &#160; &#160; If <B>yes</B>, please list below.<BR>Also, please DISCLOSE <I>any and all</I> health conditions you have (or had in the past):</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD><CENTER><TEXTAREA  NAME="2b" COLS="50" ROWS="2" WRAP="PHYSICAL"></TEXTAREA></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD VALIGN="CENTER" ALIGN="RIGHT" ROWSPAN="2" BGCOLOR="#dedede">Spouse</TD>
		<TD VALIGN="TOP" BGCOLOR="#dedede"><CENTER>Is person to be insured currently on any prescription medications for<BR>ongoing health conditions?<INPUT TYPE="RADIO" NAME="3b" VALUE="Yes">Yes &#160;<INPUT TYPE="RADIO" NAME="3b" VALUE="No">No &#160; &#160; If <B>yes</B>, please list below.<BR>Also, please DISCLOSE <I>any and all</I> health conditions they have (or had in the past):</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD><CENTER><TEXTAREA  NAME="4b" COLS="50" ROWS="2" WRAP="PHYSICAL"></TEXTAREA></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD VALIGN="CENTER" ALIGN="RIGHT" ROWSPAN="2" BGCOLOR="#dedede">Child #1</TD>
		<TD VALIGN="TOP" BGCOLOR="#dedede"><CENTER>Is person to be insured currently on any prescription medications for<BR>ongoing health conditions?<INPUT TYPE="RADIO" NAME="5b" VALUE="Yes">Yes &#160;<INPUT TYPE="RADIO" NAME="5b" VALUE="No">No &#160; &#160; If <B>yes</B>, please list below.<BR>Also, please DISCLOSE <I>any and all</I> health conditions they have (or had in the past):</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD><CENTER><TEXTAREA  NAME="6b" COLS="50" ROWS="2" WRAP="PHYSICAL"></TEXTAREA></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD VALIGN="CENTER" ALIGN="RIGHT" ROWSPAN="2" BGCOLOR="#dedede">Child #2</TD>
		<TD VALIGN="TOP" BGCOLOR="#dedede"><CENTER>Is person to be insured currently on any prescription medications for<BR>ongoing health conditions?<INPUT TYPE="RADIO" NAME="7b" VALUE="Yes">Yes &#160;<INPUT TYPE="RADIO" NAME="7b" VALUE="No">No &#160; &#160; If <B>yes</B>, please list below.<BR>Also, please DISCLOSE <I>any and all</I> health conditions they have (or had in the past):</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD><CENTER><TEXTAREA  NAME="8b" COLS="50" ROWS="2" WRAP="PHYSICAL"></TEXTAREA></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD VALIGN="CENTER" ALIGN="RIGHT" ROWSPAN="2" BGCOLOR="#dedede">Child #3</TD>
		<TD VALIGN="TOP" BGCOLOR="#dedede"><CENTER>Is person to be insured currently on any prescription medications for<BR>ongoing health conditions?<INPUT TYPE="RADIO" NAME="9b" VALUE="Yes">Yes &#160;<INPUT TYPE="RADIO" NAME="9b" VALUE="No">No &#160; &#160; If <B>yes</B>, please list below.<BR>Also, please DISCLOSE <I>any and all</I> health conditions they have (or had in the past):</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD><CENTER><TEXTAREA  NAME="10b" COLS="50" ROWS="2" WRAP="PHYSICAL"></TEXTAREA></TD>
	</TR>
</TABLE>
				
<br><br><br>

<!-- ------------------ Life Coverages --------------- -->

<b>Life Coverages</b>
<br>
<hr size=1 width=550>	
			
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
	<TR BGCOLOR="#f6f6f6">
		<TD BGCOLOR="#dedede">&#160;</TD>
		<TD BGCOLOR="#dedede"><CENTER>Self</TD>
		<TD BGCOLOR="#dedede"><CENTER>Spouse</TD>
		<TD BGCOLOR="#dedede"><CENTER>Child #1</TD>
		<TD BGCOLOR="#dedede"><CENTER>Child #2</TD>
		<TD BGCOLOR="#dedede"><CENTER>Child #3</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Amount of<BR>Coverage:</TD>
		<TD><CENTER>$<INPUT  TYPE="TEXT" NAME="1c" SIZE="10" MAXLENGTH="20"></TD>
		<TD><CENTER>$<INPUT  TYPE="TEXT" NAME="2c" SIZE="10" MAXLENGTH="20"></TD>
		<TD><CENTER>$<INPUT  TYPE="TEXT" NAME="3c" SIZE="10" MAXLENGTH="20"></TD>
		<TD><CENTER>$<INPUT  TYPE="TEXT" NAME="4c" SIZE="10" MAXLENGTH="20"></TD>
		<TD><CENTER>$<INPUT  TYPE="TEXT" NAME="5c" SIZE="10" MAXLENGTH="20"></TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Type of<BR>Coverage:</TD>
		<TD><INPUT TYPE="RADIO" NAME="6c" VALUE="Term">Term<BR><INPUT TYPE="RADIO" NAME="6c" VALUE="Whole">Whole<BR><INPUT TYPE="RADIO" NAME="6c" VALUE="Universal">Universal</TD>
		<TD><INPUT TYPE="RADIO" NAME="7c" VALUE="Term">Term<BR><INPUT TYPE="RADIO" NAME="7c" VALUE="Whole">Whole<BR><INPUT TYPE="RADIO" NAME="7c" VALUE="Universal">Universal</TD>
		<TD><INPUT TYPE="RADIO" NAME="8c" VALUE="Term">Term<BR><INPUT TYPE="RADIO" NAME="8c" VALUE="Whole">Whole<BR><INPUT TYPE="RADIO" NAME="8c" VALUE="Universal">Universal</TD>
		<TD><INPUT TYPE="RADIO" NAME="9c" VALUE="Term">Term<BR><INPUT TYPE="RADIO" NAME="9c" VALUE="Whole">Whole<BR><INPUT TYPE="RADIO" NAME="9c" VALUE="Universal">Universal</TD>
		<TD><INPUT TYPE="RADIO" NAME="10c" VALUE="Term">Term<BR><INPUT TYPE="RADIO" NAME="10c" VALUE="Whole">Whole<BR><INPUT TYPE="RADIO" NAME="10c" VALUE="Universal">Universal</TD>
	</TR>
    <!---   TermLength -->
    <TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Term<BR>Length (Optional)</TD>
		<TD>		
        <SELECT CLASS="quote" style="width:90" NAME="termSelf">
		<OPTION>
		<OPTION value="10">10 Year</OPTION> 
		<OPTION value="15">15 Year</OPTION>
		<OPTION value="20">20 Year</OPTION>
		<OPTION value="25">25 Year</OPTION>
        <OPTION value="30">30 Year</OPTION>
        </SELECT>
        </TD>
		<TD>		
        <SELECT CLASS="quote" style="width:90" NAME="termSpouse">
		<OPTION>
		<OPTION value="10">10 Year</OPTION> 
		<OPTION value="15">15 Year</OPTION>
		<OPTION value="20">20 Year</OPTION>
		<OPTION value="25">25 Year</OPTION>
        <OPTION value="30">30 Year</OPTION>
        </SELECT>
		<TD>		
        <SELECT CLASS="quote" style="width:90" NAME="termC1">
		<OPTION>
		<OPTION value="10">10 Year</OPTION> 
		<OPTION value="15">15 Year</OPTION>
		<OPTION value="20">20 Year</OPTION>
		<OPTION value="25">25 Year</OPTION>
        <OPTION value="30">30 Year</OPTION>
        </SELECT>
		<TD>		
        <SELECT CLASS="quote" style="width:90" NAME="termC2">
		<OPTION>
		<OPTION value="10">10 Year</OPTION> 
		<OPTION value="15">15 Year</OPTION>
		<OPTION value="20">20 Year</OPTION>
		<OPTION value="25">25 Year</OPTION>
        <OPTION value="30">30 Year</OPTION>
        </SELECT>
		<TD>		
        <SELECT CLASS="quote" style="width:90" NAME="termC3">
		<OPTION>
		<OPTION value="10">10 Year</OPTION> 
		<OPTION value="15">15 Year</OPTION>
		<OPTION value="20">20 Year</OPTION>
		<OPTION value="25">25 Year</OPTION>
        <OPTION value="30">30 Year</OPTION>
        </SELECT>
        </TD>	
    </TR>
    <TR BGCOLOR="#f6f6f6"><TD ALIGN="RIGHT" BGCOLOR="#dedede">Disability<BR>Income:</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="11c" VALUE="Yes">Y &#160; <INPUT TYPE="RADIO" NAME="11c" VALUE="No">N</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="12c" VALUE="Yes">Y &#160; <INPUT TYPE="RADIO" NAME="12c" VALUE="No">N</TD>
		<TD><CENTER>N/A</TD>
		<TD><CENTER>N/A</TD>
		<TD><CENTER>N/A</TD>
	</TR>
	<TR BGCOLOR="#f6f6f6">
		<TD ALIGN="RIGHT" BGCOLOR="#dedede">Long Term<BR>Care:</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="13c" VALUE="Yes">Y &#160; <INPUT TYPE="RADIO" NAME="13c" VALUE="No">N</TD>
		<TD><CENTER><INPUT TYPE="RADIO" NAME="14c" VALUE="Yes">Y &#160; <INPUT TYPE="RADIO" NAME="14c" VALUE="No">N</TD>
		<TD><CENTER>N/A</TD>
		<TD><CENTER>N/A</TD>
		<TD><CENTER>N/A</TD>
	</TR>
</TABLE>

<br><br><br>

<!-- ------------------ Additional Comments --------------- -->

<b>Additional Comments</b>
<br>
<hr size=1 width=550>	
					
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
<TR BGCOLOR="#f6f6f6">
	<TD BGCOLOR="#dedede">
		<CENTER>
		<I>Please give any additional comments you feel appropriate for this 
		quotation. If you have additional children or other information where there
		was not enough space, please enter them here.</I>
	</TD>
</TR>
<TR VALIGN="TOP" BGCOLOR="#f6f6f6">
	<TD><CENTER><TEXTAREA  NAME="1d" COLS="55" ROWS="4" WRAP="PHYSICAL"></TEXTAREA></TD>
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