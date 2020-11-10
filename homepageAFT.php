
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:homepagePEF');
}
?>
<html lang="en">
<head>
    <style>
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
img{
    width: 100% ;
    opacity:1;
    position:absolute;
}
a.active ,a:hover{
background: #1b9bff;
transition: .5s;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage s</title>
</head>
<html>
<head>

</head>
<body style="background-image: url('back1.jpg');background-repeat:no-repeat;
background-size:100% 91.5%;background-attachment:fixed;background-position:bottom;">

<nav>
  <label class = "logo">buy and sell</label> 
  <ul>
    <li><a class ="active" href = "#">home</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="manageCars.php">sell item</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="searchAFT.php">search</a></li>
    <li><a href = "#"><a  href="account.php">account</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signout.php">signout</a></li>
  </ul>
</nav>



</body>
</html>