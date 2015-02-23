<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Swarming 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131201

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order a Container</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="defaultForm.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Lobster' rel='stylesheet' type='text/css'>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--Pages function-->
	    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	    <script type=text/javascript>
		function collapseElement(obj)
		{
			var el = document.getElementById(obj);
			el.style.display = 'none';
		}
		function expandElement(obj)
		{
			var el = document.getElementById(obj);
			el.style.display = '';
		}
		function collapsePages()
		{
			var numFormPages = 9;
			for(i=2; i <= numFormPages; i++)
			{
				currPageId = ('page_' + i);
				collapseElement(currPageId);
			}
		}
		</script>
        <style>
		.meter {
	width:235px;
	height: 20px;
	position: relative;
	border:solid 2px #000;
	background-color: #FFFFFF;
	text-align: center;
}
.meter > span {
	padding-left: 5px;
	display: block;
	height: 100%;
	background-color: #666666;
	position: relative;
	overflow: hidden;
}</style>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="collapsePages()">
<div id="logo">
	<div align="center"><a href="#" ><img src="images/landisBanner.jpg" alt="" width="1200" height="175" border="0" /></a>
    </div>
</div>
<div id="header">
  <div id="menu" class="container">
	<ul>
	  <li><a href="index.html" accesskey="1" title="">HOME</a></li>
		  		<li><a href="orderinfo.html" accesskey="1" title="">ORDER</a></li>
				<li><a href="shipinfo.html" accesskey="2" title="">SHIP</a></li>
				<li><a href="paymentinfo.html" accesskey="3" title="">PAYMENT</a></li>
				<li><a href="faq.html" accesskey="4" title="">FAQ</a></li>
				<li><a href="prices.html" accesskey="5" title="">LIVE MARKET UPDATES</a></li>
            	<li><a href="news.html" accesskey="6" title="">INDUSTRY NEWS</a></li>
            	<li class="current_page_item"><a href="about.html" accesskey="7" title="">ABOUT</a></li>
            	<li><a href="contact.html" accesskey="8" title="">CONTACT</a></li>
	  		</ul>
		</div>
	</div>

	<div id="page" class="container">
		<div id="content">
	  		<div class="title">

				<h2>Order a container</h2>


<!--Page one-->
<ul id="page_1">
    <li>
        <h4>What type of customer are you?</h4><br />
    </li>
    <li>
		<form id="order" action="processorder.php" method="post">
	    <input type="hidden" name="customerType" id="type" value="Dentist" />
		<input class="mainForm" onclick="collapseElement('page_1'); expandElement('page_2');" type="button" value="Dentist" /> 
		<input class="mainForm" onclick="collapseElement('page_1'); expandElement('page_3');" type="button" value="Dental Staff" /> 
		<input class="mainForm" onclick="collapseElement('page_1'); expandElement('page_4');" type="button" value="Patient" /> 
		<input class="mainForm" onclick="collapseElement('page_1'); expandElement('page_5');" type="button" value="Jeweler" /> 
    </li>
</ul>

<!--Page two-->
<ul id="page_2">
	<table width="100%">
    	<tr>
        	<td colspan="2">
    			<li>
        			<h4 align="left">What type of containers would you like to order?</h4>
    			</li>
       		</td>
       	</tr>
  		<tr>
        	<td width="46%" align="left" valign="top"><p align="center">Single Jar Box - 5x5x4 inches (Enter quantity) </p>
            </td>
    		<td width="54%" align="left" valign="top"><div align="left">
            	<span id="sprytextfield3">
      				<label>
      					<input name="singleJar2" type="text" id="singleJar2" value="0" />
      				</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
            	</span></div>
      		</td>
       	</tr>
  		<tr>
        	<td width="46%" align="left" valign="top"><p align="center">Multiple Jar Box - 7x5x4 inches (Enter quantity)</p>
			</td>
    		<td valign="top">
            	<div align="left">
            		<span id="sprytextfield6">
      					<label>
      						<input name="multipleJar2" type="text" id="multipleJar2" value="0" />
      					</label>
     				<span class="textfieldRequiredMsg">A value is required.</span>
              		</span>
              	</div>
          	</td>
  		</tr>
  		<tr>
        	<td valign="top"><p align="center">Patient Scrap Mailers - (Enter quantity) </p>
            </td>
    		<td valign="top">
            	<div align="left">
                	<span id="sprytextfield7">
      					<label>
      						<input name="patientScrapMailer" type="text" id="patientScrapMailer" value="0" />
      					</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
                    </span>
              	</div>
           	</td>
  		</tr>
  		<tr>
        	<td colspan="2">
            	<div align="center">
                </div>
           	</td>
       	</tr>
  		<tr>
    		<td colspan="2">
            	<div align="center">
           		</div>
           	</td>
  		</tr>
    	<tr>
        	<td colspan="2">
            	<li>
        			<div align="center">
          			 	<input class="mainForm" onclick="collapseElement('page_2'); expandElement('page_1');" type="button" value="Back" /> 
          				<input class="mainForm" onclick="collapseElement('page_2'); expandElement('page_6');" type="button" value="Continue" /> 
        			</div>
    			</li>
       		</td>
       	</tr>
   	</table>
