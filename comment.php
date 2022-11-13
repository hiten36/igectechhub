<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>IgecTechHub | Comments</title>
</head>
<body>
    <?php include 'nav.php'; include 'login.php';?>
    <?php

    $suc=false;
    $err=false;
    $err1=false;
    $suc2=false;
    $err2=false;
    $err12=false;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['user_reply']))
        {
            $rep_desc=$_POST['user_reply'];
            $rep_desc=str_replace("'","\'",$rep_desc);
            $rep_desc=str_replace("<","&lt",$rep_desc);
            $rep_desc=str_replace(">","&gt",$rep_desc);
            $comm_id=$_POST['comm_id'];
            $user_name=$_SESSION['name'];
            $sql="SELECT * FROM `users` WHERE `user_name`='$user_name'";
            $res=mysqli_query($connect1,$sql);
            $row=mysqli_fetch_assoc($res);
            $user_id=$row['user_sno'];
            $likes=0;
            if($rep_desc!='')
            {
                $sql1="INSERT INTO `replies` (`rep_desc`, `rep_comm`, `rep_user`, `rep_ts`) VALUES ('$rep_desc', '$comm_id', '$user_id', current_timestamp())";
                $res1=mysqli_query($connect1,$sql1);
                if($res1)
                {
                    $suc2=true;
                }
                else
                {
                    $err2=true;
                }
            }
            else
            {
                $err12=true;
            }
        }
        else if(isset($_POST['hid_like']))
        {
            $comm_id2=$_POST['hid_like'];
            $sql="SELECT * FROM `comment` WHERE `comm_sno`='$comm_id2'";
            $res=mysqli_query($connect1,$sql);
            $row=mysqli_fetch_assoc($res);
            $prev_like=$row['comm_likes'];
            $next_like=$prev_like+1;
            $sql1="UPDATE `comment` SET `comm_likes` = '$next_like' WHERE `comment`.`comm_sno` = $comm_id2;";
            $res1=mysqli_query($connect1,$sql1);
            $current_user=$_SESSION['name'];
            $sql6="SELECT * FROM `users` WHERE `user_name`='$current_user'";
            $res6=mysqli_query($connect1,$sql6);
            $row6=mysqli_fetch_assoc($res6);
            $current_user_id=$row6['user_sno'];
            $sql2="INSERT INTO `likes` (`like_comm`, `like_user`) VALUES ('$comm_id2', '$current_user_id');";
            $res2=mysqli_query($connect1,$sql2);
        }
        else
        {
            $comm_desc=$_POST['comm_desc'];
            $comm_desc=str_replace("'","\'",$comm_desc);
            $comm_desc=str_replace("<","&lt",$comm_desc);
            $comm_desc=str_replace(">","&gt",$comm_desc);
            $blog_id=$_GET['post_id'];
            $user_name=$_SESSION['name'];
            $sql="SELECT * FROM `users` WHERE `user_name`='$user_name'";
            $res=mysqli_query($connect1,$sql);
            $row=mysqli_fetch_assoc($res);
            $user_id=$row['user_sno'];
            if($comm_desc!='')
            {
                $sql1="INSERT INTO `comment` (`comm_desc`, `comm_user`, `comm_ts`, `comm_blog`,`comm_likes`) VALUES ('$comm_desc', '$user_id', current_timestamp(),'$blog_id','0')";
                $res1=mysqli_query($connect1,$sql1);
                if($res1)
                {
                    $suc=true;
                }
                else
                {
                    $suc1=true;
                }
            }
            else
            {
                $err=true;
            }
        }
    }

