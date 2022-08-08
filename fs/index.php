<?php

$br = '<br>';

// Magic constants
echo  __DIR__ . $br; // the directory in which the file we are running is in
echo  __FILE__ . $br; // the current file
echo  __LINE__ . $br; // the line on the file


// Create directory
mkdir('foo');

// Rename directory
rename('foo', 'foo2');

// Delete directory
rmdir('foo2');

// Read files and folders inside directory
// echo file_get_contents('message.txt'); // Read a file and return the output

// file_get_contents, file_put_contents
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

file_put_contents('sample.txt', 'Some content');


// file_get_contents from URL
$usersJSON = file_get_contents('https://jsonplaceholder.typicode.com/users');

// convert json to an associative array
$users = json_decode($usersJSON, true);

echo '<pre>';
var_dump($users);
echo '</pre>';


// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file