<?php
//number in pounds that we want to convert
$pounds = 127;
//floating pt value for kilo conversion
$lbs_to_kg = 0.453592;
//use variables above to calculate pounds multiplied by kilo conversion
$kilograms = $pounds * $lbs_to_kg;
//display pounds to kilograms
echo "weight: ";
echo $pounds;
echo " lb - ";
echo $kilograms;
echo " kg ";
//number in miles want to convert to km
$miles = 2.5;
//floating pt value for the mile to km conversion
$mile_to_km = 1.60934;
//use the variables above to calculate miles multiplied by the kilometer conversion
$kilometers = $miles * $mile_to_km;
//display miles to kilometers
echo "Distance: ";
echo $miles;
echo "miles = ";
echo $kilometers;
echo " km ";

?>