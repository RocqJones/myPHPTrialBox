<!DOCTYPE html>
<html>
<body>
  <h2>Array</h2>
<p>An ordered, integer-indexed collection of objects</p>
<?php
#an array can contain a String,number and also another Array.
$numbers = array(34, 35, 532, 234, 543, 24);
echo $numbers [2];
?>
<br>
<?php
$mixed = array(25, "dog", "fox", array(56, "x", 56, "z"));
echo $mixed [2]; ?><br>
<?php echo $mixed [3]; ?><br>
<!--We use "print_r" inorder to show out the array class for developer only for debbuging purposes means "print readable"-->
<?php echo print_r($mixed); ?><br>
<!-- we can also make it more readabke by using html tags "<pre>"-->
<!--<pre>
<?php// echo print_r($mixed); ?>
</pre>-->
<br>
<?php
#if we want to pull out data stored inside another array as above we use the following command
echo $mixed[3] [1]; ?><br>
<?php
# we can put things into array not just reading array declared in a pocket as follows
$mixed[2] = "Jones Mbi";
$mixed[4] = "Aggie J";
$mixed[] = "Honerty G"
?>
<pre>
<?php echo print_r($mixed); ?>
</pre>



</body>
</html>
