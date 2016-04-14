<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(!@mysql_connect("localhost","root","123456"))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db("a"))
        die("無法使用資料庫");


$name = $_POST['name'];
$pwd = $_POST['pwd'];

//搜尋資料庫資料
$sql="SELECT * FROM user where name = '$name'";
$rs=mysql_query($sql);
$row=@mysql_fetch_row($rs);

//資料庫裡是否有這個會員
if($name != null && $pwd != null && $row[1] == $name && $row[2] == $pwd)
{
        $_SESSION['name'] = $name;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=reg.php>';
}
?>