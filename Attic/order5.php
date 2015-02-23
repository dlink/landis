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
	session_start();
	$_SESSION["CustomerType"] = $_POST["CustomerType"];
	$_SESSION["dentistName"] = $_POST["dentistName"];
	$_SESSION["dentistPhone"] = $_POST["denistPhone"];
	$_SESSION["refDentist"] = $_POST["refDentist"];
	$_SESSION["refDentistPhone"] = $_POST["refDentistPhone"];
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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<style>
.noshow { display:none; }
</style>
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
			<h2>Order a container</h2>
	  </div>
		<form action="order2.php" method="post" enctype="multipart/form-data" name="test" target="_self">
        Leave this blank: <input type="text" class="noshow" name="leaveblank"></label><br>
<label>Do not change this: <input type="text" class="noshow" name="dontchange" value="http://" ></label>
		  <h3>Select Containers</h3>
		  <table width="100%" border="1" cellspacing="0" bordercolor="#B77F3B">
          
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr><td width="43%"><div align="left"><strong>Single Jar Box - (5x4x5 inch)</strong></div>
            </td><td width="57%"><div align="left"><span id="sprytextfield1">
            <label>
            <input type="text" name="singleJarQty" id="singleJarQty" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span>quantity</div></td></tr>
          <tr><td><div align="left"><strong>Multiple Jar Box - (7x4x5 inch)</strong></div></td><td><div align="left"><span id="sprytextfield2">
            <label>
            <input type="text" name="multiJarQty" id="multiJarQty" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span>quantity</div></td></tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr><td colspan="2"><div align="left"><strong>Contents Description:</strong><br />
Collecting jars are a standard size: 3 in. tall by 2 3/4 in. diameter.<br />
Boxes are reusable.  We enclose a prepaid business reply return label.<br />
The multiple jar box holds three jars comfortably.</div>            <div align="left"><span id="sprytextfield3">
              <label></label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr><td><div align="left"><strong>Patient Scrap Metal Mailer:</strong></div></td><td><div align="left"><span id="sprytextfield4">
            <label>
            <input type="text" name="patientMailer" id="patientMailer" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span>quantity</div></td></tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr><td colspan="2"><div align="left"><strong>Contents Description:</strong><br />
Introductory letter.<br />
Eight prepaid self-sealing bubble-lined mailers.<br />
All mailers are a standard size: 7 1/2 in. wide by 5 1/4 in. high.</div>            <div align="left"><span id="sprytextfield6">
              <label></label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td></tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left"><strong>Message:</strong></div></td>
            <td><div align="left"><span id="sprytextfield5">
              <label>
              <textarea name="message" cols="50" rows="4" id="message"></textarea>
              </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left"></div></td>
            <td><div align="left"></div></td>
          </tr>
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
