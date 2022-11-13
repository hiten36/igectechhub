<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub | Feedback</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <?php
    
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $feed_1=$_POST['inlineRadioOptions'];
        $feed_2=$_POST['inlineRadioOptions2'];
        $feed_3=$_POST['inlineRadioOptions3'];
        $feed_4=$_POST['inlineRadioOptions4'];
        $feed_desc=$_POST['feed_desc'];
        $feed_desc=str_replace("'","\'",$feed_desc);
        $feed_desc=str_replace("<","&lt",$feed_desc);
        $feed_desc=str_replace(">","&gt",$feed_desc);
        $sql="INSERT INTO `feedback` (`feed_1`, `feed_2`, `feed_3`, `feed_4`, `feed_desc`) VALUES ('$feed_1', '$feed_2', '$feed_3', '$feed_4', '$feed_desc');";
        $res=mysqli_query($connect1,$sql);
        if($res)
        {
            echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                <strong>Sent!</strong> Feedback form has been sent successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        else
        {
            echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Unable to send feedback form, Please try again after sometime.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
    
    ?>
    <div id="timeup-main">
        <h1 style="color:red;">Time Up</h1>
        <h3>Your responses have been saved and result will be announced soon. Thank You!</h3>
        <h3>We will get back to you soon.</h3>
    </div>

    <div class="timeup-1">
        <?php
        
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true')
        {
            echo '        <div class="container mb-0">
            <h3>Give your valuable feedback</h3>
            <form action="timeup.php" method="POST">
                <div class="timeup_1_inner">
                    <h5>Rate difficulty level</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="easy">
                        <label class="form-check-label" for="inlineRadio1">Easy</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="medium">
                        <label class="form-check-label" for="inlineRadio2">Medium</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="hard">
                        <label class="form-check-label" for="inlineRadio3">Hard</label>
                    </div>
                </div>
                <div class="timeup_1_inner">
                    <h5>Rate website layout</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="poor">
                        <label class="form-check-label" for="inlineRadio4">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio5" value="below average">
                        <label class="form-check-label" for="inlineRadio5">Below Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio6" value="average">
                        <label class="form-check-label" for="inlineRadio6">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio7" value="above average">
                        <label class="form-check-label" for="inlineRadio7">Above Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio8" value="perfect">
                        <label class="form-check-label" for="inlineRadio8">Perfect</label>
                    </div>
                </div>
                <div class="timeup_1_inner">
                    <h5>Rate time management</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio9" value="not sufficient">
                        <label class="form-check-label" for="inlineRadio9">Not Sufficient</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio10" value="sufficient">
                        <label class="form-check-label" for="inlineRadio10">Sufficient</label>
                    </div>
                </div>
                <div class="timeup_1_inner">
                    <h5>Rate your overall experience</h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio11" value="poor">
                        <label class="form-check-label" for="inlineRadio11">Poor</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio12" value="average">
                        <label class="form-check-label" for="inlineRadio12">Average</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio13" value="good">
                        <label class="form-check-label" for="inlineRadio13">Good</label>
                    </div>
                </div>
                <div class="timeup_1_inner">
                    <h5>Any extra suggestions / feedback will be appreciated</h5>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="feed_desc" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>';
        }
        else
        {
            echo '<h3>Please log in to fill feedback form.</h3>';
        }
        
        ?>

    </div>

    <?php include 'footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>