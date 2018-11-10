<!DOCTYPE html>
<html>
<body>
<h2>1. loop: while</h2>
<?php
$count = 0;
while($count <= 10){
  if($count==5){
    echo "FIVE, ";
  }else{
    echo $count . ", ";
  }
  $count++; //increament by one
}
echo "<br/>";
echo "Count: {$count}";
?>
<br>
<h2>2. loop: for</h2>
<?php
for($count = 0; $count <= 10; $count++){
  echo $count . ", ";
}
?>
<br>
<?php
for($count = 20; $count > 0; $count--){
  if($count %2 ==0){
    echo "{$count} is even. <br />";
  }else{
    echo "{$count} is odd. <br />";
  }
}
?>
<h2>3. loop: foreach</h2>
<?php
/*They take array and then loop the taste the array
It takes following statement

foreach($array as $value){      each variable inside an array will abe assigned by a value.
  statement;
}
*/
$ages = array(4,8,15,16,23,42);
foreach($ages as $age){
  echo "Age: {$age} <br />";
}
echo "<br />";
//using foreach loop in associate array
$person = array(
      "first-name"  => "Rocq",
      "last-name"   => "Jones",
      "adress"      => "254 KE",
      "city"        => "Mombasa",
      "street"      => "Mtwapa",
      "zip_code"    => "80100"
);
foreach($person as $attribute => $data){
  $attr_nice = ucwords(str_replace("_", " ", $attribute));
  echo "{$attr_nice}: {$data} <br />";
}
?>
<br>
<?php // another associate array example
$prices = array("Brand New Computer" => 2000, "1 month of rocqjones.com" => 25,
                "Lerning PHP" => null);
    foreach($prices as $item => $price){
      echo "{$item}: ";
      if(is_int($price)){
        echo "Ksh." . $price;
      }else{
        echo "priceless";
      }echo "<br />";
    }
?>

<h2>Function: continue</h2>
<h3>With for loop</h3>
<?php
/*  It involkes image of casting directory.
    exmple; if you want to send a email to all students to register units and it happens some have registered it enables us to skips to the
    next student.
*/
for($count=0; $count<=10; $count++){
//  if($count == 5) {continue; } //since there is no 5 it skips to the next value 6.
  if($count %2 == 0) {continue; }
    echo $count . ", ";
}
?>
<h3>with while loop</h3>
<?php
$count = 0;
while($count <= 10 ){
  if ($count == 5){
    $count++; //we should increament before we continue
    continue;
  } echo $count . ", ";
    $count++;
}echo "<br />";
?>
<br>
<?php
// How to work with continue with a loop inside  a loop
for($i=0; $i<=5; $i++){
  if($i %2 == 0){continue; }
  for($k=0; $k<=5; $k++){
    if($k == 3){continue; } // it will skip 3 essentially
    //if you want the loop to continue 2 loops back you write as {continue(2); }
    echo $i . "-" . $k . "<br />";
  }
}
?>
<br>
<h2>Funtion: Break</h2>
<h3>with for loop</h3>
<?php
// Break - stops all process/execution when when considered value or point is reached
for($count=0; $count<=10; $count++){
  if($count == 5){break; }
  echo $count . ", ";
}echo "<br />";
 ?>
 <br>
 <?php
 for($f=0; $f<=5; $f++){
   if($f %2 == 0){continue(1); }
   for($j=0; $j<=5; $j++){
     if($j == 3){break(2); } //breaking ou of two loops
     echo $f . "-" . $j . "<br />";
  }
}
 ?>

</body>
</html>
