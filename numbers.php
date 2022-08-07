<?php

# Decalring numbers
$a = 10;
$b = 20;
$c = 20.5;

# Arithmetic operations
echo $a + $b;

echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a % $b . '<br>';
echo $a / $b . '<br>';
echo $a * $b . '<br>';

# Assignment with math operators
$a += $b; // $a = $a + $b;

# Increment operator
echo $a++;  # the value of a is first printed then addition occurs later
echo ++$a;  # the value of added by one then it is printed out

# Decrement operator
echo $a--;  # the value of a is first printed then addition occurs later
echo --$a;  # the value of added by one then it is printed out

# Number checking functions
is_float(1.25);
is_double(1.25);
is_int(1.25);
is_integer(1.25);
is_numeric("3.45"); // can take in strings as args


# Conversion
echo '<br>';

$strNumber = '12.50';
// $number = (float)$strNumber;
// $number = (int)$strNumber;
$number = floatval($strNumber);
$number = intval($strNumber);

var_dump(($number));

# Number functions
echo '<br>';

echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';


# Formatting numbers
$number = 123456789.12345;  // 123 456 789.12

/**
 * arg1 = number
 * arg2 = decimal places
 * arg3 = decimal seperator
 * arg4 = thousands seperator 
 */

echo number_format($number, 2, '.', ' ');


// https://www.php.net/manual/en/ref.math.php

?>