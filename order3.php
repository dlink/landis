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
<?php
	session_start('test');
	$_SESSION["yourName"] = $_POST["yourName"];
	$_SESSION["businessName"] = $_POST["businessName"];
	$_SESSION["address"] = $_POST["address"];
	$_SESSION["city"] = $_POST["city"];
	$_SESSION["state"] = $_POST["state"];
	$_SESSION["zipCode"] = $_POST["zipCode"];
	$_SESSION["contactName"] = $_POST["contactName"];
	$_SESSION["emailAddress"] = $_POST["emailAddress"];
	$_SESSION["emailAddressConfirm"] = $_POST["emailAddressConfirm"];
	$_SESSION["phone"] = $_POST["phone"];
	echo $_SESSION["yourName"];
	echo "separator";
	echo $_SESSION["dentistName"];	
	
?>	


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="defaultForm.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Lobster' rel='stylesheet' type='text/css'>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
</head>
<body>
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
	  </div>
		<form action="order4.php" method="post">
		  <h3>Shipping Address</h3>
		  <table width="100%" border="1" cellspacing="0" bordercolor="#B77F3B">
          <tr>
            <td colspan="2"><div align="left">Check here if Shipping Address the same as Business Address? <span id="sprycheckbox1">
              <label>
              <input type="checkbox" name="sameAddress" id="sameAddress" />
              </label>
              <span class="checkboxMinSelectionsMsg">Minimum number of selections not met.</span><span class="checkboxMaxSelectionsMsg">Maximum number of selections exceeded.</span> </span></div>              
            <div align="left"></div></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr><td width="43%"><div align="left">Your Name:</div></td><td width="57%"><div align="left"><span id="sprytextfield1">
            <label>
            <input name="yourName" type="text" id="yourName" size="50" maxlength="50" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr><td><div align="left">Business Name:</div></td><td><div align="left"><span id="sprytextfield2">
            <label>
            <input name="businessName" type="text" id="businessName" size="50" maxlength="50" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr><td><div align="left">Address</div></td><td><div align="left"><span id="sprytextfield3">
            <label>
            <input name="address" type="text" id="address" size="50" maxlength="50" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr><td><div align="left">City:</div></td><td><div align="left"><span id="sprytextfield4">
            <label>
            <input name="city" type="text" id="city" size="35" maxlength="35" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr><td><div align="left">State:</div></td><td><div align="left"><span id="sprytextfield5">
            <label>
            <input name="state" type="text" id="state" size="10" maxlength="2" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr><td><div align="left">Zip Code:</div></td><td><div align="left"><span id="sprytextfield6">
          <label>
          <input name="zipCode" type="text" id="zipCode" size="20" maxlength="20" />
          </label>
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td></tr>
          <tr><td><div align="left">Contact Name:</div></td><td><div align="left"><span id="sprytextfield7">
            <label>
            <input name="contactName" type="text" id="contactName" size="50" maxlength="50" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr><td><div align="left">Email Address</div></td><td><div align="left"><span id="sprytextfield8">
          <label>
          <input name="emailAddress" type="text" id="emailAddress" size="50" maxlength="50" />
          </label>
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td></tr>
          <tr><td><div align="left">Confirm Email Address:</div></td><td><div align="left"><span id="sprytextfield9">
          <label>
          <input name="emailAddressConfirm" type="text" id="emailAddressConfirm" size="50" maxlength="50" />
          </label>
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td></tr>
          <tr><td><div align="left">Phone:</div></td><td><div align="left"><span id="sprytextfield10">
          <label>
          <input name="phone" type="text" id="phone" size="35" maxlength="35" />
          </label>
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td></tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="submit" id="submit" value="Continue" />
            </label></td>
          </tr>
</table>

	  </form>
  </div>
	<div id="sidebar"></div>
</div>
</div>



<div id="copyright" class="container">
	<p>Copyright (c) 2014 landis refining co.,INC. - All rights reserved. | 800-433-6192</p>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur", "change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur", "change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur", "change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "zip_code", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur", "change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "email", {validateOn:["blur", "change"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["blur", "change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "phone_number", {validateOn:["blur", "change"], useCharacterMasking:true});
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1", {validateOn:["blur", "change"], isRequired:false, minSelections:0, maxSelections:1});
//-->
</script>
</body>
</html>
