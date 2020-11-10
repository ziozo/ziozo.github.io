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
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: 500px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
table {
  border: 0px solid black;
  width: center;
  margin: 20px;
  position: relative;
  border-radius: 8px;
  background-color : white ;
}

td {
font-size: 20px;
border: 2px dotted lightblue;
width: 500px;
height: 30px;
padding: 15px;
text-align: left;
border-radius: 8px;
}
.hide{
  border: 0px solid white;
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
    <li><a  href="homepagePEF.php">home</a></li>
    <li><a href = "#"><a class="active" href="#">search</a></li>
    <li><a href = "#"><a  href="signin.php">signin</a></li>
    <li><a href = "#"><a href="signup.php">signup</a></li>
  </ul>
</nav>


</body>
</html>
<?php
// $db = mysqli_connect("localhost","root","","items") or die("could not connect"); 
$output = '';
if(isset($_POST['keywords'])) { 

  $keywords = $_POST['keywords'] ;

  //$query = mysqli_query($db,"SELECT * FROM cars WHERE carname LIKE '%$keywords%'OR company LIKE '%$keywords%' ") or die("could not search");
  //$count = mysqli_num_rows($query);
  if (false) {
    $output = 'no result';
  }
  else{
   // while ($row = mysqli_fetch_array($query)) {
      $Rname = 'camry';
      $types = 'toyota';
      $year ='2019';
      $output .= '<table><tr><td>'.$types.' '.$Rname.' '.$year.'</td><td class="hide">'.'<a href="signin.php">for more details please Sign in...<a>'.'</td></tr></table>';
   // }
  }
}
 ?>
 


   <!DOCTYPE html>

   <html>
<head>
    <meta charset="utf-8">
    <title>Search</title>


    
</head>
<body >


<form action="searchPEF.php" method="post">
<input type="text" placeholder="search..." name="keywords" autocomplete="off">


    </label>


    <input type="submit"  name="search" >
</form>
<?php print("$output");?>


</body>
</html>