</ul>

<!--Page three-->
<ul id="page_3">
	<table width="100%">
  		<tr>
        	<td colspan="3">
    			<li>
					<div align="left">Please provide the following information?</div>
    			</li>
       		</td>
       	</tr>
    	<tr>
        	<td width="28%">
            	<div align="left"></div>
    			<li>
      				<div align="left">Dentist Name:</div>
    			</li>
          	</td>
      		<td colspan="2">&nbsp;
            </td>
      	</tr>
    	<tr>
        	<td colspan="2">
            	<li>
      				<div align="left">Dentist Phone:</div>
    			</li>
           	</td>
      		<td width="72%">&nbsp;
            </td>
    	</tr>
    	<tr>
        	<td colspan="3">
            	<li>
      				<input class="mainForm" onclick="collapseElement('page_3'); expandElement('page_1');" type="button" value="Back" /> 
      				<input class="mainForm" onclick="collapseElement('page_3'); expandElement('page_8');" type="button" value="Continue" /> 
   				</li>
      		</td>
       	</tr>
	</table>
</ul>

<!--Page four-->
<ul id="page_4">
	<table width="100%">
    	<tr>
        	<td colspan="2">
    			<li>Please provide the following information?</li>
       		</td>
       	</tr>
        <tr>
        	<td>
        		<li></li>
       		</td>
       	</tr>
        <tr>
        	<td>
    			<li>Referring Dentist: <span id="sprytextfield4">
      				<label>
      					<input type="text" name="dentistName" id="dentistName" />
      				</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
                    </span>
              	</li>
       		</td>
       	</tr>
        <tr>
        	<td>
	    		<li>Dentist Phone: <span id="sprytextfield5">
      				<label>
      					<input type="text" name="dentistPhone" id="dentistPhone" />
      				</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
                    </span>
               	</li>
          	</td>
     	</tr>
		<tr>
        	<td>
   		 		<li>
   					<input class="mainForm" onclick="collapseElement('page_4'); expandElement('page_1');" type="button" value="Back" /> 
    				<input type="submit" value="Submit">
    			</li>
			</td>
       	</tr>
   	</table>
</ul>

<!--Page five-->
<ul id="page_5">
<table width="100%">
    	<tr>
        	<td colspan="2">
    			<li>
        			<h4 align="left">What type of containers would you like to order?</h4>
    			</li>
       		</td>
       	</tr>
  		<tr>
        	<td width="46%" align="left" valign="top"><p align="center">Single Jar Box - 5x5x4 inches (Enter quantity) </p>
            </td>
    		<td width="54%" align="left" valign="top"><div align="left">
            	<span id="sprytextfield3">
      				<label>
      					<input name="singleJar2" type="text" id="singleJar2" value="0" />
      				</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
            	</span></div>
      		</td>
       	</tr>
  		<tr>
        	<td valign="top"><p align="center">Multiple Jar Box - 7x5x4 inches (Enter quantity)</p><br />
			</td>
    		<td valign="top">
            	<div align="left">
            		<span id="sprytextfield6">
      					<label>
      						<input name="multipleJar2" type="text" id="multipleJar2" value="0" />
      					</label>
     				<span class="textfieldRequiredMsg">A value is required.</span>
              		</span>
              	</div>
          	</td>
  		</tr>

  		<tr>
        	<td colspan="2">
            	<div align="center">
                </div>
           	</td>
       	</tr>
  		<tr>
    		<td colspan="2">
            	<div align="center">
           		</div>
           	</td>
  		</tr>
    	<tr>
        	<td colspan="2">
            	<li>
        			<div align="center">
          			 	<input class="mainForm" onclick="collapseElement('page_9'); expandElement('page_5');" type="button" value="Back" /> 
          				<input class="mainForm" onclick="collapseElement('page_9'); expandElement('page_6');" type="button" value="Continue" /> 
        			</div>
    			</li>
       		</td>
       	</tr>
   	</table>
