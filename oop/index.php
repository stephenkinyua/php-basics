<?php

require_once 'Person.php';
require_once 'Student.php';


$p = new Person('Brad', 'Traversy');
$s = new Student('Brad', 'Traversy', 'Be233/0534/2015');


echo '<pre>';
var_dump($p);
echo '</pre>';
