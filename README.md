README
================
SQLI- labs是一个学习SQL注入的平台
SQLI-LABS实验室包括GET和POST场景:

1. 报错注入(联合查询)
	1. 字符串
	2. 整形
2. 报错注入 (Double Injection Based)

3. 盲注:
	1. 布尔注入
	2. 时间注入
4. 更新查询注入.
5. 插入查询注入.
6. 请求头注入.
	1. Referer注入。
	2. UserAgent注入。
	3. Cookie注入。
7. 二次注入
8. WAF绕过
	1. 绕过黑名单过滤器
		绕过评论
		绕过 or & and
		绕过空格和注释
		绕过 union及select
	2 Impidence不匹配
9. 绕过addslashes ()
10. 绕过mysql_real_escape_string。(在特殊情况下)
11. SQL注入不利。
12. 二尺编码注入

========================================================================================
安装说明:
1. 将Apache文件解压到/var/www下。
2. 在/var/www文件夹下创建sql-labs文件夹，或者在/var/www文件夹中使用git命令。
	切换到/var/www目录下，然后使用以下命令，git clone https://github.com/Audi-1/sqli-labs.git sqli-labs
3. 打开位于sql-labs/sql-connections文件夹中的文件“db-creds”。
4. 修改MYSQL数据库用户名和密码。(Backtrack默认使用root:toor)
5. 在浏览器中访问http://IP/sql-labs(IP地址为部署SQLI-LABS服务器地址)
6. 单击链接setup/resetDB来创建数据库、创建表以及初始化数据。
7. LABs准备完成，点击对应课程编号打开课程页面。
8. 使用LABS平台。

==========================================================================================


