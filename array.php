<?php 
$title =  'array and Printout';
include 'include/header.php'
?>
        <h1>Arrays</h1>
<?php
//A Variable

$num = 3;


//An Array
//Only one dataype
$numbers = array(1,2,3,4,5,6,7,8,9,101,23,224,34,45,67,79,81,85,900);
echo $numbers[5];

echo "<p> $numbers[9]</p>";

$size = count($numbers);
echo "<p> Array Numbers is size: $size</p>";

for($count = 0; $count < $size; $count++){
    echo "<p>$numbers[$count]</p>";
}
?>
<?php require 'include/footer.php'?>