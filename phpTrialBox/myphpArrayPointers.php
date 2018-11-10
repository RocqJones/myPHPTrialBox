<!DOCTYPE html>
<html>
<head>
  <title>Pointers</title>
</head>
<body>
<h2>Array Pointers</h2>
<?php
// Keeping pointers PHP knows which item you a dealing with now and which item you are after.
$ages = array(23,35,43,66,75,);
//current: current pointer value
echo "1: " . current($ages) . "<br />";
/* we can tell a pointer to go to the next item.
nxt: movee the pointer forward
similar to using 'continue' inside a loop
 */
 next($ages);
 echo "2: " . current($ages) . "<br />";
 next($ages);
 next($ages);
 echo "3: " . current($ages) . "<br />";
 /* we can go back by;
prev: moves the pointer backwards
  */
  prev($ages);
  echo "4: " . current($ages) . "<br />";
  // reset: moves the pointer to the first element
  reset($ages);
  echo "5: " . current($ages) . "<br />";
  // end: moves the pointer to the last element
  end($ages);
  echo "6: " . current($ages) . "<br />";
  // next: moves the pointer past the last element
  next($ages);
  echo "7: " . current($ages) . "<br />";
?>
<br>
<?php
reset($ages);
/*while loop that moves the array pointer
similar to 'foeach'*/
while($age = current($ages)){ # the expression '$age = current($ages)' is an assignment from current
  echo $age . ", ";
  next ($ages);
}
?>

</body>
</html>
