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
    <form action="up_notes_handle.php" method="post" enctype="multipart/form-data">
        enter notes title
        <input type="text" name="notes_title">
        enter notes link
        <input type="text" name="notes_link">
        enter notes desc
        <input type="text" name="notes_desc">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>