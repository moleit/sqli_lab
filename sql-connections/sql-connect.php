<?php

//导入MYSQL数据库连接参数.
include("../sql-connections/db-creds.inc");
@error_reporting(0);
@$con = mysql_connect($host,$dbuser,$dbpass);
// 检查数据库连接
if (!$con)
{
    echo "连接MySQL数据库失败: " . mysql_error();
}


    @mysql_select_db($dbname,$con) or die ( "无法连接数据库: $dbname");






$sql_connect = "SQL Connect included";
############################################
# For Less-24
$form_title_in="请登录后继续操作";
$form_title_ns="新用户";
$feedback_title_ns="新用户";
$form_title_ns= "Less-24";


?>




 
