<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub | Events</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div id="event-main">
        <h1>Our Events</h1>
        <h3>You can find all upcoming events and past events done by us</h3>
        <div class="container event-main-inner1">
            <?php
            $sql="SELECT * FROM `event`";
            $res=mysqli_query($connect1,$sql);
            while($row=mysqli_fetch_assoc($res))
            {
                echo '<div class="col-md-4 event-main-inner2">
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
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<script src="script_main.js"></script>
</html>