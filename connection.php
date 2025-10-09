<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <form method='POST' action="connection.php">
    <label>uname: </label>
    <input type="text" id="t1" name="t1" placeholder="Text"><br>
    <label>FName </label>
    <input type="text" id="t2" name="t2" placeholder="FName">
    <label>Age</label>
    <input type="text" id="t3" name="t3" placeholder="Age">
    <label>Gender</label>
    <input type="text" id="t4" name="t4" placeholder="Gender">
    <button id="Check">Search</button>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test-up";

    if($_SESSION)
    {
        $uname = $_POST['t1'];
        $fname = $_POST['t2'];
        $age = $_POST['t3'];
        $gender = $_POST['t4'];
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO test-up (uname, fname, age, gender) VALUES ('$uname', '$fname', '$age', '$gender')";
    if($conn)
    {
        echo "Connection Successful to the database " . $dbname;
    }
    else
    {
        echo "Connection Failed";
    }
    ?>
</body>
</html>