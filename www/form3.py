from vweb.htmltable import HtmlTable
from vweb.html import *

class Form3(object):

    def get(self):
        return '''
<div id="order_form3">
<p align="center" class="style1">Enter your shipping information</p>
<center> <table width="50%" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td width="29%"><span class="style2" id="your_name_text"> Name</span></td>
<td width="9%">&nbsp;</td>
<td width="62%"><input type="textfield" name="your_name" size="50" /></td>
</tr>
<tr>
<td><span class="style2" id="business_name_text">Business Name</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="business_name" size="50" /></td>
</tr>
<tr>
<td><span class="style2" id="address_text">Address</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="address" size="50" /></td>
</tr>
<tr>
<td><span class="style2" id="city_text">City</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="city" size="50" /></td>
</tr>
<tr>
<td><span class="style2" id="state_text">State</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="state" size="50" /></td>
</tr>
<tr>
<td><span class="style2" id="zip_text">Zip</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="zip" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><span class="style2" id="contact_name_text">Contact Name</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="contact_name" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><span class="style2" id="email_text">Email</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="email" size="50" /></td>
</tr>
<tr>
<td><span class="style2" id="confirm_email_text">Confirm Email</span></td>
<td>&nbsp;</td>
<td><input type="textfield" name="confirm_email" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><span class="style2" id="phone_number_text">Phone Number</span></td>
<td>&nbsp;</td>
<td><input type="textfield" class='phone_number' name="phone_number" size="50" /></td>
</tr>
</tbody>
</table>
</center>
&nbsp;
<div align="center">
   <br/>
   <span class="textButton style2 style5" id="prev3">
      <img src='images/left_arrow.png'/>
   </span>

   <span class="style4" id='next3'>
      <strong>[Submit Form]</strong>
   </span>
</div>

</div>
'''
