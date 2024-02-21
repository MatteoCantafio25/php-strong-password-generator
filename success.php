<?php
require_once __DIR__ . '/includes/utils/functions.php';
session_start();
session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='./includes/css/style.css'>
    <title>Success</title>
</head>
<body>
    <div class="container mt-5">
        <!-- Alert -->
       <?php require_once __DIR__ . '/includes/templates/alert.php' ?>
    </div>
</body>
</html>