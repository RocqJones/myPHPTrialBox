<!DOCTYPE html>
<html>
<body>
<h2>Type Juggling and Type Casting</h2>
<h3>Type Juggling</h3>
<?php $count = "2 assholes"; ?>
Type:   <?php echo gettype($count);   ?><br>
<?php $count += 3;  ?>
Type:   <?php echo gettype($count);   ?><br>
<!--it's gonna concatinate a integer, astring and a String. Then to allow the concatination it Juggles all of them into  String-->
<?php $wolves = " I have " . $count . " wolves."; ?>
Wolves: <?php echo gettype($wolves);  ?><br>

<h3>Type Casting</h3>
<!--There are two ways to do type casting
1. Function- with "settype" function
2. Using Decoleration infront of it-->
<?php settype($count, "integer");  ?>
Count: <?php echo gettype($count); // it was a String but we casted it to integer ?><br>
<br>
<?php $count2 = (String) $count;      ?>
count:   <?php echo gettype($count);  ?><br>
count2:  <?php echo gettype($count2); ?><br>
<br>
<!--we can make it more understandable by writting another code below with same concept-->
<?php $var1 = 4;  ?>
<?php $var2 = 4;  ?>
<?php settype($var1, "String");  ?>
<?php (String) $var2;           ?>
var1: <?php echo gettype($var1);  ?><br>
var2: <?php echo gettype($var2);  ?><br>

<h2>Constants</h2>
<!--They are not assigned with a "$" sign
Instead we "define()" and provide the variable-->
<?php define("MAX_WIDTH", 6985);
echo MAX_WIDTH; ?>
<br>
<?php // Can't change the value
/*MAX_WIDTH +=1
echo MAX_WIDTH;*/
// we can't even re-define constant.
// Constants are useful for saving fixed data.
 ?>

</body>
</html>
