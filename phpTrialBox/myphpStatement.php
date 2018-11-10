<!DOCTYPE html>
<html>
<body>
<h2>If statement</h2>
<!--The if statement has an expression and a statement. The syntax is as below
if(expression){
  statement;}
The expression evaluate T/F in boolean result-->
<?php
$a= 4; $b=2;
if($a > $b){
  echo "$a is greater than $b.";
}
?>
<?php //Only for welcoming new users in the websites
$new_user=true;
if($new_user){
  echo "<h1>Welcome!</h1>";
  echo "<p>We are glad you decided to join us.</h2>";
}
?>
<br>
<?php // can't devide by zero
$num1=20; $num2=4;
if($num2 > 0) {
  $result = $num1 / $num2;
  echo "Result: {$result}";
}
?>
<h2>If else</h2>
<?php
$a=343;  $b=32;
if($a < $b){
  echo "$a is less than $b.";
}
elseif($a > $b){
  echo "$a is greater than $b.";
}
else{
  echo "$a is equal to $b.";
}
?>
<h2>Switch Statement</h2>
<?php
$ee = 2;
switch($ee){ // switch statement continues to match all the inputs below the actual match . To avoid this you "break" after each case.
  case 0:
    echo "ee is equal to 2.<br />";
    break;
  case 1:
    echo "ee is eqaul to 2.<br />";
    break;
  case 2:
    echo "ee is eqaul to 2.<br />";
    break;
  case 3:
    echo "ee is equal to 2.<br />";
    break;
  default:
    echo "ee is not equal to 0, 1, 2, 3<br />";
    break;
}
?>
<br>
<p>Chinese Zodiac</p>
<?php
$year =2018;
switch(($year - 4) % 12){
  case 0:    $zodiac = 'Rat';        break;
  case 1:    $zodiac = 'Ox';         break;
  case 2:    $zodiac = 'Tiger';      break;
  case 3:    $zodiac = 'Rabbit';     break;
  case 4:    $zodiac = 'Dragon';     break;
  case 5:    $zodiac = 'Snake';      break;
  case 6:    $zodiac = 'Horse';      break;
  case 7:    $zodiac = 'Goat';       break;
  case 8:    $zodiac = 'Monkay';     break;
  case 9:    $zodiac = 'Pussy';      break;
  case 10:   $zodiac = 'Lion';       break;
  case 11:   $zodiac = 'Dick';       break;
}
echo"{$year} is the year of the {$zodiac}. <br />"
?>
</body>
</html>
