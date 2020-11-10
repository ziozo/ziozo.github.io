<?php session_start();?>
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
    <li><a  href="homepageAFT.php">home</a></li>
    <li><a href = "#"><a  href="manageCars.php">sell item</a></li>
    <li><a href = "#"><a  href="searchAFT.php">search</a></li>
    <li><a href = "#"><a class="active" href="account.php">account</a></li>
    <li><a href = "#"><a  href="signout.php">signout</a></li>

  </ul>
</nav>

</body>
</html>
   <!DOCTYPE html>

   <html>

<body>


<table>
      <tr><td class="im" rowspan="3" ><img src="images/camry.jpg"/></td>
      <td><p class="title">Car name : </p>toyta camry 2015</td>
      <td><p class="title">Price : </p>234234</td></tr>
      <tr><td rowspan="2"><p class="title">Descriprion : </p>very good car</td>
      <td><p class="title">Mileage : </p>34553 miles</td></tr>  
      <tr><td class="cont">
      <button name="update" type = "submit" class="btn" onclick="update()" >Modify</button>
      <button name="delete" type = "submit" class="btndel" onclick="del()" >delete</button>
     </td></tr>
      </table>




</body>
<script>
function update() {
location.replace("update.php")
}
function del(){
    alert('item deleted');
}
</script>

</html>
<?php
    

    if(isset($_POST['update'])) { 
     
      header('location:update.php');
     
  }
?>