<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start("test");
$_SESSION["color"] = $_POST["color"];
echo $_SESSION["color"];
echo " - ";
echo $_SESSION["name"];
?>

<body>
<form action="test3.php" method="post">
Size:<input name="size" type="text" />
<input name="submit" type="submit" value="submit" />
</form>
</body>
</html>