<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "bless";
    $password = " ";
    $dbname = "exam2"

    $conn = mysqli_connect($servsername, $username,$password,$dbname);

    if(!$conn)
    {
        echo "Error";
    }

    $sql = "INSERT INTO students (name, value) VALUES ('Alice','22)";
    mysqli_query($conn,$sql);



    ?>

</body>
</html>