<?php

$val = $_POST['num'];
$name = $_POST['name'];

$adis = ["funny", "smart", "nerdy", "awesome"];
$names = ["Raj", "Taras", "Laxmi", "Maureen", "Imelda"];

for($i = 0; $i < $val; $i++) {
    //$name = $names[rand(0, count($names) - 1)];
    $adj = $adis[rand(0, count($adis) - 1)];

    echo "<h3>$name is $adj</h3>";
}