</ul>

<!--Page six-->
<ul id="page_6">
	<table width="100%">
		<tr>
        	<td colspan="2">
    			<li>
        			<h4 align="left">Please provide business information.</h4>
    			</li>
      		</td>
       	</tr>
    	<tr>
        	<td width="23%">
    			<li>
      				<div align="left">Your Name:      </div>
    			</li>
          	</td>
      		<td width="77%">
            	<div align="left">
                	<span id="sprytextfield25">
        				<label>
        					<input type="text" name="yourName" id="yourName" />
        				</label>
        				<span class="textfieldRequiredMsg">A value is required.</span>
                  	</span>
             	</div>
       		</td>
       	</tr>
    	<tr>
        	<td>
        		<li>
      				<div align="left">Business Name:      </div>
    			</li>
       		</td>
      		<td>
            	<div align="left">
                	<span id="sprytextfield26">
        				<label>
        					<input type="text" name="businessName" id="businessName" />
        				</label>
        				<span class="textfieldRequiredMsg">A value is required.</span>
                   	</span>
       			</div>
          	</td>
    	</tr>
    	<tr>
        	<td>
        		<li>
      				<div align="left">
        				Address:
                   	</div>
    			</li>
          	</td>
	  		<td>
            	<div align="left">
                	<span id="sprytextfield27">
        				<label>
        					<input type="text" name="address" id="address" />
        				</label>
        			<span class="textfieldRequiredMsg">A value is required.</span>
                 	</span>
             	</div>
         	</td>
    	</tr>
   		<tr>
        	<td> 
            	<li>
     				<div align="left">City, State  Zip Code     </div>
   				</li>
           	</td>
     		<td>
            	<div align="left">
                	<span id="sprytextfield28">
       					<label>
       						<input type="text" name="city" id="city" />
       					</label>
       					<span class="textfieldRequiredMsg">A value is required.</span>
                  	</span> 
              		<span id="sprytextfield29">
       					<label>
       						<input name="state" type="text" id="state" size="5" maxlength="2" />
       					</label>
       					<span class="textfieldRequiredMsg">A value is required.</span>
                        <span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span>
                 	</span> 
                    	<span id="sprytextfield30">
       						<label>
       							<input type="text" name="zipCode" id="zipCode" />
       						</label>
       					<span class="textfieldRequiredMsg">A value is required.</span>
                     	<span class="textfieldInvalidFormatMsg">Invalid format.</span>
                  	</span>
            	</div>
    		</td>
   		</tr>
    	<tr>
        	<td height="27">
            	<li>
      				<div align="left">
        				Contact Name:
                   	</div>
               	</li>
          	</td>
      		<td>
            	<div align="left">
                	<span id="sprytextfield31">
        				<label>
        					<input type="text" name="businessContact" id="businessContact" />
        				</label>
        			<span class="textfieldRequiredMsg">A value is required.</span>
                    </span>
              	</div>
          	</td>
    	</tr>
     	<tr>
        	<td>
    			<li>
      				<div align="left">Email:</div>
    			</li>
           	</td>
            <td>
            	<div align="left">
                	<span id="sprytextfield33">
    					<label>
    						<input type="text" name="emailAddress" id="emailAddress" />
    					</label>
    				<span class="textfieldRequiredMsg">A value is required.</span>
                    <span class="textfieldInvalidFormatMsg">Invalid format.</span>
              		</span>
             	</div>
         	</td>
      	</tr>
    	<tr>
        	<td>
            	<li>
     			 	<div align="left">Phone:      </div>
    			</li>
           	</td>
      		<td>
            	<div align="left">
                	<span id="sprytextfield32">
      					<label>
      						<input type="text" name="phone" id="phone" />
     				 	</label>
      				<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span>
                    </span>
             	</div>
      		</td>
   	 	</tr>
    	<tr>
        	<td colspan="2"><li>   
        		<div align="center">
          			<input class="mainForm" onclick="collapseElement('page_6'); expandElement('page_2');" type="button" value="Back" /> 
          			<input class="mainForm" onclick="collapseElement('page_6'); expandElement('page_7');" type="button" value="Continue" /> 
        		</div>
   				</li>
          	</td>
       	</tr>
	</table>
