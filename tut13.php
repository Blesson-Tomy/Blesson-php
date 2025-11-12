<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Factorials 1 to 10</title>
</head>
<body>
  <h1>Factorials (1 to 10)</h1>

  <table>
    <thead>
      <tr><th>Number</th><th>Factorial</th></tr>
    </thead>
    <tbody>
<?php
function factorial(int $n): int {
    if ($n < 0) {
        throw new InvalidArgumentException('Negative numbers not allowed');
    }
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}

for ($i = 1; $i <= 10; $i++) {
    $fact = factorial($i);
    // safe output (here values are integers so htmlspecialchars isn't required, but it's harmless)
    echo '<tr><td>' . htmlspecialchars((string)$i) . '</td><td>' . htmlspecialchars((string)$fact) . '</td></tr>' . PHP_EOL;
}
?>
    </tbody>
  </table>
</body>
</html>