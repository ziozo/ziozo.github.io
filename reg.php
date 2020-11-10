<?php
session_start();
header('location:signin.php');

// $con = mysqli_connect('localhost','root');

// mysqli_select_db($con,'userregistration');

$email=$_POST['email'];
$pass=$_POST['password'];
$name=$_POST['Username'];
$phone=$_POST['PhoneNumber'];
$_SESSION['email']=$email;
$_SESSION['PhoneNumber']=$phone;


// $s= "select * from usertable where email='$email'";
// $result = mysqli_query($con , $s);


// $num = mysqli_num_rows($result);

if(false){
    echo "email already exist";
}
else{
        // $reg="insert into usertable(email,Username,PhoneNumber, password) values('$email','$name','$phone','$pass')";
        // mysqli_query($con,$reg);
        echo "registraiton successful" ;
    }

?>