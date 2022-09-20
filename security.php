<?php
session_start();
session_destroy();
session_start();
ob_start();

include("db.php");

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
            
$name=$_POST['email'];
$pw=$_POST['password'];
//$password=md5($pw);

$query="select * from login where s_name='$name' and password='$pw'" ;
$result=mysqli_query($conn,$query);
            
if($result)
{
    $rows=mysqli_num_rows($result);
    if($rows>0)
    {               
        $row=mysqli_fetch_array($result);
        $_SESSION['s_name']=$name;
        header('Location:page2.php');            
    }
    // invalid text pw
    else 
    {   
        $query="select * from login where username='$s_name' and password='$password'" ;
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        $rows=mysqli_num_rows($result);
        if($rows==0)
            header('Location:index.php');         
    }
}
        
?>