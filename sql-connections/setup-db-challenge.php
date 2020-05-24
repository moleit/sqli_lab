<html>
<head>
</head>
<body bgcolor="#000000">
<?php
//导入MYSQL数据库连接参数.
include '../sql-connections/db-creds.inc';

@error_reporting(0);
if(isset($_GET['id']))
$id = $_GET['id'];
//echo $id;

// 检查连接
@$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
{
    echo "连接MYSQL数据库失败: " . mysql_error();
}


//删除已经存在的旧数据库	
	$sql="DROP DATABASE IF EXISTS $dbname1";
	if (mysql_query($sql))
		{echo "[*]...................删除已经存在的旧数据库"; echo "<br><br>\n";}
	else 
		{echo "[*]...................删除已经存在的旧数据库失败: " . mysql_error(); echo "<br><br>\n";}




//创建新数据库
	$sql="CREATE database $dbname1 CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "[*]...................创建新数据库成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................创建新数据库失败: " . mysql_error();echo "<br><br>\n";}

include '../sql-connections/functions.php';



// 创建数据表
$sql="CREATE TABLE IF NOT EXISTS $dbname1.$table
		(
                id INT(2) UNSIGNED NOT NULL DEFAULT 1,
		sessid CHAR(32) PRIMARY KEY NOT NULL,
		$secret_key CHAR(32) NOT NULL,
		tryy INT(11) UNSIGNED NOT NULL DEFAULT 0 
		)";
	if (mysql_query($sql))
		{echo "[*]...................创建新的数据表 '$table' 成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................创建新的数据表失败: " . mysql_error();echo "<br><br>\n";}


// 创建随机key
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; //用于生成随机数据的字符集
$sec_key = num_gen(24, $characters);
$hash = md5(rand(0,100000));

//初始化 Dummy 数据
$sql="INSERT INTO $dbname1.$table VALUES (1, '$hash', '$sec_key', 0)";
        if (mysql_query($sql))
		{echo "[*]...................初始化数据 '$table'";echo "<br><br>\n";}
	else 
		{echo "[*]...................初始化数据失败: " . mysql_error();echo "<br><br>\n";}

echo "[*]...................初始化secret_key '$secret_key'  ";echo "<br><br>\n";

if(isset($id))
header( "refresh:0;url=$id" );

?>
</body>
</html>
