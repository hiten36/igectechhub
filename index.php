<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub</title>
</head>

<body>
    <? include 'nav.php'; ?>
    <div id="first">
        <h1><span id="first_head"></span></h1>
        <h3>Padega Igec tabhi to badega Igec</h3>
        <p>We are an official organisation of coding department of IGEC (Indira Gandhi Engineering College). We help students to solve their doubts related coding/technical stuff. We organise events daily quizes (You can find it on our insta handler) regularly, We think no matter which branch student you are, You should learn coding. Because in near future job opportunities in tech field will gonna boom!</p>
    </div>
    <div class="eve-main">
        <h2 class="text-center">Our Events</h2>
        <div class="event_div1">
            <?php

            $flag=false;
            $sql="SELECT * FROM `event`";
            $res=mysqli_query($connect1,$sql);
            $num=mysqli_num_rows($res);
            if($num>0)
            {
                echo '<div class="eve container">
                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                        
                        $i=1;
                        $sql1="SELECT * FROM `event`";
                        $res1=mysqli_query($connect1,$sql1);
                        $num1=mysqli_num_rows($res1);
                        while($i<ceil($num1/3))
                        {
                            echo '<button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="'. $i .'" aria-label="Slide '. ($i+1) .'"></button>';
                            $i=$i+1;
                        }

                    echo '</div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">';
                        
                        $sql="SELECT * FROM `event`";
                        $res=mysqli_query($connect1,$sql);
                        $j=0;
                        while($row=mysqli_fetch_assoc($res))
                        {
                            echo '
                                    <div class="col-md-4">
                                    <a class="event_a" href="event?event_id='. $row['event_sno'] .'"><div class="eve-card">
                                        <div class="eve-card1">
                                            <img src="uploads/'. $row['event_img'] .'" alt="logo">
                                        </div>
                                        <div class="eve-card2">
                                            <div class="eve-card11 badge bg-'. $row['event_badge_color'] .'">'. $row['event_badge'] .'</div>
                                            <div class="eve-card12">
                                                <h5>'. $row['event_name'] .'</h5>
                                                <p>'. $row['event_desc'] .'</p>
                                            </div>
                                            <div class="eve-card13">
                                                <p>Status : <b>'. $row['event_status'] .'</b></p>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>';
                            $j=$j+1;
                            if($j != $num && fmod($j,3)==0)
                            {
                                echo '</div>
                                </div>
                                <div class="carousel-item">
                                <div class="row">';
                            }
                        }

                    echo '</div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>';
            }
            else
            {
                echo '<h4 class="text-center mb-0 pb-2">Currently no events are going on. Stay tuned! </h4>';
            }
            
            ?>
        </div>
        <div class="event_div2">
            <?php

            $flag=false;
            $sql="SELECT * FROM `event`";
            $res=mysqli_query($connect1,$sql);
            $num=mysqli_num_rows($res);
            if($num>0)
            {
                echo '<div class="eve container">
                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                        
                        $i=1;
                        $sql1="SELECT * FROM `event`";
                        $res1=mysqli_query($connect1,$sql1);
                        $num1=mysqli_num_rows($res1);
                        while($i<ceil($num1/2))
                        {
                            echo '<button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="'. $i .'" aria-label="Slide '. ($i+1) .'"></button>';
                            $i=$i+1;
                        }

                    echo '</div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">';
                        
                        $sql="SELECT * FROM `event`";
                        $res=mysqli_query($connect1,$sql);
                        $j=0;
                        while($row=mysqli_fetch_assoc($res))
                        {
                            echo '
                                    <div class="col-md-6">
                                    <a class="event_a" href="event?event_id='. $row['event_sno'] .'"><div class="eve-card">
                                        <div class="eve-card1">
                                            <img src="uploads/'. $row['event_img'] .'" alt="logo">
                                        </div>
                                        <div class="eve-card2">
                                            <div class="eve-card11 badge bg-'. $row['event_badge_color'] .'">'. $row['event_badge'] .'</div>
                                            <div class="eve-card12">
                                                <h5>'. $row['event_name'] .'</h5>
                                                <p>'. $row['event_desc'] .'</p>
                                            </div>
                                            <div class="eve-card13">
                                                <p>Status : <b>'. $row['event_status'] .'</b></p>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>';
                            $j=$j+1;
                            if($j!=$num && fmod($j,2)==0)
                            {
                                echo '</div>
                                </div>
                                <div class="carousel-item">
                                <div class="row">';
                            }
                        }

                    echo '</div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>';
            }
            else
            {
                echo '<h4 class="text-center mb-0 pb-2">Currently no events are going on. Stay tuned! </h4>';
            }
            
            ?>
        </div>
    </div>
    <div id="second">
        <div class="text">
            <h4>We have an inbuilt blog integration in this website in which you can ask your queries and you can solve other student's doubt. We think this will make you interact with each other, to seriors or to juniors or your batch mates (Other branch) and by this user - friendly interface,it will be very easy to read blogs even if you are travelling.</h4>
        </div>
        <div class="img_section">
            <img src="images/i1.svg" alt="image">
        </div>
    </div>
    <div id="third">
        <div class="img_section1">
            <img class="sec_img" src="images/i2.svg" alt="image">
        </div>
        <div class="text1">
            <h4>We provide some unique and fun facts about coding and tech related stuff in our insta handler.For your entertainment, We also post quality memes about coding and recent events happening in our college, so that we ensure you wont get bored with just coding coding and coding. </h4>
        </div>
    </div>
    <div id="card-section" class="container">
        <div class="event_div11">
            <h2 style="text-align: center; color:red; margin-bottom:10px;">Programming Notes</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                    
                    $i=1;
                    $sql="SELECT * FROM `notes`";
                    $res=mysqli_query($connect1,$sql);
                    $num=mysqli_num_rows($res);
                    while($i<ceil($num/4))
                    {
                        echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'. $i .'" aria-label="Slide '. ($i+1) .'"></button>';
                        $i=$i+1;
                    }

                    ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                    <?php
                    
                    $sql="SELECT * FROM `notes`";
                    $res=mysqli_query($connect1,$sql);
                    $j=0;
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo '
                                <div class="col-md-3">
                                    <div class="card card_ind">
                                        <img src="uploads/'. $row['notes_img'] .'" class="card-img-top" alt="'. $row['notes_img'] .'">
                                        <div class="card-body">
                                            <h5 class="card-title">'. $row['notes_name'] .'</h5>
                                            <p class="card-text">'. $row['notes_desc'] .'</p>
                                            <a href="#" class="btn btn-primary">Download notes</a>
                                        </div>
                                    </div>
                                </div>';
                        $j=$j+1;
                        if(fmod($j,4)==0)
                        {
                            echo '</div>
                            </div>
                            <div class="carousel-item">
                            <div class="row">';
                        }
                    }
                    
                    ?>
                </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="event_div12">
            <h2 style="text-align: center; color:red; margin-bottom:10px;">Programming Notes</h2>
            <div id="carouselExampleIndicators11" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                    
                    $i1=1;
                    $sql="SELECT * FROM `notes`";
                    $res=mysqli_query($connect1,$sql);
                    $num=mysqli_num_rows($res);
                    while($i1<ceil($num/2))
                    {
                        echo '<button type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide-to="'. $i1 .'" aria-label="Slide '. ($i1+1) .'"></button>';
                        $i1=$i1+1;
                    }

                    ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                    <?php
                    
                    $sql="SELECT * FROM `notes`";
                    $res=mysqli_query($connect1,$sql);
                    $j1=0;
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo '
                                <div class="col-md-6">
                                    <div class="card card_ind">
                                        <img src="uploads/'. $row['notes_img'] .'" class="card-img-top" alt="'. $row['notes_img'] .'">
                                        <div class="card-body">
                                            <h5 class="card-title">'. $row['notes_name'] .'</h5>
                                            <p class="card-text">'. $row['notes_desc'] .'</p>
                                            <a href="#" class="btn btn-primary">Download notes</a>
                                        </div>
                                    </div>
                                </div>';
                        $j1=$j1+1;
                        if($j1!=$num && fmod($j1,2)==0)
                        {
                            echo '</div>
                            </div>
                            <div class="carousel-item">
                            <div class="row">';
                        }
                    }
                    
                    ?>
                </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="event_div13">
            <h2 style="text-align: center; color:red; margin-bottom:10px;">Programming Notes</h2>
            <div id="carouselExampleIndicators12" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                    
                    $i1=1;
                    $sql="SELECT * FROM `notes`";
                    $res=mysqli_query($connect1,$sql);
                    $num=mysqli_num_rows($res);
                    while($i1<ceil($num/1))
                    {
                        echo '<button type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide-to="'. $i1 .'" aria-label="Slide '. ($i1+1) .'"></button>';
                        $i1=$i1+1;
                    }

                    ?>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                    <?php
                    
                    $sql="SELECT * FROM `notes`";
                    $res=mysqli_query($connect1,$sql);
                    $j1=0;
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo '
                                <div class="col-md-12">
                                    <div class="card card_ind">
                                        <img src="uploads/'. $row['notes_img'] .'" class="card-img-top" alt="'. $row['notes_img'] .'">
                                        <div class="card-body">
                                            <h5 class="card-title">'. $row['notes_name'] .'</h5>
                                            <p class="card-text">'. $row['notes_desc'] .'</p>
                                            <a href="#" class="btn btn-primary">Download notes</a>
                                        </div>
                                    </div>
                                </div>';
                        $j1=$j1+1;
                        if($j1!=$num && fmod($j1,1)==0)
                        {
                            echo '</div>
                            </div>
                            <div class="carousel-item">
                            <div class="row">';
                        }
                    }
                    
                    ?>
                </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    

    var options = {
        strings: ['Welcome to Igec Tech Hub.', 'We are official coding community of IGEC.','We share coding notes.','We provide regular quizes and events.','Follow us on instagram.'],
        typeSpeed: 15,
        backSpeed: 20,
        backDelay: 850,
        loop: true,
    };

    var typed = new Typed('#first_head',options);
</script>
<script src="script_main.js"></script>
</html>