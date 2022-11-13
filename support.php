<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Igec Tech Hub | Support</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div id="sup-main">
        <div class="sup_img">
            <img src="images/support.jpg" alt="support">
        </div>
    </div>
    <div class="sup-1">
        <div class="container sup-2">
            <div class="sup-6">
                <h2>Why support us?</h2>
                <p>It will motivate us to do work more harder to bring you helpful content.we provide you helpful content free of cost but you may support us by donating few bucks which will make our day. You can donate us any amount even Rs 1. ;)</p>
                <h2>Can i support without paying you real money?</h2>
                <p>Obviously Yes, You can support us by - </p>
                <ul>
                    <li>Following us on instagram.</li>
                    <li>Sharing our instagram page with your friends.</li>
                    <li>Sharing out website with your friends.</li>
                </ul>
            </div>
            <div class="sup-3">
                <h4>Scan this QR code</h4>
                <img src="images/pay.jpg" alt="qr">
            </div>
        </div>

    </div>
    <div class="sup-5 py-4">
        <div class="sup-4 container">
            <h2 style="text-align: center;">People who support us</h2>
            <table class="table mb-0 pb-2 table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">S no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql="SELECT * FROM `support`";
                    $res=mysqli_query($connect1,$sql);
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo '<tr>
                                <th scope="row">'. $row['sup_sno'] .'</th>
                                <td>'. $row['sup_name'] .'</td>
                                <td>'. $row['sup_amount'] .'/- Rs.</td>
                            </tr>';
                    }
                    
                    ?>

                </tbody>
            </table>
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