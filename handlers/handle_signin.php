<?php

include '../conn.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_pass=$_POST['user_pass'];
    $user_pass1=$_POST['user_pass1'];
    $sql="SELECT * FROM `users` WHERE `user_name`='$user_name'";
    $res=mysqli_query($connect1,$sql);
    $num=mysqli_num_rows($res);
    if($num<1)
    {
        if($user_pass==$user_pass1)
        {
            $sql1="INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `user_pass1`) VALUES ('$user_name', '$user_email', '$user_pass', '$user_pass1')";
            $res1=mysqli_query($connect1,$sql1);
            if($res1)
            {
                header("location: /igectechhub/index?signsuc=true");
            }
            else
            {
                // echo mysqli_error($connect1);
                header("location: /igectechhub/index?signsuc=false");
            }
        }
        else
        {
            header("location: /igectechhub/index?signerr1=true");
        }
    }
    else
    {
        header("location: /igectechhub/index?signerr2=true");
    }
}

?>