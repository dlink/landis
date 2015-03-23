from vweb.html import *

class Form1(object):

    def get(self):
        return '''
<div id="order_form1"><p align="center" class="style2">Please choose the option that best describes you:</p>
<div id="customer_type">
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<p>
<input type="radio" name="customer_type" value="1" />
<span class="style1"> Dentist<br />
<input type="radio" name="customer_type" value="2" />
Dentist Staff<br />
<input type="radio" name="customer_type" value="3" />
Patient<br />
<input type="radio" name="customer_type" value="4" />
Jeweler</span><br />
</p>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</div>
<br /><div id="dentist_info">
<p align="center"><span class="style1" id="dentist_name_container">Dentist Name: 
<input type="textfield" name="dentist_name" />
</span>
<span class="style1"><br />
<br>
Dentist Phone:</span><span id="dentist_phone_container"> <input type="textfield" class='phone_number' name="dentist_phone" />
</span> </p>
</div>
<blockquote>
<blockquote>
<div align="center">
   <br/>
   <span class="style4" id='next1'>
      <img src='images/right_arrow.png'/>   
   </span>
</div>
</blockquote>
</blockquote>

</div>
'''
