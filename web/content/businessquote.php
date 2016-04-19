<FORM name="form1" METHOD="POST" action="businessquoteAction.php">
<input type="hidden" name=toEmail value="<? echo $mainEmail?>">

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
		<TD><INPUT class="txt" TYPE="TEXT" NAME="1"  ></TD>
		<TD width=50></td>
		<TD ALIGN="RIGHT">Email Address</TD>
		<TD VALIGN="TOP"><INPUT class="txt" TYPE="TEXT" NAME="10" ></TD>
	</TR>
		
	<TR>
		<TD ALIGN="RIGHT">Address</TD>
		<TD VALIGN="TOP"><INPUT class="txt" TYPE="TEXT" NAME="2" ></TD>
		<TD></td>					
		<TD ALIGN="RIGHT">Day Phone</TD>
		<TD VALIGN="TOP"><INPUT class="txt" TYPE="TEXT" NAME="6" ></TD> 
	</TR>	
	
	<TR>
		<TD ALIGN="RIGHT">City</td>
		<TD><INPUT class="txt" TYPE="TEXT" NAME="3"  >
		<TD></TD>
		<TD ALIGN="RIGHT">Night Phone</TD>
		<TD VALIGN="TOP"><INPUT class="txt" TYPE="TEXT" NAME="7" ></TD> 
	</TR>	
	<TR>
		<TD ALIGN="RIGHT">State</TD>
		<TD><INPUT class="txt" TYPE="TEXT" NAME="4"   style="width:80px">&nbsp;Zip&nbsp;<INPUT TYPE="TEXT" NAME="5"   class="txt" style="width:100px"></TD> 
		<TD></TD>
		<TD ALIGN="RIGHT">Best Time to Call</TD>
		<TD VALIGN="TOP">
			<INPUT TYPE="TEXT" NAME="8"   style="width:45px"> &#160; 
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
	
<!-- ------------------ Business Information --------------- -->

<b>Business Information</b>
<br>
<hr size=1 width=550>	
					
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="2" WIDTH="100%" style="font-size:11px">
<TR VALIGN="TOP">
	<TD align="right">Business Name:</TD>
	<TD><INPUT class="txt"  TYPE="TEXT" NAME="1a"  MAXLENGTH="50"></TD>
</TR>
<TR VALIGN="TOP">
	<TD align="right">Number of Employees:</TD>
	<TD><INPUT class="txt"  TYPE="TEXT" NAME="2a"  MAXLENGTH="50"></TD>
</TR>
<TR VALIGN="TOP">
	<TD align="right">Description:</TD>
	<TD><TEXTAREA class="txt" NAME="3a" COLS="45" ROWS="4" WRAP="PHYSICAL" style="width:300px"></TEXTAREA></TD>
</TR>
</TABLE>
<center>
<br>
<font style="font-size:10px">
Please click on the <b>"Submit Quote"</b> button to send your quote request.<br>
<i>One of our representatives will respond to your submission as soon as possible.</i>

<br><br>



<input type="submit" value="Submit Quote">



</FORM>
<font style="font-size:9px">
Submission of quote request form to this agency does not constitute a binding confirmation of new or revised insurance coverage.