<!DOCTYPE html>
<html>
<style>
h1{	padding: 8px 20px;
	margin: 10px 0;
    }
input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #0082e6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  margin-left: 500px;
  border-radius: 4px;
  cursor: pointer;
}



input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

div {
  border-radius: 5px;
  padding: 20px;
}
h1{
   background: #0082e6;
   color:#ffffff;
   text-align:center;
    height: 80px;
    width: 100%;
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
    <li><a class ="#"><a class="btn btn-outline-primary" href="homepagePEF.php">home</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="searchPEF.php">search</a></li>
    <li><a href = "#"><a class="active" href="signin.php">signin</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signup.php">signup</a></li>
  </ul>
</nav>
</style>
<body>
<?php
if(isset($_GET['error'])) {
  echo($_GET['error']);
}
?>
<div>
  <form action="validation.php" method="post"><!--Action-->
<input type ="email" placeholder="email" name ="email" id="email" required>
<input type ="password" placeholder="password" name ="password" id="password" required>

    <input type="submit" value="Enter">
  </form>
</div>


</body>
</html>