?>
    <?php
    if($suc)
    {
        echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Submitted Successfully!</strong> Your comment has been posted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($suc2)
    {
        echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Reply Posted!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($err2)
    {
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Your reply couldnt post. Please try again after sometime.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($err12)
    {
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> You cannot post empty replies!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    
    ?>
    <div id="comm_main">
        <div class="py-4 container">
            <?php
            $post_id=$_GET['post_id'];
            $sql="SELECT * FROM `blog` WHERE `blog_sno`='$post_id'";
            $res=mysqli_query($connect1,$sql);
            $row=mysqli_fetch_assoc($res);
            $user_id2=$row['blog_user'];
            $sql1="SELECT * FROM `users` WHERE `user_sno`='$user_id2'";
            $res1=mysqli_query($connect1,$sql1);
            $row1=mysqli_fetch_assoc($res1);
            $user_name2=$row1['user_name'];
            echo '<div class="jumbotron row jumbotron-fluid">
                <div class="container">
                    <h1>'. $row['blog_title'] .'</h1>
                    <p class="lead">'. $row['blog_desc'] .'</p>
                </div>
                <div>Posted By - <b>'. $user_name2 .'</b> at '. $row['blog_ts'] .'</div>
            </div>';
            ?>
        </div>
    </div>
    <div id="comm1">
        <div class=" py-3 comm1_cont container">
            <?php
            $post_id=$_GET['post_id'];
            $sql="SELECT * FROM `comment` WHERE `comm_blog`='$post_id'";
            $res=mysqli_query($connect1,$sql);
            $num=mysqli_num_rows($res);
            if($num>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
                    {
                        $current_user=$_SESSION['name'];
                        $sql6="SELECT * FROM `users` WHERE `user_name`='$current_user'";
                        $res6=mysqli_query($connect1,$sql6);
                        $row6=mysqli_fetch_assoc($res6);
                        $current_user_id=$row6['user_sno'];
                    }
                    $comm_sno=$row['comm_sno'];
                    $user_id=$row['comm_user'];
                    $sql2="SELECT * FROM `users` WHERE `user_sno`='$user_id'";
                    $res2=mysqli_query($connect1,$sql2);
                    $row2=mysqli_fetch_assoc($res2);
                    $user_name=$row2['user_name'];
                    $phpdate = strtotime( $row['comm_ts'] );
                    $mysqldate = date( "m/d/y g:i A", $phpdate );
                    echo '<div class="media my-2">
                    <div class="row2 my-1">
                        <div class="media-body media-body22">
                            <p class="mb-2 mt-5">'. $row['comm_desc'] .'</p>
                            <div class="rep">
                                <input type="hidden" value="'. $row['comm_sno'] .'">
                                <span>';
                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
                                {
                                    $sql5="SELECT * FROM `likes` WHERE `like_comm`='$comm_sno' AND `like_user`='$current_user_id'";
                                    $res5=mysqli_query($connect1,$sql5);
                                    $num5=mysqli_num_rows($res5);
                                    if($num5==0)
                                    {
                                        echo '<span class="like_form like_text">
                                            <form action="'. $_SERVER['REQUEST_URI'] .'" method="POST" name="like_form1">
                                                <input name="hid_like" type="hidden" value="'. $row['comm_sno'] .'">
                                                <img src="images/like.svg" style="margin-right:4px;"> Like 
                                            </form>
                                        </span>';
                                    }
                                    else
                                    {
                                        echo '<span class="like_text">
                                                <div>
                                                    <img src="images/like.svg" style="margin-right:4px;"> Liked 
                                                </div>
                                            </span>';
                                    }
                                }
                                else
                                {
                                    echo '<span class="like_text">
                                            <div style="display:table;" data-bs-toggle="modal" data-bs-target="#loginModal">
                                                <img src="images/like.svg" style="margin-right:4px;"> Like 
                                            </div>
                                        </span>';
                                }


                                    echo '
                                    <span style="margin-right:14px;" class="badge bg-danger">'. $row['comm_likes'] .'</span>
                                </span>';
                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
                                {
                                    echo '<input type="hidden" value="flag">
                                    <span class="reply">Reply <img src="images/reply.svg"></span>';
                                }
                                else
                                {
                                    echo '<input type="hidden" value="nflag">
                                    <span data-bs-toggle="modal" data-bs-target="#loginModal" class="reply">Reply <img src="images/reply.svg"></span>';
                                }
                            echo '</div>
                            <form class="mt-3" action="'. $_SERVER['REQUEST_URI'] .'" method="POST"></form>
                            <input type="hidden" value="'. $row['comm_sno'] .'">';
                            $comm_id1=$row['comm_sno'];
                            $sql3="SELECT * FROM `replies` WHERE `rep_comm`='$comm_id1'";
                            $res3=mysqli_query($connect1,$sql3);
                            $num3=mysqli_num_rows($res3);
                            if($num3>0)
                            {
                                echo '<h5>Replies</h5>';
                                while($row3=mysqli_fetch_assoc($res3))
                                {
                                    $user_id1=$row3['rep_user'];
                                    $sql4="SELECT * FROM `users` WHERE `user_sno`='$user_id1'";
                                    $res4=mysqli_query($connect1,$sql4);
                                    $row4=mysqli_fetch_assoc($res4);
                                    $user_name1=$row4['user_name'];
                                    $phpdate1 = strtotime( $row3['rep_ts'] );
                                    $mysqldate1 = date( "m/d/y g:i A", $phpdate1 );
                                    echo '
                                    <div class="reply_main12 mt-4">
                                            <div class="mt-1 media22 media2">
                                                <div>Replied By - <b>'. $user_name1 .'</b>  at '. $mysqldate1 .'</div>
                                                
                                            </div>
                                            <div class="media-body">
                                                <p class="reply_p1">'. $row3['rep_desc'] .'</p>
                                            </div>
                                        </div>';
                                }
                            }

                        echo '</div>
                        <div class="media2">
                            <div>Commented By - <b>'. $user_name .'</b></div>
                            <div> at '. $mysqldate .'</div>
                        </div>
                    </div>
                </div>';
                }
            }
            else
            {
                echo '<h2>No comments found!</h2>
                <p>Be the first one to post a comment.</p>';
            }
            
            ?>
        </div>
    </div>
    <div id="comm2">
        <div class=" py-3 container">
            <h2 style="text-decoration: underline;" class="pt-3">Do a comment</h2>
            <?php
            
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
            {
                echo '<form action="'. $_SERVER['REQUEST_URI'] .'" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Comment</label>
                            <textarea class="form-control" name="comm_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>';
            }
            else
            {
                echo '<h3>You need to be logged in before posting comments! <a style="color:teal; cursor:pointer; " data-bs-toggle="modal" data-bs-target="#loginModal">Login now</a></h3>';
            }
            
            ?>

        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="script1.js"></script>
<script src="script_main.js"></script>
</html>