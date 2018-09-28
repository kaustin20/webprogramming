<!DOCTYPE html>
<html>
<body>

<?php
    
    
    echo "<p>Good morning Dave,";
    echo "said Hal</p>";
    ?>
<?php
$radius = 2.0;
//$pi = 3.14159;
$area = pi()* $radius * $radius;

echo("<BR>area = ");
echo($area);
?>

<?php
    
    $F = -459.76;
    
    $celFahr = 5/9 * ($F-32);
    print "".round($celFahr, 2).  "C";
    
    
    ?>
<?php
$a = "madam";

$b =  strrev($a);

$string_reverse = str_split($b);

$palin = '';

foreach($string_reverse as $value){
    
    $palin.= $value;
}

print $palin;

if($a == $palin){
    
    print "<br>Palindrome";
    
} else {
    
    print "<br>Not Palindrome";
    
}
?>
</body>
</html>
