<!DOCTYPE html>
<html>
<body>
<h2>Associative Array.</h2>
<!--2. Assoiative Array. Refers object-indexed collection of objects
This is where we are able to pull out data with specific name tags different from storing data in pockets in form [0], [1], [2]-->
<?php
$assoc = array("first_name" => "Jones", "last_name" => "Kilonzo");
// The " " is a key to the file.
echo $assoc["first_name"]; ?><br>
<!-- if we want to print both names-->
<?php echo $assoc["first_name"] . "  " . $assoc["last_name"]; ?>

<h2>Array Functions</h2>
<?php $numbers = array(34, 35, 2, 234, 543, 24); ?>
Count:      <?php echo count($numbers);  ?><br>
Max value:  <?php echo max($numbers);    ?><br>
Min value:  <?php echo min($numbers);    ?><br>
<pre>
Sort:         <?php sort($numbers);   print_r($numbers);    ?><br>
Reverse sort: <?php rsort($numbers);  print_r($numbers);    ?><br>
</pre>
<!--we can implode an array and print as a string-->
Implode:      <?php echo $num_string = implode(" * ", $numbers);  ?><br>
Explode:      <?php print_r(explode(" * ", $num_string));         ?><br>
<!--we should be able to check if an array contains any value. If it is TRUE it will be representedd by "1" and if FALSE, nothing-->
15 in array:  <?php echo in_array(15, $numbers); //returns T/F    ?><br>
35 in array:  <?php echo in_array(35, $numbers); //returns T/F    ?><br>

</body>
</html>
