<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>IgecTechHub | Blog</title>
</head>
<body>
    <?php include 'nav.php'; include 'login.php'; ?>
    <?php

$suc=false;
$err=false;
$err1=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $blog_title=$_POST['blog_title'];
    $blog_desc=$_POST['blog_desc'];
    $blog_title=str_replace("'","\'",$blog_title);
    $blog_desc=str_replace("'","\'",$blog_desc);
    $blog_title=str_replace("<","&lt",$blog_title);
    $blog_desc=str_replace("<","&lt",$blog_desc);
    $blog_title=str_replace(">","&gt",$blog_title);
    $blog_desc=str_replace(">","&gt",$blog_desc);  
    $user_name=$_SESSION['name'];
    $sql="SELECT * FROM `users` WHERE `user_name`='$user_name'";
    $res=mysqli_query($connect1,$sql);
    $row=mysqli_fetch_assoc($res);
    $user_id=$row['user_sno'];
    if($blog_title!='' || $blog_desc!='')
    {
        $sql1="INSERT INTO `blog` (`blog_title`, `blog_desc`, `blog_user`, `blog_ts`) VALUES ('$blog_title', '$blog_desc', '$user_id', current_timestamp())";
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

?>
    <?php
    if($suc)
    {
        echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Submitted Successfully!</strong> Your query has been submitted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($err)
    {
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Your query has not been submitted. Please try again after sometime.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($err1)
    {
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> You cannot submit empty blogposts!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <div id="main_blog">
        <img src="images/blog.png" alt="blog">
    </div>
    <div id="blog1">
        <div class="mb-0 blog1_inner container">
            <div class="blog_form">
                <h2 style="text-decoration: underline;" class="py-4">Start a new blog post</h2>
                <?php
                
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
                {
                    echo '<form action="blog.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" name="blog_title" id="exampleFormControlInput1" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Blog Description</label>
                            <textarea class="form-control" name="blog_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>';
                }
                else
                {
                    echo '<h3>You need to be logged in before posting blog posts! <a style="color:teal; cursor:pointer; " data-bs-toggle="modal" data-bs-target="#loginModal">Login now</a></h3>';
                }
                
                ?>

            </div>
            <h3 style="text-decoration: underline;" class="pt-3">Recent Blogs</h3>
            <div class="blog-a" style="margin-top: 15px;">
                <?php
                
                $sql="SELECT * FROM `blog`";
                $res=mysqli_query($connect1,$sql);
                $num=mysqli_num_rows($res);
                if($num>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $user_id=$row['blog_user'];
                        $sql2="SELECT * FROM `users` WHERE `user_sno`='$user_id'";
                        $res2=mysqli_query($connect1,$sql2);
                        $row2=mysqli_fetch_assoc($res2);
                        $user_name=$row2['user_name'];
                        $phpdate = strtotime( $row['blog_ts'] );
                        $mysqldate = date( "m/d/y g:i A", $phpdate );
                        echo '<a href="comment?post_id='. $row['blog_sno'] .'"><div class="media my-4 pb-2">
                        <div class="row2">
                            <div class="media-body">
                                <h5 class="mt-0">'. $row['blog_title'] .'</h5>
                                <p>'. $row['blog_desc'] .'</p>
                            </div>
                            <div class="media2">
                                <div>Posted By - <b>'. $user_name .'</b></div>
                                <div> at '. $mysqldate .'</div>
                            </div>
                        </div>
                    </div></a>';
                    }
                }
                else
                {
                    echo '<h2>No blog posts available!</h2>
                    <p>Be the first one to start a new blog post</p>';
                }
                
                ?>

            </div>

        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="script_main.js"></script>
</html>