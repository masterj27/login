<?php
session_start();
include "conn.php";

if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `matt2`(`Username`, `Password`) VALUES ('Fname','password')"
    $result = mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr>
<head>
    <meta charset-"utf-8">

    <title></title>

</head>
<body>
    <center>
        <br><br>
        <label>username</label>
        <input type="text" name=""disable=""placehoder="AUTO GENERATED"><br><br>
        <label>name</label>
        <br><br>
        <label>password</label>
        <input type="text" name=""disable=""placehoder="Input password please"><br><br>
        <label>password</label>
        <input type="password" name="password" placeholder="input your password here!"><br><br>
        <input type="submit" name="submit" value="REGISTER"> <br><br>
        <a href="index.php">BACK</a>
</from>
</center>
</body>
</html>
