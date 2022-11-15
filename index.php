
<?php
    $title  = 'index';
    include 'include/header.php'
?>

<!-- Basic HTML -->
<h1>
    Hello HTML - PHP Primer
</h1>
 <br/>
   
<?php 

echo "Hello PHP!";
echo '<br/>';
echo "second line";
?>

<?php  
$name = 'Damario Roberts';
$age = 31;
echo '<br/>';
echo $name;
echo '<h1> My Name is: '.$name.' </h1>';
echo '<h1> My age is: '.$age.' </h1>';

?>

<button type="button" class="btn btn-dark">CLICK ME! </button>
<?php
echo "<p>copyright &copy; 1999-" . date("Y") . " PHP Masterschool.com</p>";
?>
