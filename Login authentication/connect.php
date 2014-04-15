<?php
function connect(){  
$mysql_server_name='localhost'; 
$mysql_username='root';  
$mysql_password='xampplily';
$db=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("连接数据库失败！");   
mysql_select_db("phpsols")or die ("不能连接到user".mysql_error()); 
return $db;  
}
?>