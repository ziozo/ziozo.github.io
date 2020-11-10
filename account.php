<?php session_start();?>
<html>
<head>
<title> update </title>
<style>
        body{
    font-size: 19px;
}
tr{
    border-bottom: 1px solid #cbcbcb;
}
th , td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover{
    background: #f5f5f5;
}
form{
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px;
    border: 1px solid #bbbbbb;
    border-radius: 5px;
    background-color : white ;

}
.input-group{
    margin: 10px 0px 10px 0px;
}
.input-group label{
display: block;
text-align: left;
margin: 3px;
}
.input-group input {
height: 30px;
width: 93%;
padding: 5px 10px;
font-size: 16px;
border-radius: 5px;
border: 1px solid grey;
}
.btndel{
    padding: 10px;
    font-size: 15px;
    color: white;
    background: red;
    border: none;
    border-radius: 5px;
}
.btn{
    padding: 10px;
    font-size: 15px;
    color: white;
    background: orange;
    border: none;
    border-radius: 5px;
}
*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;

}
body{
    font-family: montserrat;

}
nav{
    background: #0082e6;
    height: 80px;
    width: 100%;
}
label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;

}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 5px;
}
nav ul li a{
    color: white;
    font-size:  24px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active ,a:hover{
background: #1b9bff;
transition: .5s;
}



</style>
</head>
<body style="background-image: url('back1.jpg');background-repeat:no-repeat;
background-size:100% 100%;background-attachment:fixed;background-position:bottom;">
<nav>
  <label class = "logo">buy and sell</label> 
  <ul>
    <li><a  href = "#"><a  href="homepageAFT.php">home</a></li>
    <li><a href = "#"><a  href="manageCars.php">sell item</a></li>
    <li><a href = "#"><a  href="searchAFT.php">search</a></li>
    <li><a href = "#"><a class="active" href="#">account</a></li>
    <li><a href = "#"><a  href="signout.php">signout</a></li>
  </ul>
</nav>

<form action="" method="POST">
<div class ="input-group">
        <label ><b>User Name</b></label>
        <label> Abdulrahman Alsarrani</label>
        <!-- <input type="text" name="username"> -->
</div>
<div class ="input-group">
        <label><b>Email</b></label>
        <label> abdulrahman.alsarrani@gmail.com</label>

        <!-- <input type="text" name="Email"> -->
</div>
<div class ="input-group">
        <label><b>Phone Number</b></label>
        <label> 0505455387</label>

        <!-- <input type="number" name="Pnum"> -->
</div>
<div class ="input-group">
        <label><b>Password</b></label>
        <label> *****6 </label>

        <!-- <input type="text" name="pass"> -->
</div>


<div class ="input-group">
    <button type="submit" name = "Modify" class ="btn">Modify or delete</button>
    </div>
    <div class ="input-group">
    <button type="submit" name = "MyOffers" class ="btndel">My Offers</button>
    </div>
  
    </html>
    <?php
    // $con = mysqli_connect('localhost','root');

    // mysqli_select_db($con,'items');

    if(isset($_POST['Modify'])) { 
        // $username = $_POST['username'];
        // $vemail=$_SESSION['email'];
        header('location:accountmodification.php');
       // $query = "update cars set company='$_POST[company]',carname='$_POST[carname]',model='$_POST[model]',price='$_POST[price]',odo='$_POST[odo]',description='$_POST[description]',imag='$_POST[imag]' where carnum='$_POST[carnum]'and email = '$_SESSION[email]' ";
      //  $result = mysqli_query($con , $query);
    }
       
    if(isset($_POST['MyOffers'])) {
        // $query = "delete from usertable where username='$_POST[username]'";
        header('location:myitems.php');

    }

?>
