<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form method="POST" action="practice.php">
    <label>Username</label>
    <input type="text" name="name" placeholder="UName">
    <br>
    <label>Password</label>
    <input type="password" name="pass" placeholder="Password">
    <input type="number" name="num" placeholder="Enter the number">
    <button type="submit">Submit</button>
   
</form>

    <?php 
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $num = $_POST['num'];
        $store=$num;
        $ans=0;
        while($num!=0)
        {  
            $temp = $num % 10;
            $ans = $ans + $temp * $temp * $temp;
            $num = $num/10;
        }
        if($ans==$store){
            echo "The number $store is an Armstrong number.";
        }
        else{
            echo "The number $store is not an Armstrong number.";
        }
        echo "<br>";

        echo "The name of the user is: $name!";
        echo "The password of the user is: $pass!";
    }


    ?>
    
</body>
</html>