<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
    $_SESSION["uname"]="Blesson";
    $_SESSION["pwd"]="1234";
    echo "Session variables are set. The login name is " . $_SESSION["uname"];
    ?>
</body>
</html>