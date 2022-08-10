<?php

// Sample get
$base_url = 'https://jsonplaceholder.typicode.com';
$resource = curl_init($base_url . '/users');

// Set some default configuration
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($resource);

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// Get information about the request
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);

echo $code;

curl_close($resource);


// Making a POST request
$resource = curl_init();

$user = [
    'name' => 'Mike Epps',
    'username' => 'Mikey',
    'email' => 'mikey@example.com'
];

curl_setopt_array($resource, [
    CURLOPT_URL => $base_url . '/users',
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => json_encode($user)

]);

$result = curl_exec($resource);
curl_close($resource);

echo '<pre>';
var_dump($result);
echo '</pre>';
