<?php
$title  = 'Switchstatement';
include 'include/header.php'

?>
    <h1> Switch Statement    </h1>
    <?php 
    $grade = 'B';

    switch($grade){
        case 'A':
            echo '<h2 style="color: green"> You are Superstar! </h2>';
                 break;
        case 'B':
             echo '<h2 style ="color: Blue">You did well!</h2>';
                break;
        case 'C':
                default:
                echo '<h2 style="color: red"> You have failed....</h2>';
                break;
    }
    
    ?>
<?php require 'include/footer.php'?>