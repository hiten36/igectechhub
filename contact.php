<?php  include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub | Contact Us</title>
</head>
<body>
    <?php  include 'nav.php'; ?>
    <?php

    $suc=false;
    $err=false;
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $college=$_POST['college'];
        $branch=$_POST['branch'];
        $desc=$_POST['desc'];
        $desc=str_replace("'","\'",$desc);
        $desc=str_replace("<","&lt",$desc);
        $desc=str_replace(">","&gt",$desc);
        $college=str_replace("'","\'",$college);
        $college=str_replace("<","&lt",$college);
        $college=str_replace(">","&gt",$college);
        $email=str_replace("'","\'",$email);
        $email=str_replace("<","&lt",$email);
        $email=str_replace(">","&gt",$email);
        if($branch==1)
        {
            $branch="I.T/CS";
        }
        if($branch==2)
        {
            $branch="E.C.E";
        }
        if($branch==3)
        {
            $branch="E.E";
        }
        if($branch==4)
        {
            $branch="M.E";
        }
        if($branch==5)
        {
            $branch="C.E";
        }
        if($branch==6)
        {
            $branch="Other";
        }
        $sql="INSERT INTO `contact` (`con_name`, `con_email`, `con_college`, `con_branch`, `con_desc`, `con_ts`) VALUES ('$name', '$email', '$college', '$branch', '$desc', current_timestamp())";
        $res=mysqli_query($connect1,$sql);
        if($res)
        {
            $suc=true;
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
        <strong>Query sent!</strong> We will get back to you soon.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($err)
    {
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please try again after sometime or contact us on instagram.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    
    ?>
    <div id="contact-main">
        <h1>Contact us</h1>
    </div>
    <div id="contact-1">
        <div class="contact-2 container-fluid">
            <div class="con_img">
                <img src="images/i3.svg" alt="contact">
            </div>
            <div class="con-main">
                <form action="contact.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="college" id="college" placeholder="Enter your college name">
                    </div>
                    <div class="mb-3">
                        <select name="branch" class="form-select" aria-label="Default select example">
                            <option selected>Select your branch</option>
                            <option value="1">Information Technology/Computer Science</option>
                            <option value="2">Electronics and Communication</option>
                            <option value="3">Electrical</option>
                            <option value="4">Mechanical</option>
                            <option value="5">Civil</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Describe your issue here" name="desc" class="form-control" id="desc" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php  include 'footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
<script src="script_main.js"></script>
</html>