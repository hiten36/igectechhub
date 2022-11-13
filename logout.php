<?php

session_start();
session_unset();
session_destroy();
header("location: index.php?logoutsuc=true");
exit;

?>