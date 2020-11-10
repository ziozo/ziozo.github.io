<DOCTYPE html>
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
a.active ,a:hover{
background: #1b9bff;
transition: .5s;
}
        body{
    font-size: 19px;
}
table{
    width: 50px;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
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
.btn{
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5f9ea0;
    border: none;
    border-radius: 5px;
}
.msg{
    margin: 30px auto;
    padding: 10px;
    border-radius: 10px;
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
        </style>
<title>cars page</title>
</head>
<body style="background-image: url('back1.jpg');background-repeat:no-repeat;
background-size:100% 100%;background-attachment:fixed;background-position:bottom;">
<nav>
  <label class = "logo">buy and sell</label> 
  <ul>
    <li><a  href = "#"><a  href="homepageAFT.php">home</a></li>
    <li><a href = "#"><a class="active" href="manageCars.php">sell item</a></li>
    <li><a href = "#"><a  href="searchAFT.php">search</a></li>
    <li><a href = "#"><a  href="account.php">account</a></li>
    <li><a href = "#"><a  href="signout.php">signout</a></li>
  </ul>
</nav>


  
<form method="post" action="addcars.php" enctype="multipart/form-data">
    <div class ="input-group">
        <label>Car Number</label>
        <input type="number" name="carnum">
</div>
<div class ="input-group">
        <label>Car Company </label>
        <input type="text" name="company">
</div>
<div class ="input-group">
        <label>Car Name</label>
        <input type="text" name="carname">
</div>
<div class ="input-group">
        <label>Car Model</label>
        <input type="number" name="model">
</div>
<div class ="input-group">
        <label>Price</label>
        <input type="number" name="price">
</div>
<div class ="input-group">
        <label>ODO</label>
        <input type="text" name="odo">
</div>
<div class ="input-group">
        <label>Description</label>
        <input type="text" name="description">
</div>
<div class ="input-group">
        <label>Car's picture</label>
        <input type="file" name="imag">
</div>


<div class ="input-group">
    <button type="submit" name = "save" class ="btn" onclick="success()" >save</button>
</form>
</body> 
<script>
function success(){
    alert('item added');
}
</script>

</html>