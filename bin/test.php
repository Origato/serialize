#!/usr/bin/env php
<?php
echo 123;
require_once __DIR__ . '/../src/Person.php';
require_once __DIR__ . '/../src/Serializer.php';

$person = new Person("Sasha", "Noha", "29");

// serializator creating logic
$person = [
    "FName"=>$person->getFirstName(),
    "LName"=>$person->getLastName(),
    "Age"=>$person->getAge(),
];

$serializer = new Serializer();
$res = $serializer->serialize($person, "json");
print_r($res);