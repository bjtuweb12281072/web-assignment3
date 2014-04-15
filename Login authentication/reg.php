 <?php  
require_once ("connect.php");  
$name=$_POST['name'];  
$password=$_POST['password'];   
if($name==""|| $password=="")  
{  
    echo"用户名或者密码不能为空";  
}  
else   
{ 
		require_once ("connect.php");
		connect();
        $sql="insert into user(id,name,password) values('','$name','$password')";  
        $result=mysql_query($sql);  
        if(!$result)  
        {  
            echo"注册不成功！"; 
            echo"<a href='Registration.php'>返回</a>";  
        }  
        else   
        {  
            echo"注册成功!<a href='index.php'>login</a>";
        }  
    
}  
?> 