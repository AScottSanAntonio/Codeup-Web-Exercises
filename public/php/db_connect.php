<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks');

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
 //Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




// Create INSERT query
//$query = "INSERT INTO users (email, name) VALUES ('ben@codeup.com', 'Ben Batschelet')";

// Execute Query
//$numRows = $dbc->exec($query);
//echo "Inserted $numRows row." . PHP_EOL;



