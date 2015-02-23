<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="processorder.php" method="post">
  <span id="sprytextfield1">
  <label>
  <input type="text" name="name" id="name" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
//-->
</script>
</body>
</html>
