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
<title>Order a Container - Customer Type</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="defaultForm.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Lobster' rel='stylesheet' type='text/css'>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
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
			<h3>Order a container</h3>
			<p><strong>Customer Type</strong> --- Staff/Patient Info --- Container Types --- Shipping Info --- Finish</p>
	  </div>
		<form action="order2.php" method="post">
        <center>
		  <table width="40%" border="1" cellspacing="0" bordercolor="#000000">
  	<tr>
    	<td>
        	<div align="left">
        	  <input name="CustomerType" type="radio" id="CustomerType_0" value="Dentist" checked="checked" />
       	    Dentist      	  </div></td>
    </tr>
  	<tr>
    	<td>
        	<div align="left">
        	  <input type="radio" name="CustomerType" value="Dental Staff" id="CustomerType_1" />
       	    Dental Staff      	  </div></td>
   	</tr>
	<tr>
    	<td>
        	<div align="left">
        	  <input type="radio" name="CustomerType" value="Patient" id="CustomerType_2" />
       	    Patient      	  </div></td> 
  	</tr>
  	<tr>
    	<td>
        	<div align="left">
        	  <input type="radio" name="CustomerType" value="Jeweler" id="CustomerType_3" />
       	    Jeweler      	  </div></td>
 	</tr>
  	<tr>
    	<td colspan="2">
      		<input type="submit" name="continue" id="continue" value="Continue" />		</td>
  	</tr>
</table>
</center>
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
