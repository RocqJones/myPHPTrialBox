<!DOCTYPE html>
<html>
<head>
<title>Functions</title>
</head>
<body>
<?php
function say_hello(){
  echo "Hello RocqJones!";
}//we need to call the function.
say_hello();
echo "<br />";

function say_hello2($word){
  echo "Finessin' Jones, {$word}! <br />";
}say_hello2("Money Over Bitches and marijuana");
?>
<h2>Funtion: Argument</h2>
<?php
/*functios with more than one funtion
    str_replace("quick", "super-fast", $third); -----> This is built in php function which is predefined
If we define our own it will be 3 arguments as defines in syntax below;
    function str_replace($find, $replace, $target){
    ...;
  }
    */
    $name = " Jones Mbindyo";
    function better_hola($greeting, $target, $punct){
      echo $greeting . " " . $target . $punct . "<br />";
    }
    better_hola("What's up", $name, "!");
    better_hola("Greetings", $name, "!!!")
?>

<h2>Function: Return Values</h2>
<?php
function add($val1, $val2){
  $sum = $val1 + $val2;
  return $sum; //this is because "$sum" outside function cannot be accessed
}
  $result1 = add(3,4);
  $result2 = add(5,$result1);//will sum previous sum to sum2
  echo $result2;
  echo "<br />";
?>
<br>
<?php
  function chinese_zodiac($year){
    switch(($year - 4) % 12){
      case 0:    return  'Chihauhau';
      case 1:    return  'Bitches';
      case 2:    return  'Tiger';
      case 3:    return  'Rabbit';
      case 4:    return  'Dragon';
      case 5:    return  'Snake';
      case 6:    return  'Horse';
      case 7:    return  'Goat';
      case 8:    return  'Monkay';
      case 9:    return  'Pussy';
      case 10:   return  'Lion';
      case 11:   return  'Dick';
    }
  }
  $zodiac = chinese_zodiac(2018);
  echo "2018 is year of the, {$zodiac}.<br />";

  $zodiac = chinese_zodiac(2021);
  echo "2021 is year of the, {$zodiac}.<br />";

  echo "2026 is year of the," . chinese_zodiac(2026) . ".<br />";

?>
<br>
<h2>Functions: Multiple Returns</h2>
<?php
function add_subt($val1, $val2){
  $add = $val1 + $val2;
  $subt = $val1 - $val2;
  //return $add; //but how can we return $subt too?
  return array($add, $subt);
}
//$result = add_subt(10,8);
//echo "The sum will be: {$result}"; // You notice we can only return one one result in a function.
//the problem can be solved by array.
$result_array = add_subt(10,8);
echo "The sum:" . $result_array[0] . "<br />";
echo "The sub:" . $result_array[1] . "<br />";
echo "<br />";
//another way is by listing and is awesome
list($add_result, $subt_result) = add_subt(45,38);
echo "sum:" . $add_result . "<br />";
echo "sub:" . $subt_result . "<br />";
?>
<h2>Function: Scope</h2>
<?php
/* Variable Scope - It referes a division between the varibales inside a function and outside a function.
A variable isn't accessible all the time but only accessible within its contest.
A varible created inside a 'function' is by default only accessible in the function
So, a 'function' is the "variballes' scope"
There are two scopes
    1. Local scope.
    2. Global scope- allows to bring in globally scoped variables for use inside a local scope.*/
    $bar = "outside";  // Global Scope

    function foo(){ //the "$bar" here is not the same they have different scope.
      global $bar;
      if (isset($bar)){
        echo "foo: " . $bar . "<br />";
      }
      $bar = "inside"; // Local Scope
    }

    echo "1:" . $bar . "<br />";
    foo();
    echo "2:" . $bar . "<br />";
?>
<h2>Function: Default</h2>
<?php
/*function paint($color){
  return "The color of the room is {$color}. <br />";
}
echo paint("blue");
echo "<br />";*/
//or
function paint($room="office", $color="red"){
  return "The color of the {$room} is {$color}. <br />";
}
echo paint();
echo paint("bedroom", "blue");
echo paint("spotlight", null);
?>

</body>
</html>
