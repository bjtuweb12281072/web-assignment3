 <?php  
require_once ("connect.php");  
$name=$_POST['name'];  
$password=$_POST['password'];   
if($name==""|| $password=="")  
{  
    echo"�û����������벻��Ϊ��";  
}  
else   
{ 
		require_once ("connect.php");
		connect();
        $sql="insert into user(id,name,password) values('','$name','$password')";  
        $result=mysql_query($sql);  
        if(!$result)  
        {  
            echo"ע�᲻�ɹ���"; 
            echo"<a href='Registration.php'>����</a>";  
        }  
        else   
        {  
            echo"ע��ɹ�!<a href='index.php'>login</a>";
        }  
    
}  
?> 