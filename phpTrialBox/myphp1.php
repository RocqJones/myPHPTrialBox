<!DOCTYPE html>
<html>
<head>
  <title>ROCQJONES on php</title>
</head>
<body>
  <!-- outputting dynamic text on console/browser -->
<?php echo "ROCQJONES is learning php for real."; ?><br>
<?php echo "Hola"." Jones."; ?>
<?php echo 55 + 62; ?>

<?php
/*
REQUEST RESPONSE CYCLE
-How browser and webserber communicates.
1. Browser makes a request from a server, after you type domain of webserver "https://....com" which is the local host.
2.Software needs to be there called "apache" . It sees the request and then looks for a file into file system to respond to the request
*/

//INSERTTING COMMENTS
#Another forms

# VARIABLES - Symbolic respresentation of a value.
/*
- variables a declared with "$"
- followed by letter or "_" and no space after "$"
example below
*/
echo "<br>";
$var1 = 10;
echo "The variable will be: " . $var1;
echo "<br>";
#STRINGS
$greeting = "Hola";
$target = "Jones";
$phrase = $greeting . " " . $target;
echo $phrase;
echo "<br>";
?>
<?php
echo "$phrase again";
?>
<h2>String functions</h2>
<?php
$first = "The quick brown fox";
$second = " jumped over the lazy dog";

$third = $first;
$third .= $second;
echo $third;
?><br>
Lowercase:        <?php echo strtolower($third);  ?><br>
Uppercase:        <?php echo strtoupper($third);  ?><br>
Uppercase first:  <?php echo ucfirst($third);     ?><br>
Uppercase words:  <?php echo ucwords($third);     ?><br>
<br>
Length:             <?php echo strlen($third);                              ?><br>
Trim:               <?php echo "A" . trim(" B C D ") . "E";                 ?><br>
Find:               <?php echo strstr($third, "brown");                     ?><br>
Replace by string:  <?php echo str_replace("quick", "super-fast", $third);  ?><br>
<br>
Repeat:         <?php echo str_repeat($third, 2);     ?><br>
Make substring: <?php echo substr($third, 5, 10);     ?><br>
Find position:  <?php echo strpos($third, "brown");   ?><br>
Find character: <?php echo strchr($third, "z");       ?><br>

<h2>Math function with Integer</h2>
<?php
$var3 = 3;
$var4 = 4;
?>
Basic Math: <?php echo ((1+2+$var3) * $var4) / 2 - 5; ?><br>
<br>
Absolute value:   <?php echo abs(0 - 300);    ?><br>
Exponential:      <?php echo pow(2,8);        ?><br>
Square root:      <?php echo sqrt(100);       ?><br>
Modulo:           <?php echo fmod(20,7);      ?><br> <!--will 20 devide by 7 and display the remainder-->
Random:           <?php echo rand();          ?><br>
Random (min,max)  <?php echo rand(1,10);      ?><br>
<br>

+=: <?php $var4 += 4; echo $var4; ?><br>
-=: <?php $var4 -= 4; echo $var4; ?><br>
*=: <?php $var4 *= 3; echo $var4; ?><br>
/=: <?php $var4 /= 4; echo $var4; ?><br>
<br>

<h2>float</h2>
<?php echo $float = 3.14;  ?><br>
<?php echo $float + 7;     ?><br>
<?php echo 4/3;            ?><br>
<br>
Round:    <?php echo round($float, 1);  ?><br>
Ceiling:  <?php echo ceil($float);      ?><br>
Floor:    <?php echo floor($float);     ?><br>
<br>

</body>
</html>
