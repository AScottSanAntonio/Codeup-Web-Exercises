<?php

require 'db_connect.php';

$query = 'DROP TABLE IF EXISTS national_parks;';
//runs query
$dbc->exec($query);

$query = 'CREATE TABLE national_parks (
id INT UNSIGNED AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
location VARCHAR(150) NOT NULL,
date_established DATE NOT NULL,
area_in_acres DOUBLE PRECISION(8,3) NOT NULL,
description VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);';

$dbc->exec($query);