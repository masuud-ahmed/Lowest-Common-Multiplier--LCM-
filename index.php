<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowest Common Multiplier (LCM)</title>
</head>
<body>
    <h1>Name: Masud Ahmed Yusuf <br> ID: C1211446</h1>
<?php
function calculateLCM($a = 12, $b = 18) {
    $max = ($a > $b) ? $a : $b;
    while (true) {
        if ($max % $a == 0 && $max % $b == 0) {
            return $max;
        }
        $max++;
    }
}
echo "LCM of 12 and 18 is: " . calculateLCM() . "<br>";  ///this one uses the defualt value of the function
echo "LCM of 10 and 20 is: " . calculateLCM(10,20) . "<br>"; //// Still using the function and i passed new argument 
?>
</body>
</html>