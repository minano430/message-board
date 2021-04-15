<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_server = "localhost";
$db_name = "guest_content";
$db_user = "minano";
$db_passwd = "22363761";
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");
mysql_query("SET NAMES utf8");
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
?> 