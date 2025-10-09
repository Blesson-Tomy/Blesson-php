<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
<form method='POST' action="string.php">
    <label>Name: </label>
    <input type="text" id="t1" name="t1" placeholder="Text"><br>

    <label>Age: </label>
    <input type="text" id="t2" name="t2" placeholder="Age">
    <button id="Check">Search</button>
</form>


    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nam=$_POST['t1'];
        $age=$_POST['t2'];
        if($age<18)
        {
            echo "Hello $nam, you are not eligible to vote with $age years";
        }
        else
        {
            echo "Hello $nam, you are eligible to vote with $age years";
        }
    }
    
    // if ($_SERVER["REQUEST_METHOD"] == "POST") 
    //     {
    //         echo $str;
    // echo $patt;
    //     $string = $_POST['str'];
    //     $patte = $_POST['patt'];
    //     $pattern = '/' . $patte . '/';
    //     if( preg_match($pattern, $string) ) {
    //         echo "Pattern found in the string.<br>";
    //     } else {
    //         echo "Pattern not found in the string.<br>";
    //     }

    // }

    // $str = "Apples and Bananas";
    // $patt = "/ba(na){2}/i";
    // echo preg_match_all($patt, $str);
    // $str = "Visit Microsoft";
    // $pattern = "/\b([a-zA-Z]*ft)\b/i";
    // echo preg_match_all($pattern, $str);


    
    ?>
</body>
</html>