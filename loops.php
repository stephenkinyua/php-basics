<?php

// while loop
$counter = 0;

// while ($counter < 10) {
//     echo $counter;
//     $counter++;
// }


// Loop at least once with do - while
do {
    echo $counter . '<br>';
    $counter++;
} while ($counter < 10);


// for
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

// foreach
$fruits = ['banana', 'apple'];

foreach ($fruits as $i => $fruit) {
    echo $i . '-' . $fruit;
}

// Iterate Over associative array.
$person = [
    'name' => 'Mike',
    'age' => 20
];

foreach ($person as $key => $value) {
    echo $key . '-' . $value;
}
