<?php

//导入MYSQL数据库连接参数.
include("../sql-connections/db-creds.inc");
error_reporting(0);

//mysql连接的查询示例。
$con1 = mysqli_connect($host,$dbuser,$dbpass);

// 检查连接
if (mysqli_connect_errno($con1))
{
    echo "连接 MySQL数据库失败: " . mysqli_connect_error();
}
else
{
    @mysqli_select_db($con1, $dbname) or die ( "无法连接数据库: $dbname");
}


?>




 
