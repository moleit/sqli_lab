<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>初始化数据库</title>
</head>

<body bgcolor="#000000">

<div style=" margin-top:20px;color:#FFF; font-size:24px; text-align:center"> 
欢迎&nbsp;&nbsp;&nbsp;
<font color="#FF0000"> Dhakkan </font>
<br>
</div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:left">
<font size="3" color="#FFFF00">
创建数据库并初始化数据:
<br><br> 


<?php
//导入MYSQL数据库连接参数.
include("../sql-connections/db-creds.inc");




$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
  {
  die('[*]...................无法连接数据库, 请检查配置文件”db-creds.inc“: ' . mysql_error());
  }




//@mysql_select_db('mysql',$con)	
	
//清除旧的数据库	
	$sql="DROP DATABASE IF EXISTS security";
	if (mysql_query($sql))
		{echo "[*]...................删除已经存在的数据库'SECURITY'成功"; echo "<br><br>\n";}
	else 
		{echo "[*]...................删除已经存在的数据库失败: " . mysql_error(); echo "<br><br>\n";}


//创建数据库 security
	$sql="CREATE database `security` CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "[*]...................创建数据库 'SECURITY' 成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................创建数据库失败: " . mysql_error();echo "<br><br>\n";}

//创建users数据表
$sql="CREATE TABLE security.users (id int(3) NOT NULL AUTO_INCREMENT, username varchar(20) NOT NULL, password varchar(20) NOT NULL, PRIMARY KEY (id))";
	if (mysql_query($sql))
		{echo "[*]...................创建数据表 'USERS' 成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................创建数据表失败: " . mysql_error();echo "<br><br>\n";}


//创建 emails 数据表
$sql="CREATE TABLE security.emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................创建数据表 'EMAILS' 成功"; echo "<br><br>\n";}
	else 
		{echo "[*]...................创建数据表失败: " . mysql_error();echo "<br><br>\n";}



//创建 uagents 数据表
$sql="CREATE TABLE security.uagents
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		uagent varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		username varchar(20) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................创建数据表 'UAGENTS' 成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................创建数据表失败: " . mysql_error();echo "<br><br>\n";}


//创建数据表 referers
$sql="CREATE TABLE security.referers
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		referer varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................创建数据表 'REFERERS' 成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................创建数据表失败: " . mysql_error();echo "<br><br>\n";}







//初始化数据
$sql="INSERT INTO security.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin'), ('9', 'admin1', 'admin1'), ('10', 'admin2', 'admin2'), ('11', 'admin3', 'admin3'), ('12', 'dhakkan', 'dumbo'), ('14', 'admin4', 'admin4')";
	if (mysql_query($sql))
		{echo "[*]...................初始化数据表 'USERS' 数据成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................初始化数据表数据失败: " . mysql_error();echo "<br><br>\n";}



//初始化数据
$sql="INSERT INTO `security`.`emails` (id, email_id) VALUES ('1', 'Dumb@dhakkan.com'), ('2', 'Angel@iloveu.com'), ('3', 'Dummy@dhakkan.local'), ('4', 'secure@dhakkan.local'), ('5', 'stupid@dhakkan.local'), ('6', 'superman@dhakkan.local'), ('7', 'batman@dhakkan.local'), ('8', 'admin@dhakkan.com')";
	if (mysql_query($sql))
		{echo "[*]...................初始化数据表 'EMAILS' 数据成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................初始化数据表数据失败: " . mysql_error();echo "<br><br>\n";}




//CREATE TABLE security.search (id int(3) NOT NULL AUTO_INCREMENT, search varchar(20) NOT NULL, PRIMARY KEY (id));
//INSERT INTO `security`.`search` (search) VALUES ( 'Dumb@dhakkan.com'), ('Angel@iloveu.com'), ('Dummy@dhakkan.local'), ( 'secure@dhakkan.local'), ( 'stupid@dhakkan.local'), ( 'superman@dhakkan.local'), ( 'batman@dhakkan.local'), ( 'admin@dhakkan.com')"; 

//导入数据库创建记录文件.
include("../sql-connections/setup-db-challenge.php");
?>


</font>
</div>
</body>
</html>
