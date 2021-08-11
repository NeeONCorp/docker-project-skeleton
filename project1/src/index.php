<?php
phpinfo();exit;
include './vendor/autoload.php';

$mongo_client = new MongoDB\Client("mongodb://localhost:27017");

$db = $mongo_client->my_application;
$collection = $db->employee;
$collection->insertOne( [ 'name' =>'Peter', 'email' =>'peter@abc.com' ] );
$record = $collection->find( [ 'name' =>'Peter'] );

foreach ($record as $employe) {
	echo $employe['name'], ': ', $employe['email']."<br>";
}