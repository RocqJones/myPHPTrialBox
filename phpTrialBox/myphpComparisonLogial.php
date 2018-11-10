<!DOCTYPE html>
<html>
<body>
  <h2>Comparison and Logical Operators</h2>
  <?php /* Comparison operators
  equal(==)   identical(===)    compare(<>, <=, >=, <>)   Not equal to(!=)    not identical(!==)
  Logical operators
  and(&&)   or(||)    not(!)*/
  $a=5; $b=3; $c=7; $d=20;
  if(($a > $b) && ($c < $d)){
    echo "$a is larger than $b AND ";
    echo "$c is smaller than $d.";
  }
  ?>
  <br>
  <?php
  $a1=8; $b1=6; $c1=7; $d1=20;
  if(($a1 > $b1) || ($c1 > $d1)){ // OR means either one is true it will display output.
    echo "$a1 is larger than $b1 OR ";
    echo "$c1 is larger than $d1.";
  }
  ?>
  <br>
  <?php
  //we can set a value
  //$e=100;
  if(!isset($e)){
    $e = 200;
  }echo $e;
  ?>
  <br>
  <?php
  // don't reject zero or 0.0 using "empty"
  $quantity =" ";
  if(($quantity) && !is_numeric($quantity)){
    echo "You must enter quantity.";
  }
  ?>


</body>
</html>
