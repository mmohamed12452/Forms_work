<?php
$myconnection = mysqli_connect('localhost','root', '', 'school');

if($myconnection === false)
{
    die("error connecting to the database");
}


?>