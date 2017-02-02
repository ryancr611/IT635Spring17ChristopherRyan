#!/usr/bin/php
<?php
$db = new mysqli("localhost","root","gaming611","Classes");




if ($db->connect_errno != 0)
{
	echo "error connecting to database: " .$db->connect_error.PHP_EOL;
	exit();
}

echo "successfully connected!" .PHP_EOL;

$query = "select * from class;";

$queryResponse = $db-> query($query);

var_dump($queryResponse);

while($row = $queryResponse->fetch_assoc())
{
	print_r($row);
}

$db->close();

echo "program complete".PHP_EOL;

?>
