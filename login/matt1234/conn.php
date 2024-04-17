<?php
$con = mysqli_connect("localhost","root","","matt1");

if(!$con)
{
    die("connection error");
}
else{
    echo"CONNECTION SUCCESFUL!!";
}

?>