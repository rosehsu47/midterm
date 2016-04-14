<html><head></head>
<body>
<h2><center>註冊</center></h2>
<form action="" method="post">
<center>
請輸入姓名:<input type="text" name="name"><br/>
請輸入密碼:<input type="password" name="pwd"><br/>
請輸入電子信箱:<input type="text" name="email"><br/>
請輸入電話或手機:<input type="text" name="phonenum"><br/>

<input type="submit">
<input type="reset">
</center>
</form>
<?php
session_start();
if(isset($_POST["name"]))
{
	$name=$_POST["name"];
	$pwd=$_POST["pwd"];

$_SESSION['val']=$name;

$Link=mysqli_connect("localhost","root","123456","a");
$add="INSERT INTO user(name,pwd) VALUES('$name','$pwd')";

mysqli_query($Link, $add);
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

}

?>
</body>
</html>