</ul>

<!--Page seven-->
<ul id="page_7">
	<table width="100%">
  		<tr>
        	<td colspan="4">
    			<li>
        			<h4 align="left">Please provide shipping information.</h4>
   				</li>          	</td>
      	</tr>
    	<tr>
        	<td>
            	<li>                </li>           	</td>
       	    <td>Ship 1</td>
       	    <td>Ship 2</td>
       	    <td>Ship 3</td>
    	</tr>
    	<tr>
        	<td width="23%">
            	<li>
      				<div align="left">
                    	<span id="sprytextfield1">Your Name:</span>                   	</div>
    			</li>          	</td>
      	    <td width="28%"><div align="left"><span id="sprytextfield2">
      	      <label>
      	      <input type="text" name="ship1Name" id="ship1Name" />
      	      </label>
   	        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
    	    <td width="24%"><div align="left"><span id="sprytextfield19">
    	      <label>
    	      <input type="text" name="Ship2Name" id="Ship2Name" />
    	      </label>
   	        </span></div></td>
    	    <td width="25%"><span id="sprytextfield20">
    	      <label>
    	      <div align="left">
    	        <input type="text" name="ship3Name" id="ship3Name" />
  	        </div>
    	      </label>
   	        </span></td>
    	</tr>
    	<tr>
        	<td>
            	<li>
      				<div align="left">Business Name: </div>
    			</li>           	</td>
      	    <td><div align="left"><span id="sprytextfield18">
      	      <label>
      	      <input type="text" name="ship1Business" id="ship1Business" />
      	      </label>
   	        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
    	    <td><div align="left"><span id="sprytextfield21">
    	      <label>
    	      <input type="text" name="ship2Business" id="ship2Business" />
    	      </label>
   	        </span></div></td>
    	    <td><div align="left"><span id="sprytextfield22">
    	      <label>
    	      <input type="text" name="ship3Business" id="ship3Business" />
    	      </label>
   	        </span></div></td>
    	</tr>
    	<tr>
        	<td>
            	<li>
      				<div align="left">Address: </div>
    			</li>           	</td>
      	    <td><div align="left"><span id="sprytextfield23">
      	      <label>
      	      <input type="text" name="ship1Address" id="ship1Address" />
      	      </label>
   	        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
    	    <td><div align="left"><span id="sprytextfield24">
    	      <label>
    	      <input type="text" name="ship2Address" id="ship2Address" />
    	      </label>
   	        </span></div></td>
    	    <td><div align="left"><span id="sprytextfield34">
    	      <label>
    	      <input type="text" name="ship3Address" id="ship3Address" />
    	      </label>
   	        </span></div></td>
    	</tr>
    	<tr>
        	<td>
            	<li>
      				<div align="left">City:  </div>
    			</li>          	</td>
      	    <td><div align="left"><span id="sprytextfield35">
      	      <label>
      	      <input type="text" name="ship1City" id="ship1City" />
      	      </label>
   	        <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
    	    <td><span id="sprytextfield36">
    	      <label>
    	      <div align="left">
    	        <input type="text" name="ship2City" id="ship2City" />
  	        </div>
    	      </label>
   	        </span></td>
    	    <td><span id="sprytextfield37">
    	      <label>
              <div align="left">
                <input type="text" name="ship3City" id="ship3City" />
              </div>
              </label>
   	        </span></td>
    	</tr>
    	<tr>
    	  <td><div align="left">State:</div></td>
    	  <td><div align="left"><span id="sprytextfield38">
    	    <label>
    	    <input type="text" name="ship1State" id="ship1State" />
    	    </label>
   	      <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
  	      <td><div align="left"><span id="sprytextfield39">
  	        <label>
  	        <input type="text" name="ship2State" id="ship2State" />
  	        </label>
          </span></div></td>
  	      <td><div align="left"><span id="sprytextfield40">
  	        <label>
  	        <input type="text" name="ship3State" id="ship3State" />
  	        </label>
          </span></div></td>
   	  </tr>
    	<tr>
    	  <td><div align="left">Zip Code: </div></td>
    	  <td><div align="left"><span id="sprytextfield41">
          <label>
          <input type="text" name="ship1Zip" id="ship1Zip" />
          </label>
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td>
  	      <td><div align="left"><span id="sprytextfield42">
  	        <label>
  	        <input type="text" name="ship2Zip" id="ship2Zip" />
  	        </label>
          </span></div></td>
  	      <td><div align="left"><span id="sprytextfield43">
  	        <label>
  	        <input type="text" name="ship3Zip" id="ship3Zip" />
  	        </label>
          </span></div></td>
   	  </tr>
    	<tr>
    	  <td>&nbsp;</td>
    	  <td colspan="3">&nbsp;</td>
  	  </tr>
		<tr>
        	<td>
				<li>
  					<p align="left">Message:</p>
				</li></td>
      	    <td colspan="3"><div align="left">
      	      <label>
      	      <textarea name="shipMessage" id="shipMessage" cols="60" rows="5"></textarea>
      	      </label>
      	    </div></td>
		</tr>
		<tr>
        	<td colspan="4">
    			<li>
                	<input class="mainForm" onclick="collapseElement('page_7'); expandElement('page_6');" type="button" value="Back" /> 
      				<input class="mainForm" onclick="collapseElement('page_7'); expandElement('page_8');" type="button" value="Continue" /> 
      				<label>
      					<input type="submit" name="button" id="button" value="Submit" />
      				</label>
    			</li>           	</td>
    	</tr>
	</table>
