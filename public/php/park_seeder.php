<?php  
require 'db_connect.php';

$query = 'DELETE FROM national_parks;';
$parks = [
    ['name' => 'American Samoa National Park',   'location' => 'American Samoa', 'date_established' => '1988/10/31', 'area_in_acres' => 9000.00, 'description' => 'Beautiful lush islands']
    
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description);');

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

    var_dump($stmt);

    $stmt->execute();
}
//runs query
//$dbc->exec($query);

// Create INSERT query
//$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES ('American Samoa National Park', 'American Samoa', '1988/10/31', 90000.00), ('American Samoa 2 Electric Boogaloo National Park', 'American Samoa', '1988/11/01', 90001.00), ('Killer Klowns from Outter Space Sanctuary', 'Utah', '1988/11/02', 90002.00), ('Generic, State Park', 'Somestate', '1988/11/03', 90003.00), ('Generic, Area Park', 'Somewhere', '1988/11/04', 90004.00), ('Generic, City Park', 'Somehow', '1988/11/05', 90005.00), ('test1', 'test1', '1988/11/05', 90005.00), ('test2', 'test2', '1988/11/05', 90005.00), ('test3', 'test3', '1988/11/05', 90005.00), ('test4', 'test4', '1988/11/05', 90005.00), ('test5', 'test5', '1988/11/05', 90005.00)";

// Execute Query
// $numRows = $dbc->exec($query);
// echo "Inserted $numRows row." . PHP_EOL;