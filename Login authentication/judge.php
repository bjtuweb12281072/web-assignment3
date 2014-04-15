<?php
$name = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

// do authentication here
$mysql_server_name='localhost'; 
$mysql_username='root';  
$mysql_password='xampplily';
$db=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("连接数据库失败！");   
mysql_select_db("phpsols")or die ("不能连接到user".mysql_error()); 
$sql = "SELECT* EROM 'user' WHERE name='$name' and password='$password'"; 
 $result=mysql_query($sql,$db);
 $row = mysql_fetch_array($result,MYSQL_ASSOC);
     if($row["name"]==$name&&$row[" password"]==$password) 
{
            echo"<script type='text/javascript'>alert('登陆成功');location='login.php';</script>";
			setcookie("mycookie_name", $name);
			setcookie("count", ++$count);
  } else {
  			
        echo"<script type='text/javascript'>alert('密码错误');location='index.php';</script>";
		setcookie("mycookie_name","");
		
}  
mysql_free_result($result); 

?>