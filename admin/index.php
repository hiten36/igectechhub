<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        a{
            color: black;
            text-decoration: none;
        }
    </style>
    <title>Igec Tech Hub | Admin</title>
</head>

<body>
    <?php
    session_start();
    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']=='POST')
    {
        $username=$_POST['user_name'];
        $userpass=$_POST['user_pass'];
        if($username=='admin')
        {
            $sql="SELECT * FROM `users` WHERE `user_name`='$username' AND `user_pass`='$userpass'";
            $res=mysqli_query($connect1,$sql);
            $num=mysqli_num_rows($res);
            if($num>0)
            {
                session_start();
                $_SESSION['loggedin']='true';
                $_SESSION['name']='admin';
            }
        }
    }
    if(isset($_GET['logout']))
    {
        $_SESSION['loggedin']='false';
        session_unset();
        session_destroy();
        header("location: index");
    }
    
    ?>
    <h1>Welcome Admin</h1>
    <?php
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true' && $_SESSION['name']=='admin')
    {
        echo '<ul class="list-group">
        <li class="list-group-item"><a href="up_event">Upload Notes</a></li>
        <li class="list-group-item"><a href="up_notes">Upload Events</a></li>
        <li class="list-group-item"><a href="index?logout">Logout</a></li>
      </ul>';
    }
    else
    {
        echo '<form action="index.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="user_name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="user_pass" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>';
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</html>