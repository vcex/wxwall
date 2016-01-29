<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);

@header("Content-type: text/html; charset=utf-8");

/*链接数据库*/
$dbname =  SAE_MYSQL_DB;//数据库的名称

/*设置数据库信息*/
$host = SAE_MYSQL_HOST_M;//数据库的服务器地址，一般无需更改
$port = SAE_MYSQL_PORT;//数据库的端口号
$user = SAE_MYSQL_USER ;//数据库的用户名
$pwd = SAE_MYSQL_PASS;//数据库的密码



/**
提示：
1.如果你懂开发，可以随便更改以下信息！如果你啥都不懂也不会，请不要更改下面的APP信息，直接默认即可！！！

**/


$AppID = "wx20b9d97080abfa78";
$AppSecret = "ae3d8900315346b216eddedd1f85c418";