</ul>

<!--Page eight-->
<ul id="page_8">
   <table width="100%">
    	<tr>
        	<td colspan="2">
    			<li>
        			<h4 align="left">What type of containers would you like to order?</h4>
    			</li>
       		</td>
       	</tr>
  		<tr>
        	<td width="46%" align="left" valign="top"><p align="center">Single Jar Box - 5x5x4 inches (Enter quantity) </p>
            </td>
    		<td width="54%" align="left" valign="top"><div align="left">
            	<span id="sprytextfield3">
      				<label>
      					<input name="singleJar2" type="text" id="singleJar2" value="0" />
      				</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
            	</span></div>
      		</td>
       	</tr>
  		<tr>
        	<td valign="top"><p align="center">Multiple Jar Box - 7x5x4 inches (Enter quantity)</p><br />
			</td>
    		<td valign="top">
            	<div align="left">
            		<span id="sprytextfield6">
      					<label>
      						<input name="multipleJar2" type="text" id="multipleJar2" value="0" />
      					</label>
     				<span class="textfieldRequiredMsg">A value is required.</span>
              		</span>
              	</div>
          	</td>
  		</tr>
  		<tr>
        	<td valign="top"><p align="center">Patient Scrap Mailers - (Enter quantity) </p>
            </td>
    		<td valign="top">
            	<div align="left">
                	<span id="sprytextfield7">
      					<label>
      						<input name="patientScrapMailer" type="text" id="patientScrapMailer" value="0" />
      					</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
                    </span>
              	</div>
           	</td>
  		</tr>
  		<tr>
        	<td colspan="2">
            	<div align="center">
                </div>
           	</td>
       	</tr>
  		<tr>
    		<td colspan="2">
            	<div align="center">
           		</div>
           	</td>
  		</tr>
    	<tr>
        	<td colspan="2">
            	<li>
        			<div align="center">
          			 	<input class="mainForm" onclick="collapseElement('page_8'); expandElement('page_2');" type="button" value="Back" /> 
          				<input class="mainForm" onclick="collapseElement('page_8'); expandElement('page_6');" type="button" value="Continue" /> 
        			</div>
    			</li>
       		</td>
       	</tr>
   	</table>
</ul>

