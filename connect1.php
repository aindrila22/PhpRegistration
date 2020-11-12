<?php

session_start();
header('location: student-login.php');


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'login');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$ename = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from registerform where email = '$ename' && password = '$pass' ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"email/password already taken";
}else{
    $reg = "INSERT INTO registerform(firstname,lastname,email,password) VALUES ('" . $fname . "','" . $lname . "','" . $ename . "','" . $pass . "')";
    mysqli_query($con, $reg);
    echo"Registration Successful";
}
?>