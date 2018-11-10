<?php

$servername='localhost';
$username='root';
$password='';
$db='mydb1';

$con=mysqli_connect($servername,$username,$password,$db);//con is var1
if($con)
  echo 'connected successfully to mydb1 database'; //checks if connection is established seccessfuly

$sql="INSERT INTO mytable1 (username,password,email) values ('Jose',12345,'anymail@gmail.com')";//sql is var2
$query=mysqli_query($con,$sql); //query is var3 which executes line 12
if($query)
  echo 'data inserted successfully';

?>