<!--Page nine-->
<ul id="page_9">
   <table width="100%">
    	<tr>
        	<td colspan="2">
    			<li>
        			<h4 align="left">What type of containers would you like to order?</h4>
    			</li>
       		</td>
       	</tr>
  		<tr>
        	<td width="46%" align="left" valign="top"><p align="center">Single Jar Box - 5x5x4 inches (Enter quantity) </p>
            </td>
    		<td width="54%" align="left" valign="top"><div align="left">
            	<span id="sprytextfield3">
      				<label>
      					<input name="singleJar2" type="text" id="singleJar2" value="0" />
      				</label>
      				<span class="textfieldRequiredMsg">A value is required.</span>
            	</span></div>
      		</td>
       	</tr>
  		<tr>
        	<td valign="top"><p align="center">Multiple Jar Box - 7x5x4 inches (Enter quantity)</p><br />
			</td>
    		<td valign="top">
            	<div align="left">
            		<span id="sprytextfield6">
      					<label>
      						<input name="multipleJar2" type="text" id="multipleJar2" value="0" />
      					</label>
     				<span class="textfieldRequiredMsg">A value is required.</span>
              		</span>
              	</div>
          	</td>
  		</tr>

  		<tr>
        	<td colspan="2">
            	<div align="center">
                </div>
           	</td>
       	</tr>
  		<tr>
    		<td colspan="2">
            	<div align="center">
           		</div>
           	</td>
  		</tr>
    	<tr>
        	<td colspan="2">
            	<li>
        			<div align="center">
          			 	<input class="mainForm" onclick="collapseElement('page_9'); expandElement('page_5');" type="button" value="Back" /> 
          				<input class="mainForm" onclick="collapseElement('page_9'); expandElement('page_6');" type="button" value="Continue" /> 
        			</div>
    			</li>
       		</td>
       	</tr>
   	</table>
</ul>



<script type="text/javascript">
<!--
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur", "change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["blur", "change"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur", "change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {validateOn:["blur", "change"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["blur", "change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {validateOn:["blur", "change"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["blur", "change"]});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none", {minChars:2, validateOn:["blur", "change"]});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "zip_code", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "none", {validateOn:["blur", "change"]});
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15", "email", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16", "email", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17", "phone_number", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield25 = new Spry.Widget.ValidationTextField("sprytextfield25", "none", {validateOn:["blur", "change"]});
var sprytextfield26 = new Spry.Widget.ValidationTextField("sprytextfield26", "none", {validateOn:["blur", "change"]});
var sprytextfield27 = new Spry.Widget.ValidationTextField("sprytextfield27", "none", {validateOn:["blur", "change"]});
var sprytextfield28 = new Spry.Widget.ValidationTextField("sprytextfield28", "none", {validateOn:["blur", "change"]});
var sprytextfield29 = new Spry.Widget.ValidationTextField("sprytextfield29", "none", {maxChars:2, validateOn:["blur", "change"]});
var sprytextfield30 = new Spry.Widget.ValidationTextField("sprytextfield30", "zip_code", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield31 = new Spry.Widget.ValidationTextField("sprytextfield31", "none", {validateOn:["blur", "change"]});
var sprytextfield32 = new Spry.Widget.ValidationTextField("sprytextfield32", "phone_number", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield33 = new Spry.Widget.ValidationTextField("sprytextfield33", "email", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18");
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19", "none", {isRequired:false});
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20", "none", {isRequired:false});
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21", "none", {isRequired:false});
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22", "none", {isRequired:false});
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23");
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24", "none", {isRequired:false});
var sprytextfield34 = new Spry.Widget.ValidationTextField("sprytextfield34", "none", {isRequired:false});
var sprytextfield35 = new Spry.Widget.ValidationTextField("sprytextfield35");
var sprytextfield36 = new Spry.Widget.ValidationTextField("sprytextfield36", "none", {isRequired:false});
var sprytextfield37 = new Spry.Widget.ValidationTextField("sprytextfield37", "none", {isRequired:false});
var sprytextfield38 = new Spry.Widget.ValidationTextField("sprytextfield38");
var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {isRequired:false});
var sprytextfield40 = new Spry.Widget.ValidationTextField("sprytextfield40", "none", {isRequired:false});
var sprytextfield41 = new Spry.Widget.ValidationTextField("sprytextfield41", "zip_code", {useCharacterMasking:true});
var sprytextfield42 = new Spry.Widget.ValidationTextField("sprytextfield42", "none", {isRequired:false});
var sprytextfield43 = new Spry.Widget.ValidationTextField("sprytextfield43", "none", {isRequired:false});
//-->
</script>
</form>
</body>
</html>
