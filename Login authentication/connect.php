<?php
function connect(){  
$mysql_server_name='localhost'; 
$mysql_username='root';  
$mysql_password='xampplily';
$db=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("�������ݿ�ʧ�ܣ�");   
mysql_select_db("phpsols")or die ("�������ӵ�user".mysql_error()); 
return $db;  
}
?>