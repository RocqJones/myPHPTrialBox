<!DOCTYPE html>
<html>
<body>
<h2>Boolean</h2>
<?php
// A boolean is simply a True of False value
// They are very useful especially working with conditionals
$result1 = true;
$result2 = false;
?>
result1:  <?php echo $result1;  ?><br>
result2:  <?php echo $result2;  ?><br>

<h2>NULL and empty</h2>
<?php
$var1 = NULL;
$var2 = "";
?>
var1 NULL? <?php echo is_NULL($var1);  ?><br>
var2 NULL? <?php echo is_NULL($var2);  ?><br>
var3 NULL? <?php echo is_NULL($var3);  ?><br>
<br>
var1 is set? <?php echo isset($var1);  ?><br>
var2 is set? <?php echo isset($var2);  ?><br>
var3 is set? <?php echo isset($var3);  ?><br>
<br>
<!--EMPTY. It will detet an empty string in case the string of a field is left unfilled
Empty cannot contain "0" value so it will return TRUE(means it is empty)-->
<?php $var3 = "0"; ?>
var1 empty? <?php echo empty($var1);  ?><br>
var2 empty? <?php echo empty($var2);  ?><br>
var3 empty? <?php echo empty($var3);  ?><br>

</body>
</html>
