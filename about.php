<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub | About Us</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div id="about-main">
        <div class="about-3 py-4 container">
            <div class="about-1 px-4">
                <h1>About Us</h1>
                <p>We are a coding community and students of IGEC. Our mission is to provide right path to each and every student of igec or any other college about programming and coding. There are lot of pages which do the same but by following us,we can assure you a 100% success in coding field.</p>
                <p>We will provide you notes and question about coding which is very easily accessible.You dont have to go here and there for anything now.We regularly do events which will crystal clear your concepts about programming and we regularly share coding tips and tricks which will boost up your motivation.</p>
                <p>We do share memes related to programming and if you are from igec then its great for you,we also share memes about our college regularly on the present scenario.</p>
                <div>
                    <button class="contact-btn"><a href="contact">Contact Us</a></button>
                    <button class="support-btn"><a href="support">Support Us</a></button>
                </div>
            </div>
            <div class="about-2 ">
                <img src="images/logo.png" alt="igec tech hub">
            </div>
        </div>
    </div>
    <div id="about-main1" class="py-5">
        <div class="container about12">
            <div class="about-11">
                <h1>Wanna join our community?</h1>
                <h3>Follow us on instagram</h3>
                <div class="ig">
                    <a target="=_blank" href="https://www.instagram.com/igectechhub/"><img src="images/ig.png" alt="instagram"></a>
                </div>
            </div>
            <div class="about-13">
                <img src="images/s1.png" alt="code">
            </div>
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