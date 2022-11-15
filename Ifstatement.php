<?php

$title  = 'Ifstatement';
include 'include/header.php'

?>

<h3 style="color: red"></h3>

<?php 

$grade =80;

echo '<h2>  If Statement </h2>';

if($grade >= 50)  {
        echo '<h3 style="color: green"> You have Passed</h3>';

}
else {
    echo '<h3 style="color: red"> You have Failed</h3>';

}
$grade = 'A';
//if-Else If-Else 

if($grade == 'A'){
    echo '<h2> You are a Superstar!</h2>';
}
elseif ($grade == 'B'){
    echo '<h2> You did well!</h2>';
}
else{
    echo '<h2> You have failed....</h2>';
}



?>
    
    <?php require 'include/footer.php'?>