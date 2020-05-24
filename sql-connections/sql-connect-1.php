<?php

//导入MYSQL数据库连接参数.
include("../sql-connections/db-creds.inc");
@error_reporting(0);
@$con = mysql_connect($host,$dbuser,$dbpass);
// 检查数据库连接
if (!$con)
{
    echo "连接MYSQL数据库失败: " . mysql_error();
}


    @mysql_select_db($dbname1,$con) or die ( "无法连接数据库: $dbname1".mysql_error());






$sql_connect_1 = "SQL Connect included";



?>




 
