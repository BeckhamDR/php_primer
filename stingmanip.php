<?php
$title  = 'stingmanip';
include 'include/header.php'

?>

    <h1>PHP String Manipulation </h1>
    <?php
    //concatination of strings
    $phrase1 ="Student who came late";
    $phrase2 ="in class, stand with rock";
    $name ="trevoir williams";
    echo $phrase1." ,named Mary, ". $phrase2;
   echo '<br/>';
   echo '<hr/>';
//string transformation

echo'uppercase, first letter:'.ucfirst($name).' <br/>';
echo 'uppercase, first letter of each word:' .ucwords($name).' <br/>';
echo 'uppercase:' .strtoupper($name).' <br/>';
echo 'uppercase:' .strtolower("THIS WAS ALL UPPERCASE").' <br/>';
echo '<hr/>';
echo 'Repeat string:'.str_repeat('a',10).'<br/>';
echo 'Repeat string:' .strtoupper(str_repeat('a',10)).'<br/>';
echo    'get a sub string:' .substr($name,5,10).' <br/>';
echo 'get position of string:' .strpos($name,'w').' <br/>';
//return null
//echo 'get position of string:' .strpos($combine,'z').' <br/>';
echo 'Find character "R":   '.strchr($name, 'R').'<br/>';
echo 'Find character "r": '.strchr($name,'r').'<br/>';  
echo 'Find character "s": '.strchr($name,'s').'<br/>';
echo 'Find character "e": '.strchr($name,'e').'<br/>';

echo 'find length of string:    ' . strlen($name).' <br/>';
echo 'without trim: ' . "A" ."B C D " . "E" . '<br/>';
echo 'trim spaces on both sides: ' ."A" .trim(" B C D ") . "E" . '<br/>';
echo 'trim spaces on both left: ' ."A" .ltrim(" B C D ") . "E" . '<br/>';
echo 'trim spaces on both right: ' ."A" .rtrim(" B C D ") . "E" . '<br/>';
echo 'Replace string with another: ' .str_replace("stand", "sit",$phrase2) . '<br/>';


?>

<?php require 'include/footer.php'?>