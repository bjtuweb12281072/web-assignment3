<?php
$name = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

// do authentication here
$mysql_server_name='localhost'; 
$mysql_username='root';  
$mysql_password='xampplily';
$db=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("�������ݿ�ʧ�ܣ�");   
mysql_select_db("phpsols")or die ("�������ӵ�user".mysql_error()); 
$sql = "SELECT* EROM 'user' WHERE name='$name' and password='$password'"; 
 $result=mysql_query($sql,$db);
 $row = mysql_fetch_array($result,MYSQL_ASSOC);
     if($row["name"]==$name&&$row[" password"]==$password) 
{
            echo"<script type='text/javascript'>alert('��½�ɹ�');location='login.php';</script>";
			setcookie("mycookie_name", $name);
			setcookie("count", ++$count);
  } else {
  			
        echo"<script type='text/javascript'>alert('�������');location='index.php';</script>";
		setcookie("mycookie_name","");
		
}  
mysql_free_result($result); 

?>