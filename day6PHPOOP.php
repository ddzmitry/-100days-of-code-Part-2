<?php

    require 'class.Adress.inc';
echo '<h2>Instatiating Adress</h2>';

$address = new Address;

echo '<h2> Empty Adress</h2>';

echo '<tt> <pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Setting properties</h2>';
$address->street_adress_1 = '10531 Paces Ave';
$address ->city_name = 'Matthews';
$address->subdivision_name = "NC";
$address->postal_code = '28105';
$address->country_name = 'USA';


echo '<tt> <pre>' . var_export($address, TRUE) . '</pre></tt>';	

echo "<h2>Dispplay Adress</h2>";
echo $address->display();
// echo "Today is " . date("Y/m/d") . "<br>";
echo '<h2>Testing Protected access</h2>';
//fail because it is protectd;
// echo "Address ID: {$address->_address_id}";

echo "<h2> Testing magic get and set funcitons</h2>";
unset($address->postal_code);
echo $address->display();

echo "<h2> Testing Address __construct()  with an array</h2>";

$address_2 = new Address(array(
    'street_adress_1' => '123 Phovey Ave',
    'city_name' => 'VillageLand',
    'subdivision_name' => 'Refion',
    'postal_code' => '23451',
    'country_name' => 'Canada'
    
));

echo $address_2 -> display();