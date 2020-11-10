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
.mydiv {
  display:none;
  width:80%;
  background-color: #c7ff75;
  color: black;
  border: 2px solid green; /* Green */
  border-radius: 8px;
  font-size: 15px;
  margin-left:10%;
  margin-top:2px;
  text-align:left;
  padding:5px;
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
img {
  border-radius: 8px;
  width: 100%;
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
td.im {

border: 0px solid lightblue;
width: 355px;
padding: 15px;
text-align: center;
background-color:lightblue;

}
p.title{
  color:darkblue;
}
button{
  padding: 3px;
  display:inline-block;
  margin-left: 120px;
  margin-top: 3px;
}

.button1 {
  width:50%;
  background-color: pink;
  color: black;
  border: 2px solid red; /* Green */
  border-radius: 8px;
  font-size: 15px;
}
.button1:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2 {
  display:none;
  width:50%;
  background-color: lightgreen;
  color: black;
  border: 2px solid green; /* Green */
  border-radius: 8px;
  font-size: 15px;
}
.button2:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.cont{
  border: 2px dotted pink;
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
    <li><a class="btn btn-outline-primary" href="homepageAFT.php">home</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="manageCars.php">sell item</a></li>
    <li><a href = "#"><a class="active" href="searchAFT.php">search</a></li>
    <li><a href = "#"><a  href="account.php">account</a></li>
    <li><a href = "#"><a class="btn btn-outline-primary" href="signout.php">signout</a></li>

  </ul>
</nav>
<script>
function myFunction() {
  document.getElementById("contact").setAttribute("style", "display:inline-block"); 
  document.getElementById("info").setAttribute("style", "display:inline-block"); 
}
</script>

</body>
</html>
<?php
// $db = mysqli_connect("localhost","root","","items") or die("could not connect"); 
$output = '';
if(isset($_POST['keywords'])) { 

  $keywords = $_POST['keywords'] ;

  // $query = mysqli_query($db,"SELECT * FROM cars WHERE carname LIKE '%$keywords%'OR company LIKE '%$keywords%' ") or die("could not search");
  // $count = mysqli_num_rows($query);
  if (false) {
    $output = 'no result';
  }
  else{
    //while ($row = mysqli_fetch_array($query)) {
      $car = 'camry' ;
      $companyofcar = 'toyta';
      $carnumber = '3534535';
      $imgg = 'camry.jpg';
      $year = '2015';
      $pr = '234234';
      $mileg = '34553';
      $desc = 'jdfgjkdfnkjfdnjdfbnjdfnbkjdfbnkjdfbnkjdfb';

      $em='abdulrahman.alsarrani@gmail.com';
      $ph='0505455387';






      $output .= '<table>'.
      '<tr><td class="im" rowspan="3" ><img src="images/'.$imgg.'"/></td><td><p class="title">Car name : </p>'.
      $companyofcar.' '.$car.' '.$year.
      '</td><td><p class="title">Price : </p>'.$pr.
      '$</td></tr><tr><td rowspan="2"><p class="title">Descriprion : </p>'.
      $desc.'</td><td><p class="title">Mileage : </p>'.
      $mileg.
      ' miles</td></tr><tr><td class="cont">'.'<button id="contact" class="button1" onclick="myFunction()" type="submit" >interest on it</button>'.'
      <div class="mydiv" id="info">Seller phone: '.$ph.'</br> Seller mail: '.$em.'</div>
     </td></tr>
      </table>';
      // <form action="contactSeller.php" method="post"></form> <button id="contact" class="button2" type="submit">contact the seller</button>

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
<body>


<form action="searchAFT.php" method="post">
<input type="text" placeholder="search..." name="keywords" autocomplete="off">


    </label>


    <input type="submit" name="search" >
</form>

<?php echo("$output");?>



</body>
</html>