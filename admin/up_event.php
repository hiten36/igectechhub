<?php include '../conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="up_event_handle.php" method="post" enctype="multipart/form-data">
        enter event name
        <input type="text" name="event_name">
        enter event desc
        <input type="text" name="event_desc">
        enter event badge
        <input type="text" name="event_badge">
        enter event badge_color
        <input type="text" name="event_badge_color">
        enter event status
        <input type="text" name="event_status">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>