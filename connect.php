<?php
$server="localhost";
$username="root";
$password="";
$dbname="shop";

$con=mysqli_connect($server,$username,$password,$dbname);
if($con)
{
    echo "Success";
}
else
{
    mysqli_connect_error($con);
}
?>