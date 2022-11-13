<?php

include '../conn.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['user_pass'];
    $sql="SELECT * FROM `users` WHERE `user_name`='$user_name'";
    $res=mysqli_query($connect1,$sql);
    $num=mysqli_num_rows($res);
    if($num>0)
    {
        $sql1="SELECT * FROM `users` WHERE `user_name`='$user_name' AND `user_pass`='$user_pass'";
        $res1=mysqli_query($connect1,$sql1);
        $num1=mysqli_num_rows($res1);
        if($num1>0)
        {
            session_start();
            $_SESSION['loggedin']='true';
            $_SESSION['name']=$user_name;
            header("location: /igectechhub/index.php?loginsuc=true");
        }
        else
        {
            header("location: /igectechhub/index.php?loginsuc=false");
        }
    }
    else
    {
        header("location: /igectechhub/index?loginerr=true");
    }
}

?>