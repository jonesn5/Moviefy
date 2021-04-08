<?php
$user="username";
$password="password";
$con=mysqli_connect("localhost",$user,$password, "database1");
if(!$con)
{
echo "could not connect" ;
}
else
{
echo "connected";
}
?>