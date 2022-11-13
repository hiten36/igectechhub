<?php

session_start();
$logged=false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
{
  $logged=true;
}

?>
<?php include 'login.php'; include 'signin.php'; ?>
<div id="navdiv">
  <nav class="navbar">
      <ul>
          <div class="eve_nav">
            <li class="list-item"><a href="events">Our Events</a></li>
          </div>
          <li class="list-item"><a href="index">Home</a></li>
          <li class="list-item"><a href="notes">Notes</a></li>
          <li class="list-item"><a href="blog">Our Blog</a></li>
          <li class="list-item"><a href="index"><img class="main_logo" src="images/logo.png" alt="logo"></a></li>
          <li class="list-item"><a href="about">About Us</a></li>
          <li class="list-item"><a href="contact">Contact Us</a></li>
          <li class="list-item"><a href="support">Support Us</a></li>
          <div class="log">
              <?php
              
              if(!$logged)
              {
                  echo '<div class="resp_nav1"><li style="padding:0px 10px" data-bs-toggle="modal" data-bs-target="#loginModal" class="list-item"><img src="images/login.svg" alt="login"><span>Login</span></li>
                  <li style="padding:0px 10px" data-bs-toggle="modal" data-bs-target="#signinModal" class="list-item"><img src="images/signin.svg" alt="sign in"><span>Sign In</span></li></div>';
                  echo '<div class="resp_nav2"><li data-bs-toggle="modal" data-bs-target="#loginModal" class="list-item"><img src="images/login.svg" alt="login"><span>Login</span></li>
                  <li data-bs-toggle="modal" data-bs-target="#signinModal" class="list-item"><img src="images/signin.svg" alt="sign in"><span>Sign In</span></li></div>';
              }
              else
              {
                  echo '<div class="resp_nav1"><li class="list-item"><span style="margin-right:14px;">Welcome '. $_SESSION['name'] .'</span></li>
                  <a style="color:white; text-decoration:none;" href="logout"><li class="list-item"><img src="images/logout.svg" alt="logout"><span>Log Out</span></li></a></div>
                  ';
                  echo '<div class="resp_nav2"><li class="list-item"><span>Welcome '. $_SESSION['name'] .'</span></li>
                  <a style="color:white; text-decoration:none;" href="logout"><li class="list-item"><img src="images/logout.svg" alt="logout"><span>Log Out</span></li></a></div>
                  ';
              }
              
              ?>

          </div>
      </ul>
  </nav>
  <div class="menu_21">
    <h4 class="my-0"><a href="index">Tech Hub</a></h4>
  </div>
  <div class="menu_22">
    <?php
              
      if(!$logged)
      {
          echo '<div class="menu_nav1"><div class="menu_nav2" data-bs-toggle="modal" data-bs-target="#loginModal"><img src="images/login.svg" alt="login"><span>Login</span></div>
          <div class="menu_nav2" data-bs-toggle="modal" data-bs-target="#signinModal"><img src="images/signin.svg" alt="sign in"><span>Sign In</span></div></div>';

      }
      else
      {
          echo '<div class="menu_nav1"><div class="menu_nav2"><span>Welcome '. $_SESSION['name'] .'</span></div>
          <a style="color:white; text-decoration:none;" href="logout"><div><img src="images/logout.svg" alt="logout"><span>Log Out</span></div></a></div>
          ';

      }
      
    ?>
  </div>
  <div class="menu">
    <h5 id="menu_head">Menu</h5>
    <img id="menu_img" src="images/close.svg" alt="close">
  </div>
  <div class="menu1">
    <div class="menu2">
      <div class="menu-item"><a href="index">Home</a></div>
      <div class="menu-item"><a href="blog">Our Blog</a></div>
      <div class="menu-item"><a href="events">Our Events</a></div>
    </div>
    <div class="menu2">
      <div class="menu-item"><a href="notes">Notes</a></div>
      <div class="menu-item"><a href="about">About Us</a></div>
      <div class="menu-item"><a href="contact">Contact Us</a></div>
    </div>
    <div class="menu2">
      <div class="menu-item"><a href="support">Support Us</a></div>
    </div>
  </div>
</div>

<?php

if(isset($_GET['signsuc']) && $_GET['signsuc']=="true")
{
    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Sign in success!</strong> You can now log in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['loginsuc']) && $_GET['loginsuc']=="true")
{
    echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Log in success!</strong> Welcome to Igec Tech Hub.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['loginsuc']) && $_GET['loginsuc']=="false")
{
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Password mismatch!</strong> Please check and re-enter your password.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['loginerr']) && $_GET['loginerr']=="true")
{
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Login failed!</strong> Account does not exist.You can sign in now!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['signsuc']) && $_GET['signsuc']=="false")
{
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Sign in failed!</strong> Please try again after some time.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['signerr1']) && $_GET['signerr1']=="true")
{
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Password does not match in both columns!</strong> Please check and re-enter your password.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['signerr2']) && $_GET['signerr2']=="true")
{
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Sign in failed!</strong> Username already exists, Please try with another username.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['logoutsuc']) && $_GET['logoutsuc']=="true")
{
    echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Logout Successfully!</strong> Hope, you will get back to us soon. 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>