<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Notes Section</title>
</head>

<body>
  <?php include 'nav.php'; ?>
  <div class="notes_main1">
    <h2 style="text-align: center; padding-top:20px;">Notes Section</h2>
    <div id="search">
      <input id="ns" placeholder="Search notes" type="text">
      <span><img src="images/search.svg" alt="search"></span>
    </div>
    <div id="notes1">
      <div class="row" style="align-items: center; justify-content:center">
        <?php

        $sql = "SELECT * FROM `notes`";
        $res = mysqli_query($connect1, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
          echo '<div class="card notes-card">
              <img src="uploads/' . $row['notes_img'] . '" class="card-img-top" alt="' . $row['notes_img'] . '">
              <div class="card-body card-body1">
                <h5 class="card-title">' . $row['notes_name'] . '</h5>
                <p class="card-text">' . $row['notes_desc'] . '</p>
                <a href="#" class="btn btn-success">Download</a>
              </div>
            </div>';
        }

        ?>
      </div>

    </div>
  </div>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="script_main.js"></script>
</html>