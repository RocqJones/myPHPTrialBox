<!DOCTYPE html>
<html>
<head>
<title>Debugging</title>
</head>
<body>
<?php
/*COMMON PROBLEMS
-No output at all(try to access a PHP page <?php phpinfo(); ?>)
-Make sure display errors is ON and configured
-In php you can debug using these code.
    ini_set('display_errors', 'On');
    error_reporting(E_ALL); //E_ALL is a constant.

    //E_STRICT added in PHP 5
    //but not in E_ALL until PHP 5.4
    error_reporting(E_ALL & ~E_STRICT);
    //Use ~ for "omit"
    error_reporting(E_ALL & ~E_DEPRECATED);
    //return the current level.
    error_reporting();

    -make sure ERROR REPORTING is off when ya launch a  website to the world to avoid because it will be a major security failure.

    DEBUGGING AND TROUBLESHOOTING
    echo $variable; // returns a vaiable value o html page
    print_r($array); // works with arrays to print readable arrays
    gettype($variable); // returns types of a variable while working with String or In
    var_dump($variable); // this takes everything it knows about a variable and dump it out. It returns  a type, a value and also array.
    get_defined_vars(); // It will return an array of all defined variables that PHP knows about at the moments.
    debug_backtrace(); //That's gonna show a backtrace. Returns as an array.
                          Backtrace/Stacktrace - Is a report of a function calls that have been made to lead up certain points in time
                                                during execution of a program.
*/
$number = 99; $string = "Bug?";
$array = array(1 => "Homepage", 2=> "About Us", 3 => "Services");

  var_dump($number);
  var_dump($string);
  var_dump($array);
?>
<h3>testing 'print_r</h3>
<pre>
  <?php
  //get_defined_vars();//nothing happens so we use it with 'print_r'
  print_r(get_defined_vars());
  ?>
</pre>
<br>
<h3>testing for var_dumb + backtrace</h3>
<?php
  var_dump(debug_backtrace()); //will return empty as;
  echo "<br />";
      /*array (size=0)
        empty*/
  //now we bring a function
  function say_hola_to($word){
    echo "Hola {$word}!<br />";
    var_dump(debug_backtrace());
  }
  say_hola_to('Everyone');

  /*Third Party-tools for php DEBUGGING
  1. Xdebug(http://xdebug.org)
  2. DBG(http://www.php-debugger.com/dbg)
  3. FirePHP(http://www.firephp.org)
  */
?>

</body>
</html>
