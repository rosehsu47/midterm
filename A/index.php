<!DOCTYPE html>
<html>
<head>
	<title>WElCOME</title>
</head>
<body><center>
<br/>
<br/>
<?php
session_start();

//echo "<span class=\"$color\">". $_SESSION['val']. "</span>";

echo "<font size=\"10\" color=\"gray\">".「.$_SESSION['val'].」."</font>";
echo " <font size=\"50\">歡迎回來</font>";
echo "<br/>";

if(){
	echo "您的註冊時間為".;
}else
	echo "您上一次的登入時間為".;
	echo "您的登入次數為".;

?>

<div style="border:4px #FFAC55 solid;width:200px;height:20px;">
<a href="log.php"  target="_blank" style="text-decoration:none;color:green;">我有帳號</a> </div><br/>
<div style="border:4px #FFAC55 solid;width:200px;height:20px;">
<a href="reg.php"  target="_blank" style="text-decoration:none;color:red;">第一次登入</a></div>
</center>
</body>
</html>