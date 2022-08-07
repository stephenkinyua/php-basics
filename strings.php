<?php

# Create a simple string

$br = '<br>';

$greeting = 'Hello....';
$name = 'Mike';

echo $greeting . $br . $name;
$ng2 = "Hello I am $name. I am $age years old.";

echo $ng2;

# String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // find the position of the word in the string
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL; // i stands for ignore case
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . substr($string, 8, 3) . '<br>' . PHP_EOL; // second arg represents the length of the string

echo "16 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; // search for world and replace it with php in the string
echo "17 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;

echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;


// Multiline Text
$longText = "
    Hello, my name is Mike.
    I am <b>27</b>.
    I love my family.";

echo nl2br($longText).$br;
echo htmlentities($longText).$br;
echo nl2br(htmlentities($longText).$br)

// https://www.php.net/manual/en/ref.strings.php

?>
