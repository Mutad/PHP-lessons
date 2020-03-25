<?php
$colors = array('A' => 'Blue', 'B' => 'Green', 'c' =>'Red');
echo "Actual array ";
print_r($colors);


echo "<br>Lowercase array ";
print_r(array_map('strtolower',$colors));

echo "<br>Uppercase array ";
print_r(array_map('strtoupper',$colors));




