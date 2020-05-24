<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-3 Error Based- String (with Twist) </title>

</head>

<body bgcolor="#000000">

<div style=" margin-top:60px;color:#FFF; font-size:23px; text-align:center">欢迎&nbsp;&nbsp;&nbsp;<font color="#FF0000"> Dhakkan </font><br>
<font size="3" color="#FFFF00">


<?php
//导入mysql数据库连接参数.
include("../sql-connections/sql-connect.php");
error_reporting(0);
// 获取ID参数值
if(isset($_GET['id']))
{
$id=$_GET['id'];
//将连接参数记录到文件中进行分析。
$fp=fopen('result.txt','a');
fwrite($fp,'ID:'.$id."\n");
fclose($fp);

//  连通


$sql="SELECT * FROM users WHERE id=('$id') LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo "<font size='5' color= '#99FF00'>";
  	echo '用户名:'. $row['username'];
  	echo "<br>";
  	echo '密码:' .$row['password'];
  	echo "</font>";
  	}
	else 
	{
	echo '<font color= "#FFFF00">';
	print_r(mysql_error());
	echo "</font>";  
	}
}
	else { echo "请输入ID作为参数与数值";}

?>


</font> </div></br></br></br><center>
<img src="../images/Less-3.jpg" /></center>
</body>
</html>
