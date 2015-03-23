from vweb.htmltable import HtmlTable
from vweb.html import *

class Form2(object):

    def get(self):
        return '''
<div id="order_form2"><p align="center" class="style1" id="form2Intro">What container types do you want?:</p>
<center><table width="30%" cellpadding="5" cellspacing="0" >
<tbody>
<tr>
<td><div align="center" class="style1">Qty</div></td>
<td>&nbsp;</td>
<td><span class="style1">Container type</span></td>
</tr>
<tr>
<td><div align="center">
<input class="numberField" type="textfield" name="single_jar" size="5" />
</div></td>
<td>&nbsp;</td>
<td><span class="style2">Single Jar</span></td>
</tr>
<tr>
<td><div align="center">
<input class="numberField" type="textfield" name="multiple_jars" size="5" />
</div></td>
<td>&nbsp;</td>
<td><span class="style2">Multiple Jars</span></td>
</tr>
<tr>
<td><div align="center">
<input class="numberField" type="textfield" name="patient_scrap_mailer" size="5" />
</div></td>
<td>&nbsp;</td>
<td><span class="style2">Patient Scrap Mailer</span></td>
</tr>
</tbody>
</table>
</center><br/>

<div align="center">
   <br/>
   <span class="textButton" id="prev2">
      <img src='images/left_arrow.png'/>
   </span>

   <span class="textButton" id='next2'>
      <img src='images/right_arrow.png'/>   
   </span>
</div>
</div>
'''
