<?php

require_once("conn.php");
{
    $Username = $_POST["Username"];
    $fname = $_POST["Fname"];
    $mname = $_POST["Mname"];
    $lname = $_POST["Lname"];
    $password = $_POST["Password"];

    $sql ="INSERT INTO `matt2`(`Username`, `Fname`, `Mname`, `Lname`, `Password`) VALUES ('fname','mname','lname','password')";
    $result = mysqli_query($con,$sql);
}
if($result)
{
    header("refresh:0; index.php");
}
{
    else{
        echo "error inserting data!"
    }
}
    else{
        header("code not working");
    }
?>