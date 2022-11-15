<?php
$title  = 'Function';
include 'include/header.php'

?>
    
<h1> Functions</h1>

<?php
//* Defining a function

function writeMessage() {    
    echo "You are really a nice person, Have a nice time <br/>";
     }

    /* calling a function */
    writeMessage();
    echo "<hr/>";
    writeMessage();

    /* function parameters */
    function addFunction($num1, $num2){ 
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "the sum of $num1 and $num2 is: $sum<br/>";
      }
      /* Pass by reference - use ampersan in the parameter */
      function changeNum(&$num){
        $num = $num + 10;
        //$num+= 10;
    
      }
    
      function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
    
      }
      $num =500;
    addFunction(10, 20);
    addFunction(10, $num);
    addFunction("10","50");
       
    
    changeNum($num);
    echo  $num .'<br/>';
    $return_value = returnProduct(10, 200);
    echo  $return_value .'<br/>';


?>

<?php require 'include/footer.php'?>