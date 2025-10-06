<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
	$fruits = array("Orange"=>10, "Grapes"=>5, "Apple"=>2, "Banana"=>1);
	ksort($fruits);

foreach($fruits as $x => $y)
{
    echo "Key is " . $x . ", Value is " . $y;
    echo "<br>";
}
echo "<br>";echo "<br>";
function writeMsg() {
    echo "Hello world!";    
}
writeMsg();

function family($fname, $year) {
    echo  $fname.  " born in " . $year . "<br>";
}
family("John", 1990);
family("Jane", 1995);
family("Doe", 2000);
?>


</body>
</html>