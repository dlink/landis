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
			<h2>SChedule a pickup</h2>
	  </div>
		<form action="pickup4.php" method="post">
		  <h3>Pickup Information</h3>
		  <table width="100%" border="1" cellspacing="0" bordercolor="#B77F3B">
          <tr>
            <td><div align="left">Select Date for pickup: </div>              
            <div align="left"></div></td>
            <td><div align="left"></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr><td width="43%"><div align="left">Office Hours:</div></td><td width="57%"><div align="left"></div></td></tr>
          <tr><td><div align="left">Packages to be picked up: (please enter quantity)</div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left"></div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left">Our single jar box (5&quot;x4&quot;x4&quot;)</div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left">Our multiple jar box (7&quot;x4&quot;x5&quot;)</div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left">Your box: </div></td><td><div align="left">Estimated Weight:</div></td></tr>
          <tr><td><div align="left"></div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left"></div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left"></div></td><td><div align="left"></div></td></tr>
          <tr><td><div align="left"></div></td><td>&nbsp;</td></tr>
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

</body>
</html>
