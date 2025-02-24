<?php
session_start();
$connection=mysqli_connect("localhost","root","","project");
if($connection){
    echo"";
}
else{
    echo"DB not connected";
}
?>