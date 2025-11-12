<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OddorEven</title>
</head>
<body>
    <form method="POST">
        <label>Enter the Number:</label>
        <input type="number" name="number" size="10" maxlength="1"></input>
        <button>Check</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $number = $_POST["number"];
        if($number % 2 == 0)
        {
            echo "<h2>$number is Even</h2>";
        }
        else
        {
            echo "<h2>$number is Odd</h2>";
        }
    }
    ?>

    
</body>
</html>