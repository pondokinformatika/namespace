<?php

include 'Australia/Person.php';
include 'Indonesia/Person.php';

//tono, orang Indonesia
$tono = new Indo\Person;
$tono->talk();

echo '<br />';

//alex, orang Australia
$alex = new Aus\Person;
$alex->talk();