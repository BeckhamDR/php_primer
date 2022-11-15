<?php
$title  = 'Whiledowhileloop';

include 'include/header.php'

?>

    <h1>While Loop</h1>
    <?php


           $grade = 0;
           //Infinite loop
      //  While($grade < 10){
       //     echo '<p> I am Less Than 10!</p>';
        //}
        //Pre-Condition Loop

        While($grade < 10){
echo '<p> I am Less Than 10!</p>';
        $grade++;
        }
        echo 'Exit Loop!';
    ?>
<h1> Do-While Loop</h1>

<?php
//Post- Condition Loop
$grade = 0;
Do{
    echo '<p> I am Do While Loop</p>';
    $grade++;
}while ($grade < 10);


?>


<?php require 'include/footer.php'?>