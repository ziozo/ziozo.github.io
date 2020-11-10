<?php
session_start();
header('location:manageCars.php');
#header('location:signin.php');
// function debug_to_console($data) { 
//     $output = $data; 
//     if (is_array($output)) 
//         $output = implode(',', $output); 
//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }
//$con = mysqli_connect('localhost','root');

//mysqli_select_db($con,'items');
$cnum=$_POST['carnum'];
$comp=$_POST['company'];
$cn=$_POST['carname'];
$mod=$_POST['model'];
$pri=$_POST['price'];
$od=$_POST['odo'];
$desc=$_POST['description'];

// $target="images/".basename($_FILES['imag']['name']);
// $image = $_FILES['imag']['name'];
// move_uploaded_file($_FILES['imag']['tmp_name'],$target);
// $s= "select * from cars where carnum='$cnum'";
// $result = mysqli_query($con , $s);

// $num = mysqli_num_rows($result);

if(false){
    echo "Car Number already exist";
}else{
        // $reg="insert into cars(email,phonenumber,carnum,company,carname, imag,model,price,odo,description) values('$_SESSION[email]','$_SESSION[PhoneNumber]','$cnum','$comp','$cn','$image','$mod','$pri','$od','$desc')";
        // mysqli_query($con,$reg);
        header('location: manageCars.php');
    }
// if(move_uploaded_file($_FILES['imag']['tmp_name'],$target)){
//     $msg="image uploded successfully";
// }else{
//     $msg="image didnt upload";

// }
?>