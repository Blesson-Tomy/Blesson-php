<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form method="POST" action="practice.php">
    

    <input type="number" name="num" placeholder="Enter the number">
    <button type="submit">Submit</button>
   
</form>

    <?php 
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        //$name = $_POST['name'];
        //$pass = $_POST['pass'];
        $num = (int) $_POST['num'];   // cast to int
        $store = $num;
        $ans = 0;

        while ($num > 0) {
            $temp = $num % 10;
            $ans += $temp * $temp * $temp;
            if (function_exists('intdiv')) {
                $num = intdiv($num, 10);  
            } else {
                $num = (int) ($num / 10);   
            }
        }
        if($ans==$store){
            echo "The number $store is an Armstrong number.";
        }
        else{
            echo "The number $store is not an Armstrong number.";
        }
        echo "<br>";
    }

    ?>
    
</body>
</html>