<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--Pages function-->
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
			var numFormPages = 3;
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
	background: #555;
	border:solid 2px #000;
}
.meter > span {
	padding-left: 5px;
	display: block;
	height: 100%;
	background-color: rgb(43,194,83);
	position: relative;
	overflow: hidden;
}</style>
</head>

<body onLoad="collapsePages()">
<form method="post" enctype="multipart/form-data" action="process.php" onSubmit="return">
<!--Page one-->
<ul id="page_1">
    <li>
        <h2>What is your email address?</h2>
        <label>Enter your email address:</label><input type="text" />
    </li>
    <li>
<input class="mainForm" onclick="collapseElement('page_1'); expandElement('page_2');" type="button" value="Continue" /> <!--This hides the first page and shows the second page-->	
    </li>
    <div class="meter"><span style="width: 33%">1/3</span></div>
</ul>



<!--Page two-->
<ul id="page_2">
    <li>
        <h2>What is your gender?</h2>
        <label>Male</label><input type="radio" name="sex" value="male"><br/>
		<label>Female</label><input type="radio" name="sex" value="female">
    </li>
    <li><input class="mainForm" onclick="collapseElement('page_2'); expandElement('page_1');" type="button" value="Back" /> <!--This hides the second page and shows the first page-->
<input class="mainForm" onclick="collapseElement('page_2'); expandElement('page_3');" type="button" value="Continue" /> <!--This hides the first page and shows the second page-->
    </li>
    <div class="meter"><span style="width: 66%">2/3</span></div>
</ul>

<!--Page three-->
<ul id="page_3">
    <li>
        <h2>How do you like to get around?</h2>
        <input type="checkbox" name="vehicle" value="Bike"><label>I have a bike</label><br/>
        <input type="checkbox" name="vehicle" value="Car"><label>I have a car</label>
    </li>
    <li>
   <input class="mainForm" onclick="collapseElement('page_3'); expandElement('page_2');" type="button" value="Back" /> <!--This hides the second page and shows the first page-->
    <input type="submit" value="Submit">
    </li>
    <div class="meter"><span style="width: 100%">3/3</span></div>
</ul>
</form>
</body>
</html>
