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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
			<h2>Schedule a pickup</h2>
			</div>
		<form action="pickup2.php" method="post">
		  <h3>Customer Type</h3>
		  <table width="100%" border="1" cellspacing="0" bordercolor="#B77F3B">
  <tr>
    <td width="27%"><div align="left"><strong>
    </strong></div>      <strong><label>
      <div align="left">
        <input name="CustomerType" type="radio" id="CustomerType_0" value="Dentist" checked="checked" />
        Dentist</div>
      </label>
    </strong></td>
    <td colspan="2"><div align="left"></div></td>
  </tr>
  <tr>
    <td><strong>
      <label>
      <div align="left">
        <input type="radio" name="CustomerType" value="Staff" id="CustomerType_1" />
        Dental Staff</div>
      </label>
    </strong></td>
    <td width="23%"><div align="left"><strong>Dentist Name:
    </strong></div>      <strong><label></label>
    </strong></td>
    <td width="50%"><div align="left"><span id="sprytextfield1">
      <input name="dentistName" type="text" id="dentistName" size="50" maxlength="50" />
      </span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="left"><strong>Dentist Phone:
    </strong></div>      <strong><label></label>
    </strong></td>
    <td><div align="left"><span id="sprytextfield2">
    <input type="text" name="dentistPhone" id="dentistPhone" />
    <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>
    </strong></div>      <strong><label>
      <div align="left">
        <input type="radio" name="CustomerType" value="Patient" id="CustomerType_2" />
        Patient</div>
      </label>
    </strong></td>
    <td colspan="2"><p align="left">Thank you for choosing Landis Refining! To  process your request please provide the name and phone number of the Dentist  that recommended us to you</p>
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td width="38%"><div align="left"><strong>Referring Dentist:</strong></div></td>
              <td width="62%"><label>
                <div align="left"><span id="sprytextfield3">
                  <input name="refDentist" type="text" id="refDentist" size="50" maxlength="50" />
                  </span></div>
              </label></td>
            </tr>
          <tr>
            <td><div align="left"><strong>Dentist Phone:</strong></div></td>
              <td><label>
                <div align="left"><span id="sprytextfield4">
                  <input type="text" name="refDentistPhone" id="refDentistPhone" />
                  <span class="textfieldInvalidFormatMsg">Invalid format.</span>                  </span></div>
              </label></td>
            </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>
    </strong></div>      <strong><label>
      <div align="left">
        <input type="radio" name="CustomerType" value="Jeweler" id="CustomerType_3" />
        Jeweler</div>
      </label>
    </strong></td>
    <td colspan="2"><div align="left"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><label>
      <input type="submit" name="continue" id="continue" value="Continue" />
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"], isRequired:false});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "phone_number", {validateOn:["blur", "change"], useCharacterMasking:true, isRequired:false});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur", "change"], isRequired:false});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {validateOn:["blur", "change"], isRequired:false, useCharacterMasking:true});
//-->
</script>
</body>
</html>
