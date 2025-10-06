<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php
    $i=0;
    $ans=0;
   do
   {
    $ans=$ans+$i;
    $i++;
    echo "The number is: ". $i. "<br>";
   }while($i<=100)
   echo "The answer is: " . $ans;
?>
</body>
</html>